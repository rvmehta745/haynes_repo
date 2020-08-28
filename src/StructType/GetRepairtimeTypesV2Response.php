<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeTypesV2Response StructType
 * @subpackage Structs
 */
class GetRepairtimeTypesV2Response extends AbstractStructBase
{
    /**
     * The getRepairtimeTypesV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeTypeV2[]
     */
    public $getRepairtimeTypesV2Return;
    /**
     * Constructor method for getRepairtimeTypesV2Response
     * @uses GetRepairtimeTypesV2Response::setGetRepairtimeTypesV2Return()
     * @param \StructType\ExtRepairtimeTypeV2[] $getRepairtimeTypesV2Return
     */
    public function __construct(array $getRepairtimeTypesV2Return = array())
    {
        $this
            ->setGetRepairtimeTypesV2Return($getRepairtimeTypesV2Return);
    }
    /**
     * Get getRepairtimeTypesV2Return value
     * @return \StructType\ExtRepairtimeTypeV2[]|null
     */
    public function getGetRepairtimeTypesV2Return()
    {
        return $this->getRepairtimeTypesV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeTypesV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeTypesV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeTypesV2ReturnForArrayConstraintsFromSetGetRepairtimeTypesV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeTypesV2ResponseGetRepairtimeTypesV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeTypesV2ResponseGetRepairtimeTypesV2ReturnItem instanceof \StructType\ExtRepairtimeTypeV2) {
                $invalidValues[] = is_object($getRepairtimeTypesV2ResponseGetRepairtimeTypesV2ReturnItem) ? get_class($getRepairtimeTypesV2ResponseGetRepairtimeTypesV2ReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeTypesV2ResponseGetRepairtimeTypesV2ReturnItem), var_export($getRepairtimeTypesV2ResponseGetRepairtimeTypesV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeTypesV2Return property can only contain items of type \StructType\ExtRepairtimeTypeV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeTypesV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeTypeV2[] $getRepairtimeTypesV2Return
     * @return \StructType\GetRepairtimeTypesV2Response
     */
    public function setGetRepairtimeTypesV2Return(array $getRepairtimeTypesV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeTypesV2ReturnArrayErrorMessage = self::validateGetRepairtimeTypesV2ReturnForArrayConstraintsFromSetGetRepairtimeTypesV2Return($getRepairtimeTypesV2Return))) {
            throw new \InvalidArgumentException($getRepairtimeTypesV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeTypesV2Return = $getRepairtimeTypesV2Return;
        return $this;
    }
    /**
     * Add item to getRepairtimeTypesV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeTypeV2 $item
     * @return \StructType\GetRepairtimeTypesV2Response
     */
    public function addToGetRepairtimeTypesV2Return(\StructType\ExtRepairtimeTypeV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeTypeV2) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeTypesV2Return property can only contain items of type \StructType\ExtRepairtimeTypeV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeTypesV2Return[] = $item;
        return $this;
    }
}
