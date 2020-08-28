<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtStoryLineV4 StructType
 * @subpackage Structs
 */
class ExtStoryLineV4 extends AbstractStructBase
{
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
     * The specialTool
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtSpecialTool
     */
    public $specialTool;
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
     * @var \ArrayType\ArrayOfExtStoryLineV4
     */
    public $subStoryLines;
    /**
     * Constructor method for ExtStoryLineV4
     * @uses ExtStoryLineV4::setId()
     * @uses ExtStoryLineV4::setMimeDataName()
     * @uses ExtStoryLineV4::setName()
     * @uses ExtStoryLineV4::setOrder()
     * @uses ExtStoryLineV4::setRemark()
     * @uses ExtStoryLineV4::setSmartLinks()
     * @uses ExtStoryLineV4::setSpecialTool()
     * @uses ExtStoryLineV4::setStatus()
     * @uses ExtStoryLineV4::setSubStoryLines()
     * @param int $id
     * @param string $mimeDataName
     * @param string $name
     * @param int $order
     * @param string $remark
     * @param \ArrayType\ArrayOfExtSmartLink $smartLinks
     * @param \ArrayType\ArrayOfExtSpecialTool $specialTool
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtStoryLineV4 $subStoryLines
     */
    public function __construct($id = null, $mimeDataName = null, $name = null, $order = null, $remark = null, \ArrayType\ArrayOfExtSmartLink $smartLinks = null, \ArrayType\ArrayOfExtSpecialTool $specialTool = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtStoryLineV4 $subStoryLines = null)
    {
        $this
            ->setId($id)
            ->setMimeDataName($mimeDataName)
            ->setName($name)
            ->setOrder($order)
            ->setRemark($remark)
            ->setSmartLinks($smartLinks)
            ->setSpecialTool($specialTool)
            ->setStatus($status)
            ->setSubStoryLines($subStoryLines);
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
     * @return \StructType\ExtStoryLineV4
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
     * @return \StructType\ExtStoryLineV4
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
     * @return \StructType\ExtStoryLineV4
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
     * @return \StructType\ExtStoryLineV4
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
     * @return \StructType\ExtStoryLineV4
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
     * @return \StructType\ExtStoryLineV4
     */
    public function setSmartLinks(\ArrayType\ArrayOfExtSmartLink $smartLinks = null)
    {
        $this->smartLinks = $smartLinks;
        return $this;
    }
    /**
     * Get specialTool value
     * @return \ArrayType\ArrayOfExtSpecialTool|null
     */
    public function getSpecialTool()
    {
        return $this->specialTool;
    }
    /**
     * Set specialTool value
     * @param \ArrayType\ArrayOfExtSpecialTool $specialTool
     * @return \StructType\ExtStoryLineV4
     */
    public function setSpecialTool(\ArrayType\ArrayOfExtSpecialTool $specialTool = null)
    {
        $this->specialTool = $specialTool;
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
     * @return \StructType\ExtStoryLineV4
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get subStoryLines value
     * @return \ArrayType\ArrayOfExtStoryLineV4|null
     */
    public function getSubStoryLines()
    {
        return $this->subStoryLines;
    }
    /**
     * Set subStoryLines value
     * @param \ArrayType\ArrayOfExtStoryLineV4 $subStoryLines
     * @return \StructType\ExtStoryLineV4
     */
    public function setSubStoryLines(\ArrayType\ArrayOfExtStoryLineV4 $subStoryLines = null)
    {
        $this->subStoryLines = $subStoryLines;
        return $this;
    }
}
