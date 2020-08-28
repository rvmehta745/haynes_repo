<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NetworkArrayContainer StructType
 * @subpackage Structs
 */
class NetworkArrayContainer extends AbstractStructBase
{
    /**
     * The networkArray
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_Network
     */
    public $networkArray;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for NetworkArrayContainer
     * @uses NetworkArrayContainer::setNetworkArray()
     * @uses NetworkArrayContainer::setStatus()
     * @param \ArrayType\ArrayOf_tns2_Network $networkArray
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOf_tns2_Network $networkArray = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setNetworkArray($networkArray)
            ->setStatus($status);
    }
    /**
     * Get networkArray value
     * @return \ArrayType\ArrayOf_tns2_Network|null
     */
    public function getNetworkArray()
    {
        return $this->networkArray;
    }
    /**
     * Set networkArray value
     * @param \ArrayType\ArrayOf_tns2_Network $networkArray
     * @return \StructType\NetworkArrayContainer
     */
    public function setNetworkArray(\ArrayType\ArrayOf_tns2_Network $networkArray = null)
    {
        $this->networkArray = $networkArray;
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
     * @return \StructType\NetworkArrayContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
