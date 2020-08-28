<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTSBDataV3Response StructType
 * @subpackage Structs
 */
class GetTSBDataV3Response extends AbstractStructBase
{
    /**
     * The getTSBDataV3Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBGroupV3[]
     */
    public $getTSBDataV3Return;
    /**
     * Constructor method for getTSBDataV3Response
     * @uses GetTSBDataV3Response::setGetTSBDataV3Return()
     * @param \StructType\ExtTSBGroupV3[] $getTSBDataV3Return
     */
    public function __construct(array $getTSBDataV3Return = array())
    {
        $this
            ->setGetTSBDataV3Return($getTSBDataV3Return);
    }
    /**
     * Get getTSBDataV3Return value
     * @return \StructType\ExtTSBGroupV3[]|null
     */
    public function getGetTSBDataV3Return()
    {
        return $this->getTSBDataV3Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTSBDataV3Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTSBDataV3Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTSBDataV3ReturnForArrayConstraintsFromSetGetTSBDataV3Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTSBDataV3ResponseGetTSBDataV3ReturnItem) {
            // validation for constraint: itemType
            if (!$getTSBDataV3ResponseGetTSBDataV3ReturnItem instanceof \StructType\ExtTSBGroupV3) {
                $invalidValues[] = is_object($getTSBDataV3ResponseGetTSBDataV3ReturnItem) ? get_class($getTSBDataV3ResponseGetTSBDataV3ReturnItem) : sprintf('%s(%s)', gettype($getTSBDataV3ResponseGetTSBDataV3ReturnItem), var_export($getTSBDataV3ResponseGetTSBDataV3ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getTSBDataV3Return property can only contain items of type \StructType\ExtTSBGroupV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getTSBDataV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBGroupV3[] $getTSBDataV3Return
     * @return \StructType\GetTSBDataV3Response
     */
    public function setGetTSBDataV3Return(array $getTSBDataV3Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getTSBDataV3ReturnArrayErrorMessage = self::validateGetTSBDataV3ReturnForArrayConstraintsFromSetGetTSBDataV3Return($getTSBDataV3Return))) {
            throw new \InvalidArgumentException($getTSBDataV3ReturnArrayErrorMessage, __LINE__);
        }
        $this->getTSBDataV3Return = $getTSBDataV3Return;
        return $this;
    }
    /**
     * Add item to getTSBDataV3Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBGroupV3 $item
     * @return \StructType\GetTSBDataV3Response
     */
    public function addToGetTSBDataV3Return(\StructType\ExtTSBGroupV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBGroupV3) {
            throw new \InvalidArgumentException(sprintf('The getTSBDataV3Return property can only contain items of type \StructType\ExtTSBGroupV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getTSBDataV3Return[] = $item;
        return $this;
    }
}
