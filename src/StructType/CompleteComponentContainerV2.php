<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteComponentContainerV2 StructType
 * @subpackage Structs
 */
class CompleteComponentContainerV2 extends AbstractStructBase
{
    /**
     * The completeComponentV2
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\CompleteComponentV2
     */
    public $completeComponentV2;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for CompleteComponentContainerV2
     * @uses CompleteComponentContainerV2::setCompleteComponentV2()
     * @uses CompleteComponentContainerV2::setStatus()
     * @param \StructType\CompleteComponentV2 $completeComponentV2
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\StructType\CompleteComponentV2 $completeComponentV2 = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setCompleteComponentV2($completeComponentV2)
            ->setStatus($status);
    }
    /**
     * Get completeComponentV2 value
     * @return \StructType\CompleteComponentV2|null
     */
    public function getCompleteComponentV2()
    {
        return $this->completeComponentV2;
    }
    /**
     * Set completeComponentV2 value
     * @param \StructType\CompleteComponentV2 $completeComponentV2
     * @return \StructType\CompleteComponentContainerV2
     */
    public function setCompleteComponentV2(\StructType\CompleteComponentV2 $completeComponentV2 = null)
    {
        $this->completeComponentV2 = $completeComponentV2;
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
     * @return \StructType\CompleteComponentContainerV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
