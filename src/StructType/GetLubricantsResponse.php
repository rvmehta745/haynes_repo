<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLubricantsResponse StructType
 * @subpackage Structs
 */
class GetLubricantsResponse extends AbstractStructBase
{
    /**
     * The getLubricantsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtLubricantGroup[]
     */
    public $getLubricantsReturn;
    /**
     * Constructor method for getLubricantsResponse
     * @uses GetLubricantsResponse::setGetLubricantsReturn()
     * @param \StructType\ExtLubricantGroup[] $getLubricantsReturn
     */
    public function __construct(array $getLubricantsReturn = array())
    {
        $this
            ->setGetLubricantsReturn($getLubricantsReturn);
    }
    /**
     * Get getLubricantsReturn value
     * @return \StructType\ExtLubricantGroup[]|null
     */
    public function getGetLubricantsReturn()
    {
        return $this->getLubricantsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetLubricantsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetLubricantsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetLubricantsReturnForArrayConstraintsFromSetGetLubricantsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getLubricantsResponseGetLubricantsReturnItem) {
            // validation for constraint: itemType
            if (!$getLubricantsResponseGetLubricantsReturnItem instanceof \StructType\ExtLubricantGroup) {
                $invalidValues[] = is_object($getLubricantsResponseGetLubricantsReturnItem) ? get_class($getLubricantsResponseGetLubricantsReturnItem) : sprintf('%s(%s)', gettype($getLubricantsResponseGetLubricantsReturnItem), var_export($getLubricantsResponseGetLubricantsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getLubricantsReturn property can only contain items of type \StructType\ExtLubricantGroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getLubricantsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLubricantGroup[] $getLubricantsReturn
     * @return \StructType\GetLubricantsResponse
     */
    public function setGetLubricantsReturn(array $getLubricantsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getLubricantsReturnArrayErrorMessage = self::validateGetLubricantsReturnForArrayConstraintsFromSetGetLubricantsReturn($getLubricantsReturn))) {
            throw new \InvalidArgumentException($getLubricantsReturnArrayErrorMessage, __LINE__);
        }
        $this->getLubricantsReturn = $getLubricantsReturn;
        return $this;
    }
    /**
     * Add item to getLubricantsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLubricantGroup $item
     * @return \StructType\GetLubricantsResponse
     */
    public function addToGetLubricantsReturn(\StructType\ExtLubricantGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtLubricantGroup) {
            throw new \InvalidArgumentException(sprintf('The getLubricantsReturn property can only contain items of type \StructType\ExtLubricantGroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getLubricantsReturn[] = $item;
        return $this;
    }
}
