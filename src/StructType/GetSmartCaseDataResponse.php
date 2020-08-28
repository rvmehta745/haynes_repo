<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSmartCaseDataResponse StructType
 * @subpackage Structs
 */
class GetSmartCaseDataResponse extends AbstractStructBase
{
    /**
     * The getSmartCaseDataReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBGroup[]
     */
    public $getSmartCaseDataReturn;
    /**
     * Constructor method for getSmartCaseDataResponse
     * @uses GetSmartCaseDataResponse::setGetSmartCaseDataReturn()
     * @param \StructType\ExtTSBGroup[] $getSmartCaseDataReturn
     */
    public function __construct(array $getSmartCaseDataReturn = array())
    {
        $this
            ->setGetSmartCaseDataReturn($getSmartCaseDataReturn);
    }
    /**
     * Get getSmartCaseDataReturn value
     * @return \StructType\ExtTSBGroup[]|null
     */
    public function getGetSmartCaseDataReturn()
    {
        return $this->getSmartCaseDataReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetSmartCaseDataReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetSmartCaseDataReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetSmartCaseDataReturnForArrayConstraintsFromSetGetSmartCaseDataReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSmartCaseDataResponseGetSmartCaseDataReturnItem) {
            // validation for constraint: itemType
            if (!$getSmartCaseDataResponseGetSmartCaseDataReturnItem instanceof \StructType\ExtTSBGroup) {
                $invalidValues[] = is_object($getSmartCaseDataResponseGetSmartCaseDataReturnItem) ? get_class($getSmartCaseDataResponseGetSmartCaseDataReturnItem) : sprintf('%s(%s)', gettype($getSmartCaseDataResponseGetSmartCaseDataReturnItem), var_export($getSmartCaseDataResponseGetSmartCaseDataReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getSmartCaseDataReturn property can only contain items of type \StructType\ExtTSBGroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getSmartCaseDataReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBGroup[] $getSmartCaseDataReturn
     * @return \StructType\GetSmartCaseDataResponse
     */
    public function setGetSmartCaseDataReturn(array $getSmartCaseDataReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getSmartCaseDataReturnArrayErrorMessage = self::validateGetSmartCaseDataReturnForArrayConstraintsFromSetGetSmartCaseDataReturn($getSmartCaseDataReturn))) {
            throw new \InvalidArgumentException($getSmartCaseDataReturnArrayErrorMessage, __LINE__);
        }
        $this->getSmartCaseDataReturn = $getSmartCaseDataReturn;
        return $this;
    }
    /**
     * Add item to getSmartCaseDataReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBGroup $item
     * @return \StructType\GetSmartCaseDataResponse
     */
    public function addToGetSmartCaseDataReturn(\StructType\ExtTSBGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBGroup) {
            throw new \InvalidArgumentException(sprintf('The getSmartCaseDataReturn property can only contain items of type \StructType\ExtTSBGroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getSmartCaseDataReturn[] = $item;
        return $this;
    }
}
