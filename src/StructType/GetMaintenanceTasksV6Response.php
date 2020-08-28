<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksV6Response StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksV6Response extends AbstractStructBase
{
    /**
     * The getMaintenanceTasksV6Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTaskV6[]
     */
    public $getMaintenanceTasksV6Return;
    /**
     * Constructor method for getMaintenanceTasksV6Response
     * @uses GetMaintenanceTasksV6Response::setGetMaintenanceTasksV6Return()
     * @param \StructType\ExtMaintenanceTaskV6[] $getMaintenanceTasksV6Return
     */
    public function __construct(array $getMaintenanceTasksV6Return = array())
    {
        $this
            ->setGetMaintenanceTasksV6Return($getMaintenanceTasksV6Return);
    }
    /**
     * Get getMaintenanceTasksV6Return value
     * @return \StructType\ExtMaintenanceTaskV6[]|null
     */
    public function getGetMaintenanceTasksV6Return()
    {
        return $this->getMaintenanceTasksV6Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceTasksV6Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceTasksV6Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceTasksV6ReturnForArrayConstraintsFromSetGetMaintenanceTasksV6Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksV6ResponseGetMaintenanceTasksV6ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceTasksV6ResponseGetMaintenanceTasksV6ReturnItem instanceof \StructType\ExtMaintenanceTaskV6) {
                $invalidValues[] = is_object($getMaintenanceTasksV6ResponseGetMaintenanceTasksV6ReturnItem) ? get_class($getMaintenanceTasksV6ResponseGetMaintenanceTasksV6ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksV6ResponseGetMaintenanceTasksV6ReturnItem), var_export($getMaintenanceTasksV6ResponseGetMaintenanceTasksV6ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceTasksV6Return property can only contain items of type \StructType\ExtMaintenanceTaskV6, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceTasksV6Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV6[] $getMaintenanceTasksV6Return
     * @return \StructType\GetMaintenanceTasksV6Response
     */
    public function setGetMaintenanceTasksV6Return(array $getMaintenanceTasksV6Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceTasksV6ReturnArrayErrorMessage = self::validateGetMaintenanceTasksV6ReturnForArrayConstraintsFromSetGetMaintenanceTasksV6Return($getMaintenanceTasksV6Return))) {
            throw new \InvalidArgumentException($getMaintenanceTasksV6ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceTasksV6Return = $getMaintenanceTasksV6Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceTasksV6Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV6 $item
     * @return \StructType\GetMaintenanceTasksV6Response
     */
    public function addToGetMaintenanceTasksV6Return(\StructType\ExtMaintenanceTaskV6 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTaskV6) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceTasksV6Return property can only contain items of type \StructType\ExtMaintenanceTaskV6, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceTasksV6Return[] = $item;
        return $this;
    }
}
