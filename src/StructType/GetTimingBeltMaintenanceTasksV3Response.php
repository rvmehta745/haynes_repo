<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTimingBeltMaintenanceTasksV3Response StructType
 * @subpackage Structs
 */
class GetTimingBeltMaintenanceTasksV3Response extends AbstractStructBase
{
    /**
     * The getTimingBeltMaintenanceTasksV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTaskV3[]
     */
    public $getTimingBeltMaintenanceTasksV3Return;
    /**
     * Constructor method for getTimingBeltMaintenanceTasksV3Response
     * @uses GetTimingBeltMaintenanceTasksV3Response::setGetTimingBeltMaintenanceTasksV3Return()
     * @param \StructType\ExtMaintenanceTaskV3[] $getTimingBeltMaintenanceTasksV3Return
     */
    public function __construct(array $getTimingBeltMaintenanceTasksV3Return = array())
    {
        $this
            ->setGetTimingBeltMaintenanceTasksV3Return($getTimingBeltMaintenanceTasksV3Return);
    }
    /**
     * Get getTimingBeltMaintenanceTasksV3Return value
     * @return \StructType\ExtMaintenanceTaskV3[]|null
     */
    public function getGetTimingBeltMaintenanceTasksV3Return()
    {
        return $this->getTimingBeltMaintenanceTasksV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTimingBeltMaintenanceTasksV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTimingBeltMaintenanceTasksV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTimingBeltMaintenanceTasksV3ReturnForArrayConstraintsFromSetGetTimingBeltMaintenanceTasksV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTimingBeltMaintenanceTasksV3ResponseGetTimingBeltMaintenanceTasksV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getTimingBeltMaintenanceTasksV3ResponseGetTimingBeltMaintenanceTasksV3ReturnItem instanceof \StructType\ExtMaintenanceTaskV3) {
                $invalidValues[] = is_object($getTimingBeltMaintenanceTasksV3ResponseGetTimingBeltMaintenanceTasksV3ReturnItem) ? get_class($getTimingBeltMaintenanceTasksV3ResponseGetTimingBeltMaintenanceTasksV3ReturnItem) : sprintf('%s(%s)', gettype($getTimingBeltMaintenanceTasksV3ResponseGetTimingBeltMaintenanceTasksV3ReturnItem), var_export($getTimingBeltMaintenanceTasksV3ResponseGetTimingBeltMaintenanceTasksV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getTimingBeltMaintenanceTasksV3Return property can only contain items of type \StructType\ExtMaintenanceTaskV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getTimingBeltMaintenanceTasksV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV3[] $getTimingBeltMaintenanceTasksV3Return
     * @return \StructType\GetTimingBeltMaintenanceTasksV3Response
     */
    public function setGetTimingBeltMaintenanceTasksV3Return(array $getTimingBeltMaintenanceTasksV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getTimingBeltMaintenanceTasksV3ReturnArrayErrorMessage = self::validateGetTimingBeltMaintenanceTasksV3ReturnForArrayConstraintsFromSetGetTimingBeltMaintenanceTasksV3Return($getTimingBeltMaintenanceTasksV3Return))) {
            throw new \InvalidArgumentException($getTimingBeltMaintenanceTasksV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getTimingBeltMaintenanceTasksV3Return = $getTimingBeltMaintenanceTasksV3Return;
        return $this;
    }
    /**
     * Add item to getTimingBeltMaintenanceTasksV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV3 $item
     * @return \StructType\GetTimingBeltMaintenanceTasksV3Response
     */
    public function addToGetTimingBeltMaintenanceTasksV3Return(\StructType\ExtMaintenanceTaskV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTaskV3) {
            throw new \InvalidArgumentException(sprintf('The getTimingBeltMaintenanceTasksV3Return property can only contain items of type \StructType\ExtMaintenanceTaskV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getTimingBeltMaintenanceTasksV3Return[] = $item;
        return $this;
    }
}
