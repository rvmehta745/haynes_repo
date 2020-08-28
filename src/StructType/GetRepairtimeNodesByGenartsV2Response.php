<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeNodesByGenartsV2Response StructType
 * @subpackage Structs
 */
class GetRepairtimeNodesByGenartsV2Response extends AbstractStructBase
{
    /**
     * The getRepairtimeNodesByGenartsV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNodeV2[]
     */
    public $getRepairtimeNodesByGenartsV2Return;
    /**
     * Constructor method for getRepairtimeNodesByGenartsV2Response
     * @uses GetRepairtimeNodesByGenartsV2Response::setGetRepairtimeNodesByGenartsV2Return()
     * @param \StructType\ExtRepairtimeNodeV2[] $getRepairtimeNodesByGenartsV2Return
     */
    public function __construct(array $getRepairtimeNodesByGenartsV2Return = array())
    {
        $this
            ->setGetRepairtimeNodesByGenartsV2Return($getRepairtimeNodesByGenartsV2Return);
    }
    /**
     * Get getRepairtimeNodesByGenartsV2Return value
     * @return \StructType\ExtRepairtimeNodeV2[]|null
     */
    public function getGetRepairtimeNodesByGenartsV2Return()
    {
        return $this->getRepairtimeNodesByGenartsV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeNodesByGenartsV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeNodesByGenartsV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeNodesByGenartsV2ReturnForArrayConstraintsFromSetGetRepairtimeNodesByGenartsV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeNodesByGenartsV2ResponseGetRepairtimeNodesByGenartsV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeNodesByGenartsV2ResponseGetRepairtimeNodesByGenartsV2ReturnItem instanceof \StructType\ExtRepairtimeNodeV2) {
                $invalidValues[] = is_object($getRepairtimeNodesByGenartsV2ResponseGetRepairtimeNodesByGenartsV2ReturnItem) ? get_class($getRepairtimeNodesByGenartsV2ResponseGetRepairtimeNodesByGenartsV2ReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeNodesByGenartsV2ResponseGetRepairtimeNodesByGenartsV2ReturnItem), var_export($getRepairtimeNodesByGenartsV2ResponseGetRepairtimeNodesByGenartsV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeNodesByGenartsV2Return property can only contain items of type \StructType\ExtRepairtimeNodeV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeNodesByGenartsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV2[] $getRepairtimeNodesByGenartsV2Return
     * @return \StructType\GetRepairtimeNodesByGenartsV2Response
     */
    public function setGetRepairtimeNodesByGenartsV2Return(array $getRepairtimeNodesByGenartsV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeNodesByGenartsV2ReturnArrayErrorMessage = self::validateGetRepairtimeNodesByGenartsV2ReturnForArrayConstraintsFromSetGetRepairtimeNodesByGenartsV2Return($getRepairtimeNodesByGenartsV2Return))) {
            throw new \InvalidArgumentException($getRepairtimeNodesByGenartsV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeNodesByGenartsV2Return = $getRepairtimeNodesByGenartsV2Return;
        return $this;
    }
    /**
     * Add item to getRepairtimeNodesByGenartsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV2 $item
     * @return \StructType\GetRepairtimeNodesByGenartsV2Response
     */
    public function addToGetRepairtimeNodesByGenartsV2Return(\StructType\ExtRepairtimeNodeV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNodeV2) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeNodesByGenartsV2Return property can only contain items of type \StructType\ExtRepairtimeNodeV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeNodesByGenartsV2Return[] = $item;
        return $this;
    }
}
