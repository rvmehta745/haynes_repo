<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSmartPackFaultCodesResponse StructType
 * @subpackage Structs
 */
class GetSmartPackFaultCodesResponse extends AbstractStructBase
{
    /**
     * The getSmartPackFaultCodesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategoryV4[]
     */
    public $getSmartPackFaultCodesReturn;
    /**
     * Constructor method for getSmartPackFaultCodesResponse
     * @uses GetSmartPackFaultCodesResponse::setGetSmartPackFaultCodesReturn()
     * @param \StructType\ExtTSBCategoryV4[] $getSmartPackFaultCodesReturn
     */
    public function __construct(array $getSmartPackFaultCodesReturn = array())
    {
        $this
            ->setGetSmartPackFaultCodesReturn($getSmartPackFaultCodesReturn);
    }
    /**
     * Get getSmartPackFaultCodesReturn value
     * @return \StructType\ExtTSBCategoryV4[]|null
     */
    public function getGetSmartPackFaultCodesReturn()
    {
        return $this->getSmartPackFaultCodesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetSmartPackFaultCodesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetSmartPackFaultCodesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetSmartPackFaultCodesReturnForArrayConstraintsFromSetGetSmartPackFaultCodesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSmartPackFaultCodesResponseGetSmartPackFaultCodesReturnItem) {
            // validation for constraint: itemType
            if (!$getSmartPackFaultCodesResponseGetSmartPackFaultCodesReturnItem instanceof \StructType\ExtTSBCategoryV4) {
                $invalidValues[] = is_object($getSmartPackFaultCodesResponseGetSmartPackFaultCodesReturnItem) ? get_class($getSmartPackFaultCodesResponseGetSmartPackFaultCodesReturnItem) : sprintf('%s(%s)', gettype($getSmartPackFaultCodesResponseGetSmartPackFaultCodesReturnItem), var_export($getSmartPackFaultCodesResponseGetSmartPackFaultCodesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getSmartPackFaultCodesReturn property can only contain items of type \StructType\ExtTSBCategoryV4, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getSmartPackFaultCodesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV4[] $getSmartPackFaultCodesReturn
     * @return \StructType\GetSmartPackFaultCodesResponse
     */
    public function setGetSmartPackFaultCodesReturn(array $getSmartPackFaultCodesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getSmartPackFaultCodesReturnArrayErrorMessage = self::validateGetSmartPackFaultCodesReturnForArrayConstraintsFromSetGetSmartPackFaultCodesReturn($getSmartPackFaultCodesReturn))) {
            throw new \InvalidArgumentException($getSmartPackFaultCodesReturnArrayErrorMessage, __LINE__);
        }
        $this->getSmartPackFaultCodesReturn = $getSmartPackFaultCodesReturn;
        return $this;
    }
    /**
     * Add item to getSmartPackFaultCodesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV4 $item
     * @return \StructType\GetSmartPackFaultCodesResponse
     */
    public function addToGetSmartPackFaultCodesReturn(\StructType\ExtTSBCategoryV4 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategoryV4) {
            throw new \InvalidArgumentException(sprintf('The getSmartPackFaultCodesReturn property can only contain items of type \StructType\ExtTSBCategoryV4, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getSmartPackFaultCodesReturn[] = $item;
        return $this;
    }
}
