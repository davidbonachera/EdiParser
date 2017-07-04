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
     * Model
     *
     * @var ModelAbstract
     */
    private $model;

    public function __construct(ModelAbstract $model)
    {
        $this->setModel($model);
    }

    public function writeFile($path)
    {
        $file = fopen($path."M20-".date("YmdHis").".txt", "w") or die("Unable to open file!");
        // Write Header
        $str = $this->writeLine($this->model->getHeader(), $this->model->getValidationTemplateHeader())."\n";
        fwrite($file, $str);
        $data = $this->model->getData();
        // Write Data
        foreach ($data as $lineKey => $lineData) {
            // ToDo : Fix and find a way to identify the header in a proper way (cf end of line)
            $str = $this->writeLine($lineData, $this->model->getValidationTemplateData()[$lineData["CODEXC"].$lineData["SEPEXC"].$lineData["SCOEXC"]])."\n";
            fwrite($file, $str);
        }
        // Write Footer
        $str = $this->writeLine($this->model->getFooter(), $this->model->getValidationTemplateFooter())."\n";
        fwrite($file, $str);
        fclose($file);
        return true;
    }

    public function writeLine($line, $validationTemplate){
        $str = "";
        $pos = 0;
        $i=0;
        foreach ($line as $key => $value) {
            $i++;
            if(is_null($value)) {
                $value = str_repeat(" ", $validationTemplate[$key]["length"]);
            } else {
                if(!empty($validationTemplate[$key]["numerical"])) {
                    $value = str_repeat("0", $validationTemplate[$key]["length"]-strlen($value)).$value;
                } else {
                    $value = $value.str_repeat(" ", $validationTemplate[$key]["length"]-strlen($value));
                }

            }
            $str = substr_replace($str, $value, $pos, 0);
            $pos += $validationTemplate[$key]["length"];
        };
        return $str;
    }

    public function getTemplateHeader(){
        return $this->model->getTemplateHeader();
    }

    public function getTemplateData(){
        return $this->model->getTemplateData();
    }

    public function getTemplateFooter(){
        return $this->model->getTemplateFooter();
    }

    public function setHeader(array $data) {
        $this->model->setHeader($data);
    }

    public function insertOne(array $data, $dataKey) {
        $this->model->insertOne($data, $dataKey);
    }

    public function setFooter(array $data) {
        $this->model->setFooter($data);
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
}