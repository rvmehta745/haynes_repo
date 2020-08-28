<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenancePeriod StructType
 * @subpackage Structs
 */
class ExtMaintenancePeriod extends AbstractStructBase
{
    /**
     * The estimatedTime
     * @var bool
     */
    public $estimatedTime;
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
     * The time
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $time;
    /**
     * Constructor method for ExtMaintenancePeriod
     * @uses ExtMaintenancePeriod::setEstimatedTime()
     * @uses ExtMaintenancePeriod::setId()
     * @uses ExtMaintenancePeriod::setName()
     * @uses ExtMaintenancePeriod::setTime()
     * @param bool $estimatedTime
     * @param int $id
     * @param string $name
     * @param int $time
     */
    public function __construct($estimatedTime = null, $id = null, $name = null, $time = null)
    {
        $this
            ->setEstimatedTime($estimatedTime)
            ->setId($id)
            ->setName($name)
            ->setTime($time);
    }
    /**
     * Get estimatedTime value
     * @return bool|null
     */
    public function getEstimatedTime()
    {
        return $this->estimatedTime;
    }
    /**
     * Set estimatedTime value
     * @param bool $estimatedTime
     * @return \StructType\ExtMaintenancePeriod
     */
    public function setEstimatedTime($estimatedTime = null)
    {
        // validation for constraint: boolean
        if (!is_null($estimatedTime) && !is_bool($estimatedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($estimatedTime, true), gettype($estimatedTime)), __LINE__);
        }
        $this->estimatedTime = $estimatedTime;
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
     * @return \StructType\ExtMaintenancePeriod
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
     * @return \StructType\ExtMaintenancePeriod
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
     * Get time value
     * @return int|null
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param int $time
     * @return \StructType\ExtMaintenancePeriod
     */
    public function setTime($time = null)
    {
        // validation for constraint: int
        if (!is_null($time) && !(is_int($time) || ctype_digit($time))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->time = $time;
        return $this;
    }
}
