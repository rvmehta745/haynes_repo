<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSubCarTypesResponse StructType
 * @subpackage Structs
 */
class GetSubCarTypesResponse extends AbstractStructBase
{
    /**
     * The getSubCarTypesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtCarType[]
     */
    public $getSubCarTypesReturn;
    /**
     * Constructor method for getSubCarTypesResponse
     * @uses GetSubCarTypesResponse::setGetSubCarTypesReturn()
     * @param \StructType\ExtCarType[] $getSubCarTypesReturn
     */
    public function __construct(array $getSubCarTypesReturn = array())
    {
        $this
            ->setGetSubCarTypesReturn($getSubCarTypesReturn);
    }
    /**
     * Get getSubCarTypesReturn value
     * @return \StructType\ExtCarType[]|null
     */
    public function getGetSubCarTypesReturn()
    {
        return $this->getSubCarTypesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetSubCarTypesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetSubCarTypesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetSubCarTypesReturnForArrayConstraintsFromSetGetSubCarTypesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSubCarTypesResponseGetSubCarTypesReturnItem) {
            // validation for constraint: itemType
            if (!$getSubCarTypesResponseGetSubCarTypesReturnItem instanceof \StructType\ExtCarType) {
                $invalidValues[] = is_object($getSubCarTypesResponseGetSubCarTypesReturnItem) ? get_class($getSubCarTypesResponseGetSubCarTypesReturnItem) : sprintf('%s(%s)', gettype($getSubCarTypesResponseGetSubCarTypesReturnItem), var_export($getSubCarTypesResponseGetSubCarTypesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getSubCarTypesReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getSubCarTypesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType[] $getSubCarTypesReturn
     * @return \StructType\GetSubCarTypesResponse
     */
    public function setGetSubCarTypesReturn(array $getSubCarTypesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getSubCarTypesReturnArrayErrorMessage = self::validateGetSubCarTypesReturnForArrayConstraintsFromSetGetSubCarTypesReturn($getSubCarTypesReturn))) {
            throw new \InvalidArgumentException($getSubCarTypesReturnArrayErrorMessage, __LINE__);
        }
        $this->getSubCarTypesReturn = $getSubCarTypesReturn;
        return $this;
    }
    /**
     * Add item to getSubCarTypesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType $item
     * @return \StructType\GetSubCarTypesResponse
     */
    public function addToGetSubCarTypesReturn(\StructType\ExtCarType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtCarType) {
            throw new \InvalidArgumentException(sprintf('The getSubCarTypesReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getSubCarTypesReturn[] = $item;
        return $this;
    }
}
