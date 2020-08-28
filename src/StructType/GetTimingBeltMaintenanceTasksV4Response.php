<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTimingBeltMaintenanceTasksV4Response StructType
 * @subpackage Structs
 */
class GetTimingBeltMaintenanceTasksV4Response extends AbstractStructBase
{
    /**
     * The getTimingBeltMaintenanceTasksV4Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTaskV4[]
     */
    public $getTimingBeltMaintenanceTasksV4Return;
    /**
     * Constructor method for getTimingBeltMaintenanceTasksV4Response
     * @uses GetTimingBeltMaintenanceTasksV4Response::setGetTimingBeltMaintenanceTasksV4Return()
     * @param \StructType\ExtMaintenanceTaskV4[] $getTimingBeltMaintenanceTasksV4Return
     */
    public function __construct(array $getTimingBeltMaintenanceTasksV4Return = array())
    {
        $this
            ->setGetTimingBeltMaintenanceTasksV4Return($getTimingBeltMaintenanceTasksV4Return);
    }
    /**
     * Get getTimingBeltMaintenanceTasksV4Return value
     * @return \StructType\ExtMaintenanceTaskV4[]|null
     */
    public function getGetTimingBeltMaintenanceTasksV4Return()
    {
        return $this->getTimingBeltMaintenanceTasksV4Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTimingBeltMaintenanceTasksV4Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTimingBeltMaintenanceTasksV4Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTimingBeltMaintenanceTasksV4ReturnForArrayConstraintsFromSetGetTimingBeltMaintenanceTasksV4Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTimingBeltMaintenanceTasksV4ResponseGetTimingBeltMaintenanceTasksV4ReturnItem) {
            // validation for constraint: itemType
            if (!$getTimingBeltMaintenanceTasksV4ResponseGetTimingBeltMaintenanceTasksV4ReturnItem instanceof \StructType\ExtMaintenanceTaskV4) {
                $invalidValues[] = is_object($getTimingBeltMaintenanceTasksV4ResponseGetTimingBeltMaintenanceTasksV4ReturnItem) ? get_class($getTimingBeltMaintenanceTasksV4ResponseGetTimingBeltMaintenanceTasksV4ReturnItem) : sprintf('%s(%s)', gettype($getTimingBeltMaintenanceTasksV4ResponseGetTimingBeltMaintenanceTasksV4ReturnItem), var_export($getTimingBeltMaintenanceTasksV4ResponseGetTimingBeltMaintenanceTasksV4ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getTimingBeltMaintenanceTasksV4Return property can only contain items of type \StructType\ExtMaintenanceTaskV4, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getTimingBeltMaintenanceTasksV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV4[] $getTimingBeltMaintenanceTasksV4Return
     * @return \StructType\GetTimingBeltMaintenanceTasksV4Response
     */
    public function setGetTimingBeltMaintenanceTasksV4Return(array $getTimingBeltMaintenanceTasksV4Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getTimingBeltMaintenanceTasksV4ReturnArrayErrorMessage = self::validateGetTimingBeltMaintenanceTasksV4ReturnForArrayConstraintsFromSetGetTimingBeltMaintenanceTasksV4Return($getTimingBeltMaintenanceTasksV4Return))) {
            throw new \InvalidArgumentException($getTimingBeltMaintenanceTasksV4ReturnArrayErrorMessage, __LINE__);
        }
        $this->getTimingBeltMaintenanceTasksV4Return = $getTimingBeltMaintenanceTasksV4Return;
        return $this;
    }
    /**
     * Add item to getTimingBeltMaintenanceTasksV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV4 $item
     * @return \StructType\GetTimingBeltMaintenanceTasksV4Response
     */
    public function addToGetTimingBeltMaintenanceTasksV4Return(\StructType\ExtMaintenanceTaskV4 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTaskV4) {
            throw new \InvalidArgumentException(sprintf('The getTimingBeltMaintenanceTasksV4Return property can only contain items of type \StructType\ExtMaintenanceTaskV4, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getTimingBeltMaintenanceTasksV4Return[] = $item;
        return $this;
    }
}
