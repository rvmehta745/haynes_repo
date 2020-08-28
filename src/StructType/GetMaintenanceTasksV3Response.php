<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksV3Response StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksV3Response extends AbstractStructBase
{
    /**
     * The getMaintenanceTasksV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTaskV3[]
     */
    public $getMaintenanceTasksV3Return;
    /**
     * Constructor method for getMaintenanceTasksV3Response
     * @uses GetMaintenanceTasksV3Response::setGetMaintenanceTasksV3Return()
     * @param \StructType\ExtMaintenanceTaskV3[] $getMaintenanceTasksV3Return
     */
    public function __construct(array $getMaintenanceTasksV3Return = array())
    {
        $this
            ->setGetMaintenanceTasksV3Return($getMaintenanceTasksV3Return);
    }
    /**
     * Get getMaintenanceTasksV3Return value
     * @return \StructType\ExtMaintenanceTaskV3[]|null
     */
    public function getGetMaintenanceTasksV3Return()
    {
        return $this->getMaintenanceTasksV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceTasksV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceTasksV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceTasksV3ReturnForArrayConstraintsFromSetGetMaintenanceTasksV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksV3ResponseGetMaintenanceTasksV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceTasksV3ResponseGetMaintenanceTasksV3ReturnItem instanceof \StructType\ExtMaintenanceTaskV3) {
                $invalidValues[] = is_object($getMaintenanceTasksV3ResponseGetMaintenanceTasksV3ReturnItem) ? get_class($getMaintenanceTasksV3ResponseGetMaintenanceTasksV3ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksV3ResponseGetMaintenanceTasksV3ReturnItem), var_export($getMaintenanceTasksV3ResponseGetMaintenanceTasksV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceTasksV3Return property can only contain items of type \StructType\ExtMaintenanceTaskV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceTasksV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV3[] $getMaintenanceTasksV3Return
     * @return \StructType\GetMaintenanceTasksV3Response
     */
    public function setGetMaintenanceTasksV3Return(array $getMaintenanceTasksV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceTasksV3ReturnArrayErrorMessage = self::validateGetMaintenanceTasksV3ReturnForArrayConstraintsFromSetGetMaintenanceTasksV3Return($getMaintenanceTasksV3Return))) {
            throw new \InvalidArgumentException($getMaintenanceTasksV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceTasksV3Return = $getMaintenanceTasksV3Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceTasksV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTaskV3 $item
     * @return \StructType\GetMaintenanceTasksV3Response
     */
    public function addToGetMaintenanceTasksV3Return(\StructType\ExtMaintenanceTaskV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTaskV3) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceTasksV3Return property can only contain items of type \StructType\ExtMaintenanceTaskV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceTasksV3Return[] = $item;
        return $this;
    }
}
