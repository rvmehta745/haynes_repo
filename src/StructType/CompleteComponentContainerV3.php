<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteComponentContainerV3 StructType
 * @subpackage Structs
 */
class CompleteComponentContainerV3 extends AbstractStructBase
{
    /**
     * The completeComponentV3
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\CompleteComponentV3
     */
    public $completeComponentV3;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for CompleteComponentContainerV3
     * @uses CompleteComponentContainerV3::setCompleteComponentV3()
     * @uses CompleteComponentContainerV3::setStatus()
     * @param \StructType\CompleteComponentV3 $completeComponentV3
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\StructType\CompleteComponentV3 $completeComponentV3 = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setCompleteComponentV3($completeComponentV3)
            ->setStatus($status);
    }
    /**
     * Get completeComponentV3 value
     * @return \StructType\CompleteComponentV3|null
     */
    public function getCompleteComponentV3()
    {
        return $this->completeComponentV3;
    }
    /**
     * Set completeComponentV3 value
     * @param \StructType\CompleteComponentV3 $completeComponentV3
     * @return \StructType\CompleteComponentContainerV3
     */
    public function setCompleteComponentV3(\StructType\CompleteComponentV3 $completeComponentV3 = null)
    {
        $this->completeComponentV3 = $completeComponentV3;
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
     * @return \StructType\CompleteComponentContainerV3
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
