<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsByGroupV2Response StructType
 * @subpackage Structs
 */
class GetAdjustmentsByGroupV2Response extends AbstractStructBase
{
    /**
     * The getAdjustmentsByGroupV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtAdjustment[]
     */
    public $getAdjustmentsByGroupV2Return;
    /**
     * Constructor method for getAdjustmentsByGroupV2Response
     * @uses GetAdjustmentsByGroupV2Response::setGetAdjustmentsByGroupV2Return()
     * @param \StructType\ExtAdjustment[] $getAdjustmentsByGroupV2Return
     */
    public function __construct(array $getAdjustmentsByGroupV2Return = array())
    {
        $this
            ->setGetAdjustmentsByGroupV2Return($getAdjustmentsByGroupV2Return);
    }
    /**
     * Get getAdjustmentsByGroupV2Return value
     * @return \StructType\ExtAdjustment[]|null
     */
    public function getGetAdjustmentsByGroupV2Return()
    {
        return $this->getAdjustmentsByGroupV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustmentsByGroupV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustmentsByGroupV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustmentsByGroupV2ReturnForArrayConstraintsFromSetGetAdjustmentsByGroupV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustmentsByGroupV2ResponseGetAdjustmentsByGroupV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustmentsByGroupV2ResponseGetAdjustmentsByGroupV2ReturnItem instanceof \StructType\ExtAdjustment) {
                $invalidValues[] = is_object($getAdjustmentsByGroupV2ResponseGetAdjustmentsByGroupV2ReturnItem) ? get_class($getAdjustmentsByGroupV2ResponseGetAdjustmentsByGroupV2ReturnItem) : sprintf('%s(%s)', gettype($getAdjustmentsByGroupV2ResponseGetAdjustmentsByGroupV2ReturnItem), var_export($getAdjustmentsByGroupV2ResponseGetAdjustmentsByGroupV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustmentsByGroupV2Return property can only contain items of type \StructType\ExtAdjustment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustmentsByGroupV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustment[] $getAdjustmentsByGroupV2Return
     * @return \StructType\GetAdjustmentsByGroupV2Response
     */
    public function setGetAdjustmentsByGroupV2Return(array $getAdjustmentsByGroupV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustmentsByGroupV2ReturnArrayErrorMessage = self::validateGetAdjustmentsByGroupV2ReturnForArrayConstraintsFromSetGetAdjustmentsByGroupV2Return($getAdjustmentsByGroupV2Return))) {
            throw new \InvalidArgumentException($getAdjustmentsByGroupV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustmentsByGroupV2Return = $getAdjustmentsByGroupV2Return;
        return $this;
    }
    /**
     * Add item to getAdjustmentsByGroupV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustment $item
     * @return \StructType\GetAdjustmentsByGroupV2Response
     */
    public function addToGetAdjustmentsByGroupV2Return(\StructType\ExtAdjustment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtAdjustment) {
            throw new \InvalidArgumentException(sprintf('The getAdjustmentsByGroupV2Return property can only contain items of type \StructType\ExtAdjustment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustmentsByGroupV2Return[] = $item;
        return $this;
    }
}
