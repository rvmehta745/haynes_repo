<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for processMaintenanceRepairTasks2Response StructType
 * @subpackage Structs
 */
class ProcessMaintenanceRepairTasks2Response extends AbstractStructBase
{
    /**
     * The processMaintenanceRepairTasks2Return
     * @var \StructType\ExtRepairtimeBasket2
     */
    public $processMaintenanceRepairTasks2Return;
    /**
     * Constructor method for processMaintenanceRepairTasks2Response
     * @uses ProcessMaintenanceRepairTasks2Response::setProcessMaintenanceRepairTasks2Return()
     * @param \StructType\ExtRepairtimeBasket2 $processMaintenanceRepairTasks2Return
     */
    public function __construct(\StructType\ExtRepairtimeBasket2 $processMaintenanceRepairTasks2Return = null)
    {
        $this
            ->setProcessMaintenanceRepairTasks2Return($processMaintenanceRepairTasks2Return);
    }
    /**
     * Get processMaintenanceRepairTasks2Return value
     * @return \StructType\ExtRepairtimeBasket2|null
     */
    public function getProcessMaintenanceRepairTasks2Return()
    {
        return $this->processMaintenanceRepairTasks2Return;
    }
    /**
     * Set processMaintenanceRepairTasks2Return value
     * @param \StructType\ExtRepairtimeBasket2 $processMaintenanceRepairTasks2Return
     * @return \StructType\ProcessMaintenanceRepairTasks2Response
     */
    public function setProcessMaintenanceRepairTasks2Return(\StructType\ExtRepairtimeBasket2 $processMaintenanceRepairTasks2Return = null)
    {
        $this->processMaintenanceRepairTasks2Return = $processMaintenanceRepairTasks2Return;
        return $this;
    }
}
