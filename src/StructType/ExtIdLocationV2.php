<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtIdLocationV2 StructType
 * @subpackage Structs
 */
class ExtIdLocationV2 extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The identifier
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $identifier;
    /**
     * The mimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mimeDataName;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The title
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $title;
    /**
     * Constructor method for ExtIdLocationV2
     * @uses ExtIdLocationV2::setDescription()
     * @uses ExtIdLocationV2::setIdentifier()
     * @uses ExtIdLocationV2::setMimeDataName()
     * @uses ExtIdLocationV2::setStatus()
     * @uses ExtIdLocationV2::setTitle()
     * @param string $description
     * @param string $identifier
     * @param string $mimeDataName
     * @param \StructType\ExtStatus $status
     * @param string $title
     */
    public function __construct($description = null, $identifier = null, $mimeDataName = null, \StructType\ExtStatus $status = null, $title = null)
    {
        $this
            ->setDescription($description)
            ->setIdentifier($identifier)
            ->setMimeDataName($mimeDataName)
            ->setStatus($status)
            ->setTitle($title);
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
     * @return \StructType\ExtIdLocationV2
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
     * Get identifier value
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }
    /**
     * Set identifier value
     * @param string $identifier
     * @return \StructType\ExtIdLocationV2
     */
    public function setIdentifier($identifier = null)
    {
        // validation for constraint: string
        if (!is_null($identifier) && !is_string($identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifier, true), gettype($identifier)), __LINE__);
        }
        $this->identifier = $identifier;
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
     * @return \StructType\ExtIdLocationV2
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
     * @return \StructType\ExtIdLocationV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \StructType\ExtIdLocationV2
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
    }
}
