<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtStoryGeneralArticles StructType
 * @subpackage Structs
 */
class ExtStoryGeneralArticles extends AbstractStructBase
{
    /**
     * The generalArticles
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtGeneralArticle
     */
    public $generalArticles;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtStoryGeneralArticles
     * @uses ExtStoryGeneralArticles::setGeneralArticles()
     * @uses ExtStoryGeneralArticles::setStatus()
     * @param \ArrayType\ArrayOfExtGeneralArticle $generalArticles
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOfExtGeneralArticle $generalArticles = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setGeneralArticles($generalArticles)
            ->setStatus($status);
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
     * @return \StructType\ExtStoryGeneralArticles
     */
    public function setGeneralArticles(\ArrayType\ArrayOfExtGeneralArticle $generalArticles = null)
    {
        $this->generalArticles = $generalArticles;
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
     * @return \StructType\ExtStoryGeneralArticles
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
