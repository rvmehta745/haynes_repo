<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMapItem StructType
 * @subpackage Structs
 */
class ExtMapItem extends AbstractStructBase
{
    /**
     * The key
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $key;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $value;
    /**
     * Constructor method for ExtMapItem
     * @uses ExtMapItem::setKey()
     * @uses ExtMapItem::setValue()
     * @param string $key
     * @param string $value
     */
    public function __construct($key = null, $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \StructType\ExtMapItem
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->key = $key;
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
     * @return \StructType\ExtMapItem
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
