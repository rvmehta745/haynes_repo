<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenanceTask StructType
 * @subpackage Structs
 */
class ExtMaintenanceTask extends AbstractStructBase
{
    /**
     * The followUpRepairs
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimeNode
     */
    public $followUpRepairs;
    /**
     * The genArtNumbers
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_int
     */
    public $genArtNumbers;
    /**
     * The longDescriptions
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_string
     */
    public $longDescriptions;
    /**
     * The mandatoryReplacement
     * @var bool
     */
    public $mandatoryReplacement;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The order
     * @var int
     */
    public $order;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $remark;
    /**
     * The smartLinks
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtSmartLink
     */
    public $smartLinks;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The subTasks
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtMaintenanceTask
     */
    public $subTasks;
    /**
     * The time
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $time;
    /**
     * Constructor method for ExtMaintenanceTask
     * @uses ExtMaintenanceTask::setFollowUpRepairs()
     * @uses ExtMaintenanceTask::setGenArtNumbers()
     * @uses ExtMaintenanceTask::setLongDescriptions()
     * @uses ExtMaintenanceTask::setMandatoryReplacement()
     * @uses ExtMaintenanceTask::setName()
     * @uses ExtMaintenanceTask::setOrder()
     * @uses ExtMaintenanceTask::setRemark()
     * @uses ExtMaintenanceTask::setSmartLinks()
     * @uses ExtMaintenanceTask::setStatus()
     * @uses ExtMaintenanceTask::setSubTasks()
     * @uses ExtMaintenanceTask::setTime()
     * @param \ArrayType\ArrayOfExtRepairtimeNode $followUpRepairs
     * @param \ArrayType\ArrayOf_xsd_int $genArtNumbers
     * @param \ArrayType\ArrayOf_xsd_string $longDescriptions
     * @param bool $mandatoryReplacement
     * @param string $name
     * @param int $order
     * @param string $remark
     * @param \ArrayType\ArrayOfExtSmartLink $smartLinks
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtMaintenanceTask $subTasks
     * @param int $time
     */
    public function __construct(\ArrayType\ArrayOfExtRepairtimeNode $followUpRepairs = null, \ArrayType\ArrayOf_xsd_int $genArtNumbers = null, \ArrayType\ArrayOf_xsd_string $longDescriptions = null, $mandatoryReplacement = null, $name = null, $order = null, $remark = null, \ArrayType\ArrayOfExtSmartLink $smartLinks = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtMaintenanceTask $subTasks = null, $time = null)
    {
        $this
            ->setFollowUpRepairs($followUpRepairs)
            ->setGenArtNumbers($genArtNumbers)
            ->setLongDescriptions($longDescriptions)
            ->setMandatoryReplacement($mandatoryReplacement)
            ->setName($name)
            ->setOrder($order)
            ->setRemark($remark)
            ->setSmartLinks($smartLinks)
            ->setStatus($status)
            ->setSubTasks($subTasks)
            ->setTime($time);
    }
    /**
     * Get followUpRepairs value
     * @return \ArrayType\ArrayOfExtRepairtimeNode|null
     */
    public function getFollowUpRepairs()
    {
        return $this->followUpRepairs;
    }
    /**
     * Set followUpRepairs value
     * @param \ArrayType\ArrayOfExtRepairtimeNode $followUpRepairs
     * @return \StructType\ExtMaintenanceTask
     */
    public function setFollowUpRepairs(\ArrayType\ArrayOfExtRepairtimeNode $followUpRepairs = null)
    {
        $this->followUpRepairs = $followUpRepairs;
        return $this;
    }
    /**
     * Get genArtNumbers value
     * @return \ArrayType\ArrayOf_xsd_int|null
     */
    public function getGenArtNumbers()
    {
        return $this->genArtNumbers;
    }
    /**
     * Set genArtNumbers value
     * @param \ArrayType\ArrayOf_xsd_int $genArtNumbers
     * @return \StructType\ExtMaintenanceTask
     */
    public function setGenArtNumbers(\ArrayType\ArrayOf_xsd_int $genArtNumbers = null)
    {
        $this->genArtNumbers = $genArtNumbers;
        return $this;
    }
    /**
     * Get longDescriptions value
     * @return \ArrayType\ArrayOf_xsd_string|null
     */
    public function getLongDescriptions()
    {
        return $this->longDescriptions;
    }
    /**
     * Set longDescriptions value
     * @param \ArrayType\ArrayOf_xsd_string $longDescriptions
     * @return \StructType\ExtMaintenanceTask
     */
    public function setLongDescriptions(\ArrayType\ArrayOf_xsd_string $longDescriptions = null)
    {
        $this->longDescriptions = $longDescriptions;
        return $this;
    }
    /**
     * Get mandatoryReplacement value
     * @return bool|null
     */
    public function getMandatoryReplacement()
    {
        return $this->mandatoryReplacement;
    }
    /**
     * Set mandatoryReplacement value
     * @param bool $mandatoryReplacement
     * @return \StructType\ExtMaintenanceTask
     */
    public function setMandatoryReplacement($mandatoryReplacement = null)
    {
        // validation for constraint: boolean
        if (!is_null($mandatoryReplacement) && !is_bool($mandatoryReplacement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mandatoryReplacement, true), gettype($mandatoryReplacement)), __LINE__);
        }
        $this->mandatoryReplacement = $mandatoryReplacement;
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
     * @return \StructType\ExtMaintenanceTask
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
     * Get order value
     * @return int|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param int $order
     * @return \StructType\ExtMaintenanceTask
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->order = $order;
        return $this;
    }
    /**
     * Get remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \StructType\ExtMaintenanceTask
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        return $this;
    }
    /**
     * Get smartLinks value
     * @return \ArrayType\ArrayOfExtSmartLink|null
     */
    public function getSmartLinks()
    {
        return $this->smartLinks;
    }
    /**
     * Set smartLinks value
     * @param \ArrayType\ArrayOfExtSmartLink $smartLinks
     * @return \StructType\ExtMaintenanceTask
     */
    public function setSmartLinks(\ArrayType\ArrayOfExtSmartLink $smartLinks = null)
    {
        $this->smartLinks = $smartLinks;
        return $this;
    }
    /**
     * Get status value
     * @return \StructType\ExtStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \StructType\ExtStatus $status
     * @return \StructType\ExtMaintenanceTask
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get subTasks value
     * @return \ArrayType\ArrayOfExtMaintenanceTask|null
     */
    public function getSubTasks()
    {
        return $this->subTasks;
    }
    /**
     * Set subTasks value
     * @param \ArrayType\ArrayOfExtMaintenanceTask $subTasks
     * @return \StructType\ExtMaintenanceTask
     */
    public function setSubTasks(\ArrayType\ArrayOfExtMaintenanceTask $subTasks = null)
    {
        $this->subTasks = $subTasks;
        return $this;
    }
    /**
     * Get time value
     * @return int|null
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param int $time
     * @return \StructType\ExtMaintenanceTask
     */
    public function setTime($time = null)
    {
        // validation for constraint: int
        if (!is_null($time) && !(is_int($time) || ctype_digit($time))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->time = $time;
        return $this;
    }
}
