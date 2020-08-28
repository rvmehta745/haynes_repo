<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * filterFaultCodesWithDiagnosticStepsForTypeLogActiveResponse StructType
 * @subpackage Structs
 */
class FilterFaultCodesWithDiagnosticStepsForTypeLogActiveResponse extends AbstractStructBase
{
    /**
     * The filterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn
     * @var \StructType\FaultCode2ArrayContainer
     */
    public $filterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn;
    /**
     * Constructor method for
     * filterFaultCodesWithDiagnosticStepsForTypeLogActiveResponse
     * @uses FilterFaultCodesWithDiagnosticStepsForTypeLogActiveResponse::setFilterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn()
     * @param \StructType\FaultCode2ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn
     */
    public function __construct(\StructType\FaultCode2ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn = null)
    {
        $this
            ->setFilterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn($filterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn);
    }
    /**
     * Get filterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn value
     * @return \StructType\FaultCode2ArrayContainer|null
     */
    public function getFilterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn()
    {
        return $this->filterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn;
    }
    /**
     * Set filterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn value
     * @param \StructType\FaultCode2ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveResponse
     */
    public function setFilterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn(\StructType\FaultCode2ArrayContainer $filterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn = null)
    {
        $this->filterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn = $filterFaultCodesWithDiagnosticStepsForTypeLogActiveReturn;
        return $this;
    }
}
