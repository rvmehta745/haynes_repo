<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStoryInfoV5 StructType
 * @subpackage Structs
 */
class GetStoryInfoV5 extends AbstractStructBase
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
     * The storyId
     * @var int
     */
    public $storyId;
    /**
     * The smartLinks
     * @var bool
     */
    public $smartLinks;
    /**
     * Constructor method for getStoryInfoV5
     * @uses GetStoryInfoV5::setVrid()
     * @uses GetStoryInfoV5::setDescriptionLanguage()
     * @uses GetStoryInfoV5::setCarTypeId()
     * @uses GetStoryInfoV5::setStoryId()
     * @uses GetStoryInfoV5::setSmartLinks()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $storyId
     * @param bool $smartLinks
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $storyId = null, $smartLinks = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setStoryId($storyId)
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
     * @return \StructType\GetStoryInfoV5
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
     * @return \StructType\GetStoryInfoV5
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
     * @return \StructType\GetStoryInfoV5
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
     * Get storyId value
     * @return int|null
     */
    public function getStoryId()
    {
        return $this->storyId;
    }
    /**
     * Set storyId value
     * @param int $storyId
     * @return \StructType\GetStoryInfoV5
     */
    public function setStoryId($storyId = null)
    {
        // validation for constraint: int
        if (!is_null($storyId) && !(is_int($storyId) || ctype_digit($storyId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storyId, true), gettype($storyId)), __LINE__);
        }
        $this->storyId = $storyId;
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
     * @return \StructType\GetStoryInfoV5
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
