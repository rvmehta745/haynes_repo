<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtLocationSystemArrayContainerV2 StructType
 * @subpackage Structs
 */
class ExtLocationSystemArrayContainerV2 extends AbstractStructBase
{
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The symbolInstanceArrayContainer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns1_ExtSymbolInstanceArrayContainer
     */
    public $symbolInstanceArrayContainer;
    /**
     * Constructor method for ExtLocationSystemArrayContainerV2
     * @uses ExtLocationSystemArrayContainerV2::setStatus()
     * @uses ExtLocationSystemArrayContainerV2::setSymbolInstanceArrayContainer()
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOf_tns1_ExtSymbolInstanceArrayContainer $symbolInstanceArrayContainer
     */
    public function __construct(\StructType\ExtStatus $status = null, \ArrayType\ArrayOf_tns1_ExtSymbolInstanceArrayContainer $symbolInstanceArrayContainer = null)
    {
        $this
            ->setStatus($status)
            ->setSymbolInstanceArrayContainer($symbolInstanceArrayContainer);
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
     * @return \StructType\ExtLocationSystemArrayContainerV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get symbolInstanceArrayContainer value
     * @return \ArrayType\ArrayOf_tns1_ExtSymbolInstanceArrayContainer|null
     */
    public function getSymbolInstanceArrayContainer()
    {
        return $this->symbolInstanceArrayContainer;
    }
    /**
     * Set symbolInstanceArrayContainer value
     * @param \ArrayType\ArrayOf_tns1_ExtSymbolInstanceArrayContainer $symbolInstanceArrayContainer
     * @return \StructType\ExtLocationSystemArrayContainerV2
     */
    public function setSymbolInstanceArrayContainer(\ArrayType\ArrayOf_tns1_ExtSymbolInstanceArrayContainer $symbolInstanceArrayContainer = null)
    {
        $this->symbolInstanceArrayContainer = $symbolInstanceArrayContainer;
        return $this;
    }
}
