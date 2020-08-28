<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterFaultCodesWithDiagnosticStepsForTypeV3Response
 * StructType
 * @subpackage Structs
 */
class FilterFaultCodesWithDiagnosticStepsForTypeV3Response extends AbstractStructBase
{
    /**
     * The filterFaultCodesWithDiagnosticStepsForTypeV3Return
     * @var \StructType\FaultCode4ArrayContainer
     */
    public $filterFaultCodesWithDiagnosticStepsForTypeV3Return;
    /**
     * Constructor method for filterFaultCodesWithDiagnosticStepsForTypeV3Response
     * @uses FilterFaultCodesWithDiagnosticStepsForTypeV3Response::setFilterFaultCodesWithDiagnosticStepsForTypeV3Return()
     * @param \StructType\FaultCode4ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeV3Return
     */
    public function __construct(\StructType\FaultCode4ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeV3Return = null)
    {
        $this
            ->setFilterFaultCodesWithDiagnosticStepsForTypeV3Return($filterFaultCodesWithDiagnosticStepsForTypeV3Return);
    }
    /**
     * Get filterFaultCodesWithDiagnosticStepsForTypeV3Return value
     * @return \StructType\FaultCode4ArrayContainer|null
     */
    public function getFilterFaultCodesWithDiagnosticStepsForTypeV3Return()
    {
        return $this->filterFaultCodesWithDiagnosticStepsForTypeV3Return;
    }
    /**
     * Set filterFaultCodesWithDiagnosticStepsForTypeV3Return value
     * @param \StructType\FaultCode4ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeV3Return
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeV3Response
     */
    public function setFilterFaultCodesWithDiagnosticStepsForTypeV3Return(\StructType\FaultCode4ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeV3Return = null)
    {
        $this->filterFaultCodesWithDiagnosticStepsForTypeV3Return = $filterFaultCodesWithDiagnosticStepsForTypeV3Return;
        return $this;
    }
}
