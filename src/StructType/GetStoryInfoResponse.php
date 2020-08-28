<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStoryInfoResponse StructType
 * @subpackage Structs
 */
class GetStoryInfoResponse extends AbstractStructBase
{
    /**
     * The getStoryInfoReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStoryLine[]
     */
    public $getStoryInfoReturn;
    /**
     * Constructor method for getStoryInfoResponse
     * @uses GetStoryInfoResponse::setGetStoryInfoReturn()
     * @param \StructType\ExtStoryLine[] $getStoryInfoReturn
     */
    public function __construct(array $getStoryInfoReturn = array())
    {
        $this
            ->setGetStoryInfoReturn($getStoryInfoReturn);
    }
    /**
     * Get getStoryInfoReturn value
     * @return \StructType\ExtStoryLine[]|null
     */
    public function getGetStoryInfoReturn()
    {
        return $this->getStoryInfoReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetStoryInfoReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetStoryInfoReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetStoryInfoReturnForArrayConstraintsFromSetGetStoryInfoReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getStoryInfoResponseGetStoryInfoReturnItem) {
            // validation for constraint: itemType
            if (!$getStoryInfoResponseGetStoryInfoReturnItem instanceof \StructType\ExtStoryLine) {
                $invalidValues[] = is_object($getStoryInfoResponseGetStoryInfoReturnItem) ? get_class($getStoryInfoResponseGetStoryInfoReturnItem) : sprintf('%s(%s)', gettype($getStoryInfoResponseGetStoryInfoReturnItem), var_export($getStoryInfoResponseGetStoryInfoReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getStoryInfoReturn property can only contain items of type \StructType\ExtStoryLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getStoryInfoReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryLine[] $getStoryInfoReturn
     * @return \StructType\GetStoryInfoResponse
     */
    public function setGetStoryInfoReturn(array $getStoryInfoReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getStoryInfoReturnArrayErrorMessage = self::validateGetStoryInfoReturnForArrayConstraintsFromSetGetStoryInfoReturn($getStoryInfoReturn))) {
            throw new \InvalidArgumentException($getStoryInfoReturnArrayErrorMessage, __LINE__);
        }
        $this->getStoryInfoReturn = $getStoryInfoReturn;
        return $this;
    }
    /**
     * Add item to getStoryInfoReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryLine $item
     * @return \StructType\GetStoryInfoResponse
     */
    public function addToGetStoryInfoReturn(\StructType\ExtStoryLine $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStoryLine) {
            throw new \InvalidArgumentException(sprintf('The getStoryInfoReturn property can only contain items of type \StructType\ExtStoryLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getStoryInfoReturn[] = $item;
        return $this;
    }
}
