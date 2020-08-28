<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for processRepairTasksResponse StructType
 * @subpackage Structs
 */
class ProcessRepairTasksResponse extends AbstractStructBase
{
    /**
     * The processRepairTasksReturn
     * @var \StructType\ExtRepairtimeBasket
     */
    public $processRepairTasksReturn;
    /**
     * Constructor method for processRepairTasksResponse
     * @uses ProcessRepairTasksResponse::setProcessRepairTasksReturn()
     * @param \StructType\ExtRepairtimeBasket $processRepairTasksReturn
     */
    public function __construct(\StructType\ExtRepairtimeBasket $processRepairTasksReturn = null)
    {
        $this
            ->setProcessRepairTasksReturn($processRepairTasksReturn);
    }
    /**
     * Get processRepairTasksReturn value
     * @return \StructType\ExtRepairtimeBasket|null
     */
    public function getProcessRepairTasksReturn()
    {
        return $this->processRepairTasksReturn;
    }
    /**
     * Set processRepairTasksReturn value
     * @param \StructType\ExtRepairtimeBasket $processRepairTasksReturn
     * @return \StructType\ProcessRepairTasksResponse
     */
    public function setProcessRepairTasksReturn(\StructType\ExtRepairtimeBasket $processRepairTasksReturn = null)
    {
        $this->processRepairTasksReturn = $processRepairTasksReturn;
        return $this;
    }
}
