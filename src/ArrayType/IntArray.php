<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for IntArray ArrayType
 * @subpackage Arrays
 */
class IntArray extends AbstractStructArrayBase
{
    /**
     * The array
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_int
     */
    public $array;
    /**
     * Constructor method for IntArray
     * @uses IntArray::setArray()
     * @param \ArrayType\ArrayOf_xsd_int $array
     */
    public function __construct(\ArrayType\ArrayOf_xsd_int $array = null)
    {
        $this
            ->setArray($array);
    }
    /**
     * Get array value
     * @return \ArrayType\ArrayOf_xsd_int|null
     */
    public function getArray()
    {
        return $this->array;
    }
    /**
     * Set array value
     * @param \ArrayType\ArrayOf_xsd_int $array
     * @return \ArrayType\IntArray
     */
    public function setArray(\ArrayType\ArrayOf_xsd_int $array = null)
    {
        $this->array = $array;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ArrayType\ArrayOf_xsd_int|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ArrayType\ArrayOf_xsd_int|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ArrayType\ArrayOf_xsd_int|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ArrayType\ArrayOf_xsd_int|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ArrayType\ArrayOf_xsd_int|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string array
     */
    public function getAttributeName()
    {
        return 'array';
    }
}
