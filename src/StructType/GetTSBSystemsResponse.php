<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTSBSystemsResponse StructType
 * @subpackage Structs
 */
class GetTSBSystemsResponse extends AbstractStructBase
{
    /**
     * The getTSBSystemsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBCategory[]
     */
    public $getTSBSystemsReturn;
    /**
     * Constructor method for getTSBSystemsResponse
     * @uses GetTSBSystemsResponse::setGetTSBSystemsReturn()
     * @param \StructType\ExtTSBCategory[] $getTSBSystemsReturn
     */
    public function __construct(array $getTSBSystemsReturn = array())
    {
        $this
            ->setGetTSBSystemsReturn($getTSBSystemsReturn);
    }
    /**
     * Get getTSBSystemsReturn value
     * @return \StructType\ExtTSBCategory[]|null
     */
    public function getGetTSBSystemsReturn()
    {
        return $this->getTSBSystemsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTSBSystemsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTSBSystemsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTSBSystemsReturnForArrayConstraintsFromSetGetTSBSystemsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTSBSystemsResponseGetTSBSystemsReturnItem) {
            // validation for constraint: itemType
            if (!$getTSBSystemsResponseGetTSBSystemsReturnItem instanceof \StructType\ExtTSBCategory) {
                $invalidValues[] = is_object($getTSBSystemsResponseGetTSBSystemsReturnItem) ? get_class($getTSBSystemsResponseGetTSBSystemsReturnItem) : sprintf('%s(%s)', gettype($getTSBSystemsResponseGetTSBSystemsReturnItem), var_export($getTSBSystemsResponseGetTSBSystemsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getTSBSystemsReturn property can only contain items of type \StructType\ExtTSBCategory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getTSBSystemsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategory[] $getTSBSystemsReturn
     * @return \StructType\GetTSBSystemsResponse
     */
    public function setGetTSBSystemsReturn(array $getTSBSystemsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getTSBSystemsReturnArrayErrorMessage = self::validateGetTSBSystemsReturnForArrayConstraintsFromSetGetTSBSystemsReturn($getTSBSystemsReturn))) {
            throw new \InvalidArgumentException($getTSBSystemsReturnArrayErrorMessage, __LINE__);
        }
        $this->getTSBSystemsReturn = $getTSBSystemsReturn;
        return $this;
    }
    /**
     * Add item to getTSBSystemsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBCategory $item
     * @return \StructType\GetTSBSystemsResponse
     */
    public function addToGetTSBSystemsReturn(\StructType\ExtTSBCategory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBCategory) {
            throw new \InvalidArgumentException(sprintf('The getTSBSystemsReturn property can only contain items of type \StructType\ExtTSBCategory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getTSBSystemsReturn[] = $item;
        return $this;
    }
}
