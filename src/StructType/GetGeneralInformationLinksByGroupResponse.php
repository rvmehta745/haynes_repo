<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGeneralInformationLinksByGroupResponse StructType
 * @subpackage Structs
 */
class GetGeneralInformationLinksByGroupResponse extends AbstractStructBase
{
    /**
     * The getGeneralInformationLinksByGroupReturn
     * @var \StructType\Map
     */
    public $getGeneralInformationLinksByGroupReturn;
    /**
     * Constructor method for getGeneralInformationLinksByGroupResponse
     * @uses GetGeneralInformationLinksByGroupResponse::setGetGeneralInformationLinksByGroupReturn()
     * @param \StructType\Map $getGeneralInformationLinksByGroupReturn
     */
    public function __construct(\StructType\Map $getGeneralInformationLinksByGroupReturn = null)
    {
        $this
            ->setGetGeneralInformationLinksByGroupReturn($getGeneralInformationLinksByGroupReturn);
    }
    /**
     * Get getGeneralInformationLinksByGroupReturn value
     * @return \StructType\Map|null
     */
    public function getGetGeneralInformationLinksByGroupReturn()
    {
        return $this->getGeneralInformationLinksByGroupReturn;
    }
    /**
     * Set getGeneralInformationLinksByGroupReturn value
     * @param \StructType\Map $getGeneralInformationLinksByGroupReturn
     * @return \StructType\GetGeneralInformationLinksByGroupResponse
     */
    public function setGetGeneralInformationLinksByGroupReturn(\StructType\Map $getGeneralInformationLinksByGroupReturn = null)
    {
        $this->getGeneralInformationLinksByGroupReturn = $getGeneralInformationLinksByGroupReturn;
        return $this;
    }
}
