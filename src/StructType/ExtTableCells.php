<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtTableCells StructType
 * @subpackage Structs
 */
class ExtTableCells extends AbstractStructBase
{
    /**
     * The order
     * @var int
     */
    public $order;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $value;
    /**
     * Constructor method for ExtTableCells
     * @uses ExtTableCells::setOrder()
     * @uses ExtTableCells::setValue()
     * @param int $order
     * @param string $value
     */
    public function __construct($order = null, $value = null)
    {
        $this
            ->setOrder($order)
            ->setValue($value);
    }
    /**
     * Get order value
     * @return int|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param int $order
     * @return \StructType\ExtTableCells
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->order = $order;
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
     * @return \StructType\ExtTableCells
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
