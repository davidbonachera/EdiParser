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

use Boda\EdiParserBundle\Model\ModelAbstract;

class Reader
{
    /**
     * @var array
     */
    private $errors = [];

    public function parse(ModelAbstract $model, array $rows = [], $identifierSize = 5)
    {
        if (empty($model)) {
            $this->errors["model"] = "No model given";
            return false;
        }
        // Init array
        $myArray = [];
        // SubBody counter
        $j = 0;
        $myArray["header"] = $this->formatLine($model->getHeader(), $rows[0]);
        for ($i = 1; $i < count($rows) - 1; $i++) {
            foreach ($model->getData() as $index => $templateSubBody) {
                dump($templateSubBody);
                /*if (substr($rows[$i], 0, $identifierSize) === $index) {
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
                }*/
            }
            continue;
        }
        $myArray["footer"] = $this->formatLine($model->getFooter(), $rows[count($rows) - 1]);
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