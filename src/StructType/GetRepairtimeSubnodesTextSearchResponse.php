<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeSubnodesTextSearchResponse StructType
 * @subpackage Structs
 */
class GetRepairtimeSubnodesTextSearchResponse extends AbstractStructBase
{
    /**
     * The getRepairtimeSubnodesTextSearchReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNode[]
     */
    public $getRepairtimeSubnodesTextSearchReturn;
    /**
     * Constructor method for getRepairtimeSubnodesTextSearchResponse
     * @uses GetRepairtimeSubnodesTextSearchResponse::setGetRepairtimeSubnodesTextSearchReturn()
     * @param \StructType\ExtRepairtimeNode[] $getRepairtimeSubnodesTextSearchReturn
     */
    public function __construct(array $getRepairtimeSubnodesTextSearchReturn = array())
    {
        $this
            ->setGetRepairtimeSubnodesTextSearchReturn($getRepairtimeSubnodesTextSearchReturn);
    }
    /**
     * Get getRepairtimeSubnodesTextSearchReturn value
     * @return \StructType\ExtRepairtimeNode[]|null
     */
    public function getGetRepairtimeSubnodesTextSearchReturn()
    {
        return $this->getRepairtimeSubnodesTextSearchReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeSubnodesTextSearchReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeSubnodesTextSearchReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeSubnodesTextSearchReturnForArrayConstraintsFromSetGetRepairtimeSubnodesTextSearchReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeSubnodesTextSearchResponseGetRepairtimeSubnodesTextSearchReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeSubnodesTextSearchResponseGetRepairtimeSubnodesTextSearchReturnItem instanceof \StructType\ExtRepairtimeNode) {
                $invalidValues[] = is_object($getRepairtimeSubnodesTextSearchResponseGetRepairtimeSubnodesTextSearchReturnItem) ? get_class($getRepairtimeSubnodesTextSearchResponseGetRepairtimeSubnodesTextSearchReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeSubnodesTextSearchResponseGetRepairtimeSubnodesTextSearchReturnItem), var_export($getRepairtimeSubnodesTextSearchResponseGetRepairtimeSubnodesTextSearchReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeSubnodesTextSearchReturn property can only contain items of type \StructType\ExtRepairtimeNode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeSubnodesTextSearchReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNode[] $getRepairtimeSubnodesTextSearchReturn
     * @return \StructType\GetRepairtimeSubnodesTextSearchResponse
     */
    public function setGetRepairtimeSubnodesTextSearchReturn(array $getRepairtimeSubnodesTextSearchReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeSubnodesTextSearchReturnArrayErrorMessage = self::validateGetRepairtimeSubnodesTextSearchReturnForArrayConstraintsFromSetGetRepairtimeSubnodesTextSearchReturn($getRepairtimeSubnodesTextSearchReturn))) {
            throw new \InvalidArgumentException($getRepairtimeSubnodesTextSearchReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeSubnodesTextSearchReturn = $getRepairtimeSubnodesTextSearchReturn;
        return $this;
    }
    /**
     * Add item to getRepairtimeSubnodesTextSearchReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNode $item
     * @return \StructType\GetRepairtimeSubnodesTextSearchResponse
     */
    public function addToGetRepairtimeSubnodesTextSearchReturn(\StructType\ExtRepairtimeNode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNode) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeSubnodesTextSearchReturn property can only contain items of type \StructType\ExtRepairtimeNode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeSubnodesTextSearchReturn[] = $item;
        return $this;
    }
}
