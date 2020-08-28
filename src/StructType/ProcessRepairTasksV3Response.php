<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for processRepairTasksV3Response StructType
 * @subpackage Structs
 */
class ProcessRepairTasksV3Response extends AbstractStructBase
{
    /**
     * The processRepairTasksV3Return
     * @var \StructType\ExtRepairtimesBasketV3
     */
    public $processRepairTasksV3Return;
    /**
     * Constructor method for processRepairTasksV3Response
     * @uses ProcessRepairTasksV3Response::setProcessRepairTasksV3Return()
     * @param \StructType\ExtRepairtimesBasketV3 $processRepairTasksV3Return
     */
    public function __construct(\StructType\ExtRepairtimesBasketV3 $processRepairTasksV3Return = null)
    {
        $this
            ->setProcessRepairTasksV3Return($processRepairTasksV3Return);
    }
    /**
     * Get processRepairTasksV3Return value
     * @return \StructType\ExtRepairtimesBasketV3|null
     */
    public function getProcessRepairTasksV3Return()
    {
        return $this->processRepairTasksV3Return;
    }
    /**
     * Set processRepairTasksV3Return value
     * @param \StructType\ExtRepairtimesBasketV3 $processRepairTasksV3Return
     * @return \StructType\ProcessRepairTasksV3Response
     */
    public function setProcessRepairTasksV3Return(\StructType\ExtRepairtimesBasketV3 $processRepairTasksV3Return = null)
    {
        $this->processRepairTasksV3Return = $processRepairTasksV3Return;
        return $this;
    }
}
