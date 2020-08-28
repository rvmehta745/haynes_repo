<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtParagraphContent StructType
 * @subpackage Structs
 */
class ExtParagraphContent extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
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
     * The sentenceStyle
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sentenceStyle;
    /**
     * Constructor method for ExtParagraphContent
     * @uses ExtParagraphContent::setId()
     * @uses ExtParagraphContent::setName()
     * @uses ExtParagraphContent::setOrder()
     * @uses ExtParagraphContent::setSentenceStyle()
     * @param int $id
     * @param string $name
     * @param int $order
     * @param string $sentenceStyle
     */
    public function __construct($id = null, $name = null, $order = null, $sentenceStyle = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setOrder($order)
            ->setSentenceStyle($sentenceStyle);
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
     * @return \StructType\ExtParagraphContent
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
     * @return \StructType\ExtParagraphContent
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
     * @return \StructType\ExtParagraphContent
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
     * @return \StructType\ExtParagraphContent
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
}
