<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLocationSystemResponse StructType
 * @subpackage Structs
 */
class GetLocationSystemResponse extends AbstractStructBase
{
    /**
     * The getLocationSystemReturn
     * @var \StructType\ExtLocationSystemArrayContainer
     */
    public $getLocationSystemReturn;
    /**
     * Constructor method for getLocationSystemResponse
     * @uses GetLocationSystemResponse::setGetLocationSystemReturn()
     * @param \StructType\ExtLocationSystemArrayContainer $getLocationSystemReturn
     */
    public function __construct(\StructType\ExtLocationSystemArrayContainer $getLocationSystemReturn = null)
    {
        $this
            ->setGetLocationSystemReturn($getLocationSystemReturn);
    }
    /**
     * Get getLocationSystemReturn value
     * @return \StructType\ExtLocationSystemArrayContainer|null
     */
    public function getGetLocationSystemReturn()
    {
        return $this->getLocationSystemReturn;
    }
    /**
     * Set getLocationSystemReturn value
     * @param \StructType\ExtLocationSystemArrayContainer $getLocationSystemReturn
     * @return \StructType\GetLocationSystemResponse
     */
    public function setGetLocationSystemReturn(\StructType\ExtLocationSystemArrayContainer $getLocationSystemReturn = null)
    {
        $this->getLocationSystemReturn = $getLocationSystemReturn;
        return $this;
    }
}
