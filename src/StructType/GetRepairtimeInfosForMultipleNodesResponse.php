<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeInfosForMultipleNodesResponse StructType
 * @subpackage Structs
 */
class GetRepairtimeInfosForMultipleNodesResponse extends AbstractStructBase
{
    /**
     * The getRepairtimeInfosForMultipleNodesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeInfoGroup[]
     */
    public $getRepairtimeInfosForMultipleNodesReturn;
    /**
     * Constructor method for getRepairtimeInfosForMultipleNodesResponse
     * @uses GetRepairtimeInfosForMultipleNodesResponse::setGetRepairtimeInfosForMultipleNodesReturn()
     * @param \StructType\ExtRepairtimeInfoGroup[] $getRepairtimeInfosForMultipleNodesReturn
     */
    public function __construct(array $getRepairtimeInfosForMultipleNodesReturn = array())
    {
        $this
            ->setGetRepairtimeInfosForMultipleNodesReturn($getRepairtimeInfosForMultipleNodesReturn);
    }
    /**
     * Get getRepairtimeInfosForMultipleNodesReturn value
     * @return \StructType\ExtRepairtimeInfoGroup[]|null
     */
    public function getGetRepairtimeInfosForMultipleNodesReturn()
    {
        return $this->getRepairtimeInfosForMultipleNodesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeInfosForMultipleNodesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeInfosForMultipleNodesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeInfosForMultipleNodesReturnForArrayConstraintsFromSetGetRepairtimeInfosForMultipleNodesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeInfosForMultipleNodesResponseGetRepairtimeInfosForMultipleNodesReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeInfosForMultipleNodesResponseGetRepairtimeInfosForMultipleNodesReturnItem instanceof \StructType\ExtRepairtimeInfoGroup) {
                $invalidValues[] = is_object($getRepairtimeInfosForMultipleNodesResponseGetRepairtimeInfosForMultipleNodesReturnItem) ? get_class($getRepairtimeInfosForMultipleNodesResponseGetRepairtimeInfosForMultipleNodesReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeInfosForMultipleNodesResponseGetRepairtimeInfosForMultipleNodesReturnItem), var_export($getRepairtimeInfosForMultipleNodesResponseGetRepairtimeInfosForMultipleNodesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeInfosForMultipleNodesReturn property can only contain items of type \StructType\ExtRepairtimeInfoGroup, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeInfosForMultipleNodesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeInfoGroup[] $getRepairtimeInfosForMultipleNodesReturn
     * @return \StructType\GetRepairtimeInfosForMultipleNodesResponse
     */
    public function setGetRepairtimeInfosForMultipleNodesReturn(array $getRepairtimeInfosForMultipleNodesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeInfosForMultipleNodesReturnArrayErrorMessage = self::validateGetRepairtimeInfosForMultipleNodesReturnForArrayConstraintsFromSetGetRepairtimeInfosForMultipleNodesReturn($getRepairtimeInfosForMultipleNodesReturn))) {
            throw new \InvalidArgumentException($getRepairtimeInfosForMultipleNodesReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeInfosForMultipleNodesReturn = $getRepairtimeInfosForMultipleNodesReturn;
        return $this;
    }
    /**
     * Add item to getRepairtimeInfosForMultipleNodesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeInfoGroup $item
     * @return \StructType\GetRepairtimeInfosForMultipleNodesResponse
     */
    public function addToGetRepairtimeInfosForMultipleNodesReturn(\StructType\ExtRepairtimeInfoGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeInfoGroup) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeInfosForMultipleNodesReturn property can only contain items of type \StructType\ExtRepairtimeInfoGroup, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeInfosForMultipleNodesReturn[] = $item;
        return $this;
    }
}
