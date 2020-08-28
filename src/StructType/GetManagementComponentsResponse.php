<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getManagementComponentsResponse StructType
 * @subpackage Structs
 */
class GetManagementComponentsResponse extends AbstractStructBase
{
    /**
     * The getManagementComponentsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtComponent[]
     */
    public $getManagementComponentsReturn;
    /**
     * Constructor method for getManagementComponentsResponse
     * @uses GetManagementComponentsResponse::setGetManagementComponentsReturn()
     * @param \StructType\ExtComponent[] $getManagementComponentsReturn
     */
    public function __construct(array $getManagementComponentsReturn = array())
    {
        $this
            ->setGetManagementComponentsReturn($getManagementComponentsReturn);
    }
    /**
     * Get getManagementComponentsReturn value
     * @return \StructType\ExtComponent[]|null
     */
    public function getGetManagementComponentsReturn()
    {
        return $this->getManagementComponentsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetManagementComponentsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetManagementComponentsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetManagementComponentsReturnForArrayConstraintsFromSetGetManagementComponentsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getManagementComponentsResponseGetManagementComponentsReturnItem) {
            // validation for constraint: itemType
            if (!$getManagementComponentsResponseGetManagementComponentsReturnItem instanceof \StructType\ExtComponent) {
                $invalidValues[] = is_object($getManagementComponentsResponseGetManagementComponentsReturnItem) ? get_class($getManagementComponentsResponseGetManagementComponentsReturnItem) : sprintf('%s(%s)', gettype($getManagementComponentsResponseGetManagementComponentsReturnItem), var_export($getManagementComponentsResponseGetManagementComponentsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getManagementComponentsReturn property can only contain items of type \StructType\ExtComponent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getManagementComponentsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtComponent[] $getManagementComponentsReturn
     * @return \StructType\GetManagementComponentsResponse
     */
    public function setGetManagementComponentsReturn(array $getManagementComponentsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getManagementComponentsReturnArrayErrorMessage = self::validateGetManagementComponentsReturnForArrayConstraintsFromSetGetManagementComponentsReturn($getManagementComponentsReturn))) {
            throw new \InvalidArgumentException($getManagementComponentsReturnArrayErrorMessage, __LINE__);
        }
        $this->getManagementComponentsReturn = $getManagementComponentsReturn;
        return $this;
    }
    /**
     * Add item to getManagementComponentsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtComponent $item
     * @return \StructType\GetManagementComponentsResponse
     */
    public function addToGetManagementComponentsReturn(\StructType\ExtComponent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtComponent) {
            throw new \InvalidArgumentException(sprintf('The getManagementComponentsReturn property can only contain items of type \StructType\ExtComponent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getManagementComponentsReturn[] = $item;
        return $this;
    }
}
