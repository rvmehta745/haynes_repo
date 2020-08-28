<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterFaultCodesWithDiagnosticStepsForTypeV2Response
 * StructType
 * @subpackage Structs
 */
class FilterFaultCodesWithDiagnosticStepsForTypeV2Response extends AbstractStructBase
{
    /**
     * The filterFaultCodesWithDiagnosticStepsForTypeV2Return
     * @var \StructType\FaultCode3ArrayContainer
     */
    public $filterFaultCodesWithDiagnosticStepsForTypeV2Return;
    /**
     * Constructor method for filterFaultCodesWithDiagnosticStepsForTypeV2Response
     * @uses FilterFaultCodesWithDiagnosticStepsForTypeV2Response::setFilterFaultCodesWithDiagnosticStepsForTypeV2Return()
     * @param \StructType\FaultCode3ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeV2Return
     */
    public function __construct(\StructType\FaultCode3ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeV2Return = null)
    {
        $this
            ->setFilterFaultCodesWithDiagnosticStepsForTypeV2Return($filterFaultCodesWithDiagnosticStepsForTypeV2Return);
    }
    /**
     * Get filterFaultCodesWithDiagnosticStepsForTypeV2Return value
     * @return \StructType\FaultCode3ArrayContainer|null
     */
    public function getFilterFaultCodesWithDiagnosticStepsForTypeV2Return()
    {
        return $this->filterFaultCodesWithDiagnosticStepsForTypeV2Return;
    }
    /**
     * Set filterFaultCodesWithDiagnosticStepsForTypeV2Return value
     * @param \StructType\FaultCode3ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeV2Return
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeV2Response
     */
    public function setFilterFaultCodesWithDiagnosticStepsForTypeV2Return(\StructType\FaultCode3ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeV2Return = null)
    {
        $this->filterFaultCodesWithDiagnosticStepsForTypeV2Return = $filterFaultCodesWithDiagnosticStepsForTypeV2Return;
        return $this;
    }
}
