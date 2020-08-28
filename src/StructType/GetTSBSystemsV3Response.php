<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTSBSystemsV3Response StructType
 * @subpackage Structs
 */
class GetTSBSystemsV3Response extends AbstractStructBase
{
    /**
     * The getTSBSystemsV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategoryV3[]
     */
    public $getTSBSystemsV3Return;
    /**
     * Constructor method for getTSBSystemsV3Response
     * @uses GetTSBSystemsV3Response::setGetTSBSystemsV3Return()
     * @param \StructType\ExtTSBCategoryV3[] $getTSBSystemsV3Return
     */
    public function __construct(array $getTSBSystemsV3Return = array())
    {
        $this
            ->setGetTSBSystemsV3Return($getTSBSystemsV3Return);
    }
    /**
     * Get getTSBSystemsV3Return value
     * @return \StructType\ExtTSBCategoryV3[]|null
     */
    public function getGetTSBSystemsV3Return()
    {
        return $this->getTSBSystemsV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTSBSystemsV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTSBSystemsV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTSBSystemsV3ReturnForArrayConstraintsFromSetGetTSBSystemsV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTSBSystemsV3ResponseGetTSBSystemsV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getTSBSystemsV3ResponseGetTSBSystemsV3ReturnItem instanceof \StructType\ExtTSBCategoryV3) {
                $invalidValues[] = is_object($getTSBSystemsV3ResponseGetTSBSystemsV3ReturnItem) ? get_class($getTSBSystemsV3ResponseGetTSBSystemsV3ReturnItem) : sprintf('%s(%s)', gettype($getTSBSystemsV3ResponseGetTSBSystemsV3ReturnItem), var_export($getTSBSystemsV3ResponseGetTSBSystemsV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getTSBSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getTSBSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3[] $getTSBSystemsV3Return
     * @return \StructType\GetTSBSystemsV3Response
     */
    public function setGetTSBSystemsV3Return(array $getTSBSystemsV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getTSBSystemsV3ReturnArrayErrorMessage = self::validateGetTSBSystemsV3ReturnForArrayConstraintsFromSetGetTSBSystemsV3Return($getTSBSystemsV3Return))) {
            throw new \InvalidArgumentException($getTSBSystemsV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getTSBSystemsV3Return = $getTSBSystemsV3Return;
        return $this;
    }
    /**
     * Add item to getTSBSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3 $item
     * @return \StructType\GetTSBSystemsV3Response
     */
    public function addToGetTSBSystemsV3Return(\StructType\ExtTSBCategoryV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategoryV3) {
            throw new \InvalidArgumentException(sprintf('The getTSBSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getTSBSystemsV3Return[] = $item;
        return $this;
    }
}
