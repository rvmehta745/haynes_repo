<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenancePartsForPeriodResponse StructType
 * @subpackage Structs
 */
class GetMaintenancePartsForPeriodResponse extends AbstractStructBase
{
    /**
     * The getMaintenancePartsForPeriodReturn
     * @var \StructType\ExtPartsListContainer
     */
    public $getMaintenancePartsForPeriodReturn;
    /**
     * Constructor method for getMaintenancePartsForPeriodResponse
     * @uses GetMaintenancePartsForPeriodResponse::setGetMaintenancePartsForPeriodReturn()
     * @param \StructType\ExtPartsListContainer $getMaintenancePartsForPeriodReturn
     */
    public function __construct(\StructType\ExtPartsListContainer $getMaintenancePartsForPeriodReturn = null)
    {
        $this
            ->setGetMaintenancePartsForPeriodReturn($getMaintenancePartsForPeriodReturn);
    }
    /**
     * Get getMaintenancePartsForPeriodReturn value
     * @return \StructType\ExtPartsListContainer|null
     */
    public function getGetMaintenancePartsForPeriodReturn()
    {
        return $this->getMaintenancePartsForPeriodReturn;
    }
    /**
     * Set getMaintenancePartsForPeriodReturn value
     * @param \StructType\ExtPartsListContainer $getMaintenancePartsForPeriodReturn
     * @return \StructType\GetMaintenancePartsForPeriodResponse
     */
    public function setGetMaintenancePartsForPeriodReturn(\StructType\ExtPartsListContainer $getMaintenancePartsForPeriodReturn = null)
    {
        $this->getMaintenancePartsForPeriodReturn = $getMaintenancePartsForPeriodReturn;
        return $this;
    }
}
