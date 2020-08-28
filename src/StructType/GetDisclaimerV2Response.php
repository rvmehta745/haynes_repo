<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDisclaimerV2Response StructType
 * @subpackage Structs
 */
class GetDisclaimerV2Response extends AbstractStructBase
{
    /**
     * The getDisclaimerV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $getDisclaimerV2Return;
    /**
     * Constructor method for getDisclaimerV2Response
     * @uses GetDisclaimerV2Response::setGetDisclaimerV2Return()
     * @param string[] $getDisclaimerV2Return
     */
    public function __construct(array $getDisclaimerV2Return = array())
    {
        $this
            ->setGetDisclaimerV2Return($getDisclaimerV2Return);
    }
    /**
     * Get getDisclaimerV2Return value
     * @return string[]|null
     */
    public function getGetDisclaimerV2Return()
    {
        return $this->getDisclaimerV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetDisclaimerV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetDisclaimerV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetDisclaimerV2ReturnForArrayConstraintsFromSetGetDisclaimerV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDisclaimerV2ResponseGetDisclaimerV2ReturnItem) {
            // validation for constraint: itemType
            if (!is_string($getDisclaimerV2ResponseGetDisclaimerV2ReturnItem)) {
                $invalidValues[] = is_object($getDisclaimerV2ResponseGetDisclaimerV2ReturnItem) ? get_class($getDisclaimerV2ResponseGetDisclaimerV2ReturnItem) : sprintf('%s(%s)', gettype($getDisclaimerV2ResponseGetDisclaimerV2ReturnItem), var_export($getDisclaimerV2ResponseGetDisclaimerV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getDisclaimerV2Return property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getDisclaimerV2Return value
     * @throws \InvalidArgumentException
     * @param string[] $getDisclaimerV2Return
     * @return \StructType\GetDisclaimerV2Response
     */
    public function setGetDisclaimerV2Return(array $getDisclaimerV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getDisclaimerV2ReturnArrayErrorMessage = self::validateGetDisclaimerV2ReturnForArrayConstraintsFromSetGetDisclaimerV2Return($getDisclaimerV2Return))) {
            throw new \InvalidArgumentException($getDisclaimerV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getDisclaimerV2Return = $getDisclaimerV2Return;
        return $this;
    }
    /**
     * Add item to getDisclaimerV2Return value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetDisclaimerV2Response
     */
    public function addToGetDisclaimerV2Return($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The getDisclaimerV2Return property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getDisclaimerV2Return[] = $item;
        return $this;
    }
}
