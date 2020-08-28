<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFullTreeResponse StructType
 * @subpackage Structs
 */
class GetFullTreeResponse extends AbstractStructBase
{
    /**
     * The getFullTreeReturn
     * @var \StructType\ExtRTSearchTreeContainer
     */
    public $getFullTreeReturn;
    /**
     * Constructor method for getFullTreeResponse
     * @uses GetFullTreeResponse::setGetFullTreeReturn()
     * @param \StructType\ExtRTSearchTreeContainer $getFullTreeReturn
     */
    public function __construct(\StructType\ExtRTSearchTreeContainer $getFullTreeReturn = null)
    {
        $this
            ->setGetFullTreeReturn($getFullTreeReturn);
    }
    /**
     * Get getFullTreeReturn value
     * @return \StructType\ExtRTSearchTreeContainer|null
     */
    public function getGetFullTreeReturn()
    {
        return $this->getFullTreeReturn;
    }
    /**
     * Set getFullTreeReturn value
     * @param \StructType\ExtRTSearchTreeContainer $getFullTreeReturn
     * @return \StructType\GetFullTreeResponse
     */
    public function setGetFullTreeReturn(\StructType\ExtRTSearchTreeContainer $getFullTreeReturn = null)
    {
        $this->getFullTreeReturn = $getFullTreeReturn;
        return $this;
    }
}
