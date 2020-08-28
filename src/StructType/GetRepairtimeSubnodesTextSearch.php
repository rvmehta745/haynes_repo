<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeSubnodesTextSearch StructType
 * @subpackage Structs
 */
class GetRepairtimeSubnodesTextSearch extends AbstractStructBase
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
     * The nodeId
     * @var string
     */
    public $nodeId;
    /**
     * The searchText
     * @var string
     */
    public $searchText;
    /**
     * The carTypeGroup
     * @var string
     */
    public $carTypeGroup;
    /**
     * Constructor method for getRepairtimeSubnodesTextSearch
     * @uses GetRepairtimeSubnodesTextSearch::setVrid()
     * @uses GetRepairtimeSubnodesTextSearch::setDescriptionLanguage()
     * @uses GetRepairtimeSubnodesTextSearch::setRepairtimeTypeId()
     * @uses GetRepairtimeSubnodesTextSearch::setNodeId()
     * @uses GetRepairtimeSubnodesTextSearch::setSearchText()
     * @uses GetRepairtimeSubnodesTextSearch::setCarTypeGroup()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $repairtimeTypeId
     * @param string $nodeId
     * @param string $searchText
     * @param string $carTypeGroup
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $repairtimeTypeId = null, $nodeId = null, $searchText = null, $carTypeGroup = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setRepairtimeTypeId($repairtimeTypeId)
            ->setNodeId($nodeId)
            ->setSearchText($searchText)
            ->setCarTypeGroup($carTypeGroup);
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
     * @return \StructType\GetRepairtimeSubnodesTextSearch
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
     * @return \StructType\GetRepairtimeSubnodesTextSearch
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
     * @return \StructType\GetRepairtimeSubnodesTextSearch
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
     * Get nodeId value
     * @return string|null
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }
    /**
     * Set nodeId value
     * @param string $nodeId
     * @return \StructType\GetRepairtimeSubnodesTextSearch
     */
    public function setNodeId($nodeId = null)
    {
        // validation for constraint: string
        if (!is_null($nodeId) && !is_string($nodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nodeId, true), gettype($nodeId)), __LINE__);
        }
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * Get searchText value
     * @return string|null
     */
    public function getSearchText()
    {
        return $this->searchText;
    }
    /**
     * Set searchText value
     * @param string $searchText
     * @return \StructType\GetRepairtimeSubnodesTextSearch
     */
    public function setSearchText($searchText = null)
    {
        // validation for constraint: string
        if (!is_null($searchText) && !is_string($searchText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchText, true), gettype($searchText)), __LINE__);
        }
        $this->searchText = $searchText;
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
     * @return \StructType\GetRepairtimeSubnodesTextSearch
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
}
