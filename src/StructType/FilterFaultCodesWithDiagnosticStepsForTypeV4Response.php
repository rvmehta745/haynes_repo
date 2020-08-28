<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterFaultCodesWithDiagnosticStepsForTypeV4Response
 * StructType
 * @subpackage Structs
 */
class FilterFaultCodesWithDiagnosticStepsForTypeV4Response extends AbstractStructBase
{
    /**
     * The filterFaultCodesWithDiagnosticStepsForTypeV4Return
     * @var \StructType\FaultCode5ArrayContainer
     */
    public $filterFaultCodesWithDiagnosticStepsForTypeV4Return;
    /**
     * Constructor method for filterFaultCodesWithDiagnosticStepsForTypeV4Response
     * @uses FilterFaultCodesWithDiagnosticStepsForTypeV4Response::setFilterFaultCodesWithDiagnosticStepsForTypeV4Return()
     * @param \StructType\FaultCode5ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeV4Return
     */
    public function __construct(\StructType\FaultCode5ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeV4Return = null)
    {
        $this
            ->setFilterFaultCodesWithDiagnosticStepsForTypeV4Return($filterFaultCodesWithDiagnosticStepsForTypeV4Return);
    }
    /**
     * Get filterFaultCodesWithDiagnosticStepsForTypeV4Return value
     * @return \StructType\FaultCode5ArrayContainer|null
     */
    public function getFilterFaultCodesWithDiagnosticStepsForTypeV4Return()
    {
        return $this->filterFaultCodesWithDiagnosticStepsForTypeV4Return;
    }
    /**
     * Set filterFaultCodesWithDiagnosticStepsForTypeV4Return value
     * @param \StructType\FaultCode5ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeV4Return
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeV4Response
     */
    public function setFilterFaultCodesWithDiagnosticStepsForTypeV4Return(\StructType\FaultCode5ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeV4Return = null)
    {
        $this->filterFaultCodesWithDiagnosticStepsForTypeV4Return = $filterFaultCodesWithDiagnosticStepsForTypeV4Return;
        return $this;
    }
}
