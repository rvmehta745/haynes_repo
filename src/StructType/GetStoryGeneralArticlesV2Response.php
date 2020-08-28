<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStoryGeneralArticlesV2Response StructType
 * @subpackage Structs
 */
class GetStoryGeneralArticlesV2Response extends AbstractStructBase
{
    /**
     * The getStoryGeneralArticlesV2Return
     * @var \StructType\ExtStoryGeneralArticles
     */
    public $getStoryGeneralArticlesV2Return;
    /**
     * Constructor method for getStoryGeneralArticlesV2Response
     * @uses GetStoryGeneralArticlesV2Response::setGetStoryGeneralArticlesV2Return()
     * @param \StructType\ExtStoryGeneralArticles $getStoryGeneralArticlesV2Return
     */
    public function __construct(\StructType\ExtStoryGeneralArticles $getStoryGeneralArticlesV2Return = null)
    {
        $this
            ->setGetStoryGeneralArticlesV2Return($getStoryGeneralArticlesV2Return);
    }
    /**
     * Get getStoryGeneralArticlesV2Return value
     * @return \StructType\ExtStoryGeneralArticles|null
     */
    public function getGetStoryGeneralArticlesV2Return()
    {
        return $this->getStoryGeneralArticlesV2Return;
    }
    /**
     * Set getStoryGeneralArticlesV2Return value
     * @param \StructType\ExtStoryGeneralArticles $getStoryGeneralArticlesV2Return
     * @return \StructType\GetStoryGeneralArticlesV2Response
     */
    public function setGetStoryGeneralArticlesV2Return(\StructType\ExtStoryGeneralArticles $getStoryGeneralArticlesV2Return = null)
    {
        $this->getStoryGeneralArticlesV2Return = $getStoryGeneralArticlesV2Return;
        return $this;
    }
}
