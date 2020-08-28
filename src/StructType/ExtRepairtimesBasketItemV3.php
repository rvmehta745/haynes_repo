<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtRepairtimesBasketItemV3 StructType
 * @subpackage Structs
 */
class ExtRepairtimesBasketItemV3 extends AbstractStructBase
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
     * The jobType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $jobType;
    /**
     * The priceWithoutVat
     * @var int
     */
    public $priceWithoutVat;
    /**
     * The repairtimesInfo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtRepairtimeInfoGroupV3
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
     * Constructor method for ExtRepairtimesBasketItemV3
     * @uses ExtRepairtimesBasketItemV3::setCalculatedTime()
     * @uses ExtRepairtimesBasketItemV3::setDescription()
     * @uses ExtRepairtimesBasketItemV3::setGenarts()
     * @uses ExtRepairtimesBasketItemV3::setId()
     * @uses ExtRepairtimesBasketItemV3::setJobType()
     * @uses ExtRepairtimesBasketItemV3::setPriceWithoutVat()
     * @uses ExtRepairtimesBasketItemV3::setRepairtimesInfo()
     * @uses ExtRepairtimesBasketItemV3::setSubtotal()
     * @uses ExtRepairtimesBasketItemV3::setVat()
     * @param int $calculatedTime
     * @param string $description
     * @param \ArrayType\ArrayOfExtGeneralArticle $genarts
     * @param string $id
     * @param string $jobType
     * @param int $priceWithoutVat
     * @param \StructType\ExtRepairtimeInfoGroupV3 $repairtimesInfo
     * @param int $subtotal
     * @param int $vat
     */
    public function __construct($calculatedTime = null, $description = null, \ArrayType\ArrayOfExtGeneralArticle $genarts = null, $id = null, $jobType = null, $priceWithoutVat = null, \StructType\ExtRepairtimeInfoGroupV3 $repairtimesInfo = null, $subtotal = null, $vat = null)
    {
        $this
            ->setCalculatedTime($calculatedTime)
            ->setDescription($description)
            ->setGenarts($genarts)
            ->setId($id)
            ->setJobType($jobType)
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
     * @return \StructType\ExtRepairtimesBasketItemV3
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
     * @return \StructType\ExtRepairtimesBasketItemV3
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
     * @return \StructType\ExtRepairtimesBasketItemV3
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
     * @return \StructType\ExtRepairtimesBasketItemV3
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
     * Get jobType value
     * @return string|null
     */
    public function getJobType()
    {
        return $this->jobType;
    }
    /**
     * Set jobType value
     * @param string $jobType
     * @return \StructType\ExtRepairtimesBasketItemV3
     */
    public function setJobType($jobType = null)
    {
        // validation for constraint: string
        if (!is_null($jobType) && !is_string($jobType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jobType, true), gettype($jobType)), __LINE__);
        }
        $this->jobType = $jobType;
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
     * @return \StructType\ExtRepairtimesBasketItemV3
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
     * @return \StructType\ExtRepairtimeInfoGroupV3|null
     */
    public function getRepairtimesInfo()
    {
        return $this->repairtimesInfo;
    }
    /**
     * Set repairtimesInfo value
     * @param \StructType\ExtRepairtimeInfoGroupV3 $repairtimesInfo
     * @return \StructType\ExtRepairtimesBasketItemV3
     */
    public function setRepairtimesInfo(\StructType\ExtRepairtimeInfoGroupV3 $repairtimesInfo = null)
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
     * @return \StructType\ExtRepairtimesBasketItemV3
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
     * @return \StructType\ExtRepairtimesBasketItemV3
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
