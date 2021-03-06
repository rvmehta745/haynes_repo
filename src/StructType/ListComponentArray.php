<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListComponentArray StructType
 * @subpackage Structs
 */
class ListComponentArray extends AbstractStructBase
{
    /**
     * The components
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_ListComponent
     */
    public $components;
    /**
     * The system_text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $system_text;
    /**
     * The system_type_id
     * @var int
     */
    public $system_type_id;
    /**
     * Constructor method for ListComponentArray
     * @uses ListComponentArray::setComponents()
     * @uses ListComponentArray::setSystem_text()
     * @uses ListComponentArray::setSystem_type_id()
     * @param \ArrayType\ArrayOf_tns2_ListComponent $components
     * @param string $system_text
     * @param int $system_type_id
     */
    public function __construct(\ArrayType\ArrayOf_tns2_ListComponent $components = null, $system_text = null, $system_type_id = null)
    {
        $this
            ->setComponents($components)
            ->setSystem_text($system_text)
            ->setSystem_type_id($system_type_id);
    }
    /**
     * Get components value
     * @return \ArrayType\ArrayOf_tns2_ListComponent|null
     */
    public function getComponents()
    {
        return $this->components;
    }
    /**
     * Set components value
     * @param \ArrayType\ArrayOf_tns2_ListComponent $components
     * @return \StructType\ListComponentArray
     */
    public function setComponents(\ArrayType\ArrayOf_tns2_ListComponent $components = null)
    {
        $this->components = $components;
        return $this;
    }
    /**
     * Get system_text value
     * @return string|null
     */
    public function getSystem_text()
    {
        return $this->system_text;
    }
    /**
     * Set system_text value
     * @param string $system_text
     * @return \StructType\ListComponentArray
     */
    public function setSystem_text($system_text = null)
    {
        // validation for constraint: string
        if (!is_null($system_text) && !is_string($system_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($system_text, true), gettype($system_text)), __LINE__);
        }
        $this->system_text = $system_text;
        return $this;
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
     * @return \StructType\ListComponentArray
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
}
