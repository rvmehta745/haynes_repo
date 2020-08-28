<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for mapItem StructType
 * @subpackage Structs
 */
class MapItem extends AbstractStructBase
{
    /**
     * The key
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var mixed
     */
    public $key;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var mixed
     */
    public $value;
    /**
     * Constructor method for mapItem
     * @uses MapItem::setKey()
     * @uses MapItem::setValue()
     * @param mixed $key
     * @param mixed $value
     */
    public function __construct($key = null, $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get key value
     * @return mixed|null
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param mixed $key
     * @return \StructType\MapItem
     */
    public function setKey($key = null)
    {
        $this->key = $key;
        return $this;
    }
    /**
     * Get value value
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param mixed $value
     * @return \StructType\MapItem
     */
    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }
}
