<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeNodesForManyGenartsResponse StructType
 * @subpackage Structs
 */
class GetRepairtimeNodesForManyGenartsResponse extends AbstractStructBase
{
    /**
     * The getRepairtimeNodesForManyGenartsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNode[]
     */
    public $getRepairtimeNodesForManyGenartsReturn;
    /**
     * Constructor method for getRepairtimeNodesForManyGenartsResponse
     * @uses GetRepairtimeNodesForManyGenartsResponse::setGetRepairtimeNodesForManyGenartsReturn()
     * @param \StructType\ExtRepairtimeNode[] $getRepairtimeNodesForManyGenartsReturn
     */
    public function __construct(array $getRepairtimeNodesForManyGenartsReturn = array())
    {
        $this
            ->setGetRepairtimeNodesForManyGenartsReturn($getRepairtimeNodesForManyGenartsReturn);
    }
    /**
     * Get getRepairtimeNodesForManyGenartsReturn value
     * @return \StructType\ExtRepairtimeNode[]|null
     */
    public function getGetRepairtimeNodesForManyGenartsReturn()
    {
        return $this->getRepairtimeNodesForManyGenartsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeNodesForManyGenartsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeNodesForManyGenartsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeNodesForManyGenartsReturnForArrayConstraintsFromSetGetRepairtimeNodesForManyGenartsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeNodesForManyGenartsResponseGetRepairtimeNodesForManyGenartsReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeNodesForManyGenartsResponseGetRepairtimeNodesForManyGenartsReturnItem instanceof \StructType\ExtRepairtimeNode) {
                $invalidValues[] = is_object($getRepairtimeNodesForManyGenartsResponseGetRepairtimeNodesForManyGenartsReturnItem) ? get_class($getRepairtimeNodesForManyGenartsResponseGetRepairtimeNodesForManyGenartsReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeNodesForManyGenartsResponseGetRepairtimeNodesForManyGenartsReturnItem), var_export($getRepairtimeNodesForManyGenartsResponseGetRepairtimeNodesForManyGenartsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeNodesForManyGenartsReturn property can only contain items of type \StructType\ExtRepairtimeNode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeNodesForManyGenartsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNode[] $getRepairtimeNodesForManyGenartsReturn
     * @return \StructType\GetRepairtimeNodesForManyGenartsResponse
     */
    public function setGetRepairtimeNodesForManyGenartsReturn(array $getRepairtimeNodesForManyGenartsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeNodesForManyGenartsReturnArrayErrorMessage = self::validateGetRepairtimeNodesForManyGenartsReturnForArrayConstraintsFromSetGetRepairtimeNodesForManyGenartsReturn($getRepairtimeNodesForManyGenartsReturn))) {
            throw new \InvalidArgumentException($getRepairtimeNodesForManyGenartsReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeNodesForManyGenartsReturn = $getRepairtimeNodesForManyGenartsReturn;
        return $this;
    }
    /**
     * Add item to getRepairtimeNodesForManyGenartsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNode $item
     * @return \StructType\GetRepairtimeNodesForManyGenartsResponse
     */
    public function addToGetRepairtimeNodesForManyGenartsReturn(\StructType\ExtRepairtimeNode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNode) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeNodesForManyGenartsReturn property can only contain items of type \StructType\ExtRepairtimeNode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeNodesForManyGenartsReturn[] = $item;
        return $this;
    }
}
