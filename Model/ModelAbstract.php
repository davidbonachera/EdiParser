<?php
/**
 * Created by PhpStorm.
 * User: Enigma
 * Date: 29/6/2017
 * Time: 6:21 PM
 */
namespace Boda\EdiParserBundle\Model;

abstract class ModelAbstract
{

    /**
     * Header
     *
     * @var array $header
     */
    protected $header = array();

    /**a
     * Data
     *
     * @var array $data
     */
    protected $data = array();

    /**
     * Footer
     *
     * @var array $footer
     */
    protected $footer = array();
    
    /**
     * Validation
     *
     * @var bool
     */
    protected $validation;

    /**
     * Constructor
     *
     * @param bool $validation
     */
    public function __construct($validation = false)
    {
        $this->validate = $validation;
    }

    /**
     * @return boolean
     */
    public function isValidation()
    {
        return $this->validation;
    }

    /**
     * @param boolean $validation
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;
    }

    public function convert_array_to_obj_recursive($a) {
        if (is_array($a) ) {
            foreach($a as $k => $v) {
                if (is_integer($k)) {
                    // only need this if you want to keep the array indexes separate
                    // from the object notation: eg. $o->{1}
                    $a['index'][$k] = $this->convert_array_to_obj_recursive($v);
                }
                else {
                    $a[$k] = $this->convert_array_to_obj_recursive($v);
                }
            }

            return (object) $a;
        }

        // else maintain the type of $a
        return $a;
    }

}