<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtStoryListContainerV2 StructType
 * @subpackage Structs
 */
class ExtStoryListContainerV2 extends AbstractStructBase
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The storyLines
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtStoryLineV5
     */
    public $storyLines;
    /**
     * Constructor method for ExtStoryListContainerV2
     * @uses ExtStoryListContainerV2::setName()
     * @uses ExtStoryListContainerV2::setStatus()
     * @uses ExtStoryListContainerV2::setStoryLines()
     * @param string $name
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtStoryLineV5 $storyLines
     */
    public function __construct($name = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtStoryLineV5 $storyLines = null)
    {
        $this
            ->setName($name)
            ->setStatus($status)
            ->setStoryLines($storyLines);
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
     * @return \StructType\ExtStoryListContainerV2
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
     * @return \StructType\ExtStoryListContainerV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get storyLines value
     * @return \ArrayType\ArrayOfExtStoryLineV5|null
     */
    public function getStoryLines()
    {
        return $this->storyLines;
    }
    /**
     * Set storyLines value
     * @param \ArrayType\ArrayOfExtStoryLineV5 $storyLines
     * @return \StructType\ExtStoryListContainerV2
     */
    public function setStoryLines(\ArrayType\ArrayOfExtStoryLineV5 $storyLines = null)
    {
        $this->storyLines = $storyLines;
        return $this;
    }
}
