<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLubricantsV4Response StructType
 * @subpackage Structs
 */
class GetLubricantsV4Response extends AbstractStructBase
{
    /**
     * The getLubricantsV4Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtLubricantGroupV3[]
     */
    public $getLubricantsV4Return;
    /**
     * Constructor method for getLubricantsV4Response
     * @uses GetLubricantsV4Response::setGetLubricantsV4Return()
     * @param \StructType\ExtLubricantGroupV3[] $getLubricantsV4Return
     */
    public function __construct(array $getLubricantsV4Return = array())
    {
        $this
            ->setGetLubricantsV4Return($getLubricantsV4Return);
    }
    /**
     * Get getLubricantsV4Return value
     * @return \StructType\ExtLubricantGroupV3[]|null
     */
    public function getGetLubricantsV4Return()
    {
        return $this->getLubricantsV4Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetLubricantsV4Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetLubricantsV4Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetLubricantsV4ReturnForArrayConstraintsFromSetGetLubricantsV4Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getLubricantsV4ResponseGetLubricantsV4ReturnItem) {
            // validation for constraint: itemType
            if (!$getLubricantsV4ResponseGetLubricantsV4ReturnItem instanceof \StructType\ExtLubricantGroupV3) {
                $invalidValues[] = is_object($getLubricantsV4ResponseGetLubricantsV4ReturnItem) ? get_class($getLubricantsV4ResponseGetLubricantsV4ReturnItem) : sprintf('%s(%s)', gettype($getLubricantsV4ResponseGetLubricantsV4ReturnItem), var_export($getLubricantsV4ResponseGetLubricantsV4ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getLubricantsV4Return property can only contain items of type \StructType\ExtLubricantGroupV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getLubricantsV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLubricantGroupV3[] $getLubricantsV4Return
     * @return \StructType\GetLubricantsV4Response
     */
    public function setGetLubricantsV4Return(array $getLubricantsV4Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getLubricantsV4ReturnArrayErrorMessage = self::validateGetLubricantsV4ReturnForArrayConstraintsFromSetGetLubricantsV4Return($getLubricantsV4Return))) {
            throw new \InvalidArgumentException($getLubricantsV4ReturnArrayErrorMessage, __LINE__);
        }
        $this->getLubricantsV4Return = $getLubricantsV4Return;
        return $this;
    }
    /**
     * Add item to getLubricantsV4Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLubricantGroupV3 $item
     * @return \StructType\GetLubricantsV4Response
     */
    public function addToGetLubricantsV4Return(\StructType\ExtLubricantGroupV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtLubricantGroupV3) {
            throw new \InvalidArgumentException(sprintf('The getLubricantsV4Return property can only contain items of type \StructType\ExtLubricantGroupV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getLubricantsV4Return[] = $item;
        return $this;
    }
}
