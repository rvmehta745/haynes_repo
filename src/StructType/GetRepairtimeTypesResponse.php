<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeTypesResponse StructType
 * @subpackage Structs
 */
class GetRepairtimeTypesResponse extends AbstractStructBase
{
    /**
     * The getRepairtimeTypesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeType[]
     */
    public $getRepairtimeTypesReturn;
    /**
     * Constructor method for getRepairtimeTypesResponse
     * @uses GetRepairtimeTypesResponse::setGetRepairtimeTypesReturn()
     * @param \StructType\ExtRepairtimeType[] $getRepairtimeTypesReturn
     */
    public function __construct(array $getRepairtimeTypesReturn = array())
    {
        $this
            ->setGetRepairtimeTypesReturn($getRepairtimeTypesReturn);
    }
    /**
     * Get getRepairtimeTypesReturn value
     * @return \StructType\ExtRepairtimeType[]|null
     */
    public function getGetRepairtimeTypesReturn()
    {
        return $this->getRepairtimeTypesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeTypesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeTypesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeTypesReturnForArrayConstraintsFromSetGetRepairtimeTypesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeTypesResponseGetRepairtimeTypesReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeTypesResponseGetRepairtimeTypesReturnItem instanceof \StructType\ExtRepairtimeType) {
                $invalidValues[] = is_object($getRepairtimeTypesResponseGetRepairtimeTypesReturnItem) ? get_class($getRepairtimeTypesResponseGetRepairtimeTypesReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeTypesResponseGetRepairtimeTypesReturnItem), var_export($getRepairtimeTypesResponseGetRepairtimeTypesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeTypesReturn property can only contain items of type \StructType\ExtRepairtimeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeTypesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeType[] $getRepairtimeTypesReturn
     * @return \StructType\GetRepairtimeTypesResponse
     */
    public function setGetRepairtimeTypesReturn(array $getRepairtimeTypesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeTypesReturnArrayErrorMessage = self::validateGetRepairtimeTypesReturnForArrayConstraintsFromSetGetRepairtimeTypesReturn($getRepairtimeTypesReturn))) {
            throw new \InvalidArgumentException($getRepairtimeTypesReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeTypesReturn = $getRepairtimeTypesReturn;
        return $this;
    }
    /**
     * Add item to getRepairtimeTypesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeType $item
     * @return \StructType\GetRepairtimeTypesResponse
     */
    public function addToGetRepairtimeTypesReturn(\StructType\ExtRepairtimeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeType) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeTypesReturn property can only contain items of type \StructType\ExtRepairtimeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeTypesReturn[] = $item;
        return $this;
    }
}
