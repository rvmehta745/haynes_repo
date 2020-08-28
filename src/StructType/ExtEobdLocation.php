<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtEobdLocation StructType
 * @subpackage Structs
 */
class ExtEobdLocation extends AbstractStructBase
{
    /**
     * The location
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $location;
    /**
     * The mimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mimeDataName;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $order;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtEobdLocation
     * @uses ExtEobdLocation::setLocation()
     * @uses ExtEobdLocation::setMimeDataName()
     * @uses ExtEobdLocation::setOrder()
     * @uses ExtEobdLocation::setStatus()
     * @param string $location
     * @param string $mimeDataName
     * @param int $order
     * @param \StructType\ExtStatus $status
     */
    public function __construct($location = null, $mimeDataName = null, $order = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setLocation($location)
            ->setMimeDataName($mimeDataName)
            ->setOrder($order)
            ->setStatus($status);
    }
    /**
     * Get location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param string $location
     * @return \StructType\ExtEobdLocation
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->location = $location;
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
     * @return \StructType\ExtEobdLocation
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
     * @return \StructType\ExtEobdLocation
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
     * @return \StructType\ExtEobdLocation
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
