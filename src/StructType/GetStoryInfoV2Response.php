<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStoryInfoV2Response StructType
 * @subpackage Structs
 */
class GetStoryInfoV2Response extends AbstractStructBase
{
    /**
     * The getStoryInfoV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStoryLineV2[]
     */
    public $getStoryInfoV2Return;
    /**
     * Constructor method for getStoryInfoV2Response
     * @uses GetStoryInfoV2Response::setGetStoryInfoV2Return()
     * @param \StructType\ExtStoryLineV2[] $getStoryInfoV2Return
     */
    public function __construct(array $getStoryInfoV2Return = array())
    {
        $this
            ->setGetStoryInfoV2Return($getStoryInfoV2Return);
    }
    /**
     * Get getStoryInfoV2Return value
     * @return \StructType\ExtStoryLineV2[]|null
     */
    public function getGetStoryInfoV2Return()
    {
        return $this->getStoryInfoV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetStoryInfoV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetStoryInfoV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetStoryInfoV2ReturnForArrayConstraintsFromSetGetStoryInfoV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getStoryInfoV2ResponseGetStoryInfoV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getStoryInfoV2ResponseGetStoryInfoV2ReturnItem instanceof \StructType\ExtStoryLineV2) {
                $invalidValues[] = is_object($getStoryInfoV2ResponseGetStoryInfoV2ReturnItem) ? get_class($getStoryInfoV2ResponseGetStoryInfoV2ReturnItem) : sprintf('%s(%s)', gettype($getStoryInfoV2ResponseGetStoryInfoV2ReturnItem), var_export($getStoryInfoV2ResponseGetStoryInfoV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getStoryInfoV2Return property can only contain items of type \StructType\ExtStoryLineV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getStoryInfoV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryLineV2[] $getStoryInfoV2Return
     * @return \StructType\GetStoryInfoV2Response
     */
    public function setGetStoryInfoV2Return(array $getStoryInfoV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getStoryInfoV2ReturnArrayErrorMessage = self::validateGetStoryInfoV2ReturnForArrayConstraintsFromSetGetStoryInfoV2Return($getStoryInfoV2Return))) {
            throw new \InvalidArgumentException($getStoryInfoV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getStoryInfoV2Return = $getStoryInfoV2Return;
        return $this;
    }
    /**
     * Add item to getStoryInfoV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryLineV2 $item
     * @return \StructType\GetStoryInfoV2Response
     */
    public function addToGetStoryInfoV2Return(\StructType\ExtStoryLineV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStoryLineV2) {
            throw new \InvalidArgumentException(sprintf('The getStoryInfoV2Return property can only contain items of type \StructType\ExtStoryLineV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getStoryInfoV2Return[] = $item;
        return $this;
    }
}
