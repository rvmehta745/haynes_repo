<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsV3Response StructType
 * @subpackage Structs
 */
class GetAdjustmentsV3Response extends AbstractStructBase
{
    /**
     * The getAdjustmentsV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtAdjustmentV3[]
     */
    public $getAdjustmentsV3Return;
    /**
     * Constructor method for getAdjustmentsV3Response
     * @uses GetAdjustmentsV3Response::setGetAdjustmentsV3Return()
     * @param \StructType\ExtAdjustmentV3[] $getAdjustmentsV3Return
     */
    public function __construct(array $getAdjustmentsV3Return = array())
    {
        $this
            ->setGetAdjustmentsV3Return($getAdjustmentsV3Return);
    }
    /**
     * Get getAdjustmentsV3Return value
     * @return \StructType\ExtAdjustmentV3[]|null
     */
    public function getGetAdjustmentsV3Return()
    {
        return $this->getAdjustmentsV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustmentsV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustmentsV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustmentsV3ReturnForArrayConstraintsFromSetGetAdjustmentsV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustmentsV3ResponseGetAdjustmentsV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustmentsV3ResponseGetAdjustmentsV3ReturnItem instanceof \StructType\ExtAdjustmentV3) {
                $invalidValues[] = is_object($getAdjustmentsV3ResponseGetAdjustmentsV3ReturnItem) ? get_class($getAdjustmentsV3ResponseGetAdjustmentsV3ReturnItem) : sprintf('%s(%s)', gettype($getAdjustmentsV3ResponseGetAdjustmentsV3ReturnItem), var_export($getAdjustmentsV3ResponseGetAdjustmentsV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustmentsV3Return property can only contain items of type \StructType\ExtAdjustmentV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustmentsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustmentV3[] $getAdjustmentsV3Return
     * @return \StructType\GetAdjustmentsV3Response
     */
    public function setGetAdjustmentsV3Return(array $getAdjustmentsV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustmentsV3ReturnArrayErrorMessage = self::validateGetAdjustmentsV3ReturnForArrayConstraintsFromSetGetAdjustmentsV3Return($getAdjustmentsV3Return))) {
            throw new \InvalidArgumentException($getAdjustmentsV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustmentsV3Return = $getAdjustmentsV3Return;
        return $this;
    }
    /**
     * Add item to getAdjustmentsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustmentV3 $item
     * @return \StructType\GetAdjustmentsV3Response
     */
    public function addToGetAdjustmentsV3Return(\StructType\ExtAdjustmentV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtAdjustmentV3) {
            throw new \InvalidArgumentException(sprintf('The getAdjustmentsV3Return property can only contain items of type \StructType\ExtAdjustmentV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustmentsV3Return[] = $item;
        return $this;
    }
}
