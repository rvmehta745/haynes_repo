<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findCarTypesByDetailsResponse StructType
 * @subpackage Structs
 */
class FindCarTypesByDetailsResponse extends AbstractStructBase
{
    /**
     * The findCarTypesByDetailsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtCarType[]
     */
    public $findCarTypesByDetailsReturn;
    /**
     * Constructor method for findCarTypesByDetailsResponse
     * @uses FindCarTypesByDetailsResponse::setFindCarTypesByDetailsReturn()
     * @param \StructType\ExtCarType[] $findCarTypesByDetailsReturn
     */
    public function __construct(array $findCarTypesByDetailsReturn = array())
    {
        $this
            ->setFindCarTypesByDetailsReturn($findCarTypesByDetailsReturn);
    }
    /**
     * Get findCarTypesByDetailsReturn value
     * @return \StructType\ExtCarType[]|null
     */
    public function getFindCarTypesByDetailsReturn()
    {
        return $this->findCarTypesByDetailsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setFindCarTypesByDetailsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFindCarTypesByDetailsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFindCarTypesByDetailsReturnForArrayConstraintsFromSetFindCarTypesByDetailsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $findCarTypesByDetailsResponseFindCarTypesByDetailsReturnItem) {
            // validation for constraint: itemType
            if (!$findCarTypesByDetailsResponseFindCarTypesByDetailsReturnItem instanceof \StructType\ExtCarType) {
                $invalidValues[] = is_object($findCarTypesByDetailsResponseFindCarTypesByDetailsReturnItem) ? get_class($findCarTypesByDetailsResponseFindCarTypesByDetailsReturnItem) : sprintf('%s(%s)', gettype($findCarTypesByDetailsResponseFindCarTypesByDetailsReturnItem), var_export($findCarTypesByDetailsResponseFindCarTypesByDetailsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The findCarTypesByDetailsReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set findCarTypesByDetailsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType[] $findCarTypesByDetailsReturn
     * @return \StructType\FindCarTypesByDetailsResponse
     */
    public function setFindCarTypesByDetailsReturn(array $findCarTypesByDetailsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($findCarTypesByDetailsReturnArrayErrorMessage = self::validateFindCarTypesByDetailsReturnForArrayConstraintsFromSetFindCarTypesByDetailsReturn($findCarTypesByDetailsReturn))) {
            throw new \InvalidArgumentException($findCarTypesByDetailsReturnArrayErrorMessage, __LINE__);
        }
        $this->findCarTypesByDetailsReturn = $findCarTypesByDetailsReturn;
        return $this;
    }
    /**
     * Add item to findCarTypesByDetailsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType $item
     * @return \StructType\FindCarTypesByDetailsResponse
     */
    public function addToFindCarTypesByDetailsReturn(\StructType\ExtCarType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtCarType) {
            throw new \InvalidArgumentException(sprintf('The findCarTypesByDetailsReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->findCarTypesByDetailsReturn[] = $item;
        return $this;
    }
}
