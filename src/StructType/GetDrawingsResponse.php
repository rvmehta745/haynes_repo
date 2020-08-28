<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDrawingsResponse StructType
 * @subpackage Structs
 */
class GetDrawingsResponse extends AbstractStructBase
{
    /**
     * The getDrawingsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtDrawing[]
     */
    public $getDrawingsReturn;
    /**
     * Constructor method for getDrawingsResponse
     * @uses GetDrawingsResponse::setGetDrawingsReturn()
     * @param \StructType\ExtDrawing[] $getDrawingsReturn
     */
    public function __construct(array $getDrawingsReturn = array())
    {
        $this
            ->setGetDrawingsReturn($getDrawingsReturn);
    }
    /**
     * Get getDrawingsReturn value
     * @return \StructType\ExtDrawing[]|null
     */
    public function getGetDrawingsReturn()
    {
        return $this->getDrawingsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetDrawingsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetDrawingsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetDrawingsReturnForArrayConstraintsFromSetGetDrawingsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDrawingsResponseGetDrawingsReturnItem) {
            // validation for constraint: itemType
            if (!$getDrawingsResponseGetDrawingsReturnItem instanceof \StructType\ExtDrawing) {
                $invalidValues[] = is_object($getDrawingsResponseGetDrawingsReturnItem) ? get_class($getDrawingsResponseGetDrawingsReturnItem) : sprintf('%s(%s)', gettype($getDrawingsResponseGetDrawingsReturnItem), var_export($getDrawingsResponseGetDrawingsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getDrawingsReturn property can only contain items of type \StructType\ExtDrawing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getDrawingsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtDrawing[] $getDrawingsReturn
     * @return \StructType\GetDrawingsResponse
     */
    public function setGetDrawingsReturn(array $getDrawingsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getDrawingsReturnArrayErrorMessage = self::validateGetDrawingsReturnForArrayConstraintsFromSetGetDrawingsReturn($getDrawingsReturn))) {
            throw new \InvalidArgumentException($getDrawingsReturnArrayErrorMessage, __LINE__);
        }
        $this->getDrawingsReturn = $getDrawingsReturn;
        return $this;
    }
    /**
     * Add item to getDrawingsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtDrawing $item
     * @return \StructType\GetDrawingsResponse
     */
    public function addToGetDrawingsReturn(\StructType\ExtDrawing $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtDrawing) {
            throw new \InvalidArgumentException(sprintf('The getDrawingsReturn property can only contain items of type \StructType\ExtDrawing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getDrawingsReturn[] = $item;
        return $this;
    }
}
