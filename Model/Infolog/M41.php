<?php
/**
 * This file is part of the Hubble application.
 *
 * @package     EdiParserBundle
 * @since       0.1.9
 * @author      davidbonachera
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Boda\EdiParserBundle\Model\Infolog;

use Boda\EdiParserBundle\Model\ModelAbstract;

class M41 extends ModelAbstract
{
    /**
     * Template Data
     * @var array $templateData
     */
    public static $templateData = array(
        // M41 : Entête remontée réception (Systématique)
        "41.00" => array(
            "CODEXC" => null,
            "SEPEXC" => null,
            "SCOEXC" => null,
            "TRTEXC" => null,
            "NUMREC" => null,
            "SNUREC" => null,
            "REFREC" => null,
            "CODAPP" => null,
            "CODLDR" => null,
            "CODTRE" => null,
            "ORICDE" => null,
            "CODACT" => null,
            "CODFOU" => null,
            "CODTRA" => null,
            "DTIREC" => null,
            "HEIREC" => null,
            "DTMREC" => null,
            "HEMREC" => null,
            "DTRREC" => null,
            "HERREC" => null,
            "KAIREC" => null,
            "CTRREC" => null,
            "REFCNT" => null,
            "CMTREC" => null,
            "DATRLQ" => null,
            "CODACR" => null,
            "NATREC" => null,
            "EDIFOU" => null,
            "CODCNT" => null,
            "TYPRMT" => null,
            "DISEXC" => null,
        ),
        "41.20" => array(
            "CODEXC" => null,
            "SEPEXC" => null,
            "SCOEXC" => null,
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
            "CODACR" => null,
            "UVCREC" => null,
            "UVCGRA" => null,
            "UVCIMM" => null,
            "MOTIMM" => null,
            "UVCRFU" => null,
            "MOTRFU" => null,
            "UVCRLQ" => null,
            "DATFVI" => null,
            "MESPRO" => null,
            "PDNREC" => null,
            "DATFAB" => null,
            "CODLOT" => null,
            "NUMLOT" => null,
            "RECSOL" => null,
            "CODMTR" => null,
            "INDPRO" => null,
            "DISEXC" => null,
            "INDUNI" => null,
        ),
        "41.21" => array(
            "CODEXC" => null,
            "SEPEXC" => null,
            "SCOEXC" => null,
            "TRTEXC" => null,
            "NUMREC" => null,
            "SNUREC" => null,
            "REFREC" => null,
            "NLIREC" => null,
            "DIPREC" => null,
            "TOPREC" => null,
            "PRXPRO" => null,
            "EDIPRO" => null,
            "EDICLI" => null,
            "UVCPRE" => null,
            "UNIREC" => null,
            "QTEUOM" => null,
            "CODTDD" => null,
            "NUMMTR" => null,
            "DISEXC" => null,
        ),
        "41.99" => array(
            "CODEXC" => null,
            "SEPEXC" => null,
            "SCOEXC" => null,
            "TRTEXC" => null,
            "NUMREC" => null,
            "SNUREC" => null,
            "REFREC" => null,
            "CUMLIG" => null,
            "CUMPAL" => null,
            "COLTOT" => null,
            "TOTPRO" => null,
            "DISEXC" => null,
        )
    );

    public static $validationTemplateData = array(
        "41.00" => array(
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
            "ORICDE" => [ "length" => 1, "required" => FALSE ],
            "CODACT" => [ "length" => 3, "required" => FALSE ],
            "CODFOU" => [ "length" => 14, "required" => FALSE ],
            "CODTRA" => [ "length" => 14, "required" => FALSE ],
            "DTIREC" => [ "length" => 8, "required" => FALSE ],
            "HEIREC" => [ "length" => 4, "required" => FALSE ],
            "DTMREC" => [ "length" => 8, "required" => FALSE ],
            "HEMREC" => [ "length" => 4, "required" => FALSE ],
            "DTRREC" => [ "length" => 8, "required" => FALSE ],
            "HERREC" => [ "length" => 4, "required" => FALSE ],
            "KAIREC" => [ "length" => 3, "required" => FALSE ],
            "CTRREC" => [ "length" => 10, "required" => FALSE ],
            "REFCNT" => [ "length" => 10, "required" => FALSE ],
            "CMTREC" => [ "length" => 60, "required" => FALSE ],
            "DATRLQ" => [ "length" => 8, "required" => FALSE ],
            "CODACR" => [ "length" => 3, "required" => FALSE ],
            "NATREC" => [ "length" => 1, "required" => FALSE ],
            "EDIFOU" => [ "length" => 14, "required" => FALSE ],
            "CODCNT" => [ "length" => 14, "required" => FALSE ],
            "TYPRMT" => [ "length" => 1, "required" => FALSE ],
            "DISEXC" => [ "length" => 1, "required" => FALSE ],
        ),
        "41.20" => array(
            "CODEXC" => [ "length" => 2, "required" => FALSE ],
            "SEPEXC" => [ "length" => 1, "required" => FALSE ],
            "SCOEXC" => [ "length" => 2, "required" => FALSE ],
            "TRTEXC" => [ "length" => 1, "required" => FALSE ],
            "NUMREC" => [ "length" => 8, "required" => FALSE ],
            "SNUREC" => [ "length" => 3, "required" => FALSE ],
            "REFREC" => [ "length" => 30, "required" => FALSE ],
            "NLIREC" => [ "length" => 5, "required" => FALSE ],
            "CODACT" => [ "length" => 3, "required" => FALSE ],
            "CODCLI" => [ "length" => 14, "required" => FALSE ],
            "CODPRO" => [ "length" => 17, "required" => FALSE ],
            "VALPRO" => [ "length" => 2, "required" => FALSE ],
            "UVCREA" => [ "length" => 9, "required" => FALSE ],
            "UNICDE" => [ "length" => 3, "required" => FALSE ],
            "CODPRN" => [ "length" => 17, "required" => FALSE ],
            "TYPOPE" => [ "length" => 1, "required" => FALSE ],
            "NUMOPE" => [ "length" => 6, "required" => FALSE ],
            "CODACR" => [ "length" => 3, "required" => FALSE ],
            "UVCREC" => [ "length" => 9, "required" => FALSE ],
            "UVCGRA" => [ "length" => 9, "required" => FALSE ],
            "UVCIMM" => [ "length" => 9, "required" => FALSE ],
            "MOTIMM" => [ "length" => 3, "required" => FALSE ],
            "UVCRFU" => [ "length" => 9, "required" => FALSE ],
            "MOTRFU" => [ "length" => 3, "required" => FALSE ],
            "UVCRLQ" => [ "length" => 9, "required" => FALSE ],
            "DATFVI" => [ "length" => 8, "required" => FALSE ],
            "MESPRO" => [ "length" => 1, "required" => FALSE ],
            "PDNREC" => [ "length" => 11, "required" => FALSE ],
            "DATFAB" => [ "length" => 8, "required" => FALSE ],
            "CODLOT" => [ "length" => 20, "required" => FALSE ],
            "NUMLOT" => [ "length" => 9, "required" => FALSE ],
            "RECSOL" => [ "length" => 1, "required" => FALSE ],
            "CODMTR" => [ "length" => 5, "required" => FALSE ],
            "INDPRO" => [ "length" => 10, "required" => FALSE ],
            "DISEXC" => [ "length" => 5, "required" => FALSE ],
        ),
        "41.21" => array(
            "CODEXC" => [ "length" => 2, "required" => FALSE ],
            "SEPEXC" => [ "length" => 1, "required" => FALSE ],
            "SCOEXC" => [ "length" => 2, "required" => FALSE ],
            "TRTEXC" => [ "length" => 1, "required" => FALSE ],
            "NUMREC" => [ "length" => 8, "required" => FALSE ],
            "SNUREC" => [ "length" => 3, "required" => FALSE ],
            "REFREC" => [ "length" => 30, "required" => FALSE ],
            "NLIREC" => [ "length" => 5, "required" => FALSE ],
            "DIPREC" => [ "length" => 50, "required" => FALSE ],
            "TOPREC" => [ "length" => 5, "required" => FALSE ],
            "PRXPRO" => [ "length" => 9, "required" => FALSE ],
            "EDIPRO" => [ "length" => 17, "required" => FALSE ],
            "EDICLI" => [ "length" => 14, "required" => FALSE ],
            "UVCPRE" => [ "length" => 9, "required" => FALSE ],
            "UNIREC" => [ "length" => 3, "required" => FALSE ],
            "QTEUOM" => [ "length" => 9, "required" => FALSE ],
            "CODTDD" => [ "length" => 3, "required" => FALSE ],
            "NUMMTR" => [ "length" => 20, "required" => FALSE ],
            "DISEXC" => [ "length" => 65, "required" => FALSE ],
        ),
        "41.99" => array(
            "CODEXC" => [ "length" => 2, "required" => FALSE ],
            "SEPEXC" => [ "length" => 1, "required" => FALSE ],
            "SCOEXC" => [ "length" => 2, "required" => FALSE ],
            "TRTEXC" => [ "length" => 1, "required" => FALSE ],
            "NUMREC" => [ "length" => 8, "required" => FALSE ],
            "SNUREC" => [ "length" => 3, "required" => FALSE ],
            "REFREC" => [ "length" => 30, "required" => FALSE ],
            "CUMLIG" => [ "length" => 4, "required" => FALSE ],
            "CUMPAL" => [ "length" => 5, "required" => FALSE ],
            "COLTOT" => [ "length" => 9, "required" => FALSE ],
            "TOTPRO" => [ "length" => 5, "required" => FALSE ],
            "DISEXC" => [ "length" => 186, "required" => FALSE ],
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
        return "M41";
    }
}