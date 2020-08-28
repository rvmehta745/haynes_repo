<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for decodeVINV2Response StructType
 * @subpackage Structs
 */
class DecodeVINV2Response extends AbstractStructBase
{
    /**
     * The decodeVINV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtCarTypeV2[]
     */
    public $decodeVINV2Return;
    /**
     * Constructor method for decodeVINV2Response
     * @uses DecodeVINV2Response::setDecodeVINV2Return()
     * @param \StructType\ExtCarTypeV2[] $decodeVINV2Return
     */
    public function __construct(array $decodeVINV2Return = array())
    {
        $this
            ->setDecodeVINV2Return($decodeVINV2Return);
    }
    /**
     * Get decodeVINV2Return value
     * @return \StructType\ExtCarTypeV2[]|null
     */
    public function getDecodeVINV2Return()
    {
        return $this->decodeVINV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setDecodeVINV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDecodeVINV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDecodeVINV2ReturnForArrayConstraintsFromSetDecodeVINV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $decodeVINV2ResponseDecodeVINV2ReturnItem) {
            // validation for constraint: itemType
            if (!$decodeVINV2ResponseDecodeVINV2ReturnItem instanceof \StructType\ExtCarTypeV2) {
                $invalidValues[] = is_object($decodeVINV2ResponseDecodeVINV2ReturnItem) ? get_class($decodeVINV2ResponseDecodeVINV2ReturnItem) : sprintf('%s(%s)', gettype($decodeVINV2ResponseDecodeVINV2ReturnItem), var_export($decodeVINV2ResponseDecodeVINV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The decodeVINV2Return property can only contain items of type \StructType\ExtCarTypeV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set decodeVINV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarTypeV2[] $decodeVINV2Return
     * @return \StructType\DecodeVINV2Response
     */
    public function setDecodeVINV2Return(array $decodeVINV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($decodeVINV2ReturnArrayErrorMessage = self::validateDecodeVINV2ReturnForArrayConstraintsFromSetDecodeVINV2Return($decodeVINV2Return))) {
            throw new \InvalidArgumentException($decodeVINV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->decodeVINV2Return = $decodeVINV2Return;
        return $this;
    }
    /**
     * Add item to decodeVINV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarTypeV2 $item
     * @return \StructType\DecodeVINV2Response
     */
    public function addToDecodeVINV2Return(\StructType\ExtCarTypeV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtCarTypeV2) {
            throw new \InvalidArgumentException(sprintf('The decodeVINV2Return property can only contain items of type \StructType\ExtCarTypeV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->decodeVINV2Return[] = $item;
        return $this;
    }
}
