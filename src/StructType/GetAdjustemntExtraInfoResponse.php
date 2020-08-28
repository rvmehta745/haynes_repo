<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustemntExtraInfoResponse StructType
 * @subpackage Structs
 */
class GetAdjustemntExtraInfoResponse extends AbstractStructBase
{
    /**
     * The getAdjustemntExtraInfoReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStoryLine[]
     */
    public $getAdjustemntExtraInfoReturn;
    /**
     * Constructor method for getAdjustemntExtraInfoResponse
     * @uses GetAdjustemntExtraInfoResponse::setGetAdjustemntExtraInfoReturn()
     * @param \StructType\ExtStoryLine[] $getAdjustemntExtraInfoReturn
     */
    public function __construct(array $getAdjustemntExtraInfoReturn = array())
    {
        $this
            ->setGetAdjustemntExtraInfoReturn($getAdjustemntExtraInfoReturn);
    }
    /**
     * Get getAdjustemntExtraInfoReturn value
     * @return \StructType\ExtStoryLine[]|null
     */
    public function getGetAdjustemntExtraInfoReturn()
    {
        return $this->getAdjustemntExtraInfoReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustemntExtraInfoReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustemntExtraInfoReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustemntExtraInfoReturnForArrayConstraintsFromSetGetAdjustemntExtraInfoReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustemntExtraInfoResponseGetAdjustemntExtraInfoReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustemntExtraInfoResponseGetAdjustemntExtraInfoReturnItem instanceof \StructType\ExtStoryLine) {
                $invalidValues[] = is_object($getAdjustemntExtraInfoResponseGetAdjustemntExtraInfoReturnItem) ? get_class($getAdjustemntExtraInfoResponseGetAdjustemntExtraInfoReturnItem) : sprintf('%s(%s)', gettype($getAdjustemntExtraInfoResponseGetAdjustemntExtraInfoReturnItem), var_export($getAdjustemntExtraInfoResponseGetAdjustemntExtraInfoReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustemntExtraInfoReturn property can only contain items of type \StructType\ExtStoryLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustemntExtraInfoReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryLine[] $getAdjustemntExtraInfoReturn
     * @return \StructType\GetAdjustemntExtraInfoResponse
     */
    public function setGetAdjustemntExtraInfoReturn(array $getAdjustemntExtraInfoReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustemntExtraInfoReturnArrayErrorMessage = self::validateGetAdjustemntExtraInfoReturnForArrayConstraintsFromSetGetAdjustemntExtraInfoReturn($getAdjustemntExtraInfoReturn))) {
            throw new \InvalidArgumentException($getAdjustemntExtraInfoReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustemntExtraInfoReturn = $getAdjustemntExtraInfoReturn;
        return $this;
    }
    /**
     * Add item to getAdjustemntExtraInfoReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryLine $item
     * @return \StructType\GetAdjustemntExtraInfoResponse
     */
    public function addToGetAdjustemntExtraInfoReturn(\StructType\ExtStoryLine $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStoryLine) {
            throw new \InvalidArgumentException(sprintf('The getAdjustemntExtraInfoReturn property can only contain items of type \StructType\ExtStoryLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustemntExtraInfoReturn[] = $item;
        return $this;
    }
}
