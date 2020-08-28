<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsV7Response StructType
 * @subpackage Structs
 */
class GetAdjustmentsV7Response extends AbstractStructBase
{
    /**
     * The getAdjustmentsV7Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtAdjustmentV6[]
     */
    public $getAdjustmentsV7Return;
    /**
     * Constructor method for getAdjustmentsV7Response
     * @uses GetAdjustmentsV7Response::setGetAdjustmentsV7Return()
     * @param \StructType\ExtAdjustmentV6[] $getAdjustmentsV7Return
     */
    public function __construct(array $getAdjustmentsV7Return = array())
    {
        $this
            ->setGetAdjustmentsV7Return($getAdjustmentsV7Return);
    }
    /**
     * Get getAdjustmentsV7Return value
     * @return \StructType\ExtAdjustmentV6[]|null
     */
    public function getGetAdjustmentsV7Return()
    {
        return $this->getAdjustmentsV7Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustmentsV7Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustmentsV7Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustmentsV7ReturnForArrayConstraintsFromSetGetAdjustmentsV7Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustmentsV7ResponseGetAdjustmentsV7ReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustmentsV7ResponseGetAdjustmentsV7ReturnItem instanceof \StructType\ExtAdjustmentV6) {
                $invalidValues[] = is_object($getAdjustmentsV7ResponseGetAdjustmentsV7ReturnItem) ? get_class($getAdjustmentsV7ResponseGetAdjustmentsV7ReturnItem) : sprintf('%s(%s)', gettype($getAdjustmentsV7ResponseGetAdjustmentsV7ReturnItem), var_export($getAdjustmentsV7ResponseGetAdjustmentsV7ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustmentsV7Return property can only contain items of type \StructType\ExtAdjustmentV6, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustmentsV7Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustmentV6[] $getAdjustmentsV7Return
     * @return \StructType\GetAdjustmentsV7Response
     */
    public function setGetAdjustmentsV7Return(array $getAdjustmentsV7Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustmentsV7ReturnArrayErrorMessage = self::validateGetAdjustmentsV7ReturnForArrayConstraintsFromSetGetAdjustmentsV7Return($getAdjustmentsV7Return))) {
            throw new \InvalidArgumentException($getAdjustmentsV7ReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustmentsV7Return = $getAdjustmentsV7Return;
        return $this;
    }
    /**
     * Add item to getAdjustmentsV7Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustmentV6 $item
     * @return \StructType\GetAdjustmentsV7Response
     */
    public function addToGetAdjustmentsV7Return(\StructType\ExtAdjustmentV6 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtAdjustmentV6) {
            throw new \InvalidArgumentException(sprintf('The getAdjustmentsV7Return property can only contain items of type \StructType\ExtAdjustmentV6, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustmentsV7Return[] = $item;
        return $this;
    }
}
