<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStoryInfoByGenartResponse StructType
 * @subpackage Structs
 */
class GetStoryInfoByGenartResponse extends AbstractStructBase
{
    /**
     * The getStoryInfoByGenartReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStoryListContainerV2[]
     */
    public $getStoryInfoByGenartReturn;
    /**
     * Constructor method for getStoryInfoByGenartResponse
     * @uses GetStoryInfoByGenartResponse::setGetStoryInfoByGenartReturn()
     * @param \StructType\ExtStoryListContainerV2[] $getStoryInfoByGenartReturn
     */
    public function __construct(array $getStoryInfoByGenartReturn = array())
    {
        $this
            ->setGetStoryInfoByGenartReturn($getStoryInfoByGenartReturn);
    }
    /**
     * Get getStoryInfoByGenartReturn value
     * @return \StructType\ExtStoryListContainerV2[]|null
     */
    public function getGetStoryInfoByGenartReturn()
    {
        return $this->getStoryInfoByGenartReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetStoryInfoByGenartReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetStoryInfoByGenartReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetStoryInfoByGenartReturnForArrayConstraintsFromSetGetStoryInfoByGenartReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getStoryInfoByGenartResponseGetStoryInfoByGenartReturnItem) {
            // validation for constraint: itemType
            if (!$getStoryInfoByGenartResponseGetStoryInfoByGenartReturnItem instanceof \StructType\ExtStoryListContainerV2) {
                $invalidValues[] = is_object($getStoryInfoByGenartResponseGetStoryInfoByGenartReturnItem) ? get_class($getStoryInfoByGenartResponseGetStoryInfoByGenartReturnItem) : sprintf('%s(%s)', gettype($getStoryInfoByGenartResponseGetStoryInfoByGenartReturnItem), var_export($getStoryInfoByGenartResponseGetStoryInfoByGenartReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getStoryInfoByGenartReturn property can only contain items of type \StructType\ExtStoryListContainerV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getStoryInfoByGenartReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryListContainerV2[] $getStoryInfoByGenartReturn
     * @return \StructType\GetStoryInfoByGenartResponse
     */
    public function setGetStoryInfoByGenartReturn(array $getStoryInfoByGenartReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getStoryInfoByGenartReturnArrayErrorMessage = self::validateGetStoryInfoByGenartReturnForArrayConstraintsFromSetGetStoryInfoByGenartReturn($getStoryInfoByGenartReturn))) {
            throw new \InvalidArgumentException($getStoryInfoByGenartReturnArrayErrorMessage, __LINE__);
        }
        $this->getStoryInfoByGenartReturn = $getStoryInfoByGenartReturn;
        return $this;
    }
    /**
     * Add item to getStoryInfoByGenartReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryListContainerV2 $item
     * @return \StructType\GetStoryInfoByGenartResponse
     */
    public function addToGetStoryInfoByGenartReturn(\StructType\ExtStoryListContainerV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStoryListContainerV2) {
            throw new \InvalidArgumentException(sprintf('The getStoryInfoByGenartReturn property can only contain items of type \StructType\ExtStoryListContainerV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getStoryInfoByGenartReturn[] = $item;
        return $this;
    }
}
