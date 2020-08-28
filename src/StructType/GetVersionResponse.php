<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getVersionResponse StructType
 * @subpackage Structs
 */
class GetVersionResponse extends AbstractStructBase
{
    /**
     * The getVersionReturn
     * @var \StructType\ExtVersion
     */
    public $getVersionReturn;
    /**
     * Constructor method for getVersionResponse
     * @uses GetVersionResponse::setGetVersionReturn()
     * @param \StructType\ExtVersion $getVersionReturn
     */
    public function __construct(\StructType\ExtVersion $getVersionReturn = null)
    {
        $this
            ->setGetVersionReturn($getVersionReturn);
    }
    /**
     * Get getVersionReturn value
     * @return \StructType\ExtVersion|null
     */
    public function getGetVersionReturn()
    {
        return $this->getVersionReturn;
    }
    /**
     * Set getVersionReturn value
     * @param \StructType\ExtVersion $getVersionReturn
     * @return \StructType\GetVersionResponse
     */
    public function setGetVersionReturn(\StructType\ExtVersion $getVersionReturn = null)
    {
        $this->getVersionReturn = $getVersionReturn;
        return $this;
    }
}
