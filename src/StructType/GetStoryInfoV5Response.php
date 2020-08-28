<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStoryInfoV5Response StructType
 * @subpackage Structs
 */
class GetStoryInfoV5Response extends AbstractStructBase
{
    /**
     * The getStoryInfoV5Return
     * @var \StructType\ExtStoryListContainer
     */
    public $getStoryInfoV5Return;
    /**
     * Constructor method for getStoryInfoV5Response
     * @uses GetStoryInfoV5Response::setGetStoryInfoV5Return()
     * @param \StructType\ExtStoryListContainer $getStoryInfoV5Return
     */
    public function __construct(\StructType\ExtStoryListContainer $getStoryInfoV5Return = null)
    {
        $this
            ->setGetStoryInfoV5Return($getStoryInfoV5Return);
    }
    /**
     * Get getStoryInfoV5Return value
     * @return \StructType\ExtStoryListContainer|null
     */
    public function getGetStoryInfoV5Return()
    {
        return $this->getStoryInfoV5Return;
    }
    /**
     * Set getStoryInfoV5Return value
     * @param \StructType\ExtStoryListContainer $getStoryInfoV5Return
     * @return \StructType\GetStoryInfoV5Response
     */
    public function setGetStoryInfoV5Return(\StructType\ExtStoryListContainer $getStoryInfoV5Return = null)
    {
        $this->getStoryInfoV5Return = $getStoryInfoV5Return;
        return $this;
    }
}
