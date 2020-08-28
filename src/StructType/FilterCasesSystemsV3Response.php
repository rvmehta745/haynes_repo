<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterCasesSystemsV3Response StructType
 * @subpackage Structs
 */
class FilterCasesSystemsV3Response extends AbstractStructBase
{
    /**
     * The filterCasesSystemsV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategoryV3[]
     */
    public $filterCasesSystemsV3Return;
    /**
     * Constructor method for filterCasesSystemsV3Response
     * @uses FilterCasesSystemsV3Response::setFilterCasesSystemsV3Return()
     * @param \StructType\ExtTSBCategoryV3[] $filterCasesSystemsV3Return
     */
    public function __construct(array $filterCasesSystemsV3Return = array())
    {
        $this
            ->setFilterCasesSystemsV3Return($filterCasesSystemsV3Return);
    }
    /**
     * Get filterCasesSystemsV3Return value
     * @return \StructType\ExtTSBCategoryV3[]|null
     */
    public function getFilterCasesSystemsV3Return()
    {
        return $this->filterCasesSystemsV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setFilterCasesSystemsV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilterCasesSystemsV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilterCasesSystemsV3ReturnForArrayConstraintsFromSetFilterCasesSystemsV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $filterCasesSystemsV3ResponseFilterCasesSystemsV3ReturnItem) {
            // validation for constraint: itemType
            if (!$filterCasesSystemsV3ResponseFilterCasesSystemsV3ReturnItem instanceof \StructType\ExtTSBCategoryV3) {
                $invalidValues[] = is_object($filterCasesSystemsV3ResponseFilterCasesSystemsV3ReturnItem) ? get_class($filterCasesSystemsV3ResponseFilterCasesSystemsV3ReturnItem) : sprintf('%s(%s)', gettype($filterCasesSystemsV3ResponseFilterCasesSystemsV3ReturnItem), var_export($filterCasesSystemsV3ResponseFilterCasesSystemsV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The filterCasesSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set filterCasesSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3[] $filterCasesSystemsV3Return
     * @return \StructType\FilterCasesSystemsV3Response
     */
    public function setFilterCasesSystemsV3Return(array $filterCasesSystemsV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($filterCasesSystemsV3ReturnArrayErrorMessage = self::validateFilterCasesSystemsV3ReturnForArrayConstraintsFromSetFilterCasesSystemsV3Return($filterCasesSystemsV3Return))) {
            throw new \InvalidArgumentException($filterCasesSystemsV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->filterCasesSystemsV3Return = $filterCasesSystemsV3Return;
        return $this;
    }
    /**
     * Add item to filterCasesSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3 $item
     * @return \StructType\FilterCasesSystemsV3Response
     */
    public function addToFilterCasesSystemsV3Return(\StructType\ExtTSBCategoryV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategoryV3) {
            throw new \InvalidArgumentException(sprintf('The filterCasesSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->filterCasesSystemsV3Return[] = $item;
        return $this;
    }
}
