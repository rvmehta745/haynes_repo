<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCompleteComponentV5 StructType
 * @subpackage Structs
 */
class GetCompleteComponentV5 extends AbstractStructBase
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
     * The si
     * @var int
     */
    public $si;
    /**
     * The st
     * @var int
     */
    public $st;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for getCompleteComponentV5
     * @uses GetCompleteComponentV5::setVrid()
     * @uses GetCompleteComponentV5::setTypeId()
     * @uses GetCompleteComponentV5::setSi()
     * @uses GetCompleteComponentV5::setSt()
     * @uses GetCompleteComponentV5::setLanguage()
     * @param string $vrid
     * @param int $typeId
     * @param int $si
     * @param int $st
     * @param string $language
     */
    public function __construct($vrid = null, $typeId = null, $si = null, $st = null, $language = null)
    {
        $this
            ->setVrid($vrid)
            ->setTypeId($typeId)
            ->setSi($si)
            ->setSt($st)
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
     * @return \StructType\GetCompleteComponentV5
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
     * @return \StructType\GetCompleteComponentV5
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
     * Get si value
     * @return int|null
     */
    public function getSi()
    {
        return $this->si;
    }
    /**
     * Set si value
     * @param int $si
     * @return \StructType\GetCompleteComponentV5
     */
    public function setSi($si = null)
    {
        // validation for constraint: int
        if (!is_null($si) && !(is_int($si) || ctype_digit($si))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($si, true), gettype($si)), __LINE__);
        }
        $this->si = $si;
        return $this;
    }
    /**
     * Get st value
     * @return int|null
     */
    public function getSt()
    {
        return $this->st;
    }
    /**
     * Set st value
     * @param int $st
     * @return \StructType\GetCompleteComponentV5
     */
    public function setSt($st = null)
    {
        // validation for constraint: int
        if (!is_null($st) && !(is_int($st) || ctype_digit($st))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($st, true), gettype($st)), __LINE__);
        }
        $this->st = $st;
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
     * @return \StructType\GetCompleteComponentV5
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
