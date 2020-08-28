<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWiringDiagramSchemesResponse StructType
 * @subpackage Structs
 */
class GetWiringDiagramSchemesResponse extends AbstractStructBase
{
    /**
     * The getWiringDiagramSchemesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtWiringDiagram[]
     */
    public $getWiringDiagramSchemesReturn;
    /**
     * Constructor method for getWiringDiagramSchemesResponse
     * @uses GetWiringDiagramSchemesResponse::setGetWiringDiagramSchemesReturn()
     * @param \StructType\ExtWiringDiagram[] $getWiringDiagramSchemesReturn
     */
    public function __construct(array $getWiringDiagramSchemesReturn = array())
    {
        $this
            ->setGetWiringDiagramSchemesReturn($getWiringDiagramSchemesReturn);
    }
    /**
     * Get getWiringDiagramSchemesReturn value
     * @return \StructType\ExtWiringDiagram[]|null
     */
    public function getGetWiringDiagramSchemesReturn()
    {
        return $this->getWiringDiagramSchemesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetWiringDiagramSchemesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetWiringDiagramSchemesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetWiringDiagramSchemesReturnForArrayConstraintsFromSetGetWiringDiagramSchemesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getWiringDiagramSchemesResponseGetWiringDiagramSchemesReturnItem) {
            // validation for constraint: itemType
            if (!$getWiringDiagramSchemesResponseGetWiringDiagramSchemesReturnItem instanceof \StructType\ExtWiringDiagram) {
                $invalidValues[] = is_object($getWiringDiagramSchemesResponseGetWiringDiagramSchemesReturnItem) ? get_class($getWiringDiagramSchemesResponseGetWiringDiagramSchemesReturnItem) : sprintf('%s(%s)', gettype($getWiringDiagramSchemesResponseGetWiringDiagramSchemesReturnItem), var_export($getWiringDiagramSchemesResponseGetWiringDiagramSchemesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getWiringDiagramSchemesReturn property can only contain items of type \StructType\ExtWiringDiagram, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getWiringDiagramSchemesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWiringDiagram[] $getWiringDiagramSchemesReturn
     * @return \StructType\GetWiringDiagramSchemesResponse
     */
    public function setGetWiringDiagramSchemesReturn(array $getWiringDiagramSchemesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getWiringDiagramSchemesReturnArrayErrorMessage = self::validateGetWiringDiagramSchemesReturnForArrayConstraintsFromSetGetWiringDiagramSchemesReturn($getWiringDiagramSchemesReturn))) {
            throw new \InvalidArgumentException($getWiringDiagramSchemesReturnArrayErrorMessage, __LINE__);
        }
        $this->getWiringDiagramSchemesReturn = $getWiringDiagramSchemesReturn;
        return $this;
    }
    /**
     * Add item to getWiringDiagramSchemesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtWiringDiagram $item
     * @return \StructType\GetWiringDiagramSchemesResponse
     */
    public function addToGetWiringDiagramSchemesReturn(\StructType\ExtWiringDiagram $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtWiringDiagram) {
            throw new \InvalidArgumentException(sprintf('The getWiringDiagramSchemesReturn property can only contain items of type \StructType\ExtWiringDiagram, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getWiringDiagramSchemesReturn[] = $item;
        return $this;
    }
}
