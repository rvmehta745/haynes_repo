<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeNodesForGenart StructType
 * @subpackage Structs
 */
class GetRepairtimeNodesForGenart extends AbstractStructBase
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
     * The repairtimeTypeId
     * @var int
     */
    public $repairtimeTypeId;
    /**
     * The genArtNumber
     * @var int
     */
    public $genArtNumber;
    /**
     * Constructor method for getRepairtimeNodesForGenart
     * @uses GetRepairtimeNodesForGenart::setVrid()
     * @uses GetRepairtimeNodesForGenart::setDescriptionLanguage()
     * @uses GetRepairtimeNodesForGenart::setRepairtimeTypeId()
     * @uses GetRepairtimeNodesForGenart::setGenArtNumber()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $repairtimeTypeId
     * @param int $genArtNumber
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $repairtimeTypeId = null, $genArtNumber = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setRepairtimeTypeId($repairtimeTypeId)
            ->setGenArtNumber($genArtNumber);
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
     * @return \StructType\GetRepairtimeNodesForGenart
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
     * @return \StructType\GetRepairtimeNodesForGenart
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
     * Get repairtimeTypeId value
     * @return int|null
     */
    public function getRepairtimeTypeId()
    {
        return $this->repairtimeTypeId;
    }
    /**
     * Set repairtimeTypeId value
     * @param int $repairtimeTypeId
     * @return \StructType\GetRepairtimeNodesForGenart
     */
    public function setRepairtimeTypeId($repairtimeTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($repairtimeTypeId) && !(is_int($repairtimeTypeId) || ctype_digit($repairtimeTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repairtimeTypeId, true), gettype($repairtimeTypeId)), __LINE__);
        }
        $this->repairtimeTypeId = $repairtimeTypeId;
        return $this;
    }
    /**
     * Get genArtNumber value
     * @return int|null
     */
    public function getGenArtNumber()
    {
        return $this->genArtNumber;
    }
    /**
     * Set genArtNumber value
     * @param int $genArtNumber
     * @return \StructType\GetRepairtimeNodesForGenart
     */
    public function setGenArtNumber($genArtNumber = null)
    {
        // validation for constraint: int
        if (!is_null($genArtNumber) && !(is_int($genArtNumber) || ctype_digit($genArtNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($genArtNumber, true), gettype($genArtNumber)), __LINE__);
        }
        $this->genArtNumber = $genArtNumber;
        return $this;
    }
}
