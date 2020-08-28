<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustemntExtraInfoV2 StructType
 * @subpackage Structs
 */
class GetAdjustemntExtraInfoV2 extends AbstractStructBase
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
     * The extraInfoId
     * @var int
     */
    public $extraInfoId;
    /**
     * The smartLinks
     * @var bool
     */
    public $smartLinks;
    /**
     * Constructor method for getAdjustemntExtraInfoV2
     * @uses GetAdjustemntExtraInfoV2::setVrid()
     * @uses GetAdjustemntExtraInfoV2::setDescriptionLanguage()
     * @uses GetAdjustemntExtraInfoV2::setCarTypeId()
     * @uses GetAdjustemntExtraInfoV2::setExtraInfoId()
     * @uses GetAdjustemntExtraInfoV2::setSmartLinks()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $extraInfoId
     * @param bool $smartLinks
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $extraInfoId = null, $smartLinks = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setExtraInfoId($extraInfoId)
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
     * @return \StructType\GetAdjustemntExtraInfoV2
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
     * @return \StructType\GetAdjustemntExtraInfoV2
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
     * @return \StructType\GetAdjustemntExtraInfoV2
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
     * Get extraInfoId value
     * @return int|null
     */
    public function getExtraInfoId()
    {
        return $this->extraInfoId;
    }
    /**
     * Set extraInfoId value
     * @param int $extraInfoId
     * @return \StructType\GetAdjustemntExtraInfoV2
     */
    public function setExtraInfoId($extraInfoId = null)
    {
        // validation for constraint: int
        if (!is_null($extraInfoId) && !(is_int($extraInfoId) || ctype_digit($extraInfoId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($extraInfoId, true), gettype($extraInfoId)), __LINE__);
        }
        $this->extraInfoId = $extraInfoId;
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
     * @return \StructType\GetAdjustemntExtraInfoV2
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
