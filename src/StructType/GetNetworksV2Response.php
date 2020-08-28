<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getNetworksV2Response StructType
 * @subpackage Structs
 */
class GetNetworksV2Response extends AbstractStructBase
{
    /**
     * The getNetworksV2Return
     * @var \StructType\NetworkArrayContainerV2
     */
    public $getNetworksV2Return;
    /**
     * Constructor method for getNetworksV2Response
     * @uses GetNetworksV2Response::setGetNetworksV2Return()
     * @param \StructType\NetworkArrayContainerV2 $getNetworksV2Return
     */
    public function __construct(\StructType\NetworkArrayContainerV2 $getNetworksV2Return = null)
    {
        $this
            ->setGetNetworksV2Return($getNetworksV2Return);
    }
    /**
     * Get getNetworksV2Return value
     * @return \StructType\NetworkArrayContainerV2|null
     */
    public function getGetNetworksV2Return()
    {
        return $this->getNetworksV2Return;
    }
    /**
     * Set getNetworksV2Return value
     * @param \StructType\NetworkArrayContainerV2 $getNetworksV2Return
     * @return \StructType\GetNetworksV2Response
     */
    public function setGetNetworksV2Return(\StructType\NetworkArrayContainerV2 $getNetworksV2Return = null)
    {
        $this->getNetworksV2Return = $getNetworksV2Return;
        return $this;
    }
}
