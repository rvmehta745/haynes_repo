<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWiringDiagramTypesByGroupResponse StructType
 * @subpackage Structs
 */
class GetWiringDiagramTypesByGroupResponse extends AbstractStructBase
{
    /**
     * The getWiringDiagramTypesByGroupReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtWiringDiagramType[]
     */
    public $getWiringDiagramTypesByGroupReturn;
    /**
     * Constructor method for getWiringDiagramTypesByGroupResponse
     * @uses GetWiringDiagramTypesByGroupResponse::setGetWiringDiagramTypesByGroupReturn()
     * @param \StructType\ExtWiringDiagramType[] $getWiringDiagramTypesByGroupReturn
     */
    public function __construct(array $getWiringDiagramTypesByGroupReturn = array())
    {
        $this
            ->setGetWiringDiagramTypesByGroupReturn($getWiringDiagramTypesByGroupReturn);
    }
    /**
     * Get getWiringDiagramTypesByGroupReturn value
     * @return \StructType\ExtWiringDiagramType[]|null
     */
    public function getGetWiringDiagramTypesByGroupReturn()
    {
        return $this->getWiringDiagramTypesByGroupReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetWiringDiagramTypesByGroupReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetWiringDiagramTypesByGroupReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetWiringDiagramTypesByGroupReturnForArrayConstraintsFromSetGetWiringDiagramTypesByGroupReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWiringDiagramTypesByGroupResponseGetWiringDiagramTypesByGroupReturnItem) {
            // validation for constraint: itemType
            if (!$getWiringDiagramTypesByGroupResponseGetWiringDiagramTypesByGroupReturnItem instanceof \StructType\ExtWiringDiagramType) {
                $invalidValues[] = is_object($getWiringDiagramTypesByGroupResponseGetWiringDiagramTypesByGroupReturnItem) ? get_class($getWiringDiagramTypesByGroupResponseGetWiringDiagramTypesByGroupReturnItem) : sprintf('%s(%s)', gettype($getWiringDiagramTypesByGroupResponseGetWiringDiagramTypesByGroupReturnItem), var_export($getWiringDiagramTypesByGroupResponseGetWiringDiagramTypesByGroupReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getWiringDiagramTypesByGroupReturn property can only contain items of type \StructType\ExtWiringDiagramType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getWiringDiagramTypesByGroupReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWiringDiagramType[] $getWiringDiagramTypesByGroupReturn
     * @return \StructType\GetWiringDiagramTypesByGroupResponse
     */
    public function setGetWiringDiagramTypesByGroupReturn(array $getWiringDiagramTypesByGroupReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getWiringDiagramTypesByGroupReturnArrayErrorMessage = self::validateGetWiringDiagramTypesByGroupReturnForArrayConstraintsFromSetGetWiringDiagramTypesByGroupReturn($getWiringDiagramTypesByGroupReturn))) {
            throw new \InvalidArgumentException($getWiringDiagramTypesByGroupReturnArrayErrorMessage, __LINE__);
        }
        $this->getWiringDiagramTypesByGroupReturn = $getWiringDiagramTypesByGroupReturn;
        return $this;
    }
    /**
     * Add item to getWiringDiagramTypesByGroupReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWiringDiagramType $item
     * @return \StructType\GetWiringDiagramTypesByGroupResponse
     */
    public function addToGetWiringDiagramTypesByGroupReturn(\StructType\ExtWiringDiagramType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtWiringDiagramType) {
            throw new \InvalidArgumentException(sprintf('The getWiringDiagramTypesByGroupReturn property can only contain items of type \StructType\ExtWiringDiagramType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getWiringDiagramTypesByGroupReturn[] = $item;
        return $this;
    }
}
