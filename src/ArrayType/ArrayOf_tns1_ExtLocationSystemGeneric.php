<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOf_tns1_ExtLocationSystemGeneric ArrayType
 * @subpackage Arrays
 */
class ArrayOf_tns1_ExtLocationSystemGeneric extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ExtLocationSystemGeneric[]
     */
    public $item;
    /**
     * Constructor method for ArrayOf_tns1_ExtLocationSystemGeneric
     * @uses ArrayOf_tns1_ExtLocationSystemGeneric::setItem()
     * @param \StructType\ExtLocationSystemGeneric[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ExtLocationSystemGeneric[]|null
     */
    public function getItem()
    {
        return isset($this->item) ? $this->item : null;
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
        foreach ($values as $arrayOf_tns1_ExtLocationSystemGenericItemItem) {
            // validation for constraint: itemType
            if (!$arrayOf_tns1_ExtLocationSystemGenericItemItem instanceof \StructType\ExtLocationSystemGeneric) {
                $invalidValues[] = is_object($arrayOf_tns1_ExtLocationSystemGenericItemItem) ? get_class($arrayOf_tns1_ExtLocationSystemGenericItemItem) : sprintf('%s(%s)', gettype($arrayOf_tns1_ExtLocationSystemGenericItemItem), var_export($arrayOf_tns1_ExtLocationSystemGenericItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The item property can only contain items of type \StructType\ExtLocationSystemGeneric, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set item value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLocationSystemGeneric[] $item
     * @return \ArrayType\ArrayOf_tns1_ExtLocationSystemGeneric
     */
    public function setItem(array $item = array())
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new \InvalidArgumentException($itemArrayErrorMessage, __LINE__);
        }
        if (is_null($item) || (is_array($item) && empty($item))) {
            unset($this->item);
        } else {
            $this->item = $item;
        }
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtLocationSystemGeneric $item
     * @return \ArrayType\ArrayOf_tns1_ExtLocationSystemGeneric
     */
    public function addToItem(\StructType\ExtLocationSystemGeneric $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtLocationSystemGeneric) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of type \StructType\ExtLocationSystemGeneric, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ExtLocationSystemGeneric|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ExtLocationSystemGeneric|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ExtLocationSystemGeneric|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ExtLocationSystemGeneric|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ExtLocationSystemGeneric|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string item
     */
    public function getAttributeName()
    {
        return 'item';
    }
}
