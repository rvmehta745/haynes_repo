<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCalculatedMaintenanceResponse StructType
 * @subpackage Structs
 */
class GetCalculatedMaintenanceResponse extends AbstractStructBase
{
    /**
     * The getCalculatedMaintenanceReturn
     * @var \StructType\ExtMaintenanceCalculated
     */
    public $getCalculatedMaintenanceReturn;
    /**
     * Constructor method for getCalculatedMaintenanceResponse
     * @uses GetCalculatedMaintenanceResponse::setGetCalculatedMaintenanceReturn()
     * @param \StructType\ExtMaintenanceCalculated $getCalculatedMaintenanceReturn
     */
    public function __construct(\StructType\ExtMaintenanceCalculated $getCalculatedMaintenanceReturn = null)
    {
        $this
            ->setGetCalculatedMaintenanceReturn($getCalculatedMaintenanceReturn);
    }
    /**
     * Get getCalculatedMaintenanceReturn value
     * @return \StructType\ExtMaintenanceCalculated|null
     */
    public function getGetCalculatedMaintenanceReturn()
    {
        return $this->getCalculatedMaintenanceReturn;
    }
    /**
     * Set getCalculatedMaintenanceReturn value
     * @param \StructType\ExtMaintenanceCalculated $getCalculatedMaintenanceReturn
     * @return \StructType\GetCalculatedMaintenanceResponse
     */
    public function setGetCalculatedMaintenanceReturn(\StructType\ExtMaintenanceCalculated $getCalculatedMaintenanceReturn = null)
    {
        $this->getCalculatedMaintenanceReturn = $getCalculatedMaintenanceReturn;
        return $this;
    }
}
