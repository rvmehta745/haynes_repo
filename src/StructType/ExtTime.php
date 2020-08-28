<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtTime StructType
 * @subpackage Structs
 */
class ExtTime extends AbstractStructBase
{
    /**
     * The code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $code;
    /**
     * The selected
     * @var bool
     */
    public $selected;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The value
     * @var int
     */
    public $value;
    /**
     * Constructor method for ExtTime
     * @uses ExtTime::setCode()
     * @uses ExtTime::setSelected()
     * @uses ExtTime::setType()
     * @uses ExtTime::setValue()
     * @param string $code
     * @param bool $selected
     * @param string $type
     * @param int $value
     */
    public function __construct($code = null, $selected = null, $type = null, $value = null)
    {
        $this
            ->setCode($code)
            ->setSelected($selected)
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \StructType\ExtTime
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get selected value
     * @return bool|null
     */
    public function getSelected()
    {
        return $this->selected;
    }
    /**
     * Set selected value
     * @param bool $selected
     * @return \StructType\ExtTime
     */
    public function setSelected($selected = null)
    {
        // validation for constraint: boolean
        if (!is_null($selected) && !is_bool($selected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selected, true), gettype($selected)), __LINE__);
        }
        $this->selected = $selected;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \StructType\ExtTime
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get value value
     * @return int|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param int $value
     * @return \StructType\ExtTime
     */
    public function setValue($value = null)
    {
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
}
