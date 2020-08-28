<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsV6Response StructType
 * @subpackage Structs
 */
class GetAdjustmentsV6Response extends AbstractStructBase
{
    /**
     * The getAdjustmentsV6Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtAdjustmentV6[]
     */
    public $getAdjustmentsV6Return;
    /**
     * Constructor method for getAdjustmentsV6Response
     * @uses GetAdjustmentsV6Response::setGetAdjustmentsV6Return()
     * @param \StructType\ExtAdjustmentV6[] $getAdjustmentsV6Return
     */
    public function __construct(array $getAdjustmentsV6Return = array())
    {
        $this
            ->setGetAdjustmentsV6Return($getAdjustmentsV6Return);
    }
    /**
     * Get getAdjustmentsV6Return value
     * @return \StructType\ExtAdjustmentV6[]|null
     */
    public function getGetAdjustmentsV6Return()
    {
        return $this->getAdjustmentsV6Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustmentsV6Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustmentsV6Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustmentsV6ReturnForArrayConstraintsFromSetGetAdjustmentsV6Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustmentsV6ResponseGetAdjustmentsV6ReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustmentsV6ResponseGetAdjustmentsV6ReturnItem instanceof \StructType\ExtAdjustmentV6) {
                $invalidValues[] = is_object($getAdjustmentsV6ResponseGetAdjustmentsV6ReturnItem) ? get_class($getAdjustmentsV6ResponseGetAdjustmentsV6ReturnItem) : sprintf('%s(%s)', gettype($getAdjustmentsV6ResponseGetAdjustmentsV6ReturnItem), var_export($getAdjustmentsV6ResponseGetAdjustmentsV6ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustmentsV6Return property can only contain items of type \StructType\ExtAdjustmentV6, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustmentsV6Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustmentV6[] $getAdjustmentsV6Return
     * @return \StructType\GetAdjustmentsV6Response
     */
    public function setGetAdjustmentsV6Return(array $getAdjustmentsV6Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustmentsV6ReturnArrayErrorMessage = self::validateGetAdjustmentsV6ReturnForArrayConstraintsFromSetGetAdjustmentsV6Return($getAdjustmentsV6Return))) {
            throw new \InvalidArgumentException($getAdjustmentsV6ReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustmentsV6Return = $getAdjustmentsV6Return;
        return $this;
    }
    /**
     * Add item to getAdjustmentsV6Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustmentV6 $item
     * @return \StructType\GetAdjustmentsV6Response
     */
    public function addToGetAdjustmentsV6Return(\StructType\ExtAdjustmentV6 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtAdjustmentV6) {
            throw new \InvalidArgumentException(sprintf('The getAdjustmentsV6Return property can only contain items of type \StructType\ExtAdjustmentV6, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustmentsV6Return[] = $item;
        return $this;
    }
}
