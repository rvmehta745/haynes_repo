<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeSubnodesByGroupV2Response StructType
 * @subpackage Structs
 */
class GetRepairtimeSubnodesByGroupV2Response extends AbstractStructBase
{
    /**
     * The getRepairtimeSubnodesByGroupV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNodeV2[]
     */
    public $getRepairtimeSubnodesByGroupV2Return;
    /**
     * Constructor method for getRepairtimeSubnodesByGroupV2Response
     * @uses GetRepairtimeSubnodesByGroupV2Response::setGetRepairtimeSubnodesByGroupV2Return()
     * @param \StructType\ExtRepairtimeNodeV2[] $getRepairtimeSubnodesByGroupV2Return
     */
    public function __construct(array $getRepairtimeSubnodesByGroupV2Return = array())
    {
        $this
            ->setGetRepairtimeSubnodesByGroupV2Return($getRepairtimeSubnodesByGroupV2Return);
    }
    /**
     * Get getRepairtimeSubnodesByGroupV2Return value
     * @return \StructType\ExtRepairtimeNodeV2[]|null
     */
    public function getGetRepairtimeSubnodesByGroupV2Return()
    {
        return $this->getRepairtimeSubnodesByGroupV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeSubnodesByGroupV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeSubnodesByGroupV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeSubnodesByGroupV2ReturnForArrayConstraintsFromSetGetRepairtimeSubnodesByGroupV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeSubnodesByGroupV2ResponseGetRepairtimeSubnodesByGroupV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeSubnodesByGroupV2ResponseGetRepairtimeSubnodesByGroupV2ReturnItem instanceof \StructType\ExtRepairtimeNodeV2) {
                $invalidValues[] = is_object($getRepairtimeSubnodesByGroupV2ResponseGetRepairtimeSubnodesByGroupV2ReturnItem) ? get_class($getRepairtimeSubnodesByGroupV2ResponseGetRepairtimeSubnodesByGroupV2ReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeSubnodesByGroupV2ResponseGetRepairtimeSubnodesByGroupV2ReturnItem), var_export($getRepairtimeSubnodesByGroupV2ResponseGetRepairtimeSubnodesByGroupV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeSubnodesByGroupV2Return property can only contain items of type \StructType\ExtRepairtimeNodeV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeSubnodesByGroupV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV2[] $getRepairtimeSubnodesByGroupV2Return
     * @return \StructType\GetRepairtimeSubnodesByGroupV2Response
     */
    public function setGetRepairtimeSubnodesByGroupV2Return(array $getRepairtimeSubnodesByGroupV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeSubnodesByGroupV2ReturnArrayErrorMessage = self::validateGetRepairtimeSubnodesByGroupV2ReturnForArrayConstraintsFromSetGetRepairtimeSubnodesByGroupV2Return($getRepairtimeSubnodesByGroupV2Return))) {
            throw new \InvalidArgumentException($getRepairtimeSubnodesByGroupV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeSubnodesByGroupV2Return = $getRepairtimeSubnodesByGroupV2Return;
        return $this;
    }
    /**
     * Add item to getRepairtimeSubnodesByGroupV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV2 $item
     * @return \StructType\GetRepairtimeSubnodesByGroupV2Response
     */
    public function addToGetRepairtimeSubnodesByGroupV2Return(\StructType\ExtRepairtimeNodeV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNodeV2) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeSubnodesByGroupV2Return property can only contain items of type \StructType\ExtRepairtimeNodeV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeSubnodesByGroupV2Return[] = $item;
        return $this;
    }
}
