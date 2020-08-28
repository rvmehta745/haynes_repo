<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRecallsSystemsV3Response StructType
 * @subpackage Structs
 */
class GetRecallsSystemsV3Response extends AbstractStructBase
{
    /**
     * The getRecallsSystemsV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategoryV3[]
     */
    public $getRecallsSystemsV3Return;
    /**
     * Constructor method for getRecallsSystemsV3Response
     * @uses GetRecallsSystemsV3Response::setGetRecallsSystemsV3Return()
     * @param \StructType\ExtTSBCategoryV3[] $getRecallsSystemsV3Return
     */
    public function __construct(array $getRecallsSystemsV3Return = array())
    {
        $this
            ->setGetRecallsSystemsV3Return($getRecallsSystemsV3Return);
    }
    /**
     * Get getRecallsSystemsV3Return value
     * @return \StructType\ExtTSBCategoryV3[]|null
     */
    public function getGetRecallsSystemsV3Return()
    {
        return $this->getRecallsSystemsV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRecallsSystemsV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRecallsSystemsV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRecallsSystemsV3ReturnForArrayConstraintsFromSetGetRecallsSystemsV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRecallsSystemsV3ResponseGetRecallsSystemsV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getRecallsSystemsV3ResponseGetRecallsSystemsV3ReturnItem instanceof \StructType\ExtTSBCategoryV3) {
                $invalidValues[] = is_object($getRecallsSystemsV3ResponseGetRecallsSystemsV3ReturnItem) ? get_class($getRecallsSystemsV3ResponseGetRecallsSystemsV3ReturnItem) : sprintf('%s(%s)', gettype($getRecallsSystemsV3ResponseGetRecallsSystemsV3ReturnItem), var_export($getRecallsSystemsV3ResponseGetRecallsSystemsV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRecallsSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRecallsSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3[] $getRecallsSystemsV3Return
     * @return \StructType\GetRecallsSystemsV3Response
     */
    public function setGetRecallsSystemsV3Return(array $getRecallsSystemsV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getRecallsSystemsV3ReturnArrayErrorMessage = self::validateGetRecallsSystemsV3ReturnForArrayConstraintsFromSetGetRecallsSystemsV3Return($getRecallsSystemsV3Return))) {
            throw new \InvalidArgumentException($getRecallsSystemsV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getRecallsSystemsV3Return = $getRecallsSystemsV3Return;
        return $this;
    }
    /**
     * Add item to getRecallsSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3 $item
     * @return \StructType\GetRecallsSystemsV3Response
     */
    public function addToGetRecallsSystemsV3Return(\StructType\ExtTSBCategoryV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategoryV3) {
            throw new \InvalidArgumentException(sprintf('The getRecallsSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRecallsSystemsV3Return[] = $item;
        return $this;
    }
}
