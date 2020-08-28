<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeNodesV2 StructType
 * @subpackage Structs
 */
class GetRepairtimeNodesV2 extends AbstractStructBase
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
     * The typeCategory
     * @var string
     */
    public $typeCategory;
    /**
     * The nodesIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $nodesIds;
    /**
     * Constructor method for getRepairtimeNodesV2
     * @uses GetRepairtimeNodesV2::setVrid()
     * @uses GetRepairtimeNodesV2::setDescriptionLanguage()
     * @uses GetRepairtimeNodesV2::setRepairtimeTypeId()
     * @uses GetRepairtimeNodesV2::setTypeCategory()
     * @uses GetRepairtimeNodesV2::setNodesIds()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $repairtimeTypeId
     * @param string $typeCategory
     * @param string[] $nodesIds
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $repairtimeTypeId = null, $typeCategory = null, array $nodesIds = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setRepairtimeTypeId($repairtimeTypeId)
            ->setTypeCategory($typeCategory)
            ->setNodesIds($nodesIds);
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
     * @return \StructType\GetRepairtimeNodesV2
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
     * @return \StructType\GetRepairtimeNodesV2
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
     * @return \StructType\GetRepairtimeNodesV2
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
     * Get typeCategory value
     * @return string|null
     */
    public function getTypeCategory()
    {
        return $this->typeCategory;
    }
    /**
     * Set typeCategory value
     * @param string $typeCategory
     * @return \StructType\GetRepairtimeNodesV2
     */
    public function setTypeCategory($typeCategory = null)
    {
        // validation for constraint: string
        if (!is_null($typeCategory) && !is_string($typeCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeCategory, true), gettype($typeCategory)), __LINE__);
        }
        $this->typeCategory = $typeCategory;
        return $this;
    }
    /**
     * Get nodesIds value
     * @return string[]|null
     */
    public function getNodesIds()
    {
        return $this->nodesIds;
    }
    /**
     * This method is responsible for validating the values passed to the setNodesIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNodesIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNodesIdsForArrayConstraintsFromSetNodesIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeNodesV2NodesIdsItem) {
            // validation for constraint: itemType
            if (!is_string($getRepairtimeNodesV2NodesIdsItem)) {
                $invalidValues[] = is_object($getRepairtimeNodesV2NodesIdsItem) ? get_class($getRepairtimeNodesV2NodesIdsItem) : sprintf('%s(%s)', gettype($getRepairtimeNodesV2NodesIdsItem), var_export($getRepairtimeNodesV2NodesIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The nodesIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set nodesIds value
     * @throws \InvalidArgumentException
     * @param string[] $nodesIds
     * @return \StructType\GetRepairtimeNodesV2
     */
    public function setNodesIds(array $nodesIds = array())
    {
        // validation for constraint: array
        if ('' !== ($nodesIdsArrayErrorMessage = self::validateNodesIdsForArrayConstraintsFromSetNodesIds($nodesIds))) {
            throw new \InvalidArgumentException($nodesIdsArrayErrorMessage, __LINE__);
        }
        $this->nodesIds = $nodesIds;
        return $this;
    }
    /**
     * Add item to nodesIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetRepairtimeNodesV2
     */
    public function addToNodesIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The nodesIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->nodesIds[] = $item;
        return $this;
    }
}
