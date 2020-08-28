<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterTSBCasesRecallsStoriesResponse StructType
 * @subpackage Structs
 */
class FilterTSBCasesRecallsStoriesResponse extends AbstractStructBase
{
    /**
     * The filterTSBCasesRecallsStoriesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategoryV5[]
     */
    public $filterTSBCasesRecallsStoriesReturn;
    /**
     * Constructor method for filterTSBCasesRecallsStoriesResponse
     * @uses FilterTSBCasesRecallsStoriesResponse::setFilterTSBCasesRecallsStoriesReturn()
     * @param \StructType\ExtTSBCategoryV5[] $filterTSBCasesRecallsStoriesReturn
     */
    public function __construct(array $filterTSBCasesRecallsStoriesReturn = array())
    {
        $this
            ->setFilterTSBCasesRecallsStoriesReturn($filterTSBCasesRecallsStoriesReturn);
    }
    /**
     * Get filterTSBCasesRecallsStoriesReturn value
     * @return \StructType\ExtTSBCategoryV5[]|null
     */
    public function getFilterTSBCasesRecallsStoriesReturn()
    {
        return $this->filterTSBCasesRecallsStoriesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setFilterTSBCasesRecallsStoriesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilterTSBCasesRecallsStoriesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilterTSBCasesRecallsStoriesReturnForArrayConstraintsFromSetFilterTSBCasesRecallsStoriesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $filterTSBCasesRecallsStoriesResponseFilterTSBCasesRecallsStoriesReturnItem) {
            // validation for constraint: itemType
            if (!$filterTSBCasesRecallsStoriesResponseFilterTSBCasesRecallsStoriesReturnItem instanceof \StructType\ExtTSBCategoryV5) {
                $invalidValues[] = is_object($filterTSBCasesRecallsStoriesResponseFilterTSBCasesRecallsStoriesReturnItem) ? get_class($filterTSBCasesRecallsStoriesResponseFilterTSBCasesRecallsStoriesReturnItem) : sprintf('%s(%s)', gettype($filterTSBCasesRecallsStoriesResponseFilterTSBCasesRecallsStoriesReturnItem), var_export($filterTSBCasesRecallsStoriesResponseFilterTSBCasesRecallsStoriesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The filterTSBCasesRecallsStoriesReturn property can only contain items of type \StructType\ExtTSBCategoryV5, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set filterTSBCasesRecallsStoriesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV5[] $filterTSBCasesRecallsStoriesReturn
     * @return \StructType\FilterTSBCasesRecallsStoriesResponse
     */
    public function setFilterTSBCasesRecallsStoriesReturn(array $filterTSBCasesRecallsStoriesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($filterTSBCasesRecallsStoriesReturnArrayErrorMessage = self::validateFilterTSBCasesRecallsStoriesReturnForArrayConstraintsFromSetFilterTSBCasesRecallsStoriesReturn($filterTSBCasesRecallsStoriesReturn))) {
            throw new \InvalidArgumentException($filterTSBCasesRecallsStoriesReturnArrayErrorMessage, __LINE__);
        }
        $this->filterTSBCasesRecallsStoriesReturn = $filterTSBCasesRecallsStoriesReturn;
        return $this;
    }
    /**
     * Add item to filterTSBCasesRecallsStoriesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV5 $item
     * @return \StructType\FilterTSBCasesRecallsStoriesResponse
     */
    public function addToFilterTSBCasesRecallsStoriesReturn(\StructType\ExtTSBCategoryV5 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategoryV5) {
            throw new \InvalidArgumentException(sprintf('The filterTSBCasesRecallsStoriesReturn property can only contain items of type \StructType\ExtTSBCategoryV5, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->filterTSBCasesRecallsStoriesReturn[] = $item;
        return $this;
    }
}
