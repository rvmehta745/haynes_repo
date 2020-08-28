<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFaultCode2ForIdResponse StructType
 * @subpackage Structs
 */
class GetFaultCode2ForIdResponse extends AbstractStructBase
{
    /**
     * The getFaultCode2ForIdReturn
     * @var \StructType\FaultCode2Container
     */
    public $getFaultCode2ForIdReturn;
    /**
     * Constructor method for getFaultCode2ForIdResponse
     * @uses GetFaultCode2ForIdResponse::setGetFaultCode2ForIdReturn()
     * @param \StructType\FaultCode2Container $getFaultCode2ForIdReturn
     */
    public function __construct(\StructType\FaultCode2Container $getFaultCode2ForIdReturn = null)
    {
        $this
            ->setGetFaultCode2ForIdReturn($getFaultCode2ForIdReturn);
    }
    /**
     * Get getFaultCode2ForIdReturn value
     * @return \StructType\FaultCode2Container|null
     */
    public function getGetFaultCode2ForIdReturn()
    {
        return $this->getFaultCode2ForIdReturn;
    }
    /**
     * Set getFaultCode2ForIdReturn value
     * @param \StructType\FaultCode2Container $getFaultCode2ForIdReturn
     * @return \StructType\GetFaultCode2ForIdResponse
     */
    public function setGetFaultCode2ForIdReturn(\StructType\FaultCode2Container $getFaultCode2ForIdReturn = null)
    {
        $this->getFaultCode2ForIdReturn = $getFaultCode2ForIdReturn;
        return $this;
    }
}
