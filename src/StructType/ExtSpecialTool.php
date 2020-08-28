<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtSpecialTool StructType
 * @subpackage Structs
 */
class ExtSpecialTool extends AbstractStructBase
{
    /**
     * The code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $code;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The dimensions
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dimensions;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The mimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mimeDataName;
    /**
     * The order
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
     * Constructor method for ExtSpecialTool
     * @uses ExtSpecialTool::setCode()
     * @uses ExtSpecialTool::setDescription()
     * @uses ExtSpecialTool::setDimensions()
     * @uses ExtSpecialTool::setId()
     * @uses ExtSpecialTool::setMimeDataName()
     * @uses ExtSpecialTool::setOrder()
     * @uses ExtSpecialTool::setStatus()
     * @param string $code
     * @param string $description
     * @param string $dimensions
     * @param int $id
     * @param string $mimeDataName
     * @param int $order
     * @param \StructType\ExtStatus $status
     */
    public function __construct($code = null, $description = null, $dimensions = null, $id = null, $mimeDataName = null, $order = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setCode($code)
            ->setDescription($description)
            ->setDimensions($dimensions)
            ->setId($id)
            ->setMimeDataName($mimeDataName)
            ->setOrder($order)
            ->setStatus($status);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \StructType\ExtSpecialTool
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
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
     * @return \StructType\ExtSpecialTool
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
     * Get dimensions value
     * @return string|null
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }
    /**
     * Set dimensions value
     * @param string $dimensions
     * @return \StructType\ExtSpecialTool
     */
    public function setDimensions($dimensions = null)
    {
        // validation for constraint: string
        if (!is_null($dimensions) && !is_string($dimensions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dimensions, true), gettype($dimensions)), __LINE__);
        }
        $this->dimensions = $dimensions;
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \StructType\ExtSpecialTool
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
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
     * @return \StructType\ExtSpecialTool
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
     * @return \StructType\ExtSpecialTool
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
     * @return \StructType\ExtSpecialTool
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
