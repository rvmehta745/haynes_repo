<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceSystemsV6Response StructType
 * @subpackage Structs
 */
class GetMaintenanceSystemsV6Response extends AbstractStructBase
{
    /**
     * The getMaintenanceSystemsV6Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceSystemV6[]
     */
    public $getMaintenanceSystemsV6Return;
    /**
     * Constructor method for getMaintenanceSystemsV6Response
     * @uses GetMaintenanceSystemsV6Response::setGetMaintenanceSystemsV6Return()
     * @param \StructType\ExtMaintenanceSystemV6[] $getMaintenanceSystemsV6Return
     */
    public function __construct(array $getMaintenanceSystemsV6Return = array())
    {
        $this
            ->setGetMaintenanceSystemsV6Return($getMaintenanceSystemsV6Return);
    }
    /**
     * Get getMaintenanceSystemsV6Return value
     * @return \StructType\ExtMaintenanceSystemV6[]|null
     */
    public function getGetMaintenanceSystemsV6Return()
    {
        return $this->getMaintenanceSystemsV6Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceSystemsV6Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceSystemsV6Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceSystemsV6ReturnForArrayConstraintsFromSetGetMaintenanceSystemsV6Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceSystemsV6ResponseGetMaintenanceSystemsV6ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceSystemsV6ResponseGetMaintenanceSystemsV6ReturnItem instanceof \StructType\ExtMaintenanceSystemV6) {
                $invalidValues[] = is_object($getMaintenanceSystemsV6ResponseGetMaintenanceSystemsV6ReturnItem) ? get_class($getMaintenanceSystemsV6ResponseGetMaintenanceSystemsV6ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceSystemsV6ResponseGetMaintenanceSystemsV6ReturnItem), var_export($getMaintenanceSystemsV6ResponseGetMaintenanceSystemsV6ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceSystemsV6Return property can only contain items of type \StructType\ExtMaintenanceSystemV6, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceSystemsV6Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystemV6[] $getMaintenanceSystemsV6Return
     * @return \StructType\GetMaintenanceSystemsV6Response
     */
    public function setGetMaintenanceSystemsV6Return(array $getMaintenanceSystemsV6Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceSystemsV6ReturnArrayErrorMessage = self::validateGetMaintenanceSystemsV6ReturnForArrayConstraintsFromSetGetMaintenanceSystemsV6Return($getMaintenanceSystemsV6Return))) {
            throw new \InvalidArgumentException($getMaintenanceSystemsV6ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceSystemsV6Return = $getMaintenanceSystemsV6Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceSystemsV6Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystemV6 $item
     * @return \StructType\GetMaintenanceSystemsV6Response
     */
    public function addToGetMaintenanceSystemsV6Return(\StructType\ExtMaintenanceSystemV6 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceSystemV6) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceSystemsV6Return property can only contain items of type \StructType\ExtMaintenanceSystemV6, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceSystemsV6Return[] = $item;
        return $this;
    }
}
