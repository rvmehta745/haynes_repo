<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SystemGroup StructType
 * @subpackage Structs
 */
class SystemGroup extends AbstractStructBase
{
    /**
     * The sg_number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $sg_number;
    /**
     * The system_group_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $system_group_id;
    /**
     * The systems
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_VesaSystem
     */
    public $systems;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $text;
    /**
     * Constructor method for SystemGroup
     * @uses SystemGroup::setSg_number()
     * @uses SystemGroup::setSystem_group_id()
     * @uses SystemGroup::setSystems()
     * @uses SystemGroup::setText()
     * @param int $sg_number
     * @param int $system_group_id
     * @param \ArrayType\ArrayOf_tns2_VesaSystem $systems
     * @param string $text
     */
    public function __construct($sg_number = null, $system_group_id = null, \ArrayType\ArrayOf_tns2_VesaSystem $systems = null, $text = null)
    {
        $this
            ->setSg_number($sg_number)
            ->setSystem_group_id($system_group_id)
            ->setSystems($systems)
            ->setText($text);
    }
    /**
     * Get sg_number value
     * @return int|null
     */
    public function getSg_number()
    {
        return $this->sg_number;
    }
    /**
     * Set sg_number value
     * @param int $sg_number
     * @return \StructType\SystemGroup
     */
    public function setSg_number($sg_number = null)
    {
        // validation for constraint: int
        if (!is_null($sg_number) && !(is_int($sg_number) || ctype_digit($sg_number))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sg_number, true), gettype($sg_number)), __LINE__);
        }
        $this->sg_number = $sg_number;
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
     * @return \StructType\SystemGroup
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
     * Get systems value
     * @return \ArrayType\ArrayOf_tns2_VesaSystem|null
     */
    public function getSystems()
    {
        return $this->systems;
    }
    /**
     * Set systems value
     * @param \ArrayType\ArrayOf_tns2_VesaSystem $systems
     * @return \StructType\SystemGroup
     */
    public function setSystems(\ArrayType\ArrayOf_tns2_VesaSystem $systems = null)
    {
        $this->systems = $systems;
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
     * @return \StructType\SystemGroup
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
