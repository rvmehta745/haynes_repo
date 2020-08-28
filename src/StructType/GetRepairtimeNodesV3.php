<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeNodesV3 StructType
 * @subpackage Structs
 */
class GetRepairtimeNodesV3 extends AbstractStructBase
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
     * Constructor method for getRepairtimeNodesV3
     * @uses GetRepairtimeNodesV3::setVrid()
     * @uses GetRepairtimeNodesV3::setDescriptionLanguage()
     * @uses GetRepairtimeNodesV3::setRepairtimeTypeId()
     * @uses GetRepairtimeNodesV3::setTypeCategory()
     * @uses GetRepairtimeNodesV3::setNodesIds()
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
     * @return \StructType\GetRepairtimeNodesV3
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
     * @return \StructType\GetRepairtimeNodesV3
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
     * @return \StructType\GetRepairtimeNodesV3
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
     * @return \StructType\GetRepairtimeNodesV3
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
        foreach ($values as $getRepairtimeNodesV3NodesIdsItem) {
            // validation for constraint: itemType
            if (!is_string($getRepairtimeNodesV3NodesIdsItem)) {
                $invalidValues[] = is_object($getRepairtimeNodesV3NodesIdsItem) ? get_class($getRepairtimeNodesV3NodesIdsItem) : sprintf('%s(%s)', gettype($getRepairtimeNodesV3NodesIdsItem), var_export($getRepairtimeNodesV3NodesIdsItem, true));
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
     * @return \StructType\GetRepairtimeNodesV3
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
     * @return \StructType\GetRepairtimeNodesV3
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
