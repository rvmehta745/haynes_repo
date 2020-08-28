<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenanceSystemOverviewPeriodV2 StructType
 * @subpackage Structs
 */
class ExtMaintenanceSystemOverviewPeriodV2 extends AbstractStructBase
{
    /**
     * The columnId
     * @var int
     */
    public $columnId;
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
     * Constructor method for ExtMaintenanceSystemOverviewPeriodV2
     * @uses ExtMaintenanceSystemOverviewPeriodV2::setColumnId()
     * @uses ExtMaintenanceSystemOverviewPeriodV2::setPeriodDescription()
     * @uses ExtMaintenanceSystemOverviewPeriodV2::setPeriodId()
     * @param int $columnId
     * @param string $periodDescription
     * @param int $periodId
     */
    public function __construct($columnId = null, $periodDescription = null, $periodId = null)
    {
        $this
            ->setColumnId($columnId)
            ->setPeriodDescription($periodDescription)
            ->setPeriodId($periodId);
    }
    /**
     * Get columnId value
     * @return int|null
     */
    public function getColumnId()
    {
        return $this->columnId;
    }
    /**
     * Set columnId value
     * @param int $columnId
     * @return \StructType\ExtMaintenanceSystemOverviewPeriodV2
     */
    public function setColumnId($columnId = null)
    {
        // validation for constraint: int
        if (!is_null($columnId) && !(is_int($columnId) || ctype_digit($columnId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($columnId, true), gettype($columnId)), __LINE__);
        }
        $this->columnId = $columnId;
        return $this;
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
     * @return \StructType\ExtMaintenanceSystemOverviewPeriodV2
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
     * @return \StructType\ExtMaintenanceSystemOverviewPeriodV2
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
