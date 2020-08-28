<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsResponse StructType
 * @subpackage Structs
 */
class GetAdjustmentsResponse extends AbstractStructBase
{
    /**
     * The getAdjustmentsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtAdjustment[]
     */
    public $getAdjustmentsReturn;
    /**
     * Constructor method for getAdjustmentsResponse
     * @uses GetAdjustmentsResponse::setGetAdjustmentsReturn()
     * @param \StructType\ExtAdjustment[] $getAdjustmentsReturn
     */
    public function __construct(array $getAdjustmentsReturn = array())
    {
        $this
            ->setGetAdjustmentsReturn($getAdjustmentsReturn);
    }
    /**
     * Get getAdjustmentsReturn value
     * @return \StructType\ExtAdjustment[]|null
     */
    public function getGetAdjustmentsReturn()
    {
        return $this->getAdjustmentsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetAdjustmentsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetAdjustmentsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetAdjustmentsReturnForArrayConstraintsFromSetGetAdjustmentsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAdjustmentsResponseGetAdjustmentsReturnItem) {
            // validation for constraint: itemType
            if (!$getAdjustmentsResponseGetAdjustmentsReturnItem instanceof \StructType\ExtAdjustment) {
                $invalidValues[] = is_object($getAdjustmentsResponseGetAdjustmentsReturnItem) ? get_class($getAdjustmentsResponseGetAdjustmentsReturnItem) : sprintf('%s(%s)', gettype($getAdjustmentsResponseGetAdjustmentsReturnItem), var_export($getAdjustmentsResponseGetAdjustmentsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getAdjustmentsReturn property can only contain items of type \StructType\ExtAdjustment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getAdjustmentsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustment[] $getAdjustmentsReturn
     * @return \StructType\GetAdjustmentsResponse
     */
    public function setGetAdjustmentsReturn(array $getAdjustmentsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getAdjustmentsReturnArrayErrorMessage = self::validateGetAdjustmentsReturnForArrayConstraintsFromSetGetAdjustmentsReturn($getAdjustmentsReturn))) {
            throw new \InvalidArgumentException($getAdjustmentsReturnArrayErrorMessage, __LINE__);
        }
        $this->getAdjustmentsReturn = $getAdjustmentsReturn;
        return $this;
    }
    /**
     * Add item to getAdjustmentsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtAdjustment $item
     * @return \StructType\GetAdjustmentsResponse
     */
    public function addToGetAdjustmentsReturn(\StructType\ExtAdjustment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtAdjustment) {
            throw new \InvalidArgumentException(sprintf('The getAdjustmentsReturn property can only contain items of type \StructType\ExtAdjustment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getAdjustmentsReturn[] = $item;
        return $this;
    }
}
