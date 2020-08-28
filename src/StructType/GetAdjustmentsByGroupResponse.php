<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsByGroupResponse StructType
 * @subpackage Structs
 */
class GetAdjustmentsByGroupResponse extends AbstractStructBase
{
    /**
     * The getAdjustmentsByGroupReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtAdjustment[]
     */
    public $getAdjustmentsByGroupReturn;
    /**
     * Constructor method for getAdjustmentsByGroupResponse
     * @uses GetAdjustmentsByGroupResponse::setGetAdjustmentsByGroupReturn()
     * @param \StructType\ExtAdjustment[] $getAdjustmentsByGroupReturn
     */
    public function __construct(array $getAdjustmentsByGroupReturn = array())
    {
        $this
            ->setGetAdjustmentsByGroupReturn($getAdjustmentsByGroupReturn);
    }
    /**
     * Get getAdjustmentsByGroupReturn value
     * @return \StructType\ExtAdjustment[]|null
     */
    public function getGetAdjustmentsByGroupReturn()
    {
        return $this->getAdjustmentsByGroupReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustmentsByGroupReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustmentsByGroupReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustmentsByGroupReturnForArrayConstraintsFromSetGetAdjustmentsByGroupReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustmentsByGroupResponseGetAdjustmentsByGroupReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustmentsByGroupResponseGetAdjustmentsByGroupReturnItem instanceof \StructType\ExtAdjustment) {
                $invalidValues[] = is_object($getAdjustmentsByGroupResponseGetAdjustmentsByGroupReturnItem) ? get_class($getAdjustmentsByGroupResponseGetAdjustmentsByGroupReturnItem) : sprintf('%s(%s)', gettype($getAdjustmentsByGroupResponseGetAdjustmentsByGroupReturnItem), var_export($getAdjustmentsByGroupResponseGetAdjustmentsByGroupReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustmentsByGroupReturn property can only contain items of type \StructType\ExtAdjustment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustmentsByGroupReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustment[] $getAdjustmentsByGroupReturn
     * @return \StructType\GetAdjustmentsByGroupResponse
     */
    public function setGetAdjustmentsByGroupReturn(array $getAdjustmentsByGroupReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustmentsByGroupReturnArrayErrorMessage = self::validateGetAdjustmentsByGroupReturnForArrayConstraintsFromSetGetAdjustmentsByGroupReturn($getAdjustmentsByGroupReturn))) {
            throw new \InvalidArgumentException($getAdjustmentsByGroupReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustmentsByGroupReturn = $getAdjustmentsByGroupReturn;
        return $this;
    }
    /**
     * Add item to getAdjustmentsByGroupReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustment $item
     * @return \StructType\GetAdjustmentsByGroupResponse
     */
    public function addToGetAdjustmentsByGroupReturn(\StructType\ExtAdjustment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtAdjustment) {
            throw new \InvalidArgumentException(sprintf('The getAdjustmentsByGroupReturn property can only contain items of type \StructType\ExtAdjustment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustmentsByGroupReturn[] = $item;
        return $this;
    }
}
