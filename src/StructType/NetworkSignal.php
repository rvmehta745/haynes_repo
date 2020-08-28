<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NetworkSignal StructType
 * @subpackage Structs
 */
class NetworkSignal extends AbstractStructBase
{
    /**
     * The instances
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_SignalInstance
     */
    public $instances;
    /**
     * The signal_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $signal_id;
    /**
     * The system_groups
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_int
     */
    public $system_groups;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $text;
    /**
     * Constructor method for NetworkSignal
     * @uses NetworkSignal::setInstances()
     * @uses NetworkSignal::setSignal_id()
     * @uses NetworkSignal::setSystem_groups()
     * @uses NetworkSignal::setText()
     * @param \ArrayType\ArrayOf_tns2_SignalInstance $instances
     * @param int $signal_id
     * @param \ArrayType\ArrayOf_xsd_int $system_groups
     * @param string $text
     */
    public function __construct(\ArrayType\ArrayOf_tns2_SignalInstance $instances = null, $signal_id = null, \ArrayType\ArrayOf_xsd_int $system_groups = null, $text = null)
    {
        $this
            ->setInstances($instances)
            ->setSignal_id($signal_id)
            ->setSystem_groups($system_groups)
            ->setText($text);
    }
    /**
     * Get instances value
     * @return \ArrayType\ArrayOf_tns2_SignalInstance|null
     */
    public function getInstances()
    {
        return $this->instances;
    }
    /**
     * Set instances value
     * @param \ArrayType\ArrayOf_tns2_SignalInstance $instances
     * @return \StructType\NetworkSignal
     */
    public function setInstances(\ArrayType\ArrayOf_tns2_SignalInstance $instances = null)
    {
        $this->instances = $instances;
        return $this;
    }
    /**
     * Get signal_id value
     * @return int|null
     */
    public function getSignal_id()
    {
        return $this->signal_id;
    }
    /**
     * Set signal_id value
     * @param int $signal_id
     * @return \StructType\NetworkSignal
     */
    public function setSignal_id($signal_id = null)
    {
        // validation for constraint: int
        if (!is_null($signal_id) && !(is_int($signal_id) || ctype_digit($signal_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($signal_id, true), gettype($signal_id)), __LINE__);
        }
        $this->signal_id = $signal_id;
        return $this;
    }
    /**
     * Get system_groups value
     * @return \ArrayType\ArrayOf_xsd_int|null
     */
    public function getSystem_groups()
    {
        return $this->system_groups;
    }
    /**
     * Set system_groups value
     * @param \ArrayType\ArrayOf_xsd_int $system_groups
     * @return \StructType\NetworkSignal
     */
    public function setSystem_groups(\ArrayType\ArrayOf_xsd_int $system_groups = null)
    {
        $this->system_groups = $system_groups;
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
     * @return \StructType\NetworkSignal
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
