<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeSubnodesTextSearchV3Response StructType
 * @subpackage Structs
 */
class GetRepairtimeSubnodesTextSearchV3Response extends AbstractStructBase
{
    /**
     * The getRepairtimeSubnodesTextSearchV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtRepairtimeNodeV3[]
     */
    public $getRepairtimeSubnodesTextSearchV3Return;
    /**
     * Constructor method for getRepairtimeSubnodesTextSearchV3Response
     * @uses GetRepairtimeSubnodesTextSearchV3Response::setGetRepairtimeSubnodesTextSearchV3Return()
     * @param \StructType\ExtRepairtimeNodeV3[] $getRepairtimeSubnodesTextSearchV3Return
     */
    public function __construct(array $getRepairtimeSubnodesTextSearchV3Return = array())
    {
        $this
            ->setGetRepairtimeSubnodesTextSearchV3Return($getRepairtimeSubnodesTextSearchV3Return);
    }
    /**
     * Get getRepairtimeSubnodesTextSearchV3Return value
     * @return \StructType\ExtRepairtimeNodeV3[]|null
     */
    public function getGetRepairtimeSubnodesTextSearchV3Return()
    {
        return $this->getRepairtimeSubnodesTextSearchV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetRepairtimeSubnodesTextSearchV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetRepairtimeSubnodesTextSearchV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetRepairtimeSubnodesTextSearchV3ReturnForArrayConstraintsFromSetGetRepairtimeSubnodesTextSearchV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeSubnodesTextSearchV3ResponseGetRepairtimeSubnodesTextSearchV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getRepairtimeSubnodesTextSearchV3ResponseGetRepairtimeSubnodesTextSearchV3ReturnItem instanceof \StructType\ExtRepairtimeNodeV3) {
                $invalidValues[] = is_object($getRepairtimeSubnodesTextSearchV3ResponseGetRepairtimeSubnodesTextSearchV3ReturnItem) ? get_class($getRepairtimeSubnodesTextSearchV3ResponseGetRepairtimeSubnodesTextSearchV3ReturnItem) : sprintf('%s(%s)', gettype($getRepairtimeSubnodesTextSearchV3ResponseGetRepairtimeSubnodesTextSearchV3ReturnItem), var_export($getRepairtimeSubnodesTextSearchV3ResponseGetRepairtimeSubnodesTextSearchV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getRepairtimeSubnodesTextSearchV3Return property can only contain items of type \StructType\ExtRepairtimeNodeV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getRepairtimeSubnodesTextSearchV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV3[] $getRepairtimeSubnodesTextSearchV3Return
     * @return \StructType\GetRepairtimeSubnodesTextSearchV3Response
     */
    public function setGetRepairtimeSubnodesTextSearchV3Return(array $getRepairtimeSubnodesTextSearchV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getRepairtimeSubnodesTextSearchV3ReturnArrayErrorMessage = self::validateGetRepairtimeSubnodesTextSearchV3ReturnForArrayConstraintsFromSetGetRepairtimeSubnodesTextSearchV3Return($getRepairtimeSubnodesTextSearchV3Return))) {
            throw new \InvalidArgumentException($getRepairtimeSubnodesTextSearchV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getRepairtimeSubnodesTextSearchV3Return = $getRepairtimeSubnodesTextSearchV3Return;
        return $this;
    }
    /**
     * Add item to getRepairtimeSubnodesTextSearchV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtRepairtimeNodeV3 $item
     * @return \StructType\GetRepairtimeSubnodesTextSearchV3Response
     */
    public function addToGetRepairtimeSubnodesTextSearchV3Return(\StructType\ExtRepairtimeNodeV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtRepairtimeNodeV3) {
            throw new \InvalidArgumentException(sprintf('The getRepairtimeSubnodesTextSearchV3Return property can only contain items of type \StructType\ExtRepairtimeNodeV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getRepairtimeSubnodesTextSearchV3Return[] = $item;
        return $this;
    }
}
