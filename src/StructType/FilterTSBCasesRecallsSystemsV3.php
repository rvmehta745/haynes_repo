<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterTSBCasesRecallsSystemsV3 StructType
 * @subpackage Structs
 */
class FilterTSBCasesRecallsSystemsV3 extends AbstractStructBase
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
     * The carTypeGroup
     * @var string
     */
    public $carTypeGroup;
    /**
     * The searchedText
     * @var string
     */
    public $searchedText;
    /**
     * Constructor method for filterTSBCasesRecallsSystemsV3
     * @uses FilterTSBCasesRecallsSystemsV3::setVrid()
     * @uses FilterTSBCasesRecallsSystemsV3::setDescriptionLanguage()
     * @uses FilterTSBCasesRecallsSystemsV3::setCarTypeId()
     * @uses FilterTSBCasesRecallsSystemsV3::setCarTypeGroup()
     * @uses FilterTSBCasesRecallsSystemsV3::setSearchedText()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param string $carTypeGroup
     * @param string $searchedText
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $carTypeGroup = null, $searchedText = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setCarTypeGroup($carTypeGroup)
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
     * @return \StructType\FilterTSBCasesRecallsSystemsV3
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
     * @return \StructType\FilterTSBCasesRecallsSystemsV3
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
     * @return \StructType\FilterTSBCasesRecallsSystemsV3
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
     * Get carTypeGroup value
     * @return string|null
     */
    public function getCarTypeGroup()
    {
        return $this->carTypeGroup;
    }
    /**
     * Set carTypeGroup value
     * @param string $carTypeGroup
     * @return \StructType\FilterTSBCasesRecallsSystemsV3
     */
    public function setCarTypeGroup($carTypeGroup = null)
    {
        // validation for constraint: string
        if (!is_null($carTypeGroup) && !is_string($carTypeGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carTypeGroup, true), gettype($carTypeGroup)), __LINE__);
        }
        $this->carTypeGroup = $carTypeGroup;
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
     * @return \StructType\FilterTSBCasesRecallsSystemsV3
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
