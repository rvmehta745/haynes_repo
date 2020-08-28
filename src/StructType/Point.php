<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Point StructType
 * @subpackage Structs
 */
class Point extends AbstractStructBase
{
    /**
     * The xvalue
     * @var float
     */
    public $xvalue;
    /**
     * The ymaxvalue
     * @var float
     */
    public $ymaxvalue;
    /**
     * The yminvalue
     * @var float
     */
    public $yminvalue;
    /**
     * Constructor method for Point
     * @uses Point::setXvalue()
     * @uses Point::setYmaxvalue()
     * @uses Point::setYminvalue()
     * @param float $xvalue
     * @param float $ymaxvalue
     * @param float $yminvalue
     */
    public function __construct($xvalue = null, $ymaxvalue = null, $yminvalue = null)
    {
        $this
            ->setXvalue($xvalue)
            ->setYmaxvalue($ymaxvalue)
            ->setYminvalue($yminvalue);
    }
    /**
     * Get xvalue value
     * @return float|null
     */
    public function getXvalue()
    {
        return $this->xvalue;
    }
    /**
     * Set xvalue value
     * @param float $xvalue
     * @return \StructType\Point
     */
    public function setXvalue($xvalue = null)
    {
        // validation for constraint: float
        if (!is_null($xvalue) && !(is_float($xvalue) || is_numeric($xvalue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($xvalue, true), gettype($xvalue)), __LINE__);
        }
        $this->xvalue = $xvalue;
        return $this;
    }
    /**
     * Get ymaxvalue value
     * @return float|null
     */
    public function getYmaxvalue()
    {
        return $this->ymaxvalue;
    }
    /**
     * Set ymaxvalue value
     * @param float $ymaxvalue
     * @return \StructType\Point
     */
    public function setYmaxvalue($ymaxvalue = null)
    {
        // validation for constraint: float
        if (!is_null($ymaxvalue) && !(is_float($ymaxvalue) || is_numeric($ymaxvalue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ymaxvalue, true), gettype($ymaxvalue)), __LINE__);
        }
        $this->ymaxvalue = $ymaxvalue;
        return $this;
    }
    /**
     * Get yminvalue value
     * @return float|null
     */
    public function getYminvalue()
    {
        return $this->yminvalue;
    }
    /**
     * Set yminvalue value
     * @param float $yminvalue
     * @return \StructType\Point
     */
    public function setYminvalue($yminvalue = null)
    {
        // validation for constraint: float
        if (!is_null($yminvalue) && !(is_float($yminvalue) || is_numeric($yminvalue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($yminvalue, true), gettype($yminvalue)), __LINE__);
        }
        $this->yminvalue = $yminvalue;
        return $this;
    }
}
