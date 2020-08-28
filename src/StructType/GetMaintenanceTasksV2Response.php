<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksV2Response StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksV2Response extends AbstractStructBase
{
    /**
     * The getMaintenanceTasksV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTask[]
     */
    public $getMaintenanceTasksV2Return;
    /**
     * Constructor method for getMaintenanceTasksV2Response
     * @uses GetMaintenanceTasksV2Response::setGetMaintenanceTasksV2Return()
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksV2Return
     */
    public function __construct(array $getMaintenanceTasksV2Return = array())
    {
        $this
            ->setGetMaintenanceTasksV2Return($getMaintenanceTasksV2Return);
    }
    /**
     * Get getMaintenanceTasksV2Return value
     * @return \StructType\ExtMaintenanceTask[]|null
     */
    public function getGetMaintenanceTasksV2Return()
    {
        return $this->getMaintenanceTasksV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceTasksV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceTasksV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceTasksV2ReturnForArrayConstraintsFromSetGetMaintenanceTasksV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksV2ResponseGetMaintenanceTasksV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceTasksV2ResponseGetMaintenanceTasksV2ReturnItem instanceof \StructType\ExtMaintenanceTask) {
                $invalidValues[] = is_object($getMaintenanceTasksV2ResponseGetMaintenanceTasksV2ReturnItem) ? get_class($getMaintenanceTasksV2ResponseGetMaintenanceTasksV2ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksV2ResponseGetMaintenanceTasksV2ReturnItem), var_export($getMaintenanceTasksV2ResponseGetMaintenanceTasksV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceTasksV2Return property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceTasksV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksV2Return
     * @return \StructType\GetMaintenanceTasksV2Response
     */
    public function setGetMaintenanceTasksV2Return(array $getMaintenanceTasksV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceTasksV2ReturnArrayErrorMessage = self::validateGetMaintenanceTasksV2ReturnForArrayConstraintsFromSetGetMaintenanceTasksV2Return($getMaintenanceTasksV2Return))) {
            throw new \InvalidArgumentException($getMaintenanceTasksV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceTasksV2Return = $getMaintenanceTasksV2Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceTasksV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask $item
     * @return \StructType\GetMaintenanceTasksV2Response
     */
    public function addToGetMaintenanceTasksV2Return(\StructType\ExtMaintenanceTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTask) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceTasksV2Return property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceTasksV2Return[] = $item;
        return $this;
    }
}
