<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterTSBSystemsV3Response StructType
 * @subpackage Structs
 */
class FilterTSBSystemsV3Response extends AbstractStructBase
{
    /**
     * The filterTSBSystemsV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategoryV3[]
     */
    public $filterTSBSystemsV3Return;
    /**
     * Constructor method for filterTSBSystemsV3Response
     * @uses FilterTSBSystemsV3Response::setFilterTSBSystemsV3Return()
     * @param \StructType\ExtTSBCategoryV3[] $filterTSBSystemsV3Return
     */
    public function __construct(array $filterTSBSystemsV3Return = array())
    {
        $this
            ->setFilterTSBSystemsV3Return($filterTSBSystemsV3Return);
    }
    /**
     * Get filterTSBSystemsV3Return value
     * @return \StructType\ExtTSBCategoryV3[]|null
     */
    public function getFilterTSBSystemsV3Return()
    {
        return $this->filterTSBSystemsV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setFilterTSBSystemsV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilterTSBSystemsV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilterTSBSystemsV3ReturnForArrayConstraintsFromSetFilterTSBSystemsV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $filterTSBSystemsV3ResponseFilterTSBSystemsV3ReturnItem) {
            // validation for constraint: itemType
            if (!$filterTSBSystemsV3ResponseFilterTSBSystemsV3ReturnItem instanceof \StructType\ExtTSBCategoryV3) {
                $invalidValues[] = is_object($filterTSBSystemsV3ResponseFilterTSBSystemsV3ReturnItem) ? get_class($filterTSBSystemsV3ResponseFilterTSBSystemsV3ReturnItem) : sprintf('%s(%s)', gettype($filterTSBSystemsV3ResponseFilterTSBSystemsV3ReturnItem), var_export($filterTSBSystemsV3ResponseFilterTSBSystemsV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The filterTSBSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set filterTSBSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3[] $filterTSBSystemsV3Return
     * @return \StructType\FilterTSBSystemsV3Response
     */
    public function setFilterTSBSystemsV3Return(array $filterTSBSystemsV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($filterTSBSystemsV3ReturnArrayErrorMessage = self::validateFilterTSBSystemsV3ReturnForArrayConstraintsFromSetFilterTSBSystemsV3Return($filterTSBSystemsV3Return))) {
            throw new \InvalidArgumentException($filterTSBSystemsV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->filterTSBSystemsV3Return = $filterTSBSystemsV3Return;
        return $this;
    }
    /**
     * Add item to filterTSBSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3 $item
     * @return \StructType\FilterTSBSystemsV3Response
     */
    public function addToFilterTSBSystemsV3Return(\StructType\ExtTSBCategoryV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategoryV3) {
            throw new \InvalidArgumentException(sprintf('The filterTSBSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->filterTSBSystemsV3Return[] = $item;
        return $this;
    }
}
