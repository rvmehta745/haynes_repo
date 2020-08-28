<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWearPartsIntervalsV2Response StructType
 * @subpackage Structs
 */
class GetWearPartsIntervalsV2Response extends AbstractStructBase
{
    /**
     * The getWearPartsIntervalsV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtWearPartsIntervalV2[]
     */
    public $getWearPartsIntervalsV2Return;
    /**
     * Constructor method for getWearPartsIntervalsV2Response
     * @uses GetWearPartsIntervalsV2Response::setGetWearPartsIntervalsV2Return()
     * @param \StructType\ExtWearPartsIntervalV2[] $getWearPartsIntervalsV2Return
     */
    public function __construct(array $getWearPartsIntervalsV2Return = array())
    {
        $this
            ->setGetWearPartsIntervalsV2Return($getWearPartsIntervalsV2Return);
    }
    /**
     * Get getWearPartsIntervalsV2Return value
     * @return \StructType\ExtWearPartsIntervalV2[]|null
     */
    public function getGetWearPartsIntervalsV2Return()
    {
        return $this->getWearPartsIntervalsV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetWearPartsIntervalsV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetWearPartsIntervalsV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetWearPartsIntervalsV2ReturnForArrayConstraintsFromSetGetWearPartsIntervalsV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWearPartsIntervalsV2ResponseGetWearPartsIntervalsV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getWearPartsIntervalsV2ResponseGetWearPartsIntervalsV2ReturnItem instanceof \StructType\ExtWearPartsIntervalV2) {
                $invalidValues[] = is_object($getWearPartsIntervalsV2ResponseGetWearPartsIntervalsV2ReturnItem) ? get_class($getWearPartsIntervalsV2ResponseGetWearPartsIntervalsV2ReturnItem) : sprintf('%s(%s)', gettype($getWearPartsIntervalsV2ResponseGetWearPartsIntervalsV2ReturnItem), var_export($getWearPartsIntervalsV2ResponseGetWearPartsIntervalsV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getWearPartsIntervalsV2Return property can only contain items of type \StructType\ExtWearPartsIntervalV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getWearPartsIntervalsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWearPartsIntervalV2[] $getWearPartsIntervalsV2Return
     * @return \StructType\GetWearPartsIntervalsV2Response
     */
    public function setGetWearPartsIntervalsV2Return(array $getWearPartsIntervalsV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getWearPartsIntervalsV2ReturnArrayErrorMessage = self::validateGetWearPartsIntervalsV2ReturnForArrayConstraintsFromSetGetWearPartsIntervalsV2Return($getWearPartsIntervalsV2Return))) {
            throw new \InvalidArgumentException($getWearPartsIntervalsV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getWearPartsIntervalsV2Return = $getWearPartsIntervalsV2Return;
        return $this;
    }
    /**
     * Add item to getWearPartsIntervalsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWearPartsIntervalV2 $item
     * @return \StructType\GetWearPartsIntervalsV2Response
     */
    public function addToGetWearPartsIntervalsV2Return(\StructType\ExtWearPartsIntervalV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtWearPartsIntervalV2) {
            throw new \InvalidArgumentException(sprintf('The getWearPartsIntervalsV2Return property can only contain items of type \StructType\ExtWearPartsIntervalV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getWearPartsIntervalsV2Return[] = $item;
        return $this;
    }
}
