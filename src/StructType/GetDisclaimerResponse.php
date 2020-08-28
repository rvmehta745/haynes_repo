<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDisclaimerResponse StructType
 * @subpackage Structs
 */
class GetDisclaimerResponse extends AbstractStructBase
{
    /**
     * The getDisclaimerReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $getDisclaimerReturn;
    /**
     * Constructor method for getDisclaimerResponse
     * @uses GetDisclaimerResponse::setGetDisclaimerReturn()
     * @param string[] $getDisclaimerReturn
     */
    public function __construct(array $getDisclaimerReturn = array())
    {
        $this
            ->setGetDisclaimerReturn($getDisclaimerReturn);
    }
    /**
     * Get getDisclaimerReturn value
     * @return string[]|null
     */
    public function getGetDisclaimerReturn()
    {
        return $this->getDisclaimerReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetDisclaimerReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetDisclaimerReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetDisclaimerReturnForArrayConstraintsFromSetGetDisclaimerReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDisclaimerResponseGetDisclaimerReturnItem) {
            // validation for constraint: itemType
            if (!is_string($getDisclaimerResponseGetDisclaimerReturnItem)) {
                $invalidValues[] = is_object($getDisclaimerResponseGetDisclaimerReturnItem) ? get_class($getDisclaimerResponseGetDisclaimerReturnItem) : sprintf('%s(%s)', gettype($getDisclaimerResponseGetDisclaimerReturnItem), var_export($getDisclaimerResponseGetDisclaimerReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getDisclaimerReturn property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getDisclaimerReturn value
     * @throws \InvalidArgumentException
     * @param string[] $getDisclaimerReturn
     * @return \StructType\GetDisclaimerResponse
     */
    public function setGetDisclaimerReturn(array $getDisclaimerReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getDisclaimerReturnArrayErrorMessage = self::validateGetDisclaimerReturnForArrayConstraintsFromSetGetDisclaimerReturn($getDisclaimerReturn))) {
            throw new \InvalidArgumentException($getDisclaimerReturnArrayErrorMessage, __LINE__);
        }
        $this->getDisclaimerReturn = $getDisclaimerReturn;
        return $this;
    }
    /**
     * Add item to getDisclaimerReturn value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetDisclaimerResponse
     */
    public function addToGetDisclaimerReturn($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The getDisclaimerReturn property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getDisclaimerReturn[] = $item;
        return $this;
    }
}
