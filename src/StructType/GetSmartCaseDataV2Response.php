<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSmartCaseDataV2Response StructType
 * @subpackage Structs
 */
class GetSmartCaseDataV2Response extends AbstractStructBase
{
    /**
     * The getSmartCaseDataV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBGroupV3[]
     */
    public $getSmartCaseDataV2Return;
    /**
     * Constructor method for getSmartCaseDataV2Response
     * @uses GetSmartCaseDataV2Response::setGetSmartCaseDataV2Return()
     * @param \StructType\ExtTSBGroupV3[] $getSmartCaseDataV2Return
     */
    public function __construct(array $getSmartCaseDataV2Return = array())
    {
        $this
            ->setGetSmartCaseDataV2Return($getSmartCaseDataV2Return);
    }
    /**
     * Get getSmartCaseDataV2Return value
     * @return \StructType\ExtTSBGroupV3[]|null
     */
    public function getGetSmartCaseDataV2Return()
    {
        return $this->getSmartCaseDataV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetSmartCaseDataV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetSmartCaseDataV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetSmartCaseDataV2ReturnForArrayConstraintsFromSetGetSmartCaseDataV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSmartCaseDataV2ResponseGetSmartCaseDataV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getSmartCaseDataV2ResponseGetSmartCaseDataV2ReturnItem instanceof \StructType\ExtTSBGroupV3) {
                $invalidValues[] = is_object($getSmartCaseDataV2ResponseGetSmartCaseDataV2ReturnItem) ? get_class($getSmartCaseDataV2ResponseGetSmartCaseDataV2ReturnItem) : sprintf('%s(%s)', gettype($getSmartCaseDataV2ResponseGetSmartCaseDataV2ReturnItem), var_export($getSmartCaseDataV2ResponseGetSmartCaseDataV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getSmartCaseDataV2Return property can only contain items of type \StructType\ExtTSBGroupV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getSmartCaseDataV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBGroupV3[] $getSmartCaseDataV2Return
     * @return \StructType\GetSmartCaseDataV2Response
     */
    public function setGetSmartCaseDataV2Return(array $getSmartCaseDataV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getSmartCaseDataV2ReturnArrayErrorMessage = self::validateGetSmartCaseDataV2ReturnForArrayConstraintsFromSetGetSmartCaseDataV2Return($getSmartCaseDataV2Return))) {
            throw new \InvalidArgumentException($getSmartCaseDataV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getSmartCaseDataV2Return = $getSmartCaseDataV2Return;
        return $this;
    }
    /**
     * Add item to getSmartCaseDataV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBGroupV3 $item
     * @return \StructType\GetSmartCaseDataV2Response
     */
    public function addToGetSmartCaseDataV2Return(\StructType\ExtTSBGroupV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBGroupV3) {
            throw new \InvalidArgumentException(sprintf('The getSmartCaseDataV2Return property can only contain items of type \StructType\ExtTSBGroupV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getSmartCaseDataV2Return[] = $item;
        return $this;
    }
}
