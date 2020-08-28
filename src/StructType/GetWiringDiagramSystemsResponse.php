<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWiringDiagramSystemsResponse StructType
 * @subpackage Structs
 */
class GetWiringDiagramSystemsResponse extends AbstractStructBase
{
    /**
     * The getWiringDiagramSystemsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtWiringSystem[]
     */
    public $getWiringDiagramSystemsReturn;
    /**
     * Constructor method for getWiringDiagramSystemsResponse
     * @uses GetWiringDiagramSystemsResponse::setGetWiringDiagramSystemsReturn()
     * @param \StructType\ExtWiringSystem[] $getWiringDiagramSystemsReturn
     */
    public function __construct(array $getWiringDiagramSystemsReturn = array())
    {
        $this
            ->setGetWiringDiagramSystemsReturn($getWiringDiagramSystemsReturn);
    }
    /**
     * Get getWiringDiagramSystemsReturn value
     * @return \StructType\ExtWiringSystem[]|null
     */
    public function getGetWiringDiagramSystemsReturn()
    {
        return $this->getWiringDiagramSystemsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetWiringDiagramSystemsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetWiringDiagramSystemsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetWiringDiagramSystemsReturnForArrayConstraintsFromSetGetWiringDiagramSystemsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWiringDiagramSystemsResponseGetWiringDiagramSystemsReturnItem) {
            // validation for constraint: itemType
            if (!$getWiringDiagramSystemsResponseGetWiringDiagramSystemsReturnItem instanceof \StructType\ExtWiringSystem) {
                $invalidValues[] = is_object($getWiringDiagramSystemsResponseGetWiringDiagramSystemsReturnItem) ? get_class($getWiringDiagramSystemsResponseGetWiringDiagramSystemsReturnItem) : sprintf('%s(%s)', gettype($getWiringDiagramSystemsResponseGetWiringDiagramSystemsReturnItem), var_export($getWiringDiagramSystemsResponseGetWiringDiagramSystemsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getWiringDiagramSystemsReturn property can only contain items of type \StructType\ExtWiringSystem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getWiringDiagramSystemsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWiringSystem[] $getWiringDiagramSystemsReturn
     * @return \StructType\GetWiringDiagramSystemsResponse
     */
    public function setGetWiringDiagramSystemsReturn(array $getWiringDiagramSystemsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getWiringDiagramSystemsReturnArrayErrorMessage = self::validateGetWiringDiagramSystemsReturnForArrayConstraintsFromSetGetWiringDiagramSystemsReturn($getWiringDiagramSystemsReturn))) {
            throw new \InvalidArgumentException($getWiringDiagramSystemsReturnArrayErrorMessage, __LINE__);
        }
        $this->getWiringDiagramSystemsReturn = $getWiringDiagramSystemsReturn;
        return $this;
    }
    /**
     * Add item to getWiringDiagramSystemsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWiringSystem $item
     * @return \StructType\GetWiringDiagramSystemsResponse
     */
    public function addToGetWiringDiagramSystemsReturn(\StructType\ExtWiringSystem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtWiringSystem) {
            throw new \InvalidArgumentException(sprintf('The getWiringDiagramSystemsReturn property can only contain items of type \StructType\ExtWiringSystem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getWiringDiagramSystemsReturn[] = $item;
        return $this;
    }
}
