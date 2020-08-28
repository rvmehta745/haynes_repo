<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWiringComponentsResponse StructType
 * @subpackage Structs
 */
class GetWiringComponentsResponse extends AbstractStructBase
{
    /**
     * The getWiringComponentsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtWiringComponent[]
     */
    public $getWiringComponentsReturn;
    /**
     * Constructor method for getWiringComponentsResponse
     * @uses GetWiringComponentsResponse::setGetWiringComponentsReturn()
     * @param \StructType\ExtWiringComponent[] $getWiringComponentsReturn
     */
    public function __construct(array $getWiringComponentsReturn = array())
    {
        $this
            ->setGetWiringComponentsReturn($getWiringComponentsReturn);
    }
    /**
     * Get getWiringComponentsReturn value
     * @return \StructType\ExtWiringComponent[]|null
     */
    public function getGetWiringComponentsReturn()
    {
        return $this->getWiringComponentsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetWiringComponentsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetWiringComponentsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetWiringComponentsReturnForArrayConstraintsFromSetGetWiringComponentsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWiringComponentsResponseGetWiringComponentsReturnItem) {
            // validation for constraint: itemType
            if (!$getWiringComponentsResponseGetWiringComponentsReturnItem instanceof \StructType\ExtWiringComponent) {
                $invalidValues[] = is_object($getWiringComponentsResponseGetWiringComponentsReturnItem) ? get_class($getWiringComponentsResponseGetWiringComponentsReturnItem) : sprintf('%s(%s)', gettype($getWiringComponentsResponseGetWiringComponentsReturnItem), var_export($getWiringComponentsResponseGetWiringComponentsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getWiringComponentsReturn property can only contain items of type \StructType\ExtWiringComponent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getWiringComponentsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWiringComponent[] $getWiringComponentsReturn
     * @return \StructType\GetWiringComponentsResponse
     */
    public function setGetWiringComponentsReturn(array $getWiringComponentsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getWiringComponentsReturnArrayErrorMessage = self::validateGetWiringComponentsReturnForArrayConstraintsFromSetGetWiringComponentsReturn($getWiringComponentsReturn))) {
            throw new \InvalidArgumentException($getWiringComponentsReturnArrayErrorMessage, __LINE__);
        }
        $this->getWiringComponentsReturn = $getWiringComponentsReturn;
        return $this;
    }
    /**
     * Add item to getWiringComponentsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWiringComponent $item
     * @return \StructType\GetWiringComponentsResponse
     */
    public function addToGetWiringComponentsReturn(\StructType\ExtWiringComponent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtWiringComponent) {
            throw new \InvalidArgumentException(sprintf('The getWiringComponentsReturn property can only contain items of type \StructType\ExtWiringComponent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getWiringComponentsReturn[] = $item;
        return $this;
    }
}
