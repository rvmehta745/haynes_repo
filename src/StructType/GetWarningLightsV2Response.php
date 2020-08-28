<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWarningLightsV2Response StructType
 * @subpackage Structs
 */
class GetWarningLightsV2Response extends AbstractStructBase
{
    /**
     * The getWarningLightsV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStoryV3[]
     */
    public $getWarningLightsV2Return;
    /**
     * Constructor method for getWarningLightsV2Response
     * @uses GetWarningLightsV2Response::setGetWarningLightsV2Return()
     * @param \StructType\ExtStoryV3[] $getWarningLightsV2Return
     */
    public function __construct(array $getWarningLightsV2Return = array())
    {
        $this
            ->setGetWarningLightsV2Return($getWarningLightsV2Return);
    }
    /**
     * Get getWarningLightsV2Return value
     * @return \StructType\ExtStoryV3[]|null
     */
    public function getGetWarningLightsV2Return()
    {
        return $this->getWarningLightsV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetWarningLightsV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetWarningLightsV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetWarningLightsV2ReturnForArrayConstraintsFromSetGetWarningLightsV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWarningLightsV2ResponseGetWarningLightsV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getWarningLightsV2ResponseGetWarningLightsV2ReturnItem instanceof \StructType\ExtStoryV3) {
                $invalidValues[] = is_object($getWarningLightsV2ResponseGetWarningLightsV2ReturnItem) ? get_class($getWarningLightsV2ResponseGetWarningLightsV2ReturnItem) : sprintf('%s(%s)', gettype($getWarningLightsV2ResponseGetWarningLightsV2ReturnItem), var_export($getWarningLightsV2ResponseGetWarningLightsV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getWarningLightsV2Return property can only contain items of type \StructType\ExtStoryV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getWarningLightsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryV3[] $getWarningLightsV2Return
     * @return \StructType\GetWarningLightsV2Response
     */
    public function setGetWarningLightsV2Return(array $getWarningLightsV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getWarningLightsV2ReturnArrayErrorMessage = self::validateGetWarningLightsV2ReturnForArrayConstraintsFromSetGetWarningLightsV2Return($getWarningLightsV2Return))) {
            throw new \InvalidArgumentException($getWarningLightsV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getWarningLightsV2Return = $getWarningLightsV2Return;
        return $this;
    }
    /**
     * Add item to getWarningLightsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryV3 $item
     * @return \StructType\GetWarningLightsV2Response
     */
    public function addToGetWarningLightsV2Return(\StructType\ExtStoryV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStoryV3) {
            throw new \InvalidArgumentException(sprintf('The getWarningLightsV2Return property can only contain items of type \StructType\ExtStoryV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getWarningLightsV2Return[] = $item;
        return $this;
    }
}
