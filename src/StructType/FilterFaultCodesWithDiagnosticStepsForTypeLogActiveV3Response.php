<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Response StructType
 * @subpackage Structs
 */
class FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Response extends AbstractStructBase
{
    /**
     * The filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return
     * @var \StructType\FaultCode4ArrayContainer
     */
    public $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return;
    /**
     * Constructor method for
     * filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Response
     * @uses FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Response::setFilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return()
     * @param \StructType\FaultCode4ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return
     */
    public function __construct(\StructType\FaultCode4ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return = null)
    {
        $this
            ->setFilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return($filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return);
    }
    /**
     * Get filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return value
     * @return \StructType\FaultCode4ArrayContainer|null
     */
    public function getFilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return()
    {
        return $this->filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return;
    }
    /**
     * Set filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return value
     * @param \StructType\FaultCode4ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Response
     */
    public function setFilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return(\StructType\FaultCode4ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return = null)
    {
        $this->filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return = $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Return;
        return $this;
    }
}
