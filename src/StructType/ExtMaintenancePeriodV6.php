<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenancePeriodV6 StructType
 * @subpackage Structs
 */
class ExtMaintenancePeriodV6 extends AbstractStructBase
{
    /**
     * The combinable
     * @var bool
     */
    public $combinable;
    /**
     * The generalCriterias
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtCriteriaGroup
     */
    public $generalCriterias;
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The periodSentenceId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $periodSentenceId;
    /**
     * The times
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtTime
     */
    public $times;
    /**
     * Constructor method for ExtMaintenancePeriodV6
     * @uses ExtMaintenancePeriodV6::setCombinable()
     * @uses ExtMaintenancePeriodV6::setGeneralCriterias()
     * @uses ExtMaintenancePeriodV6::setId()
     * @uses ExtMaintenancePeriodV6::setName()
     * @uses ExtMaintenancePeriodV6::setPeriodSentenceId()
     * @uses ExtMaintenancePeriodV6::setTimes()
     * @param bool $combinable
     * @param \ArrayType\ArrayOfExtCriteriaGroup $generalCriterias
     * @param int $id
     * @param string $name
     * @param int $periodSentenceId
     * @param \ArrayType\ArrayOfExtTime $times
     */
    public function __construct($combinable = null, \ArrayType\ArrayOfExtCriteriaGroup $generalCriterias = null, $id = null, $name = null, $periodSentenceId = null, \ArrayType\ArrayOfExtTime $times = null)
    {
        $this
            ->setCombinable($combinable)
            ->setGeneralCriterias($generalCriterias)
            ->setId($id)
            ->setName($name)
            ->setPeriodSentenceId($periodSentenceId)
            ->setTimes($times);
    }
    /**
     * Get combinable value
     * @return bool|null
     */
    public function getCombinable()
    {
        return $this->combinable;
    }
    /**
     * Set combinable value
     * @param bool $combinable
     * @return \StructType\ExtMaintenancePeriodV6
     */
    public function setCombinable($combinable = null)
    {
        // validation for constraint: boolean
        if (!is_null($combinable) && !is_bool($combinable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($combinable, true), gettype($combinable)), __LINE__);
        }
        $this->combinable = $combinable;
        return $this;
    }
    /**
     * Get generalCriterias value
     * @return \ArrayType\ArrayOfExtCriteriaGroup|null
     */
    public function getGeneralCriterias()
    {
        return $this->generalCriterias;
    }
    /**
     * Set generalCriterias value
     * @param \ArrayType\ArrayOfExtCriteriaGroup $generalCriterias
     * @return \StructType\ExtMaintenancePeriodV6
     */
    public function setGeneralCriterias(\ArrayType\ArrayOfExtCriteriaGroup $generalCriterias = null)
    {
        $this->generalCriterias = $generalCriterias;
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \StructType\ExtMaintenancePeriodV6
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\ExtMaintenancePeriodV6
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get periodSentenceId value
     * @return int|null
     */
    public function getPeriodSentenceId()
    {
        return $this->periodSentenceId;
    }
    /**
     * Set periodSentenceId value
     * @param int $periodSentenceId
     * @return \StructType\ExtMaintenancePeriodV6
     */
    public function setPeriodSentenceId($periodSentenceId = null)
    {
        // validation for constraint: int
        if (!is_null($periodSentenceId) && !(is_int($periodSentenceId) || ctype_digit($periodSentenceId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($periodSentenceId, true), gettype($periodSentenceId)), __LINE__);
        }
        $this->periodSentenceId = $periodSentenceId;
        return $this;
    }
    /**
     * Get times value
     * @return \ArrayType\ArrayOfExtTime|null
     */
    public function getTimes()
    {
        return $this->times;
    }
    /**
     * Set times value
     * @param \ArrayType\ArrayOfExtTime $times
     * @return \StructType\ExtMaintenancePeriodV6
     */
    public function setTimes(\ArrayType\ArrayOfExtTime $times = null)
    {
        $this->times = $times;
        return $this;
    }
}
