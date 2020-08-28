<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCasesSystemsV3Response StructType
 * @subpackage Structs
 */
class GetCasesSystemsV3Response extends AbstractStructBase
{
    /**
     * The getCasesSystemsV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategoryV3[]
     */
    public $getCasesSystemsV3Return;
    /**
     * Constructor method for getCasesSystemsV3Response
     * @uses GetCasesSystemsV3Response::setGetCasesSystemsV3Return()
     * @param \StructType\ExtTSBCategoryV3[] $getCasesSystemsV3Return
     */
    public function __construct(array $getCasesSystemsV3Return = array())
    {
        $this
            ->setGetCasesSystemsV3Return($getCasesSystemsV3Return);
    }
    /**
     * Get getCasesSystemsV3Return value
     * @return \StructType\ExtTSBCategoryV3[]|null
     */
    public function getGetCasesSystemsV3Return()
    {
        return $this->getCasesSystemsV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetCasesSystemsV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetCasesSystemsV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetCasesSystemsV3ReturnForArrayConstraintsFromSetGetCasesSystemsV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCasesSystemsV3ResponseGetCasesSystemsV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getCasesSystemsV3ResponseGetCasesSystemsV3ReturnItem instanceof \StructType\ExtTSBCategoryV3) {
                $invalidValues[] = is_object($getCasesSystemsV3ResponseGetCasesSystemsV3ReturnItem) ? get_class($getCasesSystemsV3ResponseGetCasesSystemsV3ReturnItem) : sprintf('%s(%s)', gettype($getCasesSystemsV3ResponseGetCasesSystemsV3ReturnItem), var_export($getCasesSystemsV3ResponseGetCasesSystemsV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getCasesSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getCasesSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3[] $getCasesSystemsV3Return
     * @return \StructType\GetCasesSystemsV3Response
     */
    public function setGetCasesSystemsV3Return(array $getCasesSystemsV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getCasesSystemsV3ReturnArrayErrorMessage = self::validateGetCasesSystemsV3ReturnForArrayConstraintsFromSetGetCasesSystemsV3Return($getCasesSystemsV3Return))) {
            throw new \InvalidArgumentException($getCasesSystemsV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getCasesSystemsV3Return = $getCasesSystemsV3Return;
        return $this;
    }
    /**
     * Add item to getCasesSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3 $item
     * @return \StructType\GetCasesSystemsV3Response
     */
    public function addToGetCasesSystemsV3Return(\StructType\ExtTSBCategoryV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategoryV3) {
            throw new \InvalidArgumentException(sprintf('The getCasesSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getCasesSystemsV3Return[] = $item;
        return $this;
    }
}
