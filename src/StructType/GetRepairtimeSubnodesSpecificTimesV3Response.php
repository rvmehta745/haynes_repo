<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeSubnodesSpecificTimesV3Response StructType
 * @subpackage Structs
 */
class GetRepairtimeSubnodesSpecificTimesV3Response extends AbstractStructBase
{
    /**
     * The getRepairtimeSubnodesSpecificTimesV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNodeV3[]
     */
    public $getRepairtimeSubnodesSpecificTimesV3Return;
    /**
     * Constructor method for getRepairtimeSubnodesSpecificTimesV3Response
     * @uses GetRepairtimeSubnodesSpecificTimesV3Response::setGetRepairtimeSubnodesSpecificTimesV3Return()
     * @param \StructType\ExtRepairtimeNodeV3[] $getRepairtimeSubnodesSpecificTimesV3Return
     */
    public function __construct(array $getRepairtimeSubnodesSpecificTimesV3Return = array())
    {
        $this
            ->setGetRepairtimeSubnodesSpecificTimesV3Return($getRepairtimeSubnodesSpecificTimesV3Return);
    }
    /**
     * Get getRepairtimeSubnodesSpecificTimesV3Return value
     * @return \StructType\ExtRepairtimeNodeV3[]|null
     */
    public function getGetRepairtimeSubnodesSpecificTimesV3Return()
    {
        return $this->getRepairtimeSubnodesSpecificTimesV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeSubnodesSpecificTimesV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeSubnodesSpecificTimesV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeSubnodesSpecificTimesV3ReturnForArrayConstraintsFromSetGetRepairtimeSubnodesSpecificTimesV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeSubnodesSpecificTimesV3ResponseGetRepairtimeSubnodesSpecificTimesV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeSubnodesSpecificTimesV3ResponseGetRepairtimeSubnodesSpecificTimesV3ReturnItem instanceof \StructType\ExtRepairtimeNodeV3) {
                $invalidValues[] = is_object($getRepairtimeSubnodesSpecificTimesV3ResponseGetRepairtimeSubnodesSpecificTimesV3ReturnItem) ? get_class($getRepairtimeSubnodesSpecificTimesV3ResponseGetRepairtimeSubnodesSpecificTimesV3ReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeSubnodesSpecificTimesV3ResponseGetRepairtimeSubnodesSpecificTimesV3ReturnItem), var_export($getRepairtimeSubnodesSpecificTimesV3ResponseGetRepairtimeSubnodesSpecificTimesV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeSubnodesSpecificTimesV3Return property can only contain items of type \StructType\ExtRepairtimeNodeV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeSubnodesSpecificTimesV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV3[] $getRepairtimeSubnodesSpecificTimesV3Return
     * @return \StructType\GetRepairtimeSubnodesSpecificTimesV3Response
     */
    public function setGetRepairtimeSubnodesSpecificTimesV3Return(array $getRepairtimeSubnodesSpecificTimesV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeSubnodesSpecificTimesV3ReturnArrayErrorMessage = self::validateGetRepairtimeSubnodesSpecificTimesV3ReturnForArrayConstraintsFromSetGetRepairtimeSubnodesSpecificTimesV3Return($getRepairtimeSubnodesSpecificTimesV3Return))) {
            throw new \InvalidArgumentException($getRepairtimeSubnodesSpecificTimesV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeSubnodesSpecificTimesV3Return = $getRepairtimeSubnodesSpecificTimesV3Return;
        return $this;
    }
    /**
     * Add item to getRepairtimeSubnodesSpecificTimesV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV3 $item
     * @return \StructType\GetRepairtimeSubnodesSpecificTimesV3Response
     */
    public function addToGetRepairtimeSubnodesSpecificTimesV3Return(\StructType\ExtRepairtimeNodeV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNodeV3) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeSubnodesSpecificTimesV3Return property can only contain items of type \StructType\ExtRepairtimeNodeV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeSubnodesSpecificTimesV3Return[] = $item;
        return $this;
    }
}
