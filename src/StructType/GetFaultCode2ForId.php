<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFaultCode2ForId StructType
 * @subpackage Structs
 */
class GetFaultCode2ForId extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The faultcodeId
     * @var int
     */
    public $faultcodeId;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for getFaultCode2ForId
     * @uses GetFaultCode2ForId::setVrid()
     * @uses GetFaultCode2ForId::setFaultcodeId()
     * @uses GetFaultCode2ForId::setLanguage()
     * @param string $vrid
     * @param int $faultcodeId
     * @param string $language
     */
    public function __construct($vrid = null, $faultcodeId = null, $language = null)
    {
        $this
            ->setVrid($vrid)
            ->setFaultcodeId($faultcodeId)
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
     * @return \StructType\GetFaultCode2ForId
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
     * Get faultcodeId value
     * @return int|null
     */
    public function getFaultcodeId()
    {
        return $this->faultcodeId;
    }
    /**
     * Set faultcodeId value
     * @param int $faultcodeId
     * @return \StructType\GetFaultCode2ForId
     */
    public function setFaultcodeId($faultcodeId = null)
    {
        // validation for constraint: int
        if (!is_null($faultcodeId) && !(is_int($faultcodeId) || ctype_digit($faultcodeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($faultcodeId, true), gettype($faultcodeId)), __LINE__);
        }
        $this->faultcodeId = $faultcodeId;
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
     * @return \StructType\GetFaultCode2ForId
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
