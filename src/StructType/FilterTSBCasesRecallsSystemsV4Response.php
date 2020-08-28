<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterTSBCasesRecallsSystemsV4Response StructType
 * @subpackage Structs
 */
class FilterTSBCasesRecallsSystemsV4Response extends AbstractStructBase
{
    /**
     * The filterTSBCasesRecallsSystemsV4Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategoryV4[]
     */
    public $filterTSBCasesRecallsSystemsV4Return;
    /**
     * Constructor method for filterTSBCasesRecallsSystemsV4Response
     * @uses FilterTSBCasesRecallsSystemsV4Response::setFilterTSBCasesRecallsSystemsV4Return()
     * @param \StructType\ExtTSBCategoryV4[] $filterTSBCasesRecallsSystemsV4Return
     */
    public function __construct(array $filterTSBCasesRecallsSystemsV4Return = array())
    {
        $this
            ->setFilterTSBCasesRecallsSystemsV4Return($filterTSBCasesRecallsSystemsV4Return);
    }
    /**
     * Get filterTSBCasesRecallsSystemsV4Return value
     * @return \StructType\ExtTSBCategoryV4[]|null
     */
    public function getFilterTSBCasesRecallsSystemsV4Return()
    {
        return $this->filterTSBCasesRecallsSystemsV4Return;
    }
    /**
     * This method is responsible for validating the values passed to the setFilterTSBCasesRecallsSystemsV4Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilterTSBCasesRecallsSystemsV4Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilterTSBCasesRecallsSystemsV4ReturnForArrayConstraintsFromSetFilterTSBCasesRecallsSystemsV4Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $filterTSBCasesRecallsSystemsV4ResponseFilterTSBCasesRecallsSystemsV4ReturnItem) {
            // validation for constraint: itemType
            if (!$filterTSBCasesRecallsSystemsV4ResponseFilterTSBCasesRecallsSystemsV4ReturnItem instanceof \StructType\ExtTSBCategoryV4) {
                $invalidValues[] = is_object($filterTSBCasesRecallsSystemsV4ResponseFilterTSBCasesRecallsSystemsV4ReturnItem) ? get_class($filterTSBCasesRecallsSystemsV4ResponseFilterTSBCasesRecallsSystemsV4ReturnItem) : sprintf('%s(%s)', gettype($filterTSBCasesRecallsSystemsV4ResponseFilterTSBCasesRecallsSystemsV4ReturnItem), var_export($filterTSBCasesRecallsSystemsV4ResponseFilterTSBCasesRecallsSystemsV4ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The filterTSBCasesRecallsSystemsV4Return property can only contain items of type \StructType\ExtTSBCategoryV4, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set filterTSBCasesRecallsSystemsV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV4[] $filterTSBCasesRecallsSystemsV4Return
     * @return \StructType\FilterTSBCasesRecallsSystemsV4Response
     */
    public function setFilterTSBCasesRecallsSystemsV4Return(array $filterTSBCasesRecallsSystemsV4Return = array())
    {
        // validation for constraint: array
        if ('' !== ($filterTSBCasesRecallsSystemsV4ReturnArrayErrorMessage = self::validateFilterTSBCasesRecallsSystemsV4ReturnForArrayConstraintsFromSetFilterTSBCasesRecallsSystemsV4Return($filterTSBCasesRecallsSystemsV4Return))) {
            throw new \InvalidArgumentException($filterTSBCasesRecallsSystemsV4ReturnArrayErrorMessage, __LINE__);
        }
        $this->filterTSBCasesRecallsSystemsV4Return = $filterTSBCasesRecallsSystemsV4Return;
        return $this;
    }
    /**
     * Add item to filterTSBCasesRecallsSystemsV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV4 $item
     * @return \StructType\FilterTSBCasesRecallsSystemsV4Response
     */
    public function addToFilterTSBCasesRecallsSystemsV4Return(\StructType\ExtTSBCategoryV4 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategoryV4) {
            throw new \InvalidArgumentException(sprintf('The filterTSBCasesRecallsSystemsV4Return property can only contain items of type \StructType\ExtTSBCategoryV4, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->filterTSBCasesRecallsSystemsV4Return[] = $item;
        return $this;
    }
}
