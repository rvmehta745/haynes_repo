<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCarTypesByTecdocTruckNumber StructType
 * @subpackage Structs
 */
class GetCarTypesByTecdocTruckNumber extends AbstractStructBase
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
     * The tecdocTruckNumber
     * @var int
     */
    public $tecdocTruckNumber;
    /**
     * Constructor method for getCarTypesByTecdocTruckNumber
     * @uses GetCarTypesByTecdocTruckNumber::setVrid()
     * @uses GetCarTypesByTecdocTruckNumber::setDescriptionLanguage()
     * @uses GetCarTypesByTecdocTruckNumber::setTecdocTruckNumber()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $tecdocTruckNumber
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $tecdocTruckNumber = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setTecdocTruckNumber($tecdocTruckNumber);
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
     * @return \StructType\GetCarTypesByTecdocTruckNumber
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
     * @return \StructType\GetCarTypesByTecdocTruckNumber
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
     * Get tecdocTruckNumber value
     * @return int|null
     */
    public function getTecdocTruckNumber()
    {
        return $this->tecdocTruckNumber;
    }
    /**
     * Set tecdocTruckNumber value
     * @param int $tecdocTruckNumber
     * @return \StructType\GetCarTypesByTecdocTruckNumber
     */
    public function setTecdocTruckNumber($tecdocTruckNumber = null)
    {
        // validation for constraint: int
        if (!is_null($tecdocTruckNumber) && !(is_int($tecdocTruckNumber) || ctype_digit($tecdocTruckNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tecdocTruckNumber, true), gettype($tecdocTruckNumber)), __LINE__);
        }
        $this->tecdocTruckNumber = $tecdocTruckNumber;
        return $this;
    }
}
