<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksWithSmartLinksAndTimesV2Response
 * StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksWithSmartLinksAndTimesV2Response extends AbstractStructBase
{
    /**
     * The getMaintenanceTasksWithSmartLinksAndTimesV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTask[]
     */
    public $getMaintenanceTasksWithSmartLinksAndTimesV2Return;
    /**
     * Constructor method for getMaintenanceTasksWithSmartLinksAndTimesV2Response
     * @uses GetMaintenanceTasksWithSmartLinksAndTimesV2Response::setGetMaintenanceTasksWithSmartLinksAndTimesV2Return()
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksWithSmartLinksAndTimesV2Return
     */
    public function __construct(array $getMaintenanceTasksWithSmartLinksAndTimesV2Return = array())
    {
        $this
            ->setGetMaintenanceTasksWithSmartLinksAndTimesV2Return($getMaintenanceTasksWithSmartLinksAndTimesV2Return);
    }
    /**
     * Get getMaintenanceTasksWithSmartLinksAndTimesV2Return value
     * @return \StructType\ExtMaintenanceTask[]|null
     */
    public function getGetMaintenanceTasksWithSmartLinksAndTimesV2Return()
    {
        return $this->getMaintenanceTasksWithSmartLinksAndTimesV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceTasksWithSmartLinksAndTimesV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceTasksWithSmartLinksAndTimesV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceTasksWithSmartLinksAndTimesV2ReturnForArrayConstraintsFromSetGetMaintenanceTasksWithSmartLinksAndTimesV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksWithSmartLinksAndTimesV2ResponseGetMaintenanceTasksWithSmartLinksAndTimesV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceTasksWithSmartLinksAndTimesV2ResponseGetMaintenanceTasksWithSmartLinksAndTimesV2ReturnItem instanceof \StructType\ExtMaintenanceTask) {
                $invalidValues[] = is_object($getMaintenanceTasksWithSmartLinksAndTimesV2ResponseGetMaintenanceTasksWithSmartLinksAndTimesV2ReturnItem) ? get_class($getMaintenanceTasksWithSmartLinksAndTimesV2ResponseGetMaintenanceTasksWithSmartLinksAndTimesV2ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksWithSmartLinksAndTimesV2ResponseGetMaintenanceTasksWithSmartLinksAndTimesV2ReturnItem), var_export($getMaintenanceTasksWithSmartLinksAndTimesV2ResponseGetMaintenanceTasksWithSmartLinksAndTimesV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceTasksWithSmartLinksAndTimesV2Return property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceTasksWithSmartLinksAndTimesV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksWithSmartLinksAndTimesV2Return
     * @return \StructType\GetMaintenanceTasksWithSmartLinksAndTimesV2Response
     */
    public function setGetMaintenanceTasksWithSmartLinksAndTimesV2Return(array $getMaintenanceTasksWithSmartLinksAndTimesV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceTasksWithSmartLinksAndTimesV2ReturnArrayErrorMessage = self::validateGetMaintenanceTasksWithSmartLinksAndTimesV2ReturnForArrayConstraintsFromSetGetMaintenanceTasksWithSmartLinksAndTimesV2Return($getMaintenanceTasksWithSmartLinksAndTimesV2Return))) {
            throw new \InvalidArgumentException($getMaintenanceTasksWithSmartLinksAndTimesV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceTasksWithSmartLinksAndTimesV2Return = $getMaintenanceTasksWithSmartLinksAndTimesV2Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceTasksWithSmartLinksAndTimesV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask $item
     * @return \StructType\GetMaintenanceTasksWithSmartLinksAndTimesV2Response
     */
    public function addToGetMaintenanceTasksWithSmartLinksAndTimesV2Return(\StructType\ExtMaintenanceTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTask) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceTasksWithSmartLinksAndTimesV2Return property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceTasksWithSmartLinksAndTimesV2Return[] = $item;
        return $this;
    }
}
