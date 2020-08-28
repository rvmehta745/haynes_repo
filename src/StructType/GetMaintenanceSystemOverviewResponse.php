<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceSystemOverviewResponse StructType
 * @subpackage Structs
 */
class GetMaintenanceSystemOverviewResponse extends AbstractStructBase
{
    /**
     * The getMaintenanceSystemOverviewReturn
     * @var \StructType\ExtMaintenanceSystemOverview
     */
    public $getMaintenanceSystemOverviewReturn;
    /**
     * Constructor method for getMaintenanceSystemOverviewResponse
     * @uses GetMaintenanceSystemOverviewResponse::setGetMaintenanceSystemOverviewReturn()
     * @param \StructType\ExtMaintenanceSystemOverview $getMaintenanceSystemOverviewReturn
     */
    public function __construct(\StructType\ExtMaintenanceSystemOverview $getMaintenanceSystemOverviewReturn = null)
    {
        $this
            ->setGetMaintenanceSystemOverviewReturn($getMaintenanceSystemOverviewReturn);
    }
    /**
     * Get getMaintenanceSystemOverviewReturn value
     * @return \StructType\ExtMaintenanceSystemOverview|null
     */
    public function getGetMaintenanceSystemOverviewReturn()
    {
        return $this->getMaintenanceSystemOverviewReturn;
    }
    /**
     * Set getMaintenanceSystemOverviewReturn value
     * @param \StructType\ExtMaintenanceSystemOverview $getMaintenanceSystemOverviewReturn
     * @return \StructType\GetMaintenanceSystemOverviewResponse
     */
    public function setGetMaintenanceSystemOverviewReturn(\StructType\ExtMaintenanceSystemOverview $getMaintenanceSystemOverviewReturn = null)
    {
        $this->getMaintenanceSystemOverviewReturn = $getMaintenanceSystemOverviewReturn;
        return $this;
    }
}
