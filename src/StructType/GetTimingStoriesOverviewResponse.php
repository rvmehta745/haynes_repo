<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTimingStoriesOverviewResponse StructType
 * @subpackage Structs
 */
class GetTimingStoriesOverviewResponse extends AbstractStructBase
{
    /**
     * The getTimingStoriesOverviewReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStory[]
     */
    public $getTimingStoriesOverviewReturn;
    /**
     * Constructor method for getTimingStoriesOverviewResponse
     * @uses GetTimingStoriesOverviewResponse::setGetTimingStoriesOverviewReturn()
     * @param \StructType\ExtStory[] $getTimingStoriesOverviewReturn
     */
    public function __construct(array $getTimingStoriesOverviewReturn = array())
    {
        $this
            ->setGetTimingStoriesOverviewReturn($getTimingStoriesOverviewReturn);
    }
    /**
     * Get getTimingStoriesOverviewReturn value
     * @return \StructType\ExtStory[]|null
     */
    public function getGetTimingStoriesOverviewReturn()
    {
        return $this->getTimingStoriesOverviewReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTimingStoriesOverviewReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTimingStoriesOverviewReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTimingStoriesOverviewReturnForArrayConstraintsFromSetGetTimingStoriesOverviewReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTimingStoriesOverviewResponseGetTimingStoriesOverviewReturnItem) {
            // validation for constraint: itemType
            if (!$getTimingStoriesOverviewResponseGetTimingStoriesOverviewReturnItem instanceof \StructType\ExtStory) {
                $invalidValues[] = is_object($getTimingStoriesOverviewResponseGetTimingStoriesOverviewReturnItem) ? get_class($getTimingStoriesOverviewResponseGetTimingStoriesOverviewReturnItem) : sprintf('%s(%s)', gettype($getTimingStoriesOverviewResponseGetTimingStoriesOverviewReturnItem), var_export($getTimingStoriesOverviewResponseGetTimingStoriesOverviewReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getTimingStoriesOverviewReturn property can only contain items of type \StructType\ExtStory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getTimingStoriesOverviewReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStory[] $getTimingStoriesOverviewReturn
     * @return \StructType\GetTimingStoriesOverviewResponse
     */
    public function setGetTimingStoriesOverviewReturn(array $getTimingStoriesOverviewReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getTimingStoriesOverviewReturnArrayErrorMessage = self::validateGetTimingStoriesOverviewReturnForArrayConstraintsFromSetGetTimingStoriesOverviewReturn($getTimingStoriesOverviewReturn))) {
            throw new \InvalidArgumentException($getTimingStoriesOverviewReturnArrayErrorMessage, __LINE__);
        }
        $this->getTimingStoriesOverviewReturn = $getTimingStoriesOverviewReturn;
        return $this;
    }
    /**
     * Add item to getTimingStoriesOverviewReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStory $item
     * @return \StructType\GetTimingStoriesOverviewResponse
     */
    public function addToGetTimingStoriesOverviewReturn(\StructType\ExtStory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStory) {
            throw new \InvalidArgumentException(sprintf('The getTimingStoriesOverviewReturn property can only contain items of type \StructType\ExtStory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getTimingStoriesOverviewReturn[] = $item;
        return $this;
    }
}
