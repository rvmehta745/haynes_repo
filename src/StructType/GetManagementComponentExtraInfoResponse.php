<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getManagementComponentExtraInfoResponse StructType
 * @subpackage Structs
 */
class GetManagementComponentExtraInfoResponse extends AbstractStructBase
{
    /**
     * The getManagementComponentExtraInfoReturn
     * @var \StructType\ExtExtraInfoPage
     */
    public $getManagementComponentExtraInfoReturn;
    /**
     * Constructor method for getManagementComponentExtraInfoResponse
     * @uses GetManagementComponentExtraInfoResponse::setGetManagementComponentExtraInfoReturn()
     * @param \StructType\ExtExtraInfoPage $getManagementComponentExtraInfoReturn
     */
    public function __construct(\StructType\ExtExtraInfoPage $getManagementComponentExtraInfoReturn = null)
    {
        $this
            ->setGetManagementComponentExtraInfoReturn($getManagementComponentExtraInfoReturn);
    }
    /**
     * Get getManagementComponentExtraInfoReturn value
     * @return \StructType\ExtExtraInfoPage|null
     */
    public function getGetManagementComponentExtraInfoReturn()
    {
        return $this->getManagementComponentExtraInfoReturn;
    }
    /**
     * Set getManagementComponentExtraInfoReturn value
     * @param \StructType\ExtExtraInfoPage $getManagementComponentExtraInfoReturn
     * @return \StructType\GetManagementComponentExtraInfoResponse
     */
    public function setGetManagementComponentExtraInfoReturn(\StructType\ExtExtraInfoPage $getManagementComponentExtraInfoReturn = null)
    {
        $this->getManagementComponentExtraInfoReturn = $getManagementComponentExtraInfoReturn;
        return $this;
    }
}
