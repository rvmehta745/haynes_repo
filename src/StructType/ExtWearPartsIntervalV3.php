<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtWearPartsIntervalV3 StructType
 * @subpackage Structs
 */
class ExtWearPartsIntervalV3 extends AbstractStructBase
{
    /**
     * The additionalTime
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $additionalTime;
    /**
     * The article
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtGeneralArticle
     */
    public $article;
    /**
     * The generalCriterias
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtCriteriaGroup
     */
    public $generalCriterias;
    /**
     * The interval
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $interval;
    /**
     * The repairNodes
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimeNodeV3
     */
    public $repairNodes;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtWearPartsIntervalV3
     * @uses ExtWearPartsIntervalV3::setAdditionalTime()
     * @uses ExtWearPartsIntervalV3::setArticle()
     * @uses ExtWearPartsIntervalV3::setGeneralCriterias()
     * @uses ExtWearPartsIntervalV3::setInterval()
     * @uses ExtWearPartsIntervalV3::setRepairNodes()
     * @uses ExtWearPartsIntervalV3::setStatus()
     * @param int $additionalTime
     * @param \StructType\ExtGeneralArticle $article
     * @param \ArrayType\ArrayOfExtCriteriaGroup $generalCriterias
     * @param string $interval
     * @param \ArrayType\ArrayOfExtRepairtimeNodeV3 $repairNodes
     * @param \StructType\ExtStatus $status
     */
    public function __construct($additionalTime = null, \StructType\ExtGeneralArticle $article = null, \ArrayType\ArrayOfExtCriteriaGroup $generalCriterias = null, $interval = null, \ArrayType\ArrayOfExtRepairtimeNodeV3 $repairNodes = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setAdditionalTime($additionalTime)
            ->setArticle($article)
            ->setGeneralCriterias($generalCriterias)
            ->setInterval($interval)
            ->setRepairNodes($repairNodes)
            ->setStatus($status);
    }
    /**
     * Get additionalTime value
     * @return int|null
     */
    public function getAdditionalTime()
    {
        return $this->additionalTime;
    }
    /**
     * Set additionalTime value
     * @param int $additionalTime
     * @return \StructType\ExtWearPartsIntervalV3
     */
    public function setAdditionalTime($additionalTime = null)
    {
        // validation for constraint: int
        if (!is_null($additionalTime) && !(is_int($additionalTime) || ctype_digit($additionalTime))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($additionalTime, true), gettype($additionalTime)), __LINE__);
        }
        $this->additionalTime = $additionalTime;
        return $this;
    }
    /**
     * Get article value
     * @return \StructType\ExtGeneralArticle|null
     */
    public function getArticle()
    {
        return $this->article;
    }
    /**
     * Set article value
     * @param \StructType\ExtGeneralArticle $article
     * @return \StructType\ExtWearPartsIntervalV3
     */
    public function setArticle(\StructType\ExtGeneralArticle $article = null)
    {
        $this->article = $article;
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
     * @return \StructType\ExtWearPartsIntervalV3
     */
    public function setGeneralCriterias(\ArrayType\ArrayOfExtCriteriaGroup $generalCriterias = null)
    {
        $this->generalCriterias = $generalCriterias;
        return $this;
    }
    /**
     * Get interval value
     * @return string|null
     */
    public function getInterval()
    {
        return $this->interval;
    }
    /**
     * Set interval value
     * @param string $interval
     * @return \StructType\ExtWearPartsIntervalV3
     */
    public function setInterval($interval = null)
    {
        // validation for constraint: string
        if (!is_null($interval) && !is_string($interval)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($interval, true), gettype($interval)), __LINE__);
        }
        $this->interval = $interval;
        return $this;
    }
    /**
     * Get repairNodes value
     * @return \ArrayType\ArrayOfExtRepairtimeNodeV3|null
     */
    public function getRepairNodes()
    {
        return $this->repairNodes;
    }
    /**
     * Set repairNodes value
     * @param \ArrayType\ArrayOfExtRepairtimeNodeV3 $repairNodes
     * @return \StructType\ExtWearPartsIntervalV3
     */
    public function setRepairNodes(\ArrayType\ArrayOfExtRepairtimeNodeV3 $repairNodes = null)
    {
        $this->repairNodes = $repairNodes;
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
     * @return \StructType\ExtWearPartsIntervalV3
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
