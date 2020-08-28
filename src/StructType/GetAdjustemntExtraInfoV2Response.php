<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustemntExtraInfoV2Response StructType
 * @subpackage Structs
 */
class GetAdjustemntExtraInfoV2Response extends AbstractStructBase
{
    /**
     * The getAdjustemntExtraInfoV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStoryLineV2[]
     */
    public $getAdjustemntExtraInfoV2Return;
    /**
     * Constructor method for getAdjustemntExtraInfoV2Response
     * @uses GetAdjustemntExtraInfoV2Response::setGetAdjustemntExtraInfoV2Return()
     * @param \StructType\ExtStoryLineV2[] $getAdjustemntExtraInfoV2Return
     */
    public function __construct(array $getAdjustemntExtraInfoV2Return = array())
    {
        $this
            ->setGetAdjustemntExtraInfoV2Return($getAdjustemntExtraInfoV2Return);
    }
    /**
     * Get getAdjustemntExtraInfoV2Return value
     * @return \StructType\ExtStoryLineV2[]|null
     */
    public function getGetAdjustemntExtraInfoV2Return()
    {
        return $this->getAdjustemntExtraInfoV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustemntExtraInfoV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustemntExtraInfoV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustemntExtraInfoV2ReturnForArrayConstraintsFromSetGetAdjustemntExtraInfoV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustemntExtraInfoV2ResponseGetAdjustemntExtraInfoV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustemntExtraInfoV2ResponseGetAdjustemntExtraInfoV2ReturnItem instanceof \StructType\ExtStoryLineV2) {
                $invalidValues[] = is_object($getAdjustemntExtraInfoV2ResponseGetAdjustemntExtraInfoV2ReturnItem) ? get_class($getAdjustemntExtraInfoV2ResponseGetAdjustemntExtraInfoV2ReturnItem) : sprintf('%s(%s)', gettype($getAdjustemntExtraInfoV2ResponseGetAdjustemntExtraInfoV2ReturnItem), var_export($getAdjustemntExtraInfoV2ResponseGetAdjustemntExtraInfoV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustemntExtraInfoV2Return property can only contain items of type \StructType\ExtStoryLineV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustemntExtraInfoV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryLineV2[] $getAdjustemntExtraInfoV2Return
     * @return \StructType\GetAdjustemntExtraInfoV2Response
     */
    public function setGetAdjustemntExtraInfoV2Return(array $getAdjustemntExtraInfoV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustemntExtraInfoV2ReturnArrayErrorMessage = self::validateGetAdjustemntExtraInfoV2ReturnForArrayConstraintsFromSetGetAdjustemntExtraInfoV2Return($getAdjustemntExtraInfoV2Return))) {
            throw new \InvalidArgumentException($getAdjustemntExtraInfoV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustemntExtraInfoV2Return = $getAdjustemntExtraInfoV2Return;
        return $this;
    }
    /**
     * Add item to getAdjustemntExtraInfoV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryLineV2 $item
     * @return \StructType\GetAdjustemntExtraInfoV2Response
     */
    public function addToGetAdjustemntExtraInfoV2Return(\StructType\ExtStoryLineV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStoryLineV2) {
            throw new \InvalidArgumentException(sprintf('The getAdjustemntExtraInfoV2Return property can only contain items of type \StructType\ExtStoryLineV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustemntExtraInfoV2Return[] = $item;
        return $this;
    }
}
