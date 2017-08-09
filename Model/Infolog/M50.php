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

class M50 extends ModelAbstract
{
    /**
     * Template Data
     * @var array $templateData
     */
    public static $templateData = array(
        // Déclaration produit (obligatoire)
        "50.00" => array(
            "CODEXC" => null,
            "SEPEXC" => null,
            "SCOEXC" => null,
            "TRTEXC" => null,
            "NUMLIV" => null,
            "SNULIV" => null,
            "CODACT" => null,
            "CODCLI" => null,
            "REFLIV" => null,
            "CODTLI" => null,
            "DTILIV" => null,
            "HEILIV" => null,
            "CLILIV" => null,
            "TYPLIV" => null,
            "CODMOP" => null,
            "CODTRA" => null,
            "CODRGT" => null,
            "TOULIV" => null,
            "ORDLIV" => null,
            "KAILIV" => null,
            "MSGPRP" => null,
            "MSGLIV" => null,
            "GSTALC" => null,
            "CODSIT" => null,
            "IGLSIT" => null,
            "CODBAS" => null,
            "DISEXC" => null,
        ),
        "50.20" => array(
            "CODEXC" => null,
            "SEPEXC" => null,
            "SCOEXC" => null,
            "TRTEXC" => null,
            "NUMLIV" => null,
            "SNULIV" => null,
            "CODACT" => null,
            "CODCLI" => null,
            "REFLIV" => null,
            "NLILIV" => null,
            "CODPRO" => null,
            "VALPRO" => null,
            "METRPL" => null,
            "CODRPL" => null,
            "VALRPL" => null,
            "CODPRN" => null,
            "UVCCDE" => null,
            "UNICDE" => null,
            "TYPSTK" => null,
            "AIGPRI" => null,
            "PRILIV" => null,
            "TYPOPE" => null,
            "NUMOPE" => null,
            "SPCPRO" => null,
            "PCBPRO" => null,
            "CODLOT" => null,
            "DATFVI" => null,
            "MSGLIG" => null,
            "UVCINI" => null,
            "QTECDE" => null,
            "CODACL" => null,
            "IGLSIT" => null,
            "DATFVI2" => null,
            "IMMFRG" => null,
        )
    );
    public static $validationTemplateData = array(
        "50.00" => array(
            "CODEXC" => [ "length" => 2, "required" => TRUE ],
            "SEPEXC" => [ "length" => 1, "required" => TRUE ],
            "SCOEXC" => [ "length" => 2, "required" => TRUE ],
            "TRTEXC" => [ "length" => 1, "required" => TRUE ],
            "NUMLIV" => [ "length" => 8, "required" => FALSE ],
            "SNULIV" => [ "length" => 3, "required" => FALSE ],
            "CODACT" => [ "length" => 3, "required" => TRUE ],
            "CODCLI" => [ "length" => 14, "required" => TRUE ],
            "REFLIV" => [ "length" => 30, "required" => TRUE ],
            "CODTLI" => [ "length" => 3, "required" => TRUE ],
            "DTILIV" => [ "length" => 8, "required" => TRUE ],
            "HEILIV" => [ "length" => 4, "required" => FALSE ],
            "CLILIV" => [ "length" => 14, "required" => FALSE ],
            "TYPLIV" => [ "length" => 1, "required" => FALSE ],
            "CODMOP" => [ "length" => 3, "required" => FALSE ],
            "CODTRA" => [ "length" => 14, "required" => FALSE ],
            "CODRGT" => [ "length" => 3, "required" => FALSE ],
            "TOULIV" => [ "length" => 4, "required" => FALSE ],
            "ORDLIV" => [ "length" => 4, "required" => FALSE ],
            "KAILIV" => [ "length" => 3, "required" => FALSE ],
            "MSGPRP" => [ "length" => 30, "required" => FALSE ],
            "MSGLIV" => [ "length" => 30, "required" => FALSE ],
            "GSTALC" => [ "length" => 1, "required" => FALSE ],
            "CODSIT" => [ "length" => 3, "required" => FALSE ],
            "IGLSIT" => [ "length" => 3, "required" => FALSE ],
            "CODBAS" => [ "length" => 3, "required" => FALSE ],
            "DISEXC" => [ "length" => 1, "required" => FALSE ],
        ),
        "50.20" => array(
            "CODEXC" => [ "length" => 2, "required" => TRUE ],
            "SEPEXC" => [ "length" => 1, "required" => TRUE ],
            "SCOEXC" => [ "length" => 2, "required" => TRUE ],
            "TRTEXC" => [ "length" => 1, "required" => FALSE ],
            "NUMLIV" => [ "length" => 8, "required" => FALSE ],
            "SNULIV" => [ "length" => 3, "required" => FALSE ],
            "CODACT" => [ "length" => 3, "required" => TRUE ],
            "CODCLI" => [ "length" => 14, "required" => TRUE ],
            "REFLIV" => [ "length" => 30, "required" => TRUE ],
            "NLILIV" => [ "length" => 5, "required" => TRUE ],
            "CODPRO" => [ "length" => 17, "required" => TRUE ],
            "VALPRO" => [ "length" => 2, "required" => FALSE ],
            "METRPL" => [ "length" => 1, "required" => FALSE ],
            "CODRPL" => [ "length" => 17, "required" => FALSE ],
            "VALRPL" => [ "length" => 2, "required" => FALSE ],
            "CODPRN" => [ "length" => 17, "required" => FALSE ],
            "UVCCDE" => [ "length" => 9, "required" => TRUE ],
            "UNICDE" => [ "length" => 3, "required" => FALSE ],
            "TYPSTK" => [ "length" => 1, "required" => FALSE ],
            "AIGPRI" => [ "length" => 1, "required" => FALSE ],
            "PRILIV" => [ "length" => 8, "required" => FALSE ],
            "TYPOPE" => [ "length" => 1, "required" => FALSE ],
            "NUMOPE" => [ "length" => 6, "required" => FALSE ],
            "SPCPRO" => [ "length" => 4, "required" => FALSE ],
            "PCBPRO" => [ "length" => 5, "required" => FALSE ],
            "CODLOT" => [ "length" => 20, "required" => FALSE ],
            "DATFVI" => [ "length" => 8, "required" => FALSE ],
            "MSGLIG" => [ "length" => 30, "required" => FALSE ],
            "UVCINI" => [ "length" => 9, "required" => FALSE ],
            "QTECDE" => [ "length" => 9, "required" => FALSE ],
            "CODACL" => [ "length" => 3, "required" => FALSE ],
            "IGLSIT" => [ "length" => 3, "required" => FALSE ],
            "DATFVI2" => [ "length" => 8, "required" => FALSE ],
            "IMMFRG" => [ "length" => 3, "required" => FALSE ],
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