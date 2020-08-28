<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for PinsArray ArrayType
 * @subpackage Arrays
 */
class PinsArray extends AbstractStructArrayBase
{
    /**
     * The componentsArray
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_ComponentWs
     */
    public $componentsArray;
    /**
     * Constructor method for PinsArray
     * @uses PinsArray::setComponentsArray()
     * @param \ArrayType\ArrayOf_tns2_ComponentWs $componentsArray
     */
    public function __construct(\ArrayType\ArrayOf_tns2_ComponentWs $componentsArray = null)
    {
        $this
            ->setComponentsArray($componentsArray);
    }
    /**
     * Get componentsArray value
     * @return \ArrayType\ArrayOf_tns2_ComponentWs|null
     */
    public function getComponentsArray()
    {
        return $this->componentsArray;
    }
    /**
     * Set componentsArray value
     * @param \ArrayType\ArrayOf_tns2_ComponentWs $componentsArray
     * @return \ArrayType\PinsArray
     */
    public function setComponentsArray(\ArrayType\ArrayOf_tns2_ComponentWs $componentsArray = null)
    {
        $this->componentsArray = $componentsArray;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ArrayType\ArrayOf_tns2_ComponentWs|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ArrayType\ArrayOf_tns2_ComponentWs|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ArrayType\ArrayOf_tns2_ComponentWs|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ArrayType\ArrayOf_tns2_ComponentWs|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ArrayType\ArrayOf_tns2_ComponentWs|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string componentsArray
     */
    public function getAttributeName()
    {
        return 'componentsArray';
    }
}
