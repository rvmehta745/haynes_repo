<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSchemaLocationsResponse StructType
 * @subpackage Structs
 */
class GetSchemaLocationsResponse extends AbstractStructBase
{
    /**
     * The getSchemaLocationsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtSchemaLocation[]
     */
    public $getSchemaLocationsReturn;
    /**
     * Constructor method for getSchemaLocationsResponse
     * @uses GetSchemaLocationsResponse::setGetSchemaLocationsReturn()
     * @param \StructType\ExtSchemaLocation[] $getSchemaLocationsReturn
     */
    public function __construct(array $getSchemaLocationsReturn = array())
    {
        $this
            ->setGetSchemaLocationsReturn($getSchemaLocationsReturn);
    }
    /**
     * Get getSchemaLocationsReturn value
     * @return \StructType\ExtSchemaLocation[]|null
     */
    public function getGetSchemaLocationsReturn()
    {
        return $this->getSchemaLocationsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetSchemaLocationsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetSchemaLocationsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetSchemaLocationsReturnForArrayConstraintsFromSetGetSchemaLocationsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSchemaLocationsResponseGetSchemaLocationsReturnItem) {
            // validation for constraint: itemType
            if (!$getSchemaLocationsResponseGetSchemaLocationsReturnItem instanceof \StructType\ExtSchemaLocation) {
                $invalidValues[] = is_object($getSchemaLocationsResponseGetSchemaLocationsReturnItem) ? get_class($getSchemaLocationsResponseGetSchemaLocationsReturnItem) : sprintf('%s(%s)', gettype($getSchemaLocationsResponseGetSchemaLocationsReturnItem), var_export($getSchemaLocationsResponseGetSchemaLocationsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getSchemaLocationsReturn property can only contain items of type \StructType\ExtSchemaLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getSchemaLocationsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtSchemaLocation[] $getSchemaLocationsReturn
     * @return \StructType\GetSchemaLocationsResponse
     */
    public function setGetSchemaLocationsReturn(array $getSchemaLocationsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getSchemaLocationsReturnArrayErrorMessage = self::validateGetSchemaLocationsReturnForArrayConstraintsFromSetGetSchemaLocationsReturn($getSchemaLocationsReturn))) {
            throw new \InvalidArgumentException($getSchemaLocationsReturnArrayErrorMessage, __LINE__);
        }
        $this->getSchemaLocationsReturn = $getSchemaLocationsReturn;
        return $this;
    }
    /**
     * Add item to getSchemaLocationsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtSchemaLocation $item
     * @return \StructType\GetSchemaLocationsResponse
     */
    public function addToGetSchemaLocationsReturn(\StructType\ExtSchemaLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtSchemaLocation) {
            throw new \InvalidArgumentException(sprintf('The getSchemaLocationsReturn property can only contain items of type \StructType\ExtSchemaLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getSchemaLocationsReturn[] = $item;
        return $this;
    }
}
