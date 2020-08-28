<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VesaType StructType
 * @subpackage Structs
 */
class VesaType extends DataObject
{
    /**
     * The subjects
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtCarSubjects
     */
    public $subjects;
    /**
     * The ty_end_year
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ty_end_year;
    /**
     * The ty_engine_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ty_engine_code;
    /**
     * The ty_model_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ty_model_id;
    /**
     * The ty_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ty_name;
    /**
     * The ty_power
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ty_power;
    /**
     * The ty_start_year
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ty_start_year;
    /**
     * The ty_used
     * @var bool
     */
    public $ty_used;
    /**
     * The ty_volume
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $ty_volume;
    /**
     * Constructor method for VesaType
     * @uses VesaType::setSubjects()
     * @uses VesaType::setTy_end_year()
     * @uses VesaType::setTy_engine_code()
     * @uses VesaType::setTy_model_id()
     * @uses VesaType::setTy_name()
     * @uses VesaType::setTy_power()
     * @uses VesaType::setTy_start_year()
     * @uses VesaType::setTy_used()
     * @uses VesaType::setTy_volume()
     * @param \StructType\ExtCarSubjects $subjects
     * @param int $ty_end_year
     * @param string $ty_engine_code
     * @param int $ty_model_id
     * @param string $ty_name
     * @param int $ty_power
     * @param int $ty_start_year
     * @param bool $ty_used
     * @param int $ty_volume
     */
    public function __construct(\StructType\ExtCarSubjects $subjects = null, $ty_end_year = null, $ty_engine_code = null, $ty_model_id = null, $ty_name = null, $ty_power = null, $ty_start_year = null, $ty_used = null, $ty_volume = null)
    {
        $this
            ->setSubjects($subjects)
            ->setTy_end_year($ty_end_year)
            ->setTy_engine_code($ty_engine_code)
            ->setTy_model_id($ty_model_id)
            ->setTy_name($ty_name)
            ->setTy_power($ty_power)
            ->setTy_start_year($ty_start_year)
            ->setTy_used($ty_used)
            ->setTy_volume($ty_volume);
    }
    /**
     * Get subjects value
     * @return \StructType\ExtCarSubjects|null
     */
    public function getSubjects()
    {
        return $this->subjects;
    }
    /**
     * Set subjects value
     * @param \StructType\ExtCarSubjects $subjects
     * @return \StructType\VesaType
     */
    public function setSubjects(\StructType\ExtCarSubjects $subjects = null)
    {
        $this->subjects = $subjects;
        return $this;
    }
    /**
     * Get ty_end_year value
     * @return int|null
     */
    public function getTy_end_year()
    {
        return $this->ty_end_year;
    }
    /**
     * Set ty_end_year value
     * @param int $ty_end_year
     * @return \StructType\VesaType
     */
    public function setTy_end_year($ty_end_year = null)
    {
        // validation for constraint: int
        if (!is_null($ty_end_year) && !(is_int($ty_end_year) || ctype_digit($ty_end_year))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ty_end_year, true), gettype($ty_end_year)), __LINE__);
        }
        $this->ty_end_year = $ty_end_year;
        return $this;
    }
    /**
     * Get ty_engine_code value
     * @return string|null
     */
    public function getTy_engine_code()
    {
        return $this->ty_engine_code;
    }
    /**
     * Set ty_engine_code value
     * @param string $ty_engine_code
     * @return \StructType\VesaType
     */
    public function setTy_engine_code($ty_engine_code = null)
    {
        // validation for constraint: string
        if (!is_null($ty_engine_code) && !is_string($ty_engine_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ty_engine_code, true), gettype($ty_engine_code)), __LINE__);
        }
        $this->ty_engine_code = $ty_engine_code;
        return $this;
    }
    /**
     * Get ty_model_id value
     * @return int|null
     */
    public function getTy_model_id()
    {
        return $this->ty_model_id;
    }
    /**
     * Set ty_model_id value
     * @param int $ty_model_id
     * @return \StructType\VesaType
     */
    public function setTy_model_id($ty_model_id = null)
    {
        // validation for constraint: int
        if (!is_null($ty_model_id) && !(is_int($ty_model_id) || ctype_digit($ty_model_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ty_model_id, true), gettype($ty_model_id)), __LINE__);
        }
        $this->ty_model_id = $ty_model_id;
        return $this;
    }
    /**
     * Get ty_name value
     * @return string|null
     */
    public function getTy_name()
    {
        return $this->ty_name;
    }
    /**
     * Set ty_name value
     * @param string $ty_name
     * @return \StructType\VesaType
     */
    public function setTy_name($ty_name = null)
    {
        // validation for constraint: string
        if (!is_null($ty_name) && !is_string($ty_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ty_name, true), gettype($ty_name)), __LINE__);
        }
        $this->ty_name = $ty_name;
        return $this;
    }
    /**
     * Get ty_power value
     * @return int|null
     */
    public function getTy_power()
    {
        return $this->ty_power;
    }
    /**
     * Set ty_power value
     * @param int $ty_power
     * @return \StructType\VesaType
     */
    public function setTy_power($ty_power = null)
    {
        // validation for constraint: int
        if (!is_null($ty_power) && !(is_int($ty_power) || ctype_digit($ty_power))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ty_power, true), gettype($ty_power)), __LINE__);
        }
        $this->ty_power = $ty_power;
        return $this;
    }
    /**
     * Get ty_start_year value
     * @return int|null
     */
    public function getTy_start_year()
    {
        return $this->ty_start_year;
    }
    /**
     * Set ty_start_year value
     * @param int $ty_start_year
     * @return \StructType\VesaType
     */
    public function setTy_start_year($ty_start_year = null)
    {
        // validation for constraint: int
        if (!is_null($ty_start_year) && !(is_int($ty_start_year) || ctype_digit($ty_start_year))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ty_start_year, true), gettype($ty_start_year)), __LINE__);
        }
        $this->ty_start_year = $ty_start_year;
        return $this;
    }
    /**
     * Get ty_used value
     * @return bool|null
     */
    public function getTy_used()
    {
        return $this->ty_used;
    }
    /**
     * Set ty_used value
     * @param bool $ty_used
     * @return \StructType\VesaType
     */
    public function setTy_used($ty_used = null)
    {
        // validation for constraint: boolean
        if (!is_null($ty_used) && !is_bool($ty_used)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ty_used, true), gettype($ty_used)), __LINE__);
        }
        $this->ty_used = $ty_used;
        return $this;
    }
    /**
     * Get ty_volume value
     * @return int|null
     */
    public function getTy_volume()
    {
        return $this->ty_volume;
    }
    /**
     * Set ty_volume value
     * @param int $ty_volume
     * @return \StructType\VesaType
     */
    public function setTy_volume($ty_volume = null)
    {
        // validation for constraint: int
        if (!is_null($ty_volume) && !(is_int($ty_volume) || ctype_digit($ty_volume))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ty_volume, true), gettype($ty_volume)), __LINE__);
        }
        $this->ty_volume = $ty_volume;
        return $this;
    }
}
