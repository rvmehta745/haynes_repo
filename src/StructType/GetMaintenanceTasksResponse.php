<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksResponse StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksResponse extends AbstractStructBase
{
    /**
     * The getMaintenanceTasksReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTask[]
     */
    public $getMaintenanceTasksReturn;
    /**
     * Constructor method for getMaintenanceTasksResponse
     * @uses GetMaintenanceTasksResponse::setGetMaintenanceTasksReturn()
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksReturn
     */
    public function __construct(array $getMaintenanceTasksReturn = array())
    {
        $this
            ->setGetMaintenanceTasksReturn($getMaintenanceTasksReturn);
    }
    /**
     * Get getMaintenanceTasksReturn value
     * @return \StructType\ExtMaintenanceTask[]|null
     */
    public function getGetMaintenanceTasksReturn()
    {
        return $this->getMaintenanceTasksReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceTasksReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceTasksReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceTasksReturnForArrayConstraintsFromSetGetMaintenanceTasksReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksResponseGetMaintenanceTasksReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceTasksResponseGetMaintenanceTasksReturnItem instanceof \StructType\ExtMaintenanceTask) {
                $invalidValues[] = is_object($getMaintenanceTasksResponseGetMaintenanceTasksReturnItem) ? get_class($getMaintenanceTasksResponseGetMaintenanceTasksReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksResponseGetMaintenanceTasksReturnItem), var_export($getMaintenanceTasksResponseGetMaintenanceTasksReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceTasksReturn property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceTasksReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksReturn
     * @return \StructType\GetMaintenanceTasksResponse
     */
    public function setGetMaintenanceTasksReturn(array $getMaintenanceTasksReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceTasksReturnArrayErrorMessage = self::validateGetMaintenanceTasksReturnForArrayConstraintsFromSetGetMaintenanceTasksReturn($getMaintenanceTasksReturn))) {
            throw new \InvalidArgumentException($getMaintenanceTasksReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceTasksReturn = $getMaintenanceTasksReturn;
        return $this;
    }
    /**
     * Add item to getMaintenanceTasksReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask $item
     * @return \StructType\GetMaintenanceTasksResponse
     */
    public function addToGetMaintenanceTasksReturn(\StructType\ExtMaintenanceTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTask) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceTasksReturn property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceTasksReturn[] = $item;
        return $this;
    }
}
