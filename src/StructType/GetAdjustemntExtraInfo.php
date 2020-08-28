<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustemntExtraInfo StructType
 * @subpackage Structs
 */
class GetAdjustemntExtraInfo extends AbstractStructBase
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
     * The extraInfoId
     * @var int
     */
    public $extraInfoId;
    /**
     * Constructor method for getAdjustemntExtraInfo
     * @uses GetAdjustemntExtraInfo::setVrid()
     * @uses GetAdjustemntExtraInfo::setDescriptionLanguage()
     * @uses GetAdjustemntExtraInfo::setExtraInfoId()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $extraInfoId
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $extraInfoId = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setExtraInfoId($extraInfoId);
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
     * @return \StructType\GetAdjustemntExtraInfo
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
     * @return \StructType\GetAdjustemntExtraInfo
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
     * @return \StructType\GetAdjustemntExtraInfo
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
}
