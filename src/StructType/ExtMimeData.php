<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMimeData StructType
 * @subpackage Structs
 */
class ExtMimeData extends AbstractStructBase
{
    /**
     * The mimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mimeDataName;
    /**
     * The subStoryLines
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtStoryLineV5
     */
    public $subStoryLines;
    /**
     * Constructor method for ExtMimeData
     * @uses ExtMimeData::setMimeDataName()
     * @uses ExtMimeData::setSubStoryLines()
     * @param string $mimeDataName
     * @param \ArrayType\ArrayOfExtStoryLineV5 $subStoryLines
     */
    public function __construct($mimeDataName = null, \ArrayType\ArrayOfExtStoryLineV5 $subStoryLines = null)
    {
        $this
            ->setMimeDataName($mimeDataName)
            ->setSubStoryLines($subStoryLines);
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
     * @return \StructType\ExtMimeData
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
     * Get subStoryLines value
     * @return \ArrayType\ArrayOfExtStoryLineV5|null
     */
    public function getSubStoryLines()
    {
        return $this->subStoryLines;
    }
    /**
     * Set subStoryLines value
     * @param \ArrayType\ArrayOfExtStoryLineV5 $subStoryLines
     * @return \StructType\ExtMimeData
     */
    public function setSubStoryLines(\ArrayType\ArrayOfExtStoryLineV5 $subStoryLines = null)
    {
        $this->subStoryLines = $subStoryLines;
        return $this;
    }
}
