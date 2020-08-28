<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTSBSystemsV2Response StructType
 * @subpackage Structs
 */
class GetTSBSystemsV2Response extends AbstractStructBase
{
    /**
     * The getTSBSystemsV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategoryV2[]
     */
    public $getTSBSystemsV2Return;
    /**
     * Constructor method for getTSBSystemsV2Response
     * @uses GetTSBSystemsV2Response::setGetTSBSystemsV2Return()
     * @param \StructType\ExtTSBCategoryV2[] $getTSBSystemsV2Return
     */
    public function __construct(array $getTSBSystemsV2Return = array())
    {
        $this
            ->setGetTSBSystemsV2Return($getTSBSystemsV2Return);
    }
    /**
     * Get getTSBSystemsV2Return value
     * @return \StructType\ExtTSBCategoryV2[]|null
     */
    public function getGetTSBSystemsV2Return()
    {
        return $this->getTSBSystemsV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTSBSystemsV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTSBSystemsV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTSBSystemsV2ReturnForArrayConstraintsFromSetGetTSBSystemsV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTSBSystemsV2ResponseGetTSBSystemsV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getTSBSystemsV2ResponseGetTSBSystemsV2ReturnItem instanceof \StructType\ExtTSBCategoryV2) {
                $invalidValues[] = is_object($getTSBSystemsV2ResponseGetTSBSystemsV2ReturnItem) ? get_class($getTSBSystemsV2ResponseGetTSBSystemsV2ReturnItem) : sprintf('%s(%s)', gettype($getTSBSystemsV2ResponseGetTSBSystemsV2ReturnItem), var_export($getTSBSystemsV2ResponseGetTSBSystemsV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getTSBSystemsV2Return property can only contain items of type \StructType\ExtTSBCategoryV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getTSBSystemsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV2[] $getTSBSystemsV2Return
     * @return \StructType\GetTSBSystemsV2Response
     */
    public function setGetTSBSystemsV2Return(array $getTSBSystemsV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getTSBSystemsV2ReturnArrayErrorMessage = self::validateGetTSBSystemsV2ReturnForArrayConstraintsFromSetGetTSBSystemsV2Return($getTSBSystemsV2Return))) {
            throw new \InvalidArgumentException($getTSBSystemsV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getTSBSystemsV2Return = $getTSBSystemsV2Return;
        return $this;
    }
    /**
     * Add item to getTSBSystemsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV2 $item
     * @return \StructType\GetTSBSystemsV2Response
     */
    public function addToGetTSBSystemsV2Return(\StructType\ExtTSBCategoryV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategoryV2) {
            throw new \InvalidArgumentException(sprintf('The getTSBSystemsV2Return property can only contain items of type \StructType\ExtTSBCategoryV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getTSBSystemsV2Return[] = $item;
        return $this;
    }
}
