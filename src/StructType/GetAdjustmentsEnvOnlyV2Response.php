<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsEnvOnlyV2Response StructType
 * @subpackage Structs
 */
class GetAdjustmentsEnvOnlyV2Response extends AbstractStructBase
{
    /**
     * The getAdjustmentsEnvOnlyV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtAdjustment[]
     */
    public $getAdjustmentsEnvOnlyV2Return;
    /**
     * Constructor method for getAdjustmentsEnvOnlyV2Response
     * @uses GetAdjustmentsEnvOnlyV2Response::setGetAdjustmentsEnvOnlyV2Return()
     * @param \StructType\ExtAdjustment[] $getAdjustmentsEnvOnlyV2Return
     */
    public function __construct(array $getAdjustmentsEnvOnlyV2Return = array())
    {
        $this
            ->setGetAdjustmentsEnvOnlyV2Return($getAdjustmentsEnvOnlyV2Return);
    }
    /**
     * Get getAdjustmentsEnvOnlyV2Return value
     * @return \StructType\ExtAdjustment[]|null
     */
    public function getGetAdjustmentsEnvOnlyV2Return()
    {
        return $this->getAdjustmentsEnvOnlyV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustmentsEnvOnlyV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustmentsEnvOnlyV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustmentsEnvOnlyV2ReturnForArrayConstraintsFromSetGetAdjustmentsEnvOnlyV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustmentsEnvOnlyV2ResponseGetAdjustmentsEnvOnlyV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustmentsEnvOnlyV2ResponseGetAdjustmentsEnvOnlyV2ReturnItem instanceof \StructType\ExtAdjustment) {
                $invalidValues[] = is_object($getAdjustmentsEnvOnlyV2ResponseGetAdjustmentsEnvOnlyV2ReturnItem) ? get_class($getAdjustmentsEnvOnlyV2ResponseGetAdjustmentsEnvOnlyV2ReturnItem) : sprintf('%s(%s)', gettype($getAdjustmentsEnvOnlyV2ResponseGetAdjustmentsEnvOnlyV2ReturnItem), var_export($getAdjustmentsEnvOnlyV2ResponseGetAdjustmentsEnvOnlyV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustmentsEnvOnlyV2Return property can only contain items of type \StructType\ExtAdjustment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustmentsEnvOnlyV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustment[] $getAdjustmentsEnvOnlyV2Return
     * @return \StructType\GetAdjustmentsEnvOnlyV2Response
     */
    public function setGetAdjustmentsEnvOnlyV2Return(array $getAdjustmentsEnvOnlyV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustmentsEnvOnlyV2ReturnArrayErrorMessage = self::validateGetAdjustmentsEnvOnlyV2ReturnForArrayConstraintsFromSetGetAdjustmentsEnvOnlyV2Return($getAdjustmentsEnvOnlyV2Return))) {
            throw new \InvalidArgumentException($getAdjustmentsEnvOnlyV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustmentsEnvOnlyV2Return = $getAdjustmentsEnvOnlyV2Return;
        return $this;
    }
    /**
     * Add item to getAdjustmentsEnvOnlyV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustment $item
     * @return \StructType\GetAdjustmentsEnvOnlyV2Response
     */
    public function addToGetAdjustmentsEnvOnlyV2Return(\StructType\ExtAdjustment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtAdjustment) {
            throw new \InvalidArgumentException(sprintf('The getAdjustmentsEnvOnlyV2Return property can only contain items of type \StructType\ExtAdjustment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustmentsEnvOnlyV2Return[] = $item;
        return $this;
    }
}
