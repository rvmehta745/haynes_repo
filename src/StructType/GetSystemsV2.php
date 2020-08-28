<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSystemsV2 StructType
 * @subpackage Structs
 */
class GetSystemsV2 extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The typeId
     * @var int
     */
    public $typeId;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for getSystemsV2
     * @uses GetSystemsV2::setVrid()
     * @uses GetSystemsV2::setTypeId()
     * @uses GetSystemsV2::setLanguage()
     * @param string $vrid
     * @param int $typeId
     * @param string $language
     */
    public function __construct($vrid = null, $typeId = null, $language = null)
    {
        $this
            ->setVrid($vrid)
            ->setTypeId($typeId)
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
     * @return \StructType\GetSystemsV2
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
     * Get typeId value
     * @return int|null
     */
    public function getTypeId()
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param int $typeId
     * @return \StructType\GetSystemsV2
     */
    public function setTypeId($typeId = null)
    {
        // validation for constraint: int
        if (!is_null($typeId) && !(is_int($typeId) || ctype_digit($typeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
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
     * @return \StructType\GetSystemsV2
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
