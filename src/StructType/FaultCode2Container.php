<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaultCode2Container StructType
 * @subpackage Structs
 */
class FaultCode2Container extends AbstractStructBase
{
    /**
     * The faultCode2
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\FaultCode2
     */
    public $faultCode2;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for FaultCode2Container
     * @uses FaultCode2Container::setFaultCode2()
     * @uses FaultCode2Container::setStatus()
     * @param \StructType\FaultCode2 $faultCode2
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\StructType\FaultCode2 $faultCode2 = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setFaultCode2($faultCode2)
            ->setStatus($status);
    }
    /**
     * Get faultCode2 value
     * @return \StructType\FaultCode2|null
     */
    public function getFaultCode2()
    {
        return $this->faultCode2;
    }
    /**
     * Set faultCode2 value
     * @param \StructType\FaultCode2 $faultCode2
     * @return \StructType\FaultCode2Container
     */
    public function setFaultCode2(\StructType\FaultCode2 $faultCode2 = null)
    {
        $this->faultCode2 = $faultCode2;
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
     * @return \StructType\FaultCode2Container
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
