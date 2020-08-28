<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtAdjustmentV3 StructType
 * @subpackage Structs
 */
class ExtAdjustmentV3 extends AbstractStructBase
{
    /**
     * The descriptionId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $descriptionId;
    /**
     * The extraInfoId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $extraInfoId;
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
     * The smartLinks
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtSmartLink
     */
    public $smartLinks;
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
     * @var \ArrayType\ArrayOfExtAdjustmentV3
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
     * Constructor method for ExtAdjustmentV3
     * @uses ExtAdjustmentV3::setDescriptionId()
     * @uses ExtAdjustmentV3::setExtraInfoId()
     * @uses ExtAdjustmentV3::setImageName()
     * @uses ExtAdjustmentV3::setName()
     * @uses ExtAdjustmentV3::setOrder()
     * @uses ExtAdjustmentV3::setRemark()
     * @uses ExtAdjustmentV3::setSmartLinks()
     * @uses ExtAdjustmentV3::setStatus()
     * @uses ExtAdjustmentV3::setSubAdjustments()
     * @uses ExtAdjustmentV3::setUnit()
     * @uses ExtAdjustmentV3::setValue()
     * @param int $descriptionId
     * @param int $extraInfoId
     * @param string $imageName
     * @param string $name
     * @param int $order
     * @param string $remark
     * @param \ArrayType\ArrayOfExtSmartLink $smartLinks
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtAdjustmentV3 $subAdjustments
     * @param string $unit
     * @param string $value
     */
    public function __construct($descriptionId = null, $extraInfoId = null, $imageName = null, $name = null, $order = null, $remark = null, \ArrayType\ArrayOfExtSmartLink $smartLinks = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtAdjustmentV3 $subAdjustments = null, $unit = null, $value = null)
    {
        $this
            ->setDescriptionId($descriptionId)
            ->setExtraInfoId($extraInfoId)
            ->setImageName($imageName)
            ->setName($name)
            ->setOrder($order)
            ->setRemark($remark)
            ->setSmartLinks($smartLinks)
            ->setStatus($status)
            ->setSubAdjustments($subAdjustments)
            ->setUnit($unit)
            ->setValue($value);
    }
    /**
     * Get descriptionId value
     * @return int|null
     */
    public function getDescriptionId()
    {
        return $this->descriptionId;
    }
    /**
     * Set descriptionId value
     * @param int $descriptionId
     * @return \StructType\ExtAdjustmentV3
     */
    public function setDescriptionId($descriptionId = null)
    {
        // validation for constraint: int
        if (!is_null($descriptionId) && !(is_int($descriptionId) || ctype_digit($descriptionId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($descriptionId, true), gettype($descriptionId)), __LINE__);
        }
        $this->descriptionId = $descriptionId;
        return $this;
    }
    /**
     * Get extraInfoId value
     * @return int|null
     */
    public function getExtraInfoId()
    {
        return $this->extraInfoId;
    }
    /**
     * Set extraInfoId value
     * @param int $extraInfoId
     * @return \StructType\ExtAdjustmentV3
     */
    public function setExtraInfoId($extraInfoId = null)
    {
        // validation for constraint: int
        if (!is_null($extraInfoId) && !(is_int($extraInfoId) || ctype_digit($extraInfoId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($extraInfoId, true), gettype($extraInfoId)), __LINE__);
        }
        $this->extraInfoId = $extraInfoId;
        return $this;
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
     * @return \StructType\ExtAdjustmentV3
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
     * @return \StructType\ExtAdjustmentV3
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
     * @return \StructType\ExtAdjustmentV3
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
     * @return \StructType\ExtAdjustmentV3
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
     * Get smartLinks value
     * @return \ArrayType\ArrayOfExtSmartLink|null
     */
    public function getSmartLinks()
    {
        return $this->smartLinks;
    }
    /**
     * Set smartLinks value
     * @param \ArrayType\ArrayOfExtSmartLink $smartLinks
     * @return \StructType\ExtAdjustmentV3
     */
    public function setSmartLinks(\ArrayType\ArrayOfExtSmartLink $smartLinks = null)
    {
        $this->smartLinks = $smartLinks;
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
     * @return \StructType\ExtAdjustmentV3
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get subAdjustments value
     * @return \ArrayType\ArrayOfExtAdjustmentV3|null
     */
    public function getSubAdjustments()
    {
        return $this->subAdjustments;
    }
    /**
     * Set subAdjustments value
     * @param \ArrayType\ArrayOfExtAdjustmentV3 $subAdjustments
     * @return \StructType\ExtAdjustmentV3
     */
    public function setSubAdjustments(\ArrayType\ArrayOfExtAdjustmentV3 $subAdjustments = null)
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
     * @return \StructType\ExtAdjustmentV3
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
     * @return \StructType\ExtAdjustmentV3
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
