<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceSystemsV4Response StructType
 * @subpackage Structs
 */
class GetMaintenanceSystemsV4Response extends AbstractStructBase
{
    /**
     * The getMaintenanceSystemsV4Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceSystemV4[]
     */
    public $getMaintenanceSystemsV4Return;
    /**
     * Constructor method for getMaintenanceSystemsV4Response
     * @uses GetMaintenanceSystemsV4Response::setGetMaintenanceSystemsV4Return()
     * @param \StructType\ExtMaintenanceSystemV4[] $getMaintenanceSystemsV4Return
     */
    public function __construct(array $getMaintenanceSystemsV4Return = array())
    {
        $this
            ->setGetMaintenanceSystemsV4Return($getMaintenanceSystemsV4Return);
    }
    /**
     * Get getMaintenanceSystemsV4Return value
     * @return \StructType\ExtMaintenanceSystemV4[]|null
     */
    public function getGetMaintenanceSystemsV4Return()
    {
        return $this->getMaintenanceSystemsV4Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceSystemsV4Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceSystemsV4Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceSystemsV4ReturnForArrayConstraintsFromSetGetMaintenanceSystemsV4Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceSystemsV4ResponseGetMaintenanceSystemsV4ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceSystemsV4ResponseGetMaintenanceSystemsV4ReturnItem instanceof \StructType\ExtMaintenanceSystemV4) {
                $invalidValues[] = is_object($getMaintenanceSystemsV4ResponseGetMaintenanceSystemsV4ReturnItem) ? get_class($getMaintenanceSystemsV4ResponseGetMaintenanceSystemsV4ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceSystemsV4ResponseGetMaintenanceSystemsV4ReturnItem), var_export($getMaintenanceSystemsV4ResponseGetMaintenanceSystemsV4ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceSystemsV4Return property can only contain items of type \StructType\ExtMaintenanceSystemV4, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceSystemsV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystemV4[] $getMaintenanceSystemsV4Return
     * @return \StructType\GetMaintenanceSystemsV4Response
     */
    public function setGetMaintenanceSystemsV4Return(array $getMaintenanceSystemsV4Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceSystemsV4ReturnArrayErrorMessage = self::validateGetMaintenanceSystemsV4ReturnForArrayConstraintsFromSetGetMaintenanceSystemsV4Return($getMaintenanceSystemsV4Return))) {
            throw new \InvalidArgumentException($getMaintenanceSystemsV4ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceSystemsV4Return = $getMaintenanceSystemsV4Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceSystemsV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystemV4 $item
     * @return \StructType\GetMaintenanceSystemsV4Response
     */
    public function addToGetMaintenanceSystemsV4Return(\StructType\ExtMaintenanceSystemV4 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceSystemV4) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceSystemsV4Return property can only contain items of type \StructType\ExtMaintenanceSystemV4, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceSystemsV4Return[] = $item;
        return $this;
    }
}
