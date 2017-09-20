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

class M51 extends ModelAbstract
{
    /**
     * Template Data
     * @var array $templateData
     */
    public static $templateData = array(
        // M51 : Remontée entête livraison (Systématique)
        "51.00" => array(
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
            "CODACL" => null,
            "ORICDE" => null,
            "DATLIV" => null,
            "HEULIV" => null,
            "CLILIV" => null,
            "TYPLIV" => null,
            "NUMVAG" => null,
            "DATPRP" => null,
            "CODRGT" => null,
            "TOULIV" => null,
            "ORDLIV" => null,
            "NUMTOU" => null,
            "DATEXP" => null,
            "HEUEXP" => null,
            "CODTRA" => null,
            "CODCAM" => null,
            "CODCHF" => null,
            "CTRLIV" => null,
            "REFCNT" => null,
            "CODSIT" => null,
            "NUMPLB1" => null,
            "NUMPLB2" => null,
            "CODLDR" => null,
            "LIVSOL" => null,
            "NUMCNT" => null,
            "NUMTPT" => null,
            "DISEXC" => null,
        ),
        "51.20" => array(
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
            "EDIPRO" => null,
            "UVCCDE" => null,
            "UNICDE" => null,
            "LIVSOL" => null,
            "UVCLIV" => null,
            "MESPRO" => null,
            "PDNLIV" => null,
            "CODACL" => null,
            "MOTMVT" => null,
            "TYPSTK" => null,
            "TYPOPE" => null,
            "NUMOPE" => null,
            "SPCPRO" => null,
            "PCBPRO" => null,
            "TOPLIV" => null,
            "DIPLIV" => null,
            "UVCSRV" => null,
            "UVCINI" => null,
            "NUMEBL" => null,
            "SNUEBL" => null,
            "INDPRO" => null,
        ),
        "51.99" => array(
            "CODEXC" => null,
            "SEPEXC" => null,
            "SCOEXC" => null,
            "TRTEXC" => null,
            "NUMLIV" => null,
            "SNULIV" => null,
            "CODACT" => null,
            "CODCLI" => null,
            "REFLIV" => null,
            "CUMLIG" => null,
            "MVTEXC" => null,
            "CUMSUP" => null,
            "COLTOT" => null,
            "TOTPRO" => null,
            "PDBLIV" => null,
            "PDNLIV" => null,
            "DISEXC" => null,
        )
    );

