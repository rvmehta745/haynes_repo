<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksV2 StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksV2 extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The descriptionLanguage
     * @var string
     */
    public $descriptionLanguage;
    /**
     * The repairtimesTypeId
     * @var int
     */
    public $repairtimesTypeId;
    /**
     * The periodId
     * @var int
     */
    public $periodId;
    /**
     * Constructor method for getMaintenanceTasksV2
     * @uses GetMaintenanceTasksV2::setVrid()
     * @uses GetMaintenanceTasksV2::setDescriptionLanguage()
     * @uses GetMaintenanceTasksV2::setRepairtimesTypeId()
     * @uses GetMaintenanceTasksV2::setPeriodId()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $repairtimesTypeId
     * @param int $periodId
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $repairtimesTypeId = null, $periodId = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setRepairtimesTypeId($repairtimesTypeId)
            ->setPeriodId($periodId);
    }
    /**
     * Get vrid value
     * @return string|null
     */
    public function getVrid()
    {
        return $this->vrid;
    }
    /**
     * Set vrid value
     * @param string $vrid
     * @return \StructType\GetMaintenanceTasksV2
     */
    public function setVrid($vrid = null)
    {
        // validation for constraint: string
        if (!is_null($vrid) && !is_string($vrid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vrid, true), gettype($vrid)), __LINE__);
        }
        $this->vrid = $vrid;
        return $this;
    }
    /**
     * Get descriptionLanguage value
     * @return string|null
     */
    public function getDescriptionLanguage()
    {
        return $this->descriptionLanguage;
    }
    /**
     * Set descriptionLanguage value
     * @param string $descriptionLanguage
     * @return \StructType\GetMaintenanceTasksV2
     */
    public function setDescriptionLanguage($descriptionLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionLanguage) && !is_string($descriptionLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptionLanguage, true), gettype($descriptionLanguage)), __LINE__);
        }
        $this->descriptionLanguage = $descriptionLanguage;
        return $this;
    }
    /**
     * Get repairtimesTypeId value
     * @return int|null
     */
    public function getRepairtimesTypeId()
    {
        return $this->repairtimesTypeId;
    }
    /**
     * Set repairtimesTypeId value
     * @param int $repairtimesTypeId
     * @return \StructType\GetMaintenanceTasksV2
     */
    public function setRepairtimesTypeId($repairtimesTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($repairtimesTypeId) && !(is_int($repairtimesTypeId) || ctype_digit($repairtimesTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repairtimesTypeId, true), gettype($repairtimesTypeId)), __LINE__);
        }
        $this->repairtimesTypeId = $repairtimesTypeId;
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
     * @return \StructType\GetMaintenanceTasksV2
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
