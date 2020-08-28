<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsV4Response StructType
 * @subpackage Structs
 */
class GetAdjustmentsV4Response extends AbstractStructBase
{
    /**
     * The getAdjustmentsV4Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtAdjustmentV4[]
     */
    public $getAdjustmentsV4Return;
    /**
     * Constructor method for getAdjustmentsV4Response
     * @uses GetAdjustmentsV4Response::setGetAdjustmentsV4Return()
     * @param \StructType\ExtAdjustmentV4[] $getAdjustmentsV4Return
     */
    public function __construct(array $getAdjustmentsV4Return = array())
    {
        $this
            ->setGetAdjustmentsV4Return($getAdjustmentsV4Return);
    }
    /**
     * Get getAdjustmentsV4Return value
     * @return \StructType\ExtAdjustmentV4[]|null
     */
    public function getGetAdjustmentsV4Return()
    {
        return $this->getAdjustmentsV4Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustmentsV4Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustmentsV4Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustmentsV4ReturnForArrayConstraintsFromSetGetAdjustmentsV4Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustmentsV4ResponseGetAdjustmentsV4ReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustmentsV4ResponseGetAdjustmentsV4ReturnItem instanceof \StructType\ExtAdjustmentV4) {
                $invalidValues[] = is_object($getAdjustmentsV4ResponseGetAdjustmentsV4ReturnItem) ? get_class($getAdjustmentsV4ResponseGetAdjustmentsV4ReturnItem) : sprintf('%s(%s)', gettype($getAdjustmentsV4ResponseGetAdjustmentsV4ReturnItem), var_export($getAdjustmentsV4ResponseGetAdjustmentsV4ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustmentsV4Return property can only contain items of type \StructType\ExtAdjustmentV4, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustmentsV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustmentV4[] $getAdjustmentsV4Return
     * @return \StructType\GetAdjustmentsV4Response
     */
    public function setGetAdjustmentsV4Return(array $getAdjustmentsV4Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustmentsV4ReturnArrayErrorMessage = self::validateGetAdjustmentsV4ReturnForArrayConstraintsFromSetGetAdjustmentsV4Return($getAdjustmentsV4Return))) {
            throw new \InvalidArgumentException($getAdjustmentsV4ReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustmentsV4Return = $getAdjustmentsV4Return;
        return $this;
    }
    /**
     * Add item to getAdjustmentsV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustmentV4 $item
     * @return \StructType\GetAdjustmentsV4Response
     */
    public function addToGetAdjustmentsV4Return(\StructType\ExtAdjustmentV4 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtAdjustmentV4) {
            throw new \InvalidArgumentException(sprintf('The getAdjustmentsV4Return property can only contain items of type \StructType\ExtAdjustmentV4, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustmentsV4Return[] = $item;
        return $this;
    }
}
