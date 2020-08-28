<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeSubnodesResponse StructType
 * @subpackage Structs
 */
class GetRepairtimeSubnodesResponse extends AbstractStructBase
{
    /**
     * The getRepairtimeSubnodesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNode[]
     */
    public $getRepairtimeSubnodesReturn;
    /**
     * Constructor method for getRepairtimeSubnodesResponse
     * @uses GetRepairtimeSubnodesResponse::setGetRepairtimeSubnodesReturn()
     * @param \StructType\ExtRepairtimeNode[] $getRepairtimeSubnodesReturn
     */
    public function __construct(array $getRepairtimeSubnodesReturn = array())
    {
        $this
            ->setGetRepairtimeSubnodesReturn($getRepairtimeSubnodesReturn);
    }
    /**
     * Get getRepairtimeSubnodesReturn value
     * @return \StructType\ExtRepairtimeNode[]|null
     */
    public function getGetRepairtimeSubnodesReturn()
    {
        return $this->getRepairtimeSubnodesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeSubnodesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeSubnodesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeSubnodesReturnForArrayConstraintsFromSetGetRepairtimeSubnodesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeSubnodesResponseGetRepairtimeSubnodesReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeSubnodesResponseGetRepairtimeSubnodesReturnItem instanceof \StructType\ExtRepairtimeNode) {
                $invalidValues[] = is_object($getRepairtimeSubnodesResponseGetRepairtimeSubnodesReturnItem) ? get_class($getRepairtimeSubnodesResponseGetRepairtimeSubnodesReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeSubnodesResponseGetRepairtimeSubnodesReturnItem), var_export($getRepairtimeSubnodesResponseGetRepairtimeSubnodesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeSubnodesReturn property can only contain items of type \StructType\ExtRepairtimeNode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeSubnodesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNode[] $getRepairtimeSubnodesReturn
     * @return \StructType\GetRepairtimeSubnodesResponse
     */
    public function setGetRepairtimeSubnodesReturn(array $getRepairtimeSubnodesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeSubnodesReturnArrayErrorMessage = self::validateGetRepairtimeSubnodesReturnForArrayConstraintsFromSetGetRepairtimeSubnodesReturn($getRepairtimeSubnodesReturn))) {
            throw new \InvalidArgumentException($getRepairtimeSubnodesReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeSubnodesReturn = $getRepairtimeSubnodesReturn;
        return $this;
    }
    /**
     * Add item to getRepairtimeSubnodesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNode $item
     * @return \StructType\GetRepairtimeSubnodesResponse
     */
    public function addToGetRepairtimeSubnodesReturn(\StructType\ExtRepairtimeNode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNode) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeSubnodesReturn property can only contain items of type \StructType\ExtRepairtimeNode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeSubnodesReturn[] = $item;
        return $this;
    }
}
