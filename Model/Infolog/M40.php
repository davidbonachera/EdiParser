<?php
/**
 * Created by PhpStorm.
 * User: Enigma
 * Date: 29/6/2017
 * Time: 6:22 PM
 */
namespace Boda\EdiParserBundle\Model\Infolog;

use Boda\EdiParserBundle\Model\ModelAbstract;

class M40 extends ModelAbstract
{
    /**
     * Template Data
     * @var array $templateData
     */
    public static $templateData = array(
        // Déclaration produit (obligatoire)
        "40.00" => array(
            "CODEXC" => "40",
            "SEPEXC" => ".",
            "SCOEXC" => "00",
            "TRTEXC" => null,
            "NUMREC" => null,
            "SNUREC" => null,
            "REFREC" => null,
            "CODAPP" => null,
            "CODLDR" => null,
            "CODTRE" => null,
            "CODACT" => null,
            "CODFOU" => null,
            "CODTRA" => null,
            "DTIREC" => null,
            "HEIREC" => null,
            "KAIREC" => null,
            "MSGREC" => null,
            "IGLSIT" => null,
            "DTFREC" => null,
            "EDIFOU" => null,
            "DISEXC" => null,
        ),
    );

    public static $validationTemplateData = array(
        "40.00" => array(
            "CODEXC" => [ "length" => 2, "required" => FALSE ],
            "SEPEXC" => [ "length" => 1, "required" => FALSE ],
            "SCOEXC" => [ "length" => 2, "required" => FALSE ],
            "TRTEXC" => [ "length" => 1, "required" => FALSE ],
            "NUMREC" => [ "length" => 8, "required" => FALSE ],
            "SNUREC" => [ "length" => 3, "required" => FALSE ],
            "REFREC" => [ "length" => 30, "required" => FALSE ],
            "CODAPP" => [ "length" => 10, "required" => FALSE ],
            "CODLDR" => [ "length" => 3, "required" => FALSE ],
            "CODTRE" => [ "length" => 3, "required" => FALSE ],
            "CODACT" => [ "length" => 3, "required" => FALSE ],
            "CODFOU" => [ "length" => 14, "required" => FALSE ],
            "CODTRA" => [ "length" => 14, "required" => FALSE ],
            "DTIREC" => [ "length" => 8, "required" => FALSE ],
            "HEIREC" => [ "length" => 4, "required" => FALSE ],
            "KAIREC" => [ "length" => 3, "required" => FALSE ],
            "MSGREC" => [ "length" => 30, "required" => FALSE ],
            "IGLSIT" => [ "length" => 3, "required" => FALSE ],
            "DTFREC" => [ "length" => 8, "required" => FALSE ],
            "EDIFOU" => [ "length" => 14, "required" => FALSE ],
            "DISEXC" => [ "length" => 62, "required" => FALSE ],
        )
    );

    public function getTemplateData()
    {
        return static::$templateData;
    }

    public function getValidationTemplateData()
    {
        return static::$validationTemplateData;
    }

    public function __toString()
    {
        return "M40";
    }
}