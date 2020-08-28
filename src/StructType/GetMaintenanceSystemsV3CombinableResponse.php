<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceSystemsV3CombinableResponse StructType
 * @subpackage Structs
 */
class GetMaintenanceSystemsV3CombinableResponse extends AbstractStructBase
{
    /**
     * The getMaintenanceSystemsV3CombinableReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceSystemV3Combinable[]
     */
    public $getMaintenanceSystemsV3CombinableReturn;
    /**
     * Constructor method for getMaintenanceSystemsV3CombinableResponse
     * @uses GetMaintenanceSystemsV3CombinableResponse::setGetMaintenanceSystemsV3CombinableReturn()
     * @param \StructType\ExtMaintenanceSystemV3Combinable[] $getMaintenanceSystemsV3CombinableReturn
     */
    public function __construct(array $getMaintenanceSystemsV3CombinableReturn = array())
    {
        $this
            ->setGetMaintenanceSystemsV3CombinableReturn($getMaintenanceSystemsV3CombinableReturn);
    }
    /**
     * Get getMaintenanceSystemsV3CombinableReturn value
     * @return \StructType\ExtMaintenanceSystemV3Combinable[]|null
     */
    public function getGetMaintenanceSystemsV3CombinableReturn()
    {
        return $this->getMaintenanceSystemsV3CombinableReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceSystemsV3CombinableReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceSystemsV3CombinableReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceSystemsV3CombinableReturnForArrayConstraintsFromSetGetMaintenanceSystemsV3CombinableReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceSystemsV3CombinableResponseGetMaintenanceSystemsV3CombinableReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceSystemsV3CombinableResponseGetMaintenanceSystemsV3CombinableReturnItem instanceof \StructType\ExtMaintenanceSystemV3Combinable) {
                $invalidValues[] = is_object($getMaintenanceSystemsV3CombinableResponseGetMaintenanceSystemsV3CombinableReturnItem) ? get_class($getMaintenanceSystemsV3CombinableResponseGetMaintenanceSystemsV3CombinableReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceSystemsV3CombinableResponseGetMaintenanceSystemsV3CombinableReturnItem), var_export($getMaintenanceSystemsV3CombinableResponseGetMaintenanceSystemsV3CombinableReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceSystemsV3CombinableReturn property can only contain items of type \StructType\ExtMaintenanceSystemV3Combinable, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceSystemsV3CombinableReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystemV3Combinable[] $getMaintenanceSystemsV3CombinableReturn
     * @return \StructType\GetMaintenanceSystemsV3CombinableResponse
     */
    public function setGetMaintenanceSystemsV3CombinableReturn(array $getMaintenanceSystemsV3CombinableReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceSystemsV3CombinableReturnArrayErrorMessage = self::validateGetMaintenanceSystemsV3CombinableReturnForArrayConstraintsFromSetGetMaintenanceSystemsV3CombinableReturn($getMaintenanceSystemsV3CombinableReturn))) {
            throw new \InvalidArgumentException($getMaintenanceSystemsV3CombinableReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceSystemsV3CombinableReturn = $getMaintenanceSystemsV3CombinableReturn;
        return $this;
    }
    /**
     * Add item to getMaintenanceSystemsV3CombinableReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceSystemV3Combinable $item
     * @return \StructType\GetMaintenanceSystemsV3CombinableResponse
     */
    public function addToGetMaintenanceSystemsV3CombinableReturn(\StructType\ExtMaintenanceSystemV3Combinable $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceSystemV3Combinable) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceSystemsV3CombinableReturn property can only contain items of type \StructType\ExtMaintenanceSystemV3Combinable, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceSystemsV3CombinableReturn[] = $item;
        return $this;
    }
}
