<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeSubnodesByGroupV3Response StructType
 * @subpackage Structs
 */
class GetRepairtimeSubnodesByGroupV3Response extends AbstractStructBase
{
    /**
     * The getRepairtimeSubnodesByGroupV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNodeV3[]
     */
    public $getRepairtimeSubnodesByGroupV3Return;
    /**
     * Constructor method for getRepairtimeSubnodesByGroupV3Response
     * @uses GetRepairtimeSubnodesByGroupV3Response::setGetRepairtimeSubnodesByGroupV3Return()
     * @param \StructType\ExtRepairtimeNodeV3[] $getRepairtimeSubnodesByGroupV3Return
     */
    public function __construct(array $getRepairtimeSubnodesByGroupV3Return = array())
    {
        $this
            ->setGetRepairtimeSubnodesByGroupV3Return($getRepairtimeSubnodesByGroupV3Return);
    }
    /**
     * Get getRepairtimeSubnodesByGroupV3Return value
     * @return \StructType\ExtRepairtimeNodeV3[]|null
     */
    public function getGetRepairtimeSubnodesByGroupV3Return()
    {
        return $this->getRepairtimeSubnodesByGroupV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeSubnodesByGroupV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeSubnodesByGroupV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeSubnodesByGroupV3ReturnForArrayConstraintsFromSetGetRepairtimeSubnodesByGroupV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeSubnodesByGroupV3ResponseGetRepairtimeSubnodesByGroupV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeSubnodesByGroupV3ResponseGetRepairtimeSubnodesByGroupV3ReturnItem instanceof \StructType\ExtRepairtimeNodeV3) {
                $invalidValues[] = is_object($getRepairtimeSubnodesByGroupV3ResponseGetRepairtimeSubnodesByGroupV3ReturnItem) ? get_class($getRepairtimeSubnodesByGroupV3ResponseGetRepairtimeSubnodesByGroupV3ReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeSubnodesByGroupV3ResponseGetRepairtimeSubnodesByGroupV3ReturnItem), var_export($getRepairtimeSubnodesByGroupV3ResponseGetRepairtimeSubnodesByGroupV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeSubnodesByGroupV3Return property can only contain items of type \StructType\ExtRepairtimeNodeV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeSubnodesByGroupV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV3[] $getRepairtimeSubnodesByGroupV3Return
     * @return \StructType\GetRepairtimeSubnodesByGroupV3Response
     */
    public function setGetRepairtimeSubnodesByGroupV3Return(array $getRepairtimeSubnodesByGroupV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeSubnodesByGroupV3ReturnArrayErrorMessage = self::validateGetRepairtimeSubnodesByGroupV3ReturnForArrayConstraintsFromSetGetRepairtimeSubnodesByGroupV3Return($getRepairtimeSubnodesByGroupV3Return))) {
            throw new \InvalidArgumentException($getRepairtimeSubnodesByGroupV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeSubnodesByGroupV3Return = $getRepairtimeSubnodesByGroupV3Return;
        return $this;
    }
    /**
     * Add item to getRepairtimeSubnodesByGroupV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV3 $item
     * @return \StructType\GetRepairtimeSubnodesByGroupV3Response
     */
    public function addToGetRepairtimeSubnodesByGroupV3Return(\StructType\ExtRepairtimeNodeV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNodeV3) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeSubnodesByGroupV3Return property can only contain items of type \StructType\ExtRepairtimeNodeV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeSubnodesByGroupV3Return[] = $item;
        return $this;
    }
}
