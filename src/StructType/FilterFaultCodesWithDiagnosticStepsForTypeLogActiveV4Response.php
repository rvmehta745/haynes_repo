<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Response StructType
 * @subpackage Structs
 */
class FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Response extends AbstractStructBase
{
    /**
     * The filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return
     * @var \StructType\FaultCode5ArrayContainer
     */
    public $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return;
    /**
     * Constructor method for
     * filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Response
     * @uses FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Response::setFilterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return()
     * @param \StructType\FaultCode5ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return
     */
    public function __construct(\StructType\FaultCode5ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return = null)
    {
        $this
            ->setFilterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return($filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return);
    }
    /**
     * Get filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return value
     * @return \StructType\FaultCode5ArrayContainer|null
     */
    public function getFilterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return()
    {
        return $this->filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return;
    }
    /**
     * Set filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return value
     * @param \StructType\FaultCode5ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Response
     */
    public function setFilterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return(\StructType\FaultCode5ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return = null)
    {
        $this->filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return = $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Return;
        return $this;
    }
}
