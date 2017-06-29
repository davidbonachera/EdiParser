<?php
/**
 * Created by PhpStorm.
 * User: Enigma
 * Date: 29/6/2017
 * Time: 3:21 PM
 */

namespace Boda\EdiParserBundle\Parser;

class Writer
{
    /**
     * @var array
     */
    private $errors = [];

    public function parse(array $template = [], array $file = [], $identifierSize)
    {
        // TODO: Implement parse() method.
    }

    public function write(array $template = [], array $rows = [])
    {
        return $template;
    }

    /**
     * Get errors
     */
    public function errors()
    {
        return $this->errors;
    }
}