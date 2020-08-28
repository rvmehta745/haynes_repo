<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findCarTypesResponse StructType
 * @subpackage Structs
 */
class FindCarTypesResponse extends AbstractStructBase
{
    /**
     * The findCarTypesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtCarType[]
     */
    public $findCarTypesReturn;
    /**
     * Constructor method for findCarTypesResponse
     * @uses FindCarTypesResponse::setFindCarTypesReturn()
     * @param \StructType\ExtCarType[] $findCarTypesReturn
     */
    public function __construct(array $findCarTypesReturn = array())
    {
        $this
            ->setFindCarTypesReturn($findCarTypesReturn);
    }
    /**
     * Get findCarTypesReturn value
     * @return \StructType\ExtCarType[]|null
     */
    public function getFindCarTypesReturn()
    {
        return $this->findCarTypesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setFindCarTypesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFindCarTypesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFindCarTypesReturnForArrayConstraintsFromSetFindCarTypesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $findCarTypesResponseFindCarTypesReturnItem) {
            // validation for constraint: itemType
            if (!$findCarTypesResponseFindCarTypesReturnItem instanceof \StructType\ExtCarType) {
                $invalidValues[] = is_object($findCarTypesResponseFindCarTypesReturnItem) ? get_class($findCarTypesResponseFindCarTypesReturnItem) : sprintf('%s(%s)', gettype($findCarTypesResponseFindCarTypesReturnItem), var_export($findCarTypesResponseFindCarTypesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The findCarTypesReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set findCarTypesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType[] $findCarTypesReturn
     * @return \StructType\FindCarTypesResponse
     */
    public function setFindCarTypesReturn(array $findCarTypesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($findCarTypesReturnArrayErrorMessage = self::validateFindCarTypesReturnForArrayConstraintsFromSetFindCarTypesReturn($findCarTypesReturn))) {
            throw new \InvalidArgumentException($findCarTypesReturnArrayErrorMessage, __LINE__);
        }
        $this->findCarTypesReturn = $findCarTypesReturn;
        return $this;
    }
    /**
     * Add item to findCarTypesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType $item
     * @return \StructType\FindCarTypesResponse
     */
    public function addToFindCarTypesReturn(\StructType\ExtCarType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtCarType) {
            throw new \InvalidArgumentException(sprintf('The findCarTypesReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->findCarTypesReturn[] = $item;
        return $this;
    }
}
