<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteComponentContainer StructType
 * @subpackage Structs
 */
class CompleteComponentContainer extends AbstractStructBase
{
    /**
     * The completeComponent
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\CompleteComponent
     */
    public $completeComponent;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for CompleteComponentContainer
     * @uses CompleteComponentContainer::setCompleteComponent()
     * @uses CompleteComponentContainer::setStatus()
     * @param \StructType\CompleteComponent $completeComponent
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\StructType\CompleteComponent $completeComponent = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setCompleteComponent($completeComponent)
            ->setStatus($status);
    }
    /**
     * Get completeComponent value
     * @return \StructType\CompleteComponent|null
     */
    public function getCompleteComponent()
    {
        return $this->completeComponent;
    }
    /**
     * Set completeComponent value
     * @param \StructType\CompleteComponent $completeComponent
     * @return \StructType\CompleteComponentContainer
     */
    public function setCompleteComponent(\StructType\CompleteComponent $completeComponent = null)
    {
        $this->completeComponent = $completeComponent;
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
     * @return \StructType\CompleteComponentContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
