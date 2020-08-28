<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLubricantsByGroupResponse StructType
 * @subpackage Structs
 */
class GetLubricantsByGroupResponse extends AbstractStructBase
{
    /**
     * The getLubricantsByGroupReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtLubricantGroup[]
     */
    public $getLubricantsByGroupReturn;
    /**
     * Constructor method for getLubricantsByGroupResponse
     * @uses GetLubricantsByGroupResponse::setGetLubricantsByGroupReturn()
     * @param \StructType\ExtLubricantGroup[] $getLubricantsByGroupReturn
     */
    public function __construct(array $getLubricantsByGroupReturn = array())
    {
        $this
            ->setGetLubricantsByGroupReturn($getLubricantsByGroupReturn);
    }
    /**
     * Get getLubricantsByGroupReturn value
     * @return \StructType\ExtLubricantGroup[]|null
     */
    public function getGetLubricantsByGroupReturn()
    {
        return $this->getLubricantsByGroupReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetLubricantsByGroupReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetLubricantsByGroupReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetLubricantsByGroupReturnForArrayConstraintsFromSetGetLubricantsByGroupReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getLubricantsByGroupResponseGetLubricantsByGroupReturnItem) {
            // validation for constraint: itemType
            if (!$getLubricantsByGroupResponseGetLubricantsByGroupReturnItem instanceof \StructType\ExtLubricantGroup) {
                $invalidValues[] = is_object($getLubricantsByGroupResponseGetLubricantsByGroupReturnItem) ? get_class($getLubricantsByGroupResponseGetLubricantsByGroupReturnItem) : sprintf('%s(%s)', gettype($getLubricantsByGroupResponseGetLubricantsByGroupReturnItem), var_export($getLubricantsByGroupResponseGetLubricantsByGroupReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getLubricantsByGroupReturn property can only contain items of type \StructType\ExtLubricantGroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getLubricantsByGroupReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLubricantGroup[] $getLubricantsByGroupReturn
     * @return \StructType\GetLubricantsByGroupResponse
     */
    public function setGetLubricantsByGroupReturn(array $getLubricantsByGroupReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getLubricantsByGroupReturnArrayErrorMessage = self::validateGetLubricantsByGroupReturnForArrayConstraintsFromSetGetLubricantsByGroupReturn($getLubricantsByGroupReturn))) {
            throw new \InvalidArgumentException($getLubricantsByGroupReturnArrayErrorMessage, __LINE__);
        }
        $this->getLubricantsByGroupReturn = $getLubricantsByGroupReturn;
        return $this;
    }
    /**
     * Add item to getLubricantsByGroupReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLubricantGroup $item
     * @return \StructType\GetLubricantsByGroupResponse
     */
    public function addToGetLubricantsByGroupReturn(\StructType\ExtLubricantGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtLubricantGroup) {
            throw new \InvalidArgumentException(sprintf('The getLubricantsByGroupReturn property can only contain items of type \StructType\ExtLubricantGroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getLubricantsByGroupReturn[] = $item;
        return $this;
    }
}
