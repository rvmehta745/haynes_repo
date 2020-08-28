<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWearPartsIntervalsV3Response StructType
 * @subpackage Structs
 */
class GetWearPartsIntervalsV3Response extends AbstractStructBase
{
    /**
     * The getWearPartsIntervalsV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtWearPartsIntervalV3[]
     */
    public $getWearPartsIntervalsV3Return;
    /**
     * Constructor method for getWearPartsIntervalsV3Response
     * @uses GetWearPartsIntervalsV3Response::setGetWearPartsIntervalsV3Return()
     * @param \StructType\ExtWearPartsIntervalV3[] $getWearPartsIntervalsV3Return
     */
    public function __construct(array $getWearPartsIntervalsV3Return = array())
    {
        $this
            ->setGetWearPartsIntervalsV3Return($getWearPartsIntervalsV3Return);
    }
    /**
     * Get getWearPartsIntervalsV3Return value
     * @return \StructType\ExtWearPartsIntervalV3[]|null
     */
    public function getGetWearPartsIntervalsV3Return()
    {
        return $this->getWearPartsIntervalsV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetWearPartsIntervalsV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetWearPartsIntervalsV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetWearPartsIntervalsV3ReturnForArrayConstraintsFromSetGetWearPartsIntervalsV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWearPartsIntervalsV3ResponseGetWearPartsIntervalsV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getWearPartsIntervalsV3ResponseGetWearPartsIntervalsV3ReturnItem instanceof \StructType\ExtWearPartsIntervalV3) {
                $invalidValues[] = is_object($getWearPartsIntervalsV3ResponseGetWearPartsIntervalsV3ReturnItem) ? get_class($getWearPartsIntervalsV3ResponseGetWearPartsIntervalsV3ReturnItem) : sprintf('%s(%s)', gettype($getWearPartsIntervalsV3ResponseGetWearPartsIntervalsV3ReturnItem), var_export($getWearPartsIntervalsV3ResponseGetWearPartsIntervalsV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getWearPartsIntervalsV3Return property can only contain items of type \StructType\ExtWearPartsIntervalV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getWearPartsIntervalsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWearPartsIntervalV3[] $getWearPartsIntervalsV3Return
     * @return \StructType\GetWearPartsIntervalsV3Response
     */
    public function setGetWearPartsIntervalsV3Return(array $getWearPartsIntervalsV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getWearPartsIntervalsV3ReturnArrayErrorMessage = self::validateGetWearPartsIntervalsV3ReturnForArrayConstraintsFromSetGetWearPartsIntervalsV3Return($getWearPartsIntervalsV3Return))) {
            throw new \InvalidArgumentException($getWearPartsIntervalsV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getWearPartsIntervalsV3Return = $getWearPartsIntervalsV3Return;
        return $this;
    }
    /**
     * Add item to getWearPartsIntervalsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWearPartsIntervalV3 $item
     * @return \StructType\GetWearPartsIntervalsV3Response
     */
    public function addToGetWearPartsIntervalsV3Return(\StructType\ExtWearPartsIntervalV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtWearPartsIntervalV3) {
            throw new \InvalidArgumentException(sprintf('The getWearPartsIntervalsV3Return property can only contain items of type \StructType\ExtWearPartsIntervalV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getWearPartsIntervalsV3Return[] = $item;
        return $this;
    }
}
