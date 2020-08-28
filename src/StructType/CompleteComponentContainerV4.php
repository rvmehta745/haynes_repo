<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteComponentContainerV4 StructType
 * @subpackage Structs
 */
class CompleteComponentContainerV4 extends AbstractStructBase
{
    /**
     * The completeComponentV4
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\CompleteComponentV4
     */
    public $completeComponentV4;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for CompleteComponentContainerV4
     * @uses CompleteComponentContainerV4::setCompleteComponentV4()
     * @uses CompleteComponentContainerV4::setStatus()
     * @param \StructType\CompleteComponentV4 $completeComponentV4
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\StructType\CompleteComponentV4 $completeComponentV4 = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setCompleteComponentV4($completeComponentV4)
            ->setStatus($status);
    }
    /**
     * Get completeComponentV4 value
     * @return \StructType\CompleteComponentV4|null
     */
    public function getCompleteComponentV4()
    {
        return $this->completeComponentV4;
    }
    /**
     * Set completeComponentV4 value
     * @param \StructType\CompleteComponentV4 $completeComponentV4
     * @return \StructType\CompleteComponentContainerV4
     */
    public function setCompleteComponentV4(\StructType\CompleteComponentV4 $completeComponentV4 = null)
    {
        $this->completeComponentV4 = $completeComponentV4;
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
     * @return \StructType\CompleteComponentContainerV4
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
