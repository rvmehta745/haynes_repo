<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtRepairtimesBasketItemV2 StructType
 * @subpackage Structs
 */
class ExtRepairtimesBasketItemV2 extends AbstractStructBase
{
    /**
     * The calculatedTime
     * @var int
     */
    public $calculatedTime;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The genarts
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtGeneralArticle
     */
    public $genarts;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The priceWithoutVat
     * @var int
     */
    public $priceWithoutVat;
    /**
     * The repairtimesInfo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtRepairtimeInfoGroupV2
     */
    public $repairtimesInfo;
    /**
     * The subtotal
     * @var int
     */
    public $subtotal;
    /**
     * The vat
     * @var int
     */
    public $vat;
    /**
     * Constructor method for ExtRepairtimesBasketItemV2
     * @uses ExtRepairtimesBasketItemV2::setCalculatedTime()
     * @uses ExtRepairtimesBasketItemV2::setDescription()
     * @uses ExtRepairtimesBasketItemV2::setGenarts()
     * @uses ExtRepairtimesBasketItemV2::setId()
     * @uses ExtRepairtimesBasketItemV2::setPriceWithoutVat()
     * @uses ExtRepairtimesBasketItemV2::setRepairtimesInfo()
     * @uses ExtRepairtimesBasketItemV2::setSubtotal()
     * @uses ExtRepairtimesBasketItemV2::setVat()
     * @param int $calculatedTime
     * @param string $description
     * @param \ArrayType\ArrayOfExtGeneralArticle $genarts
     * @param string $id
     * @param int $priceWithoutVat
     * @param \StructType\ExtRepairtimeInfoGroupV2 $repairtimesInfo
     * @param int $subtotal
     * @param int $vat
     */
    public function __construct($calculatedTime = null, $description = null, \ArrayType\ArrayOfExtGeneralArticle $genarts = null, $id = null, $priceWithoutVat = null, \StructType\ExtRepairtimeInfoGroupV2 $repairtimesInfo = null, $subtotal = null, $vat = null)
    {
        $this
            ->setCalculatedTime($calculatedTime)
            ->setDescription($description)
            ->setGenarts($genarts)
            ->setId($id)
            ->setPriceWithoutVat($priceWithoutVat)
            ->setRepairtimesInfo($repairtimesInfo)
            ->setSubtotal($subtotal)
            ->setVat($vat);
    }
    /**
     * Get calculatedTime value
     * @return int|null
     */
    public function getCalculatedTime()
    {
        return $this->calculatedTime;
    }
    /**
     * Set calculatedTime value
     * @param int $calculatedTime
     * @return \StructType\ExtRepairtimesBasketItemV2
     */
    public function setCalculatedTime($calculatedTime = null)
    {
        // validation for constraint: int
        if (!is_null($calculatedTime) && !(is_int($calculatedTime) || ctype_digit($calculatedTime))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($calculatedTime, true), gettype($calculatedTime)), __LINE__);
        }
        $this->calculatedTime = $calculatedTime;
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
     * @return \StructType\ExtRepairtimesBasketItemV2
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
     * Get genarts value
     * @return \ArrayType\ArrayOfExtGeneralArticle|null
     */
    public function getGenarts()
    {
        return $this->genarts;
    }
    /**
     * Set genarts value
     * @param \ArrayType\ArrayOfExtGeneralArticle $genarts
     * @return \StructType\ExtRepairtimesBasketItemV2
     */
    public function setGenarts(\ArrayType\ArrayOfExtGeneralArticle $genarts = null)
    {
        $this->genarts = $genarts;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\ExtRepairtimesBasketItemV2
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get priceWithoutVat value
     * @return int|null
     */
    public function getPriceWithoutVat()
    {
        return $this->priceWithoutVat;
    }
    /**
     * Set priceWithoutVat value
     * @param int $priceWithoutVat
     * @return \StructType\ExtRepairtimesBasketItemV2
     */
    public function setPriceWithoutVat($priceWithoutVat = null)
    {
        // validation for constraint: int
        if (!is_null($priceWithoutVat) && !(is_int($priceWithoutVat) || ctype_digit($priceWithoutVat))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priceWithoutVat, true), gettype($priceWithoutVat)), __LINE__);
        }
        $this->priceWithoutVat = $priceWithoutVat;
        return $this;
    }
    /**
     * Get repairtimesInfo value
     * @return \StructType\ExtRepairtimeInfoGroupV2|null
     */
    public function getRepairtimesInfo()
    {
        return $this->repairtimesInfo;
    }
    /**
     * Set repairtimesInfo value
     * @param \StructType\ExtRepairtimeInfoGroupV2 $repairtimesInfo
     * @return \StructType\ExtRepairtimesBasketItemV2
     */
    public function setRepairtimesInfo(\StructType\ExtRepairtimeInfoGroupV2 $repairtimesInfo = null)
    {
        $this->repairtimesInfo = $repairtimesInfo;
        return $this;
    }
    /**
     * Get subtotal value
     * @return int|null
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }
    /**
     * Set subtotal value
     * @param int $subtotal
     * @return \StructType\ExtRepairtimesBasketItemV2
     */
    public function setSubtotal($subtotal = null)
    {
        // validation for constraint: int
        if (!is_null($subtotal) && !(is_int($subtotal) || ctype_digit($subtotal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($subtotal, true), gettype($subtotal)), __LINE__);
        }
        $this->subtotal = $subtotal;
        return $this;
    }
    /**
     * Get vat value
     * @return int|null
     */
    public function getVat()
    {
        return $this->vat;
    }
    /**
     * Set vat value
     * @param int $vat
     * @return \StructType\ExtRepairtimesBasketItemV2
     */
    public function setVat($vat = null)
    {
        // validation for constraint: int
        if (!is_null($vat) && !(is_int($vat) || ctype_digit($vat))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vat, true), gettype($vat)), __LINE__);
        }
        $this->vat = $vat;
        return $this;
    }
}
