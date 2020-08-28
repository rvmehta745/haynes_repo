<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SystemGroupCategoryV2 StructType
 * @subpackage Structs
 */
class SystemGroupCategoryV2 extends AbstractStructBase
{
    /**
     * The mainGroup
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mainGroup;
    /**
     * The systemGroups
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_SystemGroup
     */
    public $systemGroups;
    /**
     * The system_group_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $system_group_id;
    /**
     * The system_group_number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $system_group_number;
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
     * Constructor method for SystemGroupCategoryV2
     * @uses SystemGroupCategoryV2::setMainGroup()
     * @uses SystemGroupCategoryV2::setSystemGroups()
     * @uses SystemGroupCategoryV2::setSystem_group_id()
     * @uses SystemGroupCategoryV2::setSystem_group_number()
     * @uses SystemGroupCategoryV2::setSystems()
     * @uses SystemGroupCategoryV2::setText()
     * @param string $mainGroup
     * @param \ArrayType\ArrayOf_tns2_SystemGroup $systemGroups
     * @param int $system_group_id
     * @param int $system_group_number
     * @param \ArrayType\ArrayOf_tns2_VesaSystem $systems
     * @param string $text
     */
    public function __construct($mainGroup = null, \ArrayType\ArrayOf_tns2_SystemGroup $systemGroups = null, $system_group_id = null, $system_group_number = null, \ArrayType\ArrayOf_tns2_VesaSystem $systems = null, $text = null)
    {
        $this
            ->setMainGroup($mainGroup)
            ->setSystemGroups($systemGroups)
            ->setSystem_group_id($system_group_id)
            ->setSystem_group_number($system_group_number)
            ->setSystems($systems)
            ->setText($text);
    }
    /**
     * Get mainGroup value
     * @return string|null
     */
    public function getMainGroup()
    {
        return $this->mainGroup;
    }
    /**
     * Set mainGroup value
     * @param string $mainGroup
     * @return \StructType\SystemGroupCategoryV2
     */
    public function setMainGroup($mainGroup = null)
    {
        // validation for constraint: string
        if (!is_null($mainGroup) && !is_string($mainGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mainGroup, true), gettype($mainGroup)), __LINE__);
        }
        $this->mainGroup = $mainGroup;
        return $this;
    }
    /**
     * Get systemGroups value
     * @return \ArrayType\ArrayOf_tns2_SystemGroup|null
     */
    public function getSystemGroups()
    {
        return $this->systemGroups;
    }
    /**
     * Set systemGroups value
     * @param \ArrayType\ArrayOf_tns2_SystemGroup $systemGroups
     * @return \StructType\SystemGroupCategoryV2
     */
    public function setSystemGroups(\ArrayType\ArrayOf_tns2_SystemGroup $systemGroups = null)
    {
        $this->systemGroups = $systemGroups;
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
     * @return \StructType\SystemGroupCategoryV2
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
     * Get system_group_number value
     * @return int|null
     */
    public function getSystem_group_number()
    {
        return $this->system_group_number;
    }
    /**
     * Set system_group_number value
     * @param int $system_group_number
     * @return \StructType\SystemGroupCategoryV2
     */
    public function setSystem_group_number($system_group_number = null)
    {
        // validation for constraint: int
        if (!is_null($system_group_number) && !(is_int($system_group_number) || ctype_digit($system_group_number))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($system_group_number, true), gettype($system_group_number)), __LINE__);
        }
        $this->system_group_number = $system_group_number;
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
     * @return \StructType\SystemGroupCategoryV2
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
     * @return \StructType\SystemGroupCategoryV2
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
