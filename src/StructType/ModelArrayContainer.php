<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModelArrayContainer StructType
 * @subpackage Structs
 */
class ModelArrayContainer extends AbstractStructBase
{
    /**
     * The modelArray
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_Model
     */
    public $modelArray;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ModelArrayContainer
     * @uses ModelArrayContainer::setModelArray()
     * @uses ModelArrayContainer::setStatus()
     * @param \ArrayType\ArrayOf_tns2_Model $modelArray
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOf_tns2_Model $modelArray = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setModelArray($modelArray)
            ->setStatus($status);
    }
    /**
     * Get modelArray value
     * @return \ArrayType\ArrayOf_tns2_Model|null
     */
    public function getModelArray()
    {
        return $this->modelArray;
    }
    /**
     * Set modelArray value
     * @param \ArrayType\ArrayOf_tns2_Model $modelArray
     * @return \StructType\ModelArrayContainer
     */
    public function setModelArray(\ArrayType\ArrayOf_tns2_Model $modelArray = null)
    {
        $this->modelArray = $modelArray;
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
     * @return \StructType\ModelArrayContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
