<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStoryGeneralArticlesV2 StructType
 * @subpackage Structs
 */
class GetStoryGeneralArticlesV2 extends AbstractStructBase
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
     * The storyId
     * @var int
     */
    public $storyId;
    /**
     * The tecdocNumber
     * @var int
     */
    public $tecdocNumber;
    /**
     * Constructor method for getStoryGeneralArticlesV2
     * @uses GetStoryGeneralArticlesV2::setVrid()
     * @uses GetStoryGeneralArticlesV2::setDescriptionLanguage()
     * @uses GetStoryGeneralArticlesV2::setCarTypeId()
     * @uses GetStoryGeneralArticlesV2::setStoryId()
     * @uses GetStoryGeneralArticlesV2::setTecdocNumber()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $storyId
     * @param int $tecdocNumber
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $storyId = null, $tecdocNumber = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setStoryId($storyId)
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
     * @return \StructType\GetStoryGeneralArticlesV2
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
     * @return \StructType\GetStoryGeneralArticlesV2
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
     * @return \StructType\GetStoryGeneralArticlesV2
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
     * Get storyId value
     * @return int|null
     */
    public function getStoryId()
    {
        return $this->storyId;
    }
    /**
     * Set storyId value
     * @param int $storyId
     * @return \StructType\GetStoryGeneralArticlesV2
     */
    public function setStoryId($storyId = null)
    {
        // validation for constraint: int
        if (!is_null($storyId) && !(is_int($storyId) || ctype_digit($storyId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storyId, true), gettype($storyId)), __LINE__);
        }
        $this->storyId = $storyId;
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
     * @return \StructType\GetStoryGeneralArticlesV2
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
