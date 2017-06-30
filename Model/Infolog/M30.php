<?php
/**
 * Created by PhpStorm.
 * User: Enigma
 * Date: 29/6/2017
 * Time: 6:22 PM
 */
namespace Boda\EdiParserBundle\Model\Infolog;

use Boda\EdiParserBundle\Model\ModelAbstract;

class M30 extends ModelAbstract
{

    /**
     * Header Template
     *
     * @var array $templateHeader
     */
    protected static $templateHeader = [
        "CODEXC" => null,
        "SEPEXC" => null,
        "SCOEXC" => null,
        "TRTEXC" => null,
        "EMTEXC" => null,
        "RCTEXC" => null,
        "DATEXC" => null,
        "HEUEXC" => null,
        "NUMEXC" => null,
        "ACQEXC" => null,
        "VEREXC" => null,
        "NOMSYS" => null,
        "NOMDTQ" => null,
        "BIBDTQ" => null,
        "LIBEXC" => null,
        "PGMDST" => null,
        "PARDST" => null,
        "CODACT" => null,
        "IGLSIT" => null,
        "EDISIT" => null,
        "IMAEXC" => null,
        "IDEMSG" => null,
        "DISEXC" => null,
    ];

    /**
     * Footer Template
     *
     * @var array $templateFooter
     */
    protected static $templateFooter = [
        "CODEXC"=> null,
        "SEPEXC"=> null,
        "SCOEXC"=> null,
        "TRTEXC"=> null,
        "EMTEXC"=> null,
        "RCTEXC"=> null,
        "DATEXC"=> null,
        "HEUEXC"=> null,
        "NUMEXC"=> null,
        "CPTEXC"=> null,
        "ERREXC "=> null,
        "IDEMSG "=> null,
        "DEBFIN"=> null,
        "DISEXC"=> null,
    ];

    /**
     * Template Data
     * @var array $templateData
     */
    protected static $templateData = array(
        // 
    );

    public function __construct($validation=true)
    {
        parent::__construct($validation);
        //$this->data = parent::convert_array_to_obj_recursive($this->templateData);
    }

    public function validate()
    {
        // TODO: Implement validate() method.
    }
}