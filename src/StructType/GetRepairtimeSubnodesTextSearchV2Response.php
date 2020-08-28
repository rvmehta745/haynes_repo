<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeSubnodesTextSearchV2Response StructType
 * @subpackage Structs
 */
class GetRepairtimeSubnodesTextSearchV2Response extends AbstractStructBase
{
    /**
     * The getRepairtimeSubnodesTextSearchV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNodeV2[]
     */
    public $getRepairtimeSubnodesTextSearchV2Return;
    /**
     * Constructor method for getRepairtimeSubnodesTextSearchV2Response
     * @uses GetRepairtimeSubnodesTextSearchV2Response::setGetRepairtimeSubnodesTextSearchV2Return()
     * @param \StructType\ExtRepairtimeNodeV2[] $getRepairtimeSubnodesTextSearchV2Return
     */
    public function __construct(array $getRepairtimeSubnodesTextSearchV2Return = array())
    {
        $this
            ->setGetRepairtimeSubnodesTextSearchV2Return($getRepairtimeSubnodesTextSearchV2Return);
    }
    /**
     * Get getRepairtimeSubnodesTextSearchV2Return value
     * @return \StructType\ExtRepairtimeNodeV2[]|null
     */
    public function getGetRepairtimeSubnodesTextSearchV2Return()
    {
        return $this->getRepairtimeSubnodesTextSearchV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeSubnodesTextSearchV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeSubnodesTextSearchV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeSubnodesTextSearchV2ReturnForArrayConstraintsFromSetGetRepairtimeSubnodesTextSearchV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeSubnodesTextSearchV2ResponseGetRepairtimeSubnodesTextSearchV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeSubnodesTextSearchV2ResponseGetRepairtimeSubnodesTextSearchV2ReturnItem instanceof \StructType\ExtRepairtimeNodeV2) {
                $invalidValues[] = is_object($getRepairtimeSubnodesTextSearchV2ResponseGetRepairtimeSubnodesTextSearchV2ReturnItem) ? get_class($getRepairtimeSubnodesTextSearchV2ResponseGetRepairtimeSubnodesTextSearchV2ReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeSubnodesTextSearchV2ResponseGetRepairtimeSubnodesTextSearchV2ReturnItem), var_export($getRepairtimeSubnodesTextSearchV2ResponseGetRepairtimeSubnodesTextSearchV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeSubnodesTextSearchV2Return property can only contain items of type \StructType\ExtRepairtimeNodeV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeSubnodesTextSearchV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV2[] $getRepairtimeSubnodesTextSearchV2Return
     * @return \StructType\GetRepairtimeSubnodesTextSearchV2Response
     */
    public function setGetRepairtimeSubnodesTextSearchV2Return(array $getRepairtimeSubnodesTextSearchV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeSubnodesTextSearchV2ReturnArrayErrorMessage = self::validateGetRepairtimeSubnodesTextSearchV2ReturnForArrayConstraintsFromSetGetRepairtimeSubnodesTextSearchV2Return($getRepairtimeSubnodesTextSearchV2Return))) {
            throw new \InvalidArgumentException($getRepairtimeSubnodesTextSearchV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeSubnodesTextSearchV2Return = $getRepairtimeSubnodesTextSearchV2Return;
        return $this;
    }
    /**
     * Add item to getRepairtimeSubnodesTextSearchV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV2 $item
     * @return \StructType\GetRepairtimeSubnodesTextSearchV2Response
     */
    public function addToGetRepairtimeSubnodesTextSearchV2Return(\StructType\ExtRepairtimeNodeV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNodeV2) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeSubnodesTextSearchV2Return property can only contain items of type \StructType\ExtRepairtimeNodeV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeSubnodesTextSearchV2Return[] = $item;
        return $this;
    }
}
