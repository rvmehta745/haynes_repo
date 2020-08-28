<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaultCode4ArrayContainer StructType
 * @subpackage Structs
 */
class FaultCode4ArrayContainer extends AbstractStructBase
{
    /**
     * The faultCode3Array
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_FaultCode3
     */
    public $faultCode3Array;
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
     * Constructor method for FaultCode4ArrayContainer
     * @uses FaultCode4ArrayContainer::setFaultCode3Array()
     * @uses FaultCode4ArrayContainer::setStatus()
     * @uses FaultCode4ArrayContainer::setTsbArrayContainer()
     * @param \ArrayType\ArrayOf_tns2_FaultCode3 $faultCode3Array
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOf_tns1_TSBArrayContainer $tsbArrayContainer
     */
    public function __construct(\ArrayType\ArrayOf_tns2_FaultCode3 $faultCode3Array = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOf_tns1_TSBArrayContainer $tsbArrayContainer = null)
    {
        $this
            ->setFaultCode3Array($faultCode3Array)
            ->setStatus($status)
            ->setTsbArrayContainer($tsbArrayContainer);
    }
    /**
     * Get faultCode3Array value
     * @return \ArrayType\ArrayOf_tns2_FaultCode3|null
     */
    public function getFaultCode3Array()
    {
        return $this->faultCode3Array;
    }
    /**
     * Set faultCode3Array value
     * @param \ArrayType\ArrayOf_tns2_FaultCode3 $faultCode3Array
     * @return \StructType\FaultCode4ArrayContainer
     */
    public function setFaultCode3Array(\ArrayType\ArrayOf_tns2_FaultCode3 $faultCode3Array = null)
    {
        $this->faultCode3Array = $faultCode3Array;
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
     * @return \StructType\FaultCode4ArrayContainer
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
     * @return \StructType\FaultCode4ArrayContainer
     */
    public function setTsbArrayContainer(\ArrayType\ArrayOf_tns1_TSBArrayContainer $tsbArrayContainer = null)
    {
        $this->tsbArrayContainer = $tsbArrayContainer;
        return $this;
    }
}
