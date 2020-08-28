<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VesaSystem StructType
 * @subpackage Structs
 */
class VesaSystem extends AbstractStructBase
{
    /**
     * The system_type_id
     * @var int
     */
    public $system_type_id;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $text;
    /**
     * Constructor method for VesaSystem
     * @uses VesaSystem::setSystem_type_id()
     * @uses VesaSystem::setText()
     * @param int $system_type_id
     * @param string $text
     */
    public function __construct($system_type_id = null, $text = null)
    {
        $this
            ->setSystem_type_id($system_type_id)
            ->setText($text);
    }
    /**
     * Get system_type_id value
     * @return int|null
     */
    public function getSystem_type_id()
    {
        return $this->system_type_id;
    }
    /**
     * Set system_type_id value
     * @param int $system_type_id
     * @return \StructType\VesaSystem
     */
    public function setSystem_type_id($system_type_id = null)
    {
        // validation for constraint: int
        if (!is_null($system_type_id) && !(is_int($system_type_id) || ctype_digit($system_type_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($system_type_id, true), gettype($system_type_id)), __LINE__);
        }
        $this->system_type_id = $system_type_id;
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \StructType\VesaSystem
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        return $this;
    }
}
