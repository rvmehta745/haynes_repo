<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGeneralInformationLinksExtMapResponse StructType
 * @subpackage Structs
 */
class GetGeneralInformationLinksExtMapResponse extends AbstractStructBase
{
    /**
     * The getGeneralInformationLinksExtMapReturn
     * @var \StructType\ExtMap
     */
    public $getGeneralInformationLinksExtMapReturn;
    /**
     * Constructor method for getGeneralInformationLinksExtMapResponse
     * @uses GetGeneralInformationLinksExtMapResponse::setGetGeneralInformationLinksExtMapReturn()
     * @param \StructType\ExtMap $getGeneralInformationLinksExtMapReturn
     */
    public function __construct(\StructType\ExtMap $getGeneralInformationLinksExtMapReturn = null)
    {
        $this
            ->setGetGeneralInformationLinksExtMapReturn($getGeneralInformationLinksExtMapReturn);
    }
    /**
     * Get getGeneralInformationLinksExtMapReturn value
     * @return \StructType\ExtMap|null
     */
    public function getGetGeneralInformationLinksExtMapReturn()
    {
        return $this->getGeneralInformationLinksExtMapReturn;
    }
    /**
     * Set getGeneralInformationLinksExtMapReturn value
     * @param \StructType\ExtMap $getGeneralInformationLinksExtMapReturn
     * @return \StructType\GetGeneralInformationLinksExtMapResponse
     */
    public function setGetGeneralInformationLinksExtMapReturn(\StructType\ExtMap $getGeneralInformationLinksExtMapReturn = null)
    {
        $this->getGeneralInformationLinksExtMapReturn = $getGeneralInformationLinksExtMapReturn;
        return $this;
    }
}
