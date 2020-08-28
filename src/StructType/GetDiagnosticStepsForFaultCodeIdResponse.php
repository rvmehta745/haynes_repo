<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDiagnosticStepsForFaultCodeIdResponse StructType
 * @subpackage Structs
 */
class GetDiagnosticStepsForFaultCodeIdResponse extends AbstractStructBase
{
    /**
     * The getDiagnosticStepsForFaultCodeIdReturn
     * @var \StructType\DiagnosticComponentArrayContainer
     */
    public $getDiagnosticStepsForFaultCodeIdReturn;
    /**
     * Constructor method for getDiagnosticStepsForFaultCodeIdResponse
     * @uses GetDiagnosticStepsForFaultCodeIdResponse::setGetDiagnosticStepsForFaultCodeIdReturn()
     * @param \StructType\DiagnosticComponentArrayContainer $getDiagnosticStepsForFaultCodeIdReturn
     */
    public function __construct(\StructType\DiagnosticComponentArrayContainer $getDiagnosticStepsForFaultCodeIdReturn = null)
    {
        $this
            ->setGetDiagnosticStepsForFaultCodeIdReturn($getDiagnosticStepsForFaultCodeIdReturn);
    }
    /**
     * Get getDiagnosticStepsForFaultCodeIdReturn value
     * @return \StructType\DiagnosticComponentArrayContainer|null
     */
    public function getGetDiagnosticStepsForFaultCodeIdReturn()
    {
        return $this->getDiagnosticStepsForFaultCodeIdReturn;
    }
    /**
     * Set getDiagnosticStepsForFaultCodeIdReturn value
     * @param \StructType\DiagnosticComponentArrayContainer $getDiagnosticStepsForFaultCodeIdReturn
     * @return \StructType\GetDiagnosticStepsForFaultCodeIdResponse
     */
    public function setGetDiagnosticStepsForFaultCodeIdReturn(\StructType\DiagnosticComponentArrayContainer $getDiagnosticStepsForFaultCodeIdReturn = null)
    {
        $this->getDiagnosticStepsForFaultCodeIdReturn = $getDiagnosticStepsForFaultCodeIdReturn;
        return $this;
    }
}
