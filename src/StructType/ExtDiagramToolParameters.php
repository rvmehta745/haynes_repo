<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtDiagramToolParameters StructType
 * @subpackage Structs
 */
class ExtDiagramToolParameters extends AbstractStructBase
{
    /**
     * The pins
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns1_ExtPin
     */
    public $pins;
    /**
     * The state
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $state;
    /**
     * The tool
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tool;
    /**
     * The unit
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $unit;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $value;
    /**
     * Constructor method for ExtDiagramToolParameters
     * @uses ExtDiagramToolParameters::setPins()
     * @uses ExtDiagramToolParameters::setState()
     * @uses ExtDiagramToolParameters::setTool()
     * @uses ExtDiagramToolParameters::setUnit()
     * @uses ExtDiagramToolParameters::setValue()
     * @param \ArrayType\ArrayOf_tns1_ExtPin $pins
     * @param string $state
     * @param string $tool
     * @param string $unit
     * @param string $value
     */
    public function __construct(\ArrayType\ArrayOf_tns1_ExtPin $pins = null, $state = null, $tool = null, $unit = null, $value = null)
    {
        $this
            ->setPins($pins)
            ->setState($state)
            ->setTool($tool)
            ->setUnit($unit)
            ->setValue($value);
    }
    /**
     * Get pins value
     * @return \ArrayType\ArrayOf_tns1_ExtPin|null
     */
    public function getPins()
    {
        return $this->pins;
    }
    /**
     * Set pins value
     * @param \ArrayType\ArrayOf_tns1_ExtPin $pins
     * @return \StructType\ExtDiagramToolParameters
     */
    public function setPins(\ArrayType\ArrayOf_tns1_ExtPin $pins = null)
    {
        $this->pins = $pins;
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \StructType\ExtDiagramToolParameters
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
    /**
     * Get tool value
     * @return string|null
     */
    public function getTool()
    {
        return $this->tool;
    }
    /**
     * Set tool value
     * @param string $tool
     * @return \StructType\ExtDiagramToolParameters
     */
    public function setTool($tool = null)
    {
        // validation for constraint: string
        if (!is_null($tool) && !is_string($tool)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tool, true), gettype($tool)), __LINE__);
        }
        $this->tool = $tool;
        return $this;
    }
    /**
     * Get unit value
     * @return string|null
     */
    public function getUnit()
    {
        return $this->unit;
    }
    /**
     * Set unit value
     * @param string $unit
     * @return \StructType\ExtDiagramToolParameters
     */
    public function setUnit($unit = null)
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unit, true), gettype($unit)), __LINE__);
        }
        $this->unit = $unit;
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \StructType\ExtDiagramToolParameters
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
}
