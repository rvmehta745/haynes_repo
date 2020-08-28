<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenancePeriodV3Combinable StructType
 * @subpackage Structs
 */
class ExtMaintenancePeriodV3Combinable extends AbstractStructBase
{
    /**
     * The combinable
     * @var bool
     */
    public $combinable;
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The times
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtTime
     */
    public $times;
    /**
     * Constructor method for ExtMaintenancePeriodV3Combinable
     * @uses ExtMaintenancePeriodV3Combinable::setCombinable()
     * @uses ExtMaintenancePeriodV3Combinable::setId()
     * @uses ExtMaintenancePeriodV3Combinable::setName()
     * @uses ExtMaintenancePeriodV3Combinable::setTimes()
     * @param bool $combinable
     * @param int $id
     * @param string $name
     * @param \ArrayType\ArrayOfExtTime $times
     */
    public function __construct($combinable = null, $id = null, $name = null, \ArrayType\ArrayOfExtTime $times = null)
    {
        $this
            ->setCombinable($combinable)
            ->setId($id)
            ->setName($name)
            ->setTimes($times);
    }
    /**
     * Get combinable value
     * @return bool|null
     */
    public function getCombinable()
    {
        return $this->combinable;
    }
    /**
     * Set combinable value
     * @param bool $combinable
     * @return \StructType\ExtMaintenancePeriodV3Combinable
     */
    public function setCombinable($combinable = null)
    {
        // validation for constraint: boolean
        if (!is_null($combinable) && !is_bool($combinable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($combinable, true), gettype($combinable)), __LINE__);
        }
        $this->combinable = $combinable;
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \StructType\ExtMaintenancePeriodV3Combinable
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\ExtMaintenancePeriodV3Combinable
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get times value
     * @return \ArrayType\ArrayOfExtTime|null
     */
    public function getTimes()
    {
        return $this->times;
    }
    /**
     * Set times value
     * @param \ArrayType\ArrayOfExtTime $times
     * @return \StructType\ExtMaintenancePeriodV3Combinable
     */
    public function setTimes(\ArrayType\ArrayOfExtTime $times = null)
    {
        $this->times = $times;
        return $this;
    }
}
