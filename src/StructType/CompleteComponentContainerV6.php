<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteComponentContainerV6 StructType
 * @subpackage Structs
 */
class CompleteComponentContainerV6 extends AbstractStructBase
{
    /**
     * The completeComponentV6
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\CompleteComponentV6
     */
    public $completeComponentV6;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for CompleteComponentContainerV6
     * @uses CompleteComponentContainerV6::setCompleteComponentV6()
     * @uses CompleteComponentContainerV6::setStatus()
     * @param \StructType\CompleteComponentV6 $completeComponentV6
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\StructType\CompleteComponentV6 $completeComponentV6 = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setCompleteComponentV6($completeComponentV6)
            ->setStatus($status);
    }
    /**
     * Get completeComponentV6 value
     * @return \StructType\CompleteComponentV6|null
     */
    public function getCompleteComponentV6()
    {
        return $this->completeComponentV6;
    }
    /**
     * Set completeComponentV6 value
     * @param \StructType\CompleteComponentV6 $completeComponentV6
     * @return \StructType\CompleteComponentContainerV6
     */
    public function setCompleteComponentV6(\StructType\CompleteComponentV6 $completeComponentV6 = null)
    {
        $this->completeComponentV6 = $completeComponentV6;
        return $this;
    }
    /**
     * Get status value
     * @return \StructType\ExtStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \StructType\ExtStatus $status
     * @return \StructType\CompleteComponentContainerV6
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
