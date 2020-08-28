<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListComponentArrayContainerV2 StructType
 * @subpackage Structs
 */
class ListComponentArrayContainerV2 extends AbstractStructBase
{
    /**
     * The listComponentArray
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_ListComponentArrayV2
     */
    public $listComponentArray;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ListComponentArrayContainerV2
     * @uses ListComponentArrayContainerV2::setListComponentArray()
     * @uses ListComponentArrayContainerV2::setStatus()
     * @param \ArrayType\ArrayOf_tns2_ListComponentArrayV2 $listComponentArray
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOf_tns2_ListComponentArrayV2 $listComponentArray = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setListComponentArray($listComponentArray)
            ->setStatus($status);
    }
    /**
     * Get listComponentArray value
     * @return \ArrayType\ArrayOf_tns2_ListComponentArrayV2|null
     */
    public function getListComponentArray()
    {
        return $this->listComponentArray;
    }
    /**
     * Set listComponentArray value
     * @param \ArrayType\ArrayOf_tns2_ListComponentArrayV2 $listComponentArray
     * @return \StructType\ListComponentArrayContainerV2
     */
    public function setListComponentArray(\ArrayType\ArrayOf_tns2_ListComponentArrayV2 $listComponentArray = null)
    {
        $this->listComponentArray = $listComponentArray;
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
     * @return \StructType\ListComponentArrayContainerV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
