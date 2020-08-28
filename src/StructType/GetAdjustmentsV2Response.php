<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsV2Response StructType
 * @subpackage Structs
 */
class GetAdjustmentsV2Response extends AbstractStructBase
{
    /**
     * The getAdjustmentsV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtAdjustment[]
     */
    public $getAdjustmentsV2Return;
    /**
     * Constructor method for getAdjustmentsV2Response
     * @uses GetAdjustmentsV2Response::setGetAdjustmentsV2Return()
     * @param \StructType\ExtAdjustment[] $getAdjustmentsV2Return
     */
    public function __construct(array $getAdjustmentsV2Return = array())
    {
        $this
            ->setGetAdjustmentsV2Return($getAdjustmentsV2Return);
    }
    /**
     * Get getAdjustmentsV2Return value
     * @return \StructType\ExtAdjustment[]|null
     */
    public function getGetAdjustmentsV2Return()
    {
        return $this->getAdjustmentsV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustmentsV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustmentsV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustmentsV2ReturnForArrayConstraintsFromSetGetAdjustmentsV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustmentsV2ResponseGetAdjustmentsV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustmentsV2ResponseGetAdjustmentsV2ReturnItem instanceof \StructType\ExtAdjustment) {
                $invalidValues[] = is_object($getAdjustmentsV2ResponseGetAdjustmentsV2ReturnItem) ? get_class($getAdjustmentsV2ResponseGetAdjustmentsV2ReturnItem) : sprintf('%s(%s)', gettype($getAdjustmentsV2ResponseGetAdjustmentsV2ReturnItem), var_export($getAdjustmentsV2ResponseGetAdjustmentsV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustmentsV2Return property can only contain items of type \StructType\ExtAdjustment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustmentsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustment[] $getAdjustmentsV2Return
     * @return \StructType\GetAdjustmentsV2Response
     */
    public function setGetAdjustmentsV2Return(array $getAdjustmentsV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustmentsV2ReturnArrayErrorMessage = self::validateGetAdjustmentsV2ReturnForArrayConstraintsFromSetGetAdjustmentsV2Return($getAdjustmentsV2Return))) {
            throw new \InvalidArgumentException($getAdjustmentsV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustmentsV2Return = $getAdjustmentsV2Return;
        return $this;
    }
    /**
     * Add item to getAdjustmentsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustment $item
     * @return \StructType\GetAdjustmentsV2Response
     */
    public function addToGetAdjustmentsV2Return(\StructType\ExtAdjustment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtAdjustment) {
            throw new \InvalidArgumentException(sprintf('The getAdjustmentsV2Return property can only contain items of type \StructType\ExtAdjustment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustmentsV2Return[] = $item;
        return $this;
    }
}
