<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGeneralInformationLinksResponse StructType
 * @subpackage Structs
 */
class GetGeneralInformationLinksResponse extends AbstractStructBase
{
    /**
     * The getGeneralInformationLinksReturn
     * @var \StructType\Map
     */
    public $getGeneralInformationLinksReturn;
    /**
     * Constructor method for getGeneralInformationLinksResponse
     * @uses GetGeneralInformationLinksResponse::setGetGeneralInformationLinksReturn()
     * @param \StructType\Map $getGeneralInformationLinksReturn
     */
    public function __construct(\StructType\Map $getGeneralInformationLinksReturn = null)
    {
        $this
            ->setGetGeneralInformationLinksReturn($getGeneralInformationLinksReturn);
    }
    /**
     * Get getGeneralInformationLinksReturn value
     * @return \StructType\Map|null
     */
    public function getGetGeneralInformationLinksReturn()
    {
        return $this->getGeneralInformationLinksReturn;
    }
    /**
     * Set getGeneralInformationLinksReturn value
     * @param \StructType\Map $getGeneralInformationLinksReturn
     * @return \StructType\GetGeneralInformationLinksResponse
     */
    public function setGetGeneralInformationLinksReturn(\StructType\Map $getGeneralInformationLinksReturn = null)
    {
        $this->getGeneralInformationLinksReturn = $getGeneralInformationLinksReturn;
        return $this;
    }
}
