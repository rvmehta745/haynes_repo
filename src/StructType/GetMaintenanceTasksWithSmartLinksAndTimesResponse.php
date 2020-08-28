<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksWithSmartLinksAndTimesResponse
 * StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksWithSmartLinksAndTimesResponse extends AbstractStructBase
{
    /**
     * The getMaintenanceTasksWithSmartLinksAndTimesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTask[]
     */
    public $getMaintenanceTasksWithSmartLinksAndTimesReturn;
    /**
     * Constructor method for getMaintenanceTasksWithSmartLinksAndTimesResponse
     * @uses GetMaintenanceTasksWithSmartLinksAndTimesResponse::setGetMaintenanceTasksWithSmartLinksAndTimesReturn()
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksWithSmartLinksAndTimesReturn
     */
    public function __construct(array $getMaintenanceTasksWithSmartLinksAndTimesReturn = array())
    {
        $this
            ->setGetMaintenanceTasksWithSmartLinksAndTimesReturn($getMaintenanceTasksWithSmartLinksAndTimesReturn);
    }
    /**
     * Get getMaintenanceTasksWithSmartLinksAndTimesReturn value
     * @return \StructType\ExtMaintenanceTask[]|null
     */
    public function getGetMaintenanceTasksWithSmartLinksAndTimesReturn()
    {
        return $this->getMaintenanceTasksWithSmartLinksAndTimesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceTasksWithSmartLinksAndTimesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceTasksWithSmartLinksAndTimesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceTasksWithSmartLinksAndTimesReturnForArrayConstraintsFromSetGetMaintenanceTasksWithSmartLinksAndTimesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksWithSmartLinksAndTimesResponseGetMaintenanceTasksWithSmartLinksAndTimesReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceTasksWithSmartLinksAndTimesResponseGetMaintenanceTasksWithSmartLinksAndTimesReturnItem instanceof \StructType\ExtMaintenanceTask) {
                $invalidValues[] = is_object($getMaintenanceTasksWithSmartLinksAndTimesResponseGetMaintenanceTasksWithSmartLinksAndTimesReturnItem) ? get_class($getMaintenanceTasksWithSmartLinksAndTimesResponseGetMaintenanceTasksWithSmartLinksAndTimesReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksWithSmartLinksAndTimesResponseGetMaintenanceTasksWithSmartLinksAndTimesReturnItem), var_export($getMaintenanceTasksWithSmartLinksAndTimesResponseGetMaintenanceTasksWithSmartLinksAndTimesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceTasksWithSmartLinksAndTimesReturn property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceTasksWithSmartLinksAndTimesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksWithSmartLinksAndTimesReturn
     * @return \StructType\GetMaintenanceTasksWithSmartLinksAndTimesResponse
     */
    public function setGetMaintenanceTasksWithSmartLinksAndTimesReturn(array $getMaintenanceTasksWithSmartLinksAndTimesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceTasksWithSmartLinksAndTimesReturnArrayErrorMessage = self::validateGetMaintenanceTasksWithSmartLinksAndTimesReturnForArrayConstraintsFromSetGetMaintenanceTasksWithSmartLinksAndTimesReturn($getMaintenanceTasksWithSmartLinksAndTimesReturn))) {
            throw new \InvalidArgumentException($getMaintenanceTasksWithSmartLinksAndTimesReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceTasksWithSmartLinksAndTimesReturn = $getMaintenanceTasksWithSmartLinksAndTimesReturn;
        return $this;
    }
    /**
     * Add item to getMaintenanceTasksWithSmartLinksAndTimesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask $item
     * @return \StructType\GetMaintenanceTasksWithSmartLinksAndTimesResponse
     */
    public function addToGetMaintenanceTasksWithSmartLinksAndTimesReturn(\StructType\ExtMaintenanceTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTask) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceTasksWithSmartLinksAndTimesReturn property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceTasksWithSmartLinksAndTimesReturn[] = $item;
        return $this;
    }
}
