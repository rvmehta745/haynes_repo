<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterTSBSystemsV2Response StructType
 * @subpackage Structs
 */
class FilterTSBSystemsV2Response extends AbstractStructBase
{
    /**
     * The filterTSBSystemsV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategoryV2[]
     */
    public $filterTSBSystemsV2Return;
    /**
     * Constructor method for filterTSBSystemsV2Response
     * @uses FilterTSBSystemsV2Response::setFilterTSBSystemsV2Return()
     * @param \StructType\ExtTSBCategoryV2[] $filterTSBSystemsV2Return
     */
    public function __construct(array $filterTSBSystemsV2Return = array())
    {
        $this
            ->setFilterTSBSystemsV2Return($filterTSBSystemsV2Return);
    }
    /**
     * Get filterTSBSystemsV2Return value
     * @return \StructType\ExtTSBCategoryV2[]|null
     */
    public function getFilterTSBSystemsV2Return()
    {
        return $this->filterTSBSystemsV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setFilterTSBSystemsV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilterTSBSystemsV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilterTSBSystemsV2ReturnForArrayConstraintsFromSetFilterTSBSystemsV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $filterTSBSystemsV2ResponseFilterTSBSystemsV2ReturnItem) {
            // validation for constraint: itemType
            if (!$filterTSBSystemsV2ResponseFilterTSBSystemsV2ReturnItem instanceof \StructType\ExtTSBCategoryV2) {
                $invalidValues[] = is_object($filterTSBSystemsV2ResponseFilterTSBSystemsV2ReturnItem) ? get_class($filterTSBSystemsV2ResponseFilterTSBSystemsV2ReturnItem) : sprintf('%s(%s)', gettype($filterTSBSystemsV2ResponseFilterTSBSystemsV2ReturnItem), var_export($filterTSBSystemsV2ResponseFilterTSBSystemsV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The filterTSBSystemsV2Return property can only contain items of type \StructType\ExtTSBCategoryV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set filterTSBSystemsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV2[] $filterTSBSystemsV2Return
     * @return \StructType\FilterTSBSystemsV2Response
     */
    public function setFilterTSBSystemsV2Return(array $filterTSBSystemsV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($filterTSBSystemsV2ReturnArrayErrorMessage = self::validateFilterTSBSystemsV2ReturnForArrayConstraintsFromSetFilterTSBSystemsV2Return($filterTSBSystemsV2Return))) {
            throw new \InvalidArgumentException($filterTSBSystemsV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->filterTSBSystemsV2Return = $filterTSBSystemsV2Return;
        return $this;
    }
    /**
     * Add item to filterTSBSystemsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV2 $item
     * @return \StructType\FilterTSBSystemsV2Response
     */
    public function addToFilterTSBSystemsV2Return(\StructType\ExtTSBCategoryV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategoryV2) {
            throw new \InvalidArgumentException(sprintf('The filterTSBSystemsV2Return property can only contain items of type \StructType\ExtTSBCategoryV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->filterTSBSystemsV2Return[] = $item;
        return $this;
    }
}
