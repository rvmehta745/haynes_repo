<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenanceCalculatedV2 StructType
 * @subpackage Structs
 */
class ExtMaintenanceCalculatedV2 extends AbstractStructBase
{
    /**
     * The maintenancePeriod
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtMaintenancePeriodV5
     */
    public $maintenancePeriod;
    /**
     * The maintenanceSystem
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtMaintenanceSystemV5
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
     * @var \ArrayType\ArrayOfExtMaintenanceTaskV7
     */
    public $tasks;
    /**
     * Constructor method for ExtMaintenanceCalculatedV2
     * @uses ExtMaintenanceCalculatedV2::setMaintenancePeriod()
     * @uses ExtMaintenanceCalculatedV2::setMaintenanceSystem()
     * @uses ExtMaintenanceCalculatedV2::setStatus()
     * @uses ExtMaintenanceCalculatedV2::setTasks()
     * @param \StructType\ExtMaintenancePeriodV5 $maintenancePeriod
     * @param \StructType\ExtMaintenanceSystemV5 $maintenanceSystem
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtMaintenanceTaskV7 $tasks
     */
    public function __construct(\StructType\ExtMaintenancePeriodV5 $maintenancePeriod = null, \StructType\ExtMaintenanceSystemV5 $maintenanceSystem = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtMaintenanceTaskV7 $tasks = null)
    {
        $this
            ->setMaintenancePeriod($maintenancePeriod)
            ->setMaintenanceSystem($maintenanceSystem)
            ->setStatus($status)
            ->setTasks($tasks);
    }
    /**
     * Get maintenancePeriod value
     * @return \StructType\ExtMaintenancePeriodV5|null
     */
    public function getMaintenancePeriod()
    {
        return $this->maintenancePeriod;
    }
    /**
     * Set maintenancePeriod value
     * @param \StructType\ExtMaintenancePeriodV5 $maintenancePeriod
     * @return \StructType\ExtMaintenanceCalculatedV2
     */
    public function setMaintenancePeriod(\StructType\ExtMaintenancePeriodV5 $maintenancePeriod = null)
    {
        $this->maintenancePeriod = $maintenancePeriod;
        return $this;
    }
    /**
     * Get maintenanceSystem value
     * @return \StructType\ExtMaintenanceSystemV5|null
     */
    public function getMaintenanceSystem()
    {
        return $this->maintenanceSystem;
    }
    /**
     * Set maintenanceSystem value
     * @param \StructType\ExtMaintenanceSystemV5 $maintenanceSystem
     * @return \StructType\ExtMaintenanceCalculatedV2
     */
    public function setMaintenanceSystem(\StructType\ExtMaintenanceSystemV5 $maintenanceSystem = null)
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
     * @return \StructType\ExtMaintenanceCalculatedV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get tasks value
     * @return \ArrayType\ArrayOfExtMaintenanceTaskV7|null
     */
    public function getTasks()
    {
        return $this->tasks;
    }
    /**
     * Set tasks value
     * @param \ArrayType\ArrayOfExtMaintenanceTaskV7 $tasks
     * @return \StructType\ExtMaintenanceCalculatedV2
     */
    public function setTasks(\ArrayType\ArrayOfExtMaintenanceTaskV7 $tasks = null)
    {
        $this->tasks = $tasks;
        return $this;
    }
}
