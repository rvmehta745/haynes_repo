<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeInfosV2Response StructType
 * @subpackage Structs
 */
class GetRepairtimeInfosV2Response extends AbstractStructBase
{
    /**
     * The getRepairtimeInfosV2Return
     * @var \StructType\ExtRepairtimeInfoGroupV2
     */
    public $getRepairtimeInfosV2Return;
    /**
     * Constructor method for getRepairtimeInfosV2Response
     * @uses GetRepairtimeInfosV2Response::setGetRepairtimeInfosV2Return()
     * @param \StructType\ExtRepairtimeInfoGroupV2 $getRepairtimeInfosV2Return
     */
    public function __construct(\StructType\ExtRepairtimeInfoGroupV2 $getRepairtimeInfosV2Return = null)
    {
        $this
            ->setGetRepairtimeInfosV2Return($getRepairtimeInfosV2Return);
    }
    /**
     * Get getRepairtimeInfosV2Return value
     * @return \StructType\ExtRepairtimeInfoGroupV2|null
     */
    public function getGetRepairtimeInfosV2Return()
    {
        return $this->getRepairtimeInfosV2Return;
    }
    /**
     * Set getRepairtimeInfosV2Return value
     * @param \StructType\ExtRepairtimeInfoGroupV2 $getRepairtimeInfosV2Return
     * @return \StructType\GetRepairtimeInfosV2Response
     */
    public function setGetRepairtimeInfosV2Return(\StructType\ExtRepairtimeInfoGroupV2 $getRepairtimeInfosV2Return = null)
    {
        $this->getRepairtimeInfosV2Return = $getRepairtimeInfosV2Return;
        return $this;
    }
}
