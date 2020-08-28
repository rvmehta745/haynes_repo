<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for decodeVINResponse StructType
 * @subpackage Structs
 */
class DecodeVINResponse extends AbstractStructBase
{
    /**
     * The decodeVINReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtCarType[]
     */
    public $decodeVINReturn;
    /**
     * Constructor method for decodeVINResponse
     * @uses DecodeVINResponse::setDecodeVINReturn()
     * @param \StructType\ExtCarType[] $decodeVINReturn
     */
    public function __construct(array $decodeVINReturn = array())
    {
        $this
            ->setDecodeVINReturn($decodeVINReturn);
    }
    /**
     * Get decodeVINReturn value
     * @return \StructType\ExtCarType[]|null
     */
    public function getDecodeVINReturn()
    {
        return $this->decodeVINReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setDecodeVINReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDecodeVINReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDecodeVINReturnForArrayConstraintsFromSetDecodeVINReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $decodeVINResponseDecodeVINReturnItem) {
            // validation for constraint: itemType
            if (!$decodeVINResponseDecodeVINReturnItem instanceof \StructType\ExtCarType) {
                $invalidValues[] = is_object($decodeVINResponseDecodeVINReturnItem) ? get_class($decodeVINResponseDecodeVINReturnItem) : sprintf('%s(%s)', gettype($decodeVINResponseDecodeVINReturnItem), var_export($decodeVINResponseDecodeVINReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The decodeVINReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set decodeVINReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType[] $decodeVINReturn
     * @return \StructType\DecodeVINResponse
     */
    public function setDecodeVINReturn(array $decodeVINReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($decodeVINReturnArrayErrorMessage = self::validateDecodeVINReturnForArrayConstraintsFromSetDecodeVINReturn($decodeVINReturn))) {
            throw new \InvalidArgumentException($decodeVINReturnArrayErrorMessage, __LINE__);
        }
        $this->decodeVINReturn = $decodeVINReturn;
        return $this;
    }
    /**
     * Add item to decodeVINReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType $item
     * @return \StructType\DecodeVINResponse
     */
    public function addToDecodeVINReturn(\StructType\ExtCarType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtCarType) {
            throw new \InvalidArgumentException(sprintf('The decodeVINReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->decodeVINReturn[] = $item;
        return $this;
    }
}
