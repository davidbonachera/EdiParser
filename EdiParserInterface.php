<?php
/**
 * Created by PhpStorm.
 * User: Enigma
 * Date: 15/3/2017
 * Time: 4:56 PM
 */

namespace Boda\EdiParserBundle;

interface EdiParserInterface
{
    /**
     * @param array $template
     * @param array $file
     * @param int   $identifierSize
     * @return string
     */
    public function parse(array $template = [], array $file = [], $identifierSize);
}