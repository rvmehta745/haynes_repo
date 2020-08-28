<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceSystemsV3Response StructType
 * @subpackage Structs
 */
class GetMaintenanceSystemsV3Response extends AbstractStructBase
{
    /**
     * The getMaintenanceSystemsV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceSystemV3[]
     */
    public $getMaintenanceSystemsV3Return;
    /**
     * Constructor method for getMaintenanceSystemsV3Response
     * @uses GetMaintenanceSystemsV3Response::setGetMaintenanceSystemsV3Return()
     * @param \StructType\ExtMaintenanceSystemV3[] $getMaintenanceSystemsV3Return
     */
    public function __construct(array $getMaintenanceSystemsV3Return = array())
    {
        $this
            ->setGetMaintenanceSystemsV3Return($getMaintenanceSystemsV3Return);
    }
    /**
     * Get getMaintenanceSystemsV3Return value
     * @return \StructType\ExtMaintenanceSystemV3[]|null
     */
    public function getGetMaintenanceSystemsV3Return()
    {
        return $this->getMaintenanceSystemsV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceSystemsV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceSystemsV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceSystemsV3ReturnForArrayConstraintsFromSetGetMaintenanceSystemsV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceSystemsV3ResponseGetMaintenanceSystemsV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceSystemsV3ResponseGetMaintenanceSystemsV3ReturnItem instanceof \StructType\ExtMaintenanceSystemV3) {
                $invalidValues[] = is_object($getMaintenanceSystemsV3ResponseGetMaintenanceSystemsV3ReturnItem) ? get_class($getMaintenanceSystemsV3ResponseGetMaintenanceSystemsV3ReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceSystemsV3ResponseGetMaintenanceSystemsV3ReturnItem), var_export($getMaintenanceSystemsV3ResponseGetMaintenanceSystemsV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceSystemsV3Return property can only contain items of type \StructType\ExtMaintenanceSystemV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystemV3[] $getMaintenanceSystemsV3Return
     * @return \StructType\GetMaintenanceSystemsV3Response
     */
    public function setGetMaintenanceSystemsV3Return(array $getMaintenanceSystemsV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceSystemsV3ReturnArrayErrorMessage = self::validateGetMaintenanceSystemsV3ReturnForArrayConstraintsFromSetGetMaintenanceSystemsV3Return($getMaintenanceSystemsV3Return))) {
            throw new \InvalidArgumentException($getMaintenanceSystemsV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceSystemsV3Return = $getMaintenanceSystemsV3Return;
        return $this;
    }
    /**
     * Add item to getMaintenanceSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystemV3 $item
     * @return \StructType\GetMaintenanceSystemsV3Response
     */
    public function addToGetMaintenanceSystemsV3Return(\StructType\ExtMaintenanceSystemV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceSystemV3) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceSystemsV3Return property can only contain items of type \StructType\ExtMaintenanceSystemV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceSystemsV3Return[] = $item;
        return $this;
    }
}
