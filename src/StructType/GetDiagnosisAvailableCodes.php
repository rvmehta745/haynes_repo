<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDiagnosisAvailableCodes StructType
 * @subpackage Structs
 */
class GetDiagnosisAvailableCodes extends AbstractStructBase
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
     * The codePart
     * @var string
     */
    public $codePart;
    /**
     * Constructor method for getDiagnosisAvailableCodes
     * @uses GetDiagnosisAvailableCodes::setVrid()
     * @uses GetDiagnosisAvailableCodes::setCarTypeId()
     * @uses GetDiagnosisAvailableCodes::setCodePart()
     * @param string $vrid
     * @param int $carTypeId
     * @param string $codePart
     */
    public function __construct($vrid = null, $carTypeId = null, $codePart = null)
    {
        $this
            ->setVrid($vrid)
            ->setCarTypeId($carTypeId)
            ->setCodePart($codePart);
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
     * @return \StructType\GetDiagnosisAvailableCodes
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
     * @return \StructType\GetDiagnosisAvailableCodes
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
     * Get codePart value
     * @return string|null
     */
    public function getCodePart()
    {
        return $this->codePart;
    }
    /**
     * Set codePart value
     * @param string $codePart
     * @return \StructType\GetDiagnosisAvailableCodes
     */
    public function setCodePart($codePart = null)
    {
        // validation for constraint: string
        if (!is_null($codePart) && !is_string($codePart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePart, true), gettype($codePart)), __LINE__);
        }
        $this->codePart = $codePart;
        return $this;
    }
}
