<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtPhysicalLocationGroup StructType
 * @subpackage Structs
 */
class ExtPhysicalLocationGroup extends AbstractStructBase
{
    /**
     * The items
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtPhysicalLocationItem
     */
    public $items;
    /**
     * The pictureMimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pictureMimeDataName;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtPhysicalLocationGroup
     * @uses ExtPhysicalLocationGroup::setItems()
     * @uses ExtPhysicalLocationGroup::setPictureMimeDataName()
     * @uses ExtPhysicalLocationGroup::setStatus()
     * @param \ArrayType\ArrayOfExtPhysicalLocationItem $items
     * @param string $pictureMimeDataName
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOfExtPhysicalLocationItem $items = null, $pictureMimeDataName = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setItems($items)
            ->setPictureMimeDataName($pictureMimeDataName)
            ->setStatus($status);
    }
    /**
     * Get items value
     * @return \ArrayType\ArrayOfExtPhysicalLocationItem|null
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * Set items value
     * @param \ArrayType\ArrayOfExtPhysicalLocationItem $items
     * @return \StructType\ExtPhysicalLocationGroup
     */
    public function setItems(\ArrayType\ArrayOfExtPhysicalLocationItem $items = null)
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Get pictureMimeDataName value
     * @return string|null
     */
    public function getPictureMimeDataName()
    {
        return $this->pictureMimeDataName;
    }
    /**
     * Set pictureMimeDataName value
     * @param string $pictureMimeDataName
     * @return \StructType\ExtPhysicalLocationGroup
     */
    public function setPictureMimeDataName($pictureMimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($pictureMimeDataName) && !is_string($pictureMimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pictureMimeDataName, true), gettype($pictureMimeDataName)), __LINE__);
        }
        $this->pictureMimeDataName = $pictureMimeDataName;
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
     * @return \StructType\ExtPhysicalLocationGroup
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
