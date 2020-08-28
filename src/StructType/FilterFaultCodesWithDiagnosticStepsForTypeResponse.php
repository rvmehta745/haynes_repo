<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterFaultCodesWithDiagnosticStepsForTypeResponse
 * StructType
 * @subpackage Structs
 */
class FilterFaultCodesWithDiagnosticStepsForTypeResponse extends AbstractStructBase
{
    /**
     * The filterFaultCodesWithDiagnosticStepsForTypeReturn
     * @var \StructType\FaultCode2ArrayContainer
     */
    public $filterFaultCodesWithDiagnosticStepsForTypeReturn;
    /**
     * Constructor method for filterFaultCodesWithDiagnosticStepsForTypeResponse
     * @uses FilterFaultCodesWithDiagnosticStepsForTypeResponse::setFilterFaultCodesWithDiagnosticStepsForTypeReturn()
     * @param \StructType\FaultCode2ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeReturn
     */
    public function __construct(\StructType\FaultCode2ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeReturn = null)
    {
        $this
            ->setFilterFaultCodesWithDiagnosticStepsForTypeReturn($filterFaultCodesWithDiagnosticStepsForTypeReturn);
    }
    /**
     * Get filterFaultCodesWithDiagnosticStepsForTypeReturn value
     * @return \StructType\FaultCode2ArrayContainer|null
     */
    public function getFilterFaultCodesWithDiagnosticStepsForTypeReturn()
    {
        return $this->filterFaultCodesWithDiagnosticStepsForTypeReturn;
    }
    /**
     * Set filterFaultCodesWithDiagnosticStepsForTypeReturn value
     * @param \StructType\FaultCode2ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeReturn
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeResponse
     */
    public function setFilterFaultCodesWithDiagnosticStepsForTypeReturn(\StructType\FaultCode2ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeReturn = null)
    {
        $this->filterFaultCodesWithDiagnosticStepsForTypeReturn = $filterFaultCodesWithDiagnosticStepsForTypeReturn;
        return $this;
    }
}
