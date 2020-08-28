<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterRecallsSystemsV3Response StructType
 * @subpackage Structs
 */
class FilterRecallsSystemsV3Response extends AbstractStructBase
{
    /**
     * The filterRecallsSystemsV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategoryV3[]
     */
    public $filterRecallsSystemsV3Return;
    /**
     * Constructor method for filterRecallsSystemsV3Response
     * @uses FilterRecallsSystemsV3Response::setFilterRecallsSystemsV3Return()
     * @param \StructType\ExtTSBCategoryV3[] $filterRecallsSystemsV3Return
     */
    public function __construct(array $filterRecallsSystemsV3Return = array())
    {
        $this
            ->setFilterRecallsSystemsV3Return($filterRecallsSystemsV3Return);
    }
    /**
     * Get filterRecallsSystemsV3Return value
     * @return \StructType\ExtTSBCategoryV3[]|null
     */
    public function getFilterRecallsSystemsV3Return()
    {
        return $this->filterRecallsSystemsV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setFilterRecallsSystemsV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilterRecallsSystemsV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilterRecallsSystemsV3ReturnForArrayConstraintsFromSetFilterRecallsSystemsV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $filterRecallsSystemsV3ResponseFilterRecallsSystemsV3ReturnItem) {
            // validation for constraint: itemType
            if (!$filterRecallsSystemsV3ResponseFilterRecallsSystemsV3ReturnItem instanceof \StructType\ExtTSBCategoryV3) {
                $invalidValues[] = is_object($filterRecallsSystemsV3ResponseFilterRecallsSystemsV3ReturnItem) ? get_class($filterRecallsSystemsV3ResponseFilterRecallsSystemsV3ReturnItem) : sprintf('%s(%s)', gettype($filterRecallsSystemsV3ResponseFilterRecallsSystemsV3ReturnItem), var_export($filterRecallsSystemsV3ResponseFilterRecallsSystemsV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The filterRecallsSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set filterRecallsSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3[] $filterRecallsSystemsV3Return
     * @return \StructType\FilterRecallsSystemsV3Response
     */
    public function setFilterRecallsSystemsV3Return(array $filterRecallsSystemsV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($filterRecallsSystemsV3ReturnArrayErrorMessage = self::validateFilterRecallsSystemsV3ReturnForArrayConstraintsFromSetFilterRecallsSystemsV3Return($filterRecallsSystemsV3Return))) {
            throw new \InvalidArgumentException($filterRecallsSystemsV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->filterRecallsSystemsV3Return = $filterRecallsSystemsV3Return;
        return $this;
    }
    /**
     * Add item to filterRecallsSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3 $item
     * @return \StructType\FilterRecallsSystemsV3Response
     */
    public function addToFilterRecallsSystemsV3Return(\StructType\ExtTSBCategoryV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategoryV3) {
            throw new \InvalidArgumentException(sprintf('The filterRecallsSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->filterRecallsSystemsV3Return[] = $item;
        return $this;
    }
}
