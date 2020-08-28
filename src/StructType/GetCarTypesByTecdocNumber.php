<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCarTypesByTecdocNumber StructType
 * @subpackage Structs
 */
class GetCarTypesByTecdocNumber extends AbstractStructBase
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
     * The tecdocNumber
     * @var int
     */
    public $tecdocNumber;
    /**
     * Constructor method for getCarTypesByTecdocNumber
     * @uses GetCarTypesByTecdocNumber::setVrid()
     * @uses GetCarTypesByTecdocNumber::setDescriptionLanguage()
     * @uses GetCarTypesByTecdocNumber::setTecdocNumber()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $tecdocNumber
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $tecdocNumber = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setTecdocNumber($tecdocNumber);
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
     * @return \StructType\GetCarTypesByTecdocNumber
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
     * @return \StructType\GetCarTypesByTecdocNumber
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
     * Get tecdocNumber value
     * @return int|null
     */
    public function getTecdocNumber()
    {
        return $this->tecdocNumber;
    }
    /**
     * Set tecdocNumber value
     * @param int $tecdocNumber
     * @return \StructType\GetCarTypesByTecdocNumber
     */
    public function setTecdocNumber($tecdocNumber = null)
    {
        // validation for constraint: int
        if (!is_null($tecdocNumber) && !(is_int($tecdocNumber) || ctype_digit($tecdocNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tecdocNumber, true), gettype($tecdocNumber)), __LINE__);
        }
        $this->tecdocNumber = $tecdocNumber;
        return $this;
    }
}
