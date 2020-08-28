<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksV7Response StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksV7Response extends AbstractStructBase
{
    /**
     * The getMaintenanceTasksV7Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTaskV7[]
     */
    public $getMaintenanceTasksV7Return;
    /**
     * Constructor method for getMaintenanceTasksV7Response
     * @uses GetMaintenanceTasksV7Response::setGetMaintenanceTasksV7Return()
     * @param \StructType\ExtMaintenanceTaskV7[] $getMaintenanceTasksV7Return
     */
    public function __construct(array $getMaintenanceTasksV7Return = array())
    {
        $this
            ->setGetMaintenanceTasksV7Return($getMaintenanceTasksV7Return);
    }
    /**
     * Get getMaintenanceTasksV7Return value
     * @return \StructType\ExtMaintenanceTaskV7[]|null
     */
    public function getGetMaintenanceTasksV7Return()
    {
        return $this->getMaintenanceTasksV7Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceTasksV7Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceTasksV7Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceTasksV7ReturnForArrayConstraintsFromSetGetMaintenanceTasksV7Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksV7ResponseGetMaintenanceTasksV7ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceTasksV7ResponseGetMaintenanceTasksV7ReturnItem instanceof \StructType\ExtMaintenanceTaskV7) {
                $invalidValues[] = is_object($getMaintenanceTasksV7ResponseGetMaintenanceTasksV7ReturnItem) ? get_class($getMaintenanceTasksV7ResponseGetMaintenanceTasksV7ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksV7ResponseGetMaintenanceTasksV7ReturnItem), var_export($getMaintenanceTasksV7ResponseGetMaintenanceTasksV7ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceTasksV7Return property can only contain items of type \StructType\ExtMaintenanceTaskV7, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceTasksV7Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV7[] $getMaintenanceTasksV7Return
     * @return \StructType\GetMaintenanceTasksV7Response
     */
    public function setGetMaintenanceTasksV7Return(array $getMaintenanceTasksV7Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceTasksV7ReturnArrayErrorMessage = self::validateGetMaintenanceTasksV7ReturnForArrayConstraintsFromSetGetMaintenanceTasksV7Return($getMaintenanceTasksV7Return))) {
            throw new \InvalidArgumentException($getMaintenanceTasksV7ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceTasksV7Return = $getMaintenanceTasksV7Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceTasksV7Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV7 $item
     * @return \StructType\GetMaintenanceTasksV7Response
     */
    public function addToGetMaintenanceTasksV7Return(\StructType\ExtMaintenanceTaskV7 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTaskV7) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceTasksV7Return property can only contain items of type \StructType\ExtMaintenanceTaskV7, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceTasksV7Return[] = $item;
        return $this;
    }
}
