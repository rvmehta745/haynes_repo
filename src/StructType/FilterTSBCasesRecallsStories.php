<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterTSBCasesRecallsStories StructType
 * @subpackage Structs
 */
class FilterTSBCasesRecallsStories extends AbstractStructBase
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
     * The repairTaskIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $repairTaskIds;
    /**
     * Constructor method for filterTSBCasesRecallsStories
     * @uses FilterTSBCasesRecallsStories::setVrid()
     * @uses FilterTSBCasesRecallsStories::setDescriptionLanguage()
     * @uses FilterTSBCasesRecallsStories::setCarTypeId()
     * @uses FilterTSBCasesRecallsStories::setCarTypeGroup()
     * @uses FilterTSBCasesRecallsStories::setSearchedText()
     * @uses FilterTSBCasesRecallsStories::setRepairTaskIds()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param string $carTypeGroup
     * @param string $searchedText
     * @param string[] $repairTaskIds
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $carTypeGroup = null, $searchedText = null, array $repairTaskIds = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setCarTypeGroup($carTypeGroup)
            ->setSearchedText($searchedText)
            ->setRepairTaskIds($repairTaskIds);
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
     * @return \StructType\FilterTSBCasesRecallsStories
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
     * @return \StructType\FilterTSBCasesRecallsStories
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
     * @return \StructType\FilterTSBCasesRecallsStories
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
     * @return \StructType\FilterTSBCasesRecallsStories
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
     * @return \StructType\FilterTSBCasesRecallsStories
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
    /**
     * Get repairTaskIds value
     * @return string[]|null
     */
    public function getRepairTaskIds()
    {
        return $this->repairTaskIds;
    }
    /**
     * This method is responsible for validating the values passed to the setRepairTaskIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRepairTaskIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRepairTaskIdsForArrayConstraintsFromSetRepairTaskIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $filterTSBCasesRecallsStoriesRepairTaskIdsItem) {
            // validation for constraint: itemType
            if (!is_string($filterTSBCasesRecallsStoriesRepairTaskIdsItem)) {
                $invalidValues[] = is_object($filterTSBCasesRecallsStoriesRepairTaskIdsItem) ? get_class($filterTSBCasesRecallsStoriesRepairTaskIdsItem) : sprintf('%s(%s)', gettype($filterTSBCasesRecallsStoriesRepairTaskIdsItem), var_export($filterTSBCasesRecallsStoriesRepairTaskIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The repairTaskIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set repairTaskIds value
     * @throws \InvalidArgumentException
     * @param string[] $repairTaskIds
     * @return \StructType\FilterTSBCasesRecallsStories
     */
    public function setRepairTaskIds(array $repairTaskIds = array())
    {
        // validation for constraint: array
        if ('' !== ($repairTaskIdsArrayErrorMessage = self::validateRepairTaskIdsForArrayConstraintsFromSetRepairTaskIds($repairTaskIds))) {
            throw new \InvalidArgumentException($repairTaskIdsArrayErrorMessage, __LINE__);
        }
        $this->repairTaskIds = $repairTaskIds;
        return $this;
    }
    /**
     * Add item to repairTaskIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\FilterTSBCasesRecallsStories
     */
    public function addToRepairTaskIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The repairTaskIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->repairTaskIds[] = $item;
        return $this;
    }
}
