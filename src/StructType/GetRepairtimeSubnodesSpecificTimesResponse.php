<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeSubnodesSpecificTimesResponse StructType
 * @subpackage Structs
 */
class GetRepairtimeSubnodesSpecificTimesResponse extends AbstractStructBase
{
    /**
     * The getRepairtimeSubnodesSpecificTimesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNode[]
     */
    public $getRepairtimeSubnodesSpecificTimesReturn;
    /**
     * Constructor method for getRepairtimeSubnodesSpecificTimesResponse
     * @uses GetRepairtimeSubnodesSpecificTimesResponse::setGetRepairtimeSubnodesSpecificTimesReturn()
     * @param \StructType\ExtRepairtimeNode[] $getRepairtimeSubnodesSpecificTimesReturn
     */
    public function __construct(array $getRepairtimeSubnodesSpecificTimesReturn = array())
    {
        $this
            ->setGetRepairtimeSubnodesSpecificTimesReturn($getRepairtimeSubnodesSpecificTimesReturn);
    }
    /**
     * Get getRepairtimeSubnodesSpecificTimesReturn value
     * @return \StructType\ExtRepairtimeNode[]|null
     */
    public function getGetRepairtimeSubnodesSpecificTimesReturn()
    {
        return $this->getRepairtimeSubnodesSpecificTimesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeSubnodesSpecificTimesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeSubnodesSpecificTimesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeSubnodesSpecificTimesReturnForArrayConstraintsFromSetGetRepairtimeSubnodesSpecificTimesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeSubnodesSpecificTimesResponseGetRepairtimeSubnodesSpecificTimesReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeSubnodesSpecificTimesResponseGetRepairtimeSubnodesSpecificTimesReturnItem instanceof \StructType\ExtRepairtimeNode) {
                $invalidValues[] = is_object($getRepairtimeSubnodesSpecificTimesResponseGetRepairtimeSubnodesSpecificTimesReturnItem) ? get_class($getRepairtimeSubnodesSpecificTimesResponseGetRepairtimeSubnodesSpecificTimesReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeSubnodesSpecificTimesResponseGetRepairtimeSubnodesSpecificTimesReturnItem), var_export($getRepairtimeSubnodesSpecificTimesResponseGetRepairtimeSubnodesSpecificTimesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeSubnodesSpecificTimesReturn property can only contain items of type \StructType\ExtRepairtimeNode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeSubnodesSpecificTimesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNode[] $getRepairtimeSubnodesSpecificTimesReturn
     * @return \StructType\GetRepairtimeSubnodesSpecificTimesResponse
     */
    public function setGetRepairtimeSubnodesSpecificTimesReturn(array $getRepairtimeSubnodesSpecificTimesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeSubnodesSpecificTimesReturnArrayErrorMessage = self::validateGetRepairtimeSubnodesSpecificTimesReturnForArrayConstraintsFromSetGetRepairtimeSubnodesSpecificTimesReturn($getRepairtimeSubnodesSpecificTimesReturn))) {
            throw new \InvalidArgumentException($getRepairtimeSubnodesSpecificTimesReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeSubnodesSpecificTimesReturn = $getRepairtimeSubnodesSpecificTimesReturn;
        return $this;
    }
    /**
     * Add item to getRepairtimeSubnodesSpecificTimesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNode $item
     * @return \StructType\GetRepairtimeSubnodesSpecificTimesResponse
     */
    public function addToGetRepairtimeSubnodesSpecificTimesReturn(\StructType\ExtRepairtimeNode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNode) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeSubnodesSpecificTimesReturn property can only contain items of type \StructType\ExtRepairtimeNode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeSubnodesSpecificTimesReturn[] = $item;
        return $this;
    }
}
