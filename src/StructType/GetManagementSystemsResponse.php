<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getManagementSystemsResponse StructType
 * @subpackage Structs
 */
class GetManagementSystemsResponse extends AbstractStructBase
{
    /**
     * The getManagementSystemsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtManagementSystem[]
     */
    public $getManagementSystemsReturn;
    /**
     * Constructor method for getManagementSystemsResponse
     * @uses GetManagementSystemsResponse::setGetManagementSystemsReturn()
     * @param \StructType\ExtManagementSystem[] $getManagementSystemsReturn
     */
    public function __construct(array $getManagementSystemsReturn = array())
    {
        $this
            ->setGetManagementSystemsReturn($getManagementSystemsReturn);
    }
    /**
     * Get getManagementSystemsReturn value
     * @return \StructType\ExtManagementSystem[]|null
     */
    public function getGetManagementSystemsReturn()
    {
        return $this->getManagementSystemsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetManagementSystemsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetManagementSystemsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetManagementSystemsReturnForArrayConstraintsFromSetGetManagementSystemsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getManagementSystemsResponseGetManagementSystemsReturnItem) {
            // validation for constraint: itemType
            if (!$getManagementSystemsResponseGetManagementSystemsReturnItem instanceof \StructType\ExtManagementSystem) {
                $invalidValues[] = is_object($getManagementSystemsResponseGetManagementSystemsReturnItem) ? get_class($getManagementSystemsResponseGetManagementSystemsReturnItem) : sprintf('%s(%s)', gettype($getManagementSystemsResponseGetManagementSystemsReturnItem), var_export($getManagementSystemsResponseGetManagementSystemsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getManagementSystemsReturn property can only contain items of type \StructType\ExtManagementSystem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getManagementSystemsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtManagementSystem[] $getManagementSystemsReturn
     * @return \StructType\GetManagementSystemsResponse
     */
    public function setGetManagementSystemsReturn(array $getManagementSystemsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getManagementSystemsReturnArrayErrorMessage = self::validateGetManagementSystemsReturnForArrayConstraintsFromSetGetManagementSystemsReturn($getManagementSystemsReturn))) {
            throw new \InvalidArgumentException($getManagementSystemsReturnArrayErrorMessage, __LINE__);
        }
        $this->getManagementSystemsReturn = $getManagementSystemsReturn;
        return $this;
    }
    /**
     * Add item to getManagementSystemsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtManagementSystem $item
     * @return \StructType\GetManagementSystemsResponse
     */
    public function addToGetManagementSystemsReturn(\StructType\ExtManagementSystem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtManagementSystem) {
            throw new \InvalidArgumentException(sprintf('The getManagementSystemsReturn property can only contain items of type \StructType\ExtManagementSystem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getManagementSystemsReturn[] = $item;
        return $this;
    }
}
