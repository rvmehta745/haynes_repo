<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsEnvOnlyResponse StructType
 * @subpackage Structs
 */
class GetAdjustmentsEnvOnlyResponse extends AbstractStructBase
{
    /**
     * The getAdjustmentsEnvOnlyReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtAdjustment[]
     */
    public $getAdjustmentsEnvOnlyReturn;
    /**
     * Constructor method for getAdjustmentsEnvOnlyResponse
     * @uses GetAdjustmentsEnvOnlyResponse::setGetAdjustmentsEnvOnlyReturn()
     * @param \StructType\ExtAdjustment[] $getAdjustmentsEnvOnlyReturn
     */
    public function __construct(array $getAdjustmentsEnvOnlyReturn = array())
    {
        $this
            ->setGetAdjustmentsEnvOnlyReturn($getAdjustmentsEnvOnlyReturn);
    }
    /**
     * Get getAdjustmentsEnvOnlyReturn value
     * @return \StructType\ExtAdjustment[]|null
     */
    public function getGetAdjustmentsEnvOnlyReturn()
    {
        return $this->getAdjustmentsEnvOnlyReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustmentsEnvOnlyReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustmentsEnvOnlyReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustmentsEnvOnlyReturnForArrayConstraintsFromSetGetAdjustmentsEnvOnlyReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustmentsEnvOnlyResponseGetAdjustmentsEnvOnlyReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustmentsEnvOnlyResponseGetAdjustmentsEnvOnlyReturnItem instanceof \StructType\ExtAdjustment) {
                $invalidValues[] = is_object($getAdjustmentsEnvOnlyResponseGetAdjustmentsEnvOnlyReturnItem) ? get_class($getAdjustmentsEnvOnlyResponseGetAdjustmentsEnvOnlyReturnItem) : sprintf('%s(%s)', gettype($getAdjustmentsEnvOnlyResponseGetAdjustmentsEnvOnlyReturnItem), var_export($getAdjustmentsEnvOnlyResponseGetAdjustmentsEnvOnlyReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustmentsEnvOnlyReturn property can only contain items of type \StructType\ExtAdjustment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustmentsEnvOnlyReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustment[] $getAdjustmentsEnvOnlyReturn
     * @return \StructType\GetAdjustmentsEnvOnlyResponse
     */
    public function setGetAdjustmentsEnvOnlyReturn(array $getAdjustmentsEnvOnlyReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustmentsEnvOnlyReturnArrayErrorMessage = self::validateGetAdjustmentsEnvOnlyReturnForArrayConstraintsFromSetGetAdjustmentsEnvOnlyReturn($getAdjustmentsEnvOnlyReturn))) {
            throw new \InvalidArgumentException($getAdjustmentsEnvOnlyReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustmentsEnvOnlyReturn = $getAdjustmentsEnvOnlyReturn;
        return $this;
    }
    /**
     * Add item to getAdjustmentsEnvOnlyReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustment $item
     * @return \StructType\GetAdjustmentsEnvOnlyResponse
     */
    public function addToGetAdjustmentsEnvOnlyReturn(\StructType\ExtAdjustment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtAdjustment) {
            throw new \InvalidArgumentException(sprintf('The getAdjustmentsEnvOnlyReturn property can only contain items of type \StructType\ExtAdjustment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustmentsEnvOnlyReturn[] = $item;
        return $this;
    }
}
