<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDrawingsV4Response StructType
 * @subpackage Structs
 */
class GetDrawingsV4Response extends AbstractStructBase
{
    /**
     * The getDrawingsV4Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtDrawingV3[]
     */
    public $getDrawingsV4Return;
    /**
     * Constructor method for getDrawingsV4Response
     * @uses GetDrawingsV4Response::setGetDrawingsV4Return()
     * @param \StructType\ExtDrawingV3[] $getDrawingsV4Return
     */
    public function __construct(array $getDrawingsV4Return = array())
    {
        $this
            ->setGetDrawingsV4Return($getDrawingsV4Return);
    }
    /**
     * Get getDrawingsV4Return value
     * @return \StructType\ExtDrawingV3[]|null
     */
    public function getGetDrawingsV4Return()
    {
        return $this->getDrawingsV4Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetDrawingsV4Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetDrawingsV4Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetDrawingsV4ReturnForArrayConstraintsFromSetGetDrawingsV4Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDrawingsV4ResponseGetDrawingsV4ReturnItem) {
            // validation for constraint: itemType
            if (!$getDrawingsV4ResponseGetDrawingsV4ReturnItem instanceof \StructType\ExtDrawingV3) {
                $invalidValues[] = is_object($getDrawingsV4ResponseGetDrawingsV4ReturnItem) ? get_class($getDrawingsV4ResponseGetDrawingsV4ReturnItem) : sprintf('%s(%s)', gettype($getDrawingsV4ResponseGetDrawingsV4ReturnItem), var_export($getDrawingsV4ResponseGetDrawingsV4ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getDrawingsV4Return property can only contain items of type \StructType\ExtDrawingV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getDrawingsV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtDrawingV3[] $getDrawingsV4Return
     * @return \StructType\GetDrawingsV4Response
     */
    public function setGetDrawingsV4Return(array $getDrawingsV4Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getDrawingsV4ReturnArrayErrorMessage = self::validateGetDrawingsV4ReturnForArrayConstraintsFromSetGetDrawingsV4Return($getDrawingsV4Return))) {
            throw new \InvalidArgumentException($getDrawingsV4ReturnArrayErrorMessage, __LINE__);
        }
        $this->getDrawingsV4Return = $getDrawingsV4Return;
        return $this;
    }
    /**
     * Add item to getDrawingsV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtDrawingV3 $item
     * @return \StructType\GetDrawingsV4Response
     */
    public function addToGetDrawingsV4Return(\StructType\ExtDrawingV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtDrawingV3) {
            throw new \InvalidArgumentException(sprintf('The getDrawingsV4Return property can only contain items of type \StructType\ExtDrawingV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getDrawingsV4Return[] = $item;
        return $this;
    }
}
