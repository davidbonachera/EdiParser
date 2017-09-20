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
        "40.20" => array(
            "CODEXC" => "40",
            "SEPEXC" => ".",
            "SCOEXC" => "20",
            "TRTEXC" => null,
            "NUMREC" => null,
            "SNUREC" => null,
            "REFREC" => null,
            "NLIREC" => null,
            "CODACT" => null,
            "CODCLI" => null,
            "CODPRO" => null,
            "VALPRO" => null,
            "UVCREA" => null,
            "UNICDE" => null,
            "CODPRN" => null,
            "TYPOPE" => null,
            "NUMOPE" => null,
            "AIGPRI" => null,
            "PRIREC" => null,
            "MSGLIG" => null,
            "MOTIMM" => null,
            "CODLOT" => null,
            "DATFAB" => null,
            "DATFVI" => null,
            "SPCPRO" => null,
            "PCBPRO" => null,
            "PDBCOL" => null,
            "VOLCOL" => null,
            "COLCOU" => null,
            "COUPAL" => null,
            "CODEMB" => null,
            "GERPAL" => null,
            "GERHAU" => null,
            "CODMDR" => null,
            "IGLSIT" => null,
            "INDUNI" => null,
        ),
        "40.99" => array(
            "CODEXC" => "40",
            "SEPEXC" => ".",
            "SCOEXC" => "99",
            "TRTEXC" => null,
            "NUMREC" => null,
            "SNUREC" => null,
            "REFREC" => null,
            "CUMLIG" => null,
            "DISEXC" => null,
        )
    );

    public static $validationTemplateData = array(
        "40.00" => array(
            "CODEXC" => [ "length" => 2, "required" => FALSE, "numerical" => TRUE],
            "SEPEXC" => [ "length" => 1, "required" => FALSE ],
            "SCOEXC" => [ "length" => 2, "required" => FALSE, "numerical" => TRUE],
            "TRTEXC" => [ "length" => 1, "required" => FALSE ],
            "NUMREC" => [ "length" => 8, "required" => FALSE, "numerical" => TRUE],
            "SNUREC" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
            "REFREC" => [ "length" => 30, "required" => FALSE ],
            "CODAPP" => [ "length" => 10, "required" => FALSE ],
            "CODLDR" => [ "length" => 3, "required" => FALSE ],
            "CODTRE" => [ "length" => 3, "required" => FALSE ],
            "CODACT" => [ "length" => 3, "required" => FALSE ],
            "CODFOU" => [ "length" => 14, "required" => FALSE ],
            "CODTRA" => [ "length" => 14, "required" => FALSE ],
            "DTIREC" => [ "length" => 8, "required" => FALSE, "numerical" => TRUE],
            "HEIREC" => [ "length" => 4, "required" => FALSE, "numerical" => TRUE],
            "KAIREC" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
            "MSGREC" => [ "length" => 30, "required" => FALSE ],
            "IGLSIT" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
            "DTFREC" => [ "length" => 8, "required" => FALSE, "numerical" => TRUE],
            "EDIFOU" => [ "length" => 14, "required" => FALSE ],
            "DISEXC" => [ "length" => 62, "required" => FALSE ],
        ),
        "40.20" => array(
            "CODEXC" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "SEPEXC" => [ "length" => 1, "required" => TRUE ],
            "SCOEXC" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "TRTEXC" => [ "length" => 1, "required" => TRUE ],
            "NUMREC" => [ "length" => 8, "required" => FALSE, "numerical" => TRUE],
            "SNUREC" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
            "REFREC" => [ "length" => 30, "required" => TRUE ],
            "NLIREC" => [ "length" => 5, "required" => TRUE, "numerical" => TRUE],
            "CODACT" => [ "length" => 3, "required" => TRUE ],
            "CODCLI" => [ "length" => 14, "required" => FALSE ],
            "CODPRO" => [ "length" => 17, "required" => TRUE ],
            "VALPRO" => [ "length" => 2, "required" => FALSE, "numerical" => TRUE],
            "UVCREA" => [ "length" => 9, "required" => TRUE, "numerical" => TRUE],
            "UNICDE" => [ "length" => 3, "required" => TRUE ],
            "CODPRN" => [ "length" => 17, "required" => FALSE ],
            "TYPOPE" => [ "length" => 1, "required" => FALSE ],
            "NUMOPE" => [ "length" => 6, "required" => FALSE, "numerical" => TRUE],
            "AIGPRI" => [ "length" => 1, "required" => FALSE ],
            "PRIREC" => [ "length" => 9, "required" => FALSE, "numerical" => TRUE],
            "MSGLIG" => [ "length" => 30, "required" => FALSE ],
            "MOTIMM" => [ "length" => 3, "required" => FALSE ],
            "CODLOT" => [ "length" => 20, "required" => FALSE ],
            "DATFAB" => [ "length" => 8, "required" => FALSE, "numerical" => TRUE],
            "DATFVI" => [ "length" => 8, "required" => FALSE, "numerical" => TRUE],
            "SPCPRO" => [ "length" => 4, "required" => FALSE, "numerical" => TRUE],
            "PCBPRO" => [ "length" => 5, "required" => FALSE, "numerical" => TRUE],
            "PDBCOL" => [ "length" => 7, "required" => FALSE, "numerical" => TRUE],
            "VOLCOL" => [ "length" => 7, "required" => FALSE, "numerical" => TRUE],
            "COLCOU" => [ "length" => 8, "required" => FALSE, "numerical" => TRUE],
            "COUPAL" => [ "length" => 8, "required" => FALSE, "numerical" => TRUE],
            "CODEMB" => [ "length" => 3, "required" => FALSE ],
            "GERPAL" => [ "length" => 2, "required" => FALSE, "numerical" => TRUE],
            "GERHAU" => [ "length" => 2, "required" => FALSE, "numerical" => TRUE],
            "CODMDR" => [ "length" => 3, "required" => TRUE ],
            "IGLSIT" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
            "INDUNI" => [ "length" => 1, "required" => FALSE ],
        ),
        "40.99" => array(
            "CODEXC" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "SEPEXC" => [ "length" => 1, "required" => TRUE ],
            "SCOEXC" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "TRTEXC" => [ "length" => 1, "required" => FALSE ],
            "NUMREC" => [ "length" => 8, "required" => FALSE, "numerical" => TRUE],
            "SNUREC" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
            "REFREC" => [ "length" => 30, "required" => TRUE ],
            "CUMLIG" => [ "length" => 4, "required" => FALSE, "numerical" => TRUE],
            "DISEXC" => [ "length" => 205, "required" => FALSE ],
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