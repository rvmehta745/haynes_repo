<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRecallDataResponse StructType
 * @subpackage Structs
 */
class GetRecallDataResponse extends AbstractStructBase
{
    /**
     * The getRecallDataReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBGroup[]
     */
    public $getRecallDataReturn;
    /**
     * Constructor method for getRecallDataResponse
     * @uses GetRecallDataResponse::setGetRecallDataReturn()
     * @param \StructType\ExtTSBGroup[] $getRecallDataReturn
     */
    public function __construct(array $getRecallDataReturn = array())
    {
        $this
            ->setGetRecallDataReturn($getRecallDataReturn);
    }
    /**
     * Get getRecallDataReturn value
     * @return \StructType\ExtTSBGroup[]|null
     */
    public function getGetRecallDataReturn()
    {
        return $this->getRecallDataReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRecallDataReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRecallDataReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRecallDataReturnForArrayConstraintsFromSetGetRecallDataReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRecallDataResponseGetRecallDataReturnItem) {
            // validation for constraint: itemType
            if (!$getRecallDataResponseGetRecallDataReturnItem instanceof \StructType\ExtTSBGroup) {
                $invalidValues[] = is_object($getRecallDataResponseGetRecallDataReturnItem) ? get_class($getRecallDataResponseGetRecallDataReturnItem) : sprintf('%s(%s)', gettype($getRecallDataResponseGetRecallDataReturnItem), var_export($getRecallDataResponseGetRecallDataReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRecallDataReturn property can only contain items of type \StructType\ExtTSBGroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRecallDataReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBGroup[] $getRecallDataReturn
     * @return \StructType\GetRecallDataResponse
     */
    public function setGetRecallDataReturn(array $getRecallDataReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getRecallDataReturnArrayErrorMessage = self::validateGetRecallDataReturnForArrayConstraintsFromSetGetRecallDataReturn($getRecallDataReturn))) {
            throw new \InvalidArgumentException($getRecallDataReturnArrayErrorMessage, __LINE__);
        }
        $this->getRecallDataReturn = $getRecallDataReturn;
        return $this;
    }
    /**
     * Add item to getRecallDataReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBGroup $item
     * @return \StructType\GetRecallDataResponse
     */
    public function addToGetRecallDataReturn(\StructType\ExtTSBGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBGroup) {
            throw new \InvalidArgumentException(sprintf('The getRecallDataReturn property can only contain items of type \StructType\ExtTSBGroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRecallDataReturn[] = $item;
        return $this;
    }
}
