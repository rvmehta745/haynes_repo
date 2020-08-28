<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEobdLocationsForModelResponse StructType
 * @subpackage Structs
 */
class GetEobdLocationsForModelResponse extends AbstractStructBase
{
    /**
     * The getEobdLocationsForModelReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtEobdLocation[]
     */
    public $getEobdLocationsForModelReturn;
    /**
     * Constructor method for getEobdLocationsForModelResponse
     * @uses GetEobdLocationsForModelResponse::setGetEobdLocationsForModelReturn()
     * @param \StructType\ExtEobdLocation[] $getEobdLocationsForModelReturn
     */
    public function __construct(array $getEobdLocationsForModelReturn = array())
    {
        $this
            ->setGetEobdLocationsForModelReturn($getEobdLocationsForModelReturn);
    }
    /**
     * Get getEobdLocationsForModelReturn value
     * @return \StructType\ExtEobdLocation[]|null
     */
    public function getGetEobdLocationsForModelReturn()
    {
        return $this->getEobdLocationsForModelReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetEobdLocationsForModelReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetEobdLocationsForModelReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetEobdLocationsForModelReturnForArrayConstraintsFromSetGetEobdLocationsForModelReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEobdLocationsForModelResponseGetEobdLocationsForModelReturnItem) {
            // validation for constraint: itemType
            if (!$getEobdLocationsForModelResponseGetEobdLocationsForModelReturnItem instanceof \StructType\ExtEobdLocation) {
                $invalidValues[] = is_object($getEobdLocationsForModelResponseGetEobdLocationsForModelReturnItem) ? get_class($getEobdLocationsForModelResponseGetEobdLocationsForModelReturnItem) : sprintf('%s(%s)', gettype($getEobdLocationsForModelResponseGetEobdLocationsForModelReturnItem), var_export($getEobdLocationsForModelResponseGetEobdLocationsForModelReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getEobdLocationsForModelReturn property can only contain items of type \StructType\ExtEobdLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getEobdLocationsForModelReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtEobdLocation[] $getEobdLocationsForModelReturn
     * @return \StructType\GetEobdLocationsForModelResponse
     */
    public function setGetEobdLocationsForModelReturn(array $getEobdLocationsForModelReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getEobdLocationsForModelReturnArrayErrorMessage = self::validateGetEobdLocationsForModelReturnForArrayConstraintsFromSetGetEobdLocationsForModelReturn($getEobdLocationsForModelReturn))) {
            throw new \InvalidArgumentException($getEobdLocationsForModelReturnArrayErrorMessage, __LINE__);
        }
        $this->getEobdLocationsForModelReturn = $getEobdLocationsForModelReturn;
        return $this;
    }
    /**
     * Add item to getEobdLocationsForModelReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtEobdLocation $item
     * @return \StructType\GetEobdLocationsForModelResponse
     */
    public function addToGetEobdLocationsForModelReturn(\StructType\ExtEobdLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtEobdLocation) {
            throw new \InvalidArgumentException(sprintf('The getEobdLocationsForModelReturn property can only contain items of type \StructType\ExtEobdLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getEobdLocationsForModelReturn[] = $item;
        return $this;
    }
}
