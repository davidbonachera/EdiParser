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

    /**
     * Create & Write the whole positional file line by line and save it to a path
     *
     * @param string $path
     *
     * @return boolean
     */
    public function writeFile($path)
    {
        $file = fopen($path.$this->getModel()->__toString().date("YmdHis").".txt", "w") or die("Unable to open/create file!");
        // Write Header
        $str = $this->writeLine($this->model->getHeader(), $this->model->getValidationTemplateHeader())."\n";
        fwrite($file, $str);
        $data = $this->model->getData();
        // Write Data
        foreach ($data as $lineKey => $lineData) {
            // ToDo : Fix and find a way to identify the header in a proper way (cf end of line)
            $str = $this->writeLine(
                    $lineData,
                    $this->model->getValidationTemplateData()[$lineData["CODEXC"].$lineData["SEPEXC"].$lineData["SCOEXC"]]
                )."\n";
            fwrite($file, $str);
        }
        // Write Footer
        $str = $this->writeLine($this->model->getFooter(), $this->model->getValidationTemplateFooter())."\n";
        fwrite($file, $str);
        fclose($file);
        return true;
    }

    /**
     * Parse a key-value array (a line to write) according to a template and return a positional string
     *
     * @param array $line
     * @param array $validationTemplate
     *
     * @return string
     */
    public function writeLine($line, $validationTemplate){
        $str = "";
        $pos = 0;
        $i=0;
        foreach ($line as $key => $value) {
            $i++;
            if(is_null($value)) {
                if(empty($validationTemplate[$key]["numerical"])) {
                    $value = str_repeat(" ", $validationTemplate[$key]["length"]);
                } else {
                    $value = str_repeat("0", $validationTemplate[$key]["length"]);
                }

            } else {
                $offset = $validationTemplate[$key]["length"]-strlen($value);
                if($offset>0) {
                    if(!empty($validationTemplate[$key]["numerical"])) {
                        $value = str_repeat("0", $offset).$value;
                    } else {
                        $value = $value.str_repeat(" ", $validationTemplate[$key]["length"]-strlen($value));
                    }
                } elseif ($offset<0) {
                    // @ToDo: Log error to say it's too long
                    $value = substr($value,0, $validationTemplate[$key]["length"]);
                }

            }
            $str = substr_replace($str, $value, $pos, 0);
            $pos += $validationTemplate[$key]["length"];
        };
        return $str;
    }

    /**
     * Get the default header template
     *
     * @return array
     */
    public function getTemplateHeader(){
        return $this->model->getTemplateHeader();
    }

    /**
     * Get the default body/data template
     *
     * @return array
     */
    public function getTemplateData(){
        return $this->model->getTemplateData();
    }

    /**
     * Get the default footer template
     *
     * @return array
     */
    public function getTemplateFooter(){
        return $this->model->getTemplateFooter();
    }

    /**
     * Set default header value.
     *
     * @param array $data An array of data to override default value
     * @param string $modelName
     */
    public function setHeader($data=[], $modelName=null) {
        $modelName = $modelName?$modelName:$this->getModel()->__toString();
        $default = $this->getTemplateHeader();
        $default["TRTEXC"]="1";
        $default["DATEXC"]=date("Ymd");
        $default["HEUEXC"]=date("His");
        $default["RCTEXC"]="DATAQ ".$modelName;
        $default["NOMDTQ"]=$modelName;
        $default["LIBEXC"]=$modelName."|".date("m/d|H:i:s")."|HUBBLE";
        $this->model->setHeader($default);
    }

    /**
     * Insert one line to the data model
     *
     * @param array $data,
     * @param string $dataKey - Validation key to use when inserting the data @ToDo maybe its useless
     */
    public function insertOne(array $data, $dataKey) {
        $this->model->insertOne($data, $dataKey);
    }

    /**
     * Set default footer value.
     *
     * @param array $data An array of data to override default value
     * @param string $modelName
     */
    public function setFooter($data=[], $modelName=null) {
        $modelName = $modelName?$modelName:$this->getModel()->__toString();
        $default = $this->getTemplateFooter();
        $default["TRTEXC"]="1";
        $default["DATEXC"]=date("Ymd");
        $default["HEUEXC"]=date("His");
        $default["RCTEXC"]="DATAQ ".$modelName;
        $default["CPTEXC"]=count($this->getModel()->getData());
        $this->model->setFooter($default);
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
     * WIP, for next version to override default data.
     *
     * @param array $arr1
     * @param array $arr2
     */
    function arrayMergeIfNotNull($arr1, $arr2) {
        foreach($arr2 as $key => $val) {
            $is_set_and_not_null = isset($arr1[$key]);
            if ( $val == NULL && $is_set_and_not_null ) {
                $arr2[$key] = $arr1[$key];
            }
        }
        return array_merge($arr1, $arr2);
    }
}