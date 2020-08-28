<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenanceCalculated StructType
 * @subpackage Structs
 */
class ExtMaintenanceCalculated extends AbstractStructBase
{
    /**
     * The maintenancePeriod
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtMaintenancePeriodV4
     */
    public $maintenancePeriod;
    /**
     * The maintenanceSystem
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtMaintenanceSystemV4
     */
    public $maintenanceSystem;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The tasks
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtMaintenanceTaskV6
     */
    public $tasks;
    /**
     * Constructor method for ExtMaintenanceCalculated
     * @uses ExtMaintenanceCalculated::setMaintenancePeriod()
     * @uses ExtMaintenanceCalculated::setMaintenanceSystem()
     * @uses ExtMaintenanceCalculated::setStatus()
     * @uses ExtMaintenanceCalculated::setTasks()
     * @param \StructType\ExtMaintenancePeriodV4 $maintenancePeriod
     * @param \StructType\ExtMaintenanceSystemV4 $maintenanceSystem
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtMaintenanceTaskV6 $tasks
     */
    public function __construct(\StructType\ExtMaintenancePeriodV4 $maintenancePeriod = null, \StructType\ExtMaintenanceSystemV4 $maintenanceSystem = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtMaintenanceTaskV6 $tasks = null)
    {
        $this
            ->setMaintenancePeriod($maintenancePeriod)
            ->setMaintenanceSystem($maintenanceSystem)
            ->setStatus($status)
            ->setTasks($tasks);
    }
    /**
     * Get maintenancePeriod value
     * @return \StructType\ExtMaintenancePeriodV4|null
     */
    public function getMaintenancePeriod()
    {
        return $this->maintenancePeriod;
    }
    /**
     * Set maintenancePeriod value
     * @param \StructType\ExtMaintenancePeriodV4 $maintenancePeriod
     * @return \StructType\ExtMaintenanceCalculated
     */
    public function setMaintenancePeriod(\StructType\ExtMaintenancePeriodV4 $maintenancePeriod = null)
    {
        $this->maintenancePeriod = $maintenancePeriod;
        return $this;
    }
    /**
     * Get maintenanceSystem value
     * @return \StructType\ExtMaintenanceSystemV4|null
     */
    public function getMaintenanceSystem()
    {
        return $this->maintenanceSystem;
    }
    /**
     * Set maintenanceSystem value
     * @param \StructType\ExtMaintenanceSystemV4 $maintenanceSystem
     * @return \StructType\ExtMaintenanceCalculated
     */
    public function setMaintenanceSystem(\StructType\ExtMaintenanceSystemV4 $maintenanceSystem = null)
    {
        $this->maintenanceSystem = $maintenanceSystem;
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
     * @return \StructType\ExtMaintenanceCalculated
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get tasks value
     * @return \ArrayType\ArrayOfExtMaintenanceTaskV6|null
     */
    public function getTasks()
    {
        return $this->tasks;
    }
    /**
     * Set tasks value
     * @param \ArrayType\ArrayOfExtMaintenanceTaskV6 $tasks
     * @return \StructType\ExtMaintenanceCalculated
     */
    public function setTasks(\ArrayType\ArrayOfExtMaintenanceTaskV6 $tasks = null)
    {
        $this->tasks = $tasks;
        return $this;
    }
}
