<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCarTypesByTecdocNumberResponse StructType
 * @subpackage Structs
 */
class GetCarTypesByTecdocNumberResponse extends AbstractStructBase
{
    /**
     * The getCarTypesByTecdocNumberReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtCarType[]
     */
    public $getCarTypesByTecdocNumberReturn;
    /**
     * Constructor method for getCarTypesByTecdocNumberResponse
     * @uses GetCarTypesByTecdocNumberResponse::setGetCarTypesByTecdocNumberReturn()
     * @param \StructType\ExtCarType[] $getCarTypesByTecdocNumberReturn
     */
    public function __construct(array $getCarTypesByTecdocNumberReturn = array())
    {
        $this
            ->setGetCarTypesByTecdocNumberReturn($getCarTypesByTecdocNumberReturn);
    }
    /**
     * Get getCarTypesByTecdocNumberReturn value
     * @return \StructType\ExtCarType[]|null
     */
    public function getGetCarTypesByTecdocNumberReturn()
    {
        return $this->getCarTypesByTecdocNumberReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetCarTypesByTecdocNumberReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetCarTypesByTecdocNumberReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetCarTypesByTecdocNumberReturnForArrayConstraintsFromSetGetCarTypesByTecdocNumberReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCarTypesByTecdocNumberResponseGetCarTypesByTecdocNumberReturnItem) {
            // validation for constraint: itemType
            if (!$getCarTypesByTecdocNumberResponseGetCarTypesByTecdocNumberReturnItem instanceof \StructType\ExtCarType) {
                $invalidValues[] = is_object($getCarTypesByTecdocNumberResponseGetCarTypesByTecdocNumberReturnItem) ? get_class($getCarTypesByTecdocNumberResponseGetCarTypesByTecdocNumberReturnItem) : sprintf('%s(%s)', gettype($getCarTypesByTecdocNumberResponseGetCarTypesByTecdocNumberReturnItem), var_export($getCarTypesByTecdocNumberResponseGetCarTypesByTecdocNumberReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getCarTypesByTecdocNumberReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getCarTypesByTecdocNumberReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType[] $getCarTypesByTecdocNumberReturn
     * @return \StructType\GetCarTypesByTecdocNumberResponse
     */
    public function setGetCarTypesByTecdocNumberReturn(array $getCarTypesByTecdocNumberReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getCarTypesByTecdocNumberReturnArrayErrorMessage = self::validateGetCarTypesByTecdocNumberReturnForArrayConstraintsFromSetGetCarTypesByTecdocNumberReturn($getCarTypesByTecdocNumberReturn))) {
            throw new \InvalidArgumentException($getCarTypesByTecdocNumberReturnArrayErrorMessage, __LINE__);
        }
        $this->getCarTypesByTecdocNumberReturn = $getCarTypesByTecdocNumberReturn;
        return $this;
    }
    /**
     * Add item to getCarTypesByTecdocNumberReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType $item
     * @return \StructType\GetCarTypesByTecdocNumberResponse
     */
    public function addToGetCarTypesByTecdocNumberReturn(\StructType\ExtCarType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtCarType) {
            throw new \InvalidArgumentException(sprintf('The getCarTypesByTecdocNumberReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getCarTypesByTecdocNumberReturn[] = $item;
        return $this;
    }
}
