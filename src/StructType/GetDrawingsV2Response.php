<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDrawingsV2Response StructType
 * @subpackage Structs
 */
class GetDrawingsV2Response extends AbstractStructBase
{
    /**
     * The getDrawingsV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtDrawingV2[]
     */
    public $getDrawingsV2Return;
    /**
     * Constructor method for getDrawingsV2Response
     * @uses GetDrawingsV2Response::setGetDrawingsV2Return()
     * @param \StructType\ExtDrawingV2[] $getDrawingsV2Return
     */
    public function __construct(array $getDrawingsV2Return = array())
    {
        $this
            ->setGetDrawingsV2Return($getDrawingsV2Return);
    }
    /**
     * Get getDrawingsV2Return value
     * @return \StructType\ExtDrawingV2[]|null
     */
    public function getGetDrawingsV2Return()
    {
        return $this->getDrawingsV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetDrawingsV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetDrawingsV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetDrawingsV2ReturnForArrayConstraintsFromSetGetDrawingsV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDrawingsV2ResponseGetDrawingsV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getDrawingsV2ResponseGetDrawingsV2ReturnItem instanceof \StructType\ExtDrawingV2) {
                $invalidValues[] = is_object($getDrawingsV2ResponseGetDrawingsV2ReturnItem) ? get_class($getDrawingsV2ResponseGetDrawingsV2ReturnItem) : sprintf('%s(%s)', gettype($getDrawingsV2ResponseGetDrawingsV2ReturnItem), var_export($getDrawingsV2ResponseGetDrawingsV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getDrawingsV2Return property can only contain items of type \StructType\ExtDrawingV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getDrawingsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtDrawingV2[] $getDrawingsV2Return
     * @return \StructType\GetDrawingsV2Response
     */
    public function setGetDrawingsV2Return(array $getDrawingsV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getDrawingsV2ReturnArrayErrorMessage = self::validateGetDrawingsV2ReturnForArrayConstraintsFromSetGetDrawingsV2Return($getDrawingsV2Return))) {
            throw new \InvalidArgumentException($getDrawingsV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getDrawingsV2Return = $getDrawingsV2Return;
        return $this;
    }
    /**
     * Add item to getDrawingsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtDrawingV2 $item
     * @return \StructType\GetDrawingsV2Response
     */
    public function addToGetDrawingsV2Return(\StructType\ExtDrawingV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtDrawingV2) {
            throw new \InvalidArgumentException(sprintf('The getDrawingsV2Return property can only contain items of type \StructType\ExtDrawingV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getDrawingsV2Return[] = $item;
        return $this;
    }
}
