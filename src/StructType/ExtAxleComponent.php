<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtAxleComponent StructType
 * @subpackage Structs
 */
class ExtAxleComponent extends AbstractStructBase
{
    /**
     * The axleType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_string
     */
    public $axleType;
    /**
     * The componentCodes
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_string
     */
    public $componentCodes;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The oem
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $oem;
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
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtAxleComponent
     * @uses ExtAxleComponent::setAxleType()
     * @uses ExtAxleComponent::setComponentCodes()
     * @uses ExtAxleComponent::setDescription()
     * @uses ExtAxleComponent::setId()
     * @uses ExtAxleComponent::setOem()
     * @uses ExtAxleComponent::setRemark()
     * @uses ExtAxleComponent::setSortOrder()
     * @uses ExtAxleComponent::setStatus()
     * @param \ArrayType\ArrayOf_xsd_string $axleType
     * @param \ArrayType\ArrayOf_xsd_string $componentCodes
     * @param string $description
     * @param int $id
     * @param string $oem
     * @param string $remark
     * @param int $sortOrder
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOf_xsd_string $axleType = null, \ArrayType\ArrayOf_xsd_string $componentCodes = null, $description = null, $id = null, $oem = null, $remark = null, $sortOrder = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setAxleType($axleType)
            ->setComponentCodes($componentCodes)
            ->setDescription($description)
            ->setId($id)
            ->setOem($oem)
            ->setRemark($remark)
            ->setSortOrder($sortOrder)
            ->setStatus($status);
    }
    /**
     * Get axleType value
     * @return \ArrayType\ArrayOf_xsd_string|null
     */
    public function getAxleType()
    {
        return $this->axleType;
    }
    /**
     * Set axleType value
     * @param \ArrayType\ArrayOf_xsd_string $axleType
     * @return \StructType\ExtAxleComponent
     */
    public function setAxleType(\ArrayType\ArrayOf_xsd_string $axleType = null)
    {
        $this->axleType = $axleType;
        return $this;
    }
    /**
     * Get componentCodes value
     * @return \ArrayType\ArrayOf_xsd_string|null
     */
    public function getComponentCodes()
    {
        return $this->componentCodes;
    }
    /**
     * Set componentCodes value
     * @param \ArrayType\ArrayOf_xsd_string $componentCodes
     * @return \StructType\ExtAxleComponent
     */
    public function setComponentCodes(\ArrayType\ArrayOf_xsd_string $componentCodes = null)
    {
        $this->componentCodes = $componentCodes;
        return $this;
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
     * @return \StructType\ExtAxleComponent
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
     * @return \StructType\ExtAxleComponent
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
     * Get oem value
     * @return string|null
     */
    public function getOem()
    {
        return $this->oem;
    }
    /**
     * Set oem value
     * @param string $oem
     * @return \StructType\ExtAxleComponent
     */
    public function setOem($oem = null)
    {
        // validation for constraint: string
        if (!is_null($oem) && !is_string($oem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oem, true), gettype($oem)), __LINE__);
        }
        $this->oem = $oem;
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
     * @return \StructType\ExtAxleComponent
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
     * @return \StructType\ExtAxleComponent
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
     * @return \StructType\ExtAxleComponent
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
