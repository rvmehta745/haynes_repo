<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtStoryListContainer StructType
 * @subpackage Structs
 */
class ExtStoryListContainer extends AbstractStructBase
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
     * @var \ArrayType\ArrayOfExtStoryLineV4
     */
    public $storyLines;
    /**
     * Constructor method for ExtStoryListContainer
     * @uses ExtStoryListContainer::setName()
     * @uses ExtStoryListContainer::setStatus()
     * @uses ExtStoryListContainer::setStoryLines()
     * @param string $name
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtStoryLineV4 $storyLines
     */
    public function __construct($name = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtStoryLineV4 $storyLines = null)
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
     * @return \StructType\ExtStoryListContainer
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
     * @return \StructType\ExtStoryListContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get storyLines value
     * @return \ArrayType\ArrayOfExtStoryLineV4|null
     */
    public function getStoryLines()
    {
        return $this->storyLines;
    }
    /**
     * Set storyLines value
     * @param \ArrayType\ArrayOfExtStoryLineV4 $storyLines
     * @return \StructType\ExtStoryListContainer
     */
    public function setStoryLines(\ArrayType\ArrayOfExtStoryLineV4 $storyLines = null)
    {
        $this->storyLines = $storyLines;
        return $this;
    }
}
