<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignalInstanceV2 StructType
 * @subpackage Structs
 */
class SignalInstanceV2 extends AbstractStructBase
{
    /**
     * The component_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $component_id;
    /**
     * The genericParts
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_GenericPart
     */
    public $genericParts;
    /**
     * The instance_order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $instance_order;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $text;
    /**
     * Constructor method for SignalInstanceV2
     * @uses SignalInstanceV2::setComponent_id()
     * @uses SignalInstanceV2::setGenericParts()
     * @uses SignalInstanceV2::setInstance_order()
     * @uses SignalInstanceV2::setText()
     * @param int $component_id
     * @param \ArrayType\ArrayOf_tns2_GenericPart $genericParts
     * @param string $instance_order
     * @param string $text
     */
    public function __construct($component_id = null, \ArrayType\ArrayOf_tns2_GenericPart $genericParts = null, $instance_order = null, $text = null)
    {
        $this
            ->setComponent_id($component_id)
            ->setGenericParts($genericParts)
            ->setInstance_order($instance_order)
            ->setText($text);
    }
    /**
     * Get component_id value
     * @return int|null
     */
    public function getComponent_id()
    {
        return $this->component_id;
    }
    /**
     * Set component_id value
     * @param int $component_id
     * @return \StructType\SignalInstanceV2
     */
    public function setComponent_id($component_id = null)
    {
        // validation for constraint: int
        if (!is_null($component_id) && !(is_int($component_id) || ctype_digit($component_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($component_id, true), gettype($component_id)), __LINE__);
        }
        $this->component_id = $component_id;
        return $this;
    }
    /**
     * Get genericParts value
     * @return \ArrayType\ArrayOf_tns2_GenericPart|null
     */
    public function getGenericParts()
    {
        return $this->genericParts;
    }
    /**
     * Set genericParts value
     * @param \ArrayType\ArrayOf_tns2_GenericPart $genericParts
     * @return \StructType\SignalInstanceV2
     */
    public function setGenericParts(\ArrayType\ArrayOf_tns2_GenericPart $genericParts = null)
    {
        $this->genericParts = $genericParts;
        return $this;
    }
    /**
     * Get instance_order value
     * @return string|null
     */
    public function getInstance_order()
    {
        return $this->instance_order;
    }
    /**
     * Set instance_order value
     * @param string $instance_order
     * @return \StructType\SignalInstanceV2
     */
    public function setInstance_order($instance_order = null)
    {
        // validation for constraint: string
        if (!is_null($instance_order) && !is_string($instance_order)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instance_order, true), gettype($instance_order)), __LINE__);
        }
        $this->instance_order = $instance_order;
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \StructType\SignalInstanceV2
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        return $this;
    }
}
