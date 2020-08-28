<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceSystemOverviewV2Response StructType
 * @subpackage Structs
 */
class GetMaintenanceSystemOverviewV2Response extends AbstractStructBase
{
    /**
     * The getMaintenanceSystemOverviewV2Return
     * @var \StructType\ExtMaintenanceSystemOverviewV2
     */
    public $getMaintenanceSystemOverviewV2Return;
    /**
     * Constructor method for getMaintenanceSystemOverviewV2Response
     * @uses GetMaintenanceSystemOverviewV2Response::setGetMaintenanceSystemOverviewV2Return()
     * @param \StructType\ExtMaintenanceSystemOverviewV2 $getMaintenanceSystemOverviewV2Return
     */
    public function __construct(\StructType\ExtMaintenanceSystemOverviewV2 $getMaintenanceSystemOverviewV2Return = null)
    {
        $this
            ->setGetMaintenanceSystemOverviewV2Return($getMaintenanceSystemOverviewV2Return);
    }
    /**
     * Get getMaintenanceSystemOverviewV2Return value
     * @return \StructType\ExtMaintenanceSystemOverviewV2|null
     */
    public function getGetMaintenanceSystemOverviewV2Return()
    {
        return $this->getMaintenanceSystemOverviewV2Return;
    }
    /**
     * Set getMaintenanceSystemOverviewV2Return value
     * @param \StructType\ExtMaintenanceSystemOverviewV2 $getMaintenanceSystemOverviewV2Return
     * @return \StructType\GetMaintenanceSystemOverviewV2Response
     */
    public function setGetMaintenanceSystemOverviewV2Return(\StructType\ExtMaintenanceSystemOverviewV2 $getMaintenanceSystemOverviewV2Return = null)
    {
        $this->getMaintenanceSystemOverviewV2Return = $getMaintenanceSystemOverviewV2Return;
        return $this;
    }
}
