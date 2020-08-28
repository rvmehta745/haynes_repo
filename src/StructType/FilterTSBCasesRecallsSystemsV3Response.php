<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterTSBCasesRecallsSystemsV3Response StructType
 * @subpackage Structs
 */
class FilterTSBCasesRecallsSystemsV3Response extends AbstractStructBase
{
    /**
     * The filterTSBCasesRecallsSystemsV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategoryV3[]
     */
    public $filterTSBCasesRecallsSystemsV3Return;
    /**
     * Constructor method for filterTSBCasesRecallsSystemsV3Response
     * @uses FilterTSBCasesRecallsSystemsV3Response::setFilterTSBCasesRecallsSystemsV3Return()
     * @param \StructType\ExtTSBCategoryV3[] $filterTSBCasesRecallsSystemsV3Return
     */
    public function __construct(array $filterTSBCasesRecallsSystemsV3Return = array())
    {
        $this
            ->setFilterTSBCasesRecallsSystemsV3Return($filterTSBCasesRecallsSystemsV3Return);
    }
    /**
     * Get filterTSBCasesRecallsSystemsV3Return value
     * @return \StructType\ExtTSBCategoryV3[]|null
     */
    public function getFilterTSBCasesRecallsSystemsV3Return()
    {
        return $this->filterTSBCasesRecallsSystemsV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setFilterTSBCasesRecallsSystemsV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilterTSBCasesRecallsSystemsV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilterTSBCasesRecallsSystemsV3ReturnForArrayConstraintsFromSetFilterTSBCasesRecallsSystemsV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $filterTSBCasesRecallsSystemsV3ResponseFilterTSBCasesRecallsSystemsV3ReturnItem) {
            // validation for constraint: itemType
            if (!$filterTSBCasesRecallsSystemsV3ResponseFilterTSBCasesRecallsSystemsV3ReturnItem instanceof \StructType\ExtTSBCategoryV3) {
                $invalidValues[] = is_object($filterTSBCasesRecallsSystemsV3ResponseFilterTSBCasesRecallsSystemsV3ReturnItem) ? get_class($filterTSBCasesRecallsSystemsV3ResponseFilterTSBCasesRecallsSystemsV3ReturnItem) : sprintf('%s(%s)', gettype($filterTSBCasesRecallsSystemsV3ResponseFilterTSBCasesRecallsSystemsV3ReturnItem), var_export($filterTSBCasesRecallsSystemsV3ResponseFilterTSBCasesRecallsSystemsV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The filterTSBCasesRecallsSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set filterTSBCasesRecallsSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3[] $filterTSBCasesRecallsSystemsV3Return
     * @return \StructType\FilterTSBCasesRecallsSystemsV3Response
     */
    public function setFilterTSBCasesRecallsSystemsV3Return(array $filterTSBCasesRecallsSystemsV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($filterTSBCasesRecallsSystemsV3ReturnArrayErrorMessage = self::validateFilterTSBCasesRecallsSystemsV3ReturnForArrayConstraintsFromSetFilterTSBCasesRecallsSystemsV3Return($filterTSBCasesRecallsSystemsV3Return))) {
            throw new \InvalidArgumentException($filterTSBCasesRecallsSystemsV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->filterTSBCasesRecallsSystemsV3Return = $filterTSBCasesRecallsSystemsV3Return;
        return $this;
    }
    /**
     * Add item to filterTSBCasesRecallsSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3 $item
     * @return \StructType\FilterTSBCasesRecallsSystemsV3Response
     */
    public function addToFilterTSBCasesRecallsSystemsV3Return(\StructType\ExtTSBCategoryV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategoryV3) {
            throw new \InvalidArgumentException(sprintf('The filterTSBCasesRecallsSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->filterTSBCasesRecallsSystemsV3Return[] = $item;
        return $this;
    }
}
