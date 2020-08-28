<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Map StructType
 * @subpackage Structs
 */
class Map extends AbstractStructBase
{
    /**
     * The item
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\MapItem[]
     */
    public $item;
    /**
     * Constructor method for Map
     * @uses Map::setItem()
     * @param \StructType\MapItem[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \StructType\MapItem[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * This method is responsible for validating the values passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemForArrayConstraintsFromSetItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $mapItemItem) {
            // validation for constraint: itemType
            if (!$mapItemItem instanceof \StructType\MapItem) {
                $invalidValues[] = is_object($mapItemItem) ? get_class($mapItemItem) : sprintf('%s(%s)', gettype($mapItemItem), var_export($mapItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The item property can only contain items of type \StructType\MapItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \StructType\MapItem[] $item
     * @return \StructType\Map
     */
    public function setItem(array $item = array())
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new \InvalidArgumentException($itemArrayErrorMessage, __LINE__);
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \StructType\MapItem $item
     * @return \StructType\Map
     */
    public function addToItem(\StructType\MapItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MapItem) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of type \StructType\MapItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
}
