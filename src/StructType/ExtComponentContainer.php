<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtComponentContainer StructType
 * @subpackage Structs
 */
class ExtComponentContainer extends AbstractStructBase
{
    /**
     * The extComponent
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtComponent
     */
    public $extComponent;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtComponentContainer
     * @uses ExtComponentContainer::setExtComponent()
     * @uses ExtComponentContainer::setStatus()
     * @param \StructType\ExtComponent $extComponent
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\StructType\ExtComponent $extComponent = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setExtComponent($extComponent)
            ->setStatus($status);
    }
    /**
     * Get extComponent value
     * @return \StructType\ExtComponent|null
     */
    public function getExtComponent()
    {
        return $this->extComponent;
    }
    /**
     * Set extComponent value
     * @param \StructType\ExtComponent $extComponent
     * @return \StructType\ExtComponentContainer
     */
    public function setExtComponent(\StructType\ExtComponent $extComponent = null)
    {
        $this->extComponent = $extComponent;
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
     * @return \StructType\ExtComponentContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
