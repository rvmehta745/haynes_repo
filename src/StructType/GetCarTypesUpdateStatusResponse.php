<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCarTypesUpdateStatusResponse StructType
 * @subpackage Structs
 */
class GetCarTypesUpdateStatusResponse extends AbstractStructBase
{
    /**
     * The getCarTypesUpdateStatusReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtCarTypeUpdateStatus[]
     */
    public $getCarTypesUpdateStatusReturn;
    /**
     * Constructor method for getCarTypesUpdateStatusResponse
     * @uses GetCarTypesUpdateStatusResponse::setGetCarTypesUpdateStatusReturn()
     * @param \StructType\ExtCarTypeUpdateStatus[] $getCarTypesUpdateStatusReturn
     */
    public function __construct(array $getCarTypesUpdateStatusReturn = array())
    {
        $this
            ->setGetCarTypesUpdateStatusReturn($getCarTypesUpdateStatusReturn);
    }
    /**
     * Get getCarTypesUpdateStatusReturn value
     * @return \StructType\ExtCarTypeUpdateStatus[]|null
     */
    public function getGetCarTypesUpdateStatusReturn()
    {
        return $this->getCarTypesUpdateStatusReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetCarTypesUpdateStatusReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetCarTypesUpdateStatusReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetCarTypesUpdateStatusReturnForArrayConstraintsFromSetGetCarTypesUpdateStatusReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCarTypesUpdateStatusResponseGetCarTypesUpdateStatusReturnItem) {
            // validation for constraint: itemType
            if (!$getCarTypesUpdateStatusResponseGetCarTypesUpdateStatusReturnItem instanceof \StructType\ExtCarTypeUpdateStatus) {
                $invalidValues[] = is_object($getCarTypesUpdateStatusResponseGetCarTypesUpdateStatusReturnItem) ? get_class($getCarTypesUpdateStatusResponseGetCarTypesUpdateStatusReturnItem) : sprintf('%s(%s)', gettype($getCarTypesUpdateStatusResponseGetCarTypesUpdateStatusReturnItem), var_export($getCarTypesUpdateStatusResponseGetCarTypesUpdateStatusReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getCarTypesUpdateStatusReturn property can only contain items of type \StructType\ExtCarTypeUpdateStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getCarTypesUpdateStatusReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarTypeUpdateStatus[] $getCarTypesUpdateStatusReturn
     * @return \StructType\GetCarTypesUpdateStatusResponse
     */
    public function setGetCarTypesUpdateStatusReturn(array $getCarTypesUpdateStatusReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getCarTypesUpdateStatusReturnArrayErrorMessage = self::validateGetCarTypesUpdateStatusReturnForArrayConstraintsFromSetGetCarTypesUpdateStatusReturn($getCarTypesUpdateStatusReturn))) {
            throw new \InvalidArgumentException($getCarTypesUpdateStatusReturnArrayErrorMessage, __LINE__);
        }
        $this->getCarTypesUpdateStatusReturn = $getCarTypesUpdateStatusReturn;
        return $this;
    }
    /**
     * Add item to getCarTypesUpdateStatusReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarTypeUpdateStatus $item
     * @return \StructType\GetCarTypesUpdateStatusResponse
     */
    public function addToGetCarTypesUpdateStatusReturn(\StructType\ExtCarTypeUpdateStatus $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtCarTypeUpdateStatus) {
            throw new \InvalidArgumentException(sprintf('The getCarTypesUpdateStatusReturn property can only contain items of type \StructType\ExtCarTypeUpdateStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getCarTypesUpdateStatusReturn[] = $item;
        return $this;
    }
}
