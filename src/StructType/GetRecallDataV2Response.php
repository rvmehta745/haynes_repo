<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRecallDataV2Response StructType
 * @subpackage Structs
 */
class GetRecallDataV2Response extends AbstractStructBase
{
    /**
     * The getRecallDataV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBGroupV3[]
     */
    public $getRecallDataV2Return;
    /**
     * Constructor method for getRecallDataV2Response
     * @uses GetRecallDataV2Response::setGetRecallDataV2Return()
     * @param \StructType\ExtTSBGroupV3[] $getRecallDataV2Return
     */
    public function __construct(array $getRecallDataV2Return = array())
    {
        $this
            ->setGetRecallDataV2Return($getRecallDataV2Return);
    }
    /**
     * Get getRecallDataV2Return value
     * @return \StructType\ExtTSBGroupV3[]|null
     */
    public function getGetRecallDataV2Return()
    {
        return $this->getRecallDataV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRecallDataV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRecallDataV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRecallDataV2ReturnForArrayConstraintsFromSetGetRecallDataV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRecallDataV2ResponseGetRecallDataV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getRecallDataV2ResponseGetRecallDataV2ReturnItem instanceof \StructType\ExtTSBGroupV3) {
                $invalidValues[] = is_object($getRecallDataV2ResponseGetRecallDataV2ReturnItem) ? get_class($getRecallDataV2ResponseGetRecallDataV2ReturnItem) : sprintf('%s(%s)', gettype($getRecallDataV2ResponseGetRecallDataV2ReturnItem), var_export($getRecallDataV2ResponseGetRecallDataV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRecallDataV2Return property can only contain items of type \StructType\ExtTSBGroupV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRecallDataV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBGroupV3[] $getRecallDataV2Return
     * @return \StructType\GetRecallDataV2Response
     */
    public function setGetRecallDataV2Return(array $getRecallDataV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getRecallDataV2ReturnArrayErrorMessage = self::validateGetRecallDataV2ReturnForArrayConstraintsFromSetGetRecallDataV2Return($getRecallDataV2Return))) {
            throw new \InvalidArgumentException($getRecallDataV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getRecallDataV2Return = $getRecallDataV2Return;
        return $this;
    }
    /**
     * Add item to getRecallDataV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBGroupV3 $item
     * @return \StructType\GetRecallDataV2Response
     */
    public function addToGetRecallDataV2Return(\StructType\ExtTSBGroupV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBGroupV3) {
            throw new \InvalidArgumentException(sprintf('The getRecallDataV2Return property can only contain items of type \StructType\ExtTSBGroupV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRecallDataV2Return[] = $item;
        return $this;
    }
}
