<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Model StructType
 * @subpackage Structs
 */
class Model extends DataObject
{
    /**
     * The mo_make_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $mo_make_id;
    /**
     * The mo_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mo_name;
    /**
     * The mo_sort_order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $mo_sort_order;
    /**
     * The mo_used
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $mo_used;
    /**
     * The mo_years_build
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mo_years_build;
    /**
     * Constructor method for Model
     * @uses Model::setMo_make_id()
     * @uses Model::setMo_name()
     * @uses Model::setMo_sort_order()
     * @uses Model::setMo_used()
     * @uses Model::setMo_years_build()
     * @param int $mo_make_id
     * @param string $mo_name
     * @param int $mo_sort_order
     * @param bool $mo_used
     * @param string $mo_years_build
     */
    public function __construct($mo_make_id = null, $mo_name = null, $mo_sort_order = null, $mo_used = null, $mo_years_build = null)
    {
        $this
            ->setMo_make_id($mo_make_id)
            ->setMo_name($mo_name)
            ->setMo_sort_order($mo_sort_order)
            ->setMo_used($mo_used)
            ->setMo_years_build($mo_years_build);
    }
    /**
     * Get mo_make_id value
     * @return int|null
     */
    public function getMo_make_id()
    {
        return $this->mo_make_id;
    }
    /**
     * Set mo_make_id value
     * @param int $mo_make_id
     * @return \StructType\Model
     */
    public function setMo_make_id($mo_make_id = null)
    {
        // validation for constraint: int
        if (!is_null($mo_make_id) && !(is_int($mo_make_id) || ctype_digit($mo_make_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mo_make_id, true), gettype($mo_make_id)), __LINE__);
        }
        $this->mo_make_id = $mo_make_id;
        return $this;
    }
    /**
     * Get mo_name value
     * @return string|null
     */
    public function getMo_name()
    {
        return $this->mo_name;
    }
    /**
     * Set mo_name value
     * @param string $mo_name
     * @return \StructType\Model
     */
    public function setMo_name($mo_name = null)
    {
        // validation for constraint: string
        if (!is_null($mo_name) && !is_string($mo_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mo_name, true), gettype($mo_name)), __LINE__);
        }
        $this->mo_name = $mo_name;
        return $this;
    }
    /**
     * Get mo_sort_order value
     * @return int|null
     */
    public function getMo_sort_order()
    {
        return $this->mo_sort_order;
    }
    /**
     * Set mo_sort_order value
     * @param int $mo_sort_order
     * @return \StructType\Model
     */
    public function setMo_sort_order($mo_sort_order = null)
    {
        // validation for constraint: int
        if (!is_null($mo_sort_order) && !(is_int($mo_sort_order) || ctype_digit($mo_sort_order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mo_sort_order, true), gettype($mo_sort_order)), __LINE__);
        }
        $this->mo_sort_order = $mo_sort_order;
        return $this;
    }
    /**
     * Get mo_used value
     * @return bool|null
     */
    public function getMo_used()
    {
        return $this->mo_used;
    }
    /**
     * Set mo_used value
     * @param bool $mo_used
     * @return \StructType\Model
     */
    public function setMo_used($mo_used = null)
    {
        // validation for constraint: boolean
        if (!is_null($mo_used) && !is_bool($mo_used)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mo_used, true), gettype($mo_used)), __LINE__);
        }
        $this->mo_used = $mo_used;
        return $this;
    }
    /**
     * Get mo_years_build value
     * @return string|null
     */
    public function getMo_years_build()
    {
        return $this->mo_years_build;
    }
    /**
     * Set mo_years_build value
     * @param string $mo_years_build
     * @return \StructType\Model
     */
    public function setMo_years_build($mo_years_build = null)
    {
        // validation for constraint: string
        if (!is_null($mo_years_build) && !is_string($mo_years_build)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mo_years_build, true), gettype($mo_years_build)), __LINE__);
        }
        $this->mo_years_build = $mo_years_build;
        return $this;
    }
}
