<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWarningLightsResponse StructType
 * @subpackage Structs
 */
class GetWarningLightsResponse extends AbstractStructBase
{
    /**
     * The getWarningLightsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStoryV2[]
     */
    public $getWarningLightsReturn;
    /**
     * Constructor method for getWarningLightsResponse
     * @uses GetWarningLightsResponse::setGetWarningLightsReturn()
     * @param \StructType\ExtStoryV2[] $getWarningLightsReturn
     */
    public function __construct(array $getWarningLightsReturn = array())
    {
        $this
            ->setGetWarningLightsReturn($getWarningLightsReturn);
    }
    /**
     * Get getWarningLightsReturn value
     * @return \StructType\ExtStoryV2[]|null
     */
    public function getGetWarningLightsReturn()
    {
        return $this->getWarningLightsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetWarningLightsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetWarningLightsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetWarningLightsReturnForArrayConstraintsFromSetGetWarningLightsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWarningLightsResponseGetWarningLightsReturnItem) {
            // validation for constraint: itemType
            if (!$getWarningLightsResponseGetWarningLightsReturnItem instanceof \StructType\ExtStoryV2) {
                $invalidValues[] = is_object($getWarningLightsResponseGetWarningLightsReturnItem) ? get_class($getWarningLightsResponseGetWarningLightsReturnItem) : sprintf('%s(%s)', gettype($getWarningLightsResponseGetWarningLightsReturnItem), var_export($getWarningLightsResponseGetWarningLightsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getWarningLightsReturn property can only contain items of type \StructType\ExtStoryV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getWarningLightsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryV2[] $getWarningLightsReturn
     * @return \StructType\GetWarningLightsResponse
     */
    public function setGetWarningLightsReturn(array $getWarningLightsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getWarningLightsReturnArrayErrorMessage = self::validateGetWarningLightsReturnForArrayConstraintsFromSetGetWarningLightsReturn($getWarningLightsReturn))) {
            throw new \InvalidArgumentException($getWarningLightsReturnArrayErrorMessage, __LINE__);
        }
        $this->getWarningLightsReturn = $getWarningLightsReturn;
        return $this;
    }
    /**
     * Add item to getWarningLightsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryV2 $item
     * @return \StructType\GetWarningLightsResponse
     */
    public function addToGetWarningLightsReturn(\StructType\ExtStoryV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStoryV2) {
            throw new \InvalidArgumentException(sprintf('The getWarningLightsReturn property can only contain items of type \StructType\ExtStoryV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getWarningLightsReturn[] = $item;
        return $this;
    }
}
