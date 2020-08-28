<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtTSBCategory StructType
 * @subpackage Structs
 */
class ExtTSBCategory extends AbstractStructBase
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
     * @var \ArrayType\ArrayOfExtTSBSystem
     */
    public $systems;
    /**
     * Constructor method for ExtTSBCategory
     * @uses ExtTSBCategory::setCategoryDescription()
     * @uses ExtTSBCategory::setStatus()
     * @uses ExtTSBCategory::setSystems()
     * @param string $categoryDescription
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtTSBSystem $systems
     */
    public function __construct($categoryDescription = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtTSBSystem $systems = null)
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
     * @return \StructType\ExtTSBCategory
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
     * @return \StructType\ExtTSBCategory
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get systems value
     * @return \ArrayType\ArrayOfExtTSBSystem|null
     */
    public function getSystems()
    {
        return $this->systems;
    }
    /**
     * Set systems value
     * @param \ArrayType\ArrayOfExtTSBSystem $systems
     * @return \StructType\ExtTSBCategory
     */
    public function setSystems(\ArrayType\ArrayOfExtTSBSystem $systems = null)
    {
        $this->systems = $systems;
        return $this;
    }
}
