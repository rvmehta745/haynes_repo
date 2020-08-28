<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtLocationSystemArrayContainer StructType
 * @subpackage Structs
 */
class ExtLocationSystemArrayContainer extends AbstractStructBase
{
    /**
     * The extLocationSystemArray
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_ExtLocationSystem
     */
    public $extLocationSystemArray;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtLocationSystemArrayContainer
     * @uses ExtLocationSystemArrayContainer::setExtLocationSystemArray()
     * @uses ExtLocationSystemArrayContainer::setStatus()
     * @param \ArrayType\ArrayOf_tns2_ExtLocationSystem $extLocationSystemArray
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOf_tns2_ExtLocationSystem $extLocationSystemArray = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setExtLocationSystemArray($extLocationSystemArray)
            ->setStatus($status);
    }
    /**
     * Get extLocationSystemArray value
     * @return \ArrayType\ArrayOf_tns2_ExtLocationSystem|null
     */
    public function getExtLocationSystemArray()
    {
        return $this->extLocationSystemArray;
    }
    /**
     * Set extLocationSystemArray value
     * @param \ArrayType\ArrayOf_tns2_ExtLocationSystem $extLocationSystemArray
     * @return \StructType\ExtLocationSystemArrayContainer
     */
    public function setExtLocationSystemArray(\ArrayType\ArrayOf_tns2_ExtLocationSystem $extLocationSystemArray = null)
    {
        $this->extLocationSystemArray = $extLocationSystemArray;
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
     * @return \StructType\ExtLocationSystemArrayContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
