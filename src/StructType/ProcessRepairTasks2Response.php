<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for processRepairTasks2Response StructType
 * @subpackage Structs
 */
class ProcessRepairTasks2Response extends AbstractStructBase
{
    /**
     * The processRepairTasks2Return
     * @var \StructType\ExtRepairtimeBasket2
     */
    public $processRepairTasks2Return;
    /**
     * Constructor method for processRepairTasks2Response
     * @uses ProcessRepairTasks2Response::setProcessRepairTasks2Return()
     * @param \StructType\ExtRepairtimeBasket2 $processRepairTasks2Return
     */
    public function __construct(\StructType\ExtRepairtimeBasket2 $processRepairTasks2Return = null)
    {
        $this
            ->setProcessRepairTasks2Return($processRepairTasks2Return);
    }
    /**
     * Get processRepairTasks2Return value
     * @return \StructType\ExtRepairtimeBasket2|null
     */
    public function getProcessRepairTasks2Return()
    {
        return $this->processRepairTasks2Return;
    }
    /**
     * Set processRepairTasks2Return value
     * @param \StructType\ExtRepairtimeBasket2 $processRepairTasks2Return
     * @return \StructType\ProcessRepairTasks2Response
     */
    public function setProcessRepairTasks2Return(\StructType\ExtRepairtimeBasket2 $processRepairTasks2Return = null)
    {
        $this->processRepairTasks2Return = $processRepairTasks2Return;
        return $this;
    }
}
