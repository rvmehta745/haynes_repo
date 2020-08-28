<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SymbolInstanceLocSystem StructType
 * @subpackage Structs
 */
class SymbolInstanceLocSystem extends AbstractStructBase
{
    /**
     * The locationSystem
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtLocationSystem
     */
    public $locationSystem;
    /**
     * The locationSystems
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_ExtLocationSystem
     */
    public $locationSystems;
    /**
     * The symbol_instance_description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $symbol_instance_description;
    /**
     * The symbol_instance_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $symbol_instance_id;
    /**
     * Constructor method for SymbolInstanceLocSystem
     * @uses SymbolInstanceLocSystem::setLocationSystem()
     * @uses SymbolInstanceLocSystem::setLocationSystems()
     * @uses SymbolInstanceLocSystem::setSymbol_instance_description()
     * @uses SymbolInstanceLocSystem::setSymbol_instance_id()
     * @param \StructType\ExtLocationSystem $locationSystem
     * @param \ArrayType\ArrayOf_tns2_ExtLocationSystem $locationSystems
     * @param string $symbol_instance_description
     * @param int $symbol_instance_id
     */
    public function __construct(\StructType\ExtLocationSystem $locationSystem = null, \ArrayType\ArrayOf_tns2_ExtLocationSystem $locationSystems = null, $symbol_instance_description = null, $symbol_instance_id = null)
    {
        $this
            ->setLocationSystem($locationSystem)
            ->setLocationSystems($locationSystems)
            ->setSymbol_instance_description($symbol_instance_description)
            ->setSymbol_instance_id($symbol_instance_id);
    }
    /**
     * Get locationSystem value
     * @return \StructType\ExtLocationSystem|null
     */
    public function getLocationSystem()
    {
        return $this->locationSystem;
    }
    /**
     * Set locationSystem value
     * @param \StructType\ExtLocationSystem $locationSystem
     * @return \StructType\SymbolInstanceLocSystem
     */
    public function setLocationSystem(\StructType\ExtLocationSystem $locationSystem = null)
    {
        $this->locationSystem = $locationSystem;
        return $this;
    }
    /**
     * Get locationSystems value
     * @return \ArrayType\ArrayOf_tns2_ExtLocationSystem|null
     */
    public function getLocationSystems()
    {
        return $this->locationSystems;
    }
    /**
     * Set locationSystems value
     * @param \ArrayType\ArrayOf_tns2_ExtLocationSystem $locationSystems
     * @return \StructType\SymbolInstanceLocSystem
     */
    public function setLocationSystems(\ArrayType\ArrayOf_tns2_ExtLocationSystem $locationSystems = null)
    {
        $this->locationSystems = $locationSystems;
        return $this;
    }
    /**
     * Get symbol_instance_description value
     * @return string|null
     */
    public function getSymbol_instance_description()
    {
        return $this->symbol_instance_description;
    }
    /**
     * Set symbol_instance_description value
     * @param string $symbol_instance_description
     * @return \StructType\SymbolInstanceLocSystem
     */
    public function setSymbol_instance_description($symbol_instance_description = null)
    {
        // validation for constraint: string
        if (!is_null($symbol_instance_description) && !is_string($symbol_instance_description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($symbol_instance_description, true), gettype($symbol_instance_description)), __LINE__);
        }
        $this->symbol_instance_description = $symbol_instance_description;
        return $this;
    }
    /**
     * Get symbol_instance_id value
     * @return int|null
     */
    public function getSymbol_instance_id()
    {
        return $this->symbol_instance_id;
    }
    /**
     * Set symbol_instance_id value
     * @param int $symbol_instance_id
     * @return \StructType\SymbolInstanceLocSystem
     */
    public function setSymbol_instance_id($symbol_instance_id = null)
    {
        // validation for constraint: int
        if (!is_null($symbol_instance_id) && !(is_int($symbol_instance_id) || ctype_digit($symbol_instance_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($symbol_instance_id, true), gettype($symbol_instance_id)), __LINE__);
        }
        $this->symbol_instance_id = $symbol_instance_id;
        return $this;
    }
}
