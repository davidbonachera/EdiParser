<?php
/**
 * Created by PhpStorm.
 * User: Enigma
 * Date: 15/3/2017
 * Time: 4:56 PM
 */

namespace Boda\EdiParserBundle;

interface PositionalEdiParserInterface
{
    /**
     * @param array $arguments
     * @return string
     */
    public function parse(array $arguments=[]);
}