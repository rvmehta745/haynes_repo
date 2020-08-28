<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceSystemsImperialV2Response StructType
 * @subpackage Structs
 */
class GetMaintenanceSystemsImperialV2Response extends AbstractStructBase
{
    /**
     * The getMaintenanceSystemsImperialV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceSystem[]
     */
    public $getMaintenanceSystemsImperialV2Return;
    /**
     * Constructor method for getMaintenanceSystemsImperialV2Response
     * @uses GetMaintenanceSystemsImperialV2Response::setGetMaintenanceSystemsImperialV2Return()
     * @param \StructType\ExtMaintenanceSystem[] $getMaintenanceSystemsImperialV2Return
     */
    public function __construct(array $getMaintenanceSystemsImperialV2Return = array())
    {
        $this
            ->setGetMaintenanceSystemsImperialV2Return($getMaintenanceSystemsImperialV2Return);
    }
    /**
     * Get getMaintenanceSystemsImperialV2Return value
     * @return \StructType\ExtMaintenanceSystem[]|null
     */
    public function getGetMaintenanceSystemsImperialV2Return()
    {
        return $this->getMaintenanceSystemsImperialV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceSystemsImperialV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceSystemsImperialV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceSystemsImperialV2ReturnForArrayConstraintsFromSetGetMaintenanceSystemsImperialV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceSystemsImperialV2ResponseGetMaintenanceSystemsImperialV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceSystemsImperialV2ResponseGetMaintenanceSystemsImperialV2ReturnItem instanceof \StructType\ExtMaintenanceSystem) {
                $invalidValues[] = is_object($getMaintenanceSystemsImperialV2ResponseGetMaintenanceSystemsImperialV2ReturnItem) ? get_class($getMaintenanceSystemsImperialV2ResponseGetMaintenanceSystemsImperialV2ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceSystemsImperialV2ResponseGetMaintenanceSystemsImperialV2ReturnItem), var_export($getMaintenanceSystemsImperialV2ResponseGetMaintenanceSystemsImperialV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceSystemsImperialV2Return property can only contain items of type \StructType\ExtMaintenanceSystem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceSystemsImperialV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystem[] $getMaintenanceSystemsImperialV2Return
     * @return \StructType\GetMaintenanceSystemsImperialV2Response
     */
    public function setGetMaintenanceSystemsImperialV2Return(array $getMaintenanceSystemsImperialV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceSystemsImperialV2ReturnArrayErrorMessage = self::validateGetMaintenanceSystemsImperialV2ReturnForArrayConstraintsFromSetGetMaintenanceSystemsImperialV2Return($getMaintenanceSystemsImperialV2Return))) {
            throw new \InvalidArgumentException($getMaintenanceSystemsImperialV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceSystemsImperialV2Return = $getMaintenanceSystemsImperialV2Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceSystemsImperialV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystem $item
     * @return \StructType\GetMaintenanceSystemsImperialV2Response
     */
    public function addToGetMaintenanceSystemsImperialV2Return(\StructType\ExtMaintenanceSystem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceSystem) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceSystemsImperialV2Return property can only contain items of type \StructType\ExtMaintenanceSystem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceSystemsImperialV2Return[] = $item;
        return $this;
    }
}
