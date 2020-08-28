<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NetworkArrayContainerV2 StructType
 * @subpackage Structs
 */
class NetworkArrayContainerV2 extends AbstractStructBase
{
    /**
     * The networkArray
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_NetworkV2
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
     * Constructor method for NetworkArrayContainerV2
     * @uses NetworkArrayContainerV2::setNetworkArray()
     * @uses NetworkArrayContainerV2::setStatus()
     * @param \ArrayType\ArrayOf_tns2_NetworkV2 $networkArray
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOf_tns2_NetworkV2 $networkArray = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setNetworkArray($networkArray)
            ->setStatus($status);
    }
    /**
     * Get networkArray value
     * @return \ArrayType\ArrayOf_tns2_NetworkV2|null
     */
    public function getNetworkArray()
    {
        return $this->networkArray;
    }
    /**
     * Set networkArray value
     * @param \ArrayType\ArrayOf_tns2_NetworkV2 $networkArray
     * @return \StructType\NetworkArrayContainerV2
     */
    public function setNetworkArray(\ArrayType\ArrayOf_tns2_NetworkV2 $networkArray = null)
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
     * @return \StructType\NetworkArrayContainerV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
