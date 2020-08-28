<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtWearPartsInterval StructType
 * @subpackage Structs
 */
class ExtWearPartsInterval extends AbstractStructBase
{
    /**
     * The article
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtGeneralArticle
     */
    public $article;
    /**
     * The interval
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $interval;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtWearPartsInterval
     * @uses ExtWearPartsInterval::setArticle()
     * @uses ExtWearPartsInterval::setInterval()
     * @uses ExtWearPartsInterval::setStatus()
     * @param \StructType\ExtGeneralArticle $article
     * @param string $interval
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\StructType\ExtGeneralArticle $article = null, $interval = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setArticle($article)
            ->setInterval($interval)
            ->setStatus($status);
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
     * @return \StructType\ExtWearPartsInterval
     */
    public function setArticle(\StructType\ExtGeneralArticle $article = null)
    {
        $this->article = $article;
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
     * @return \StructType\ExtWearPartsInterval
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
     * @return \StructType\ExtWearPartsInterval
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
