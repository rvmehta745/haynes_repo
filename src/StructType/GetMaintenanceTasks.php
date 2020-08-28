<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasks StructType
 * @subpackage Structs
 */
class GetMaintenanceTasks extends AbstractStructBase
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
     * The periodId
     * @var int
     */
    public $periodId;
    /**
     * Constructor method for getMaintenanceTasks
     * @uses GetMaintenanceTasks::setVrid()
     * @uses GetMaintenanceTasks::setDescriptionLanguage()
     * @uses GetMaintenanceTasks::setPeriodId()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $periodId
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $periodId = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
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
     * @return \StructType\GetMaintenanceTasks
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
     * @return \StructType\GetMaintenanceTasks
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
     * @return \StructType\GetMaintenanceTasks
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
