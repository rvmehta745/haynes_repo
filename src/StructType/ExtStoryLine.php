<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtStoryLine StructType
 * @subpackage Structs
 */
class ExtStoryLine extends AbstractStructBase
{
    /**
     * The mimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mimeDataName;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The order
     * @var int
     */
    public $order;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $remark;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The subStoryLines
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtStoryLine
     */
    public $subStoryLines;
    /**
     * Constructor method for ExtStoryLine
     * @uses ExtStoryLine::setMimeDataName()
     * @uses ExtStoryLine::setName()
     * @uses ExtStoryLine::setOrder()
     * @uses ExtStoryLine::setRemark()
     * @uses ExtStoryLine::setStatus()
     * @uses ExtStoryLine::setSubStoryLines()
     * @param string $mimeDataName
     * @param string $name
     * @param int $order
     * @param string $remark
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtStoryLine $subStoryLines
     */
    public function __construct($mimeDataName = null, $name = null, $order = null, $remark = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtStoryLine $subStoryLines = null)
    {
        $this
            ->setMimeDataName($mimeDataName)
            ->setName($name)
            ->setOrder($order)
            ->setRemark($remark)
            ->setStatus($status)
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
     * @return \StructType\ExtStoryLine
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
     * @return \StructType\ExtStoryLine
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
     * @return \StructType\ExtStoryLine
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
     * Get remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \StructType\ExtStoryLine
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
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
     * @return \StructType\ExtStoryLine
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get subStoryLines value
     * @return \ArrayType\ArrayOfExtStoryLine|null
     */
    public function getSubStoryLines()
    {
        return $this->subStoryLines;
    }
    /**
     * Set subStoryLines value
     * @param \ArrayType\ArrayOfExtStoryLine $subStoryLines
     * @return \StructType\ExtStoryLine
     */
    public function setSubStoryLines(\ArrayType\ArrayOfExtStoryLine $subStoryLines = null)
    {
        $this->subStoryLines = $subStoryLines;
        return $this;
    }
}
