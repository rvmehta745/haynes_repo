<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtWSCriteriaValue StructType
 * @subpackage Structs
 */
class ExtWSCriteriaValue extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $value;
    /**
     * Constructor method for ExtWSCriteriaValue
     * @uses ExtWSCriteriaValue::setId()
     * @uses ExtWSCriteriaValue::setValue()
     * @param string $id
     * @param string $value
     */
    public function __construct($id = null, $value = null)
    {
        $this
            ->setId($id)
            ->setValue($value);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\ExtWSCriteriaValue
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \StructType\ExtWSCriteriaValue
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
}
