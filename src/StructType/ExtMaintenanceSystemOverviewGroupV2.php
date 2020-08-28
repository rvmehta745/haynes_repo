<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenanceSystemOverviewGroupV2 StructType
 * @subpackage Structs
 */
class ExtMaintenanceSystemOverviewGroupV2 extends AbstractStructBase
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
     * @var \ArrayType\ArrayOfExtMaintenanceSystemOverviewTaskV2
     */
    public $tasks;
    /**
     * Constructor method for ExtMaintenanceSystemOverviewGroupV2
     * @uses ExtMaintenanceSystemOverviewGroupV2::setGroupDescription()
     * @uses ExtMaintenanceSystemOverviewGroupV2::setTasks()
     * @param string $groupDescription
     * @param \ArrayType\ArrayOfExtMaintenanceSystemOverviewTaskV2 $tasks
     */
    public function __construct($groupDescription = null, \ArrayType\ArrayOfExtMaintenanceSystemOverviewTaskV2 $tasks = null)
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
     * @return \StructType\ExtMaintenanceSystemOverviewGroupV2
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
     * @return \ArrayType\ArrayOfExtMaintenanceSystemOverviewTaskV2|null
     */
    public function getTasks()
    {
        return $this->tasks;
    }
    /**
     * Set tasks value
     * @param \ArrayType\ArrayOfExtMaintenanceSystemOverviewTaskV2 $tasks
     * @return \StructType\ExtMaintenanceSystemOverviewGroupV2
     */
    public function setTasks(\ArrayType\ArrayOfExtMaintenanceSystemOverviewTaskV2 $tasks = null)
    {
        $this->tasks = $tasks;
        return $this;
    }
}
