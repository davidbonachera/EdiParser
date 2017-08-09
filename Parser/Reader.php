<?php
/**
 * This file is part of the EdiParser package.
 *
 * @package     EdiParserBundle
 * @since       0.0.1
 * @author      davidbonachera
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Boda\EdiParserBundle\Parser;

class Reader
{
    /**
     * @var array
     */
    private $errors = [];

    public function parse(array $template = [], array $rows = [], $identifierSize = 5)
    {
        if (empty($template)) {
            $this->errors["template"] = "No template given";
            return false;
        }
        // Init array
        $myArray = [];
        // SubBody counter
        $j = 0;
        $myArray["header"] = $this->formatLine($template["header"], $rows[0]);
        for ($i = 1; $i < count($rows) - 1; $i++) {
            foreach ($template["body"] as $index => $templateSubBody) {
                if (substr($rows[$i], 0, $identifierSize) === $index) {
                    $myArray["body"][$j][] = $this->formatLine($templateSubBody, $rows[$i]);
                    $j++;
                    continue;
                }
                if (is_array($templateSubBody)) {
                    foreach ($templateSubBody as $index2 => $templateSubBody2) {
                        if (substr($rows[$i], 0, $identifierSize) === $index2) {
                            $myArray["body"][$j][] = $this->formatLine($templateSubBody2, $rows[$i]);
                        }
                    }
                }
            }
            continue;
        }
        $myArray["footer"] = $this->formatLine($template["footer"], $rows[count($rows) - 1]);
        return $myArray;
    }

    public function formatLine($template, $data, $position = 0)
    {
        $myData = [];
        foreach ($template as $index => $length) {
            // add current field to array with the named value
            $myData[$index] = substr($data, $position, $length);
            // move the 'pointer' to the start of the next field
            $position += $length;
        }
        return $myData;
    }

    /**
     * Get errors
     */
    public function errors()
    {
        return $this->errors;
    }
}