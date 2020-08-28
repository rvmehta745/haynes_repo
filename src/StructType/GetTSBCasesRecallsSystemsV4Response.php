<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTSBCasesRecallsSystemsV4Response StructType
 * @subpackage Structs
 */
class GetTSBCasesRecallsSystemsV4Response extends AbstractStructBase
{
    /**
     * The getTSBCasesRecallsSystemsV4Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategoryV4[]
     */
    public $getTSBCasesRecallsSystemsV4Return;
    /**
     * Constructor method for getTSBCasesRecallsSystemsV4Response
     * @uses GetTSBCasesRecallsSystemsV4Response::setGetTSBCasesRecallsSystemsV4Return()
     * @param \StructType\ExtTSBCategoryV4[] $getTSBCasesRecallsSystemsV4Return
     */
    public function __construct(array $getTSBCasesRecallsSystemsV4Return = array())
    {
        $this
            ->setGetTSBCasesRecallsSystemsV4Return($getTSBCasesRecallsSystemsV4Return);
    }
    /**
     * Get getTSBCasesRecallsSystemsV4Return value
     * @return \StructType\ExtTSBCategoryV4[]|null
     */
    public function getGetTSBCasesRecallsSystemsV4Return()
    {
        return $this->getTSBCasesRecallsSystemsV4Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTSBCasesRecallsSystemsV4Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTSBCasesRecallsSystemsV4Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTSBCasesRecallsSystemsV4ReturnForArrayConstraintsFromSetGetTSBCasesRecallsSystemsV4Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTSBCasesRecallsSystemsV4ResponseGetTSBCasesRecallsSystemsV4ReturnItem) {
            // validation for constraint: itemType
            if (!$getTSBCasesRecallsSystemsV4ResponseGetTSBCasesRecallsSystemsV4ReturnItem instanceof \StructType\ExtTSBCategoryV4) {
                $invalidValues[] = is_object($getTSBCasesRecallsSystemsV4ResponseGetTSBCasesRecallsSystemsV4ReturnItem) ? get_class($getTSBCasesRecallsSystemsV4ResponseGetTSBCasesRecallsSystemsV4ReturnItem) : sprintf('%s(%s)', gettype($getTSBCasesRecallsSystemsV4ResponseGetTSBCasesRecallsSystemsV4ReturnItem), var_export($getTSBCasesRecallsSystemsV4ResponseGetTSBCasesRecallsSystemsV4ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getTSBCasesRecallsSystemsV4Return property can only contain items of type \StructType\ExtTSBCategoryV4, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getTSBCasesRecallsSystemsV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV4[] $getTSBCasesRecallsSystemsV4Return
     * @return \StructType\GetTSBCasesRecallsSystemsV4Response
     */
    public function setGetTSBCasesRecallsSystemsV4Return(array $getTSBCasesRecallsSystemsV4Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getTSBCasesRecallsSystemsV4ReturnArrayErrorMessage = self::validateGetTSBCasesRecallsSystemsV4ReturnForArrayConstraintsFromSetGetTSBCasesRecallsSystemsV4Return($getTSBCasesRecallsSystemsV4Return))) {
            throw new \InvalidArgumentException($getTSBCasesRecallsSystemsV4ReturnArrayErrorMessage, __LINE__);
        }
        $this->getTSBCasesRecallsSystemsV4Return = $getTSBCasesRecallsSystemsV4Return;
        return $this;
    }
    /**
     * Add item to getTSBCasesRecallsSystemsV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategoryV4 $item
     * @return \StructType\GetTSBCasesRecallsSystemsV4Response
     */
    public function addToGetTSBCasesRecallsSystemsV4Return(\StructType\ExtTSBCategoryV4 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategoryV4) {
            throw new \InvalidArgumentException(sprintf('The getTSBCasesRecallsSystemsV4Return property can only contain items of type \StructType\ExtTSBCategoryV4, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getTSBCasesRecallsSystemsV4Return[] = $item;
        return $this;
    }
}
