<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeNodesForGenartResponse StructType
 * @subpackage Structs
 */
class GetRepairtimeNodesForGenartResponse extends AbstractStructBase
{
    /**
     * The getRepairtimeNodesForGenartReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNode[]
     */
    public $getRepairtimeNodesForGenartReturn;
    /**
     * Constructor method for getRepairtimeNodesForGenartResponse
     * @uses GetRepairtimeNodesForGenartResponse::setGetRepairtimeNodesForGenartReturn()
     * @param \StructType\ExtRepairtimeNode[] $getRepairtimeNodesForGenartReturn
     */
    public function __construct(array $getRepairtimeNodesForGenartReturn = array())
    {
        $this
            ->setGetRepairtimeNodesForGenartReturn($getRepairtimeNodesForGenartReturn);
    }
    /**
     * Get getRepairtimeNodesForGenartReturn value
     * @return \StructType\ExtRepairtimeNode[]|null
     */
    public function getGetRepairtimeNodesForGenartReturn()
    {
        return $this->getRepairtimeNodesForGenartReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeNodesForGenartReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeNodesForGenartReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeNodesForGenartReturnForArrayConstraintsFromSetGetRepairtimeNodesForGenartReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeNodesForGenartResponseGetRepairtimeNodesForGenartReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeNodesForGenartResponseGetRepairtimeNodesForGenartReturnItem instanceof \StructType\ExtRepairtimeNode) {
                $invalidValues[] = is_object($getRepairtimeNodesForGenartResponseGetRepairtimeNodesForGenartReturnItem) ? get_class($getRepairtimeNodesForGenartResponseGetRepairtimeNodesForGenartReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeNodesForGenartResponseGetRepairtimeNodesForGenartReturnItem), var_export($getRepairtimeNodesForGenartResponseGetRepairtimeNodesForGenartReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeNodesForGenartReturn property can only contain items of type \StructType\ExtRepairtimeNode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeNodesForGenartReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNode[] $getRepairtimeNodesForGenartReturn
     * @return \StructType\GetRepairtimeNodesForGenartResponse
     */
    public function setGetRepairtimeNodesForGenartReturn(array $getRepairtimeNodesForGenartReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeNodesForGenartReturnArrayErrorMessage = self::validateGetRepairtimeNodesForGenartReturnForArrayConstraintsFromSetGetRepairtimeNodesForGenartReturn($getRepairtimeNodesForGenartReturn))) {
            throw new \InvalidArgumentException($getRepairtimeNodesForGenartReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeNodesForGenartReturn = $getRepairtimeNodesForGenartReturn;
        return $this;
    }
    /**
     * Add item to getRepairtimeNodesForGenartReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNode $item
     * @return \StructType\GetRepairtimeNodesForGenartResponse
     */
    public function addToGetRepairtimeNodesForGenartReturn(\StructType\ExtRepairtimeNode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNode) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeNodesForGenartReturn property can only contain items of type \StructType\ExtRepairtimeNode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeNodesForGenartReturn[] = $item;
        return $this;
    }
}
