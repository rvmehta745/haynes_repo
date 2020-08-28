<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtTSBCategoryV3 StructType
 * @subpackage Structs
 */
class ExtTSBCategoryV3 extends AbstractStructBase
{
    /**
     * The categoryDescription
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $categoryDescription;
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
     * @var \ArrayType\ArrayOfExtTSBSystemV3
     */
    public $systems;
    /**
     * Constructor method for ExtTSBCategoryV3
     * @uses ExtTSBCategoryV3::setCategoryDescription()
     * @uses ExtTSBCategoryV3::setStatus()
     * @uses ExtTSBCategoryV3::setSystems()
     * @param string $categoryDescription
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtTSBSystemV3 $systems
     */
    public function __construct($categoryDescription = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtTSBSystemV3 $systems = null)
    {
        $this
            ->setCategoryDescription($categoryDescription)
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
     * @return \StructType\ExtTSBCategoryV3
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
     * @return \StructType\ExtTSBCategoryV3
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get systems value
     * @return \ArrayType\ArrayOfExtTSBSystemV3|null
     */
    public function getSystems()
    {
        return $this->systems;
    }
    /**
     * Set systems value
     * @param \ArrayType\ArrayOfExtTSBSystemV3 $systems
     * @return \StructType\ExtTSBCategoryV3
     */
    public function setSystems(\ArrayType\ArrayOfExtTSBSystemV3 $systems = null)
    {
        $this->systems = $systems;
        return $this;
    }
}
