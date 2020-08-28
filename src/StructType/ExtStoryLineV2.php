<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtStoryLineV2 StructType
 * @subpackage Structs
 */
class ExtStoryLineV2 extends AbstractStructBase
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
     * The smartLinks
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtSmartLink
     */
    public $smartLinks;
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
     * @var \ArrayType\ArrayOfExtStoryLineV2
     */
    public $subStoryLines;
    /**
     * Constructor method for ExtStoryLineV2
     * @uses ExtStoryLineV2::setMimeDataName()
     * @uses ExtStoryLineV2::setName()
     * @uses ExtStoryLineV2::setOrder()
     * @uses ExtStoryLineV2::setRemark()
     * @uses ExtStoryLineV2::setSmartLinks()
     * @uses ExtStoryLineV2::setStatus()
     * @uses ExtStoryLineV2::setSubStoryLines()
     * @param string $mimeDataName
     * @param string $name
     * @param int $order
     * @param string $remark
     * @param \ArrayType\ArrayOfExtSmartLink $smartLinks
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtStoryLineV2 $subStoryLines
     */
    public function __construct($mimeDataName = null, $name = null, $order = null, $remark = null, \ArrayType\ArrayOfExtSmartLink $smartLinks = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtStoryLineV2 $subStoryLines = null)
    {
        $this
            ->setMimeDataName($mimeDataName)
            ->setName($name)
            ->setOrder($order)
            ->setRemark($remark)
            ->setSmartLinks($smartLinks)
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
     * @return \StructType\ExtStoryLineV2
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
     * @return \StructType\ExtStoryLineV2
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
     * @return \StructType\ExtStoryLineV2
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
     * @return \StructType\ExtStoryLineV2
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
     * Get smartLinks value
     * @return \ArrayType\ArrayOfExtSmartLink|null
     */
    public function getSmartLinks()
    {
        return $this->smartLinks;
    }
    /**
     * Set smartLinks value
     * @param \ArrayType\ArrayOfExtSmartLink $smartLinks
     * @return \StructType\ExtStoryLineV2
     */
    public function setSmartLinks(\ArrayType\ArrayOfExtSmartLink $smartLinks = null)
    {
        $this->smartLinks = $smartLinks;
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
     * @return \StructType\ExtStoryLineV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get subStoryLines value
     * @return \ArrayType\ArrayOfExtStoryLineV2|null
     */
    public function getSubStoryLines()
    {
        return $this->subStoryLines;
    }
    /**
     * Set subStoryLines value
     * @param \ArrayType\ArrayOfExtStoryLineV2 $subStoryLines
     * @return \StructType\ExtStoryLineV2
     */
    public function setSubStoryLines(\ArrayType\ArrayOfExtStoryLineV2 $subStoryLines = null)
    {
        $this->subStoryLines = $subStoryLines;
        return $this;
    }
}
