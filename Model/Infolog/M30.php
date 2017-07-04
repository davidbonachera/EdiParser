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
     * Template Data
     * @var array $templateData
     */
    public static $templateData = array(
        // Déclaration produit (obligatoire)
        "30.00" => array(
            "CODEXC" => "30",
            "SEPEXC" => ".",
            "SCOEXC" => "00",
            "TRTEXC" => null,
            "CODACT" => null,
            "CODPRO" => null,
            "VALPRO" => null,
            "DS1PRO" => null,
            "DS2PRO" => null,
            "FOUPRO" => null,
            "VAPPRO" => null,
            "FAMPRO" => null,
            "ANAPRO" => null,
            "EDIPRO" => null,
            "SPCPRO" => null,
            "PCBPRO" => null,
            "UNIPRO" => null,
            "MESPRO" => null,
            "PDBUVC" => null,
            "PDNUVC" => null,
            "HAUUVC" => null,
            "LNGUVC" => null,
            "LRGUVC" => null,
            "PDBCOL" => null,
            "HAUCOL" => null,
            "LNGCOL" => null,
            "LRGCOL" => null,
            "COLCOU" => null,
            "COUPAL" => null,
            "GERPAL" => null,
            "GERHAU" => null,
            "HAUCOU" => null,
            "CODEMB" => null,
            "ABCPRO" => null,
            "CODMDR" => null,
            "MODREC" => null,
            "NBJDLV" => null,
            "MOTIMM" => null,
            "CODMDS" => null,
            "ZONPRF" => null,
            "ALLPRF" => null,
            "ABCSTS" => null,
            "CODADM" => null,
            "HOMGRB" => null,
            "PERGRB" => null,
            "CODMDP" => null,
            "TOPPRN" => null,
            "DISEXC" => null,
        ),
    );

    public static $validationTemplateData = array(
        "30.00" => array(
            "CODEXC" => [ "length" => 2, "required" => FALSE ],
            "SEPEXC" => [ "length" => 1, "required" => FALSE ],
            "SCOEXC" => [ "length" => 2, "required" => FALSE ],
            "TRTEXC" => [ "length" => 1, "required" => FALSE ],
            "CODACT" => [ "length" => 3, "required" => FALSE ],
            "CODPRO" => [ "length" => 17, "required" => FALSE ],
            "VALPRO" => [ "length" => 2, "required" => FALSE ],
            "DS1PRO" => [ "length" => 30, "required" => FALSE ],
            "DS2PRO" => [ "length" => 30, "required" => FALSE ],
            "FOUPRO" => [ "length" => 14, "required" => FALSE ],
            "VAPPRO" => [ "length" => 2, "required" => FALSE ],
            "FAMPRO" => [ "length" => 10, "required" => FALSE ],
            "ANAPRO" => [ "length" => 15, "required" => FALSE ],
            "EDIPRO" => [ "length" => 17, "required" => FALSE ],
            "SPCPRO" => [ "length" => 4, "required" => FALSE ],
            "PCBPRO" => [ "length" => 5, "required" => FALSE ],
            "UNIPRO" => [ "length" => 3, "required" => FALSE ],
            "MESPRO" => [ "length" => 1, "required" => FALSE ],
            "PDBUVC" => [ "length" => 7, "required" => FALSE ],
            "PDNUVC" => [ "length" => 7, "required" => FALSE ],
            "HAUUVC" => [ "length" => 3, "required" => FALSE ],
            "LNGUVC" => [ "length" => 3, "required" => FALSE ],
            "LRGUVC" => [ "length" => 3, "required" => FALSE ],
            "PDBCOL" => [ "length" => 7, "required" => FALSE ],
            "HAUCOL" => [ "length" => 3, "required" => FALSE ],
            "LNGCOL" => [ "length" => 3, "required" => FALSE ],
            "LRGCOL" => [ "length" => 3, "required" => FALSE ],
            "COLCOU" => [ "length" => 8, "required" => FALSE ],
            "COUPAL" => [ "length" => 8, "required" => FALSE ],
            "GERPAL" => [ "length" => 2, "required" => FALSE ],
            "GERHAU" => [ "length" => 2, "required" => FALSE ],
            "HAUCOU" => [ "length" => 3, "required" => FALSE ],
            "CODEMB" => [ "length" => 3, "required" => FALSE ],
            "ABCPRO" => [ "length" => 1, "required" => FALSE ],
            "CODMDR" => [ "length" => 3, "required" => FALSE ],
            "MODREC" => [ "length" => 1, "required" => FALSE ],
            "NBJDLV" => [ "length" => 3, "required" => FALSE ],
            "MOTIMM" => [ "length" => 3, "required" => FALSE ],
            "CODMDS" => [ "length" => 3, "required" => FALSE ],
            "ZONPRF" => [ "length" => 1, "required" => FALSE ],
            "ALLPRF" => [ "length" => 3, "required" => FALSE ],
            "ABCSTS" => [ "length" => 1, "required" => FALSE ],
            "CODADM" => [ "length" => 3, "required" => FALSE ],
            "HOMGRB" => [ "length" => 1, "required" => FALSE ],
            "PERGRB" => [ "length" => 3, "required" => FALSE ],
            "CODMDP" => [ "length" => 3, "required" => FALSE ],
            "TOPPRN" => [ "length" => 1, "required" => FALSE ],
            "DISEXC" => [ "length" => 2, "required" => FALSE ],
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
        return "M30";
    }
}