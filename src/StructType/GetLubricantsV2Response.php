<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLubricantsV2Response StructType
 * @subpackage Structs
 */
class GetLubricantsV2Response extends AbstractStructBase
{
    /**
     * The getLubricantsV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtLubricantGroupV2[]
     */
    public $getLubricantsV2Return;
    /**
     * Constructor method for getLubricantsV2Response
     * @uses GetLubricantsV2Response::setGetLubricantsV2Return()
     * @param \StructType\ExtLubricantGroupV2[] $getLubricantsV2Return
     */
    public function __construct(array $getLubricantsV2Return = array())
    {
        $this
            ->setGetLubricantsV2Return($getLubricantsV2Return);
    }
    /**
     * Get getLubricantsV2Return value
     * @return \StructType\ExtLubricantGroupV2[]|null
     */
    public function getGetLubricantsV2Return()
    {
        return $this->getLubricantsV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetLubricantsV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetLubricantsV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetLubricantsV2ReturnForArrayConstraintsFromSetGetLubricantsV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getLubricantsV2ResponseGetLubricantsV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getLubricantsV2ResponseGetLubricantsV2ReturnItem instanceof \StructType\ExtLubricantGroupV2) {
                $invalidValues[] = is_object($getLubricantsV2ResponseGetLubricantsV2ReturnItem) ? get_class($getLubricantsV2ResponseGetLubricantsV2ReturnItem) : sprintf('%s(%s)', gettype($getLubricantsV2ResponseGetLubricantsV2ReturnItem), var_export($getLubricantsV2ResponseGetLubricantsV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getLubricantsV2Return property can only contain items of type \StructType\ExtLubricantGroupV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getLubricantsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLubricantGroupV2[] $getLubricantsV2Return
     * @return \StructType\GetLubricantsV2Response
     */
    public function setGetLubricantsV2Return(array $getLubricantsV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getLubricantsV2ReturnArrayErrorMessage = self::validateGetLubricantsV2ReturnForArrayConstraintsFromSetGetLubricantsV2Return($getLubricantsV2Return))) {
            throw new \InvalidArgumentException($getLubricantsV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getLubricantsV2Return = $getLubricantsV2Return;
        return $this;
    }
    /**
     * Add item to getLubricantsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLubricantGroupV2 $item
     * @return \StructType\GetLubricantsV2Response
     */
    public function addToGetLubricantsV2Return(\StructType\ExtLubricantGroupV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtLubricantGroupV2) {
            throw new \InvalidArgumentException(sprintf('The getLubricantsV2Return property can only contain items of type \StructType\ExtLubricantGroupV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getLubricantsV2Return[] = $item;
        return $this;
    }
}
