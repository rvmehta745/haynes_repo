<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLubricantsV3Response StructType
 * @subpackage Structs
 */
class GetLubricantsV3Response extends AbstractStructBase
{
    /**
     * The getLubricantsV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtLubricantGroupV3[]
     */
    public $getLubricantsV3Return;
    /**
     * Constructor method for getLubricantsV3Response
     * @uses GetLubricantsV3Response::setGetLubricantsV3Return()
     * @param \StructType\ExtLubricantGroupV3[] $getLubricantsV3Return
     */
    public function __construct(array $getLubricantsV3Return = array())
    {
        $this
            ->setGetLubricantsV3Return($getLubricantsV3Return);
    }
    /**
     * Get getLubricantsV3Return value
     * @return \StructType\ExtLubricantGroupV3[]|null
     */
    public function getGetLubricantsV3Return()
    {
        return $this->getLubricantsV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetLubricantsV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetLubricantsV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetLubricantsV3ReturnForArrayConstraintsFromSetGetLubricantsV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getLubricantsV3ResponseGetLubricantsV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getLubricantsV3ResponseGetLubricantsV3ReturnItem instanceof \StructType\ExtLubricantGroupV3) {
                $invalidValues[] = is_object($getLubricantsV3ResponseGetLubricantsV3ReturnItem) ? get_class($getLubricantsV3ResponseGetLubricantsV3ReturnItem) : sprintf('%s(%s)', gettype($getLubricantsV3ResponseGetLubricantsV3ReturnItem), var_export($getLubricantsV3ResponseGetLubricantsV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getLubricantsV3Return property can only contain items of type \StructType\ExtLubricantGroupV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getLubricantsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLubricantGroupV3[] $getLubricantsV3Return
     * @return \StructType\GetLubricantsV3Response
     */
    public function setGetLubricantsV3Return(array $getLubricantsV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getLubricantsV3ReturnArrayErrorMessage = self::validateGetLubricantsV3ReturnForArrayConstraintsFromSetGetLubricantsV3Return($getLubricantsV3Return))) {
            throw new \InvalidArgumentException($getLubricantsV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getLubricantsV3Return = $getLubricantsV3Return;
        return $this;
    }
    /**
     * Add item to getLubricantsV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLubricantGroupV3 $item
     * @return \StructType\GetLubricantsV3Response
     */
    public function addToGetLubricantsV3Return(\StructType\ExtLubricantGroupV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtLubricantGroupV3) {
            throw new \InvalidArgumentException(sprintf('The getLubricantsV3Return property can only contain items of type \StructType\ExtLubricantGroupV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getLubricantsV3Return[] = $item;
        return $this;
    }
}
