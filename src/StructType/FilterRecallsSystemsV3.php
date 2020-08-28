<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterRecallsSystemsV3 StructType
 * @subpackage Structs
 */
class FilterRecallsSystemsV3 extends AbstractStructBase
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
     * The carTypeId
     * @var int
     */
    public $carTypeId;
    /**
     * The searchedText
     * @var string
     */
    public $searchedText;
    /**
     * Constructor method for filterRecallsSystemsV3
     * @uses FilterRecallsSystemsV3::setVrid()
     * @uses FilterRecallsSystemsV3::setDescriptionLanguage()
     * @uses FilterRecallsSystemsV3::setCarTypeId()
     * @uses FilterRecallsSystemsV3::setSearchedText()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param string $searchedText
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $searchedText = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setSearchedText($searchedText);
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
     * @return \StructType\FilterRecallsSystemsV3
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
     * @return \StructType\FilterRecallsSystemsV3
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
     * @return \StructType\FilterRecallsSystemsV3
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
     * Get searchedText value
     * @return string|null
     */
    public function getSearchedText()
    {
        return $this->searchedText;
    }
    /**
     * Set searchedText value
     * @param string $searchedText
     * @return \StructType\FilterRecallsSystemsV3
     */
    public function setSearchedText($searchedText = null)
    {
        // validation for constraint: string
        if (!is_null($searchedText) && !is_string($searchedText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchedText, true), gettype($searchedText)), __LINE__);
        }
        $this->searchedText = $searchedText;
        return $this;
    }
}
