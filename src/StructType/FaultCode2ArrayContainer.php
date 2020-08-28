<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaultCode2ArrayContainer StructType
 * @subpackage Structs
 */
class FaultCode2ArrayContainer extends AbstractStructBase
{
    /**
     * The faultCode2Array
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_FaultCode2
     */
    public $faultCode2Array;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for FaultCode2ArrayContainer
     * @uses FaultCode2ArrayContainer::setFaultCode2Array()
     * @uses FaultCode2ArrayContainer::setStatus()
     * @param \ArrayType\ArrayOf_tns2_FaultCode2 $faultCode2Array
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOf_tns2_FaultCode2 $faultCode2Array = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setFaultCode2Array($faultCode2Array)
            ->setStatus($status);
    }
    /**
     * Get faultCode2Array value
     * @return \ArrayType\ArrayOf_tns2_FaultCode2|null
     */
    public function getFaultCode2Array()
    {
        return $this->faultCode2Array;
    }
    /**
     * Set faultCode2Array value
     * @param \ArrayType\ArrayOf_tns2_FaultCode2 $faultCode2Array
     * @return \StructType\FaultCode2ArrayContainer
     */
    public function setFaultCode2Array(\ArrayType\ArrayOf_tns2_FaultCode2 $faultCode2Array = null)
    {
        $this->faultCode2Array = $faultCode2Array;
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
     * @return \StructType\FaultCode2ArrayContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
