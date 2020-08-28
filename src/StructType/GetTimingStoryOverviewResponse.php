<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTimingStoryOverviewResponse StructType
 * @subpackage Structs
 */
class GetTimingStoryOverviewResponse extends AbstractStructBase
{
    /**
     * The getTimingStoryOverviewReturn
     * @var \StructType\ExtStory
     */
    public $getTimingStoryOverviewReturn;
    /**
     * Constructor method for getTimingStoryOverviewResponse
     * @uses GetTimingStoryOverviewResponse::setGetTimingStoryOverviewReturn()
     * @param \StructType\ExtStory $getTimingStoryOverviewReturn
     */
    public function __construct(\StructType\ExtStory $getTimingStoryOverviewReturn = null)
    {
        $this
            ->setGetTimingStoryOverviewReturn($getTimingStoryOverviewReturn);
    }
    /**
     * Get getTimingStoryOverviewReturn value
     * @return \StructType\ExtStory|null
     */
    public function getGetTimingStoryOverviewReturn()
    {
        return $this->getTimingStoryOverviewReturn;
    }
    /**
     * Set getTimingStoryOverviewReturn value
     * @param \StructType\ExtStory $getTimingStoryOverviewReturn
     * @return \StructType\GetTimingStoryOverviewResponse
     */
    public function setGetTimingStoryOverviewReturn(\StructType\ExtStory $getTimingStoryOverviewReturn = null)
    {
        $this->getTimingStoryOverviewReturn = $getTimingStoryOverviewReturn;
        return $this;
    }
}
