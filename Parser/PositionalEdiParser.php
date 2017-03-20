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

    public function parse(array $header= [], array $content = [], array $footer = [], array $file = [])
    {
        // Init counter
        $i = 0;
        // Count all lines
        $len = count($file);

        foreach($file as $row) {
            if ($i == 0) { // First Line
                $my_array[] = $this->formatLine($header, $row);
                $i++;
                continue;
            } else if ($i == $len-1) { // Last Line
                $my_array[] = $this->formatLine($footer, $row);
                $i++;
                continue;
            }
            // add current row to an array
            $my_array[] = $this->formatLine($content, $row);

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