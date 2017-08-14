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

class M10 extends ModelAbstract
{
    /**
     * Template Data
     * @var array $templateData
     */
    public static $templateData = array(
        // Déclarations clients (obligatoire)
        "10.00" => array(
            "CODEXC" => "10",
            "SEPEXC" => ".",
            "SCOEXC" => "00",
            "TRTEXC" => null,
            "CODACT" => null,
            "CODFOU" => null,
            "TYPFOU" => null,
            "NOMFOU" => null,
            "AD1FOU" => null,
            "AD2FOU" => null,
            "CPOFOU" => null,
            "VILFOU" => null,
            "PAYFOU" => null,
            "TELFOU" => null,
            "FAXFOU" => null,
            "TLXFOU" => null,
            "EDIFOU" => null,
            "CODTRA" => null,
            "IGLSIT" => null,
            "CODTRE" => null,
            "STAVI" => null,
            "GSTRCP" => null,
            "TYPPRT" => null,
            "CPIFOU" => null,
            "EMBTIE" => null,
            "DISEXC" => null,
        )
    );

    public static $validationTemplateData = array(
        "10.00" => array(
            "CODEXC" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "SEPEXC" => [ "length" => 1, "required" => TRUE ],
            "SCOEXC" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "TRTEXC" => [ "length" => 1, "required" => TRUE ],
            "CODACT" => [ "length" => 3, "required" => FALSE ],
            "CODFOU" => [ "length" => 14, "required" => TRUE ],
            "TYPFOU" => [ "length" => 1, "required" => FALSE ],
            "NOMFOU" => [ "length" => 30, "required" => TRUE ],
            "AD1FOU" => [ "length" => 30, "required" => TRUE ],
            "AD2FOU" => [ "length" => 30, "required" => FALSE ],
            "CPOFOU" => [ "length" => 5, "required" => FALSE, "numerical" => TRUE],
            "VILFOU" => [ "length" => 26, "required" => FALSE ],
            "PAYFOU" => [ "length" => 3, "required" => TRUE ],
            "TELFOU" => [ "length" => 20, "required" => FALSE ],
            "FAXFOU" => [ "length" => 20, "required" => FALSE ],
            "TLXFOU" => [ "length" => 15, "required" => FALSE ],
            "EDIFOU" => [ "length" => 14, "required" => TRUE ],
            "CODTRA" => [ "length" => 14, "required" => FALSE ],
            "IGLSIT" => [ "length" => 3, "required" => FALSE ],
            "CODTRE" => [ "length" => 3, "required" => TRUE ],
            "STAVI" => [ "length" => 1, "required" => FALSE ],
            "GSTRCP" => [ "length" => 1, "required" => FALSE ],
            "TYPPRT" => [ "length" => 1, "required" => TRUE ],
            "CPIFOU" => [ "length" => 10, "required" => FALSE ],
            "EMBTIE" => [ "length" => 1, "required" => FALSE ],
            "DISEXC" => [ "length" => 5, "required" => FALSE ],
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
        return "M10";
    }
}