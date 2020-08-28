<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtRepairtimeInfo StructType
 * @subpackage Structs
 */
class ExtRepairtimeInfo extends AbstractStructBase
{
    /**
     * The awNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $awNumber;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The direction
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $direction;
    /**
     * The genarts
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_int
     */
    public $genarts;
    /**
     * The hasInfoGroups
     * @var bool
     */
    public $hasInfoGroups;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $value;
    /**
     * Constructor method for ExtRepairtimeInfo
     * @uses ExtRepairtimeInfo::setAwNumber()
     * @uses ExtRepairtimeInfo::setDescription()
     * @uses ExtRepairtimeInfo::setDirection()
     * @uses ExtRepairtimeInfo::setGenarts()
     * @uses ExtRepairtimeInfo::setHasInfoGroups()
     * @uses ExtRepairtimeInfo::setValue()
     * @param string $awNumber
     * @param string $description
     * @param string $direction
     * @param \ArrayType\ArrayOf_xsd_int $genarts
     * @param bool $hasInfoGroups
     * @param int $value
     */
    public function __construct($awNumber = null, $description = null, $direction = null, \ArrayType\ArrayOf_xsd_int $genarts = null, $hasInfoGroups = null, $value = null)
    {
        $this
            ->setAwNumber($awNumber)
            ->setDescription($description)
            ->setDirection($direction)
            ->setGenarts($genarts)
            ->setHasInfoGroups($hasInfoGroups)
            ->setValue($value);
    }
    /**
     * Get awNumber value
     * @return string|null
     */
    public function getAwNumber()
    {
        return $this->awNumber;
    }
    /**
     * Set awNumber value
     * @param string $awNumber
     * @return \StructType\ExtRepairtimeInfo
     */
    public function setAwNumber($awNumber = null)
    {
        // validation for constraint: string
        if (!is_null($awNumber) && !is_string($awNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($awNumber, true), gettype($awNumber)), __LINE__);
        }
        $this->awNumber = $awNumber;
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
     * @return \StructType\ExtRepairtimeInfo
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
     * Get direction value
     * @return string|null
     */
    public function getDirection()
    {
        return $this->direction;
    }
    /**
     * Set direction value
     * @param string $direction
     * @return \StructType\ExtRepairtimeInfo
     */
    public function setDirection($direction = null)
    {
        // validation for constraint: string
        if (!is_null($direction) && !is_string($direction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direction, true), gettype($direction)), __LINE__);
        }
        $this->direction = $direction;
        return $this;
    }
    /**
     * Get genarts value
     * @return \ArrayType\ArrayOf_xsd_int|null
     */
    public function getGenarts()
    {
        return $this->genarts;
    }
    /**
     * Set genarts value
     * @param \ArrayType\ArrayOf_xsd_int $genarts
     * @return \StructType\ExtRepairtimeInfo
     */
    public function setGenarts(\ArrayType\ArrayOf_xsd_int $genarts = null)
    {
        $this->genarts = $genarts;
        return $this;
    }
    /**
     * Get hasInfoGroups value
     * @return bool|null
     */
    public function getHasInfoGroups()
    {
        return $this->hasInfoGroups;
    }
    /**
     * Set hasInfoGroups value
     * @param bool $hasInfoGroups
     * @return \StructType\ExtRepairtimeInfo
     */
    public function setHasInfoGroups($hasInfoGroups = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasInfoGroups) && !is_bool($hasInfoGroups)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasInfoGroups, true), gettype($hasInfoGroups)), __LINE__);
        }
        $this->hasInfoGroups = $hasInfoGroups;
        return $this;
    }
    /**
     * Get value value
     * @return int|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param int $value
     * @return \StructType\ExtRepairtimeInfo
     */
    public function setValue($value = null)
    {
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
}
