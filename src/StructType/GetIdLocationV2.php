<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getIdLocationV2 StructType
 * @subpackage Structs
 */
class GetIdLocationV2 extends AbstractStructBase
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
     * The carTypeId
     * @var int
     */
    public $carTypeId;
    /**
     * The carTypeLevel
     * @var int
     */
    public $carTypeLevel;
    /**
     * Constructor method for getIdLocationV2
     * @uses GetIdLocationV2::setVrid()
     * @uses GetIdLocationV2::setDescriptionLanguage()
     * @uses GetIdLocationV2::setCarTypeId()
     * @uses GetIdLocationV2::setCarTypeLevel()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $carTypeLevel
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $carTypeLevel = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setCarTypeLevel($carTypeLevel);
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
     * @return \StructType\GetIdLocationV2
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
     * @return \StructType\GetIdLocationV2
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
     * Get carTypeId value
     * @return int|null
     */
    public function getCarTypeId()
    {
        return $this->carTypeId;
    }
    /**
     * Set carTypeId value
     * @param int $carTypeId
     * @return \StructType\GetIdLocationV2
     */
    public function setCarTypeId($carTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($carTypeId) && !(is_int($carTypeId) || ctype_digit($carTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($carTypeId, true), gettype($carTypeId)), __LINE__);
        }
        $this->carTypeId = $carTypeId;
        return $this;
    }
    /**
     * Get carTypeLevel value
     * @return int|null
     */
    public function getCarTypeLevel()
    {
        return $this->carTypeLevel;
    }
    /**
     * Set carTypeLevel value
     * @param int $carTypeLevel
     * @return \StructType\GetIdLocationV2
     */
    public function setCarTypeLevel($carTypeLevel = null)
    {
        // validation for constraint: int
        if (!is_null($carTypeLevel) && !(is_int($carTypeLevel) || ctype_digit($carTypeLevel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($carTypeLevel, true), gettype($carTypeLevel)), __LINE__);
        }
        $this->carTypeLevel = $carTypeLevel;
        return $this;
    }
}
