<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTSBCasesRecallsSystemsV3Response StructType
 * @subpackage Structs
 */
class GetTSBCasesRecallsSystemsV3Response extends AbstractStructBase
{
    /**
     * The getTSBCasesRecallsSystemsV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategoryV3[]
     */
    public $getTSBCasesRecallsSystemsV3Return;
    /**
     * Constructor method for getTSBCasesRecallsSystemsV3Response
     * @uses GetTSBCasesRecallsSystemsV3Response::setGetTSBCasesRecallsSystemsV3Return()
     * @param \StructType\ExtTSBCategoryV3[] $getTSBCasesRecallsSystemsV3Return
     */
    public function __construct(array $getTSBCasesRecallsSystemsV3Return = array())
    {
        $this
            ->setGetTSBCasesRecallsSystemsV3Return($getTSBCasesRecallsSystemsV3Return);
    }
    /**
     * Get getTSBCasesRecallsSystemsV3Return value
     * @return \StructType\ExtTSBCategoryV3[]|null
     */
    public function getGetTSBCasesRecallsSystemsV3Return()
    {
        return $this->getTSBCasesRecallsSystemsV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTSBCasesRecallsSystemsV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTSBCasesRecallsSystemsV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTSBCasesRecallsSystemsV3ReturnForArrayConstraintsFromSetGetTSBCasesRecallsSystemsV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTSBCasesRecallsSystemsV3ResponseGetTSBCasesRecallsSystemsV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getTSBCasesRecallsSystemsV3ResponseGetTSBCasesRecallsSystemsV3ReturnItem instanceof \StructType\ExtTSBCategoryV3) {
                $invalidValues[] = is_object($getTSBCasesRecallsSystemsV3ResponseGetTSBCasesRecallsSystemsV3ReturnItem) ? get_class($getTSBCasesRecallsSystemsV3ResponseGetTSBCasesRecallsSystemsV3ReturnItem) : sprintf('%s(%s)', gettype($getTSBCasesRecallsSystemsV3ResponseGetTSBCasesRecallsSystemsV3ReturnItem), var_export($getTSBCasesRecallsSystemsV3ResponseGetTSBCasesRecallsSystemsV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getTSBCasesRecallsSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getTSBCasesRecallsSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3[] $getTSBCasesRecallsSystemsV3Return
     * @return \StructType\GetTSBCasesRecallsSystemsV3Response
     */
    public function setGetTSBCasesRecallsSystemsV3Return(array $getTSBCasesRecallsSystemsV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getTSBCasesRecallsSystemsV3ReturnArrayErrorMessage = self::validateGetTSBCasesRecallsSystemsV3ReturnForArrayConstraintsFromSetGetTSBCasesRecallsSystemsV3Return($getTSBCasesRecallsSystemsV3Return))) {
            throw new \InvalidArgumentException($getTSBCasesRecallsSystemsV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getTSBCasesRecallsSystemsV3Return = $getTSBCasesRecallsSystemsV3Return;
        return $this;
    }
    /**
     * Add item to getTSBCasesRecallsSystemsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV3 $item
     * @return \StructType\GetTSBCasesRecallsSystemsV3Response
     */
    public function addToGetTSBCasesRecallsSystemsV3Return(\StructType\ExtTSBCategoryV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategoryV3) {
            throw new \InvalidArgumentException(sprintf('The getTSBCasesRecallsSystemsV3Return property can only contain items of type \StructType\ExtTSBCategoryV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getTSBCasesRecallsSystemsV3Return[] = $item;
        return $this;
    }
}
