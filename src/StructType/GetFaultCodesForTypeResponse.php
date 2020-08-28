<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFaultCodesForTypeResponse StructType
 * @subpackage Structs
 */
class GetFaultCodesForTypeResponse extends AbstractStructBase
{
    /**
     * The getFaultCodesForTypeReturn
     * @var \StructType\FaultCode2ArrayContainer
     */
    public $getFaultCodesForTypeReturn;
    /**
     * Constructor method for getFaultCodesForTypeResponse
     * @uses GetFaultCodesForTypeResponse::setGetFaultCodesForTypeReturn()
     * @param \StructType\FaultCode2ArrayContainer $getFaultCodesForTypeReturn
     */
    public function __construct(\StructType\FaultCode2ArrayContainer $getFaultCodesForTypeReturn = null)
    {
        $this
            ->setGetFaultCodesForTypeReturn($getFaultCodesForTypeReturn);
    }
    /**
     * Get getFaultCodesForTypeReturn value
     * @return \StructType\FaultCode2ArrayContainer|null
     */
    public function getGetFaultCodesForTypeReturn()
    {
        return $this->getFaultCodesForTypeReturn;
    }
    /**
     * Set getFaultCodesForTypeReturn value
     * @param \StructType\FaultCode2ArrayContainer $getFaultCodesForTypeReturn
     * @return \StructType\GetFaultCodesForTypeResponse
     */
    public function setGetFaultCodesForTypeReturn(\StructType\FaultCode2ArrayContainer $getFaultCodesForTypeReturn = null)
    {
        $this->getFaultCodesForTypeReturn = $getFaultCodesForTypeReturn;
        return $this;
    }
}
