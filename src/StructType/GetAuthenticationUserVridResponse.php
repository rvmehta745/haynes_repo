<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAuthenticationUserVridResponse StructType
 * @subpackage Structs
 */
class GetAuthenticationUserVridResponse extends AbstractStructBase
{
    /**
     * The getAuthenticationUserVridReturn
     * @var \StructType\ExtAuthentication
     */
    public $getAuthenticationUserVridReturn;
    /**
     * Constructor method for getAuthenticationUserVridResponse
     * @uses GetAuthenticationUserVridResponse::setGetAuthenticationUserVridReturn()
     * @param \StructType\ExtAuthentication $getAuthenticationUserVridReturn
     */
    public function __construct(\StructType\ExtAuthentication $getAuthenticationUserVridReturn = null)
    {
        $this
            ->setGetAuthenticationUserVridReturn($getAuthenticationUserVridReturn);
    }
    /**
     * Get getAuthenticationUserVridReturn value
     * @return \StructType\ExtAuthentication|null
     */
    public function getGetAuthenticationUserVridReturn()
    {
        return $this->getAuthenticationUserVridReturn;
    }
    /**
     * Set getAuthenticationUserVridReturn value
     * @param \StructType\ExtAuthentication $getAuthenticationUserVridReturn
     * @return \StructType\GetAuthenticationUserVridResponse
     */
    public function setGetAuthenticationUserVridReturn(\StructType\ExtAuthentication $getAuthenticationUserVridReturn = null)
    {
        $this->getAuthenticationUserVridReturn = $getAuthenticationUserVridReturn;
        return $this;
    }
}
