<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtLubricantGroupArticlesV2 StructType
 * @subpackage Structs
 */
class ExtLubricantGroupArticlesV2 extends AbstractStructBase
{
    /**
     * The lubricantItems
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtLubricantItemArticles
     */
    public $lubricantItems;
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
     * Constructor method for ExtLubricantGroupArticlesV2
     * @uses ExtLubricantGroupArticlesV2::setLubricantItems()
     * @uses ExtLubricantGroupArticlesV2::setName()
     * @uses ExtLubricantGroupArticlesV2::setOrder()
     * @uses ExtLubricantGroupArticlesV2::setSmartLinks()
     * @uses ExtLubricantGroupArticlesV2::setStatus()
     * @param \ArrayType\ArrayOfExtLubricantItemArticles $lubricantItems
     * @param string $name
     * @param int $order
     * @param \ArrayType\ArrayOfExtSmartLink $smartLinks
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOfExtLubricantItemArticles $lubricantItems = null, $name = null, $order = null, \ArrayType\ArrayOfExtSmartLink $smartLinks = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setLubricantItems($lubricantItems)
            ->setName($name)
            ->setOrder($order)
            ->setSmartLinks($smartLinks)
            ->setStatus($status);
    }
    /**
     * Get lubricantItems value
     * @return \ArrayType\ArrayOfExtLubricantItemArticles|null
     */
    public function getLubricantItems()
    {
        return $this->lubricantItems;
    }
    /**
     * Set lubricantItems value
     * @param \ArrayType\ArrayOfExtLubricantItemArticles $lubricantItems
     * @return \StructType\ExtLubricantGroupArticlesV2
     */
    public function setLubricantItems(\ArrayType\ArrayOfExtLubricantItemArticles $lubricantItems = null)
    {
        $this->lubricantItems = $lubricantItems;
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
     * @return \StructType\ExtLubricantGroupArticlesV2
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
     * @return \StructType\ExtLubricantGroupArticlesV2
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
     * @return \StructType\ExtLubricantGroupArticlesV2
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
     * @return \StructType\ExtLubricantGroupArticlesV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
