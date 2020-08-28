<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtAdjustment StructType
 * @subpackage Structs
 */
class ExtAdjustment extends AbstractStructBase
{
    /**
     * The imageName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $imageName;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The order
     * @var int
     */
    public $order;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $remark;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The subAdjustments
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtAdjustment
     */
    public $subAdjustments;
    /**
     * The unit
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $unit;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $value;
    /**
     * Constructor method for ExtAdjustment
     * @uses ExtAdjustment::setImageName()
     * @uses ExtAdjustment::setName()
     * @uses ExtAdjustment::setOrder()
     * @uses ExtAdjustment::setRemark()
     * @uses ExtAdjustment::setStatus()
     * @uses ExtAdjustment::setSubAdjustments()
     * @uses ExtAdjustment::setUnit()
     * @uses ExtAdjustment::setValue()
     * @param string $imageName
     * @param string $name
     * @param int $order
     * @param string $remark
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtAdjustment $subAdjustments
     * @param string $unit
     * @param string $value
     */
    public function __construct($imageName = null, $name = null, $order = null, $remark = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtAdjustment $subAdjustments = null, $unit = null, $value = null)
    {
        $this
            ->setImageName($imageName)
            ->setName($name)
            ->setOrder($order)
            ->setRemark($remark)
            ->setStatus($status)
            ->setSubAdjustments($subAdjustments)
            ->setUnit($unit)
            ->setValue($value);
    }
    /**
     * Get imageName value
     * @return string|null
     */
    public function getImageName()
    {
        return $this->imageName;
    }
    /**
     * Set imageName value
     * @param string $imageName
     * @return \StructType\ExtAdjustment
     */
    public function setImageName($imageName = null)
    {
        // validation for constraint: string
        if (!is_null($imageName) && !is_string($imageName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageName, true), gettype($imageName)), __LINE__);
        }
        $this->imageName = $imageName;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\ExtAdjustment
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
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
     * @return \StructType\ExtAdjustment
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
     * Get remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \StructType\ExtAdjustment
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        return $this;
    }
    /**
     * Get status value
     * @return \StructType\ExtStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \StructType\ExtStatus $status
     * @return \StructType\ExtAdjustment
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get subAdjustments value
     * @return \ArrayType\ArrayOfExtAdjustment|null
     */
    public function getSubAdjustments()
    {
        return $this->subAdjustments;
    }
    /**
     * Set subAdjustments value
     * @param \ArrayType\ArrayOfExtAdjustment $subAdjustments
     * @return \StructType\ExtAdjustment
     */
    public function setSubAdjustments(\ArrayType\ArrayOfExtAdjustment $subAdjustments = null)
    {
        $this->subAdjustments = $subAdjustments;
        return $this;
    }
    /**
     * Get unit value
     * @return string|null
     */
    public function getUnit()
    {
        return $this->unit;
    }
    /**
     * Set unit value
     * @param string $unit
     * @return \StructType\ExtAdjustment
     */
    public function setUnit($unit = null)
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unit, true), gettype($unit)), __LINE__);
        }
        $this->unit = $unit;
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
     * @return \StructType\ExtAdjustment
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
