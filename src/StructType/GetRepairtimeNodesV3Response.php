<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeNodesV3Response StructType
 * @subpackage Structs
 */
class GetRepairtimeNodesV3Response extends AbstractStructBase
{
    /**
     * The getRepairtimeNodesV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNodeV3[]
     */
    public $getRepairtimeNodesV3Return;
    /**
     * Constructor method for getRepairtimeNodesV3Response
     * @uses GetRepairtimeNodesV3Response::setGetRepairtimeNodesV3Return()
     * @param \StructType\ExtRepairtimeNodeV3[] $getRepairtimeNodesV3Return
     */
    public function __construct(array $getRepairtimeNodesV3Return = array())
    {
        $this
            ->setGetRepairtimeNodesV3Return($getRepairtimeNodesV3Return);
    }
    /**
     * Get getRepairtimeNodesV3Return value
     * @return \StructType\ExtRepairtimeNodeV3[]|null
     */
    public function getGetRepairtimeNodesV3Return()
    {
        return $this->getRepairtimeNodesV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeNodesV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeNodesV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeNodesV3ReturnForArrayConstraintsFromSetGetRepairtimeNodesV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeNodesV3ResponseGetRepairtimeNodesV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeNodesV3ResponseGetRepairtimeNodesV3ReturnItem instanceof \StructType\ExtRepairtimeNodeV3) {
                $invalidValues[] = is_object($getRepairtimeNodesV3ResponseGetRepairtimeNodesV3ReturnItem) ? get_class($getRepairtimeNodesV3ResponseGetRepairtimeNodesV3ReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeNodesV3ResponseGetRepairtimeNodesV3ReturnItem), var_export($getRepairtimeNodesV3ResponseGetRepairtimeNodesV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeNodesV3Return property can only contain items of type \StructType\ExtRepairtimeNodeV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeNodesV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV3[] $getRepairtimeNodesV3Return
     * @return \StructType\GetRepairtimeNodesV3Response
     */
    public function setGetRepairtimeNodesV3Return(array $getRepairtimeNodesV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeNodesV3ReturnArrayErrorMessage = self::validateGetRepairtimeNodesV3ReturnForArrayConstraintsFromSetGetRepairtimeNodesV3Return($getRepairtimeNodesV3Return))) {
            throw new \InvalidArgumentException($getRepairtimeNodesV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeNodesV3Return = $getRepairtimeNodesV3Return;
        return $this;
    }
    /**
     * Add item to getRepairtimeNodesV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV3 $item
     * @return \StructType\GetRepairtimeNodesV3Response
     */
    public function addToGetRepairtimeNodesV3Return(\StructType\ExtRepairtimeNodeV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNodeV3) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeNodesV3Return property can only contain items of type \StructType\ExtRepairtimeNodeV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeNodesV3Return[] = $item;
        return $this;
    }
}
