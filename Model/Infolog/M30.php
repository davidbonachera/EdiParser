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
        // Déclarations clients (obligatoire)

    );
    
    public static $validationTemplateData = array(
    );

    public function __construct($validation=true)
    {
        parent::__construct($validation);
        //$this->data = parent::convert_array_to_obj_recursive($this->templateData);
    }

    public function validate()
    {
        // TODO: Implement validate() method.
    }
}