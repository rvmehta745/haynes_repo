<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGeneralInformationLinksByGroup StructType
 * @subpackage Structs
 */
class GetGeneralInformationLinksByGroup extends AbstractStructBase
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
     * The carTypeGroup
     * @var string
     */
    public $carTypeGroup;
    /**
     * Constructor method for getGeneralInformationLinksByGroup
     * @uses GetGeneralInformationLinksByGroup::setVrid()
     * @uses GetGeneralInformationLinksByGroup::setDescriptionLanguage()
     * @uses GetGeneralInformationLinksByGroup::setCarTypeGroup()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param string $carTypeGroup
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeGroup = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeGroup($carTypeGroup);
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
     * @return \StructType\GetGeneralInformationLinksByGroup
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
     * @return \StructType\GetGeneralInformationLinksByGroup
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
     * @return \StructType\GetGeneralInformationLinksByGroup
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
}
