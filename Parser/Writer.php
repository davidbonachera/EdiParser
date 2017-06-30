<?php
/**
 * Created by PhpStorm.
 * User: Enigma
 * Date: 29/6/2017
 * Time: 3:21 PM
 */

namespace Boda\EdiParserBundle\Parser;

use Boda\EdiParserBundle\Model\ModelAbstract;

class Writer
{
    /**
     * @var array
     */
    private $errors = [];

    /**
     * Model
     *
     * @var ModelAbstract
     */
    private $model;

    public function __construct()
    {
        // TODO: Implement parse() method.
    }

    public function write()
    {
        return true;
    }

    public function setHeader(array $data) {
        $this->model->setHeader($data);
    }

    public function insertOne(array $data) {
        $this->model;
    }

    /**
     * @return ModelAbstract
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param ModelAbstract $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Get errors
     */
    public function errors()
    {
        return $this->errors;
    }
}