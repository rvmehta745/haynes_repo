<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsV5Response StructType
 * @subpackage Structs
 */
class GetAdjustmentsV5Response extends AbstractStructBase
{
    /**
     * The getAdjustmentsV5Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtAdjustmentV5[]
     */
    public $getAdjustmentsV5Return;
    /**
     * Constructor method for getAdjustmentsV5Response
     * @uses GetAdjustmentsV5Response::setGetAdjustmentsV5Return()
     * @param \StructType\ExtAdjustmentV5[] $getAdjustmentsV5Return
     */
    public function __construct(array $getAdjustmentsV5Return = array())
    {
        $this
            ->setGetAdjustmentsV5Return($getAdjustmentsV5Return);
    }
    /**
     * Get getAdjustmentsV5Return value
     * @return \StructType\ExtAdjustmentV5[]|null
     */
    public function getGetAdjustmentsV5Return()
    {
        return $this->getAdjustmentsV5Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustmentsV5Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustmentsV5Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustmentsV5ReturnForArrayConstraintsFromSetGetAdjustmentsV5Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustmentsV5ResponseGetAdjustmentsV5ReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustmentsV5ResponseGetAdjustmentsV5ReturnItem instanceof \StructType\ExtAdjustmentV5) {
                $invalidValues[] = is_object($getAdjustmentsV5ResponseGetAdjustmentsV5ReturnItem) ? get_class($getAdjustmentsV5ResponseGetAdjustmentsV5ReturnItem) : sprintf('%s(%s)', gettype($getAdjustmentsV5ResponseGetAdjustmentsV5ReturnItem), var_export($getAdjustmentsV5ResponseGetAdjustmentsV5ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustmentsV5Return property can only contain items of type \StructType\ExtAdjustmentV5, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustmentsV5Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustmentV5[] $getAdjustmentsV5Return
     * @return \StructType\GetAdjustmentsV5Response
     */
    public function setGetAdjustmentsV5Return(array $getAdjustmentsV5Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustmentsV5ReturnArrayErrorMessage = self::validateGetAdjustmentsV5ReturnForArrayConstraintsFromSetGetAdjustmentsV5Return($getAdjustmentsV5Return))) {
            throw new \InvalidArgumentException($getAdjustmentsV5ReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustmentsV5Return = $getAdjustmentsV5Return;
        return $this;
    }
    /**
     * Add item to getAdjustmentsV5Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustmentV5 $item
     * @return \StructType\GetAdjustmentsV5Response
     */
    public function addToGetAdjustmentsV5Return(\StructType\ExtAdjustmentV5 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtAdjustmentV5) {
            throw new \InvalidArgumentException(sprintf('The getAdjustmentsV5Return property can only contain items of type \StructType\ExtAdjustmentV5, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustmentsV5Return[] = $item;
        return $this;
    }
}
