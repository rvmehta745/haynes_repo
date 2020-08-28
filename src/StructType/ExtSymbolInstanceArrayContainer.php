<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtSymbolInstanceArrayContainer StructType
 * @subpackage Structs
 */
class ExtSymbolInstanceArrayContainer extends AbstractStructBase
{
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The symbolInsances
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_SymbolInstanceLocSystem
     */
    public $symbolInsances;
    /**
     * Constructor method for ExtSymbolInstanceArrayContainer
     * @uses ExtSymbolInstanceArrayContainer::setStatus()
     * @uses ExtSymbolInstanceArrayContainer::setSymbolInsances()
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOf_tns2_SymbolInstanceLocSystem $symbolInsances
     */
    public function __construct(\StructType\ExtStatus $status = null, \ArrayType\ArrayOf_tns2_SymbolInstanceLocSystem $symbolInsances = null)
    {
        $this
            ->setStatus($status)
            ->setSymbolInsances($symbolInsances);
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
     * @return \StructType\ExtSymbolInstanceArrayContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get symbolInsances value
     * @return \ArrayType\ArrayOf_tns2_SymbolInstanceLocSystem|null
     */
    public function getSymbolInsances()
    {
        return $this->symbolInsances;
    }
    /**
     * Set symbolInsances value
     * @param \ArrayType\ArrayOf_tns2_SymbolInstanceLocSystem $symbolInsances
     * @return \StructType\ExtSymbolInstanceArrayContainer
     */
    public function setSymbolInsances(\ArrayType\ArrayOf_tns2_SymbolInstanceLocSystem $symbolInsances = null)
    {
        $this->symbolInsances = $symbolInsances;
        return $this;
    }
}
