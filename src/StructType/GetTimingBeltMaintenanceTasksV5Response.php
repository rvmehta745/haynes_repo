<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTimingBeltMaintenanceTasksV5Response StructType
 * @subpackage Structs
 */
class GetTimingBeltMaintenanceTasksV5Response extends AbstractStructBase
{
    /**
     * The getTimingBeltMaintenanceTasksV5Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTaskV4[]
     */
    public $getTimingBeltMaintenanceTasksV5Return;
    /**
     * Constructor method for getTimingBeltMaintenanceTasksV5Response
     * @uses GetTimingBeltMaintenanceTasksV5Response::setGetTimingBeltMaintenanceTasksV5Return()
     * @param \StructType\ExtMaintenanceTaskV4[] $getTimingBeltMaintenanceTasksV5Return
     */
    public function __construct(array $getTimingBeltMaintenanceTasksV5Return = array())
    {
        $this
            ->setGetTimingBeltMaintenanceTasksV5Return($getTimingBeltMaintenanceTasksV5Return);
    }
    /**
     * Get getTimingBeltMaintenanceTasksV5Return value
     * @return \StructType\ExtMaintenanceTaskV4[]|null
     */
    public function getGetTimingBeltMaintenanceTasksV5Return()
    {
        return $this->getTimingBeltMaintenanceTasksV5Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTimingBeltMaintenanceTasksV5Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTimingBeltMaintenanceTasksV5Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTimingBeltMaintenanceTasksV5ReturnForArrayConstraintsFromSetGetTimingBeltMaintenanceTasksV5Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTimingBeltMaintenanceTasksV5ResponseGetTimingBeltMaintenanceTasksV5ReturnItem) {
            // validation for constraint: itemType
            if (!$getTimingBeltMaintenanceTasksV5ResponseGetTimingBeltMaintenanceTasksV5ReturnItem instanceof \StructType\ExtMaintenanceTaskV4) {
                $invalidValues[] = is_object($getTimingBeltMaintenanceTasksV5ResponseGetTimingBeltMaintenanceTasksV5ReturnItem) ? get_class($getTimingBeltMaintenanceTasksV5ResponseGetTimingBeltMaintenanceTasksV5ReturnItem) : sprintf('%s(%s)', gettype($getTimingBeltMaintenanceTasksV5ResponseGetTimingBeltMaintenanceTasksV5ReturnItem), var_export($getTimingBeltMaintenanceTasksV5ResponseGetTimingBeltMaintenanceTasksV5ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getTimingBeltMaintenanceTasksV5Return property can only contain items of type \StructType\ExtMaintenanceTaskV4, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getTimingBeltMaintenanceTasksV5Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV4[] $getTimingBeltMaintenanceTasksV5Return
     * @return \StructType\GetTimingBeltMaintenanceTasksV5Response
     */
    public function setGetTimingBeltMaintenanceTasksV5Return(array $getTimingBeltMaintenanceTasksV5Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getTimingBeltMaintenanceTasksV5ReturnArrayErrorMessage = self::validateGetTimingBeltMaintenanceTasksV5ReturnForArrayConstraintsFromSetGetTimingBeltMaintenanceTasksV5Return($getTimingBeltMaintenanceTasksV5Return))) {
            throw new \InvalidArgumentException($getTimingBeltMaintenanceTasksV5ReturnArrayErrorMessage, __LINE__);
        }
        $this->getTimingBeltMaintenanceTasksV5Return = $getTimingBeltMaintenanceTasksV5Return;
        return $this;
    }
    /**
     * Add item to getTimingBeltMaintenanceTasksV5Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV4 $item
     * @return \StructType\GetTimingBeltMaintenanceTasksV5Response
     */
    public function addToGetTimingBeltMaintenanceTasksV5Return(\StructType\ExtMaintenanceTaskV4 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTaskV4) {
            throw new \InvalidArgumentException(sprintf('The getTimingBeltMaintenanceTasksV5Return property can only contain items of type \StructType\ExtMaintenanceTaskV4, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getTimingBeltMaintenanceTasksV5Return[] = $item;
        return $this;
    }
}
