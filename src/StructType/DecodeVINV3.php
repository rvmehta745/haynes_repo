<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for decodeVINV3 StructType
 * @subpackage Structs
 */
class DecodeVINV3 extends AbstractStructBase
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
     * The vin
     * @var string
     */
    public $vin;
    /**
     * Constructor method for decodeVINV3
     * @uses DecodeVINV3::setVrid()
     * @uses DecodeVINV3::setDescriptionLanguage()
     * @uses DecodeVINV3::setVin()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param string $vin
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $vin = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setVin($vin);
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
     * @return \StructType\DecodeVINV3
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
     * @return \StructType\DecodeVINV3
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
     * Get vin value
     * @return string|null
     */
    public function getVin()
    {
        return $this->vin;
    }
    /**
     * Set vin value
     * @param string $vin
     * @return \StructType\DecodeVINV3
     */
    public function setVin($vin = null)
    {
        // validation for constraint: string
        if (!is_null($vin) && !is_string($vin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vin, true), gettype($vin)), __LINE__);
        }
        $this->vin = $vin;
        return $this;
    }
}
