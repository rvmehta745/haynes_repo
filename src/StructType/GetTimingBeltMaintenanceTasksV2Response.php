<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTimingBeltMaintenanceTasksV2Response StructType
 * @subpackage Structs
 */
class GetTimingBeltMaintenanceTasksV2Response extends AbstractStructBase
{
    /**
     * The getTimingBeltMaintenanceTasksV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTask[]
     */
    public $getTimingBeltMaintenanceTasksV2Return;
    /**
     * Constructor method for getTimingBeltMaintenanceTasksV2Response
     * @uses GetTimingBeltMaintenanceTasksV2Response::setGetTimingBeltMaintenanceTasksV2Return()
     * @param \StructType\ExtMaintenanceTask[] $getTimingBeltMaintenanceTasksV2Return
     */
    public function __construct(array $getTimingBeltMaintenanceTasksV2Return = array())
    {
        $this
            ->setGetTimingBeltMaintenanceTasksV2Return($getTimingBeltMaintenanceTasksV2Return);
    }
    /**
     * Get getTimingBeltMaintenanceTasksV2Return value
     * @return \StructType\ExtMaintenanceTask[]|null
     */
    public function getGetTimingBeltMaintenanceTasksV2Return()
    {
        return $this->getTimingBeltMaintenanceTasksV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTimingBeltMaintenanceTasksV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTimingBeltMaintenanceTasksV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTimingBeltMaintenanceTasksV2ReturnForArrayConstraintsFromSetGetTimingBeltMaintenanceTasksV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTimingBeltMaintenanceTasksV2ResponseGetTimingBeltMaintenanceTasksV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getTimingBeltMaintenanceTasksV2ResponseGetTimingBeltMaintenanceTasksV2ReturnItem instanceof \StructType\ExtMaintenanceTask) {
                $invalidValues[] = is_object($getTimingBeltMaintenanceTasksV2ResponseGetTimingBeltMaintenanceTasksV2ReturnItem) ? get_class($getTimingBeltMaintenanceTasksV2ResponseGetTimingBeltMaintenanceTasksV2ReturnItem) : sprintf('%s(%s)', gettype($getTimingBeltMaintenanceTasksV2ResponseGetTimingBeltMaintenanceTasksV2ReturnItem), var_export($getTimingBeltMaintenanceTasksV2ResponseGetTimingBeltMaintenanceTasksV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getTimingBeltMaintenanceTasksV2Return property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getTimingBeltMaintenanceTasksV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask[] $getTimingBeltMaintenanceTasksV2Return
     * @return \StructType\GetTimingBeltMaintenanceTasksV2Response
     */
    public function setGetTimingBeltMaintenanceTasksV2Return(array $getTimingBeltMaintenanceTasksV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getTimingBeltMaintenanceTasksV2ReturnArrayErrorMessage = self::validateGetTimingBeltMaintenanceTasksV2ReturnForArrayConstraintsFromSetGetTimingBeltMaintenanceTasksV2Return($getTimingBeltMaintenanceTasksV2Return))) {
            throw new \InvalidArgumentException($getTimingBeltMaintenanceTasksV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getTimingBeltMaintenanceTasksV2Return = $getTimingBeltMaintenanceTasksV2Return;
        return $this;
    }
    /**
     * Add item to getTimingBeltMaintenanceTasksV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask $item
     * @return \StructType\GetTimingBeltMaintenanceTasksV2Response
     */
    public function addToGetTimingBeltMaintenanceTasksV2Return(\StructType\ExtMaintenanceTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTask) {
            throw new \InvalidArgumentException(sprintf('The getTimingBeltMaintenanceTasksV2Return property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getTimingBeltMaintenanceTasksV2Return[] = $item;
        return $this;
    }
}
