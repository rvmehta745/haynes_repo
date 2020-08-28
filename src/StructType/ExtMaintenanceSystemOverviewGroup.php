<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenanceSystemOverviewGroup StructType
 * @subpackage Structs
 */
class ExtMaintenanceSystemOverviewGroup extends AbstractStructBase
{
    /**
     * The groupDescription
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $groupDescription;
    /**
     * The tasks
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtMaintenanceSystemOverviewTask
     */
    public $tasks;
    /**
     * Constructor method for ExtMaintenanceSystemOverviewGroup
     * @uses ExtMaintenanceSystemOverviewGroup::setGroupDescription()
     * @uses ExtMaintenanceSystemOverviewGroup::setTasks()
     * @param string $groupDescription
     * @param \ArrayType\ArrayOfExtMaintenanceSystemOverviewTask $tasks
     */
    public function __construct($groupDescription = null, \ArrayType\ArrayOfExtMaintenanceSystemOverviewTask $tasks = null)
    {
        $this
            ->setGroupDescription($groupDescription)
            ->setTasks($tasks);
    }
    /**
     * Get groupDescription value
     * @return string|null
     */
    public function getGroupDescription()
    {
        return $this->groupDescription;
    }
    /**
     * Set groupDescription value
     * @param string $groupDescription
     * @return \StructType\ExtMaintenanceSystemOverviewGroup
     */
    public function setGroupDescription($groupDescription = null)
    {
        // validation for constraint: string
        if (!is_null($groupDescription) && !is_string($groupDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupDescription, true), gettype($groupDescription)), __LINE__);
        }
        $this->groupDescription = $groupDescription;
        return $this;
    }
    /**
     * Get tasks value
     * @return \ArrayType\ArrayOfExtMaintenanceSystemOverviewTask|null
     */
    public function getTasks()
    {
        return $this->tasks;
    }
    /**
     * Set tasks value
     * @param \ArrayType\ArrayOfExtMaintenanceSystemOverviewTask $tasks
     * @return \StructType\ExtMaintenanceSystemOverviewGroup
     */
    public function setTasks(\ArrayType\ArrayOfExtMaintenanceSystemOverviewTask $tasks = null)
    {
        $this->tasks = $tasks;
        return $this;
    }
}
