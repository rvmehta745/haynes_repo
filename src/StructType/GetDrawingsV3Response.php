<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDrawingsV3Response StructType
 * @subpackage Structs
 */
class GetDrawingsV3Response extends AbstractStructBase
{
    /**
     * The getDrawingsV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtDrawingV2[]
     */
    public $getDrawingsV3Return;
    /**
     * Constructor method for getDrawingsV3Response
     * @uses GetDrawingsV3Response::setGetDrawingsV3Return()
     * @param \StructType\ExtDrawingV2[] $getDrawingsV3Return
     */
    public function __construct(array $getDrawingsV3Return = array())
    {
        $this
            ->setGetDrawingsV3Return($getDrawingsV3Return);
    }
    /**
     * Get getDrawingsV3Return value
     * @return \StructType\ExtDrawingV2[]|null
     */
    public function getGetDrawingsV3Return()
    {
        return $this->getDrawingsV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetDrawingsV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetDrawingsV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetDrawingsV3ReturnForArrayConstraintsFromSetGetDrawingsV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDrawingsV3ResponseGetDrawingsV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getDrawingsV3ResponseGetDrawingsV3ReturnItem instanceof \StructType\ExtDrawingV2) {
                $invalidValues[] = is_object($getDrawingsV3ResponseGetDrawingsV3ReturnItem) ? get_class($getDrawingsV3ResponseGetDrawingsV3ReturnItem) : sprintf('%s(%s)', gettype($getDrawingsV3ResponseGetDrawingsV3ReturnItem), var_export($getDrawingsV3ResponseGetDrawingsV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getDrawingsV3Return property can only contain items of type \StructType\ExtDrawingV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getDrawingsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtDrawingV2[] $getDrawingsV3Return
     * @return \StructType\GetDrawingsV3Response
     */
    public function setGetDrawingsV3Return(array $getDrawingsV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getDrawingsV3ReturnArrayErrorMessage = self::validateGetDrawingsV3ReturnForArrayConstraintsFromSetGetDrawingsV3Return($getDrawingsV3Return))) {
            throw new \InvalidArgumentException($getDrawingsV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getDrawingsV3Return = $getDrawingsV3Return;
        return $this;
    }
    /**
     * Add item to getDrawingsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtDrawingV2 $item
     * @return \StructType\GetDrawingsV3Response
     */
    public function addToGetDrawingsV3Return(\StructType\ExtDrawingV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtDrawingV2) {
            throw new \InvalidArgumentException(sprintf('The getDrawingsV3Return property can only contain items of type \StructType\ExtDrawingV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getDrawingsV3Return[] = $item;
        return $this;
    }
}
