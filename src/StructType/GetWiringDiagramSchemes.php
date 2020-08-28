<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWiringDiagramSchemes StructType
 * @subpackage Structs
 */
class GetWiringDiagramSchemes extends AbstractStructBase
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
     * The wiringDiagramSystemId
     * @var int
     */
    public $wiringDiagramSystemId;
    /**
     * Constructor method for getWiringDiagramSchemes
     * @uses GetWiringDiagramSchemes::setVrid()
     * @uses GetWiringDiagramSchemes::setDescriptionLanguage()
     * @uses GetWiringDiagramSchemes::setWiringDiagramSystemId()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $wiringDiagramSystemId
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $wiringDiagramSystemId = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setWiringDiagramSystemId($wiringDiagramSystemId);
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
     * @return \StructType\GetWiringDiagramSchemes
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
     * @return \StructType\GetWiringDiagramSchemes
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
     * Get wiringDiagramSystemId value
     * @return int|null
     */
    public function getWiringDiagramSystemId()
    {
        return $this->wiringDiagramSystemId;
    }
    /**
     * Set wiringDiagramSystemId value
     * @param int $wiringDiagramSystemId
     * @return \StructType\GetWiringDiagramSchemes
     */
    public function setWiringDiagramSystemId($wiringDiagramSystemId = null)
    {
        // validation for constraint: int
        if (!is_null($wiringDiagramSystemId) && !(is_int($wiringDiagramSystemId) || ctype_digit($wiringDiagramSystemId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wiringDiagramSystemId, true), gettype($wiringDiagramSystemId)), __LINE__);
        }
        $this->wiringDiagramSystemId = $wiringDiagramSystemId;
        return $this;
    }
}
