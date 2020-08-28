<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEobdLocationsResponse StructType
 * @subpackage Structs
 */
class GetEobdLocationsResponse extends AbstractStructBase
{
    /**
     * The getEobdLocationsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtEobdLocation[]
     */
    public $getEobdLocationsReturn;
    /**
     * Constructor method for getEobdLocationsResponse
     * @uses GetEobdLocationsResponse::setGetEobdLocationsReturn()
     * @param \StructType\ExtEobdLocation[] $getEobdLocationsReturn
     */
    public function __construct(array $getEobdLocationsReturn = array())
    {
        $this
            ->setGetEobdLocationsReturn($getEobdLocationsReturn);
    }
    /**
     * Get getEobdLocationsReturn value
     * @return \StructType\ExtEobdLocation[]|null
     */
    public function getGetEobdLocationsReturn()
    {
        return $this->getEobdLocationsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetEobdLocationsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetEobdLocationsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetEobdLocationsReturnForArrayConstraintsFromSetGetEobdLocationsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEobdLocationsResponseGetEobdLocationsReturnItem) {
            // validation for constraint: itemType
            if (!$getEobdLocationsResponseGetEobdLocationsReturnItem instanceof \StructType\ExtEobdLocation) {
                $invalidValues[] = is_object($getEobdLocationsResponseGetEobdLocationsReturnItem) ? get_class($getEobdLocationsResponseGetEobdLocationsReturnItem) : sprintf('%s(%s)', gettype($getEobdLocationsResponseGetEobdLocationsReturnItem), var_export($getEobdLocationsResponseGetEobdLocationsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getEobdLocationsReturn property can only contain items of type \StructType\ExtEobdLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getEobdLocationsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtEobdLocation[] $getEobdLocationsReturn
     * @return \StructType\GetEobdLocationsResponse
     */
    public function setGetEobdLocationsReturn(array $getEobdLocationsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getEobdLocationsReturnArrayErrorMessage = self::validateGetEobdLocationsReturnForArrayConstraintsFromSetGetEobdLocationsReturn($getEobdLocationsReturn))) {
            throw new \InvalidArgumentException($getEobdLocationsReturnArrayErrorMessage, __LINE__);
        }
        $this->getEobdLocationsReturn = $getEobdLocationsReturn;
        return $this;
    }
    /**
     * Add item to getEobdLocationsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtEobdLocation $item
     * @return \StructType\GetEobdLocationsResponse
     */
    public function addToGetEobdLocationsReturn(\StructType\ExtEobdLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtEobdLocation) {
            throw new \InvalidArgumentException(sprintf('The getEobdLocationsReturn property can only contain items of type \StructType\ExtEobdLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getEobdLocationsReturn[] = $item;
        return $this;
    }
}
