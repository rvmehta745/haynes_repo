<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTimingBeltMaintenanceTasksV5 StructType
 * @subpackage Structs
 */
class GetTimingBeltMaintenanceTasksV5 extends AbstractStructBase
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
     * The repairtimesTypeId
     * @var int
     */
    public $repairtimesTypeId;
    /**
     * The rtTypeCategory
     * @var string
     */
    public $rtTypeCategory;
    /**
     * The systemId
     * @var int
     */
    public $systemId;
    /**
     * The includeServiceTimes
     * @var bool
     */
    public $includeServiceTimes;
    /**
     * Constructor method for getTimingBeltMaintenanceTasksV5
     * @uses GetTimingBeltMaintenanceTasksV5::setVrid()
     * @uses GetTimingBeltMaintenanceTasksV5::setDescriptionLanguage()
     * @uses GetTimingBeltMaintenanceTasksV5::setCarTypeId()
     * @uses GetTimingBeltMaintenanceTasksV5::setRepairtimesTypeId()
     * @uses GetTimingBeltMaintenanceTasksV5::setRtTypeCategory()
     * @uses GetTimingBeltMaintenanceTasksV5::setSystemId()
     * @uses GetTimingBeltMaintenanceTasksV5::setIncludeServiceTimes()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $repairtimesTypeId
     * @param string $rtTypeCategory
     * @param int $systemId
     * @param bool $includeServiceTimes
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $repairtimesTypeId = null, $rtTypeCategory = null, $systemId = null, $includeServiceTimes = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setRepairtimesTypeId($repairtimesTypeId)
            ->setRtTypeCategory($rtTypeCategory)
            ->setSystemId($systemId)
            ->setIncludeServiceTimes($includeServiceTimes);
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
     * @return \StructType\GetTimingBeltMaintenanceTasksV5
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
     * @return \StructType\GetTimingBeltMaintenanceTasksV5
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
     * @return \StructType\GetTimingBeltMaintenanceTasksV5
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
     * @return \StructType\GetTimingBeltMaintenanceTasksV5
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
     * Get rtTypeCategory value
     * @return string|null
     */
    public function getRtTypeCategory()
    {
        return $this->rtTypeCategory;
    }
    /**
     * Set rtTypeCategory value
     * @param string $rtTypeCategory
     * @return \StructType\GetTimingBeltMaintenanceTasksV5
     */
    public function setRtTypeCategory($rtTypeCategory = null)
    {
        // validation for constraint: string
        if (!is_null($rtTypeCategory) && !is_string($rtTypeCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rtTypeCategory, true), gettype($rtTypeCategory)), __LINE__);
        }
        $this->rtTypeCategory = $rtTypeCategory;
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
     * @return \StructType\GetTimingBeltMaintenanceTasksV5
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
     * Get includeServiceTimes value
     * @return bool|null
     */
    public function getIncludeServiceTimes()
    {
        return $this->includeServiceTimes;
    }
    /**
     * Set includeServiceTimes value
     * @param bool $includeServiceTimes
     * @return \StructType\GetTimingBeltMaintenanceTasksV5
     */
    public function setIncludeServiceTimes($includeServiceTimes = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeServiceTimes) && !is_bool($includeServiceTimes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeServiceTimes, true), gettype($includeServiceTimes)), __LINE__);
        }
        $this->includeServiceTimes = $includeServiceTimes;
        return $this;
    }
}
