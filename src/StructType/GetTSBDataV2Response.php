<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTSBDataV2Response StructType
 * @subpackage Structs
 */
class GetTSBDataV2Response extends AbstractStructBase
{
    /**
     * The getTSBDataV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtTSBGroupV2[]
     */
    public $getTSBDataV2Return;
    /**
     * Constructor method for getTSBDataV2Response
     * @uses GetTSBDataV2Response::setGetTSBDataV2Return()
     * @param \StructType\ExtTSBGroupV2[] $getTSBDataV2Return
     */
    public function __construct(array $getTSBDataV2Return = array())
    {
        $this
            ->setGetTSBDataV2Return($getTSBDataV2Return);
    }
    /**
     * Get getTSBDataV2Return value
     * @return \StructType\ExtTSBGroupV2[]|null
     */
    public function getGetTSBDataV2Return()
    {
        return $this->getTSBDataV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetTSBDataV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetTSBDataV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetTSBDataV2ReturnForArrayConstraintsFromSetGetTSBDataV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTSBDataV2ResponseGetTSBDataV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getTSBDataV2ResponseGetTSBDataV2ReturnItem instanceof \StructType\ExtTSBGroupV2) {
                $invalidValues[] = is_object($getTSBDataV2ResponseGetTSBDataV2ReturnItem) ? get_class($getTSBDataV2ResponseGetTSBDataV2ReturnItem) : sprintf('%s(%s)', gettype($getTSBDataV2ResponseGetTSBDataV2ReturnItem), var_export($getTSBDataV2ResponseGetTSBDataV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getTSBDataV2Return property can only contain items of type \StructType\ExtTSBGroupV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getTSBDataV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBGroupV2[] $getTSBDataV2Return
     * @return \StructType\GetTSBDataV2Response
     */
    public function setGetTSBDataV2Return(array $getTSBDataV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getTSBDataV2ReturnArrayErrorMessage = self::validateGetTSBDataV2ReturnForArrayConstraintsFromSetGetTSBDataV2Return($getTSBDataV2Return))) {
            throw new \InvalidArgumentException($getTSBDataV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getTSBDataV2Return = $getTSBDataV2Return;
        return $this;
    }
    /**
     * Add item to getTSBDataV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtTSBGroupV2 $item
     * @return \StructType\GetTSBDataV2Response
     */
    public function addToGetTSBDataV2Return(\StructType\ExtTSBGroupV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtTSBGroupV2) {
            throw new \InvalidArgumentException(sprintf('The getTSBDataV2Return property can only contain items of type \StructType\ExtTSBGroupV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getTSBDataV2Return[] = $item;
        return $this;
    }
}
