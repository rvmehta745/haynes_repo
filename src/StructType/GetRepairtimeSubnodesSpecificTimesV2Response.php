<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeSubnodesSpecificTimesV2Response StructType
 * @subpackage Structs
 */
class GetRepairtimeSubnodesSpecificTimesV2Response extends AbstractStructBase
{
    /**
     * The getRepairtimeSubnodesSpecificTimesV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNodeV2[]
     */
    public $getRepairtimeSubnodesSpecificTimesV2Return;
    /**
     * Constructor method for getRepairtimeSubnodesSpecificTimesV2Response
     * @uses GetRepairtimeSubnodesSpecificTimesV2Response::setGetRepairtimeSubnodesSpecificTimesV2Return()
     * @param \StructType\ExtRepairtimeNodeV2[] $getRepairtimeSubnodesSpecificTimesV2Return
     */
    public function __construct(array $getRepairtimeSubnodesSpecificTimesV2Return = array())
    {
        $this
            ->setGetRepairtimeSubnodesSpecificTimesV2Return($getRepairtimeSubnodesSpecificTimesV2Return);
    }
    /**
     * Get getRepairtimeSubnodesSpecificTimesV2Return value
     * @return \StructType\ExtRepairtimeNodeV2[]|null
     */
    public function getGetRepairtimeSubnodesSpecificTimesV2Return()
    {
        return $this->getRepairtimeSubnodesSpecificTimesV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeSubnodesSpecificTimesV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeSubnodesSpecificTimesV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeSubnodesSpecificTimesV2ReturnForArrayConstraintsFromSetGetRepairtimeSubnodesSpecificTimesV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeSubnodesSpecificTimesV2ResponseGetRepairtimeSubnodesSpecificTimesV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeSubnodesSpecificTimesV2ResponseGetRepairtimeSubnodesSpecificTimesV2ReturnItem instanceof \StructType\ExtRepairtimeNodeV2) {
                $invalidValues[] = is_object($getRepairtimeSubnodesSpecificTimesV2ResponseGetRepairtimeSubnodesSpecificTimesV2ReturnItem) ? get_class($getRepairtimeSubnodesSpecificTimesV2ResponseGetRepairtimeSubnodesSpecificTimesV2ReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeSubnodesSpecificTimesV2ResponseGetRepairtimeSubnodesSpecificTimesV2ReturnItem), var_export($getRepairtimeSubnodesSpecificTimesV2ResponseGetRepairtimeSubnodesSpecificTimesV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeSubnodesSpecificTimesV2Return property can only contain items of type \StructType\ExtRepairtimeNodeV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeSubnodesSpecificTimesV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV2[] $getRepairtimeSubnodesSpecificTimesV2Return
     * @return \StructType\GetRepairtimeSubnodesSpecificTimesV2Response
     */
    public function setGetRepairtimeSubnodesSpecificTimesV2Return(array $getRepairtimeSubnodesSpecificTimesV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeSubnodesSpecificTimesV2ReturnArrayErrorMessage = self::validateGetRepairtimeSubnodesSpecificTimesV2ReturnForArrayConstraintsFromSetGetRepairtimeSubnodesSpecificTimesV2Return($getRepairtimeSubnodesSpecificTimesV2Return))) {
            throw new \InvalidArgumentException($getRepairtimeSubnodesSpecificTimesV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeSubnodesSpecificTimesV2Return = $getRepairtimeSubnodesSpecificTimesV2Return;
        return $this;
    }
    /**
     * Add item to getRepairtimeSubnodesSpecificTimesV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV2 $item
     * @return \StructType\GetRepairtimeSubnodesSpecificTimesV2Response
     */
    public function addToGetRepairtimeSubnodesSpecificTimesV2Return(\StructType\ExtRepairtimeNodeV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNodeV2) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeSubnodesSpecificTimesV2Return property can only contain items of type \StructType\ExtRepairtimeNodeV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeSubnodesSpecificTimesV2Return[] = $item;
        return $this;
    }
}
