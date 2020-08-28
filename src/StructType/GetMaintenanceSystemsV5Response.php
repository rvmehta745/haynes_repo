<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceSystemsV5Response StructType
 * @subpackage Structs
 */
class GetMaintenanceSystemsV5Response extends AbstractStructBase
{
    /**
     * The getMaintenanceSystemsV5Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceSystemV5[]
     */
    public $getMaintenanceSystemsV5Return;
    /**
     * Constructor method for getMaintenanceSystemsV5Response
     * @uses GetMaintenanceSystemsV5Response::setGetMaintenanceSystemsV5Return()
     * @param \StructType\ExtMaintenanceSystemV5[] $getMaintenanceSystemsV5Return
     */
    public function __construct(array $getMaintenanceSystemsV5Return = array())
    {
        $this
            ->setGetMaintenanceSystemsV5Return($getMaintenanceSystemsV5Return);
    }
    /**
     * Get getMaintenanceSystemsV5Return value
     * @return \StructType\ExtMaintenanceSystemV5[]|null
     */
    public function getGetMaintenanceSystemsV5Return()
    {
        return $this->getMaintenanceSystemsV5Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceSystemsV5Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceSystemsV5Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceSystemsV5ReturnForArrayConstraintsFromSetGetMaintenanceSystemsV5Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceSystemsV5ResponseGetMaintenanceSystemsV5ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceSystemsV5ResponseGetMaintenanceSystemsV5ReturnItem instanceof \StructType\ExtMaintenanceSystemV5) {
                $invalidValues[] = is_object($getMaintenanceSystemsV5ResponseGetMaintenanceSystemsV5ReturnItem) ? get_class($getMaintenanceSystemsV5ResponseGetMaintenanceSystemsV5ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceSystemsV5ResponseGetMaintenanceSystemsV5ReturnItem), var_export($getMaintenanceSystemsV5ResponseGetMaintenanceSystemsV5ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceSystemsV5Return property can only contain items of type \StructType\ExtMaintenanceSystemV5, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceSystemsV5Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystemV5[] $getMaintenanceSystemsV5Return
     * @return \StructType\GetMaintenanceSystemsV5Response
     */
    public function setGetMaintenanceSystemsV5Return(array $getMaintenanceSystemsV5Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceSystemsV5ReturnArrayErrorMessage = self::validateGetMaintenanceSystemsV5ReturnForArrayConstraintsFromSetGetMaintenanceSystemsV5Return($getMaintenanceSystemsV5Return))) {
            throw new \InvalidArgumentException($getMaintenanceSystemsV5ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceSystemsV5Return = $getMaintenanceSystemsV5Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceSystemsV5Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystemV5 $item
     * @return \StructType\GetMaintenanceSystemsV5Response
     */
    public function addToGetMaintenanceSystemsV5Return(\StructType\ExtMaintenanceSystemV5 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceSystemV5) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceSystemsV5Return property can only contain items of type \StructType\ExtMaintenanceSystemV5, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceSystemsV5Return[] = $item;
        return $this;
    }
}
