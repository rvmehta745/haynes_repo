<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaultCode5ArrayContainer StructType
 * @subpackage Structs
 */
class FaultCode5ArrayContainer extends AbstractStructBase
{
    /**
     * The faultCode4Array
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_FaultCode4
     */
    public $faultCode4Array;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The tsbArrayContainer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns1_TSBArrayContainer
     */
    public $tsbArrayContainer;
    /**
     * Constructor method for FaultCode5ArrayContainer
     * @uses FaultCode5ArrayContainer::setFaultCode4Array()
     * @uses FaultCode5ArrayContainer::setStatus()
     * @uses FaultCode5ArrayContainer::setTsbArrayContainer()
     * @param \ArrayType\ArrayOf_tns2_FaultCode4 $faultCode4Array
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOf_tns1_TSBArrayContainer $tsbArrayContainer
     */
    public function __construct(\ArrayType\ArrayOf_tns2_FaultCode4 $faultCode4Array = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOf_tns1_TSBArrayContainer $tsbArrayContainer = null)
    {
        $this
            ->setFaultCode4Array($faultCode4Array)
            ->setStatus($status)
            ->setTsbArrayContainer($tsbArrayContainer);
    }
    /**
     * Get faultCode4Array value
     * @return \ArrayType\ArrayOf_tns2_FaultCode4|null
     */
    public function getFaultCode4Array()
    {
        return $this->faultCode4Array;
    }
    /**
     * Set faultCode4Array value
     * @param \ArrayType\ArrayOf_tns2_FaultCode4 $faultCode4Array
     * @return \StructType\FaultCode5ArrayContainer
     */
    public function setFaultCode4Array(\ArrayType\ArrayOf_tns2_FaultCode4 $faultCode4Array = null)
    {
        $this->faultCode4Array = $faultCode4Array;
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
     * @return \StructType\FaultCode5ArrayContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get tsbArrayContainer value
     * @return \ArrayType\ArrayOf_tns1_TSBArrayContainer|null
     */
    public function getTsbArrayContainer()
    {
        return $this->tsbArrayContainer;
    }
    /**
     * Set tsbArrayContainer value
     * @param \ArrayType\ArrayOf_tns1_TSBArrayContainer $tsbArrayContainer
     * @return \StructType\FaultCode5ArrayContainer
     */
    public function setTsbArrayContainer(\ArrayType\ArrayOf_tns1_TSBArrayContainer $tsbArrayContainer = null)
    {
        $this->tsbArrayContainer = $tsbArrayContainer;
        return $this;
    }
}
