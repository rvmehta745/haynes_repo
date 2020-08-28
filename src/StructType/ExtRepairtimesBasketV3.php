<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtRepairtimesBasketV3 StructType
 * @subpackage Structs
 */
class ExtRepairtimesBasketV3 extends AbstractStructBase
{
    /**
     * The basketItems
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimesBasketItemV3
     */
    public $basketItems;
    /**
     * The repairPriceWithoutVat
     * @var int
     */
    public $repairPriceWithoutVat;
    /**
     * The repairTasksVat
     * @var int
     */
    public $repairTasksVat;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The totalRepairPrice
     * @var int
     */
    public $totalRepairPrice;
    /**
     * The totalRepairTime
     * @var int
     */
    public $totalRepairTime;
    /**
     * Constructor method for ExtRepairtimesBasketV3
     * @uses ExtRepairtimesBasketV3::setBasketItems()
     * @uses ExtRepairtimesBasketV3::setRepairPriceWithoutVat()
     * @uses ExtRepairtimesBasketV3::setRepairTasksVat()
     * @uses ExtRepairtimesBasketV3::setStatus()
     * @uses ExtRepairtimesBasketV3::setTotalRepairPrice()
     * @uses ExtRepairtimesBasketV3::setTotalRepairTime()
     * @param \ArrayType\ArrayOfExtRepairtimesBasketItemV3 $basketItems
     * @param int $repairPriceWithoutVat
     * @param int $repairTasksVat
     * @param \StructType\ExtStatus $status
     * @param int $totalRepairPrice
     * @param int $totalRepairTime
     */
    public function __construct(\ArrayType\ArrayOfExtRepairtimesBasketItemV3 $basketItems = null, $repairPriceWithoutVat = null, $repairTasksVat = null, \StructType\ExtStatus $status = null, $totalRepairPrice = null, $totalRepairTime = null)
    {
        $this
            ->setBasketItems($basketItems)
            ->setRepairPriceWithoutVat($repairPriceWithoutVat)
            ->setRepairTasksVat($repairTasksVat)
            ->setStatus($status)
            ->setTotalRepairPrice($totalRepairPrice)
            ->setTotalRepairTime($totalRepairTime);
    }
    /**
     * Get basketItems value
     * @return \ArrayType\ArrayOfExtRepairtimesBasketItemV3|null
     */
    public function getBasketItems()
    {
        return $this->basketItems;
    }
    /**
     * Set basketItems value
     * @param \ArrayType\ArrayOfExtRepairtimesBasketItemV3 $basketItems
     * @return \StructType\ExtRepairtimesBasketV3
     */
    public function setBasketItems(\ArrayType\ArrayOfExtRepairtimesBasketItemV3 $basketItems = null)
    {
        $this->basketItems = $basketItems;
        return $this;
    }
    /**
     * Get repairPriceWithoutVat value
     * @return int|null
     */
    public function getRepairPriceWithoutVat()
    {
        return $this->repairPriceWithoutVat;
    }
    /**
     * Set repairPriceWithoutVat value
     * @param int $repairPriceWithoutVat
     * @return \StructType\ExtRepairtimesBasketV3
     */
    public function setRepairPriceWithoutVat($repairPriceWithoutVat = null)
    {
        // validation for constraint: int
        if (!is_null($repairPriceWithoutVat) && !(is_int($repairPriceWithoutVat) || ctype_digit($repairPriceWithoutVat))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repairPriceWithoutVat, true), gettype($repairPriceWithoutVat)), __LINE__);
        }
        $this->repairPriceWithoutVat = $repairPriceWithoutVat;
        return $this;
    }
    /**
     * Get repairTasksVat value
     * @return int|null
     */
    public function getRepairTasksVat()
    {
        return $this->repairTasksVat;
    }
    /**
     * Set repairTasksVat value
     * @param int $repairTasksVat
     * @return \StructType\ExtRepairtimesBasketV3
     */
    public function setRepairTasksVat($repairTasksVat = null)
    {
        // validation for constraint: int
        if (!is_null($repairTasksVat) && !(is_int($repairTasksVat) || ctype_digit($repairTasksVat))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repairTasksVat, true), gettype($repairTasksVat)), __LINE__);
        }
        $this->repairTasksVat = $repairTasksVat;
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
     * @return \StructType\ExtRepairtimesBasketV3
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get totalRepairPrice value
     * @return int|null
     */
    public function getTotalRepairPrice()
    {
        return $this->totalRepairPrice;
    }
    /**
     * Set totalRepairPrice value
     * @param int $totalRepairPrice
     * @return \StructType\ExtRepairtimesBasketV3
     */
    public function setTotalRepairPrice($totalRepairPrice = null)
    {
        // validation for constraint: int
        if (!is_null($totalRepairPrice) && !(is_int($totalRepairPrice) || ctype_digit($totalRepairPrice))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalRepairPrice, true), gettype($totalRepairPrice)), __LINE__);
        }
        $this->totalRepairPrice = $totalRepairPrice;
        return $this;
    }
    /**
     * Get totalRepairTime value
     * @return int|null
     */
    public function getTotalRepairTime()
    {
        return $this->totalRepairTime;
    }
    /**
     * Set totalRepairTime value
     * @param int $totalRepairTime
     * @return \StructType\ExtRepairtimesBasketV3
     */
    public function setTotalRepairTime($totalRepairTime = null)
    {
        // validation for constraint: int
        if (!is_null($totalRepairTime) && !(is_int($totalRepairTime) || ctype_digit($totalRepairTime))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalRepairTime, true), gettype($totalRepairTime)), __LINE__);
        }
        $this->totalRepairTime = $totalRepairTime;
        return $this;
    }
}
