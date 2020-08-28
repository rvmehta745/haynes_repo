<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtSubjects StructType
 * @subpackage Structs
 */
class ExtSubjects extends AbstractStructBase
{
    /**
     * The enginemanagement
     * @var bool
     */
    public $enginemanagement;
    /**
     * The faultcodes
     * @var bool
     */
    public $faultcodes;
    /**
     * The fusesandrelays
     * @var bool
     */
    public $fusesandrelays;
    /**
     * The repairmanuals
     * @var bool
     */
    public $repairmanuals;
    /**
     * The wiringdiagrams
     * @var bool
     */
    public $wiringdiagrams;
    /**
     * Constructor method for ExtSubjects
     * @uses ExtSubjects::setEnginemanagement()
     * @uses ExtSubjects::setFaultcodes()
     * @uses ExtSubjects::setFusesandrelays()
     * @uses ExtSubjects::setRepairmanuals()
     * @uses ExtSubjects::setWiringdiagrams()
     * @param bool $enginemanagement
     * @param bool $faultcodes
     * @param bool $fusesandrelays
     * @param bool $repairmanuals
     * @param bool $wiringdiagrams
     */
    public function __construct($enginemanagement = null, $faultcodes = null, $fusesandrelays = null, $repairmanuals = null, $wiringdiagrams = null)
    {
        $this
            ->setEnginemanagement($enginemanagement)
            ->setFaultcodes($faultcodes)
            ->setFusesandrelays($fusesandrelays)
            ->setRepairmanuals($repairmanuals)
            ->setWiringdiagrams($wiringdiagrams);
    }
    /**
     * Get enginemanagement value
     * @return bool|null
     */
    public function getEnginemanagement()
    {
        return $this->enginemanagement;
    }
    /**
     * Set enginemanagement value
     * @param bool $enginemanagement
     * @return \StructType\ExtSubjects
     */
    public function setEnginemanagement($enginemanagement = null)
    {
        // validation for constraint: boolean
        if (!is_null($enginemanagement) && !is_bool($enginemanagement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enginemanagement, true), gettype($enginemanagement)), __LINE__);
        }
        $this->enginemanagement = $enginemanagement;
        return $this;
    }
    /**
     * Get faultcodes value
     * @return bool|null
     */
    public function getFaultcodes()
    {
        return $this->faultcodes;
    }
    /**
     * Set faultcodes value
     * @param bool $faultcodes
     * @return \StructType\ExtSubjects
     */
    public function setFaultcodes($faultcodes = null)
    {
        // validation for constraint: boolean
        if (!is_null($faultcodes) && !is_bool($faultcodes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($faultcodes, true), gettype($faultcodes)), __LINE__);
        }
        $this->faultcodes = $faultcodes;
        return $this;
    }
    /**
     * Get fusesandrelays value
     * @return bool|null
     */
    public function getFusesandrelays()
    {
        return $this->fusesandrelays;
    }
    /**
     * Set fusesandrelays value
     * @param bool $fusesandrelays
     * @return \StructType\ExtSubjects
     */
    public function setFusesandrelays($fusesandrelays = null)
    {
        // validation for constraint: boolean
        if (!is_null($fusesandrelays) && !is_bool($fusesandrelays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fusesandrelays, true), gettype($fusesandrelays)), __LINE__);
        }
        $this->fusesandrelays = $fusesandrelays;
        return $this;
    }
    /**
     * Get repairmanuals value
     * @return bool|null
     */
    public function getRepairmanuals()
    {
        return $this->repairmanuals;
    }
    /**
     * Set repairmanuals value
     * @param bool $repairmanuals
     * @return \StructType\ExtSubjects
     */
    public function setRepairmanuals($repairmanuals = null)
    {
        // validation for constraint: boolean
        if (!is_null($repairmanuals) && !is_bool($repairmanuals)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($repairmanuals, true), gettype($repairmanuals)), __LINE__);
        }
        $this->repairmanuals = $repairmanuals;
        return $this;
    }
    /**
     * Get wiringdiagrams value
     * @return bool|null
     */
    public function getWiringdiagrams()
    {
        return $this->wiringdiagrams;
    }
    /**
     * Set wiringdiagrams value
     * @param bool $wiringdiagrams
     * @return \StructType\ExtSubjects
     */
    public function setWiringdiagrams($wiringdiagrams = null)
    {
        // validation for constraint: boolean
        if (!is_null($wiringdiagrams) && !is_bool($wiringdiagrams)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wiringdiagrams, true), gettype($wiringdiagrams)), __LINE__);
        }
        $this->wiringdiagrams = $wiringdiagrams;
        return $this;
    }
}
