<?php
/**
 * Created by PhpStorm.
 * User: Enigma
 * Date: 29/6/2017
 * Time: 6:22 PM
 */
namespace Boda\EdiParserBundle\Model\Infolog;

use Boda\EdiParserBundle\Model\ModelAbstract;

class M20 extends ModelAbstract
{

    /**
     * Header Template
     *
     * @var array $templateHeader
     */
    protected static $templateHeader = [
        "CODEXC" => null,
        "SEPEXC" => null,
        "SCOEXC" => null,
        "TRTEXC" => null,
        "EMTEXC" => null,
        "RCTEXC" => null,
        "DATEXC" => null,
        "HEUEXC" => null,
        "NUMEXC" => null,
        "ACQEXC" => null,
        "VEREXC" => null,
        "NOMSYS" => null,
        "NOMDTQ" => null,
        "BIBDTQ" => null,
        "LIBEXC" => null,
        "PGMDST" => null,
        "PARDST" => null,
        "CODACT" => null,
        "IGLSIT" => null,
        "EDISIT" => null,
        "IMAEXC" => null,
        "IDEMSG" => null,
        "DISEXC" => null,
    ];

    /**
     * Footer Template
     *
     * @var array $templateFooter
     */
    protected static $templateFooter = [
        "CODEXC"=> null,
        "SEPEXC"=> null,
        "SCOEXC"=> null,
        "TRTEXC"=> null,
        "EMTEXC"=> null,
        "RCTEXC"=> null,
        "DATEXC"=> null,
        "HEUEXC"=> null,
        "NUMEXC"=> null,
        "CPTEXC"=> null,
        "ERREXC"=> null,
        "IDEMSG"=> null,
        "DEBFIN"=> null,
        "DISEXC"=> null,
    ];

    /**
     * Template Data
     * @var array $templateData
     */
    protected static $templateData = array(
        // Déclarations clients (obligatoire)
        "20.00" => array(
            "CODEXC"=> null,
            "SEPEXC"=> null,
            "SCOEXC"=> null,
            "TRTEXC"=> null,
            "CODACT"=> null,
            "CODCLI"=> null,
            "TYPCLI"=> null,
            "CATCLI"=> null,
            "CLILIV"=> null,
            "EDICLI"=> null,
            "NOMCLI"=> null,
            "AD1CLI"=> null,
            "AD2CLI"=> null,
            "CPOCLI"=> null,
            "VILCLI"=> null,
            "PAYCLI"=> null,
            "TELCLI"=> null,
            "FAXCLI"=> null,
            "TLXCLI"=> null,
            "CODLGE"=> null,
            "CODDEV"=> null,
            "IGLSIT"=> null,
            "PTYCLI"=> null,
            "ETACLI"=> null,
            "DISEXC"=> null,
        ),

        // Declarations clients (Facultatif)
        "20.01" => array(
            "CODEXC"=> null,
            "SEPEXC"=> null,
            "SCOEXC"=> null,
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
            "CODEXC"=> null,
            "SEPEXC"=> null,
            "SCOEXC"=> null,
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
}