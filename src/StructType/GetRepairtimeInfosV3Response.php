<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeInfosV3Response StructType
 * @subpackage Structs
 */
class GetRepairtimeInfosV3Response extends AbstractStructBase
{
    /**
     * The getRepairtimeInfosV3Return
     * @var \StructType\ExtRepairtimeInfoGroupV3
     */
    public $getRepairtimeInfosV3Return;
    /**
     * Constructor method for getRepairtimeInfosV3Response
     * @uses GetRepairtimeInfosV3Response::setGetRepairtimeInfosV3Return()
     * @param \StructType\ExtRepairtimeInfoGroupV3 $getRepairtimeInfosV3Return
     */
    public function __construct(\StructType\ExtRepairtimeInfoGroupV3 $getRepairtimeInfosV3Return = null)
    {
        $this
            ->setGetRepairtimeInfosV3Return($getRepairtimeInfosV3Return);
    }
    /**
     * Get getRepairtimeInfosV3Return value
     * @return \StructType\ExtRepairtimeInfoGroupV3|null
     */
    public function getGetRepairtimeInfosV3Return()
    {
        return $this->getRepairtimeInfosV3Return;
    }
    /**
     * Set getRepairtimeInfosV3Return value
     * @param \StructType\ExtRepairtimeInfoGroupV3 $getRepairtimeInfosV3Return
     * @return \StructType\GetRepairtimeInfosV3Response
     */
    public function setGetRepairtimeInfosV3Return(\StructType\ExtRepairtimeInfoGroupV3 $getRepairtimeInfosV3Return = null)
    {
        $this->getRepairtimeInfosV3Return = $getRepairtimeInfosV3Return;
        return $this;
    }
}
