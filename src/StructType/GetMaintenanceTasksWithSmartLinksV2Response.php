<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksWithSmartLinksV2Response StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksWithSmartLinksV2Response extends AbstractStructBase
{
    /**
     * The getMaintenanceTasksWithSmartLinksV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceTask[]
     */
    public $getMaintenanceTasksWithSmartLinksV2Return;
    /**
     * Constructor method for getMaintenanceTasksWithSmartLinksV2Response
     * @uses GetMaintenanceTasksWithSmartLinksV2Response::setGetMaintenanceTasksWithSmartLinksV2Return()
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksWithSmartLinksV2Return
     */
    public function __construct(array $getMaintenanceTasksWithSmartLinksV2Return = array())
    {
        $this
            ->setGetMaintenanceTasksWithSmartLinksV2Return($getMaintenanceTasksWithSmartLinksV2Return);
    }
    /**
     * Get getMaintenanceTasksWithSmartLinksV2Return value
     * @return \StructType\ExtMaintenanceTask[]|null
     */
    public function getGetMaintenanceTasksWithSmartLinksV2Return()
    {
        return $this->getMaintenanceTasksWithSmartLinksV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceTasksWithSmartLinksV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceTasksWithSmartLinksV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceTasksWithSmartLinksV2ReturnForArrayConstraintsFromSetGetMaintenanceTasksWithSmartLinksV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksWithSmartLinksV2ResponseGetMaintenanceTasksWithSmartLinksV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceTasksWithSmartLinksV2ResponseGetMaintenanceTasksWithSmartLinksV2ReturnItem instanceof \StructType\ExtMaintenanceTask) {
                $invalidValues[] = is_object($getMaintenanceTasksWithSmartLinksV2ResponseGetMaintenanceTasksWithSmartLinksV2ReturnItem) ? get_class($getMaintenanceTasksWithSmartLinksV2ResponseGetMaintenanceTasksWithSmartLinksV2ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksWithSmartLinksV2ResponseGetMaintenanceTasksWithSmartLinksV2ReturnItem), var_export($getMaintenanceTasksWithSmartLinksV2ResponseGetMaintenanceTasksWithSmartLinksV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceTasksWithSmartLinksV2Return property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceTasksWithSmartLinksV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask[] $getMaintenanceTasksWithSmartLinksV2Return
     * @return \StructType\GetMaintenanceTasksWithSmartLinksV2Response
     */
    public function setGetMaintenanceTasksWithSmartLinksV2Return(array $getMaintenanceTasksWithSmartLinksV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceTasksWithSmartLinksV2ReturnArrayErrorMessage = self::validateGetMaintenanceTasksWithSmartLinksV2ReturnForArrayConstraintsFromSetGetMaintenanceTasksWithSmartLinksV2Return($getMaintenanceTasksWithSmartLinksV2Return))) {
            throw new \InvalidArgumentException($getMaintenanceTasksWithSmartLinksV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceTasksWithSmartLinksV2Return = $getMaintenanceTasksWithSmartLinksV2Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceTasksWithSmartLinksV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask $item
     * @return \StructType\GetMaintenanceTasksWithSmartLinksV2Response
     */
    public function addToGetMaintenanceTasksWithSmartLinksV2Return(\StructType\ExtMaintenanceTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTask) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceTasksWithSmartLinksV2Return property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceTasksWithSmartLinksV2Return[] = $item;
        return $this;
    }
}