    public static $validationTemplateData = array(
        "51.00" => array(
            "CODEXC" => [ "length" => 2, "required" => FALSE ],
            "SEPEXC" => [ "length" => 1, "required" => FALSE ],
            "SCOEXC" => [ "length" => 2, "required" => FALSE ],
            "TRTEXC" => [ "length" => 1, "required" => FALSE ],
            "NUMLIV" => [ "length" => 8, "required" => FALSE ],
            "SNULIV" => [ "length" => 3, "required" => FALSE ],
            "CODACT" => [ "length" => 3, "required" => FALSE ],
            "CODCLI" => [ "length" => 14, "required" => FALSE ],
            "REFLIV" => [ "length" => 30, "required" => FALSE ],
            "CODTLI" => [ "length" => 3, "required" => FALSE ],
            "CODACL" => [ "length" => 3, "required" => FALSE ],
            "ORICDE" => [ "length" => 1, "required" => FALSE ],
            "DATLIV" => [ "length" => 8, "required" => FALSE ],
            "HEULIV" => [ "length" => 4, "required" => FALSE ],
            "CLILIV" => [ "length" => 14, "required" => FALSE ],
            "TYPLIV" => [ "length" => 1, "required" => FALSE ],
            "NUMVAG" => [ "length" => 8, "required" => FALSE ],
            "DATPRP" => [ "length" => 8, "required" => FALSE ],
            "CODRGT" => [ "length" => 3, "required" => FALSE ],
            "TOULIV" => [ "length" => 4, "required" => FALSE ],
            "ORDLIV" => [ "length" => 4, "required" => FALSE ],
            "NUMTOU" => [ "length" => 8, "required" => FALSE ],
            "DATEXP" => [ "length" => 8, "required" => FALSE ],
            "HEUEXP" => [ "length" => 6, "required" => FALSE ],
            "CODTRA" => [ "length" => 14, "required" => FALSE ],
            "CODCAM" => [ "length" => 14, "required" => FALSE ],
            "CODCHF" => [ "length" => 10, "required" => FALSE ],
            "CTRLIV" => [ "length" => 10, "required" => FALSE ],
            "REFCNT" => [ "length" => 10, "required" => FALSE ],
            "CODSIT" => [ "length" => 3, "required" => FALSE ],
            "NUMPLB1" => [ "length" => 8, "required" => FALSE ],
            "NUMPLB2" => [ "length" => 8, "required" => FALSE ],
            "CODLDR" => [ "length" => 3, "required" => FALSE ],
            "LIVSOL" => [ "length" => 1, "required" => FALSE ],
            "NUMCNT" => [ "length" => 17, "required" => FALSE ],
            "NUMTPT" => [ "length" => 10, "required" => FALSE ],
            "DISEXC" => [ "length" => 1, "required" => FALSE ],
        ),
        "51.20" => array(
            "CODEXC" => [ "length" => 2, "required" => FALSE ],
            "SEPEXC" => [ "length" => 1, "required" => FALSE ],
            "SCOEXC" => [ "length" => 2, "required" => FALSE ],
            "TRTEXC" => [ "length" => 1, "required" => FALSE ],
            "NUMLIV" => [ "length" => 8, "required" => FALSE ],
            "SNULIV" => [ "length" => 3, "required" => FALSE ],
            "CODACT" => [ "length" => 3, "required" => FALSE ],
            "CODCLI" => [ "length" => 14, "required" => FALSE ],
            "REFLIV" => [ "length" => 30, "required" => FALSE ],
            "NLILIV" => [ "length" => 5, "required" => FALSE ],
            "CODPRO" => [ "length" => 17, "required" => FALSE ],
            "VALPRO" => [ "length" => 2, "required" => FALSE ],
            "EDIPRO" => [ "length" => 17, "required" => FALSE ],
            "UVCCDE" => [ "length" => 9, "required" => FALSE ],
            "UNICDE" => [ "length" => 3, "required" => FALSE ],
            "LIVSOL" => [ "length" => 1, "required" => FALSE ],
            "UVCLIV" => [ "length" => 9, "required" => FALSE ],
            "MESPRO" => [ "length" => 1, "required" => FALSE ],
            "PDNLIV" => [ "length" => 11, "required" => FALSE ],
            "CODACL" => [ "length" => 3, "required" => FALSE ],
            "MOTMVT" => [ "length" => 3, "required" => FALSE ],
            "TYPSTK" => [ "length" => 1, "required" => FALSE ],
            "TYPOPE" => [ "length" => 1, "required" => FALSE ],
            "NUMOPE" => [ "length" => 6, "required" => FALSE ],
            "SPCPRO" => [ "length" => 4, "required" => FALSE ],
            "PCBPRO" => [ "length" => 5, "required" => FALSE ],
            "TOPLIV" => [ "length" => 5, "required" => FALSE ],
            "DIPLIV" => [ "length" => 50, "required" => FALSE ],
            "UVCSRV" => [ "length" => 9, "required" => FALSE ],
            "UVCINI" => [ "length" => 9, "required" => FALSE ],
            "NUMEBL" => [ "length" => 8, "required" => FALSE ],
            "SNUEBL" => [ "length" => 3, "required" => FALSE ],
            "INDPRO" => [ "length" => 10, "required" => FALSE ],
        ),
        "51.99" => array(
            "CODEXC" => [ "length" => 2, "required" => FALSE ],
            "SEPEXC" => [ "length" => 1, "required" => FALSE ],
            "SCOEXC" => [ "length" => 2, "required" => FALSE ],
            "TRTEXC" => [ "length" => 1, "required" => FALSE ],
            "NUMLIV" => [ "length" => 8, "required" => FALSE ],
            "SNULIV" => [ "length" => 3, "required" => FALSE ],
            "CODACT" => [ "length" => 3, "required" => FALSE ],
            "CODCLI" => [ "length" => 14, "required" => FALSE ],
            "REFLIV" => [ "length" => 30, "required" => FALSE ],
            "CUMLIG" => [ "length" => 4, "required" => FALSE ],
            "MVTEXC" => [ "length" => 8, "required" => FALSE ],
            "CUMSUP" => [ "length" => 5, "required" => FALSE ],
            "COLTOT" => [ "length" => 9, "required" => FALSE ],
            "TOTPRO" => [ "length" => 5, "required" => FALSE ],
            "PDBLIV" => [ "length" => 11, "required" => FALSE ],
            "PDNLIV" => [ "length" => 11, "required" => FALSE ],
            "DISEXC" => [ "length" => 139, "required" => FALSE ],
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
        return "M51";
    }
}

