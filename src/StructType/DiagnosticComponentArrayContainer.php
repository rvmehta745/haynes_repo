<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiagnosticComponentArrayContainer StructType
 * @subpackage Structs
 */
class DiagnosticComponentArrayContainer extends AbstractStructBase
{
    /**
     * The diagnosticComponentArray
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_DiagnosticComponent
     */
    public $diagnosticComponentArray;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for DiagnosticComponentArrayContainer
     * @uses DiagnosticComponentArrayContainer::setDiagnosticComponentArray()
     * @uses DiagnosticComponentArrayContainer::setStatus()
     * @param \ArrayType\ArrayOf_tns2_DiagnosticComponent $diagnosticComponentArray
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOf_tns2_DiagnosticComponent $diagnosticComponentArray = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setDiagnosticComponentArray($diagnosticComponentArray)
            ->setStatus($status);
    }
    /**
     * Get diagnosticComponentArray value
     * @return \ArrayType\ArrayOf_tns2_DiagnosticComponent|null
     */
    public function getDiagnosticComponentArray()
    {
        return $this->diagnosticComponentArray;
    }
    /**
     * Set diagnosticComponentArray value
     * @param \ArrayType\ArrayOf_tns2_DiagnosticComponent $diagnosticComponentArray
     * @return \StructType\DiagnosticComponentArrayContainer
     */
    public function setDiagnosticComponentArray(\ArrayType\ArrayOf_tns2_DiagnosticComponent $diagnosticComponentArray = null)
    {
        $this->diagnosticComponentArray = $diagnosticComponentArray;
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
     * @return \StructType\DiagnosticComponentArrayContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
