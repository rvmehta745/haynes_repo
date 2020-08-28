<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtCarSubjects StructType
 * @subpackage Structs
 */
class ExtCarSubjects extends AbstractStructBase
{
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
     * The shownew
     * @var bool
     */
    public $shownew;
    /**
     * The showoldabs
     * @var bool
     */
    public $showoldabs;
    /**
     * The showoldmm
     * @var bool
     */
    public $showoldmm;
    /**
     * The wiringdiagrams
     * @var bool
     */
    public $wiringdiagrams;
    /**
     * Constructor method for ExtCarSubjects
     * @uses ExtCarSubjects::setFaultcodes()
     * @uses ExtCarSubjects::setFusesandrelays()
     * @uses ExtCarSubjects::setRepairmanuals()
     * @uses ExtCarSubjects::setShownew()
     * @uses ExtCarSubjects::setShowoldabs()
     * @uses ExtCarSubjects::setShowoldmm()
     * @uses ExtCarSubjects::setWiringdiagrams()
     * @param bool $faultcodes
     * @param bool $fusesandrelays
     * @param bool $repairmanuals
     * @param bool $shownew
     * @param bool $showoldabs
     * @param bool $showoldmm
     * @param bool $wiringdiagrams
     */
    public function __construct($faultcodes = null, $fusesandrelays = null, $repairmanuals = null, $shownew = null, $showoldabs = null, $showoldmm = null, $wiringdiagrams = null)
    {
        $this
            ->setFaultcodes($faultcodes)
            ->setFusesandrelays($fusesandrelays)
            ->setRepairmanuals($repairmanuals)
            ->setShownew($shownew)
            ->setShowoldabs($showoldabs)
            ->setShowoldmm($showoldmm)
            ->setWiringdiagrams($wiringdiagrams);
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
     * @return \StructType\ExtCarSubjects
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
     * @return \StructType\ExtCarSubjects
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
     * @return \StructType\ExtCarSubjects
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
     * Get shownew value
     * @return bool|null
     */
    public function getShownew()
    {
        return $this->shownew;
    }
    /**
     * Set shownew value
     * @param bool $shownew
     * @return \StructType\ExtCarSubjects
     */
    public function setShownew($shownew = null)
    {
        // validation for constraint: boolean
        if (!is_null($shownew) && !is_bool($shownew)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shownew, true), gettype($shownew)), __LINE__);
        }
        $this->shownew = $shownew;
        return $this;
    }
    /**
     * Get showoldabs value
     * @return bool|null
     */
    public function getShowoldabs()
    {
        return $this->showoldabs;
    }
    /**
     * Set showoldabs value
     * @param bool $showoldabs
     * @return \StructType\ExtCarSubjects
     */
    public function setShowoldabs($showoldabs = null)
    {
        // validation for constraint: boolean
        if (!is_null($showoldabs) && !is_bool($showoldabs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showoldabs, true), gettype($showoldabs)), __LINE__);
        }
        $this->showoldabs = $showoldabs;
        return $this;
    }
    /**
     * Get showoldmm value
     * @return bool|null
     */
    public function getShowoldmm()
    {
        return $this->showoldmm;
    }
    /**
     * Set showoldmm value
     * @param bool $showoldmm
     * @return \StructType\ExtCarSubjects
     */
    public function setShowoldmm($showoldmm = null)
    {
        // validation for constraint: boolean
        if (!is_null($showoldmm) && !is_bool($showoldmm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showoldmm, true), gettype($showoldmm)), __LINE__);
        }
        $this->showoldmm = $showoldmm;
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
     * @return \StructType\ExtCarSubjects
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
