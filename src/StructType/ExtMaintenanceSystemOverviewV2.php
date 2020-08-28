<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenanceSystemOverviewV2 StructType
 * @subpackage Structs
 */
class ExtMaintenanceSystemOverviewV2 extends AbstractStructBase
{
    /**
     * The groups
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtMaintenanceSystemOverviewGroupV2
     */
    public $groups;
    /**
     * The periods
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtMaintenanceSystemOverviewPeriodV2
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
     * Constructor method for ExtMaintenanceSystemOverviewV2
     * @uses ExtMaintenanceSystemOverviewV2::setGroups()
     * @uses ExtMaintenanceSystemOverviewV2::setPeriods()
     * @uses ExtMaintenanceSystemOverviewV2::setStatus()
     * @uses ExtMaintenanceSystemOverviewV2::setSystemDescription()
     * @param \ArrayType\ArrayOfExtMaintenanceSystemOverviewGroupV2 $groups
     * @param \ArrayType\ArrayOfExtMaintenanceSystemOverviewPeriodV2 $periods
     * @param \StructType\ExtStatus $status
     * @param string $systemDescription
     */
    public function __construct(\ArrayType\ArrayOfExtMaintenanceSystemOverviewGroupV2 $groups = null, \ArrayType\ArrayOfExtMaintenanceSystemOverviewPeriodV2 $periods = null, \StructType\ExtStatus $status = null, $systemDescription = null)
    {
        $this
            ->setGroups($groups)
            ->setPeriods($periods)
            ->setStatus($status)
            ->setSystemDescription($systemDescription);
    }
    /**
     * Get groups value
     * @return \ArrayType\ArrayOfExtMaintenanceSystemOverviewGroupV2|null
     */
    public function getGroups()
    {
        return $this->groups;
    }
    /**
     * Set groups value
     * @param \ArrayType\ArrayOfExtMaintenanceSystemOverviewGroupV2 $groups
     * @return \StructType\ExtMaintenanceSystemOverviewV2
     */
    public function setGroups(\ArrayType\ArrayOfExtMaintenanceSystemOverviewGroupV2 $groups = null)
    {
        $this->groups = $groups;
        return $this;
    }
    /**
     * Get periods value
     * @return \ArrayType\ArrayOfExtMaintenanceSystemOverviewPeriodV2|null
     */
    public function getPeriods()
    {
        return $this->periods;
    }
    /**
     * Set periods value
     * @param \ArrayType\ArrayOfExtMaintenanceSystemOverviewPeriodV2 $periods
     * @return \StructType\ExtMaintenanceSystemOverviewV2
     */
    public function setPeriods(\ArrayType\ArrayOfExtMaintenanceSystemOverviewPeriodV2 $periods = null)
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
     * @return \StructType\ExtMaintenanceSystemOverviewV2
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
     * @return \StructType\ExtMaintenanceSystemOverviewV2
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
