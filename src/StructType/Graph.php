<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Graph StructType
 * @subpackage Structs
 */
class Graph extends AbstractStructBase
{
    /**
     * The points
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_Point
     */
    public $points;
    /**
     * The xaxis
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $xaxis;
    /**
     * The yaxis
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $yaxis;
    /**
     * Constructor method for Graph
     * @uses Graph::setPoints()
     * @uses Graph::setXaxis()
     * @uses Graph::setYaxis()
     * @param \ArrayType\ArrayOf_tns2_Point $points
     * @param string $xaxis
     * @param string $yaxis
     */
    public function __construct(\ArrayType\ArrayOf_tns2_Point $points = null, $xaxis = null, $yaxis = null)
    {
        $this
            ->setPoints($points)
            ->setXaxis($xaxis)
            ->setYaxis($yaxis);
    }
    /**
     * Get points value
     * @return \ArrayType\ArrayOf_tns2_Point|null
     */
    public function getPoints()
    {
        return $this->points;
    }
    /**
     * Set points value
     * @param \ArrayType\ArrayOf_tns2_Point $points
     * @return \StructType\Graph
     */
    public function setPoints(\ArrayType\ArrayOf_tns2_Point $points = null)
    {
        $this->points = $points;
        return $this;
    }
    /**
     * Get xaxis value
     * @return string|null
     */
    public function getXaxis()
    {
        return $this->xaxis;
    }
    /**
     * Set xaxis value
     * @param string $xaxis
     * @return \StructType\Graph
     */
    public function setXaxis($xaxis = null)
    {
        // validation for constraint: string
        if (!is_null($xaxis) && !is_string($xaxis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xaxis, true), gettype($xaxis)), __LINE__);
        }
        $this->xaxis = $xaxis;
        return $this;
    }
    /**
     * Get yaxis value
     * @return string|null
     */
    public function getYaxis()
    {
        return $this->yaxis;
    }
    /**
     * Set yaxis value
     * @param string $yaxis
     * @return \StructType\Graph
     */
    public function setYaxis($yaxis = null)
    {
        // validation for constraint: string
        if (!is_null($yaxis) && !is_string($yaxis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($yaxis, true), gettype($yaxis)), __LINE__);
        }
        $this->yaxis = $yaxis;
        return $this;
    }
}
