<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfExtMaintenanceTask ArrayType
 * @subpackage Arrays
 */
class ArrayOfExtMaintenanceTask extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ExtMaintenanceTask[]
     */
    public $item;
    /**
     * Constructor method for ArrayOfExtMaintenanceTask
     * @uses ArrayOfExtMaintenanceTask::setItem()
     * @param \StructType\ExtMaintenanceTask[] $item
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
     * @return \StructType\ExtMaintenanceTask[]|null
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
        foreach ($values as $arrayOfExtMaintenanceTaskItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfExtMaintenanceTaskItemItem instanceof \StructType\ExtMaintenanceTask) {
                $invalidValues[] = is_object($arrayOfExtMaintenanceTaskItemItem) ? get_class($arrayOfExtMaintenanceTaskItemItem) : sprintf('%s(%s)', gettype($arrayOfExtMaintenanceTaskItemItem), var_export($arrayOfExtMaintenanceTaskItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The item property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set item value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceTask[] $item
     * @return \ArrayType\ArrayOfExtMaintenanceTask
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
     * @param \StructType\ExtMaintenanceTask $item
     * @return \ArrayType\ArrayOfExtMaintenanceTask
     */
    public function addToItem(\StructType\ExtMaintenanceTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceTask) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of type \StructType\ExtMaintenanceTask, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ExtMaintenanceTask|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ExtMaintenanceTask|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ExtMaintenanceTask|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ExtMaintenanceTask|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ExtMaintenanceTask|null
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
