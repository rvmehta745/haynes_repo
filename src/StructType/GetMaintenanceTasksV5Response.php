<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksV5Response StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksV5Response extends AbstractStructBase
{
    /**
     * The getMaintenanceTasksV5Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTaskV5[]
     */
    public $getMaintenanceTasksV5Return;
    /**
     * Constructor method for getMaintenanceTasksV5Response
     * @uses GetMaintenanceTasksV5Response::setGetMaintenanceTasksV5Return()
     * @param \StructType\ExtMaintenanceTaskV5[] $getMaintenanceTasksV5Return
     */
    public function __construct(array $getMaintenanceTasksV5Return = array())
    {
        $this
            ->setGetMaintenanceTasksV5Return($getMaintenanceTasksV5Return);
    }
    /**
     * Get getMaintenanceTasksV5Return value
     * @return \StructType\ExtMaintenanceTaskV5[]|null
     */
    public function getGetMaintenanceTasksV5Return()
    {
        return $this->getMaintenanceTasksV5Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceTasksV5Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceTasksV5Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceTasksV5ReturnForArrayConstraintsFromSetGetMaintenanceTasksV5Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksV5ResponseGetMaintenanceTasksV5ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceTasksV5ResponseGetMaintenanceTasksV5ReturnItem instanceof \StructType\ExtMaintenanceTaskV5) {
                $invalidValues[] = is_object($getMaintenanceTasksV5ResponseGetMaintenanceTasksV5ReturnItem) ? get_class($getMaintenanceTasksV5ResponseGetMaintenanceTasksV5ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksV5ResponseGetMaintenanceTasksV5ReturnItem), var_export($getMaintenanceTasksV5ResponseGetMaintenanceTasksV5ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceTasksV5Return property can only contain items of type \StructType\ExtMaintenanceTaskV5, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceTasksV5Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV5[] $getMaintenanceTasksV5Return
     * @return \StructType\GetMaintenanceTasksV5Response
     */
    public function setGetMaintenanceTasksV5Return(array $getMaintenanceTasksV5Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceTasksV5ReturnArrayErrorMessage = self::validateGetMaintenanceTasksV5ReturnForArrayConstraintsFromSetGetMaintenanceTasksV5Return($getMaintenanceTasksV5Return))) {
            throw new \InvalidArgumentException($getMaintenanceTasksV5ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceTasksV5Return = $getMaintenanceTasksV5Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceTasksV5Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV5 $item
     * @return \StructType\GetMaintenanceTasksV5Response
     */
    public function addToGetMaintenanceTasksV5Return(\StructType\ExtMaintenanceTaskV5 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTaskV5) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceTasksV5Return property can only contain items of type \StructType\ExtMaintenanceTaskV5, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceTasksV5Return[] = $item;
        return $this;
    }
}
