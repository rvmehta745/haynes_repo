<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStoryInfoV4Response StructType
 * @subpackage Structs
 */
class GetStoryInfoV4Response extends AbstractStructBase
{
    /**
     * The getStoryInfoV4Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStoryLineV4[]
     */
    public $getStoryInfoV4Return;
    /**
     * Constructor method for getStoryInfoV4Response
     * @uses GetStoryInfoV4Response::setGetStoryInfoV4Return()
     * @param \StructType\ExtStoryLineV4[] $getStoryInfoV4Return
     */
    public function __construct(array $getStoryInfoV4Return = array())
    {
        $this
            ->setGetStoryInfoV4Return($getStoryInfoV4Return);
    }
    /**
     * Get getStoryInfoV4Return value
     * @return \StructType\ExtStoryLineV4[]|null
     */
    public function getGetStoryInfoV4Return()
    {
        return $this->getStoryInfoV4Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetStoryInfoV4Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetStoryInfoV4Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetStoryInfoV4ReturnForArrayConstraintsFromSetGetStoryInfoV4Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getStoryInfoV4ResponseGetStoryInfoV4ReturnItem) {
            // validation for constraint: itemType
            if (!$getStoryInfoV4ResponseGetStoryInfoV4ReturnItem instanceof \StructType\ExtStoryLineV4) {
                $invalidValues[] = is_object($getStoryInfoV4ResponseGetStoryInfoV4ReturnItem) ? get_class($getStoryInfoV4ResponseGetStoryInfoV4ReturnItem) : sprintf('%s(%s)', gettype($getStoryInfoV4ResponseGetStoryInfoV4ReturnItem), var_export($getStoryInfoV4ResponseGetStoryInfoV4ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getStoryInfoV4Return property can only contain items of type \StructType\ExtStoryLineV4, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getStoryInfoV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryLineV4[] $getStoryInfoV4Return
     * @return \StructType\GetStoryInfoV4Response
     */
    public function setGetStoryInfoV4Return(array $getStoryInfoV4Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getStoryInfoV4ReturnArrayErrorMessage = self::validateGetStoryInfoV4ReturnForArrayConstraintsFromSetGetStoryInfoV4Return($getStoryInfoV4Return))) {
            throw new \InvalidArgumentException($getStoryInfoV4ReturnArrayErrorMessage, __LINE__);
        }
        $this->getStoryInfoV4Return = $getStoryInfoV4Return;
        return $this;
    }
    /**
     * Add item to getStoryInfoV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryLineV4 $item
     * @return \StructType\GetStoryInfoV4Response
     */
    public function addToGetStoryInfoV4Return(\StructType\ExtStoryLineV4 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStoryLineV4) {
            throw new \InvalidArgumentException(sprintf('The getStoryInfoV4Return property can only contain items of type \StructType\ExtStoryLineV4, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getStoryInfoV4Return[] = $item;
        return $this;
    }
}
