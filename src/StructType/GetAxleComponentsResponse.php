<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAxleComponentsResponse StructType
 * @subpackage Structs
 */
class GetAxleComponentsResponse extends AbstractStructBase
{
    /**
     * The getAxleComponentsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtAxleComponent[]
     */
    public $getAxleComponentsReturn;
    /**
     * Constructor method for getAxleComponentsResponse
     * @uses GetAxleComponentsResponse::setGetAxleComponentsReturn()
     * @param \StructType\ExtAxleComponent[] $getAxleComponentsReturn
     */
    public function __construct(array $getAxleComponentsReturn = array())
    {
        $this
            ->setGetAxleComponentsReturn($getAxleComponentsReturn);
    }
    /**
     * Get getAxleComponentsReturn value
     * @return \StructType\ExtAxleComponent[]|null
     */
    public function getGetAxleComponentsReturn()
    {
        return $this->getAxleComponentsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAxleComponentsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAxleComponentsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAxleComponentsReturnForArrayConstraintsFromSetGetAxleComponentsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAxleComponentsResponseGetAxleComponentsReturnItem) {
            // validation for constraint: itemType
            if (!$getAxleComponentsResponseGetAxleComponentsReturnItem instanceof \StructType\ExtAxleComponent) {
                $invalidValues[] = is_object($getAxleComponentsResponseGetAxleComponentsReturnItem) ? get_class($getAxleComponentsResponseGetAxleComponentsReturnItem) : sprintf('%s(%s)', gettype($getAxleComponentsResponseGetAxleComponentsReturnItem), var_export($getAxleComponentsResponseGetAxleComponentsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAxleComponentsReturn property can only contain items of type \StructType\ExtAxleComponent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAxleComponentsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAxleComponent[] $getAxleComponentsReturn
     * @return \StructType\GetAxleComponentsResponse
     */
    public function setGetAxleComponentsReturn(array $getAxleComponentsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getAxleComponentsReturnArrayErrorMessage = self::validateGetAxleComponentsReturnForArrayConstraintsFromSetGetAxleComponentsReturn($getAxleComponentsReturn))) {
            throw new \InvalidArgumentException($getAxleComponentsReturnArrayErrorMessage, __LINE__);
        }
        $this->getAxleComponentsReturn = $getAxleComponentsReturn;
        return $this;
    }
    /**
     * Add item to getAxleComponentsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAxleComponent $item
     * @return \StructType\GetAxleComponentsResponse
     */
    public function addToGetAxleComponentsReturn(\StructType\ExtAxleComponent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtAxleComponent) {
            throw new \InvalidArgumentException(sprintf('The getAxleComponentsReturn property can only contain items of type \StructType\ExtAxleComponent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAxleComponentsReturn[] = $item;
        return $this;
    }
}
