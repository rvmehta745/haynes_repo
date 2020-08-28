<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtDrawingV3 StructType
 * @subpackage Structs
 */
class ExtDrawingV3 extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The generalArticles
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtGeneralArticle
     */
    public $generalArticles;
    /**
     * The generalCriteria
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtCriteriaGroup
     */
    public $generalCriteria;
    /**
     * The mimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mimeDataName;
    /**
     * The repairTasks
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimeNodeV2
     */
    public $repairTasks;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The subDrawings
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtDrawingV3
     */
    public $subDrawings;
    /**
     * Constructor method for ExtDrawingV3
     * @uses ExtDrawingV3::setDescription()
     * @uses ExtDrawingV3::setGeneralArticles()
     * @uses ExtDrawingV3::setGeneralCriteria()
     * @uses ExtDrawingV3::setMimeDataName()
     * @uses ExtDrawingV3::setRepairTasks()
     * @uses ExtDrawingV3::setStatus()
     * @uses ExtDrawingV3::setSubDrawings()
     * @param string $description
     * @param \ArrayType\ArrayOfExtGeneralArticle $generalArticles
     * @param \ArrayType\ArrayOfExtCriteriaGroup $generalCriteria
     * @param string $mimeDataName
     * @param \ArrayType\ArrayOfExtRepairtimeNodeV2 $repairTasks
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtDrawingV3 $subDrawings
     */
    public function __construct($description = null, \ArrayType\ArrayOfExtGeneralArticle $generalArticles = null, \ArrayType\ArrayOfExtCriteriaGroup $generalCriteria = null, $mimeDataName = null, \ArrayType\ArrayOfExtRepairtimeNodeV2 $repairTasks = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtDrawingV3 $subDrawings = null)
    {
        $this
            ->setDescription($description)
            ->setGeneralArticles($generalArticles)
            ->setGeneralCriteria($generalCriteria)
            ->setMimeDataName($mimeDataName)
            ->setRepairTasks($repairTasks)
            ->setStatus($status)
            ->setSubDrawings($subDrawings);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \StructType\ExtDrawingV3
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
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
     * @return \StructType\ExtDrawingV3
     */
    public function setGeneralArticles(\ArrayType\ArrayOfExtGeneralArticle $generalArticles = null)
    {
        $this->generalArticles = $generalArticles;
        return $this;
    }
    /**
     * Get generalCriteria value
     * @return \ArrayType\ArrayOfExtCriteriaGroup|null
     */
    public function getGeneralCriteria()
    {
        return $this->generalCriteria;
    }
    /**
     * Set generalCriteria value
     * @param \ArrayType\ArrayOfExtCriteriaGroup $generalCriteria
     * @return \StructType\ExtDrawingV3
     */
    public function setGeneralCriteria(\ArrayType\ArrayOfExtCriteriaGroup $generalCriteria = null)
    {
        $this->generalCriteria = $generalCriteria;
        return $this;
    }
    /**
     * Get mimeDataName value
     * @return string|null
     */
    public function getMimeDataName()
    {
        return $this->mimeDataName;
    }
    /**
     * Set mimeDataName value
     * @param string $mimeDataName
     * @return \StructType\ExtDrawingV3
     */
    public function setMimeDataName($mimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($mimeDataName) && !is_string($mimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimeDataName, true), gettype($mimeDataName)), __LINE__);
        }
        $this->mimeDataName = $mimeDataName;
        return $this;
    }
    /**
     * Get repairTasks value
     * @return \ArrayType\ArrayOfExtRepairtimeNodeV2|null
     */
    public function getRepairTasks()
    {
        return $this->repairTasks;
    }
    /**
     * Set repairTasks value
     * @param \ArrayType\ArrayOfExtRepairtimeNodeV2 $repairTasks
     * @return \StructType\ExtDrawingV3
     */
    public function setRepairTasks(\ArrayType\ArrayOfExtRepairtimeNodeV2 $repairTasks = null)
    {
        $this->repairTasks = $repairTasks;
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
     * @return \StructType\ExtDrawingV3
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get subDrawings value
     * @return \ArrayType\ArrayOfExtDrawingV3|null
     */
    public function getSubDrawings()
    {
        return $this->subDrawings;
    }
    /**
     * Set subDrawings value
     * @param \ArrayType\ArrayOfExtDrawingV3 $subDrawings
     * @return \StructType\ExtDrawingV3
     */
    public function setSubDrawings(\ArrayType\ArrayOfExtDrawingV3 $subDrawings = null)
    {
        $this->subDrawings = $subDrawings;
        return $this;
    }
}
