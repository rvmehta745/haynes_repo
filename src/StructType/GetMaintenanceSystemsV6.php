<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceSystemsV6 StructType
 * @subpackage Structs
 */
class GetMaintenanceSystemsV6 extends AbstractStructBase
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
     * The useImperial
     * @var bool
     */
    public $useImperial;
    /**
     * The includeServiceTimes
     * @var bool
     */
    public $includeServiceTimes;
    /**
     * Constructor method for getMaintenanceSystemsV6
     * @uses GetMaintenanceSystemsV6::setVrid()
     * @uses GetMaintenanceSystemsV6::setDescriptionLanguage()
     * @uses GetMaintenanceSystemsV6::setCarTypeId()
     * @uses GetMaintenanceSystemsV6::setRepairtimesTypeId()
     * @uses GetMaintenanceSystemsV6::setRtTypeCategory()
     * @uses GetMaintenanceSystemsV6::setUseImperial()
     * @uses GetMaintenanceSystemsV6::setIncludeServiceTimes()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $repairtimesTypeId
     * @param string $rtTypeCategory
     * @param bool $useImperial
     * @param bool $includeServiceTimes
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $repairtimesTypeId = null, $rtTypeCategory = null, $useImperial = null, $includeServiceTimes = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setRepairtimesTypeId($repairtimesTypeId)
            ->setRtTypeCategory($rtTypeCategory)
            ->setUseImperial($useImperial)
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
     * @return \StructType\GetMaintenanceSystemsV6
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
     * @return \StructType\GetMaintenanceSystemsV6
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
     * @return \StructType\GetMaintenanceSystemsV6
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
     * @return \StructType\GetMaintenanceSystemsV6
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
     * @return \StructType\GetMaintenanceSystemsV6
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
     * Get useImperial value
     * @return bool|null
     */
    public function getUseImperial()
    {
        return $this->useImperial;
    }
    /**
     * Set useImperial value
     * @param bool $useImperial
     * @return \StructType\GetMaintenanceSystemsV6
     */
    public function setUseImperial($useImperial = null)
    {
        // validation for constraint: boolean
        if (!is_null($useImperial) && !is_bool($useImperial)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useImperial, true), gettype($useImperial)), __LINE__);
        }
        $this->useImperial = $useImperial;
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
     * @return \StructType\GetMaintenanceSystemsV6
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
