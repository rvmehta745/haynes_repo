<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeNodesV2Response StructType
 * @subpackage Structs
 */
class GetRepairtimeNodesV2Response extends AbstractStructBase
{
    /**
     * The getRepairtimeNodesV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNodeV2[]
     */
    public $getRepairtimeNodesV2Return;
    /**
     * Constructor method for getRepairtimeNodesV2Response
     * @uses GetRepairtimeNodesV2Response::setGetRepairtimeNodesV2Return()
     * @param \StructType\ExtRepairtimeNodeV2[] $getRepairtimeNodesV2Return
     */
    public function __construct(array $getRepairtimeNodesV2Return = array())
    {
        $this
            ->setGetRepairtimeNodesV2Return($getRepairtimeNodesV2Return);
    }
    /**
     * Get getRepairtimeNodesV2Return value
     * @return \StructType\ExtRepairtimeNodeV2[]|null
     */
    public function getGetRepairtimeNodesV2Return()
    {
        return $this->getRepairtimeNodesV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeNodesV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeNodesV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeNodesV2ReturnForArrayConstraintsFromSetGetRepairtimeNodesV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeNodesV2ResponseGetRepairtimeNodesV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeNodesV2ResponseGetRepairtimeNodesV2ReturnItem instanceof \StructType\ExtRepairtimeNodeV2) {
                $invalidValues[] = is_object($getRepairtimeNodesV2ResponseGetRepairtimeNodesV2ReturnItem) ? get_class($getRepairtimeNodesV2ResponseGetRepairtimeNodesV2ReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeNodesV2ResponseGetRepairtimeNodesV2ReturnItem), var_export($getRepairtimeNodesV2ResponseGetRepairtimeNodesV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeNodesV2Return property can only contain items of type \StructType\ExtRepairtimeNodeV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeNodesV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV2[] $getRepairtimeNodesV2Return
     * @return \StructType\GetRepairtimeNodesV2Response
     */
    public function setGetRepairtimeNodesV2Return(array $getRepairtimeNodesV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeNodesV2ReturnArrayErrorMessage = self::validateGetRepairtimeNodesV2ReturnForArrayConstraintsFromSetGetRepairtimeNodesV2Return($getRepairtimeNodesV2Return))) {
            throw new \InvalidArgumentException($getRepairtimeNodesV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeNodesV2Return = $getRepairtimeNodesV2Return;
        return $this;
    }
    /**
     * Add item to getRepairtimeNodesV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV2 $item
     * @return \StructType\GetRepairtimeNodesV2Response
     */
    public function addToGetRepairtimeNodesV2Return(\StructType\ExtRepairtimeNodeV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNodeV2) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeNodesV2Return property can only contain items of type \StructType\ExtRepairtimeNodeV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeNodesV2Return[] = $item;
        return $this;
    }
}
