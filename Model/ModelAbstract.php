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
namespace Boda\EdiParserBundle\Model;

use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

abstract class ModelAbstract
{

    /**
     * Errors
     *
     * @var array $errors
     */
    protected $errors;

    /**
     * Header
     *
     * @var array $header
     */
    protected $header = array();
    
    /**
     * Header Template
     *
     * @var array $templateHeader
     */
    private $templateHeader = [
        "CODEXC" => "00",
        "SEPEXC" => ".",
        "SCOEXC" => "00",
        "TRTEXC" => null,
        "EMTEXC" => "HUBBLE",
        "RCTEXC" => null,
        "DATEXC" => null,
        "HEUEXC" => null,
        "NUMEXC" => null,
        "ACQEXC" => "0",
        "VEREXC" => "5.00",
        "NOMSYS" => "SOCRATE",
        "NOMDTQ" => null,
        "BIBDTQ" => "FGE50I2L",
        "LIBEXC" => null,
        "BIBDST" => null,
        "PGMDST" => null,
        "PARDST" => null,
        "CODACT" => "BIW",
        "IGLSIT" => "000",
        "EDISIT" => null,
        "IMAEXC" => "00000000",
        "IDEMSG" => "MESSAGE IDENTIFIER",
        "DISEXC" => null,
    ];

    /**
     * Validation Header Template
     *
     * @var array $templateHeader
     */
    protected $validationTemplateHeader = [
        "CODEXC" => [ "length" => 2, "required" => FALSE ],
        "SEPEXC" => [ "length" => 1, "required" => FALSE ],
        "SCOEXC" => [ "length" => 2, "required" => FALSE ],
        "TRTEXC" => [ "length" => 1, "required" => FALSE ],
        "EMTEXC" => [ "length" => 14, "required" => FALSE ],
        "RCTEXC" => [ "length" => 14, "required" => FALSE ],
        "DATEXC" => [ "length" => 8, "required" => FALSE ],
        "HEUEXC" => [ "length" => 6, "required" => FALSE ],
        "NUMEXC" => [ "length" => 7, "required" => FALSE ],
        "ACQEXC" => [ "length" => 1, "required" => FALSE ],
        "VEREXC" => [ "length" => 4, "required" => FALSE ],
        "NOMSYS" => [ "length" => 8, "required" => FALSE ],
        "NOMDTQ" => [ "length" => 10, "required" => FALSE ],
        "BIBDTQ" => [ "length" => 10, "required" => FALSE ],
        "LIBEXC" => [ "length" => 30, "required" => FALSE ],
        "BIBDST" => [ "length" => 10, "required" => FALSE ],
        "PGMDST" => [ "length" => 10, "required" => FALSE ],
        "PARDST" => [ "length" => 30, "required" => FALSE ],
        "CODACT" => [ "length" => 3, "required" => FALSE ],
        "IGLSIT" => [ "length" => 3, "required" => FALSE ],
        "EDISIT" => [ "length" => 14, "required" => FALSE ],
        "IMAEXC" => [ "length" => 8, "required" => FALSE ],
        "IDEMSG" => [ "length" => 30, "required" => FALSE ],
        "DISEXC" => [ "length" => 30, "required" => FALSE ],
    ];

    /**
     * Footer
     *
     * @var array $footer
     */
    protected $footer = array();

    /**
     * Footer Template
     *
     * @var array $templateFooter
     */
    private $templateFooter = [
        "CODEXC"=> "99",
        "SEPEXC"=> ".",
        "SCOEXC"=> "00",
        "TRTEXC"=> null,
        "EMTEXC"=> "HUBBLE",
        "RCTEXC"=> null,
        "DATEXC"=> null,
        "HEUEXC"=> null,
        "NUMEXC"=> null,
        "CPTEXC"=> null,
        "ERREXC"=> null,
        "IDEMSG"=> null,
        "DEBFIN"=> null,
        "DISEXC"=> null,
    ];

