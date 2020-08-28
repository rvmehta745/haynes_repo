<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenanceSystem StructType
 * @subpackage Structs
 */
class ExtMaintenanceSystem extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The maintenancePeriods
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtMaintenancePeriod
     */
    public $maintenancePeriods;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtMaintenanceSystem
     * @uses ExtMaintenanceSystem::setId()
     * @uses ExtMaintenanceSystem::setMaintenancePeriods()
     * @uses ExtMaintenanceSystem::setName()
     * @uses ExtMaintenanceSystem::setStatus()
     * @param int $id
     * @param \ArrayType\ArrayOfExtMaintenancePeriod $maintenancePeriods
     * @param string $name
     * @param \StructType\ExtStatus $status
     */
    public function __construct($id = null, \ArrayType\ArrayOfExtMaintenancePeriod $maintenancePeriods = null, $name = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setId($id)
            ->setMaintenancePeriods($maintenancePeriods)
            ->setName($name)
            ->setStatus($status);
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
     * @return \StructType\ExtMaintenanceSystem
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
     * Get maintenancePeriods value
     * @return \ArrayType\ArrayOfExtMaintenancePeriod|null
     */
    public function getMaintenancePeriods()
    {
        return $this->maintenancePeriods;
    }
    /**
     * Set maintenancePeriods value
     * @param \ArrayType\ArrayOfExtMaintenancePeriod $maintenancePeriods
     * @return \StructType\ExtMaintenanceSystem
     */
    public function setMaintenancePeriods(\ArrayType\ArrayOfExtMaintenancePeriod $maintenancePeriods = null)
    {
        $this->maintenancePeriods = $maintenancePeriods;
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
     * @return \StructType\ExtMaintenanceSystem
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
     * Get status value
     * @return \StructType\ExtStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \StructType\ExtStatus $status
     * @return \StructType\ExtMaintenanceSystem
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
