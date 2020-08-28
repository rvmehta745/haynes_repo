<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAuthenticationVridResponse StructType
 * @subpackage Structs
 */
class GetAuthenticationVridResponse extends AbstractStructBase
{
    /**
     * The getAuthenticationVridReturn
     * @var \StructType\ExtAuthentication
     */
    public $getAuthenticationVridReturn;
    /**
     * Constructor method for getAuthenticationVridResponse
     * @uses GetAuthenticationVridResponse::setGetAuthenticationVridReturn()
     * @param \StructType\ExtAuthentication $getAuthenticationVridReturn
     */
    public function __construct(\StructType\ExtAuthentication $getAuthenticationVridReturn = null)
    {
        $this
            ->setGetAuthenticationVridReturn($getAuthenticationVridReturn);
    }
    /**
     * Get getAuthenticationVridReturn value
     * @return \StructType\ExtAuthentication|null
     */
    public function getGetAuthenticationVridReturn()
    {
        return $this->getAuthenticationVridReturn;
    }
    /**
     * Set getAuthenticationVridReturn value
     * @param \StructType\ExtAuthentication $getAuthenticationVridReturn
     * @return \StructType\GetAuthenticationVridResponse
     */
    public function setGetAuthenticationVridReturn(\StructType\ExtAuthentication $getAuthenticationVridReturn = null)
    {
        $this->getAuthenticationVridReturn = $getAuthenticationVridReturn;
        return $this;
    }
}
