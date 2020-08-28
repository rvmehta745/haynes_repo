<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SystemGroupCategoryArrayContainerV2 StructType
 * @subpackage Structs
 */
class SystemGroupCategoryArrayContainerV2 extends AbstractStructBase
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
     * @var \ArrayType\ArrayOf_tns2_SystemGroupCategoryV2
     */
    public $systemGroupCategoryArray;
    /**
     * Constructor method for SystemGroupCategoryArrayContainerV2
     * @uses SystemGroupCategoryArrayContainerV2::setStatus()
     * @uses SystemGroupCategoryArrayContainerV2::setSystemGroupCategoryArray()
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOf_tns2_SystemGroupCategoryV2 $systemGroupCategoryArray
     */
    public function __construct(\StructType\ExtStatus $status = null, \ArrayType\ArrayOf_tns2_SystemGroupCategoryV2 $systemGroupCategoryArray = null)
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
     * @return \StructType\SystemGroupCategoryArrayContainerV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get systemGroupCategoryArray value
     * @return \ArrayType\ArrayOf_tns2_SystemGroupCategoryV2|null
     */
    public function getSystemGroupCategoryArray()
    {
        return $this->systemGroupCategoryArray;
    }
    /**
     * Set systemGroupCategoryArray value
     * @param \ArrayType\ArrayOf_tns2_SystemGroupCategoryV2 $systemGroupCategoryArray
     * @return \StructType\SystemGroupCategoryArrayContainerV2
     */
    public function setSystemGroupCategoryArray(\ArrayType\ArrayOf_tns2_SystemGroupCategoryV2 $systemGroupCategoryArray = null)
    {
        $this->systemGroupCategoryArray = $systemGroupCategoryArray;
        return $this;
    }
}
