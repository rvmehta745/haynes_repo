<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findCarTypes StructType
 * @subpackage Structs
 */
class FindCarTypes extends AbstractStructBase
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
     * The searchString
     * @var string
     */
    public $searchString;
    /**
     * Constructor method for findCarTypes
     * @uses FindCarTypes::setVrid()
     * @uses FindCarTypes::setDescriptionLanguage()
     * @uses FindCarTypes::setSearchString()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param string $searchString
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $searchString = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setSearchString($searchString);
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
     * @return \StructType\FindCarTypes
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
     * @return \StructType\FindCarTypes
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
     * Get searchString value
     * @return string|null
     */
    public function getSearchString()
    {
        return $this->searchString;
    }
    /**
     * Set searchString value
     * @param string $searchString
     * @return \StructType\FindCarTypes
     */
    public function setSearchString($searchString = null)
    {
        // validation for constraint: string
        if (!is_null($searchString) && !is_string($searchString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchString, true), gettype($searchString)), __LINE__);
        }
        $this->searchString = $searchString;
        return $this;
    }
}
