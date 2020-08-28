<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeNodesByGenartsV3Response StructType
 * @subpackage Structs
 */
class GetRepairtimeNodesByGenartsV3Response extends AbstractStructBase
{
    /**
     * The getRepairtimeNodesByGenartsV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNodeV3[]
     */
    public $getRepairtimeNodesByGenartsV3Return;
    /**
     * Constructor method for getRepairtimeNodesByGenartsV3Response
     * @uses GetRepairtimeNodesByGenartsV3Response::setGetRepairtimeNodesByGenartsV3Return()
     * @param \StructType\ExtRepairtimeNodeV3[] $getRepairtimeNodesByGenartsV3Return
     */
    public function __construct(array $getRepairtimeNodesByGenartsV3Return = array())
    {
        $this
            ->setGetRepairtimeNodesByGenartsV3Return($getRepairtimeNodesByGenartsV3Return);
    }
    /**
     * Get getRepairtimeNodesByGenartsV3Return value
     * @return \StructType\ExtRepairtimeNodeV3[]|null
     */
    public function getGetRepairtimeNodesByGenartsV3Return()
    {
        return $this->getRepairtimeNodesByGenartsV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeNodesByGenartsV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeNodesByGenartsV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeNodesByGenartsV3ReturnForArrayConstraintsFromSetGetRepairtimeNodesByGenartsV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeNodesByGenartsV3ResponseGetRepairtimeNodesByGenartsV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeNodesByGenartsV3ResponseGetRepairtimeNodesByGenartsV3ReturnItem instanceof \StructType\ExtRepairtimeNodeV3) {
                $invalidValues[] = is_object($getRepairtimeNodesByGenartsV3ResponseGetRepairtimeNodesByGenartsV3ReturnItem) ? get_class($getRepairtimeNodesByGenartsV3ResponseGetRepairtimeNodesByGenartsV3ReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeNodesByGenartsV3ResponseGetRepairtimeNodesByGenartsV3ReturnItem), var_export($getRepairtimeNodesByGenartsV3ResponseGetRepairtimeNodesByGenartsV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeNodesByGenartsV3Return property can only contain items of type \StructType\ExtRepairtimeNodeV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeNodesByGenartsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV3[] $getRepairtimeNodesByGenartsV3Return
     * @return \StructType\GetRepairtimeNodesByGenartsV3Response
     */
    public function setGetRepairtimeNodesByGenartsV3Return(array $getRepairtimeNodesByGenartsV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeNodesByGenartsV3ReturnArrayErrorMessage = self::validateGetRepairtimeNodesByGenartsV3ReturnForArrayConstraintsFromSetGetRepairtimeNodesByGenartsV3Return($getRepairtimeNodesByGenartsV3Return))) {
            throw new \InvalidArgumentException($getRepairtimeNodesByGenartsV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeNodesByGenartsV3Return = $getRepairtimeNodesByGenartsV3Return;
        return $this;
    }
    /**
     * Add item to getRepairtimeNodesByGenartsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV3 $item
     * @return \StructType\GetRepairtimeNodesByGenartsV3Response
     */
    public function addToGetRepairtimeNodesByGenartsV3Return(\StructType\ExtRepairtimeNodeV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNodeV3) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeNodesByGenartsV3Return property can only contain items of type \StructType\ExtRepairtimeNodeV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeNodesByGenartsV3Return[] = $item;
        return $this;
    }
}
