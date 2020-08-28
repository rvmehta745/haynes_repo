<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCarTypesByTecdocTruckNumberResponse StructType
 * @subpackage Structs
 */
class GetCarTypesByTecdocTruckNumberResponse extends AbstractStructBase
{
    /**
     * The getCarTypesByTecdocTruckNumberReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtCarType[]
     */
    public $getCarTypesByTecdocTruckNumberReturn;
    /**
     * Constructor method for getCarTypesByTecdocTruckNumberResponse
     * @uses GetCarTypesByTecdocTruckNumberResponse::setGetCarTypesByTecdocTruckNumberReturn()
     * @param \StructType\ExtCarType[] $getCarTypesByTecdocTruckNumberReturn
     */
    public function __construct(array $getCarTypesByTecdocTruckNumberReturn = array())
    {
        $this
            ->setGetCarTypesByTecdocTruckNumberReturn($getCarTypesByTecdocTruckNumberReturn);
    }
    /**
     * Get getCarTypesByTecdocTruckNumberReturn value
     * @return \StructType\ExtCarType[]|null
     */
    public function getGetCarTypesByTecdocTruckNumberReturn()
    {
        return $this->getCarTypesByTecdocTruckNumberReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetCarTypesByTecdocTruckNumberReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetCarTypesByTecdocTruckNumberReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetCarTypesByTecdocTruckNumberReturnForArrayConstraintsFromSetGetCarTypesByTecdocTruckNumberReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCarTypesByTecdocTruckNumberResponseGetCarTypesByTecdocTruckNumberReturnItem) {
            // validation for constraint: itemType
            if (!$getCarTypesByTecdocTruckNumberResponseGetCarTypesByTecdocTruckNumberReturnItem instanceof \StructType\ExtCarType) {
                $invalidValues[] = is_object($getCarTypesByTecdocTruckNumberResponseGetCarTypesByTecdocTruckNumberReturnItem) ? get_class($getCarTypesByTecdocTruckNumberResponseGetCarTypesByTecdocTruckNumberReturnItem) : sprintf('%s(%s)', gettype($getCarTypesByTecdocTruckNumberResponseGetCarTypesByTecdocTruckNumberReturnItem), var_export($getCarTypesByTecdocTruckNumberResponseGetCarTypesByTecdocTruckNumberReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getCarTypesByTecdocTruckNumberReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getCarTypesByTecdocTruckNumberReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType[] $getCarTypesByTecdocTruckNumberReturn
     * @return \StructType\GetCarTypesByTecdocTruckNumberResponse
     */
    public function setGetCarTypesByTecdocTruckNumberReturn(array $getCarTypesByTecdocTruckNumberReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getCarTypesByTecdocTruckNumberReturnArrayErrorMessage = self::validateGetCarTypesByTecdocTruckNumberReturnForArrayConstraintsFromSetGetCarTypesByTecdocTruckNumberReturn($getCarTypesByTecdocTruckNumberReturn))) {
            throw new \InvalidArgumentException($getCarTypesByTecdocTruckNumberReturnArrayErrorMessage, __LINE__);
        }
        $this->getCarTypesByTecdocTruckNumberReturn = $getCarTypesByTecdocTruckNumberReturn;
        return $this;
    }
    /**
     * Add item to getCarTypesByTecdocTruckNumberReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType $item
     * @return \StructType\GetCarTypesByTecdocTruckNumberResponse
     */
    public function addToGetCarTypesByTecdocTruckNumberReturn(\StructType\ExtCarType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtCarType) {
            throw new \InvalidArgumentException(sprintf('The getCarTypesByTecdocTruckNumberReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getCarTypesByTecdocTruckNumberReturn[] = $item;
        return $this;
    }
}
