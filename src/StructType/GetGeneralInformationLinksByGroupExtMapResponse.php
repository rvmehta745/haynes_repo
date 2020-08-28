<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGeneralInformationLinksByGroupExtMapResponse StructType
 * @subpackage Structs
 */
class GetGeneralInformationLinksByGroupExtMapResponse extends AbstractStructBase
{
    /**
     * The getGeneralInformationLinksByGroupExtMapReturn
     * @var \StructType\ExtMap
     */
    public $getGeneralInformationLinksByGroupExtMapReturn;
    /**
     * Constructor method for getGeneralInformationLinksByGroupExtMapResponse
     * @uses GetGeneralInformationLinksByGroupExtMapResponse::setGetGeneralInformationLinksByGroupExtMapReturn()
     * @param \StructType\ExtMap $getGeneralInformationLinksByGroupExtMapReturn
     */
    public function __construct(\StructType\ExtMap $getGeneralInformationLinksByGroupExtMapReturn = null)
    {
        $this
            ->setGetGeneralInformationLinksByGroupExtMapReturn($getGeneralInformationLinksByGroupExtMapReturn);
    }
    /**
     * Get getGeneralInformationLinksByGroupExtMapReturn value
     * @return \StructType\ExtMap|null
     */
    public function getGetGeneralInformationLinksByGroupExtMapReturn()
    {
        return $this->getGeneralInformationLinksByGroupExtMapReturn;
    }
    /**
     * Set getGeneralInformationLinksByGroupExtMapReturn value
     * @param \StructType\ExtMap $getGeneralInformationLinksByGroupExtMapReturn
     * @return \StructType\GetGeneralInformationLinksByGroupExtMapResponse
     */
    public function setGetGeneralInformationLinksByGroupExtMapReturn(\StructType\ExtMap $getGeneralInformationLinksByGroupExtMapReturn = null)
    {
        $this->getGeneralInformationLinksByGroupExtMapReturn = $getGeneralInformationLinksByGroupExtMapReturn;
        return $this;
    }
}
