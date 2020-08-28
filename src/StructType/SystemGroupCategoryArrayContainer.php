<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SystemGroupCategoryArrayContainer StructType
 * @subpackage Structs
 */
class SystemGroupCategoryArrayContainer extends AbstractStructBase
{
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The systemGroupCategoryArray
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_SystemGroupCategory
     */
    public $systemGroupCategoryArray;
    /**
     * Constructor method for SystemGroupCategoryArrayContainer
     * @uses SystemGroupCategoryArrayContainer::setStatus()
     * @uses SystemGroupCategoryArrayContainer::setSystemGroupCategoryArray()
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOf_tns2_SystemGroupCategory $systemGroupCategoryArray
     */
    public function __construct(\StructType\ExtStatus $status = null, \ArrayType\ArrayOf_tns2_SystemGroupCategory $systemGroupCategoryArray = null)
    {
        $this
            ->setStatus($status)
            ->setSystemGroupCategoryArray($systemGroupCategoryArray);
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
     * @return \StructType\SystemGroupCategoryArrayContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get systemGroupCategoryArray value
     * @return \ArrayType\ArrayOf_tns2_SystemGroupCategory|null
     */
    public function getSystemGroupCategoryArray()
    {
        return $this->systemGroupCategoryArray;
    }
    /**
     * Set systemGroupCategoryArray value
     * @param \ArrayType\ArrayOf_tns2_SystemGroupCategory $systemGroupCategoryArray
     * @return \StructType\SystemGroupCategoryArrayContainer
     */
    public function setSystemGroupCategoryArray(\ArrayType\ArrayOf_tns2_SystemGroupCategory $systemGroupCategoryArray = null)
    {
        $this->systemGroupCategoryArray = $systemGroupCategoryArray;
        return $this;
    }
}
