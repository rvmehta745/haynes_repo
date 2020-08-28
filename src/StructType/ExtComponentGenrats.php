<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtComponentGenrats StructType
 * @subpackage Structs
 */
class ExtComponentGenrats extends AbstractStructBase
{
    /**
     * The componentNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $componentNumber;
    /**
     * The generalArticles
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtGeneralArticleDescription
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
     * Constructor method for ExtComponentGenrats
     * @uses ExtComponentGenrats::setComponentNumber()
     * @uses ExtComponentGenrats::setGeneralArticles()
     * @uses ExtComponentGenrats::setStatus()
     * @param string $componentNumber
     * @param \ArrayType\ArrayOfExtGeneralArticleDescription $generalArticles
     * @param \StructType\ExtStatus $status
     */
    public function __construct($componentNumber = null, \ArrayType\ArrayOfExtGeneralArticleDescription $generalArticles = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setComponentNumber($componentNumber)
            ->setGeneralArticles($generalArticles)
            ->setStatus($status);
    }
    /**
     * Get componentNumber value
     * @return string|null
     */
    public function getComponentNumber()
    {
        return $this->componentNumber;
    }
    /**
     * Set componentNumber value
     * @param string $componentNumber
     * @return \StructType\ExtComponentGenrats
     */
    public function setComponentNumber($componentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($componentNumber) && !is_string($componentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($componentNumber, true), gettype($componentNumber)), __LINE__);
        }
        $this->componentNumber = $componentNumber;
        return $this;
    }
    /**
     * Get generalArticles value
     * @return \ArrayType\ArrayOfExtGeneralArticleDescription|null
     */
    public function getGeneralArticles()
    {
        return $this->generalArticles;
    }
    /**
     * Set generalArticles value
     * @param \ArrayType\ArrayOfExtGeneralArticleDescription $generalArticles
     * @return \StructType\ExtComponentGenrats
     */
    public function setGeneralArticles(\ArrayType\ArrayOfExtGeneralArticleDescription $generalArticles = null)
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
     * @return \StructType\ExtComponentGenrats
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
