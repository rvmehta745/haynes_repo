<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteComponentContainerV5 StructType
 * @subpackage Structs
 */
class CompleteComponentContainerV5 extends AbstractStructBase
{
    /**
     * The completeComponentV5
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\CompleteComponentV5
     */
    public $completeComponentV5;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for CompleteComponentContainerV5
     * @uses CompleteComponentContainerV5::setCompleteComponentV5()
     * @uses CompleteComponentContainerV5::setStatus()
     * @param \StructType\CompleteComponentV5 $completeComponentV5
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\StructType\CompleteComponentV5 $completeComponentV5 = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setCompleteComponentV5($completeComponentV5)
            ->setStatus($status);
    }
    /**
     * Get completeComponentV5 value
     * @return \StructType\CompleteComponentV5|null
     */
    public function getCompleteComponentV5()
    {
        return $this->completeComponentV5;
    }
    /**
     * Set completeComponentV5 value
     * @param \StructType\CompleteComponentV5 $completeComponentV5
     * @return \StructType\CompleteComponentContainerV5
     */
    public function setCompleteComponentV5(\StructType\CompleteComponentV5 $completeComponentV5 = null)
    {
        $this->completeComponentV5 = $completeComponentV5;
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
     * @return \StructType\CompleteComponentContainerV5
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
