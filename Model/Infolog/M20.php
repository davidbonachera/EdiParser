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

class M20 extends ModelAbstract
{
    /**
     * Template Data
     * @var array $templateData
     */
    public static $templateData = array(
        // Déclarations clients (obligatoire)
        "20.00" => array(
            "CODEXC"=> "20",
            "SEPEXC"=> ".",
            "SCOEXC"=> "00",
            "TRTEXC"=> null,
            "CODACT"=> "I2L",
            "CODCLI"=> null,
            "TYPCLI"=> "1",
            "CATCLI"=> "001",
            "CLILIV"=> null,
            "EDICLI"=> null,
            "NOMCLI"=> null,
            "AD1CLI"=> "AD1CLI",
            "AD2CLI"=> null,
            "CPOCLI"=> null,
            "VILCLI"=> "VILCLI",
            "PAYCLI"=> null,
            "TELCLI"=> null,
            "FAXCLI"=> null,
            "TLXCLI"=> null,
            "CODLGE"=> null,
            "CODDEV"=> null,
            "IGLSIT"=> null,
            "PTYCLI"=> null,
            "ETACLI"=> "20",
            "DISEXC"=> null,
        ),

        // Declarations clients (Facultatif)
        "20.01" => array(
            "CODEXC"=> "20",
            "SEPEXC"=> ".",
            "SCOEXC"=> "01",
            "TRTEXC"=> null,
            "CODACT"=> null,
            "CODCLI"=> null,
            "RSPCLI"=> null,
            "CODMOP"=> null,
            "CODRGT"=> null,
            "CODTRA"=> null,
            "TOULIV"=> null,
            "ORDLIV"=> null,
            "KAILIV"=> null,
            "GSTALC"=> null,
            "PTYDES"=> null,
            "NUMACS"=> null,
            "CPICLI"=> null,
            "TVACCE"=> null,
            "IDEALC"=> null,
            "DISEXC"=> null,
        ),

        // Déclaration clients (Partie 2:Facultatif)
        "20.02" => array(
            "CODEXC"=> "20",
            "SEPEXC"=> ".",
            "SCOEXC"=> "02",
            "TRTEXC"=> null,
            "CODACT"=> null,
            "CODCLI"=> null,
            "CM1CLI"=> null,
            "CM2CLI"=> null,
            "CM3CLI"=> null,
            "EMLADR"=> null,
            "CPICLI"=> null,
            "DISEXC"=> null,
        ),
    );

    public static $validationTemplateData = array(
        "20.00" => array(
            "CODEXC" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "SEPEXC" => [ "length" => 1, "required" => TRUE ],
            "SCOEXC" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "TRTEXC" => [ "length" => 1, "required" => TRUE ],
            "CODACT" => [ "length" => 3, "required" => TRUE ],
            "CODCLI" => [ "length" => 14, "required" => TRUE ],
            "TYPCLI" => [ "length" => 1, "required" => FALSE ],
            "CATCLI" => [ "length" => 3, "required" => TRUE ],
            "CLILIV" => [ "length" => 14, "required" => FALSE ],
            "EDICLI" => [ "length" => 14, "required" => FALSE ],
            "NOMCLI" => [ "length" => 30, "required" => TRUE ],
            "AD1CLI" => [ "length" => 30, "required" => TRUE ],
            "AD2CLI" => [ "length" => 30, "required" => FALSE ],
            "CPOCLI" => [ "length" => 5, "required" => FALSE, "numerical" => TRUE],
            "VILCLI" => [ "length" => 26, "required" => TRUE ],
            "PAYCLI" => [ "length" => 3, "required" => FALSE ],
            "TELCLI" => [ "length" => 20, "required" => FALSE ],
            "FAXCLI" => [ "length" => 20, "required" => FALSE ],
            "TLXCLI" => [ "length" => 15, "required" => FALSE ],
            "CODLGE" => [ "length" => 3, "required" => FALSE ],
            "CODDEV" => [ "length" => 3, "required" => TRUE ],
            "IGLSIT" => [ "length" => 3, "required" => FALSE, "numerical" => TRUE],
            "PTYCLI" => [ "length" => 3, "required" => FALSE ],
            "ETACLI" => [ "length" => 2, "required" => TRUE ],
            "DISEXC" => [ "length" => 8, "required" => FALSE ],
        ),
        "20.01" => array(
            "CODEXC" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "SEPEXC" => [ "length" => 1, "required" => TRUE ],
            "SCOEXC" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "TRTEXC" => [ "length" => 1, "required" => FALSE ],
            "CODACT" => [ "length" => 3, "required" => TRUE ],
            "CODCLI" => [ "length" => 14, "required" => TRUE ],
            "RSPCLI" => [ "length" => 30, "required" => FALSE ],
            "CODMOP" => [ "length" => 3, "required" => FALSE ],
            "CODRGT" => [ "length" => 3, "required" => FALSE ],
            "CODTRA" => [ "length" => 14, "required" => FALSE ],
            "TOULIV" => [ "length" => 28, "required" => FALSE, "numerical" => TRUE],
            "ORDLIV" => [ "length" => 28, "required" => FALSE, "numerical" => TRUE],
            "KAILIV" => [ "length" => 21, "required" => FALSE, "numerical" => TRUE],
            "GSTALC" => [ "length" => 1, "required" => FALSE ],
            "PTYDES" => [ "length" => 2, "required" => FALSE, "numerical" => TRUE],
            "NUMACS" => [ "length" => 20, "required" => FALSE ],
            "CPICLI" => [ "length" => 9, "required" => FALSE ],
            "TVACCE" => [ "length" => 20, "required" => FALSE ],
            "IDEALC" => [ "length" => 20, "required" => FALSE ],
            "DISEXC" => [ "length" => 34, "required" => FALSE ],
        ),
        "20.02" => array(
            "CODEXC" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "SEPEXC" => [ "length" => 1, "required" => TRUE ],
            "SCOEXC" => [ "length" => 2, "required" => TRUE, "numerical" => TRUE],
            "TRTEXC" => [ "length" => 1, "required" => TRUE ],
            "CODACT" => [ "length" => 3, "required" => TRUE ],
            "CODCLI" => [ "length" => 14, "required" => TRUE ],
            "CM1CLI" => [ "length" => 45, "required" => FALSE ],
            "CM2CLI" => [ "length" => 45, "required" => FALSE ],
            "CM3CLI" => [ "length" => 45, "required" => FALSE ],
            "EMLADR" => [ "length" => 50, "required" => FALSE ],
            "CPICLI" => [ "length" => 10, "required" => FALSE ],
            "DISEXC" => [ "length" => 38, "required" => FALSE ],
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
        return "M20";
    }
}