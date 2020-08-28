<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAuthenticationDetailsResponse StructType
 * @subpackage Structs
 */
class GetAuthenticationDetailsResponse extends AbstractStructBase
{
    /**
     * The getAuthenticationDetailsReturn
     * @var \StructType\ExtAuthenticationDetails
     */
    public $getAuthenticationDetailsReturn;
    /**
     * Constructor method for getAuthenticationDetailsResponse
     * @uses GetAuthenticationDetailsResponse::setGetAuthenticationDetailsReturn()
     * @param \StructType\ExtAuthenticationDetails $getAuthenticationDetailsReturn
     */
    public function __construct(\StructType\ExtAuthenticationDetails $getAuthenticationDetailsReturn = null)
    {
        $this
            ->setGetAuthenticationDetailsReturn($getAuthenticationDetailsReturn);
    }
    /**
     * Get getAuthenticationDetailsReturn value
     * @return \StructType\ExtAuthenticationDetails|null
     */
    public function getGetAuthenticationDetailsReturn()
    {
        return $this->getAuthenticationDetailsReturn;
    }
    /**
     * Set getAuthenticationDetailsReturn value
     * @param \StructType\ExtAuthenticationDetails $getAuthenticationDetailsReturn
     * @return \StructType\GetAuthenticationDetailsResponse
     */
    public function setGetAuthenticationDetailsReturn(\StructType\ExtAuthenticationDetails $getAuthenticationDetailsReturn = null)
    {
        $this->getAuthenticationDetailsReturn = $getAuthenticationDetailsReturn;
        return $this;
    }
}
