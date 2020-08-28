<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getIdentificationByTecdocNumberResponse StructType
 * @subpackage Structs
 */
class GetIdentificationByTecdocNumberResponse extends AbstractStructBase
{
    /**
     * The getIdentificationByTecdocNumberReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtWsIdentificationElement[]
     */
    public $getIdentificationByTecdocNumberReturn;
    /**
     * Constructor method for getIdentificationByTecdocNumberResponse
     * @uses GetIdentificationByTecdocNumberResponse::setGetIdentificationByTecdocNumberReturn()
     * @param \StructType\ExtWsIdentificationElement[] $getIdentificationByTecdocNumberReturn
     */
    public function __construct(array $getIdentificationByTecdocNumberReturn = array())
    {
        $this
            ->setGetIdentificationByTecdocNumberReturn($getIdentificationByTecdocNumberReturn);
    }
    /**
     * Get getIdentificationByTecdocNumberReturn value
     * @return \StructType\ExtWsIdentificationElement[]|null
     */
    public function getGetIdentificationByTecdocNumberReturn()
    {
        return $this->getIdentificationByTecdocNumberReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetIdentificationByTecdocNumberReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetIdentificationByTecdocNumberReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetIdentificationByTecdocNumberReturnForArrayConstraintsFromSetGetIdentificationByTecdocNumberReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIdentificationByTecdocNumberResponseGetIdentificationByTecdocNumberReturnItem) {
            // validation for constraint: itemType
            if (!$getIdentificationByTecdocNumberResponseGetIdentificationByTecdocNumberReturnItem instanceof \StructType\ExtWsIdentificationElement) {
                $invalidValues[] = is_object($getIdentificationByTecdocNumberResponseGetIdentificationByTecdocNumberReturnItem) ? get_class($getIdentificationByTecdocNumberResponseGetIdentificationByTecdocNumberReturnItem) : sprintf('%s(%s)', gettype($getIdentificationByTecdocNumberResponseGetIdentificationByTecdocNumberReturnItem), var_export($getIdentificationByTecdocNumberResponseGetIdentificationByTecdocNumberReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getIdentificationByTecdocNumberReturn property can only contain items of type \StructType\ExtWsIdentificationElement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getIdentificationByTecdocNumberReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWsIdentificationElement[] $getIdentificationByTecdocNumberReturn
     * @return \StructType\GetIdentificationByTecdocNumberResponse
     */
    public function setGetIdentificationByTecdocNumberReturn(array $getIdentificationByTecdocNumberReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getIdentificationByTecdocNumberReturnArrayErrorMessage = self::validateGetIdentificationByTecdocNumberReturnForArrayConstraintsFromSetGetIdentificationByTecdocNumberReturn($getIdentificationByTecdocNumberReturn))) {
            throw new \InvalidArgumentException($getIdentificationByTecdocNumberReturnArrayErrorMessage, __LINE__);
        }
        $this->getIdentificationByTecdocNumberReturn = $getIdentificationByTecdocNumberReturn;
        return $this;
    }
    /**
     * Add item to getIdentificationByTecdocNumberReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWsIdentificationElement $item
     * @return \StructType\GetIdentificationByTecdocNumberResponse
     */
    public function addToGetIdentificationByTecdocNumberReturn(\StructType\ExtWsIdentificationElement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtWsIdentificationElement) {
            throw new \InvalidArgumentException(sprintf('The getIdentificationByTecdocNumberReturn property can only contain items of type \StructType\ExtWsIdentificationElement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getIdentificationByTecdocNumberReturn[] = $item;
        return $this;
    }
}
