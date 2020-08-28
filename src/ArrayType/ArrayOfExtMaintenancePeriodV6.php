<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfExtMaintenancePeriodV6 ArrayType
 * @subpackage Arrays
 */
class ArrayOfExtMaintenancePeriodV6 extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ExtMaintenancePeriodV6[]
     */
    public $item;
    /**
     * Constructor method for ArrayOfExtMaintenancePeriodV6
     * @uses ArrayOfExtMaintenancePeriodV6::setItem()
     * @param \StructType\ExtMaintenancePeriodV6[] $item
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
     * @return \StructType\ExtMaintenancePeriodV6[]|null
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
        foreach ($values as $arrayOfExtMaintenancePeriodV6ItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfExtMaintenancePeriodV6ItemItem instanceof \StructType\ExtMaintenancePeriodV6) {
                $invalidValues[] = is_object($arrayOfExtMaintenancePeriodV6ItemItem) ? get_class($arrayOfExtMaintenancePeriodV6ItemItem) : sprintf('%s(%s)', gettype($arrayOfExtMaintenancePeriodV6ItemItem), var_export($arrayOfExtMaintenancePeriodV6ItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The item property can only contain items of type \StructType\ExtMaintenancePeriodV6, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set item value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenancePeriodV6[] $item
     * @return \ArrayType\ArrayOfExtMaintenancePeriodV6
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
     * @param \StructType\ExtMaintenancePeriodV6 $item
     * @return \ArrayType\ArrayOfExtMaintenancePeriodV6
     */
    public function addToItem(\StructType\ExtMaintenancePeriodV6 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenancePeriodV6) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of type \StructType\ExtMaintenancePeriodV6, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ExtMaintenancePeriodV6|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ExtMaintenancePeriodV6|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ExtMaintenancePeriodV6|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ExtMaintenancePeriodV6|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ExtMaintenancePeriodV6|null
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
