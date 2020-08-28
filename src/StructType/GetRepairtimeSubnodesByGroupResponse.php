<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeSubnodesByGroupResponse StructType
 * @subpackage Structs
 */
class GetRepairtimeSubnodesByGroupResponse extends AbstractStructBase
{
    /**
     * The getRepairtimeSubnodesByGroupReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNode[]
     */
    public $getRepairtimeSubnodesByGroupReturn;
    /**
     * Constructor method for getRepairtimeSubnodesByGroupResponse
     * @uses GetRepairtimeSubnodesByGroupResponse::setGetRepairtimeSubnodesByGroupReturn()
     * @param \StructType\ExtRepairtimeNode[] $getRepairtimeSubnodesByGroupReturn
     */
    public function __construct(array $getRepairtimeSubnodesByGroupReturn = array())
    {
        $this
            ->setGetRepairtimeSubnodesByGroupReturn($getRepairtimeSubnodesByGroupReturn);
    }
    /**
     * Get getRepairtimeSubnodesByGroupReturn value
     * @return \StructType\ExtRepairtimeNode[]|null
     */
    public function getGetRepairtimeSubnodesByGroupReturn()
    {
        return $this->getRepairtimeSubnodesByGroupReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeSubnodesByGroupReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeSubnodesByGroupReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeSubnodesByGroupReturnForArrayConstraintsFromSetGetRepairtimeSubnodesByGroupReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeSubnodesByGroupResponseGetRepairtimeSubnodesByGroupReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeSubnodesByGroupResponseGetRepairtimeSubnodesByGroupReturnItem instanceof \StructType\ExtRepairtimeNode) {
                $invalidValues[] = is_object($getRepairtimeSubnodesByGroupResponseGetRepairtimeSubnodesByGroupReturnItem) ? get_class($getRepairtimeSubnodesByGroupResponseGetRepairtimeSubnodesByGroupReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeSubnodesByGroupResponseGetRepairtimeSubnodesByGroupReturnItem), var_export($getRepairtimeSubnodesByGroupResponseGetRepairtimeSubnodesByGroupReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeSubnodesByGroupReturn property can only contain items of type \StructType\ExtRepairtimeNode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeSubnodesByGroupReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNode[] $getRepairtimeSubnodesByGroupReturn
     * @return \StructType\GetRepairtimeSubnodesByGroupResponse
     */
    public function setGetRepairtimeSubnodesByGroupReturn(array $getRepairtimeSubnodesByGroupReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeSubnodesByGroupReturnArrayErrorMessage = self::validateGetRepairtimeSubnodesByGroupReturnForArrayConstraintsFromSetGetRepairtimeSubnodesByGroupReturn($getRepairtimeSubnodesByGroupReturn))) {
            throw new \InvalidArgumentException($getRepairtimeSubnodesByGroupReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeSubnodesByGroupReturn = $getRepairtimeSubnodesByGroupReturn;
        return $this;
    }
    /**
     * Add item to getRepairtimeSubnodesByGroupReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNode $item
     * @return \StructType\GetRepairtimeSubnodesByGroupResponse
     */
    public function addToGetRepairtimeSubnodesByGroupReturn(\StructType\ExtRepairtimeNode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNode) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeSubnodesByGroupReturn property can only contain items of type \StructType\ExtRepairtimeNode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeSubnodesByGroupReturn[] = $item;
        return $this;
    }
}
