<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeInfosResponse StructType
 * @subpackage Structs
 */
class GetRepairtimeInfosResponse extends AbstractStructBase
{
    /**
     * The getRepairtimeInfosReturn
     * @var \StructType\ExtRepairtimeInfoGroup
     */
    public $getRepairtimeInfosReturn;
    /**
     * Constructor method for getRepairtimeInfosResponse
     * @uses GetRepairtimeInfosResponse::setGetRepairtimeInfosReturn()
     * @param \StructType\ExtRepairtimeInfoGroup $getRepairtimeInfosReturn
     */
    public function __construct(\StructType\ExtRepairtimeInfoGroup $getRepairtimeInfosReturn = null)
    {
        $this
            ->setGetRepairtimeInfosReturn($getRepairtimeInfosReturn);
    }
    /**
     * Get getRepairtimeInfosReturn value
     * @return \StructType\ExtRepairtimeInfoGroup|null
     */
    public function getGetRepairtimeInfosReturn()
    {
        return $this->getRepairtimeInfosReturn;
    }
    /**
     * Set getRepairtimeInfosReturn value
     * @param \StructType\ExtRepairtimeInfoGroup $getRepairtimeInfosReturn
     * @return \StructType\GetRepairtimeInfosResponse
     */
    public function setGetRepairtimeInfosReturn(\StructType\ExtRepairtimeInfoGroup $getRepairtimeInfosReturn = null)
    {
        $this->getRepairtimeInfosReturn = $getRepairtimeInfosReturn;
        return $this;
    }
}
