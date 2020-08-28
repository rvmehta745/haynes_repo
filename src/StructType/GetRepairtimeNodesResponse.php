<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeNodesResponse StructType
 * @subpackage Structs
 */
class GetRepairtimeNodesResponse extends AbstractStructBase
{
    /**
     * The getRepairtimeNodesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNode[]
     */
    public $getRepairtimeNodesReturn;
    /**
     * Constructor method for getRepairtimeNodesResponse
     * @uses GetRepairtimeNodesResponse::setGetRepairtimeNodesReturn()
     * @param \StructType\ExtRepairtimeNode[] $getRepairtimeNodesReturn
     */
    public function __construct(array $getRepairtimeNodesReturn = array())
    {
        $this
            ->setGetRepairtimeNodesReturn($getRepairtimeNodesReturn);
    }
    /**
     * Get getRepairtimeNodesReturn value
     * @return \StructType\ExtRepairtimeNode[]|null
     */
    public function getGetRepairtimeNodesReturn()
    {
        return $this->getRepairtimeNodesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeNodesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeNodesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeNodesReturnForArrayConstraintsFromSetGetRepairtimeNodesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeNodesResponseGetRepairtimeNodesReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeNodesResponseGetRepairtimeNodesReturnItem instanceof \StructType\ExtRepairtimeNode) {
                $invalidValues[] = is_object($getRepairtimeNodesResponseGetRepairtimeNodesReturnItem) ? get_class($getRepairtimeNodesResponseGetRepairtimeNodesReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeNodesResponseGetRepairtimeNodesReturnItem), var_export($getRepairtimeNodesResponseGetRepairtimeNodesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeNodesReturn property can only contain items of type \StructType\ExtRepairtimeNode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeNodesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNode[] $getRepairtimeNodesReturn
     * @return \StructType\GetRepairtimeNodesResponse
     */
    public function setGetRepairtimeNodesReturn(array $getRepairtimeNodesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeNodesReturnArrayErrorMessage = self::validateGetRepairtimeNodesReturnForArrayConstraintsFromSetGetRepairtimeNodesReturn($getRepairtimeNodesReturn))) {
            throw new \InvalidArgumentException($getRepairtimeNodesReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeNodesReturn = $getRepairtimeNodesReturn;
        return $this;
    }
    /**
     * Add item to getRepairtimeNodesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNode $item
     * @return \StructType\GetRepairtimeNodesResponse
     */
    public function addToGetRepairtimeNodesReturn(\StructType\ExtRepairtimeNode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNode) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeNodesReturn property can only contain items of type \StructType\ExtRepairtimeNode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeNodesReturn[] = $item;
        return $this;
    }
}
