<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtLocationItem StructType
 * @subpackage Structs
 */
class ExtLocationItem extends AlphanumComparator
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The location
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $location;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The value
     * @var float
     */
    public $value;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The internalLocation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $internalLocation;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $remark;
    /**
     * The sortOrder
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $sortOrder;
    /**
     * The sysValue
     * @var int
     */
    public $sysValue;
    /**
     * Constructor method for ExtLocationItem
     * @uses ExtLocationItem::setDescription()
     * @uses ExtLocationItem::setLocation()
     * @uses ExtLocationItem::setType()
     * @uses ExtLocationItem::setValue()
     * @uses ExtLocationItem::setId()
     * @uses ExtLocationItem::setInternalLocation()
     * @uses ExtLocationItem::setRemark()
     * @uses ExtLocationItem::setSortOrder()
     * @uses ExtLocationItem::setSysValue()
     * @param string $description
     * @param string $location
     * @param string $type
     * @param float $value
     * @param int $id
     * @param string $internalLocation
     * @param string $remark
     * @param int $sortOrder
     * @param int $sysValue
     */
    public function __construct($description = null, $location = null, $type = null, $value = null, $id = null, $internalLocation = null, $remark = null, $sortOrder = null, $sysValue = null)
    {
        $this
            ->setDescription($description)
            ->setLocation($location)
            ->setType($type)
            ->setValue($value)
            ->setId($id)
            ->setInternalLocation($internalLocation)
            ->setRemark($remark)
            ->setSortOrder($sortOrder)
            ->setSysValue($sysValue);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \StructType\ExtLocationItem
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param string $location
     * @return \StructType\ExtLocationItem
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->location = $location;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \StructType\ExtLocationItem
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \StructType\ExtLocationItem
     */
    public function setValue($value = null)
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \StructType\ExtLocationItem
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get internalLocation value
     * @return string|null
     */
    public function getInternalLocation()
    {
        return $this->internalLocation;
    }
    /**
     * Set internalLocation value
     * @param string $internalLocation
     * @return \StructType\ExtLocationItem
     */
    public function setInternalLocation($internalLocation = null)
    {
        // validation for constraint: string
        if (!is_null($internalLocation) && !is_string($internalLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internalLocation, true), gettype($internalLocation)), __LINE__);
        }
        $this->internalLocation = $internalLocation;
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
     * @return \StructType\ExtLocationItem
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
     * Get sortOrder value
     * @return int|null
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
    /**
     * Set sortOrder value
     * @param int $sortOrder
     * @return \StructType\ExtLocationItem
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: int
        if (!is_null($sortOrder) && !(is_int($sortOrder) || ctype_digit($sortOrder))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortOrder, true), gettype($sortOrder)), __LINE__);
        }
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Get sysValue value
     * @return int|null
     */
    public function getSysValue()
    {
        return $this->sysValue;
    }
    /**
     * Set sysValue value
     * @param int $sysValue
     * @return \StructType\ExtLocationItem
     */
    public function setSysValue($sysValue = null)
    {
        // validation for constraint: int
        if (!is_null($sysValue) && !(is_int($sysValue) || ctype_digit($sysValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sysValue, true), gettype($sysValue)), __LINE__);
        }
        $this->sysValue = $sysValue;
        return $this;
    }
}
