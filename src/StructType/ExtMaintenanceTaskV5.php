<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenanceTaskV5 StructType
 * @subpackage Structs
 */
class ExtMaintenanceTaskV5 extends AbstractStructBase
{
    /**
     * The criteria
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtCriteria
     */
    public $criteria;
    /**
     * The descriptionId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $descriptionId;
    /**
     * The followUpRepairs
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimeNodeV2
     */
    public $followUpRepairs;
    /**
     * The generalArticles
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtGeneralArticle
     */
    public $generalArticles;
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
     * The repairTimesTaskId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $repairTimesTaskId;
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
     * @var \ArrayType\ArrayOfExtMaintenanceTaskV5
     */
    public $subTasks;
    /**
     * The times
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtTime
     */
    public $times;
    /**
     * Constructor method for ExtMaintenanceTaskV5
     * @uses ExtMaintenanceTaskV5::setCriteria()
     * @uses ExtMaintenanceTaskV5::setDescriptionId()
     * @uses ExtMaintenanceTaskV5::setFollowUpRepairs()
     * @uses ExtMaintenanceTaskV5::setGeneralArticles()
     * @uses ExtMaintenanceTaskV5::setLongDescriptions()
     * @uses ExtMaintenanceTaskV5::setMandatoryReplacement()
     * @uses ExtMaintenanceTaskV5::setName()
     * @uses ExtMaintenanceTaskV5::setOrder()
     * @uses ExtMaintenanceTaskV5::setRemark()
     * @uses ExtMaintenanceTaskV5::setRepairTimesTaskId()
     * @uses ExtMaintenanceTaskV5::setSmartLinks()
     * @uses ExtMaintenanceTaskV5::setStatus()
     * @uses ExtMaintenanceTaskV5::setSubTasks()
     * @uses ExtMaintenanceTaskV5::setTimes()
     * @param \ArrayType\ArrayOfExtCriteria $criteria
     * @param string $descriptionId
     * @param \ArrayType\ArrayOfExtRepairtimeNodeV2 $followUpRepairs
     * @param \ArrayType\ArrayOfExtGeneralArticle $generalArticles
     * @param \ArrayType\ArrayOf_xsd_string $longDescriptions
     * @param bool $mandatoryReplacement
     * @param string $name
     * @param int $order
     * @param string $remark
     * @param string $repairTimesTaskId
     * @param \ArrayType\ArrayOfExtSmartLink $smartLinks
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtMaintenanceTaskV5 $subTasks
     * @param \ArrayType\ArrayOfExtTime $times
     */
    public function __construct(\ArrayType\ArrayOfExtCriteria $criteria = null, $descriptionId = null, \ArrayType\ArrayOfExtRepairtimeNodeV2 $followUpRepairs = null, \ArrayType\ArrayOfExtGeneralArticle $generalArticles = null, \ArrayType\ArrayOf_xsd_string $longDescriptions = null, $mandatoryReplacement = null, $name = null, $order = null, $remark = null, $repairTimesTaskId = null, \ArrayType\ArrayOfExtSmartLink $smartLinks = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtMaintenanceTaskV5 $subTasks = null, \ArrayType\ArrayOfExtTime $times = null)
    {
        $this
            ->setCriteria($criteria)
            ->setDescriptionId($descriptionId)
            ->setFollowUpRepairs($followUpRepairs)
            ->setGeneralArticles($generalArticles)
            ->setLongDescriptions($longDescriptions)
            ->setMandatoryReplacement($mandatoryReplacement)
            ->setName($name)
            ->setOrder($order)
            ->setRemark($remark)
            ->setRepairTimesTaskId($repairTimesTaskId)
            ->setSmartLinks($smartLinks)
            ->setStatus($status)
            ->setSubTasks($subTasks)
            ->setTimes($times);
    }
    /**
     * Get criteria value
     * @return \ArrayType\ArrayOfExtCriteria|null
     */
    public function getCriteria()
    {
        return $this->criteria;
    }
    /**
     * Set criteria value
     * @param \ArrayType\ArrayOfExtCriteria $criteria
     * @return \StructType\ExtMaintenanceTaskV5
     */
    public function setCriteria(\ArrayType\ArrayOfExtCriteria $criteria = null)
    {
        $this->criteria = $criteria;
        return $this;
    }
    /**
     * Get descriptionId value
     * @return string|null
     */
    public function getDescriptionId()
    {
        return $this->descriptionId;
    }
    /**
     * Set descriptionId value
     * @param string $descriptionId
     * @return \StructType\ExtMaintenanceTaskV5
     */
    public function setDescriptionId($descriptionId = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionId) && !is_string($descriptionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptionId, true), gettype($descriptionId)), __LINE__);
        }
        $this->descriptionId = $descriptionId;
        return $this;
    }
    /**
     * Get followUpRepairs value
     * @return \ArrayType\ArrayOfExtRepairtimeNodeV2|null
     */
    public function getFollowUpRepairs()
    {
        return $this->followUpRepairs;
    }
    /**
     * Set followUpRepairs value
     * @param \ArrayType\ArrayOfExtRepairtimeNodeV2 $followUpRepairs
     * @return \StructType\ExtMaintenanceTaskV5
     */
    public function setFollowUpRepairs(\ArrayType\ArrayOfExtRepairtimeNodeV2 $followUpRepairs = null)
    {
        $this->followUpRepairs = $followUpRepairs;
        return $this;
    }
    /**
     * Get generalArticles value
     * @return \ArrayType\ArrayOfExtGeneralArticle|null
     */
    public function getGeneralArticles()
    {
        return $this->generalArticles;
    }
    /**
     * Set generalArticles value
     * @param \ArrayType\ArrayOfExtGeneralArticle $generalArticles
     * @return \StructType\ExtMaintenanceTaskV5
     */
    public function setGeneralArticles(\ArrayType\ArrayOfExtGeneralArticle $generalArticles = null)
    {
        $this->generalArticles = $generalArticles;
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
     * @return \StructType\ExtMaintenanceTaskV5
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
     * @return \StructType\ExtMaintenanceTaskV5
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
     * @return \StructType\ExtMaintenanceTaskV5
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
     * @return \StructType\ExtMaintenanceTaskV5
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
     * @return \StructType\ExtMaintenanceTaskV5
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
     * Get repairTimesTaskId value
     * @return string|null
     */
    public function getRepairTimesTaskId()
    {
        return $this->repairTimesTaskId;
    }
    /**
     * Set repairTimesTaskId value
     * @param string $repairTimesTaskId
     * @return \StructType\ExtMaintenanceTaskV5
     */
    public function setRepairTimesTaskId($repairTimesTaskId = null)
    {
        // validation for constraint: string
        if (!is_null($repairTimesTaskId) && !is_string($repairTimesTaskId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($repairTimesTaskId, true), gettype($repairTimesTaskId)), __LINE__);
        }
        $this->repairTimesTaskId = $repairTimesTaskId;
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
     * @return \StructType\ExtMaintenanceTaskV5
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
     * @return \StructType\ExtMaintenanceTaskV5
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get subTasks value
     * @return \ArrayType\ArrayOfExtMaintenanceTaskV5|null
     */
    public function getSubTasks()
    {
        return $this->subTasks;
    }
    /**
     * Set subTasks value
     * @param \ArrayType\ArrayOfExtMaintenanceTaskV5 $subTasks
     * @return \StructType\ExtMaintenanceTaskV5
     */
    public function setSubTasks(\ArrayType\ArrayOfExtMaintenanceTaskV5 $subTasks = null)
    {
        $this->subTasks = $subTasks;
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
     * @return \StructType\ExtMaintenanceTaskV5
     */
    public function setTimes(\ArrayType\ArrayOfExtTime $times = null)
    {
        $this->times = $times;
        return $this;
    }
}
