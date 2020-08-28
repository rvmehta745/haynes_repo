<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLocationSystemV2Response StructType
 * @subpackage Structs
 */
class GetLocationSystemV2Response extends AbstractStructBase
{
    /**
     * The getLocationSystemV2Return
     * @var \StructType\ExtLocationSystemArrayContainerV2
     */
    public $getLocationSystemV2Return;
    /**
     * Constructor method for getLocationSystemV2Response
     * @uses GetLocationSystemV2Response::setGetLocationSystemV2Return()
     * @param \StructType\ExtLocationSystemArrayContainerV2 $getLocationSystemV2Return
     */
    public function __construct(\StructType\ExtLocationSystemArrayContainerV2 $getLocationSystemV2Return = null)
    {
        $this
            ->setGetLocationSystemV2Return($getLocationSystemV2Return);
    }
    /**
     * Get getLocationSystemV2Return value
     * @return \StructType\ExtLocationSystemArrayContainerV2|null
     */
    public function getGetLocationSystemV2Return()
    {
        return $this->getLocationSystemV2Return;
    }
    /**
     * Set getLocationSystemV2Return value
     * @param \StructType\ExtLocationSystemArrayContainerV2 $getLocationSystemV2Return
     * @return \StructType\GetLocationSystemV2Response
     */
    public function setGetLocationSystemV2Return(\StructType\ExtLocationSystemArrayContainerV2 $getLocationSystemV2Return = null)
    {
        $this->getLocationSystemV2Return = $getLocationSystemV2Return;
        return $this;
    }
}
