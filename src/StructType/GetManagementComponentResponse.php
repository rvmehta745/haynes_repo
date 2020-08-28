<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getManagementComponentResponse StructType
 * @subpackage Structs
 */
class GetManagementComponentResponse extends AbstractStructBase
{
    /**
     * The getManagementComponentReturn
     * @var \StructType\ExtComponentContainer
     */
    public $getManagementComponentReturn;
    /**
     * Constructor method for getManagementComponentResponse
     * @uses GetManagementComponentResponse::setGetManagementComponentReturn()
     * @param \StructType\ExtComponentContainer $getManagementComponentReturn
     */
    public function __construct(\StructType\ExtComponentContainer $getManagementComponentReturn = null)
    {
        $this
            ->setGetManagementComponentReturn($getManagementComponentReturn);
    }
    /**
     * Get getManagementComponentReturn value
     * @return \StructType\ExtComponentContainer|null
     */
    public function getGetManagementComponentReturn()
    {
        return $this->getManagementComponentReturn;
    }
    /**
     * Set getManagementComponentReturn value
     * @param \StructType\ExtComponentContainer $getManagementComponentReturn
     * @return \StructType\GetManagementComponentResponse
     */
    public function setGetManagementComponentReturn(\StructType\ExtComponentContainer $getManagementComponentReturn = null)
    {
        $this->getManagementComponentReturn = $getManagementComponentReturn;
        return $this;
    }
}
