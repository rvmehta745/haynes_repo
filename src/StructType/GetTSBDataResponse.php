<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTSBDataResponse StructType
 * @subpackage Structs
 */
class GetTSBDataResponse extends AbstractStructBase
{
    /**
     * The getTSBDataReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBGroup[]
     */
    public $getTSBDataReturn;
    /**
     * Constructor method for getTSBDataResponse
     * @uses GetTSBDataResponse::setGetTSBDataReturn()
     * @param \StructType\ExtTSBGroup[] $getTSBDataReturn
     */
    public function __construct(array $getTSBDataReturn = array())
    {
        $this
            ->setGetTSBDataReturn($getTSBDataReturn);
    }
    /**
     * Get getTSBDataReturn value
     * @return \StructType\ExtTSBGroup[]|null
     */
    public function getGetTSBDataReturn()
    {
        return $this->getTSBDataReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTSBDataReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTSBDataReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTSBDataReturnForArrayConstraintsFromSetGetTSBDataReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTSBDataResponseGetTSBDataReturnItem) {
            // validation for constraint: itemType
            if (!$getTSBDataResponseGetTSBDataReturnItem instanceof \StructType\ExtTSBGroup) {
                $invalidValues[] = is_object($getTSBDataResponseGetTSBDataReturnItem) ? get_class($getTSBDataResponseGetTSBDataReturnItem) : sprintf('%s(%s)', gettype($getTSBDataResponseGetTSBDataReturnItem), var_export($getTSBDataResponseGetTSBDataReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getTSBDataReturn property can only contain items of type \StructType\ExtTSBGroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getTSBDataReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBGroup[] $getTSBDataReturn
     * @return \StructType\GetTSBDataResponse
     */
    public function setGetTSBDataReturn(array $getTSBDataReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getTSBDataReturnArrayErrorMessage = self::validateGetTSBDataReturnForArrayConstraintsFromSetGetTSBDataReturn($getTSBDataReturn))) {
            throw new \InvalidArgumentException($getTSBDataReturnArrayErrorMessage, __LINE__);
        }
        $this->getTSBDataReturn = $getTSBDataReturn;
        return $this;
    }
    /**
     * Add item to getTSBDataReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBGroup $item
     * @return \StructType\GetTSBDataResponse
     */
    public function addToGetTSBDataReturn(\StructType\ExtTSBGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBGroup) {
            throw new \InvalidArgumentException(sprintf('The getTSBDataReturn property can only contain items of type \StructType\ExtTSBGroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getTSBDataReturn[] = $item;
        return $this;
    }
}
