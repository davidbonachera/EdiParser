<?php
/**
 * Created by PhpStorm.
 * User: Enigma
 * Date: 16/3/2017
 * Time: 4:59 PM
 */

namespace Boda\EdiParserBundle\Parser;

use Boda\EdiParserBundle\EdiParserInterface;

class PositionalEdiParser implements EdiParserInterface
{
    /**
     * @var array
     */
    private $errors = [];

    public function parse(array $template = [], array $rows = [], $identifierSize=5)
    {
        if (empty($template)) {
            $this->errors["template"] = "No template given";
            return false;
        }
        // Init array
        $my_array = [];
        // SubBody counter
        $j = 0;
        $my_array["header"] = $this->formatLine($template["header"], $rows[0]);
        for ($i = 1; $i < count($rows) - 1; $i++) {
            if(is_array($template["body"])) {
                foreach ($template["body"] as $index => $templateSubBody) {
                    if (substr($rows[$i], 0, $identifierSize)==$index) {
                        $j++;
                        $my_array["body"][$j][]= $this->formatLine($templateSubBody,$rows[$i]);
                        continue;
                    }
                    if(is_array($templateSubBody)) {
                        foreach ($templateSubBody as $index2 => $templateSubBody2) {
                            if(substr($rows[$i], 0, $identifierSize)==$index2) {
                                $my_array["body"][$j][] = $this->formatLine($templateSubBody2,$rows[$i]);
                            }
                        }
                    }
                }
                continue;
            }
        }
        $my_array["footer"] = $this->formatLine($template["footer"], $rows[count($rows) - 1]);
        return $my_array;
    }
    public function formatLine($template, $data, $position=0) {
        $my_data=[];
        foreach($template as $index => $length) {
            // add current field to array with the named value
            $my_data[$index] = substr($data, $position, $length);
            // move the 'pointer' to the start of the next field
            $position += $length;
        }
        return $my_data;
    }

    /**
     * Get errors
     */
    public function errors()
    {
        return $this->errors;
    }
}