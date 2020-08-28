<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Response StructType
 * @subpackage Structs
 */
class FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Response extends AbstractStructBase
{
    /**
     * The filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return
     * @var \StructType\FaultCode3ArrayContainer
     */
    public $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return;
    /**
     * Constructor method for
     * filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Response
     * @uses FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Response::setFilterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return()
     * @param \StructType\FaultCode3ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return
     */
    public function __construct(\StructType\FaultCode3ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return = null)
    {
        $this
            ->setFilterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return($filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return);
    }
    /**
     * Get filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return value
     * @return \StructType\FaultCode3ArrayContainer|null
     */
    public function getFilterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return()
    {
        return $this->filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return;
    }
    /**
     * Set filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return value
     * @param \StructType\FaultCode3ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Response
     */
    public function setFilterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return(\StructType\FaultCode3ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return = null)
    {
        $this->filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return = $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Return;
        return $this;
    }
}
