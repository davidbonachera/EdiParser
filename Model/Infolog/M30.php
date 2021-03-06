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
            "COLCOU" => 990099, // Auto add 0 at the beggining
            "COUPAL" => 10001, // Auto add 0 at the beggining
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
            "CODMDP" => "STD",
            "TOPPRN" => null,
            "DISEXC" => null,
        ),
        "30.01" => array(
            "CODEXC" => "30",
            "SEPEXC" => ".",
            "SCOEXC" => "01",
            "TRTEXC" => null,
            "CODACT" => "I2L",
            "CODPRO" => null,
            "VALPRO" => null,
            "INDPRO1" => null,
            "INDPRO2" => null,
            "INDPRO3" => null,
            "INDPRO4" => null,
            "INDPRO5" => null,
            "INDPRO6" => null,
            "INDPRO7" => null,
            "INDPRO8" => null,
            "INDPRO9" => null,
            "INDPRO10" => null,
            "CODMRQ" => null,
            "DESFOU" => null,
            "CIRDET" => null,
            "CIRPAL" => null,
            "METRPL" => null,
            "CODRPL" => null,
            "VALRPL" => null,
            "CODALC" => null,
            "DEGALC" => null,
            "VOLALC" => null,
            "CODMDG" => null,
            "TAUPST1" => null,
            "TAUPST2" => null,
            "TAUPST3" => null,
            "TAUPST4" => null,
            "COELOG" => null,
            "PRXPRO1" => null,
            "PRXPRO2" => null,
            "PRXPRO3" => null,
            "PRXPRO4" => null,
            "CODMDI" => null,
            "NXTIVT" => null,
            "SECSTK" => null,
            "CODMDF" => null,
            "FMTFAB" => null,
            "ACTFAB" => null,
            "CODFAB" => null,
            "VRAFAB" => null,
            "VALFAB" => null,
            "CODZVI " => null,
            "CODEAP" => null,
            "TOPCNA" => null,
        ),
        "30.10" => array(
            "CODEXC" => "30",
            "SEPEXC" => ".",
            "SCOEXC" => "10",
            "TRTEXC" => null,
            "CODACT" => "I2L",
            "CODPRN" => null,
            "CODPRO" => null,
            "VALPRO" => null,
            "NBRCPS" => null,
            "ACTCPS" => null,
            "ORDCPS" => null,
            "TYPCPS" => null,
            "DVSCPS" => null,
            "UNIPRN" => null,
            "DISEXC" => null,
        ),
        "30.50" => array(
            "CODEXC" => "30",
            "SEPEXC" => ".",
            "SCOEXC" => "50",
            "TRTEXC" => null,
            "CODACT" => "I2L",
            "CODPRO" => null,
            "TYPRUB1" => null,
            "TYPRUB2" => null,
            "TYPRUB3" => null,
            "TYPRUB4" => null,
            "TYPRUB5" => null,
            "CODRUB1" => null,
            "CODRUB2" => null,
            "CODRUB3" => null,
            "CODRUB4" => null,
            "CODRUB5" => null,
            "VALRUB1" => null,
            "VALRUB2" => null,
            "VALRUB3" => null,
            "VALRUB4" => null,
            "VALRUB5" => null,
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
            "CODMDP" => [ "length" => 3, "required" => FALSE ],
            "TOPPRN" => [ "length" => 1, "required" => FALSE ],
            "DISEXC" => [ "length" => 2, "required" => FALSE ],
        ),
        "30.01" => array(
            "CODEXC" => [ "length" => 2, "required" => TRUE, "numerical" =>  TRUE ],
            "SEPEXC" => [ "length" => 1, "required" => TRUE, "numerical" =>  FALSE ],
            "SCOEXC" => [ "length" => 2, "required" => TRUE, "numerical" =>  TRUE ],
            "TRTEXC" => [ "length" => 1, "required" => TRUE, "numerical" =>  FALSE ],
            "CODACT" => [ "length" => 3, "required" => TRUE, "numerical" =>  FALSE ],
            "CODPRO" => [ "length" => 17, "required" => TRUE, "numerical" =>  FALSE ],
            "VALPRO" => [ "length" => 2, "required" => TRUE, "numerical" =>  TRUE ],
            "INDPRO1" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "INDPRO2" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "INDPRO3" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "INDPRO4" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "INDPRO5" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "INDPRO6" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "INDPRO7" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "INDPRO8" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "INDPRO9" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "INDPRO10" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "CODMRQ" => [ "length" => 8, "required" => FALSE, "numerical" =>  FALSE ],
            "DESFOU" => [ "length" => 30, "required" => FALSE, "numerical" =>  FALSE ],
            "CIRDET" => [ "length" => 3, "required" => FALSE, "numerical" =>  FALSE ],
            "CIRPAL" => [ "length" => 3, "required" => FALSE, "numerical" =>  FALSE ],
            "METRPL" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "CODRPL" => [ "length" => 17, "required" => FALSE, "numerical" =>  FALSE ],
            "VALRPL" => [ "length" => 2, "required" => FALSE, "numerical" =>  TRUE ],
            "CODALC" => [ "length" => 4, "required" => FALSE, "numerical" =>  FALSE ],
            "DEGALC" => [ "length" => 5, "required" => FALSE, "numerical" =>  TRUE ],
            "VOLALC" => [ "length" => 6, "required" => FALSE, "numerical" =>  TRUE ],
            "CODMDG" => [ "length" => 3, "required" => FALSE, "numerical" =>  FALSE ],
            "TAUPST1" => [ "length" => 5, "required" => FALSE, "numerical" =>  TRUE ],
            "TAUPST2" => [ "length" => 5, "required" => FALSE, "numerical" =>  TRUE ],
            "TAUPST3" => [ "length" => 5, "required" => FALSE, "numerical" =>  TRUE ],
            "TAUPST4" => [ "length" => 5, "required" => FALSE, "numerical" =>  TRUE ],
            "COELOG" => [ "length" => 5, "required" => FALSE, "numerical" =>  TRUE ],
            "PRXPRO1" => [ "length" => 9, "required" => FALSE, "numerical" =>  TRUE ],
            "PRXPRO2" => [ "length" => 9, "required" => FALSE, "numerical" =>  TRUE ],
            "PRXPRO3" => [ "length" => 9, "required" => FALSE, "numerical" =>  TRUE ],
            "PRXPRO4" => [ "length" => 9, "required" => FALSE, "numerical" =>  TRUE ],
            "CODMDI" => [ "length" => 3, "required" => FALSE, "numerical" =>  FALSE ],
            "NXTIVT" => [ "length" => 8, "required" => FALSE, "numerical" =>  TRUE ],
            "SECSTK" => [ "length" => 9, "required" => FALSE, "numerical" =>  TRUE ],
            "CODMDF" => [ "length" => 3, "required" => FALSE, "numerical" =>  FALSE ],
            "FMTFAB" => [ "length" => 5, "required" => FALSE, "numerical" =>  FALSE ],
            "ACTFAB" => [ "length" => 3, "required" => FALSE, "numerical" =>  FALSE ],
            "CODFAB" => [ "length" => 17, "required" => FALSE, "numerical" =>  FALSE ],
            "VRAFAB" => [ "length" => 17, "required" => FALSE, "numerical" =>  FALSE ],
            "VALFAB" => [ "length" => 2, "required" => FALSE, "numerical" =>  TRUE ],
            "CODZVI " => [ "length" => 4, "required" => FALSE, "numerical" =>  FALSE ],
            "CODEAP" => [ "length" => 3, "required" => FALSE, "numerical" =>  FALSE ],
            "TOPCNA" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
        ),
        "30.10" => array(
            "CODEXC" => [ "length" => 2, "required" => TRUE ],
            "SEPEXC" => [ "length" => 1, "required" => TRUE ],
            "SCOEXC" => [ "length" => 2, "required" => TRUE ],
            "TRTEXC" => [ "length" => 1, "required" => TRUE ],
            "CODACT" => [ "length" => 3, "required" => TRUE ],
            "CODPRN" => [ "length" => 17, "required" => TRUE ],
            "CODPRO" => [ "length" => 17, "required" => TRUE ],
            "VALPRO" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE ],
            "NBRCPS" => [ "length" => 4, "required" => TRUE, "numerical" => TRUE ],
            "ACTCPS" => [ "length" => 3, "required" => FALSE ],
            "ORDCPS" => [ "length" => 4, "required" => FALSE, "numerical" => TRUE ],
            "TYPCPS" => [ "length" => 1, "required" => FALSE ],
            "DVSCPS" => [ "length" => 4, "required" => FALSE, "numerical" => TRUE ],
            "UNIPRN" => [ "length" => 3, "required" => FALSE ],
            "DISEXC" => [ "length" => 192, "required" => FALSE ],
        ),
        "30.50" => array(
            "CODEXC" => [ "length" => 2, "required" => TRUE, "numerical" =>  TRUE ],
            "SEPEXC" => [ "length" => 1, "required" => TRUE, "numerical" =>  FALSE ],
            "SCOEXC" => [ "length" => 2, "required" => TRUE, "numerical" =>  TRUE ],
            "TRTEXC" => [ "length" => 1, "required" => TRUE, "numerical" =>  FALSE ],
            "CODACT" => [ "length" => 3, "required" => TRUE, "numerical" =>  FALSE ],
            "CODPRO" => [ "length" => 17, "required" => TRUE, "numerical" =>  FALSE ],
            "TYPRUB1" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "TYPRUB2" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "TYPRUB3" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "TYPRUB4" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "TYPRUB5" => [ "length" => 1, "required" => FALSE, "numerical" =>  FALSE ],
            "CODRUB1" => [ "length" => 4, "required" => FALSE, "numerical" =>  FALSE ],
            "CODRUB2" => [ "length" => 4, "required" => FALSE, "numerical" =>  FALSE ],
            "CODRUB3" => [ "length" => 4, "required" => FALSE, "numerical" =>  FALSE ],
            "CODRUB4" => [ "length" => 4, "required" => FALSE, "numerical" =>  FALSE ],
            "CODRUB5" => [ "length" => 4, "required" => FALSE, "numerical" =>  FALSE ],
            "VALRUB1" => [ "length" => 35, "required" => FALSE, "numerical" =>  FALSE ],
            "VALRUB2" => [ "length" => 35, "required" => FALSE, "numerical" =>  FALSE ],
            "VALRUB3" => [ "length" => 35, "required" => FALSE, "numerical" =>  FALSE ],
            "VALRUB4" => [ "length" => 35, "required" => FALSE, "numerical" =>  FALSE ],
            "VALRUB5" => [ "length" => 35, "required" => FALSE, "numerical" =>  FALSE ],
            "DISEXC" => [ "length" => 30, "required" => FALSE, "numerical" =>  FALSE ],
        ),
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