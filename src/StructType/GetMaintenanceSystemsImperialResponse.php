<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceSystemsImperialResponse StructType
 * @subpackage Structs
 */
class GetMaintenanceSystemsImperialResponse extends AbstractStructBase
{
    /**
     * The getMaintenanceSystemsImperialReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceSystem[]
     */
    public $getMaintenanceSystemsImperialReturn;
    /**
     * Constructor method for getMaintenanceSystemsImperialResponse
     * @uses GetMaintenanceSystemsImperialResponse::setGetMaintenanceSystemsImperialReturn()
     * @param \StructType\ExtMaintenanceSystem[] $getMaintenanceSystemsImperialReturn
     */
    public function __construct(array $getMaintenanceSystemsImperialReturn = array())
    {
        $this
            ->setGetMaintenanceSystemsImperialReturn($getMaintenanceSystemsImperialReturn);
    }
    /**
     * Get getMaintenanceSystemsImperialReturn value
     * @return \StructType\ExtMaintenanceSystem[]|null
     */
    public function getGetMaintenanceSystemsImperialReturn()
    {
        return $this->getMaintenanceSystemsImperialReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceSystemsImperialReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceSystemsImperialReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceSystemsImperialReturnForArrayConstraintsFromSetGetMaintenanceSystemsImperialReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceSystemsImperialResponseGetMaintenanceSystemsImperialReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceSystemsImperialResponseGetMaintenanceSystemsImperialReturnItem instanceof \StructType\ExtMaintenanceSystem) {
                $invalidValues[] = is_object($getMaintenanceSystemsImperialResponseGetMaintenanceSystemsImperialReturnItem) ? get_class($getMaintenanceSystemsImperialResponseGetMaintenanceSystemsImperialReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceSystemsImperialResponseGetMaintenanceSystemsImperialReturnItem), var_export($getMaintenanceSystemsImperialResponseGetMaintenanceSystemsImperialReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceSystemsImperialReturn property can only contain items of type \StructType\ExtMaintenanceSystem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceSystemsImperialReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystem[] $getMaintenanceSystemsImperialReturn
     * @return \StructType\GetMaintenanceSystemsImperialResponse
     */
    public function setGetMaintenanceSystemsImperialReturn(array $getMaintenanceSystemsImperialReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceSystemsImperialReturnArrayErrorMessage = self::validateGetMaintenanceSystemsImperialReturnForArrayConstraintsFromSetGetMaintenanceSystemsImperialReturn($getMaintenanceSystemsImperialReturn))) {
            throw new \InvalidArgumentException($getMaintenanceSystemsImperialReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceSystemsImperialReturn = $getMaintenanceSystemsImperialReturn;
        return $this;
    }
    /**
     * Add item to getMaintenanceSystemsImperialReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystem $item
     * @return \StructType\GetMaintenanceSystemsImperialResponse
     */
    public function addToGetMaintenanceSystemsImperialReturn(\StructType\ExtMaintenanceSystem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceSystem) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceSystemsImperialReturn property can only contain items of type \StructType\ExtMaintenanceSystem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceSystemsImperialReturn[] = $item;
        return $this;
    }
}
