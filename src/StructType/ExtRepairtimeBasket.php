<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtRepairtimeBasket StructType
 * @subpackage Structs
 */
class ExtRepairtimeBasket extends AbstractStructBase
{
    /**
     * The calculatedTimes
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_int
     */
    public $calculatedTimes;
    /**
     * The ids
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_string
     */
    public $ids;
    /**
     * The price
     * @var int
     */
    public $price;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The subtotal
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_long
     */
    public $subtotal;
    /**
     * The totalPrice
     * @var int
     */
    public $totalPrice;
    /**
     * The totalTime
     * @var int
     */
    public $totalTime;
    /**
     * The vat
     * @var int
     */
    public $vat;
    /**
     * Constructor method for ExtRepairtimeBasket
     * @uses ExtRepairtimeBasket::setCalculatedTimes()
     * @uses ExtRepairtimeBasket::setIds()
     * @uses ExtRepairtimeBasket::setPrice()
     * @uses ExtRepairtimeBasket::setStatus()
     * @uses ExtRepairtimeBasket::setSubtotal()
     * @uses ExtRepairtimeBasket::setTotalPrice()
     * @uses ExtRepairtimeBasket::setTotalTime()
     * @uses ExtRepairtimeBasket::setVat()
     * @param \ArrayType\ArrayOf_xsd_int $calculatedTimes
     * @param \ArrayType\ArrayOf_xsd_string $ids
     * @param int $price
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOf_xsd_long $subtotal
     * @param int $totalPrice
     * @param int $totalTime
     * @param int $vat
     */
    public function __construct(\ArrayType\ArrayOf_xsd_int $calculatedTimes = null, \ArrayType\ArrayOf_xsd_string $ids = null, $price = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOf_xsd_long $subtotal = null, $totalPrice = null, $totalTime = null, $vat = null)
    {
        $this
            ->setCalculatedTimes($calculatedTimes)
            ->setIds($ids)
            ->setPrice($price)
            ->setStatus($status)
            ->setSubtotal($subtotal)
            ->setTotalPrice($totalPrice)
            ->setTotalTime($totalTime)
            ->setVat($vat);
    }
    /**
     * Get calculatedTimes value
     * @return \ArrayType\ArrayOf_xsd_int|null
     */
    public function getCalculatedTimes()
    {
        return $this->calculatedTimes;
    }
    /**
     * Set calculatedTimes value
     * @param \ArrayType\ArrayOf_xsd_int $calculatedTimes
     * @return \StructType\ExtRepairtimeBasket
     */
    public function setCalculatedTimes(\ArrayType\ArrayOf_xsd_int $calculatedTimes = null)
    {
        $this->calculatedTimes = $calculatedTimes;
        return $this;
    }
    /**
     * Get ids value
     * @return \ArrayType\ArrayOf_xsd_string|null
     */
    public function getIds()
    {
        return $this->ids;
    }
    /**
     * Set ids value
     * @param \ArrayType\ArrayOf_xsd_string $ids
     * @return \StructType\ExtRepairtimeBasket
     */
    public function setIds(\ArrayType\ArrayOf_xsd_string $ids = null)
    {
        $this->ids = $ids;
        return $this;
    }
    /**
     * Get price value
     * @return int|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param int $price
     * @return \StructType\ExtRepairtimeBasket
     */
    public function setPrice($price = null)
    {
        // validation for constraint: int
        if (!is_null($price) && !(is_int($price) || ctype_digit($price))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
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
     * @return \StructType\ExtRepairtimeBasket
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get subtotal value
     * @return \ArrayType\ArrayOf_xsd_long|null
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }
    /**
     * Set subtotal value
     * @param \ArrayType\ArrayOf_xsd_long $subtotal
     * @return \StructType\ExtRepairtimeBasket
     */
    public function setSubtotal(\ArrayType\ArrayOf_xsd_long $subtotal = null)
    {
        $this->subtotal = $subtotal;
        return $this;
    }
    /**
     * Get totalPrice value
     * @return int|null
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param int $totalPrice
     * @return \StructType\ExtRepairtimeBasket
     */
    public function setTotalPrice($totalPrice = null)
    {
        // validation for constraint: int
        if (!is_null($totalPrice) && !(is_int($totalPrice) || ctype_digit($totalPrice))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        return $this;
    }
    /**
     * Get totalTime value
     * @return int|null
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }
    /**
     * Set totalTime value
     * @param int $totalTime
     * @return \StructType\ExtRepairtimeBasket
     */
    public function setTotalTime($totalTime = null)
    {
        // validation for constraint: int
        if (!is_null($totalTime) && !(is_int($totalTime) || ctype_digit($totalTime))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalTime, true), gettype($totalTime)), __LINE__);
        }
        $this->totalTime = $totalTime;
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
     * @return \StructType\ExtRepairtimeBasket
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
