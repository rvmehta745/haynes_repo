<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLocationSystemV2 StructType
 * @subpackage Structs
 */
class GetLocationSystemV2 extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The carTypeId
     * @var int
     */
    public $carTypeId;
    /**
     * The elecDataCompId
     * @var int
     */
    public $elecDataCompId;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for getLocationSystemV2
     * @uses GetLocationSystemV2::setVrid()
     * @uses GetLocationSystemV2::setCarTypeId()
     * @uses GetLocationSystemV2::setElecDataCompId()
     * @uses GetLocationSystemV2::setLanguage()
     * @param string $vrid
     * @param int $carTypeId
     * @param int $elecDataCompId
     * @param string $language
     */
    public function __construct($vrid = null, $carTypeId = null, $elecDataCompId = null, $language = null)
    {
        $this
            ->setVrid($vrid)
            ->setCarTypeId($carTypeId)
            ->setElecDataCompId($elecDataCompId)
            ->setLanguage($language);
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
     * @return \StructType\GetLocationSystemV2
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
     * @return \StructType\GetLocationSystemV2
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
     * Get elecDataCompId value
     * @return int|null
     */
    public function getElecDataCompId()
    {
        return $this->elecDataCompId;
    }
    /**
     * Set elecDataCompId value
     * @param int $elecDataCompId
     * @return \StructType\GetLocationSystemV2
     */
    public function setElecDataCompId($elecDataCompId = null)
    {
        // validation for constraint: int
        if (!is_null($elecDataCompId) && !(is_int($elecDataCompId) || ctype_digit($elecDataCompId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($elecDataCompId, true), gettype($elecDataCompId)), __LINE__);
        }
        $this->elecDataCompId = $elecDataCompId;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \StructType\GetLocationSystemV2
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
}
