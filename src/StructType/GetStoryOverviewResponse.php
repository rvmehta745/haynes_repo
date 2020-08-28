<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStoryOverviewResponse StructType
 * @subpackage Structs
 */
class GetStoryOverviewResponse extends AbstractStructBase
{
    /**
     * The getStoryOverviewReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStory[]
     */
    public $getStoryOverviewReturn;
    /**
     * Constructor method for getStoryOverviewResponse
     * @uses GetStoryOverviewResponse::setGetStoryOverviewReturn()
     * @param \StructType\ExtStory[] $getStoryOverviewReturn
     */
    public function __construct(array $getStoryOverviewReturn = array())
    {
        $this
            ->setGetStoryOverviewReturn($getStoryOverviewReturn);
    }
    /**
     * Get getStoryOverviewReturn value
     * @return \StructType\ExtStory[]|null
     */
    public function getGetStoryOverviewReturn()
    {
        return $this->getStoryOverviewReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetStoryOverviewReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetStoryOverviewReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetStoryOverviewReturnForArrayConstraintsFromSetGetStoryOverviewReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getStoryOverviewResponseGetStoryOverviewReturnItem) {
            // validation for constraint: itemType
            if (!$getStoryOverviewResponseGetStoryOverviewReturnItem instanceof \StructType\ExtStory) {
                $invalidValues[] = is_object($getStoryOverviewResponseGetStoryOverviewReturnItem) ? get_class($getStoryOverviewResponseGetStoryOverviewReturnItem) : sprintf('%s(%s)', gettype($getStoryOverviewResponseGetStoryOverviewReturnItem), var_export($getStoryOverviewResponseGetStoryOverviewReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getStoryOverviewReturn property can only contain items of type \StructType\ExtStory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getStoryOverviewReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStory[] $getStoryOverviewReturn
     * @return \StructType\GetStoryOverviewResponse
     */
    public function setGetStoryOverviewReturn(array $getStoryOverviewReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getStoryOverviewReturnArrayErrorMessage = self::validateGetStoryOverviewReturnForArrayConstraintsFromSetGetStoryOverviewReturn($getStoryOverviewReturn))) {
            throw new \InvalidArgumentException($getStoryOverviewReturnArrayErrorMessage, __LINE__);
        }
        $this->getStoryOverviewReturn = $getStoryOverviewReturn;
        return $this;
    }
    /**
     * Add item to getStoryOverviewReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStory $item
     * @return \StructType\GetStoryOverviewResponse
     */
    public function addToGetStoryOverviewReturn(\StructType\ExtStory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStory) {
            throw new \InvalidArgumentException(sprintf('The getStoryOverviewReturn property can only contain items of type \StructType\ExtStory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getStoryOverviewReturn[] = $item;
        return $this;
    }
}
