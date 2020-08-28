<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCarTypesByKBAResponse StructType
 * @subpackage Structs
 */
class GetCarTypesByKBAResponse extends AbstractStructBase
{
    /**
     * The getCarTypesByKBAReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtCarType[]
     */
    public $getCarTypesByKBAReturn;
    /**
     * Constructor method for getCarTypesByKBAResponse
     * @uses GetCarTypesByKBAResponse::setGetCarTypesByKBAReturn()
     * @param \StructType\ExtCarType[] $getCarTypesByKBAReturn
     */
    public function __construct(array $getCarTypesByKBAReturn = array())
    {
        $this
            ->setGetCarTypesByKBAReturn($getCarTypesByKBAReturn);
    }
    /**
     * Get getCarTypesByKBAReturn value
     * @return \StructType\ExtCarType[]|null
     */
    public function getGetCarTypesByKBAReturn()
    {
        return $this->getCarTypesByKBAReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetCarTypesByKBAReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetCarTypesByKBAReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetCarTypesByKBAReturnForArrayConstraintsFromSetGetCarTypesByKBAReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCarTypesByKBAResponseGetCarTypesByKBAReturnItem) {
            // validation for constraint: itemType
            if (!$getCarTypesByKBAResponseGetCarTypesByKBAReturnItem instanceof \StructType\ExtCarType) {
                $invalidValues[] = is_object($getCarTypesByKBAResponseGetCarTypesByKBAReturnItem) ? get_class($getCarTypesByKBAResponseGetCarTypesByKBAReturnItem) : sprintf('%s(%s)', gettype($getCarTypesByKBAResponseGetCarTypesByKBAReturnItem), var_export($getCarTypesByKBAResponseGetCarTypesByKBAReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getCarTypesByKBAReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getCarTypesByKBAReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType[] $getCarTypesByKBAReturn
     * @return \StructType\GetCarTypesByKBAResponse
     */
    public function setGetCarTypesByKBAReturn(array $getCarTypesByKBAReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getCarTypesByKBAReturnArrayErrorMessage = self::validateGetCarTypesByKBAReturnForArrayConstraintsFromSetGetCarTypesByKBAReturn($getCarTypesByKBAReturn))) {
            throw new \InvalidArgumentException($getCarTypesByKBAReturnArrayErrorMessage, __LINE__);
        }
        $this->getCarTypesByKBAReturn = $getCarTypesByKBAReturn;
        return $this;
    }
    /**
     * Add item to getCarTypesByKBAReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType $item
     * @return \StructType\GetCarTypesByKBAResponse
     */
    public function addToGetCarTypesByKBAReturn(\StructType\ExtCarType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtCarType) {
            throw new \InvalidArgumentException(sprintf('The getCarTypesByKBAReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getCarTypesByKBAReturn[] = $item;
        return $this;
    }
}
