<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceSystemsResponse StructType
 * @subpackage Structs
 */
class GetMaintenanceSystemsResponse extends AbstractStructBase
{
    /**
     * The getMaintenanceSystemsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceSystem[]
     */
    public $getMaintenanceSystemsReturn;
    /**
     * Constructor method for getMaintenanceSystemsResponse
     * @uses GetMaintenanceSystemsResponse::setGetMaintenanceSystemsReturn()
     * @param \StructType\ExtMaintenanceSystem[] $getMaintenanceSystemsReturn
     */
    public function __construct(array $getMaintenanceSystemsReturn = array())
    {
        $this
            ->setGetMaintenanceSystemsReturn($getMaintenanceSystemsReturn);
    }
    /**
     * Get getMaintenanceSystemsReturn value
     * @return \StructType\ExtMaintenanceSystem[]|null
     */
    public function getGetMaintenanceSystemsReturn()
    {
        return $this->getMaintenanceSystemsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceSystemsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceSystemsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceSystemsReturnForArrayConstraintsFromSetGetMaintenanceSystemsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceSystemsResponseGetMaintenanceSystemsReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceSystemsResponseGetMaintenanceSystemsReturnItem instanceof \StructType\ExtMaintenanceSystem) {
                $invalidValues[] = is_object($getMaintenanceSystemsResponseGetMaintenanceSystemsReturnItem) ? get_class($getMaintenanceSystemsResponseGetMaintenanceSystemsReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceSystemsResponseGetMaintenanceSystemsReturnItem), var_export($getMaintenanceSystemsResponseGetMaintenanceSystemsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceSystemsReturn property can only contain items of type \StructType\ExtMaintenanceSystem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceSystemsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystem[] $getMaintenanceSystemsReturn
     * @return \StructType\GetMaintenanceSystemsResponse
     */
    public function setGetMaintenanceSystemsReturn(array $getMaintenanceSystemsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceSystemsReturnArrayErrorMessage = self::validateGetMaintenanceSystemsReturnForArrayConstraintsFromSetGetMaintenanceSystemsReturn($getMaintenanceSystemsReturn))) {
            throw new \InvalidArgumentException($getMaintenanceSystemsReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceSystemsReturn = $getMaintenanceSystemsReturn;
        return $this;
    }
    /**
     * Add item to getMaintenanceSystemsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystem $item
     * @return \StructType\GetMaintenanceSystemsResponse
     */
    public function addToGetMaintenanceSystemsReturn(\StructType\ExtMaintenanceSystem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceSystem) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceSystemsReturn property can only contain items of type \StructType\ExtMaintenanceSystem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceSystemsReturn[] = $item;
        return $this;
    }
}
