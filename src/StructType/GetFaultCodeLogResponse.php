<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFaultCodeLogResponse StructType
 * @subpackage Structs
 */
class GetFaultCodeLogResponse extends AbstractStructBase
{
    /**
     * The getFaultCodeLogReturn
     * @var \StructType\FaultCode2ArrayContainer
     */
    public $getFaultCodeLogReturn;
    /**
     * Constructor method for getFaultCodeLogResponse
     * @uses GetFaultCodeLogResponse::setGetFaultCodeLogReturn()
     * @param \StructType\FaultCode2ArrayContainer $getFaultCodeLogReturn
     */
    public function __construct(\StructType\FaultCode2ArrayContainer $getFaultCodeLogReturn = null)
    {
        $this
            ->setGetFaultCodeLogReturn($getFaultCodeLogReturn);
    }
    /**
     * Get getFaultCodeLogReturn value
     * @return \StructType\FaultCode2ArrayContainer|null
     */
    public function getGetFaultCodeLogReturn()
    {
        return $this->getFaultCodeLogReturn;
    }
    /**
     * Set getFaultCodeLogReturn value
     * @param \StructType\FaultCode2ArrayContainer $getFaultCodeLogReturn
     * @return \StructType\GetFaultCodeLogResponse
     */
    public function setGetFaultCodeLogReturn(\StructType\FaultCode2ArrayContainer $getFaultCodeLogReturn = null)
    {
        $this->getFaultCodeLogReturn = $getFaultCodeLogReturn;
        return $this;
    }
}
