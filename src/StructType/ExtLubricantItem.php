<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtLubricantItem StructType
 * @subpackage Structs
 */
class ExtLubricantItem extends AbstractStructBase
{
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
     * The quality
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $quality;
    /**
     * The temperature
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $temperature;
    /**
     * The viscosity
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $viscosity;
    /**
     * Constructor method for ExtLubricantItem
     * @uses ExtLubricantItem::setName()
     * @uses ExtLubricantItem::setOrder()
     * @uses ExtLubricantItem::setQuality()
     * @uses ExtLubricantItem::setTemperature()
     * @uses ExtLubricantItem::setViscosity()
     * @param string $name
     * @param int $order
     * @param string $quality
     * @param string $temperature
     * @param string $viscosity
     */
    public function __construct($name = null, $order = null, $quality = null, $temperature = null, $viscosity = null)
    {
        $this
            ->setName($name)
            ->setOrder($order)
            ->setQuality($quality)
            ->setTemperature($temperature)
            ->setViscosity($viscosity);
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
     * @return \StructType\ExtLubricantItem
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
     * @return \StructType\ExtLubricantItem
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
     * Get quality value
     * @return string|null
     */
    public function getQuality()
    {
        return $this->quality;
    }
    /**
     * Set quality value
     * @param string $quality
     * @return \StructType\ExtLubricantItem
     */
    public function setQuality($quality = null)
    {
        // validation for constraint: string
        if (!is_null($quality) && !is_string($quality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quality, true), gettype($quality)), __LINE__);
        }
        $this->quality = $quality;
        return $this;
    }
    /**
     * Get temperature value
     * @return string|null
     */
    public function getTemperature()
    {
        return $this->temperature;
    }
    /**
     * Set temperature value
     * @param string $temperature
     * @return \StructType\ExtLubricantItem
     */
    public function setTemperature($temperature = null)
    {
        // validation for constraint: string
        if (!is_null($temperature) && !is_string($temperature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($temperature, true), gettype($temperature)), __LINE__);
        }
        $this->temperature = $temperature;
        return $this;
    }
    /**
     * Get viscosity value
     * @return string|null
     */
    public function getViscosity()
    {
        return $this->viscosity;
    }
    /**
     * Set viscosity value
     * @param string $viscosity
     * @return \StructType\ExtLubricantItem
     */
    public function setViscosity($viscosity = null)
    {
        // validation for constraint: string
        if (!is_null($viscosity) && !is_string($viscosity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($viscosity, true), gettype($viscosity)), __LINE__);
        }
        $this->viscosity = $viscosity;
        return $this;
    }
}
