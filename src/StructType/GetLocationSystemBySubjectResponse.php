<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLocationSystemBySubjectResponse StructType
 * @subpackage Structs
 */
class GetLocationSystemBySubjectResponse extends AbstractStructBase
{
    /**
     * The getLocationSystemBySubjectReturn
     * @var \StructType\ExtLocationSubjectsArrayContainer
     */
    public $getLocationSystemBySubjectReturn;
    /**
     * Constructor method for getLocationSystemBySubjectResponse
     * @uses GetLocationSystemBySubjectResponse::setGetLocationSystemBySubjectReturn()
     * @param \StructType\ExtLocationSubjectsArrayContainer $getLocationSystemBySubjectReturn
     */
    public function __construct(\StructType\ExtLocationSubjectsArrayContainer $getLocationSystemBySubjectReturn = null)
    {
        $this
            ->setGetLocationSystemBySubjectReturn($getLocationSystemBySubjectReturn);
    }
    /**
     * Get getLocationSystemBySubjectReturn value
     * @return \StructType\ExtLocationSubjectsArrayContainer|null
     */
    public function getGetLocationSystemBySubjectReturn()
    {
        return $this->getLocationSystemBySubjectReturn;
    }
    /**
     * Set getLocationSystemBySubjectReturn value
     * @param \StructType\ExtLocationSubjectsArrayContainer $getLocationSystemBySubjectReturn
     * @return \StructType\GetLocationSystemBySubjectResponse
     */
    public function setGetLocationSystemBySubjectReturn(\StructType\ExtLocationSubjectsArrayContainer $getLocationSystemBySubjectReturn = null)
    {
        $this->getLocationSystemBySubjectReturn = $getLocationSystemBySubjectReturn;
        return $this;
    }
}
