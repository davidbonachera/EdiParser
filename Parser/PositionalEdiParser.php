<?php
/**
 * Created by PhpStorm.
 * User: Enigma
 * Date: 15/3/2017
 * Time: 4:56 PM
 */

namespace Boda\EdiParserBundle\Services;

class PositionalEdiParser implements PositionalEdiParserInterface
{
    public function parse(array $arguments = [])
    {
        // TODO: Implement parse() method.

        $rows = [
            ["abcdefghijklmnopqrstuvsqfsxcsdczdgbvcnghjtyhdfbncvnfgn"],
            ["abcdefghijklmnopqrstuvazecqsdezfdvbnfggnvcvnfgnbvbncgn"]
        ];

        $lengths = [8,10,10];

        foreach($rows as $row) {

            $position = 0; // start at the beginning of the row

            foreach($lengths as $length) {

                // add current field to array
                $my_data[] = trim(substr($row, $position, $length));

                // move the 'pointer' to the start of the next field
                $position += $length;
            }

            // add current row to an array
            $my_array[] = $my_data;

        }

        return $my_array;

    }

}