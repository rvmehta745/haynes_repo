<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiagnosticComponent StructType
 * @subpackage Structs
 */
class DiagnosticComponent extends AbstractStructBase
{
    /**
     * The component
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Component
     */
    public $component;
    /**
     * The couplingType
     * @var int
     */
    public $couplingType;
    /**
     * The system_group_id
     * @var int
     */
    public $system_group_id;
    /**
     * The system_type_id
     * @var int
     */
    public $system_type_id;
    /**
     * Constructor method for DiagnosticComponent
     * @uses DiagnosticComponent::setComponent()
     * @uses DiagnosticComponent::setCouplingType()
     * @uses DiagnosticComponent::setSystem_group_id()
     * @uses DiagnosticComponent::setSystem_type_id()
     * @param \StructType\Component $component
     * @param int $couplingType
     * @param int $system_group_id
     * @param int $system_type_id
     */
    public function __construct(\StructType\Component $component = null, $couplingType = null, $system_group_id = null, $system_type_id = null)
    {
        $this
            ->setComponent($component)
            ->setCouplingType($couplingType)
            ->setSystem_group_id($system_group_id)
            ->setSystem_type_id($system_type_id);
    }
    /**
     * Get component value
     * @return \StructType\Component|null
     */
    public function getComponent()
    {
        return $this->component;
    }
    /**
     * Set component value
     * @param \StructType\Component $component
     * @return \StructType\DiagnosticComponent
     */
    public function setComponent(\StructType\Component $component = null)
    {
        $this->component = $component;
        return $this;
    }
    /**
     * Get couplingType value
     * @return int|null
     */
    public function getCouplingType()
    {
        return $this->couplingType;
    }
    /**
     * Set couplingType value
     * @param int $couplingType
     * @return \StructType\DiagnosticComponent
     */
    public function setCouplingType($couplingType = null)
    {
        // validation for constraint: int
        if (!is_null($couplingType) && !(is_int($couplingType) || ctype_digit($couplingType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($couplingType, true), gettype($couplingType)), __LINE__);
        }
        $this->couplingType = $couplingType;
        return $this;
    }
    /**
     * Get system_group_id value
     * @return int|null
     */
    public function getSystem_group_id()
    {
        return $this->system_group_id;
    }
    /**
     * Set system_group_id value
     * @param int $system_group_id
     * @return \StructType\DiagnosticComponent
     */
    public function setSystem_group_id($system_group_id = null)
    {
        // validation for constraint: int
        if (!is_null($system_group_id) && !(is_int($system_group_id) || ctype_digit($system_group_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($system_group_id, true), gettype($system_group_id)), __LINE__);
        }
        $this->system_group_id = $system_group_id;
        return $this;
    }
    /**
     * Get system_type_id value
     * @return int|null
     */
    public function getSystem_type_id()
    {
        return $this->system_type_id;
    }
    /**
     * Set system_type_id value
     * @param int $system_type_id
     * @return \StructType\DiagnosticComponent
     */
    public function setSystem_type_id($system_type_id = null)
    {
        // validation for constraint: int
        if (!is_null($system_type_id) && !(is_int($system_type_id) || ctype_digit($system_type_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($system_type_id, true), gettype($system_type_id)), __LINE__);
        }
        $this->system_type_id = $system_type_id;
        return $this;
    }
}
