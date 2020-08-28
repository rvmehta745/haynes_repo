<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenanceSystemOverviewTask StructType
 * @subpackage Structs
 */
class ExtMaintenanceSystemOverviewTask extends AbstractStructBase
{
    /**
     * The periodIds
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_int
     */
    public $periodIds;
    /**
     * The periodsAsBits
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $periodsAsBits;
    /**
     * The taskDescription
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $taskDescription;
    /**
     * Constructor method for ExtMaintenanceSystemOverviewTask
     * @uses ExtMaintenanceSystemOverviewTask::setPeriodIds()
     * @uses ExtMaintenanceSystemOverviewTask::setPeriodsAsBits()
     * @uses ExtMaintenanceSystemOverviewTask::setTaskDescription()
     * @param \ArrayType\ArrayOf_xsd_int $periodIds
     * @param string $periodsAsBits
     * @param string $taskDescription
     */
    public function __construct(\ArrayType\ArrayOf_xsd_int $periodIds = null, $periodsAsBits = null, $taskDescription = null)
    {
        $this
            ->setPeriodIds($periodIds)
            ->setPeriodsAsBits($periodsAsBits)
            ->setTaskDescription($taskDescription);
    }
    /**
     * Get periodIds value
     * @return \ArrayType\ArrayOf_xsd_int|null
     */
    public function getPeriodIds()
    {
        return $this->periodIds;
    }
    /**
     * Set periodIds value
     * @param \ArrayType\ArrayOf_xsd_int $periodIds
     * @return \StructType\ExtMaintenanceSystemOverviewTask
     */
    public function setPeriodIds(\ArrayType\ArrayOf_xsd_int $periodIds = null)
    {
        $this->periodIds = $periodIds;
        return $this;
    }
    /**
     * Get periodsAsBits value
     * @return string|null
     */
    public function getPeriodsAsBits()
    {
        return $this->periodsAsBits;
    }
    /**
     * Set periodsAsBits value
     * @param string $periodsAsBits
     * @return \StructType\ExtMaintenanceSystemOverviewTask
     */
    public function setPeriodsAsBits($periodsAsBits = null)
    {
        // validation for constraint: string
        if (!is_null($periodsAsBits) && !is_string($periodsAsBits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodsAsBits, true), gettype($periodsAsBits)), __LINE__);
        }
        $this->periodsAsBits = $periodsAsBits;
        return $this;
    }
    /**
     * Get taskDescription value
     * @return string|null
     */
    public function getTaskDescription()
    {
        return $this->taskDescription;
    }
    /**
     * Set taskDescription value
     * @param string $taskDescription
     * @return \StructType\ExtMaintenanceSystemOverviewTask
     */
    public function setTaskDescription($taskDescription = null)
    {
        // validation for constraint: string
        if (!is_null($taskDescription) && !is_string($taskDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskDescription, true), gettype($taskDescription)), __LINE__);
        }
        $this->taskDescription = $taskDescription;
        return $this;
    }
}
