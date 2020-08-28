<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksLocationBasedV6Response StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksLocationBasedV6Response extends AbstractStructBase
{
    /**
     * The getMaintenanceTasksLocationBasedV6Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTaskV6[]
     */
    public $getMaintenanceTasksLocationBasedV6Return;
    /**
     * Constructor method for getMaintenanceTasksLocationBasedV6Response
     * @uses GetMaintenanceTasksLocationBasedV6Response::setGetMaintenanceTasksLocationBasedV6Return()
     * @param \StructType\ExtMaintenanceTaskV6[] $getMaintenanceTasksLocationBasedV6Return
     */
    public function __construct(array $getMaintenanceTasksLocationBasedV6Return = array())
    {
        $this
            ->setGetMaintenanceTasksLocationBasedV6Return($getMaintenanceTasksLocationBasedV6Return);
    }
    /**
     * Get getMaintenanceTasksLocationBasedV6Return value
     * @return \StructType\ExtMaintenanceTaskV6[]|null
     */
    public function getGetMaintenanceTasksLocationBasedV6Return()
    {
        return $this->getMaintenanceTasksLocationBasedV6Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceTasksLocationBasedV6Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceTasksLocationBasedV6Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceTasksLocationBasedV6ReturnForArrayConstraintsFromSetGetMaintenanceTasksLocationBasedV6Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksLocationBasedV6ResponseGetMaintenanceTasksLocationBasedV6ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceTasksLocationBasedV6ResponseGetMaintenanceTasksLocationBasedV6ReturnItem instanceof \StructType\ExtMaintenanceTaskV6) {
                $invalidValues[] = is_object($getMaintenanceTasksLocationBasedV6ResponseGetMaintenanceTasksLocationBasedV6ReturnItem) ? get_class($getMaintenanceTasksLocationBasedV6ResponseGetMaintenanceTasksLocationBasedV6ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksLocationBasedV6ResponseGetMaintenanceTasksLocationBasedV6ReturnItem), var_export($getMaintenanceTasksLocationBasedV6ResponseGetMaintenanceTasksLocationBasedV6ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceTasksLocationBasedV6Return property can only contain items of type \StructType\ExtMaintenanceTaskV6, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceTasksLocationBasedV6Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV6[] $getMaintenanceTasksLocationBasedV6Return
     * @return \StructType\GetMaintenanceTasksLocationBasedV6Response
     */
    public function setGetMaintenanceTasksLocationBasedV6Return(array $getMaintenanceTasksLocationBasedV6Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceTasksLocationBasedV6ReturnArrayErrorMessage = self::validateGetMaintenanceTasksLocationBasedV6ReturnForArrayConstraintsFromSetGetMaintenanceTasksLocationBasedV6Return($getMaintenanceTasksLocationBasedV6Return))) {
            throw new \InvalidArgumentException($getMaintenanceTasksLocationBasedV6ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceTasksLocationBasedV6Return = $getMaintenanceTasksLocationBasedV6Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceTasksLocationBasedV6Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV6 $item
     * @return \StructType\GetMaintenanceTasksLocationBasedV6Response
     */
    public function addToGetMaintenanceTasksLocationBasedV6Return(\StructType\ExtMaintenanceTaskV6 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTaskV6) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceTasksLocationBasedV6Return property can only contain items of type \StructType\ExtMaintenanceTaskV6, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceTasksLocationBasedV6Return[] = $item;
        return $this;
    }
}
