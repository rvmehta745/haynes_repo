<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenanceSystemOverviewPeriod StructType
 * @subpackage Structs
 */
class ExtMaintenanceSystemOverviewPeriod extends AbstractStructBase
{
    /**
     * The periodDescription
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $periodDescription;
    /**
     * The periodId
     * @var int
     */
    public $periodId;
    /**
     * Constructor method for ExtMaintenanceSystemOverviewPeriod
     * @uses ExtMaintenanceSystemOverviewPeriod::setPeriodDescription()
     * @uses ExtMaintenanceSystemOverviewPeriod::setPeriodId()
     * @param string $periodDescription
     * @param int $periodId
     */
    public function __construct($periodDescription = null, $periodId = null)
    {
        $this
            ->setPeriodDescription($periodDescription)
            ->setPeriodId($periodId);
    }
    /**
     * Get periodDescription value
     * @return string|null
     */
    public function getPeriodDescription()
    {
        return $this->periodDescription;
    }
    /**
     * Set periodDescription value
     * @param string $periodDescription
     * @return \StructType\ExtMaintenanceSystemOverviewPeriod
     */
    public function setPeriodDescription($periodDescription = null)
    {
        // validation for constraint: string
        if (!is_null($periodDescription) && !is_string($periodDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($periodDescription, true), gettype($periodDescription)), __LINE__);
        }
        $this->periodDescription = $periodDescription;
        return $this;
    }
    /**
     * Get periodId value
     * @return int|null
     */
    public function getPeriodId()
    {
        return $this->periodId;
    }
    /**
     * Set periodId value
     * @param int $periodId
     * @return \StructType\ExtMaintenanceSystemOverviewPeriod
     */
    public function setPeriodId($periodId = null)
    {
        // validation for constraint: int
        if (!is_null($periodId) && !(is_int($periodId) || ctype_digit($periodId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($periodId, true), gettype($periodId)), __LINE__);
        }
        $this->periodId = $periodId;
        return $this;
    }
}
