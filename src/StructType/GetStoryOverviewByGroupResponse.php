<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStoryOverviewByGroupResponse StructType
 * @subpackage Structs
 */
class GetStoryOverviewByGroupResponse extends AbstractStructBase
{
    /**
     * The getStoryOverviewByGroupReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStory[]
     */
    public $getStoryOverviewByGroupReturn;
    /**
     * Constructor method for getStoryOverviewByGroupResponse
     * @uses GetStoryOverviewByGroupResponse::setGetStoryOverviewByGroupReturn()
     * @param \StructType\ExtStory[] $getStoryOverviewByGroupReturn
     */
    public function __construct(array $getStoryOverviewByGroupReturn = array())
    {
        $this
            ->setGetStoryOverviewByGroupReturn($getStoryOverviewByGroupReturn);
    }
    /**
     * Get getStoryOverviewByGroupReturn value
     * @return \StructType\ExtStory[]|null
     */
    public function getGetStoryOverviewByGroupReturn()
    {
        return $this->getStoryOverviewByGroupReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetStoryOverviewByGroupReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetStoryOverviewByGroupReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetStoryOverviewByGroupReturnForArrayConstraintsFromSetGetStoryOverviewByGroupReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getStoryOverviewByGroupResponseGetStoryOverviewByGroupReturnItem) {
            // validation for constraint: itemType
            if (!$getStoryOverviewByGroupResponseGetStoryOverviewByGroupReturnItem instanceof \StructType\ExtStory) {
                $invalidValues[] = is_object($getStoryOverviewByGroupResponseGetStoryOverviewByGroupReturnItem) ? get_class($getStoryOverviewByGroupResponseGetStoryOverviewByGroupReturnItem) : sprintf('%s(%s)', gettype($getStoryOverviewByGroupResponseGetStoryOverviewByGroupReturnItem), var_export($getStoryOverviewByGroupResponseGetStoryOverviewByGroupReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getStoryOverviewByGroupReturn property can only contain items of type \StructType\ExtStory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getStoryOverviewByGroupReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStory[] $getStoryOverviewByGroupReturn
     * @return \StructType\GetStoryOverviewByGroupResponse
     */
    public function setGetStoryOverviewByGroupReturn(array $getStoryOverviewByGroupReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getStoryOverviewByGroupReturnArrayErrorMessage = self::validateGetStoryOverviewByGroupReturnForArrayConstraintsFromSetGetStoryOverviewByGroupReturn($getStoryOverviewByGroupReturn))) {
            throw new \InvalidArgumentException($getStoryOverviewByGroupReturnArrayErrorMessage, __LINE__);
        }
        $this->getStoryOverviewByGroupReturn = $getStoryOverviewByGroupReturn;
        return $this;
    }
    /**
     * Add item to getStoryOverviewByGroupReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStory $item
     * @return \StructType\GetStoryOverviewByGroupResponse
     */
    public function addToGetStoryOverviewByGroupReturn(\StructType\ExtStory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStory) {
            throw new \InvalidArgumentException(sprintf('The getStoryOverviewByGroupReturn property can only contain items of type \StructType\ExtStory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getStoryOverviewByGroupReturn[] = $item;
        return $this;
    }
}
