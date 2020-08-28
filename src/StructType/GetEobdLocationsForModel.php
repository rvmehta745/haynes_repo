<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEobdLocationsForModel StructType
 * @subpackage Structs
 */
class GetEobdLocationsForModel extends AbstractStructBase
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
     * The carModelId
     * @var int
     */
    public $carModelId;
    /**
     * Constructor method for getEobdLocationsForModel
     * @uses GetEobdLocationsForModel::setVrid()
     * @uses GetEobdLocationsForModel::setDescriptionLanguage()
     * @uses GetEobdLocationsForModel::setCarModelId()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carModelId
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carModelId = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarModelId($carModelId);
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
     * @return \StructType\GetEobdLocationsForModel
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
     * @return \StructType\GetEobdLocationsForModel
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
     * Get carModelId value
     * @return int|null
     */
    public function getCarModelId()
    {
        return $this->carModelId;
    }
    /**
     * Set carModelId value
     * @param int $carModelId
     * @return \StructType\GetEobdLocationsForModel
     */
    public function setCarModelId($carModelId = null)
    {
        // validation for constraint: int
        if (!is_null($carModelId) && !(is_int($carModelId) || ctype_digit($carModelId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($carModelId, true), gettype($carModelId)), __LINE__);
        }
        $this->carModelId = $carModelId;
        return $this;
    }
}
