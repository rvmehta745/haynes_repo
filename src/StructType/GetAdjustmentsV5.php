<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsV5 StructType
 * @subpackage Structs
 */
class GetAdjustmentsV5 extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The descriptionLanguage
     * @var string
     */
    public $descriptionLanguage;
    /**
     * The carType
     * @var int
     */
    public $carType;
    /**
     * The carTypeGroup
     * @var string
     */
    public $carTypeGroup;
    /**
     * The includeSmartLinks
     * @var bool
     */
    public $includeSmartLinks;
    /**
     * The includeGenarts
     * @var bool
     */
    public $includeGenarts;
    /**
     * Constructor method for getAdjustmentsV5
     * @uses GetAdjustmentsV5::setVrid()
     * @uses GetAdjustmentsV5::setDescriptionLanguage()
     * @uses GetAdjustmentsV5::setCarType()
     * @uses GetAdjustmentsV5::setCarTypeGroup()
     * @uses GetAdjustmentsV5::setIncludeSmartLinks()
     * @uses GetAdjustmentsV5::setIncludeGenarts()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carType
     * @param string $carTypeGroup
     * @param bool $includeSmartLinks
     * @param bool $includeGenarts
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carType = null, $carTypeGroup = null, $includeSmartLinks = null, $includeGenarts = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarType($carType)
            ->setCarTypeGroup($carTypeGroup)
            ->setIncludeSmartLinks($includeSmartLinks)
            ->setIncludeGenarts($includeGenarts);
    }
    /**
     * Get vrid value
     * @return string|null
     */
    public function getVrid()
    {
        return $this->vrid;
    }
    /**
     * Set vrid value
     * @param string $vrid
     * @return \StructType\GetAdjustmentsV5
     */
    public function setVrid($vrid = null)
    {
        // validation for constraint: string
        if (!is_null($vrid) && !is_string($vrid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vrid, true), gettype($vrid)), __LINE__);
        }
        $this->vrid = $vrid;
        return $this;
    }
    /**
     * Get descriptionLanguage value
     * @return string|null
     */
    public function getDescriptionLanguage()
    {
        return $this->descriptionLanguage;
    }
    /**
     * Set descriptionLanguage value
     * @param string $descriptionLanguage
     * @return \StructType\GetAdjustmentsV5
     */
    public function setDescriptionLanguage($descriptionLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionLanguage) && !is_string($descriptionLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptionLanguage, true), gettype($descriptionLanguage)), __LINE__);
        }
        $this->descriptionLanguage = $descriptionLanguage;
        return $this;
    }
    /**
     * Get carType value
     * @return int|null
     */
    public function getCarType()
    {
        return $this->carType;
    }
    /**
     * Set carType value
     * @param int $carType
     * @return \StructType\GetAdjustmentsV5
     */
    public function setCarType($carType = null)
    {
        // validation for constraint: int
        if (!is_null($carType) && !(is_int($carType) || ctype_digit($carType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($carType, true), gettype($carType)), __LINE__);
        }
        $this->carType = $carType;
        return $this;
    }
    /**
     * Get carTypeGroup value
     * @return string|null
     */
    public function getCarTypeGroup()
    {
        return $this->carTypeGroup;
    }
    /**
     * Set carTypeGroup value
     * @param string $carTypeGroup
     * @return \StructType\GetAdjustmentsV5
     */
    public function setCarTypeGroup($carTypeGroup = null)
    {
        // validation for constraint: string
        if (!is_null($carTypeGroup) && !is_string($carTypeGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carTypeGroup, true), gettype($carTypeGroup)), __LINE__);
        }
        $this->carTypeGroup = $carTypeGroup;
        return $this;
    }
    /**
     * Get includeSmartLinks value
     * @return bool|null
     */
    public function getIncludeSmartLinks()
    {
        return $this->includeSmartLinks;
    }
    /**
     * Set includeSmartLinks value
     * @param bool $includeSmartLinks
     * @return \StructType\GetAdjustmentsV5
     */
    public function setIncludeSmartLinks($includeSmartLinks = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeSmartLinks) && !is_bool($includeSmartLinks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeSmartLinks, true), gettype($includeSmartLinks)), __LINE__);
        }
        $this->includeSmartLinks = $includeSmartLinks;
        return $this;
    }
    /**
     * Get includeGenarts value
     * @return bool|null
     */
    public function getIncludeGenarts()
    {
        return $this->includeGenarts;
    }
    /**
     * Set includeGenarts value
     * @param bool $includeGenarts
     * @return \StructType\GetAdjustmentsV5
     */
    public function setIncludeGenarts($includeGenarts = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeGenarts) && !is_bool($includeGenarts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeGenarts, true), gettype($includeGenarts)), __LINE__);
        }
        $this->includeGenarts = $includeGenarts;
        return $this;
    }
}
