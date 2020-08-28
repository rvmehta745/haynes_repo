<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getNetworksResponse StructType
 * @subpackage Structs
 */
class GetNetworksResponse extends AbstractStructBase
{
    /**
     * The getNetworksReturn
     * @var \StructType\NetworkArrayContainer
     */
    public $getNetworksReturn;
    /**
     * Constructor method for getNetworksResponse
     * @uses GetNetworksResponse::setGetNetworksReturn()
     * @param \StructType\NetworkArrayContainer $getNetworksReturn
     */
    public function __construct(\StructType\NetworkArrayContainer $getNetworksReturn = null)
    {
        $this
            ->setGetNetworksReturn($getNetworksReturn);
    }
    /**
     * Get getNetworksReturn value
     * @return \StructType\NetworkArrayContainer|null
     */
    public function getGetNetworksReturn()
    {
        return $this->getNetworksReturn;
    }
    /**
     * Set getNetworksReturn value
     * @param \StructType\NetworkArrayContainer $getNetworksReturn
     * @return \StructType\GetNetworksResponse
     */
    public function setGetNetworksReturn(\StructType\NetworkArrayContainer $getNetworksReturn = null)
    {
        $this->getNetworksReturn = $getNetworksReturn;
        return $this;
    }
}
