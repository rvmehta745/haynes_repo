<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWearPartsIntervalsResponse StructType
 * @subpackage Structs
 */
class GetWearPartsIntervalsResponse extends AbstractStructBase
{
    /**
     * The getWearPartsIntervalsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtWearPartsInterval[]
     */
    public $getWearPartsIntervalsReturn;
    /**
     * Constructor method for getWearPartsIntervalsResponse
     * @uses GetWearPartsIntervalsResponse::setGetWearPartsIntervalsReturn()
     * @param \StructType\ExtWearPartsInterval[] $getWearPartsIntervalsReturn
     */
    public function __construct(array $getWearPartsIntervalsReturn = array())
    {
        $this
            ->setGetWearPartsIntervalsReturn($getWearPartsIntervalsReturn);
    }
    /**
     * Get getWearPartsIntervalsReturn value
     * @return \StructType\ExtWearPartsInterval[]|null
     */
    public function getGetWearPartsIntervalsReturn()
    {
        return $this->getWearPartsIntervalsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetWearPartsIntervalsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetWearPartsIntervalsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetWearPartsIntervalsReturnForArrayConstraintsFromSetGetWearPartsIntervalsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWearPartsIntervalsResponseGetWearPartsIntervalsReturnItem) {
            // validation for constraint: itemType
            if (!$getWearPartsIntervalsResponseGetWearPartsIntervalsReturnItem instanceof \StructType\ExtWearPartsInterval) {
                $invalidValues[] = is_object($getWearPartsIntervalsResponseGetWearPartsIntervalsReturnItem) ? get_class($getWearPartsIntervalsResponseGetWearPartsIntervalsReturnItem) : sprintf('%s(%s)', gettype($getWearPartsIntervalsResponseGetWearPartsIntervalsReturnItem), var_export($getWearPartsIntervalsResponseGetWearPartsIntervalsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getWearPartsIntervalsReturn property can only contain items of type \StructType\ExtWearPartsInterval, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getWearPartsIntervalsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWearPartsInterval[] $getWearPartsIntervalsReturn
     * @return \StructType\GetWearPartsIntervalsResponse
     */
    public function setGetWearPartsIntervalsReturn(array $getWearPartsIntervalsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getWearPartsIntervalsReturnArrayErrorMessage = self::validateGetWearPartsIntervalsReturnForArrayConstraintsFromSetGetWearPartsIntervalsReturn($getWearPartsIntervalsReturn))) {
            throw new \InvalidArgumentException($getWearPartsIntervalsReturnArrayErrorMessage, __LINE__);
        }
        $this->getWearPartsIntervalsReturn = $getWearPartsIntervalsReturn;
        return $this;
    }
    /**
     * Add item to getWearPartsIntervalsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWearPartsInterval $item
     * @return \StructType\GetWearPartsIntervalsResponse
     */
    public function addToGetWearPartsIntervalsReturn(\StructType\ExtWearPartsInterval $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtWearPartsInterval) {
            throw new \InvalidArgumentException(sprintf('The getWearPartsIntervalsReturn property can only contain items of type \StructType\ExtWearPartsInterval, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getWearPartsIntervalsReturn[] = $item;
        return $this;
    }
}
