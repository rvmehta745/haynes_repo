<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findCarTypesByDetailsV2Response StructType
 * @subpackage Structs
 */
class FindCarTypesByDetailsV2Response extends AbstractStructBase
{
    /**
     * The findCarTypesByDetailsV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtCarType[]
     */
    public $findCarTypesByDetailsV2Return;
    /**
     * Constructor method for findCarTypesByDetailsV2Response
     * @uses FindCarTypesByDetailsV2Response::setFindCarTypesByDetailsV2Return()
     * @param \StructType\ExtCarType[] $findCarTypesByDetailsV2Return
     */
    public function __construct(array $findCarTypesByDetailsV2Return = array())
    {
        $this
            ->setFindCarTypesByDetailsV2Return($findCarTypesByDetailsV2Return);
    }
    /**
     * Get findCarTypesByDetailsV2Return value
     * @return \StructType\ExtCarType[]|null
     */
    public function getFindCarTypesByDetailsV2Return()
    {
        return $this->findCarTypesByDetailsV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setFindCarTypesByDetailsV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFindCarTypesByDetailsV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFindCarTypesByDetailsV2ReturnForArrayConstraintsFromSetFindCarTypesByDetailsV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $findCarTypesByDetailsV2ResponseFindCarTypesByDetailsV2ReturnItem) {
            // validation for constraint: itemType
            if (!$findCarTypesByDetailsV2ResponseFindCarTypesByDetailsV2ReturnItem instanceof \StructType\ExtCarType) {
                $invalidValues[] = is_object($findCarTypesByDetailsV2ResponseFindCarTypesByDetailsV2ReturnItem) ? get_class($findCarTypesByDetailsV2ResponseFindCarTypesByDetailsV2ReturnItem) : sprintf('%s(%s)', gettype($findCarTypesByDetailsV2ResponseFindCarTypesByDetailsV2ReturnItem), var_export($findCarTypesByDetailsV2ResponseFindCarTypesByDetailsV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The findCarTypesByDetailsV2Return property can only contain items of type \StructType\ExtCarType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set findCarTypesByDetailsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType[] $findCarTypesByDetailsV2Return
     * @return \StructType\FindCarTypesByDetailsV2Response
     */
    public function setFindCarTypesByDetailsV2Return(array $findCarTypesByDetailsV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($findCarTypesByDetailsV2ReturnArrayErrorMessage = self::validateFindCarTypesByDetailsV2ReturnForArrayConstraintsFromSetFindCarTypesByDetailsV2Return($findCarTypesByDetailsV2Return))) {
            throw new \InvalidArgumentException($findCarTypesByDetailsV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->findCarTypesByDetailsV2Return = $findCarTypesByDetailsV2Return;
        return $this;
    }
    /**
     * Add item to findCarTypesByDetailsV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType $item
     * @return \StructType\FindCarTypesByDetailsV2Response
     */
    public function addToFindCarTypesByDetailsV2Return(\StructType\ExtCarType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtCarType) {
            throw new \InvalidArgumentException(sprintf('The findCarTypesByDetailsV2Return property can only contain items of type \StructType\ExtCarType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->findCarTypesByDetailsV2Return[] = $item;
        return $this;
    }
}
