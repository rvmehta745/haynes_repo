<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsEnvOnlyV3Response StructType
 * @subpackage Structs
 */
class GetAdjustmentsEnvOnlyV3Response extends AbstractStructBase
{
    /**
     * The getAdjustmentsEnvOnlyV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtAdjustmentV3[]
     */
    public $getAdjustmentsEnvOnlyV3Return;
    /**
     * Constructor method for getAdjustmentsEnvOnlyV3Response
     * @uses GetAdjustmentsEnvOnlyV3Response::setGetAdjustmentsEnvOnlyV3Return()
     * @param \StructType\ExtAdjustmentV3[] $getAdjustmentsEnvOnlyV3Return
     */
    public function __construct(array $getAdjustmentsEnvOnlyV3Return = array())
    {
        $this
            ->setGetAdjustmentsEnvOnlyV3Return($getAdjustmentsEnvOnlyV3Return);
    }
    /**
     * Get getAdjustmentsEnvOnlyV3Return value
     * @return \StructType\ExtAdjustmentV3[]|null
     */
    public function getGetAdjustmentsEnvOnlyV3Return()
    {
        return $this->getAdjustmentsEnvOnlyV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustmentsEnvOnlyV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustmentsEnvOnlyV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustmentsEnvOnlyV3ReturnForArrayConstraintsFromSetGetAdjustmentsEnvOnlyV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustmentsEnvOnlyV3ResponseGetAdjustmentsEnvOnlyV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustmentsEnvOnlyV3ResponseGetAdjustmentsEnvOnlyV3ReturnItem instanceof \StructType\ExtAdjustmentV3) {
                $invalidValues[] = is_object($getAdjustmentsEnvOnlyV3ResponseGetAdjustmentsEnvOnlyV3ReturnItem) ? get_class($getAdjustmentsEnvOnlyV3ResponseGetAdjustmentsEnvOnlyV3ReturnItem) : sprintf('%s(%s)', gettype($getAdjustmentsEnvOnlyV3ResponseGetAdjustmentsEnvOnlyV3ReturnItem), var_export($getAdjustmentsEnvOnlyV3ResponseGetAdjustmentsEnvOnlyV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustmentsEnvOnlyV3Return property can only contain items of type \StructType\ExtAdjustmentV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustmentsEnvOnlyV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustmentV3[] $getAdjustmentsEnvOnlyV3Return
     * @return \StructType\GetAdjustmentsEnvOnlyV3Response
     */
    public function setGetAdjustmentsEnvOnlyV3Return(array $getAdjustmentsEnvOnlyV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustmentsEnvOnlyV3ReturnArrayErrorMessage = self::validateGetAdjustmentsEnvOnlyV3ReturnForArrayConstraintsFromSetGetAdjustmentsEnvOnlyV3Return($getAdjustmentsEnvOnlyV3Return))) {
            throw new \InvalidArgumentException($getAdjustmentsEnvOnlyV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustmentsEnvOnlyV3Return = $getAdjustmentsEnvOnlyV3Return;
        return $this;
    }
    /**
     * Add item to getAdjustmentsEnvOnlyV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustmentV3 $item
     * @return \StructType\GetAdjustmentsEnvOnlyV3Response
     */
    public function addToGetAdjustmentsEnvOnlyV3Return(\StructType\ExtAdjustmentV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtAdjustmentV3) {
            throw new \InvalidArgumentException(sprintf('The getAdjustmentsEnvOnlyV3Return property can only contain items of type \StructType\ExtAdjustmentV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustmentsEnvOnlyV3Return[] = $item;
        return $this;
    }
}
