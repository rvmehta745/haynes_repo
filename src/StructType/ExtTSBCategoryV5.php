<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtTSBCategoryV5 StructType
 * @subpackage Structs
 */
class ExtTSBCategoryV5 extends AbstractStructBase
{
    /**
     * The categoryDescription
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $categoryDescription;
    /**
     * The categoryTypeConstant
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $categoryTypeConstant;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The systems
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtTSBSystemV4
     */
    public $systems;
    /**
     * Constructor method for ExtTSBCategoryV5
     * @uses ExtTSBCategoryV5::setCategoryDescription()
     * @uses ExtTSBCategoryV5::setCategoryTypeConstant()
     * @uses ExtTSBCategoryV5::setStatus()
     * @uses ExtTSBCategoryV5::setSystems()
     * @param string $categoryDescription
     * @param string $categoryTypeConstant
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtTSBSystemV4 $systems
     */
    public function __construct($categoryDescription = null, $categoryTypeConstant = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtTSBSystemV4 $systems = null)
    {
        $this
            ->setCategoryDescription($categoryDescription)
            ->setCategoryTypeConstant($categoryTypeConstant)
            ->setStatus($status)
            ->setSystems($systems);
    }
    /**
     * Get categoryDescription value
     * @return string|null
     */
    public function getCategoryDescription()
    {
        return $this->categoryDescription;
    }
    /**
     * Set categoryDescription value
     * @param string $categoryDescription
     * @return \StructType\ExtTSBCategoryV5
     */
    public function setCategoryDescription($categoryDescription = null)
    {
        // validation for constraint: string
        if (!is_null($categoryDescription) && !is_string($categoryDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryDescription, true), gettype($categoryDescription)), __LINE__);
        }
        $this->categoryDescription = $categoryDescription;
        return $this;
    }
    /**
     * Get categoryTypeConstant value
     * @return string|null
     */
    public function getCategoryTypeConstant()
    {
        return $this->categoryTypeConstant;
    }
    /**
     * Set categoryTypeConstant value
     * @param string $categoryTypeConstant
     * @return \StructType\ExtTSBCategoryV5
     */
    public function setCategoryTypeConstant($categoryTypeConstant = null)
    {
        // validation for constraint: string
        if (!is_null($categoryTypeConstant) && !is_string($categoryTypeConstant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryTypeConstant, true), gettype($categoryTypeConstant)), __LINE__);
        }
        $this->categoryTypeConstant = $categoryTypeConstant;
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
     * @return \StructType\ExtTSBCategoryV5
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get systems value
     * @return \ArrayType\ArrayOfExtTSBSystemV4|null
     */
    public function getSystems()
    {
        return $this->systems;
    }
    /**
     * Set systems value
     * @param \ArrayType\ArrayOfExtTSBSystemV4 $systems
     * @return \StructType\ExtTSBCategoryV5
     */
    public function setSystems(\ArrayType\ArrayOfExtTSBSystemV4 $systems = null)
    {
        $this->systems = $systems;
        return $this;
    }
}