    /**
     * Footer Template
     *
     * @var array $templateFooter
     */
    protected $validationTemplateFooter = [
        "CODEXC" => [ "length" => 2, "required" => TRUE],
        "SEPEXC" => [ "length" => 1, "required" => TRUE],
        "SCOEXC" => [ "length" => 2, "required" => TRUE],
        "TRTEXC" => [ "length" => 1, "required" => FALSE],
        "EMTEXC" => [ "length" => 14, "required" => FALSE],
        "RCTEXC" => [ "length" => 14, "required" => FALSE],
        "DATEXC" => [ "length" => 8, "required" => FALSE],
        "HEUEXC" => [ "length" => 6, "required" => FALSE],
        "NUMEXC" => [ "length" => 7, "required" => FALSE],
        "CPTEXC" => [ "length" => 8, "required" => FALSE, "numerical" => TRUE],
        "ERREXC" => [ "length" => 8, "required" => FALSE],
        "IDEMSG" => [ "length" => 30, "required" => FALSE],
        "DEBFIN" => [ "length" => 1, "required" => FALSE],
        "DISEXC" => [ "length" => 154, "required" => FALSE],
    ];

    /**
     * Data
     *
     * @var array $data
     */
    protected $data = array();

    /**
     * Data Rejected
     *
     * @var array $dataRejected
     */
    protected $dataRejected = array();

    /**
     * Validation
     *
     * @var bool
     */
    protected $validation;

    /**
     * Constructor
     *
     * @param bool $validation
     */
    public function __construct($validation = true)
    {
        $this->validation = $validation;
    }

    /**
     * @var array $data
     */
    public function setHeader($data)
    {
        if ($this->validation) {
            $this->validate($data, $this->getValidationTemplateHeader());
        }
        $this->header = $data;
    }

    /**
     * @return array $header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @var array $data
     */
    public function setFooter($data)
    {
        if ($this->validation) {
            $this->validate($data, $this->getValidationTemplateFooter());
        }
        $this->footer = $data;
    }

    /**
     * @return array $footer
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * @return array $data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return array $templateHeader
     */
    public function getTemplateHeader()
    {
        return $this->templateHeader;
    }

    /**
     * @return array validationTemplateHeader
     */
    public function getValidationTemplateHeader()
    {
        return $this->validationTemplateHeader;
    }

    /**
     * @return array $templateData
     */
    public abstract function getTemplateData();

    /**
     * @return array $validationTemplateData
     */
    public abstract function getValidationTemplateData();

    /**
     * @return array $templateHeader
     */
    public function getTemplateFooter()
    {
        return $this->templateFooter;
    }

    /**
     * @return array validationTemplateFooter
     */
    public function getValidationTemplateFooter()
    {
        return $this->validationTemplateFooter;
    }

    /**
     * @var array $data
     * @var string $dataKey
     */
    public function insertOne($data, $dataKey)
    {
        if ($this->validation && $this->getValidationTemplateData()[$data["CODEXC"].$data["SEPEXC"].$data["SCOEXC"]]) {
            $this->data[] = $data;
        } else {
            $this->dataRejected[] = $data;
        }
    }

    /**
     * @var array $data
     */
    public function insertGroup($data)
    {
        foreach ($data as $dataKey => $dataArray) {
            if ($this->validation && $this->validate($dataArray, $this->getValidationTemplateData()[$dataKey])) {
                $this->data[] = $dataArray;
            } else {
                $this->dataRejected[] = $data;
            }
        }
    }

    /**
     * @var array $data
     * @var array $validationArray
     * @return boolean
     */
    public function validate($data, $validationArray) {
        foreach ($validationArray as $key => $validation) {
            if($validation['required']) {
                $err = v::stringType()->notEmpty()->length(null, $validation['length']);
            } else {
                if ($data[$key] === null) {
                    $err = v::nullType();
                } elseif (is_int($data[$key])) {
                    $err = v::intType()->length(null, $validation['length']);
                } else {
                    $err = v::stringType()->length(null, $validation['length']);
                }
            }
            try {
                $err->assert($data[$key]);
            } catch(NestedValidationException $exception) {
                // ToDo: Log errors and don't generate files if errors
                $this->errors[] = $exception->getMessages();
                return false;
            }
        }
        return true;
    }

    /**
     * @return string
     */
    public abstract function __toString();
}