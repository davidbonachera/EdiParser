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
     * @var array parsed EDI file
     */
    private $parsedfile;

    /**
     * @var array
     */
    private $errors = [];

    public function parse(array $template = [], array $file = [], $identifierSize=5)
    {
        if (empty($template)) {
            $this->errors["template"] = "No template given";
            return $this->errors;
        }
        // Init counter
        $i = 0;
        // SubBody counter
        $j = 0;
        $previousValue = null;
        // Count all lines
        $len = count($file);
        foreach($file as $row) {
            if ($i == 0) { // First Line (header)
                $my_array[] = $this->formatLine($template["header"], $row);
                $i++;
                continue;
            } else if ($i == $len-1) { // Last Line (footer)
                $my_array[] = $this->formatLine($template["footer"], $row);
                $i++;
                continue;
            }
            if(is_array($template["body"])) {
                foreach ($template["body"] as $index => $templateSubBody) {
                    if (substr($row, 0, $identifierSize)==$index) {
                        $j++;
                        $my_array[1][$j][]= $this->formatLine($templateSubBody,$row);
                        continue;
                    }
                    if(is_array($templateSubBody)) {
                        foreach ($templateSubBody as $index2 => $templateSubBody2) {
                            if(substr($row, 0, $identifierSize)==$index2) {
                                $my_array[1][$j][] = $this->formatLine($templateSubBody2,$row);
                            }
                        }
                    }
                }
                $i++;
                continue;
            }
            // add current row to an array
            $i++;
        }
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