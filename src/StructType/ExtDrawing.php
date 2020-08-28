<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtDrawing StructType
 * @subpackage Structs
 */
class ExtDrawing extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The mimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mimeDataName;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $order;
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
     * @var \ArrayType\ArrayOfExtDrawing
     */
    public $subDrawings;
    /**
     * Constructor method for ExtDrawing
     * @uses ExtDrawing::setDescription()
     * @uses ExtDrawing::setMimeDataName()
     * @uses ExtDrawing::setOrder()
     * @uses ExtDrawing::setStatus()
     * @uses ExtDrawing::setSubDrawings()
     * @param string $description
     * @param string $mimeDataName
     * @param int $order
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtDrawing $subDrawings
     */
    public function __construct($description = null, $mimeDataName = null, $order = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtDrawing $subDrawings = null)
    {
        $this
            ->setDescription($description)
            ->setMimeDataName($mimeDataName)
            ->setOrder($order)
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
     * @return \StructType\ExtDrawing
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
     * @return \StructType\ExtDrawing
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
     * Get order value
     * @return int|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param int $order
     * @return \StructType\ExtDrawing
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->order = $order;
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
     * @return \StructType\ExtDrawing
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get subDrawings value
     * @return \ArrayType\ArrayOfExtDrawing|null
     */
    public function getSubDrawings()
    {
        return $this->subDrawings;
    }
    /**
     * Set subDrawings value
     * @param \ArrayType\ArrayOfExtDrawing $subDrawings
     * @return \StructType\ExtDrawing
     */
    public function setSubDrawings(\ArrayType\ArrayOfExtDrawing $subDrawings = null)
    {
        $this->subDrawings = $subDrawings;
        return $this;
    }
}
