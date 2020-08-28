<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtDrawingV2 StructType
 * @subpackage Structs
 */
class ExtDrawingV2 extends AbstractStructBase
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
     * @var \ArrayType\ArrayOfExtDrawingV2
     */
    public $subDrawings;
    /**
     * Constructor method for ExtDrawingV2
     * @uses ExtDrawingV2::setDescription()
     * @uses ExtDrawingV2::setGeneralArticles()
     * @uses ExtDrawingV2::setMimeDataName()
     * @uses ExtDrawingV2::setRepairTasks()
     * @uses ExtDrawingV2::setStatus()
     * @uses ExtDrawingV2::setSubDrawings()
     * @param string $description
     * @param \ArrayType\ArrayOfExtGeneralArticle $generalArticles
     * @param string $mimeDataName
     * @param \ArrayType\ArrayOfExtRepairtimeNodeV2 $repairTasks
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtDrawingV2 $subDrawings
     */
    public function __construct($description = null, \ArrayType\ArrayOfExtGeneralArticle $generalArticles = null, $mimeDataName = null, \ArrayType\ArrayOfExtRepairtimeNodeV2 $repairTasks = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtDrawingV2 $subDrawings = null)
    {
        $this
            ->setDescription($description)
            ->setGeneralArticles($generalArticles)
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
     * @return \StructType\ExtDrawingV2
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
     * @return \StructType\ExtDrawingV2
     */
    public function setGeneralArticles(\ArrayType\ArrayOfExtGeneralArticle $generalArticles = null)
    {
        $this->generalArticles = $generalArticles;
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
     * @return \StructType\ExtDrawingV2
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
     * @return \StructType\ExtDrawingV2
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
     * @return \StructType\ExtDrawingV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get subDrawings value
     * @return \ArrayType\ArrayOfExtDrawingV2|null
     */
    public function getSubDrawings()
    {
        return $this->subDrawings;
    }
    /**
     * Set subDrawings value
     * @param \ArrayType\ArrayOfExtDrawingV2 $subDrawings
     * @return \StructType\ExtDrawingV2
     */
    public function setSubDrawings(\ArrayType\ArrayOfExtDrawingV2 $subDrawings = null)
    {
        $this->subDrawings = $subDrawings;
        return $this;
    }
}
