<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtRepairtimeInfoV2 StructType
 * @subpackage Structs
 */
class ExtRepairtimeInfoV2 extends AbstractStructBase
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
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $value;
    /**
     * Constructor method for ExtRepairtimeInfoV2
     * @uses ExtRepairtimeInfoV2::setAwNumber()
     * @uses ExtRepairtimeInfoV2::setDescription()
     * @uses ExtRepairtimeInfoV2::setDirection()
     * @uses ExtRepairtimeInfoV2::setGeneralArticles()
     * @uses ExtRepairtimeInfoV2::setHasInfoGroups()
     * @uses ExtRepairtimeInfoV2::setValue()
     * @param string $awNumber
     * @param string $description
     * @param string $direction
     * @param \ArrayType\ArrayOfExtGeneralArticle $generalArticles
     * @param bool $hasInfoGroups
     * @param int $value
     */
    public function __construct($awNumber = null, $description = null, $direction = null, \ArrayType\ArrayOfExtGeneralArticle $generalArticles = null, $hasInfoGroups = null, $value = null)
    {
        $this
            ->setAwNumber($awNumber)
            ->setDescription($description)
            ->setDirection($direction)
            ->setGeneralArticles($generalArticles)
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
     * @return \StructType\ExtRepairtimeInfoV2
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
     * @return \StructType\ExtRepairtimeInfoV2
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
     * @return \StructType\ExtRepairtimeInfoV2
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
     * @return \StructType\ExtRepairtimeInfoV2
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
     * @return \StructType\ExtRepairtimeInfoV2
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
     * @return \StructType\ExtRepairtimeInfoV2
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
