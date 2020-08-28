<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWiringDiagramSystems StructType
 * @subpackage Structs
 */
class GetWiringDiagramSystems extends AbstractStructBase
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
     * The wiringDiagramTypeId
     * @var string
     */
    public $wiringDiagramTypeId;
    /**
     * Constructor method for getWiringDiagramSystems
     * @uses GetWiringDiagramSystems::setVrid()
     * @uses GetWiringDiagramSystems::setDescriptionLanguage()
     * @uses GetWiringDiagramSystems::setWiringDiagramTypeId()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param string $wiringDiagramTypeId
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $wiringDiagramTypeId = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setWiringDiagramTypeId($wiringDiagramTypeId);
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
     * @return \StructType\GetWiringDiagramSystems
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
     * @return \StructType\GetWiringDiagramSystems
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
     * Get wiringDiagramTypeId value
     * @return string|null
     */
    public function getWiringDiagramTypeId()
    {
        return $this->wiringDiagramTypeId;
    }
    /**
     * Set wiringDiagramTypeId value
     * @param string $wiringDiagramTypeId
     * @return \StructType\GetWiringDiagramSystems
     */
    public function setWiringDiagramTypeId($wiringDiagramTypeId = null)
    {
        // validation for constraint: string
        if (!is_null($wiringDiagramTypeId) && !is_string($wiringDiagramTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wiringDiagramTypeId, true), gettype($wiringDiagramTypeId)), __LINE__);
        }
        $this->wiringDiagramTypeId = $wiringDiagramTypeId;
        return $this;
    }
}
