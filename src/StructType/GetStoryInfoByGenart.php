<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStoryInfoByGenart StructType
 * @subpackage Structs
 */
class GetStoryInfoByGenart extends AbstractStructBase
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
     * The genart
     * @var int
     */
    public $genart;
    /**
     * The smartLinks
     * @var bool
     */
    public $smartLinks;
    /**
     * Constructor method for getStoryInfoByGenart
     * @uses GetStoryInfoByGenart::setVrid()
     * @uses GetStoryInfoByGenart::setDescriptionLanguage()
     * @uses GetStoryInfoByGenart::setCarTypeId()
     * @uses GetStoryInfoByGenart::setGenart()
     * @uses GetStoryInfoByGenart::setSmartLinks()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $genart
     * @param bool $smartLinks
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $genart = null, $smartLinks = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setGenart($genart)
            ->setSmartLinks($smartLinks);
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
     * @return \StructType\GetStoryInfoByGenart
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
     * @return \StructType\GetStoryInfoByGenart
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
     * @return \StructType\GetStoryInfoByGenart
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
     * Get genart value
     * @return int|null
     */
    public function getGenart()
    {
        return $this->genart;
    }
    /**
     * Set genart value
     * @param int $genart
     * @return \StructType\GetStoryInfoByGenart
     */
    public function setGenart($genart = null)
    {
        // validation for constraint: int
        if (!is_null($genart) && !(is_int($genart) || ctype_digit($genart))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($genart, true), gettype($genart)), __LINE__);
        }
        $this->genart = $genart;
        return $this;
    }
    /**
     * Get smartLinks value
     * @return bool|null
     */
    public function getSmartLinks()
    {
        return $this->smartLinks;
    }
    /**
     * Set smartLinks value
     * @param bool $smartLinks
     * @return \StructType\GetStoryInfoByGenart
     */
    public function setSmartLinks($smartLinks = null)
    {
        // validation for constraint: boolean
        if (!is_null($smartLinks) && !is_bool($smartLinks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($smartLinks, true), gettype($smartLinks)), __LINE__);
        }
        $this->smartLinks = $smartLinks;
        return $this;
    }
}
