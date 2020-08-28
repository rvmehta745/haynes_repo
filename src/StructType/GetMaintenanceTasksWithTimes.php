<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksWithTimes StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksWithTimes extends AbstractStructBase
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
     * The carTypeId
     * @var int
     */
    public $carTypeId;
    /**
     * The systemId
     * @var int
     */
    public $systemId;
    /**
     * The periodId
     * @var int
     */
    public $periodId;
    /**
     * Constructor method for getMaintenanceTasksWithTimes
     * @uses GetMaintenanceTasksWithTimes::setVrid()
     * @uses GetMaintenanceTasksWithTimes::setDescriptionLanguage()
     * @uses GetMaintenanceTasksWithTimes::setCarTypeId()
     * @uses GetMaintenanceTasksWithTimes::setSystemId()
     * @uses GetMaintenanceTasksWithTimes::setPeriodId()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $systemId
     * @param int $periodId
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $systemId = null, $periodId = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setSystemId($systemId)
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
     * @return \StructType\GetMaintenanceTasksWithTimes
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
     * @return \StructType\GetMaintenanceTasksWithTimes
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
     * Get carTypeId value
     * @return int|null
     */
    public function getCarTypeId()
    {
        return $this->carTypeId;
    }
    /**
     * Set carTypeId value
     * @param int $carTypeId
     * @return \StructType\GetMaintenanceTasksWithTimes
     */
    public function setCarTypeId($carTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($carTypeId) && !(is_int($carTypeId) || ctype_digit($carTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($carTypeId, true), gettype($carTypeId)), __LINE__);
        }
        $this->carTypeId = $carTypeId;
        return $this;
    }
    /**
     * Get systemId value
     * @return int|null
     */
    public function getSystemId()
    {
        return $this->systemId;
    }
    /**
     * Set systemId value
     * @param int $systemId
     * @return \StructType\GetMaintenanceTasksWithTimes
     */
    public function setSystemId($systemId = null)
    {
        // validation for constraint: int
        if (!is_null($systemId) && !(is_int($systemId) || ctype_digit($systemId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($systemId, true), gettype($systemId)), __LINE__);
        }
        $this->systemId = $systemId;
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
     * @return \StructType\GetMaintenanceTasksWithTimes
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
