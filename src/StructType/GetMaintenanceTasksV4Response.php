<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksV4Response StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksV4Response extends AbstractStructBase
{
    /**
     * The getMaintenanceTasksV4Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTaskV4[]
     */
    public $getMaintenanceTasksV4Return;
    /**
     * Constructor method for getMaintenanceTasksV4Response
     * @uses GetMaintenanceTasksV4Response::setGetMaintenanceTasksV4Return()
     * @param \StructType\ExtMaintenanceTaskV4[] $getMaintenanceTasksV4Return
     */
    public function __construct(array $getMaintenanceTasksV4Return = array())
    {
        $this
            ->setGetMaintenanceTasksV4Return($getMaintenanceTasksV4Return);
    }
    /**
     * Get getMaintenanceTasksV4Return value
     * @return \StructType\ExtMaintenanceTaskV4[]|null
     */
    public function getGetMaintenanceTasksV4Return()
    {
        return $this->getMaintenanceTasksV4Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceTasksV4Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceTasksV4Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceTasksV4ReturnForArrayConstraintsFromSetGetMaintenanceTasksV4Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksV4ResponseGetMaintenanceTasksV4ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceTasksV4ResponseGetMaintenanceTasksV4ReturnItem instanceof \StructType\ExtMaintenanceTaskV4) {
                $invalidValues[] = is_object($getMaintenanceTasksV4ResponseGetMaintenanceTasksV4ReturnItem) ? get_class($getMaintenanceTasksV4ResponseGetMaintenanceTasksV4ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksV4ResponseGetMaintenanceTasksV4ReturnItem), var_export($getMaintenanceTasksV4ResponseGetMaintenanceTasksV4ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceTasksV4Return property can only contain items of type \StructType\ExtMaintenanceTaskV4, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceTasksV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV4[] $getMaintenanceTasksV4Return
     * @return \StructType\GetMaintenanceTasksV4Response
     */
    public function setGetMaintenanceTasksV4Return(array $getMaintenanceTasksV4Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceTasksV4ReturnArrayErrorMessage = self::validateGetMaintenanceTasksV4ReturnForArrayConstraintsFromSetGetMaintenanceTasksV4Return($getMaintenanceTasksV4Return))) {
            throw new \InvalidArgumentException($getMaintenanceTasksV4ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceTasksV4Return = $getMaintenanceTasksV4Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceTasksV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV4 $item
     * @return \StructType\GetMaintenanceTasksV4Response
     */
    public function addToGetMaintenanceTasksV4Return(\StructType\ExtMaintenanceTaskV4 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTaskV4) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceTasksV4Return property can only contain items of type \StructType\ExtMaintenanceTaskV4, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceTasksV4Return[] = $item;
        return $this;
    }
}
