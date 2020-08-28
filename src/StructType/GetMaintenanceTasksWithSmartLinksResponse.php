<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksWithSmartLinksResponse StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksWithSmartLinksResponse extends AbstractStructBase
{
    /**
     * The getMaintenanceTasksWithSmartLinksReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTask[]
     */
    public $getMaintenanceTasksWithSmartLinksReturn;
    /**
     * Constructor method for getMaintenanceTasksWithSmartLinksResponse
     * @uses GetMaintenanceTasksWithSmartLinksResponse::setGetMaintenanceTasksWithSmartLinksReturn()
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksWithSmartLinksReturn
     */
    public function __construct(array $getMaintenanceTasksWithSmartLinksReturn = array())
    {
        $this
            ->setGetMaintenanceTasksWithSmartLinksReturn($getMaintenanceTasksWithSmartLinksReturn);
    }
    /**
     * Get getMaintenanceTasksWithSmartLinksReturn value
     * @return \StructType\ExtMaintenanceTask[]|null
     */
    public function getGetMaintenanceTasksWithSmartLinksReturn()
    {
        return $this->getMaintenanceTasksWithSmartLinksReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceTasksWithSmartLinksReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceTasksWithSmartLinksReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceTasksWithSmartLinksReturnForArrayConstraintsFromSetGetMaintenanceTasksWithSmartLinksReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksWithSmartLinksResponseGetMaintenanceTasksWithSmartLinksReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceTasksWithSmartLinksResponseGetMaintenanceTasksWithSmartLinksReturnItem instanceof \StructType\ExtMaintenanceTask) {
                $invalidValues[] = is_object($getMaintenanceTasksWithSmartLinksResponseGetMaintenanceTasksWithSmartLinksReturnItem) ? get_class($getMaintenanceTasksWithSmartLinksResponseGetMaintenanceTasksWithSmartLinksReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksWithSmartLinksResponseGetMaintenanceTasksWithSmartLinksReturnItem), var_export($getMaintenanceTasksWithSmartLinksResponseGetMaintenanceTasksWithSmartLinksReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceTasksWithSmartLinksReturn property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceTasksWithSmartLinksReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksWithSmartLinksReturn
     * @return \StructType\GetMaintenanceTasksWithSmartLinksResponse
     */
    public function setGetMaintenanceTasksWithSmartLinksReturn(array $getMaintenanceTasksWithSmartLinksReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceTasksWithSmartLinksReturnArrayErrorMessage = self::validateGetMaintenanceTasksWithSmartLinksReturnForArrayConstraintsFromSetGetMaintenanceTasksWithSmartLinksReturn($getMaintenanceTasksWithSmartLinksReturn))) {
            throw new \InvalidArgumentException($getMaintenanceTasksWithSmartLinksReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceTasksWithSmartLinksReturn = $getMaintenanceTasksWithSmartLinksReturn;
        return $this;
    }
    /**
     * Add item to getMaintenanceTasksWithSmartLinksReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask $item
     * @return \StructType\GetMaintenanceTasksWithSmartLinksResponse
     */
    public function addToGetMaintenanceTasksWithSmartLinksReturn(\StructType\ExtMaintenanceTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTask) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceTasksWithSmartLinksReturn property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceTasksWithSmartLinksReturn[] = $item;
        return $this;
    }
}
