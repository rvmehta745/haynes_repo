<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDrawingsByGroupResponse StructType
 * @subpackage Structs
 */
class GetDrawingsByGroupResponse extends AbstractStructBase
{
    /**
     * The getDrawingsByGroupReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtDrawing[]
     */
    public $getDrawingsByGroupReturn;
    /**
     * Constructor method for getDrawingsByGroupResponse
     * @uses GetDrawingsByGroupResponse::setGetDrawingsByGroupReturn()
     * @param \StructType\ExtDrawing[] $getDrawingsByGroupReturn
     */
    public function __construct(array $getDrawingsByGroupReturn = array())
    {
        $this
            ->setGetDrawingsByGroupReturn($getDrawingsByGroupReturn);
    }
    /**
     * Get getDrawingsByGroupReturn value
     * @return \StructType\ExtDrawing[]|null
     */
    public function getGetDrawingsByGroupReturn()
    {
        return $this->getDrawingsByGroupReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetDrawingsByGroupReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetDrawingsByGroupReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetDrawingsByGroupReturnForArrayConstraintsFromSetGetDrawingsByGroupReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDrawingsByGroupResponseGetDrawingsByGroupReturnItem) {
            // validation for constraint: itemType
            if (!$getDrawingsByGroupResponseGetDrawingsByGroupReturnItem instanceof \StructType\ExtDrawing) {
                $invalidValues[] = is_object($getDrawingsByGroupResponseGetDrawingsByGroupReturnItem) ? get_class($getDrawingsByGroupResponseGetDrawingsByGroupReturnItem) : sprintf('%s(%s)', gettype($getDrawingsByGroupResponseGetDrawingsByGroupReturnItem), var_export($getDrawingsByGroupResponseGetDrawingsByGroupReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getDrawingsByGroupReturn property can only contain items of type \StructType\ExtDrawing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getDrawingsByGroupReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtDrawing[] $getDrawingsByGroupReturn
     * @return \StructType\GetDrawingsByGroupResponse
     */
    public function setGetDrawingsByGroupReturn(array $getDrawingsByGroupReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getDrawingsByGroupReturnArrayErrorMessage = self::validateGetDrawingsByGroupReturnForArrayConstraintsFromSetGetDrawingsByGroupReturn($getDrawingsByGroupReturn))) {
            throw new \InvalidArgumentException($getDrawingsByGroupReturnArrayErrorMessage, __LINE__);
        }
        $this->getDrawingsByGroupReturn = $getDrawingsByGroupReturn;
        return $this;
    }
    /**
     * Add item to getDrawingsByGroupReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtDrawing $item
     * @return \StructType\GetDrawingsByGroupResponse
     */
    public function addToGetDrawingsByGroupReturn(\StructType\ExtDrawing $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtDrawing) {
            throw new \InvalidArgumentException(sprintf('The getDrawingsByGroupReturn property can only contain items of type \StructType\ExtDrawing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getDrawingsByGroupReturn[] = $item;
        return $this;
    }
}
