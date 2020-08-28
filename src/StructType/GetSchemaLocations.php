<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSchemaLocations StructType
 * @subpackage Structs
 */
class GetSchemaLocations extends AbstractStructBase
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
     * The managementId
     * @var int
     */
    public $managementId;
    /**
     * Constructor method for getSchemaLocations
     * @uses GetSchemaLocations::setVrid()
     * @uses GetSchemaLocations::setDescriptionLanguage()
     * @uses GetSchemaLocations::setCarTypeId()
     * @uses GetSchemaLocations::setManagementId()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $managementId
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $managementId = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setManagementId($managementId);
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
     * @return \StructType\GetSchemaLocations
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
     * @return \StructType\GetSchemaLocations
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
     * @return \StructType\GetSchemaLocations
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
     * Get managementId value
     * @return int|null
     */
    public function getManagementId()
    {
        return $this->managementId;
    }
    /**
     * Set managementId value
     * @param int $managementId
     * @return \StructType\GetSchemaLocations
     */
    public function setManagementId($managementId = null)
    {
        // validation for constraint: int
        if (!is_null($managementId) && !(is_int($managementId) || ctype_digit($managementId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($managementId, true), gettype($managementId)), __LINE__);
        }
        $this->managementId = $managementId;
        return $this;
    }
}
