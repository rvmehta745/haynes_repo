<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtStoryLineV5 StructType
 * @subpackage Structs
 */
class ExtStoryLineV5 extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The mimeData
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtMimeData
     */
    public $mimeData;
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
     * The paragraphContent
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtParagraphContent
     */
    public $paragraphContent;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $remark;
    /**
     * The sentenceGroupType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sentenceGroupType;
    /**
     * The sentenceStyle
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sentenceStyle;
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
     * @var \ArrayType\ArrayOfExtStoryLineV5
     */
    public $subStoryLines;
    /**
     * The tableContent
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtTableContent
     */
    public $tableContent;
    /**
     * Constructor method for ExtStoryLineV5
     * @uses ExtStoryLineV5::setId()
     * @uses ExtStoryLineV5::setMimeData()
     * @uses ExtStoryLineV5::setName()
     * @uses ExtStoryLineV5::setOrder()
     * @uses ExtStoryLineV5::setParagraphContent()
     * @uses ExtStoryLineV5::setRemark()
     * @uses ExtStoryLineV5::setSentenceGroupType()
     * @uses ExtStoryLineV5::setSentenceStyle()
     * @uses ExtStoryLineV5::setSmartLinks()
     * @uses ExtStoryLineV5::setSpecialTool()
     * @uses ExtStoryLineV5::setStatus()
     * @uses ExtStoryLineV5::setSubStoryLines()
     * @uses ExtStoryLineV5::setTableContent()
     * @param int $id
     * @param \StructType\ExtMimeData $mimeData
     * @param string $name
     * @param int $order
     * @param \ArrayType\ArrayOfExtParagraphContent $paragraphContent
     * @param string $remark
     * @param string $sentenceGroupType
     * @param string $sentenceStyle
     * @param \ArrayType\ArrayOfExtSmartLink $smartLinks
     * @param \ArrayType\ArrayOfExtSpecialTool $specialTool
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtStoryLineV5 $subStoryLines
     * @param \StructType\ExtTableContent $tableContent
     */
    public function __construct($id = null, \StructType\ExtMimeData $mimeData = null, $name = null, $order = null, \ArrayType\ArrayOfExtParagraphContent $paragraphContent = null, $remark = null, $sentenceGroupType = null, $sentenceStyle = null, \ArrayType\ArrayOfExtSmartLink $smartLinks = null, \ArrayType\ArrayOfExtSpecialTool $specialTool = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtStoryLineV5 $subStoryLines = null, \StructType\ExtTableContent $tableContent = null)
    {
        $this
            ->setId($id)
            ->setMimeData($mimeData)
            ->setName($name)
            ->setOrder($order)
            ->setParagraphContent($paragraphContent)
            ->setRemark($remark)
            ->setSentenceGroupType($sentenceGroupType)
            ->setSentenceStyle($sentenceStyle)
            ->setSmartLinks($smartLinks)
            ->setSpecialTool($specialTool)
            ->setStatus($status)
            ->setSubStoryLines($subStoryLines)
            ->setTableContent($tableContent);
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
     * @return \StructType\ExtStoryLineV5
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
     * Get mimeData value
     * @return \StructType\ExtMimeData|null
     */
    public function getMimeData()
    {
        return $this->mimeData;
    }
    /**
     * Set mimeData value
     * @param \StructType\ExtMimeData $mimeData
     * @return \StructType\ExtStoryLineV5
     */
    public function setMimeData(\StructType\ExtMimeData $mimeData = null)
    {
        $this->mimeData = $mimeData;
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
     * @return \StructType\ExtStoryLineV5
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
     * @return \StructType\ExtStoryLineV5
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
     * Get paragraphContent value
     * @return \ArrayType\ArrayOfExtParagraphContent|null
     */
    public function getParagraphContent()
    {
        return $this->paragraphContent;
    }
    /**
     * Set paragraphContent value
     * @param \ArrayType\ArrayOfExtParagraphContent $paragraphContent
     * @return \StructType\ExtStoryLineV5
     */
    public function setParagraphContent(\ArrayType\ArrayOfExtParagraphContent $paragraphContent = null)
    {
        $this->paragraphContent = $paragraphContent;
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
     * @return \StructType\ExtStoryLineV5
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
     * Get sentenceGroupType value
     * @return string|null
     */
    public function getSentenceGroupType()
    {
        return $this->sentenceGroupType;
    }
    /**
     * Set sentenceGroupType value
     * @param string $sentenceGroupType
     * @return \StructType\ExtStoryLineV5
     */
    public function setSentenceGroupType($sentenceGroupType = null)
    {
        // validation for constraint: string
        if (!is_null($sentenceGroupType) && !is_string($sentenceGroupType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sentenceGroupType, true), gettype($sentenceGroupType)), __LINE__);
        }
        $this->sentenceGroupType = $sentenceGroupType;
        return $this;
    }
    /**
     * Get sentenceStyle value
     * @return string|null
     */
    public function getSentenceStyle()
    {
        return $this->sentenceStyle;
    }
    /**
     * Set sentenceStyle value
     * @param string $sentenceStyle
     * @return \StructType\ExtStoryLineV5
     */
    public function setSentenceStyle($sentenceStyle = null)
    {
        // validation for constraint: string
        if (!is_null($sentenceStyle) && !is_string($sentenceStyle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sentenceStyle, true), gettype($sentenceStyle)), __LINE__);
        }
        $this->sentenceStyle = $sentenceStyle;
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
     * @return \StructType\ExtStoryLineV5
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
     * @return \StructType\ExtStoryLineV5
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
     * @return \StructType\ExtStoryLineV5
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
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
     * @return \StructType\ExtStoryLineV5
     */
    public function setSubStoryLines(\ArrayType\ArrayOfExtStoryLineV5 $subStoryLines = null)
    {
        $this->subStoryLines = $subStoryLines;
        return $this;
    }
    /**
     * Get tableContent value
     * @return \StructType\ExtTableContent|null
     */
    public function getTableContent()
    {
        return $this->tableContent;
    }
    /**
     * Set tableContent value
     * @param \StructType\ExtTableContent $tableContent
     * @return \StructType\ExtStoryLineV5
     */
    public function setTableContent(\StructType\ExtTableContent $tableContent = null)
    {
        $this->tableContent = $tableContent;
        return $this;
    }
}
