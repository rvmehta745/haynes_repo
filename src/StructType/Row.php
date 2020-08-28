<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Row StructType
 * @subpackage Structs
 */
class Row extends AbstractStructBase
{
    /**
     * The value1
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $value1;
    /**
     * The value2
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $value2;
    /**
     * Constructor method for Row
     * @uses Row::setValue1()
     * @uses Row::setValue2()
     * @param string $value1
     * @param string $value2
     */
    public function __construct($value1 = null, $value2 = null)
    {
        $this
            ->setValue1($value1)
            ->setValue2($value2);
    }
    /**
     * Get value1 value
     * @return string|null
     */
    public function getValue1()
    {
        return $this->value1;
    }
    /**
     * Set value1 value
     * @param string $value1
     * @return \StructType\Row
     */
    public function setValue1($value1 = null)
    {
        // validation for constraint: string
        if (!is_null($value1) && !is_string($value1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value1, true), gettype($value1)), __LINE__);
        }
        $this->value1 = $value1;
        return $this;
    }
    /**
     * Get value2 value
     * @return string|null
     */
    public function getValue2()
    {
        return $this->value2;
    }
    /**
     * Set value2 value
     * @param string $value2
     * @return \StructType\Row
     */
    public function setValue2($value2 = null)
    {
        // validation for constraint: string
        if (!is_null($value2) && !is_string($value2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value2, true), gettype($value2)), __LINE__);
        }
        $this->value2 = $value2;
        return $this;
    }
}
