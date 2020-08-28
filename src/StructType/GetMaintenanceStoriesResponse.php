<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceStoriesResponse StructType
 * @subpackage Structs
 */
class GetMaintenanceStoriesResponse extends AbstractStructBase
{
    /**
     * The getMaintenanceStoriesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStory[]
     */
    public $getMaintenanceStoriesReturn;
    /**
     * Constructor method for getMaintenanceStoriesResponse
     * @uses GetMaintenanceStoriesResponse::setGetMaintenanceStoriesReturn()
     * @param \StructType\ExtStory[] $getMaintenanceStoriesReturn
     */
    public function __construct(array $getMaintenanceStoriesReturn = array())
    {
        $this
            ->setGetMaintenanceStoriesReturn($getMaintenanceStoriesReturn);
    }
    /**
     * Get getMaintenanceStoriesReturn value
     * @return \StructType\ExtStory[]|null
     */
    public function getGetMaintenanceStoriesReturn()
    {
        return $this->getMaintenanceStoriesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceStoriesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceStoriesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceStoriesReturnForArrayConstraintsFromSetGetMaintenanceStoriesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceStoriesResponseGetMaintenanceStoriesReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceStoriesResponseGetMaintenanceStoriesReturnItem instanceof \StructType\ExtStory) {
                $invalidValues[] = is_object($getMaintenanceStoriesResponseGetMaintenanceStoriesReturnItem) ? get_class($getMaintenanceStoriesResponseGetMaintenanceStoriesReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceStoriesResponseGetMaintenanceStoriesReturnItem), var_export($getMaintenanceStoriesResponseGetMaintenanceStoriesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceStoriesReturn property can only contain items of type \StructType\ExtStory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceStoriesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStory[] $getMaintenanceStoriesReturn
     * @return \StructType\GetMaintenanceStoriesResponse
     */
    public function setGetMaintenanceStoriesReturn(array $getMaintenanceStoriesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceStoriesReturnArrayErrorMessage = self::validateGetMaintenanceStoriesReturnForArrayConstraintsFromSetGetMaintenanceStoriesReturn($getMaintenanceStoriesReturn))) {
            throw new \InvalidArgumentException($getMaintenanceStoriesReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceStoriesReturn = $getMaintenanceStoriesReturn;
        return $this;
    }
    /**
     * Add item to getMaintenanceStoriesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStory $item
     * @return \StructType\GetMaintenanceStoriesResponse
     */
    public function addToGetMaintenanceStoriesReturn(\StructType\ExtStory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStory) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceStoriesReturn property can only contain items of type \StructType\ExtStory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceStoriesReturn[] = $item;
        return $this;
    }
}
