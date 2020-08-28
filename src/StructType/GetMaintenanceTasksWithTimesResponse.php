<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksWithTimesResponse StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksWithTimesResponse extends AbstractStructBase
{
    /**
     * The getMaintenanceTasksWithTimesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTask[]
     */
    public $getMaintenanceTasksWithTimesReturn;
    /**
     * Constructor method for getMaintenanceTasksWithTimesResponse
     * @uses GetMaintenanceTasksWithTimesResponse::setGetMaintenanceTasksWithTimesReturn()
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksWithTimesReturn
     */
    public function __construct(array $getMaintenanceTasksWithTimesReturn = array())
    {
        $this
            ->setGetMaintenanceTasksWithTimesReturn($getMaintenanceTasksWithTimesReturn);
    }
    /**
     * Get getMaintenanceTasksWithTimesReturn value
     * @return \StructType\ExtMaintenanceTask[]|null
     */
    public function getGetMaintenanceTasksWithTimesReturn()
    {
        return $this->getMaintenanceTasksWithTimesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceTasksWithTimesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceTasksWithTimesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceTasksWithTimesReturnForArrayConstraintsFromSetGetMaintenanceTasksWithTimesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksWithTimesResponseGetMaintenanceTasksWithTimesReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceTasksWithTimesResponseGetMaintenanceTasksWithTimesReturnItem instanceof \StructType\ExtMaintenanceTask) {
                $invalidValues[] = is_object($getMaintenanceTasksWithTimesResponseGetMaintenanceTasksWithTimesReturnItem) ? get_class($getMaintenanceTasksWithTimesResponseGetMaintenanceTasksWithTimesReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksWithTimesResponseGetMaintenanceTasksWithTimesReturnItem), var_export($getMaintenanceTasksWithTimesResponseGetMaintenanceTasksWithTimesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceTasksWithTimesReturn property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceTasksWithTimesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksWithTimesReturn
     * @return \StructType\GetMaintenanceTasksWithTimesResponse
     */
    public function setGetMaintenanceTasksWithTimesReturn(array $getMaintenanceTasksWithTimesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceTasksWithTimesReturnArrayErrorMessage = self::validateGetMaintenanceTasksWithTimesReturnForArrayConstraintsFromSetGetMaintenanceTasksWithTimesReturn($getMaintenanceTasksWithTimesReturn))) {
            throw new \InvalidArgumentException($getMaintenanceTasksWithTimesReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceTasksWithTimesReturn = $getMaintenanceTasksWithTimesReturn;
        return $this;
    }
    /**
     * Add item to getMaintenanceTasksWithTimesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask $item
     * @return \StructType\GetMaintenanceTasksWithTimesResponse
     */
    public function addToGetMaintenanceTasksWithTimesReturn(\StructType\ExtMaintenanceTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTask) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceTasksWithTimesReturn property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceTasksWithTimesReturn[] = $item;
        return $this;
    }
}
