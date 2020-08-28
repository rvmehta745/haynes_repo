<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getManagementFaultCodeResponse StructType
 * @subpackage Structs
 */
class GetManagementFaultCodeResponse extends AbstractStructBase
{
    /**
     * The getManagementFaultCodeReturn
     * @var \StructType\ExtManagementFaultCode
     */
    public $getManagementFaultCodeReturn;
    /**
     * Constructor method for getManagementFaultCodeResponse
     * @uses GetManagementFaultCodeResponse::setGetManagementFaultCodeReturn()
     * @param \StructType\ExtManagementFaultCode $getManagementFaultCodeReturn
     */
    public function __construct(\StructType\ExtManagementFaultCode $getManagementFaultCodeReturn = null)
    {
        $this
            ->setGetManagementFaultCodeReturn($getManagementFaultCodeReturn);
    }
    /**
     * Get getManagementFaultCodeReturn value
     * @return \StructType\ExtManagementFaultCode|null
     */
    public function getGetManagementFaultCodeReturn()
    {
        return $this->getManagementFaultCodeReturn;
    }
    /**
     * Set getManagementFaultCodeReturn value
     * @param \StructType\ExtManagementFaultCode $getManagementFaultCodeReturn
     * @return \StructType\GetManagementFaultCodeResponse
     */
    public function setGetManagementFaultCodeReturn(\StructType\ExtManagementFaultCode $getManagementFaultCodeReturn = null)
    {
        $this->getManagementFaultCodeReturn = $getManagementFaultCodeReturn;
        return $this;
    }
}
