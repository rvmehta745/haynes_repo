<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksWithTimesV2Response StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksWithTimesV2Response extends AbstractStructBase
{
    /**
     * The getMaintenanceTasksWithTimesV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTask[]
     */
    public $getMaintenanceTasksWithTimesV2Return;
    /**
     * Constructor method for getMaintenanceTasksWithTimesV2Response
     * @uses GetMaintenanceTasksWithTimesV2Response::setGetMaintenanceTasksWithTimesV2Return()
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksWithTimesV2Return
     */
    public function __construct(array $getMaintenanceTasksWithTimesV2Return = array())
    {
        $this
            ->setGetMaintenanceTasksWithTimesV2Return($getMaintenanceTasksWithTimesV2Return);
    }
    /**
     * Get getMaintenanceTasksWithTimesV2Return value
     * @return \StructType\ExtMaintenanceTask[]|null
     */
    public function getGetMaintenanceTasksWithTimesV2Return()
    {
        return $this->getMaintenanceTasksWithTimesV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceTasksWithTimesV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceTasksWithTimesV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceTasksWithTimesV2ReturnForArrayConstraintsFromSetGetMaintenanceTasksWithTimesV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksWithTimesV2ResponseGetMaintenanceTasksWithTimesV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceTasksWithTimesV2ResponseGetMaintenanceTasksWithTimesV2ReturnItem instanceof \StructType\ExtMaintenanceTask) {
                $invalidValues[] = is_object($getMaintenanceTasksWithTimesV2ResponseGetMaintenanceTasksWithTimesV2ReturnItem) ? get_class($getMaintenanceTasksWithTimesV2ResponseGetMaintenanceTasksWithTimesV2ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksWithTimesV2ResponseGetMaintenanceTasksWithTimesV2ReturnItem), var_export($getMaintenanceTasksWithTimesV2ResponseGetMaintenanceTasksWithTimesV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceTasksWithTimesV2Return property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceTasksWithTimesV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksWithTimesV2Return
     * @return \StructType\GetMaintenanceTasksWithTimesV2Response
     */
    public function setGetMaintenanceTasksWithTimesV2Return(array $getMaintenanceTasksWithTimesV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceTasksWithTimesV2ReturnArrayErrorMessage = self::validateGetMaintenanceTasksWithTimesV2ReturnForArrayConstraintsFromSetGetMaintenanceTasksWithTimesV2Return($getMaintenanceTasksWithTimesV2Return))) {
            throw new \InvalidArgumentException($getMaintenanceTasksWithTimesV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceTasksWithTimesV2Return = $getMaintenanceTasksWithTimesV2Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceTasksWithTimesV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask $item
     * @return \StructType\GetMaintenanceTasksWithTimesV2Response
     */
    public function addToGetMaintenanceTasksWithTimesV2Return(\StructType\ExtMaintenanceTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTask) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceTasksWithTimesV2Return property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceTasksWithTimesV2Return[] = $item;
        return $this;
    }
}
