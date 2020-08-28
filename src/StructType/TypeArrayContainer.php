<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TypeArrayContainer StructType
 * @subpackage Structs
 */
class TypeArrayContainer extends AbstractStructBase
{
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The typeArray
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_VesaType
     */
    public $typeArray;
    /**
     * Constructor method for TypeArrayContainer
     * @uses TypeArrayContainer::setStatus()
     * @uses TypeArrayContainer::setTypeArray()
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOf_tns2_VesaType $typeArray
     */
    public function __construct(\StructType\ExtStatus $status = null, \ArrayType\ArrayOf_tns2_VesaType $typeArray = null)
    {
        $this
            ->setStatus($status)
            ->setTypeArray($typeArray);
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
     * @return \StructType\TypeArrayContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get typeArray value
     * @return \ArrayType\ArrayOf_tns2_VesaType|null
     */
    public function getTypeArray()
    {
        return $this->typeArray;
    }
    /**
     * Set typeArray value
     * @param \ArrayType\ArrayOf_tns2_VesaType $typeArray
     * @return \StructType\TypeArrayContainer
     */
    public function setTypeArray(\ArrayType\ArrayOf_tns2_VesaType $typeArray = null)
    {
        $this->typeArray = $typeArray;
        return $this;
    }
}
