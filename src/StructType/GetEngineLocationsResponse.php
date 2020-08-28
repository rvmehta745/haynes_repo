<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEngineLocationsResponse StructType
 * @subpackage Structs
 */
class GetEngineLocationsResponse extends AbstractStructBase
{
    /**
     * The getEngineLocationsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtLocationSystem[]
     */
    public $getEngineLocationsReturn;
    /**
     * Constructor method for getEngineLocationsResponse
     * @uses GetEngineLocationsResponse::setGetEngineLocationsReturn()
     * @param \StructType\ExtLocationSystem[] $getEngineLocationsReturn
     */
    public function __construct(array $getEngineLocationsReturn = array())
    {
        $this
            ->setGetEngineLocationsReturn($getEngineLocationsReturn);
    }
    /**
     * Get getEngineLocationsReturn value
     * @return \StructType\ExtLocationSystem[]|null
     */
    public function getGetEngineLocationsReturn()
    {
        return $this->getEngineLocationsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetEngineLocationsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetEngineLocationsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetEngineLocationsReturnForArrayConstraintsFromSetGetEngineLocationsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEngineLocationsResponseGetEngineLocationsReturnItem) {
            // validation for constraint: itemType
            if (!$getEngineLocationsResponseGetEngineLocationsReturnItem instanceof \StructType\ExtLocationSystem) {
                $invalidValues[] = is_object($getEngineLocationsResponseGetEngineLocationsReturnItem) ? get_class($getEngineLocationsResponseGetEngineLocationsReturnItem) : sprintf('%s(%s)', gettype($getEngineLocationsResponseGetEngineLocationsReturnItem), var_export($getEngineLocationsResponseGetEngineLocationsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getEngineLocationsReturn property can only contain items of type \StructType\ExtLocationSystem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getEngineLocationsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLocationSystem[] $getEngineLocationsReturn
     * @return \StructType\GetEngineLocationsResponse
     */
    public function setGetEngineLocationsReturn(array $getEngineLocationsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getEngineLocationsReturnArrayErrorMessage = self::validateGetEngineLocationsReturnForArrayConstraintsFromSetGetEngineLocationsReturn($getEngineLocationsReturn))) {
            throw new \InvalidArgumentException($getEngineLocationsReturnArrayErrorMessage, __LINE__);
        }
        $this->getEngineLocationsReturn = $getEngineLocationsReturn;
        return $this;
    }
    /**
     * Add item to getEngineLocationsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLocationSystem $item
     * @return \StructType\GetEngineLocationsResponse
     */
    public function addToGetEngineLocationsReturn(\StructType\ExtLocationSystem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtLocationSystem) {
            throw new \InvalidArgumentException(sprintf('The getEngineLocationsReturn property can only contain items of type \StructType\ExtLocationSystem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getEngineLocationsReturn[] = $item;
        return $this;
    }
}
