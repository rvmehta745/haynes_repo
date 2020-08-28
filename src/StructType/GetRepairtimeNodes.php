<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeNodes StructType
 * @subpackage Structs
 */
class GetRepairtimeNodes extends AbstractStructBase
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
     * The nodeIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $nodeIds;
    /**
     * Constructor method for getRepairtimeNodes
     * @uses GetRepairtimeNodes::setVrid()
     * @uses GetRepairtimeNodes::setDescriptionLanguage()
     * @uses GetRepairtimeNodes::setRepairtimeTypeId()
     * @uses GetRepairtimeNodes::setNodeIds()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $repairtimeTypeId
     * @param string[] $nodeIds
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $repairtimeTypeId = null, array $nodeIds = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setRepairtimeTypeId($repairtimeTypeId)
            ->setNodeIds($nodeIds);
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
     * @return \StructType\GetRepairtimeNodes
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
     * @return \StructType\GetRepairtimeNodes
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
     * @return \StructType\GetRepairtimeNodes
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
     * Get nodeIds value
     * @return string[]|null
     */
    public function getNodeIds()
    {
        return $this->nodeIds;
    }
    /**
     * This method is responsible for validating the values passed to the setNodeIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNodeIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNodeIdsForArrayConstraintsFromSetNodeIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeNodesNodeIdsItem) {
            // validation for constraint: itemType
            if (!is_string($getRepairtimeNodesNodeIdsItem)) {
                $invalidValues[] = is_object($getRepairtimeNodesNodeIdsItem) ? get_class($getRepairtimeNodesNodeIdsItem) : sprintf('%s(%s)', gettype($getRepairtimeNodesNodeIdsItem), var_export($getRepairtimeNodesNodeIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The nodeIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set nodeIds value
     * @throws \InvalidArgumentException
     * @param string[] $nodeIds
     * @return \StructType\GetRepairtimeNodes
     */
    public function setNodeIds(array $nodeIds = array())
    {
        // validation for constraint: array
        if ('' !== ($nodeIdsArrayErrorMessage = self::validateNodeIdsForArrayConstraintsFromSetNodeIds($nodeIds))) {
            throw new \InvalidArgumentException($nodeIdsArrayErrorMessage, __LINE__);
        }
        $this->nodeIds = $nodeIds;
        return $this;
    }
    /**
     * Add item to nodeIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetRepairtimeNodes
     */
    public function addToNodeIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The nodeIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->nodeIds[] = $item;
        return $this;
    }
}
