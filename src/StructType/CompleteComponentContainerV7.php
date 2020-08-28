<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteComponentContainerV7 StructType
 * @subpackage Structs
 */
class CompleteComponentContainerV7 extends AbstractStructBase
{
    /**
     * The completeComponentV7
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\CompleteComponentV7
     */
    public $completeComponentV7;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for CompleteComponentContainerV7
     * @uses CompleteComponentContainerV7::setCompleteComponentV7()
     * @uses CompleteComponentContainerV7::setStatus()
     * @param \StructType\CompleteComponentV7 $completeComponentV7
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\StructType\CompleteComponentV7 $completeComponentV7 = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setCompleteComponentV7($completeComponentV7)
            ->setStatus($status);
    }
    /**
     * Get completeComponentV7 value
     * @return \StructType\CompleteComponentV7|null
     */
    public function getCompleteComponentV7()
    {
        return $this->completeComponentV7;
    }
    /**
     * Set completeComponentV7 value
     * @param \StructType\CompleteComponentV7 $completeComponentV7
     * @return \StructType\CompleteComponentContainerV7
     */
    public function setCompleteComponentV7(\StructType\CompleteComponentV7 $completeComponentV7 = null)
    {
        $this->completeComponentV7 = $completeComponentV7;
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
     * @return \StructType\CompleteComponentContainerV7
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
