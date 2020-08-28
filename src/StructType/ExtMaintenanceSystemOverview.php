<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenanceSystemOverview StructType
 * @subpackage Structs
 */
class ExtMaintenanceSystemOverview extends AbstractStructBase
{
    /**
     * The groups
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtMaintenanceSystemOverviewGroup
     */
    public $groups;
    /**
     * The periods
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtMaintenanceSystemOverviewPeriod
     */
    public $periods;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The systemDescription
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $systemDescription;
    /**
     * Constructor method for ExtMaintenanceSystemOverview
     * @uses ExtMaintenanceSystemOverview::setGroups()
     * @uses ExtMaintenanceSystemOverview::setPeriods()
     * @uses ExtMaintenanceSystemOverview::setStatus()
     * @uses ExtMaintenanceSystemOverview::setSystemDescription()
     * @param \ArrayType\ArrayOfExtMaintenanceSystemOverviewGroup $groups
     * @param \ArrayType\ArrayOfExtMaintenanceSystemOverviewPeriod $periods
     * @param \StructType\ExtStatus $status
     * @param string $systemDescription
     */
    public function __construct(\ArrayType\ArrayOfExtMaintenanceSystemOverviewGroup $groups = null, \ArrayType\ArrayOfExtMaintenanceSystemOverviewPeriod $periods = null, \StructType\ExtStatus $status = null, $systemDescription = null)
    {
        $this
            ->setGroups($groups)
            ->setPeriods($periods)
            ->setStatus($status)
            ->setSystemDescription($systemDescription);
    }
    /**
     * Get groups value
     * @return \ArrayType\ArrayOfExtMaintenanceSystemOverviewGroup|null
     */
    public function getGroups()
    {
        return $this->groups;
    }
    /**
     * Set groups value
     * @param \ArrayType\ArrayOfExtMaintenanceSystemOverviewGroup $groups
     * @return \StructType\ExtMaintenanceSystemOverview
     */
    public function setGroups(\ArrayType\ArrayOfExtMaintenanceSystemOverviewGroup $groups = null)
    {
        $this->groups = $groups;
        return $this;
    }
    /**
     * Get periods value
     * @return \ArrayType\ArrayOfExtMaintenanceSystemOverviewPeriod|null
     */
    public function getPeriods()
    {
        return $this->periods;
    }
    /**
     * Set periods value
     * @param \ArrayType\ArrayOfExtMaintenanceSystemOverviewPeriod $periods
     * @return \StructType\ExtMaintenanceSystemOverview
     */
    public function setPeriods(\ArrayType\ArrayOfExtMaintenanceSystemOverviewPeriod $periods = null)
    {
        $this->periods = $periods;
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
     * @return \StructType\ExtMaintenanceSystemOverview
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get systemDescription value
     * @return string|null
     */
    public function getSystemDescription()
    {
        return $this->systemDescription;
    }
    /**
     * Set systemDescription value
     * @param string $systemDescription
     * @return \StructType\ExtMaintenanceSystemOverview
     */
    public function setSystemDescription($systemDescription = null)
    {
        // validation for constraint: string
        if (!is_null($systemDescription) && !is_string($systemDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemDescription, true), gettype($systemDescription)), __LINE__);
        }
        $this->systemDescription = $systemDescription;
        return $this;
    }
}
