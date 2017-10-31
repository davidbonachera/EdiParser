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
            "CODACT" => "I2L",
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
            "PCBPRO" => 1,
            "UNIPRO" => "UVC",
            "MESPRO" => 1,
            "PDBUVC" => null,
            "PDNUVC" => null,
            "HAUUVC" => null,
            "LNGUVC" => null,
            "LRGUVC" => null,
            "PDBCOL" => 1,
            "HAUCOL" => 1,
            "LNGCOL" => 1,
            "LRGCOL" => 1,
            "COLCOU" => 10001, // Auto add 0 at the beggining
            "COUPAL" => 990099, // Auto add 0 at the beggining
            "GERPAL" => null,
            "GERHAU" => null,
            "HAUCOU" => null,
            "CODEMB" => "STD",
            "ABCPRO" => null,
            "CODMDR" => "STD",
            "MODREC" => null,
            "NBJDLV" => null,
            "MOTIMM" => null,
            "CODMDS" => "STD",
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
            "CODEXC" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "SEPEXC" => [ "length" => 1, "required" => TRUE ],
            "SCOEXC" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "TRTEXC" => [ "length" => 1, "required" => TRUE ],
            "CODACT" => [ "length" => 3, "required" => TRUE ],
            "CODPRO" => [ "length" => 17, "required" => TRUE ],
            "VALPRO" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "DS1PRO" => [ "length" => 30, "required" => TRUE ],
            "DS2PRO" => [ "length" => 30, "required" => FALSE ],
            "FOUPRO" => [ "length" => 14, "required" => FALSE ],
            "VAPPRO" => [ "length" => 2, "required" => FALSE ],
            "FAMPRO" => [ "length" => 10, "required" => FALSE ],
            "ANAPRO" => [ "length" => 15, "required" => FALSE ],
            "EDIPRO" => [ "length" => 17, "required" => FALSE ],
            "SPCPRO" => [ "length" => 4, "required" => FALSE, "numerical" => TRUE],
            "PCBPRO" => [ "length" => 5, "required" => TRUE, "numerical" => TRUE],
            "UNIPRO" => [ "length" => 3, "required" => FALSE ],
            "MESPRO" => [ "length" => 1, "required" => FALSE ],
            "PDBUVC" => [ "length" => 7, "required" => FALSE, "numerical" => TRUE],
            "PDNUVC" => [ "length" => 7, "required" => FALSE, "numerical" => TRUE],
            "HAUUVC" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
            "LNGUVC" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
            "LRGUVC" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
            "PDBCOL" => [ "length" => 7, "required" => TRUE, "numerical" => TRUE],
            "HAUCOL" => [ "length" => 3, "required" => TRUE, "numerical" => TRUE],
            "LNGCOL" => [ "length" => 3, "required" => TRUE, "numerical" => TRUE],
            "LRGCOL" => [ "length" => 3, "required" => TRUE, "numerical" => TRUE],
            "COLCOU" => [ "length" => 8, "required" => TRUE, "numerical" => TRUE],
            "COUPAL" => [ "length" => 8, "required" => TRUE, "numerical" => TRUE],
            "GERPAL" => [ "length" => 2, "required" => FALSE, "numerical" => TRUE],
            "GERHAU" => [ "length" => 2, "required" => FALSE, "numerical" => TRUE],
            "HAUCOU" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
            "CODEMB" => [ "length" => 3, "required" => FALSE ],
            "ABCPRO" => [ "length" => 1, "required" => FALSE ],
            "CODMDR" => [ "length" => 3, "required" => FALSE ],
            "MODREC" => [ "length" => 1, "required" => FALSE ],
            "NBJDLV" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
            "MOTIMM" => [ "length" => 3, "required" => FALSE ],
            "CODMDS" => [ "length" => 3, "required" => FALSE ],
            "ZONPRF" => [ "length" => 1, "required" => FALSE ],
            "ALLPRF" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
            "ABCSTS" => [ "length" => 1, "required" => FALSE ],
            "CODADM" => [ "length" => 3, "required" => FALSE ],
            "HOMGRB" => [ "length" => 1, "required" => FALSE ],
            "PERGRB" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
            "CODMDP" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
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