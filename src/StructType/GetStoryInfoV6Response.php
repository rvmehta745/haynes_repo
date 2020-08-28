<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStoryInfoV6Response StructType
 * @subpackage Structs
 */
class GetStoryInfoV6Response extends AbstractStructBase
{
    /**
     * The getStoryInfoV6Return
     * @var \StructType\ExtStoryListContainerV2
     */
    public $getStoryInfoV6Return;
    /**
     * Constructor method for getStoryInfoV6Response
     * @uses GetStoryInfoV6Response::setGetStoryInfoV6Return()
     * @param \StructType\ExtStoryListContainerV2 $getStoryInfoV6Return
     */
    public function __construct(\StructType\ExtStoryListContainerV2 $getStoryInfoV6Return = null)
    {
        $this
            ->setGetStoryInfoV6Return($getStoryInfoV6Return);
    }
    /**
     * Get getStoryInfoV6Return value
     * @return \StructType\ExtStoryListContainerV2|null
     */
    public function getGetStoryInfoV6Return()
    {
        return $this->getStoryInfoV6Return;
    }
    /**
     * Set getStoryInfoV6Return value
     * @param \StructType\ExtStoryListContainerV2 $getStoryInfoV6Return
     * @return \StructType\GetStoryInfoV6Response
     */
    public function setGetStoryInfoV6Return(\StructType\ExtStoryListContainerV2 $getStoryInfoV6Return = null)
    {
        $this->getStoryInfoV6Return = $getStoryInfoV6Return;
        return $this;
    }
}
