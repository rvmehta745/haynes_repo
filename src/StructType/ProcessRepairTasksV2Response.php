<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for processRepairTasksV2Response StructType
 * @subpackage Structs
 */
class ProcessRepairTasksV2Response extends AbstractStructBase
{
    /**
     * The processRepairTasksV2Return
     * @var \StructType\ExtRepairtimesBasketV2
     */
    public $processRepairTasksV2Return;
    /**
     * Constructor method for processRepairTasksV2Response
     * @uses ProcessRepairTasksV2Response::setProcessRepairTasksV2Return()
     * @param \StructType\ExtRepairtimesBasketV2 $processRepairTasksV2Return
     */
    public function __construct(\StructType\ExtRepairtimesBasketV2 $processRepairTasksV2Return = null)
    {
        $this
            ->setProcessRepairTasksV2Return($processRepairTasksV2Return);
    }
    /**
     * Get processRepairTasksV2Return value
     * @return \StructType\ExtRepairtimesBasketV2|null
     */
    public function getProcessRepairTasksV2Return()
    {
        return $this->processRepairTasksV2Return;
    }
    /**
     * Set processRepairTasksV2Return value
     * @param \StructType\ExtRepairtimesBasketV2 $processRepairTasksV2Return
     * @return \StructType\ProcessRepairTasksV2Response
     */
    public function setProcessRepairTasksV2Return(\StructType\ExtRepairtimesBasketV2 $processRepairTasksV2Return = null)
    {
        $this->processRepairTasksV2Return = $processRepairTasksV2Return;
        return $this;
    }
}
