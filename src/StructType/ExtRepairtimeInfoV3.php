<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtRepairtimeInfoV3 StructType
 * @subpackage Structs
 */
class ExtRepairtimeInfoV3 extends AbstractStructBase
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
     * The generalArticles
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtGeneralArticle
     */
    public $generalArticles;
    /**
     * The hasInfoGroups
     * @var bool
     */
    public $hasInfoGroups;
    /**
     * The jobType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $jobType;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $value;
    /**
     * Constructor method for ExtRepairtimeInfoV3
     * @uses ExtRepairtimeInfoV3::setAwNumber()
     * @uses ExtRepairtimeInfoV3::setDescription()
     * @uses ExtRepairtimeInfoV3::setDirection()
     * @uses ExtRepairtimeInfoV3::setGeneralArticles()
     * @uses ExtRepairtimeInfoV3::setHasInfoGroups()
     * @uses ExtRepairtimeInfoV3::setJobType()
     * @uses ExtRepairtimeInfoV3::setValue()
     * @param string $awNumber
     * @param string $description
     * @param string $direction
     * @param \ArrayType\ArrayOfExtGeneralArticle $generalArticles
     * @param bool $hasInfoGroups
     * @param string $jobType
     * @param int $value
     */
    public function __construct($awNumber = null, $description = null, $direction = null, \ArrayType\ArrayOfExtGeneralArticle $generalArticles = null, $hasInfoGroups = null, $jobType = null, $value = null)
    {
        $this
            ->setAwNumber($awNumber)
            ->setDescription($description)
            ->setDirection($direction)
            ->setGeneralArticles($generalArticles)
            ->setHasInfoGroups($hasInfoGroups)
            ->setJobType($jobType)
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
     * @return \StructType\ExtRepairtimeInfoV3
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
     * @return \StructType\ExtRepairtimeInfoV3
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
     * @return \StructType\ExtRepairtimeInfoV3
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
     * Get generalArticles value
     * @return \ArrayType\ArrayOfExtGeneralArticle|null
     */
    public function getGeneralArticles()
    {
        return $this->generalArticles;
    }
    /**
     * Set generalArticles value
     * @param \ArrayType\ArrayOfExtGeneralArticle $generalArticles
     * @return \StructType\ExtRepairtimeInfoV3
     */
    public function setGeneralArticles(\ArrayType\ArrayOfExtGeneralArticle $generalArticles = null)
    {
        $this->generalArticles = $generalArticles;
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
     * @return \StructType\ExtRepairtimeInfoV3
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
     * Get jobType value
     * @return string|null
     */
    public function getJobType()
    {
        return $this->jobType;
    }
    /**
     * Set jobType value
     * @param string $jobType
     * @return \StructType\ExtRepairtimeInfoV3
     */
    public function setJobType($jobType = null)
    {
        // validation for constraint: string
        if (!is_null($jobType) && !is_string($jobType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jobType, true), gettype($jobType)), __LINE__);
        }
        $this->jobType = $jobType;
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
     * @return \StructType\ExtRepairtimeInfoV3
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
