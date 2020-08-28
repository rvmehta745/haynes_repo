<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeContainer StructType
 * @subpackage Structs
 */
class TypeContainer extends AbstractStructBase
{
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\VesaType
     */
    public $type;
    /**
     * Constructor method for TypeContainer
     * @uses TypeContainer::setStatus()
     * @uses TypeContainer::setType()
     * @param \StructType\ExtStatus $status
     * @param \StructType\VesaType $type
     */
    public function __construct(\StructType\ExtStatus $status = null, \StructType\VesaType $type = null)
    {
        $this
            ->setStatus($status)
            ->setType($type);
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
     * @return \StructType\TypeContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get type value
     * @return \StructType\VesaType|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param \StructType\VesaType $type
     * @return \StructType\TypeContainer
     */
    public function setType(\StructType\VesaType $type = null)
    {
        $this->type = $type;
        return $this;
    }
}
