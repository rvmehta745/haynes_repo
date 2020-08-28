<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsByGroup StructType
 * @subpackage Structs
 */
class GetAdjustmentsByGroup extends AbstractStructBase
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
     * The group
     * @var string
     */
    public $group;
    /**
     * Constructor method for getAdjustmentsByGroup
     * @uses GetAdjustmentsByGroup::setVrid()
     * @uses GetAdjustmentsByGroup::setDescriptionLanguage()
     * @uses GetAdjustmentsByGroup::setCarType()
     * @uses GetAdjustmentsByGroup::setGroup()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carType
     * @param string $group
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carType = null, $group = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarType($carType)
            ->setGroup($group);
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
     * @return \StructType\GetAdjustmentsByGroup
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
     * @return \StructType\GetAdjustmentsByGroup
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
     * @return \StructType\GetAdjustmentsByGroup
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
     * Get group value
     * @return string|null
     */
    public function getGroup()
    {
        return $this->group;
    }
    /**
     * Set group value
     * @param string $group
     * @return \StructType\GetAdjustmentsByGroup
     */
    public function setGroup($group = null)
    {
        // validation for constraint: string
        if (!is_null($group) && !is_string($group)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
        $this->group = $group;
        return $this;
    }
}
