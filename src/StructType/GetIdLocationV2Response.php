<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getIdLocationV2Response StructType
 * @subpackage Structs
 */
class GetIdLocationV2Response extends AbstractStructBase
{
    /**
     * The getIdLocationV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtIdLocationV2[]
     */
    public $getIdLocationV2Return;
    /**
     * Constructor method for getIdLocationV2Response
     * @uses GetIdLocationV2Response::setGetIdLocationV2Return()
     * @param \StructType\ExtIdLocationV2[] $getIdLocationV2Return
     */
    public function __construct(array $getIdLocationV2Return = array())
    {
        $this
            ->setGetIdLocationV2Return($getIdLocationV2Return);
    }
    /**
     * Get getIdLocationV2Return value
     * @return \StructType\ExtIdLocationV2[]|null
     */
    public function getGetIdLocationV2Return()
    {
        return $this->getIdLocationV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetIdLocationV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetIdLocationV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetIdLocationV2ReturnForArrayConstraintsFromSetGetIdLocationV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIdLocationV2ResponseGetIdLocationV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getIdLocationV2ResponseGetIdLocationV2ReturnItem instanceof \StructType\ExtIdLocationV2) {
                $invalidValues[] = is_object($getIdLocationV2ResponseGetIdLocationV2ReturnItem) ? get_class($getIdLocationV2ResponseGetIdLocationV2ReturnItem) : sprintf('%s(%s)', gettype($getIdLocationV2ResponseGetIdLocationV2ReturnItem), var_export($getIdLocationV2ResponseGetIdLocationV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getIdLocationV2Return property can only contain items of type \StructType\ExtIdLocationV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getIdLocationV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtIdLocationV2[] $getIdLocationV2Return
     * @return \StructType\GetIdLocationV2Response
     */
    public function setGetIdLocationV2Return(array $getIdLocationV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getIdLocationV2ReturnArrayErrorMessage = self::validateGetIdLocationV2ReturnForArrayConstraintsFromSetGetIdLocationV2Return($getIdLocationV2Return))) {
            throw new \InvalidArgumentException($getIdLocationV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getIdLocationV2Return = $getIdLocationV2Return;
        return $this;
    }
    /**
     * Add item to getIdLocationV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtIdLocationV2 $item
     * @return \StructType\GetIdLocationV2Response
     */
    public function addToGetIdLocationV2Return(\StructType\ExtIdLocationV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtIdLocationV2) {
            throw new \InvalidArgumentException(sprintf('The getIdLocationV2Return property can only contain items of type \StructType\ExtIdLocationV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getIdLocationV2Return[] = $item;
        return $this;
    }
}
