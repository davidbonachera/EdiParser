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
     * @param array $header
     * @param array $content
     * @param array $footer
     * @param array $file
     * @return string
     */
    public function parse(array $header= [], array $content = [], array $footer = [], array $file = []);
}