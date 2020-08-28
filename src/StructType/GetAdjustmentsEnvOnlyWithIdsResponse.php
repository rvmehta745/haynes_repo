<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsEnvOnlyWithIdsResponse StructType
 * @subpackage Structs
 */
class GetAdjustmentsEnvOnlyWithIdsResponse extends AbstractStructBase
{
    /**
     * The getAdjustmentsEnvOnlyWithIdsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtAdjustmentIdentifier[]
     */
    public $getAdjustmentsEnvOnlyWithIdsReturn;
    /**
     * Constructor method for getAdjustmentsEnvOnlyWithIdsResponse
     * @uses GetAdjustmentsEnvOnlyWithIdsResponse::setGetAdjustmentsEnvOnlyWithIdsReturn()
     * @param \StructType\ExtAdjustmentIdentifier[] $getAdjustmentsEnvOnlyWithIdsReturn
     */
    public function __construct(array $getAdjustmentsEnvOnlyWithIdsReturn = array())
    {
        $this
            ->setGetAdjustmentsEnvOnlyWithIdsReturn($getAdjustmentsEnvOnlyWithIdsReturn);
    }
    /**
     * Get getAdjustmentsEnvOnlyWithIdsReturn value
     * @return \StructType\ExtAdjustmentIdentifier[]|null
     */
    public function getGetAdjustmentsEnvOnlyWithIdsReturn()
    {
        return $this->getAdjustmentsEnvOnlyWithIdsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustmentsEnvOnlyWithIdsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustmentsEnvOnlyWithIdsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustmentsEnvOnlyWithIdsReturnForArrayConstraintsFromSetGetAdjustmentsEnvOnlyWithIdsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustmentsEnvOnlyWithIdsResponseGetAdjustmentsEnvOnlyWithIdsReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustmentsEnvOnlyWithIdsResponseGetAdjustmentsEnvOnlyWithIdsReturnItem instanceof \StructType\ExtAdjustmentIdentifier) {
                $invalidValues[] = is_object($getAdjustmentsEnvOnlyWithIdsResponseGetAdjustmentsEnvOnlyWithIdsReturnItem) ? get_class($getAdjustmentsEnvOnlyWithIdsResponseGetAdjustmentsEnvOnlyWithIdsReturnItem) : sprintf('%s(%s)', gettype($getAdjustmentsEnvOnlyWithIdsResponseGetAdjustmentsEnvOnlyWithIdsReturnItem), var_export($getAdjustmentsEnvOnlyWithIdsResponseGetAdjustmentsEnvOnlyWithIdsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustmentsEnvOnlyWithIdsReturn property can only contain items of type \StructType\ExtAdjustmentIdentifier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustmentsEnvOnlyWithIdsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustmentIdentifier[] $getAdjustmentsEnvOnlyWithIdsReturn
     * @return \StructType\GetAdjustmentsEnvOnlyWithIdsResponse
     */
    public function setGetAdjustmentsEnvOnlyWithIdsReturn(array $getAdjustmentsEnvOnlyWithIdsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustmentsEnvOnlyWithIdsReturnArrayErrorMessage = self::validateGetAdjustmentsEnvOnlyWithIdsReturnForArrayConstraintsFromSetGetAdjustmentsEnvOnlyWithIdsReturn($getAdjustmentsEnvOnlyWithIdsReturn))) {
            throw new \InvalidArgumentException($getAdjustmentsEnvOnlyWithIdsReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustmentsEnvOnlyWithIdsReturn = $getAdjustmentsEnvOnlyWithIdsReturn;
        return $this;
    }
    /**
     * Add item to getAdjustmentsEnvOnlyWithIdsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustmentIdentifier $item
     * @return \StructType\GetAdjustmentsEnvOnlyWithIdsResponse
     */
    public function addToGetAdjustmentsEnvOnlyWithIdsReturn(\StructType\ExtAdjustmentIdentifier $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtAdjustmentIdentifier) {
            throw new \InvalidArgumentException(sprintf('The getAdjustmentsEnvOnlyWithIdsReturn property can only contain items of type \StructType\ExtAdjustmentIdentifier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustmentsEnvOnlyWithIdsReturn[] = $item;
        return $this;
    }
}
