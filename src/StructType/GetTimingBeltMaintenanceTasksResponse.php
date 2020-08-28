<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTimingBeltMaintenanceTasksResponse StructType
 * @subpackage Structs
 */
class GetTimingBeltMaintenanceTasksResponse extends AbstractStructBase
{
    /**
     * The getTimingBeltMaintenanceTasksReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTask[]
     */
    public $getTimingBeltMaintenanceTasksReturn;
    /**
     * Constructor method for getTimingBeltMaintenanceTasksResponse
     * @uses GetTimingBeltMaintenanceTasksResponse::setGetTimingBeltMaintenanceTasksReturn()
     * @param \StructType\ExtMaintenanceTask[] $getTimingBeltMaintenanceTasksReturn
     */
    public function __construct(array $getTimingBeltMaintenanceTasksReturn = array())
    {
        $this
            ->setGetTimingBeltMaintenanceTasksReturn($getTimingBeltMaintenanceTasksReturn);
    }
    /**
     * Get getTimingBeltMaintenanceTasksReturn value
     * @return \StructType\ExtMaintenanceTask[]|null
     */
    public function getGetTimingBeltMaintenanceTasksReturn()
    {
        return $this->getTimingBeltMaintenanceTasksReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTimingBeltMaintenanceTasksReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTimingBeltMaintenanceTasksReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTimingBeltMaintenanceTasksReturnForArrayConstraintsFromSetGetTimingBeltMaintenanceTasksReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTimingBeltMaintenanceTasksResponseGetTimingBeltMaintenanceTasksReturnItem) {
            // validation for constraint: itemType
            if (!$getTimingBeltMaintenanceTasksResponseGetTimingBeltMaintenanceTasksReturnItem instanceof \StructType\ExtMaintenanceTask) {
                $invalidValues[] = is_object($getTimingBeltMaintenanceTasksResponseGetTimingBeltMaintenanceTasksReturnItem) ? get_class($getTimingBeltMaintenanceTasksResponseGetTimingBeltMaintenanceTasksReturnItem) : sprintf('%s(%s)', gettype($getTimingBeltMaintenanceTasksResponseGetTimingBeltMaintenanceTasksReturnItem), var_export($getTimingBeltMaintenanceTasksResponseGetTimingBeltMaintenanceTasksReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getTimingBeltMaintenanceTasksReturn property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getTimingBeltMaintenanceTasksReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask[] $getTimingBeltMaintenanceTasksReturn
     * @return \StructType\GetTimingBeltMaintenanceTasksResponse
     */
    public function setGetTimingBeltMaintenanceTasksReturn(array $getTimingBeltMaintenanceTasksReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getTimingBeltMaintenanceTasksReturnArrayErrorMessage = self::validateGetTimingBeltMaintenanceTasksReturnForArrayConstraintsFromSetGetTimingBeltMaintenanceTasksReturn($getTimingBeltMaintenanceTasksReturn))) {
            throw new \InvalidArgumentException($getTimingBeltMaintenanceTasksReturnArrayErrorMessage, __LINE__);
        }
        $this->getTimingBeltMaintenanceTasksReturn = $getTimingBeltMaintenanceTasksReturn;
        return $this;
    }
    /**
     * Add item to getTimingBeltMaintenanceTasksReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask $item
     * @return \StructType\GetTimingBeltMaintenanceTasksResponse
     */
    public function addToGetTimingBeltMaintenanceTasksReturn(\StructType\ExtMaintenanceTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTask) {
            throw new \InvalidArgumentException(sprintf('The getTimingBeltMaintenanceTasksReturn property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getTimingBeltMaintenanceTasksReturn[] = $item;
        return $this;
    }
}
