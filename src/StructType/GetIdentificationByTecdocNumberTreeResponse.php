<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getIdentificationByTecdocNumberTreeResponse StructType
 * @subpackage Structs
 */
class GetIdentificationByTecdocNumberTreeResponse extends AbstractStructBase
{
    /**
     * The getIdentificationByTecdocNumberTreeReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtWsIdentificationElement[]
     */
    public $getIdentificationByTecdocNumberTreeReturn;
    /**
     * Constructor method for getIdentificationByTecdocNumberTreeResponse
     * @uses GetIdentificationByTecdocNumberTreeResponse::setGetIdentificationByTecdocNumberTreeReturn()
     * @param \StructType\ExtWsIdentificationElement[] $getIdentificationByTecdocNumberTreeReturn
     */
    public function __construct(array $getIdentificationByTecdocNumberTreeReturn = array())
    {
        $this
            ->setGetIdentificationByTecdocNumberTreeReturn($getIdentificationByTecdocNumberTreeReturn);
    }
    /**
     * Get getIdentificationByTecdocNumberTreeReturn value
     * @return \StructType\ExtWsIdentificationElement[]|null
     */
    public function getGetIdentificationByTecdocNumberTreeReturn()
    {
        return $this->getIdentificationByTecdocNumberTreeReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetIdentificationByTecdocNumberTreeReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetIdentificationByTecdocNumberTreeReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetIdentificationByTecdocNumberTreeReturnForArrayConstraintsFromSetGetIdentificationByTecdocNumberTreeReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIdentificationByTecdocNumberTreeResponseGetIdentificationByTecdocNumberTreeReturnItem) {
            // validation for constraint: itemType
            if (!$getIdentificationByTecdocNumberTreeResponseGetIdentificationByTecdocNumberTreeReturnItem instanceof \StructType\ExtWsIdentificationElement) {
                $invalidValues[] = is_object($getIdentificationByTecdocNumberTreeResponseGetIdentificationByTecdocNumberTreeReturnItem) ? get_class($getIdentificationByTecdocNumberTreeResponseGetIdentificationByTecdocNumberTreeReturnItem) : sprintf('%s(%s)', gettype($getIdentificationByTecdocNumberTreeResponseGetIdentificationByTecdocNumberTreeReturnItem), var_export($getIdentificationByTecdocNumberTreeResponseGetIdentificationByTecdocNumberTreeReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getIdentificationByTecdocNumberTreeReturn property can only contain items of type \StructType\ExtWsIdentificationElement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getIdentificationByTecdocNumberTreeReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWsIdentificationElement[] $getIdentificationByTecdocNumberTreeReturn
     * @return \StructType\GetIdentificationByTecdocNumberTreeResponse
     */
    public function setGetIdentificationByTecdocNumberTreeReturn(array $getIdentificationByTecdocNumberTreeReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getIdentificationByTecdocNumberTreeReturnArrayErrorMessage = self::validateGetIdentificationByTecdocNumberTreeReturnForArrayConstraintsFromSetGetIdentificationByTecdocNumberTreeReturn($getIdentificationByTecdocNumberTreeReturn))) {
            throw new \InvalidArgumentException($getIdentificationByTecdocNumberTreeReturnArrayErrorMessage, __LINE__);
        }
        $this->getIdentificationByTecdocNumberTreeReturn = $getIdentificationByTecdocNumberTreeReturn;
        return $this;
    }
    /**
     * Add item to getIdentificationByTecdocNumberTreeReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWsIdentificationElement $item
     * @return \StructType\GetIdentificationByTecdocNumberTreeResponse
     */
    public function addToGetIdentificationByTecdocNumberTreeReturn(\StructType\ExtWsIdentificationElement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtWsIdentificationElement) {
            throw new \InvalidArgumentException(sprintf('The getIdentificationByTecdocNumberTreeReturn property can only contain items of type \StructType\ExtWsIdentificationElement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getIdentificationByTecdocNumberTreeReturn[] = $item;
        return $this;
    }
}
