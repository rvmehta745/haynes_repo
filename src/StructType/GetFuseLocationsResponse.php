<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFuseLocationsResponse StructType
 * @subpackage Structs
 */
class GetFuseLocationsResponse extends AbstractStructBase
{
    /**
     * The getFuseLocationsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtLocationSystem[]
     */
    public $getFuseLocationsReturn;
    /**
     * Constructor method for getFuseLocationsResponse
     * @uses GetFuseLocationsResponse::setGetFuseLocationsReturn()
     * @param \StructType\ExtLocationSystem[] $getFuseLocationsReturn
     */
    public function __construct(array $getFuseLocationsReturn = array())
    {
        $this
            ->setGetFuseLocationsReturn($getFuseLocationsReturn);
    }
    /**
     * Get getFuseLocationsReturn value
     * @return \StructType\ExtLocationSystem[]|null
     */
    public function getGetFuseLocationsReturn()
    {
        return $this->getFuseLocationsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetFuseLocationsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetFuseLocationsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetFuseLocationsReturnForArrayConstraintsFromSetGetFuseLocationsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFuseLocationsResponseGetFuseLocationsReturnItem) {
            // validation for constraint: itemType
            if (!$getFuseLocationsResponseGetFuseLocationsReturnItem instanceof \StructType\ExtLocationSystem) {
                $invalidValues[] = is_object($getFuseLocationsResponseGetFuseLocationsReturnItem) ? get_class($getFuseLocationsResponseGetFuseLocationsReturnItem) : sprintf('%s(%s)', gettype($getFuseLocationsResponseGetFuseLocationsReturnItem), var_export($getFuseLocationsResponseGetFuseLocationsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getFuseLocationsReturn property can only contain items of type \StructType\ExtLocationSystem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getFuseLocationsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLocationSystem[] $getFuseLocationsReturn
     * @return \StructType\GetFuseLocationsResponse
     */
    public function setGetFuseLocationsReturn(array $getFuseLocationsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getFuseLocationsReturnArrayErrorMessage = self::validateGetFuseLocationsReturnForArrayConstraintsFromSetGetFuseLocationsReturn($getFuseLocationsReturn))) {
            throw new \InvalidArgumentException($getFuseLocationsReturnArrayErrorMessage, __LINE__);
        }
        $this->getFuseLocationsReturn = $getFuseLocationsReturn;
        return $this;
    }
    /**
     * Add item to getFuseLocationsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLocationSystem $item
     * @return \StructType\GetFuseLocationsResponse
     */
    public function addToGetFuseLocationsReturn(\StructType\ExtLocationSystem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtLocationSystem) {
            throw new \InvalidArgumentException(sprintf('The getFuseLocationsReturn property can only contain items of type \StructType\ExtLocationSystem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getFuseLocationsReturn[] = $item;
        return $this;
    }
}
