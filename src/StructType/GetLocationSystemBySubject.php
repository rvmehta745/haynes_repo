<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLocationSystemBySubject StructType
 * @subpackage Structs
 */
class GetLocationSystemBySubject extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The carTypeId
     * @var int
     */
    public $carTypeId;
    /**
     * The showMMP
     * @var bool
     */
    public $showMMP;
    /**
     * The showFusesAndRelays
     * @var bool
     */
    public $showFusesAndRelays;
    /**
     * The showControlUnit
     * @var bool
     */
    public $showControlUnit;
    /**
     * The showGroundingPoints
     * @var bool
     */
    public $showGroundingPoints;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for getLocationSystemBySubject
     * @uses GetLocationSystemBySubject::setVrid()
     * @uses GetLocationSystemBySubject::setCarTypeId()
     * @uses GetLocationSystemBySubject::setShowMMP()
     * @uses GetLocationSystemBySubject::setShowFusesAndRelays()
     * @uses GetLocationSystemBySubject::setShowControlUnit()
     * @uses GetLocationSystemBySubject::setShowGroundingPoints()
     * @uses GetLocationSystemBySubject::setLanguage()
     * @param string $vrid
     * @param int $carTypeId
     * @param bool $showMMP
     * @param bool $showFusesAndRelays
     * @param bool $showControlUnit
     * @param bool $showGroundingPoints
     * @param string $language
     */
    public function __construct($vrid = null, $carTypeId = null, $showMMP = null, $showFusesAndRelays = null, $showControlUnit = null, $showGroundingPoints = null, $language = null)
    {
        $this
            ->setVrid($vrid)
            ->setCarTypeId($carTypeId)
            ->setShowMMP($showMMP)
            ->setShowFusesAndRelays($showFusesAndRelays)
            ->setShowControlUnit($showControlUnit)
            ->setShowGroundingPoints($showGroundingPoints)
            ->setLanguage($language);
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
     * @return \StructType\GetLocationSystemBySubject
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
     * @return \StructType\GetLocationSystemBySubject
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
     * Get showMMP value
     * @return bool|null
     */
    public function getShowMMP()
    {
        return $this->showMMP;
    }
    /**
     * Set showMMP value
     * @param bool $showMMP
     * @return \StructType\GetLocationSystemBySubject
     */
    public function setShowMMP($showMMP = null)
    {
        // validation for constraint: boolean
        if (!is_null($showMMP) && !is_bool($showMMP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showMMP, true), gettype($showMMP)), __LINE__);
        }
        $this->showMMP = $showMMP;
        return $this;
    }
    /**
     * Get showFusesAndRelays value
     * @return bool|null
     */
    public function getShowFusesAndRelays()
    {
        return $this->showFusesAndRelays;
    }
    /**
     * Set showFusesAndRelays value
     * @param bool $showFusesAndRelays
     * @return \StructType\GetLocationSystemBySubject
     */
    public function setShowFusesAndRelays($showFusesAndRelays = null)
    {
        // validation for constraint: boolean
        if (!is_null($showFusesAndRelays) && !is_bool($showFusesAndRelays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showFusesAndRelays, true), gettype($showFusesAndRelays)), __LINE__);
        }
        $this->showFusesAndRelays = $showFusesAndRelays;
        return $this;
    }
    /**
     * Get showControlUnit value
     * @return bool|null
     */
    public function getShowControlUnit()
    {
        return $this->showControlUnit;
    }
    /**
     * Set showControlUnit value
     * @param bool $showControlUnit
     * @return \StructType\GetLocationSystemBySubject
     */
    public function setShowControlUnit($showControlUnit = null)
    {
        // validation for constraint: boolean
        if (!is_null($showControlUnit) && !is_bool($showControlUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showControlUnit, true), gettype($showControlUnit)), __LINE__);
        }
        $this->showControlUnit = $showControlUnit;
        return $this;
    }
    /**
     * Get showGroundingPoints value
     * @return bool|null
     */
    public function getShowGroundingPoints()
    {
        return $this->showGroundingPoints;
    }
    /**
     * Set showGroundingPoints value
     * @param bool $showGroundingPoints
     * @return \StructType\GetLocationSystemBySubject
     */
    public function setShowGroundingPoints($showGroundingPoints = null)
    {
        // validation for constraint: boolean
        if (!is_null($showGroundingPoints) && !is_bool($showGroundingPoints)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showGroundingPoints, true), gettype($showGroundingPoints)), __LINE__);
        }
        $this->showGroundingPoints = $showGroundingPoints;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \StructType\GetLocationSystemBySubject
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
}
