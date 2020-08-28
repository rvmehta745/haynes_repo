<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for decodeVINV3Response StructType
 * @subpackage Structs
 */
class DecodeVINV3Response extends AbstractStructBase
{
    /**
     * The decodeVINV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtCarTypeV3[]
     */
    public $decodeVINV3Return;
    /**
     * Constructor method for decodeVINV3Response
     * @uses DecodeVINV3Response::setDecodeVINV3Return()
     * @param \StructType\ExtCarTypeV3[] $decodeVINV3Return
     */
    public function __construct(array $decodeVINV3Return = array())
    {
        $this
            ->setDecodeVINV3Return($decodeVINV3Return);
    }
    /**
     * Get decodeVINV3Return value
     * @return \StructType\ExtCarTypeV3[]|null
     */
    public function getDecodeVINV3Return()
    {
        return $this->decodeVINV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setDecodeVINV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDecodeVINV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDecodeVINV3ReturnForArrayConstraintsFromSetDecodeVINV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $decodeVINV3ResponseDecodeVINV3ReturnItem) {
            // validation for constraint: itemType
            if (!$decodeVINV3ResponseDecodeVINV3ReturnItem instanceof \StructType\ExtCarTypeV3) {
                $invalidValues[] = is_object($decodeVINV3ResponseDecodeVINV3ReturnItem) ? get_class($decodeVINV3ResponseDecodeVINV3ReturnItem) : sprintf('%s(%s)', gettype($decodeVINV3ResponseDecodeVINV3ReturnItem), var_export($decodeVINV3ResponseDecodeVINV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The decodeVINV3Return property can only contain items of type \StructType\ExtCarTypeV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set decodeVINV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarTypeV3[] $decodeVINV3Return
     * @return \StructType\DecodeVINV3Response
     */
    public function setDecodeVINV3Return(array $decodeVINV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($decodeVINV3ReturnArrayErrorMessage = self::validateDecodeVINV3ReturnForArrayConstraintsFromSetDecodeVINV3Return($decodeVINV3Return))) {
            throw new \InvalidArgumentException($decodeVINV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->decodeVINV3Return = $decodeVINV3Return;
        return $this;
    }
    /**
     * Add item to decodeVINV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarTypeV3 $item
     * @return \StructType\DecodeVINV3Response
     */
    public function addToDecodeVINV3Return(\StructType\ExtCarTypeV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtCarTypeV3) {
            throw new \InvalidArgumentException(sprintf('The decodeVINV3Return property can only contain items of type \StructType\ExtCarTypeV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->decodeVINV3Return[] = $item;
        return $this;
    }
}
