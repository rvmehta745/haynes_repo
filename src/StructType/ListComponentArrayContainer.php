<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListComponentArrayContainer StructType
 * @subpackage Structs
 */
class ListComponentArrayContainer extends AbstractStructBase
{
    /**
     * The listComponentArray
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_ListComponentArray
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
     * Constructor method for ListComponentArrayContainer
     * @uses ListComponentArrayContainer::setListComponentArray()
     * @uses ListComponentArrayContainer::setStatus()
     * @param \ArrayType\ArrayOf_tns2_ListComponentArray $listComponentArray
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOf_tns2_ListComponentArray $listComponentArray = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setListComponentArray($listComponentArray)
            ->setStatus($status);
    }
    /**
     * Get listComponentArray value
     * @return \ArrayType\ArrayOf_tns2_ListComponentArray|null
     */
    public function getListComponentArray()
    {
        return $this->listComponentArray;
    }
    /**
     * Set listComponentArray value
     * @param \ArrayType\ArrayOf_tns2_ListComponentArray $listComponentArray
     * @return \StructType\ListComponentArrayContainer
     */
    public function setListComponentArray(\ArrayType\ArrayOf_tns2_ListComponentArray $listComponentArray = null)
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
     * @return \StructType\ListComponentArrayContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
