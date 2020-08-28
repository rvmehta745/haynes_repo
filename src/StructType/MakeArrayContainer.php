<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeArrayContainer StructType
 * @subpackage Structs
 */
class MakeArrayContainer extends AbstractStructBase
{
    /**
     * The makeArray
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_Make
     */
    public $makeArray;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for MakeArrayContainer
     * @uses MakeArrayContainer::setMakeArray()
     * @uses MakeArrayContainer::setStatus()
     * @param \ArrayType\ArrayOf_tns2_Make $makeArray
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOf_tns2_Make $makeArray = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setMakeArray($makeArray)
            ->setStatus($status);
    }
    /**
     * Get makeArray value
     * @return \ArrayType\ArrayOf_tns2_Make|null
     */
    public function getMakeArray()
    {
        return $this->makeArray;
    }
    /**
     * Set makeArray value
     * @param \ArrayType\ArrayOf_tns2_Make $makeArray
     * @return \StructType\MakeArrayContainer
     */
    public function setMakeArray(\ArrayType\ArrayOf_tns2_Make $makeArray = null)
    {
        $this->makeArray = $makeArray;
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
     * @return \StructType\MakeArrayContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
