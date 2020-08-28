<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStoryInfoV3Response StructType
 * @subpackage Structs
 */
class GetStoryInfoV3Response extends AbstractStructBase
{
    /**
     * The getStoryInfoV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStoryLineV3[]
     */
    public $getStoryInfoV3Return;
    /**
     * Constructor method for getStoryInfoV3Response
     * @uses GetStoryInfoV3Response::setGetStoryInfoV3Return()
     * @param \StructType\ExtStoryLineV3[] $getStoryInfoV3Return
     */
    public function __construct(array $getStoryInfoV3Return = array())
    {
        $this
            ->setGetStoryInfoV3Return($getStoryInfoV3Return);
    }
    /**
     * Get getStoryInfoV3Return value
     * @return \StructType\ExtStoryLineV3[]|null
     */
    public function getGetStoryInfoV3Return()
    {
        return $this->getStoryInfoV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetStoryInfoV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetStoryInfoV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetStoryInfoV3ReturnForArrayConstraintsFromSetGetStoryInfoV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getStoryInfoV3ResponseGetStoryInfoV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getStoryInfoV3ResponseGetStoryInfoV3ReturnItem instanceof \StructType\ExtStoryLineV3) {
                $invalidValues[] = is_object($getStoryInfoV3ResponseGetStoryInfoV3ReturnItem) ? get_class($getStoryInfoV3ResponseGetStoryInfoV3ReturnItem) : sprintf('%s(%s)', gettype($getStoryInfoV3ResponseGetStoryInfoV3ReturnItem), var_export($getStoryInfoV3ResponseGetStoryInfoV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getStoryInfoV3Return property can only contain items of type \StructType\ExtStoryLineV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getStoryInfoV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryLineV3[] $getStoryInfoV3Return
     * @return \StructType\GetStoryInfoV3Response
     */
    public function setGetStoryInfoV3Return(array $getStoryInfoV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getStoryInfoV3ReturnArrayErrorMessage = self::validateGetStoryInfoV3ReturnForArrayConstraintsFromSetGetStoryInfoV3Return($getStoryInfoV3Return))) {
            throw new \InvalidArgumentException($getStoryInfoV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getStoryInfoV3Return = $getStoryInfoV3Return;
        return $this;
    }
    /**
     * Add item to getStoryInfoV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryLineV3 $item
     * @return \StructType\GetStoryInfoV3Response
     */
    public function addToGetStoryInfoV3Return(\StructType\ExtStoryLineV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStoryLineV3) {
            throw new \InvalidArgumentException(sprintf('The getStoryInfoV3Return property can only contain items of type \StructType\ExtStoryLineV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getStoryInfoV3Return[] = $item;
        return $this;
    }
}
