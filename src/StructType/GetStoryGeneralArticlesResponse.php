<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStoryGeneralArticlesResponse StructType
 * @subpackage Structs
 */
class GetStoryGeneralArticlesResponse extends AbstractStructBase
{
    /**
     * The getStoryGeneralArticlesReturn
     * @var \StructType\ExtStoryGeneralArticles
     */
    public $getStoryGeneralArticlesReturn;
    /**
     * Constructor method for getStoryGeneralArticlesResponse
     * @uses GetStoryGeneralArticlesResponse::setGetStoryGeneralArticlesReturn()
     * @param \StructType\ExtStoryGeneralArticles $getStoryGeneralArticlesReturn
     */
    public function __construct(\StructType\ExtStoryGeneralArticles $getStoryGeneralArticlesReturn = null)
    {
        $this
            ->setGetStoryGeneralArticlesReturn($getStoryGeneralArticlesReturn);
    }
    /**
     * Get getStoryGeneralArticlesReturn value
     * @return \StructType\ExtStoryGeneralArticles|null
     */
    public function getGetStoryGeneralArticlesReturn()
    {
        return $this->getStoryGeneralArticlesReturn;
    }
    /**
     * Set getStoryGeneralArticlesReturn value
     * @param \StructType\ExtStoryGeneralArticles $getStoryGeneralArticlesReturn
     * @return \StructType\GetStoryGeneralArticlesResponse
     */
    public function setGetStoryGeneralArticlesReturn(\StructType\ExtStoryGeneralArticles $getStoryGeneralArticlesReturn = null)
    {
        $this->getStoryGeneralArticlesReturn = $getStoryGeneralArticlesReturn;
        return $this;
    }
}
