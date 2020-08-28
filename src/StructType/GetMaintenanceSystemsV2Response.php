<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceSystemsV2Response StructType
 * @subpackage Structs
 */
class GetMaintenanceSystemsV2Response extends AbstractStructBase
{
    /**
     * The getMaintenanceSystemsV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceSystem[]
     */
    public $getMaintenanceSystemsV2Return;
    /**
     * Constructor method for getMaintenanceSystemsV2Response
     * @uses GetMaintenanceSystemsV2Response::setGetMaintenanceSystemsV2Return()
     * @param \StructType\ExtMaintenanceSystem[] $getMaintenanceSystemsV2Return
     */
    public function __construct(array $getMaintenanceSystemsV2Return = array())
    {
        $this
            ->setGetMaintenanceSystemsV2Return($getMaintenanceSystemsV2Return);
    }
    /**
     * Get getMaintenanceSystemsV2Return value
     * @return \StructType\ExtMaintenanceSystem[]|null
     */
    public function getGetMaintenanceSystemsV2Return()
    {
        return $this->getMaintenanceSystemsV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceSystemsV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceSystemsV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceSystemsV2ReturnForArrayConstraintsFromSetGetMaintenanceSystemsV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceSystemsV2ResponseGetMaintenanceSystemsV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceSystemsV2ResponseGetMaintenanceSystemsV2ReturnItem instanceof \StructType\ExtMaintenanceSystem) {
                $invalidValues[] = is_object($getMaintenanceSystemsV2ResponseGetMaintenanceSystemsV2ReturnItem) ? get_class($getMaintenanceSystemsV2ResponseGetMaintenanceSystemsV2ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceSystemsV2ResponseGetMaintenanceSystemsV2ReturnItem), var_export($getMaintenanceSystemsV2ResponseGetMaintenanceSystemsV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceSystemsV2Return property can only contain items of type \StructType\ExtMaintenanceSystem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceSystemsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystem[] $getMaintenanceSystemsV2Return
     * @return \StructType\GetMaintenanceSystemsV2Response
     */
    public function setGetMaintenanceSystemsV2Return(array $getMaintenanceSystemsV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceSystemsV2ReturnArrayErrorMessage = self::validateGetMaintenanceSystemsV2ReturnForArrayConstraintsFromSetGetMaintenanceSystemsV2Return($getMaintenanceSystemsV2Return))) {
            throw new \InvalidArgumentException($getMaintenanceSystemsV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceSystemsV2Return = $getMaintenanceSystemsV2Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceSystemsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystem $item
     * @return \StructType\GetMaintenanceSystemsV2Response
     */
    public function addToGetMaintenanceSystemsV2Return(\StructType\ExtMaintenanceSystem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceSystem) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceSystemsV2Return property can only contain items of type \StructType\ExtMaintenanceSystem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceSystemsV2Return[] = $item;
        return $this;
    }
}
