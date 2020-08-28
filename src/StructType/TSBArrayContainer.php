<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TSBArrayContainer StructType
 * @subpackage Structs
 */
class TSBArrayContainer extends AbstractStructBase
{
    /**
     * The extTsbCategoryArray
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtTSBCategoryV4
     */
    public $extTsbCategoryArray;
    /**
     * The faultCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $faultCode;
    /**
     * Constructor method for TSBArrayContainer
     * @uses TSBArrayContainer::setExtTsbCategoryArray()
     * @uses TSBArrayContainer::setFaultCode()
     * @param \ArrayType\ArrayOfExtTSBCategoryV4 $extTsbCategoryArray
     * @param string $faultCode
     */
    public function __construct(\ArrayType\ArrayOfExtTSBCategoryV4 $extTsbCategoryArray = null, $faultCode = null)
    {
        $this
            ->setExtTsbCategoryArray($extTsbCategoryArray)
            ->setFaultCode($faultCode);
    }
    /**
     * Get extTsbCategoryArray value
     * @return \ArrayType\ArrayOfExtTSBCategoryV4|null
     */
    public function getExtTsbCategoryArray()
    {
        return $this->extTsbCategoryArray;
    }
    /**
     * Set extTsbCategoryArray value
     * @param \ArrayType\ArrayOfExtTSBCategoryV4 $extTsbCategoryArray
     * @return \StructType\TSBArrayContainer
     */
    public function setExtTsbCategoryArray(\ArrayType\ArrayOfExtTSBCategoryV4 $extTsbCategoryArray = null)
    {
        $this->extTsbCategoryArray = $extTsbCategoryArray;
        return $this;
    }
    /**
     * Get faultCode value
     * @return string|null
     */
    public function getFaultCode()
    {
        return $this->faultCode;
    }
    /**
     * Set faultCode value
     * @param string $faultCode
     * @return \StructType\TSBArrayContainer
     */
    public function setFaultCode($faultCode = null)
    {
        // validation for constraint: string
        if (!is_null($faultCode) && !is_string($faultCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($faultCode, true), gettype($faultCode)), __LINE__);
        }
        $this->faultCode = $faultCode;
        return $this;
    }
}
