<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaultCode3ArrayContainer StructType
 * @subpackage Structs
 */
class FaultCode3ArrayContainer extends AbstractStructBase
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
     * Constructor method for FaultCode3ArrayContainer
     * @uses FaultCode3ArrayContainer::setFaultCode3Array()
     * @uses FaultCode3ArrayContainer::setStatus()
     * @param \ArrayType\ArrayOf_tns2_FaultCode3 $faultCode3Array
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOf_tns2_FaultCode3 $faultCode3Array = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setFaultCode3Array($faultCode3Array)
            ->setStatus($status);
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
     * @return \StructType\FaultCode3ArrayContainer
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
     * @return \StructType\FaultCode3ArrayContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
