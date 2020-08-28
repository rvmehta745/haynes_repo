<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterFaultCodesForTypeResponse StructType
 * @subpackage Structs
 */
class FilterFaultCodesForTypeResponse extends AbstractStructBase
{
    /**
     * The filterFaultCodesForTypeReturn
     * @var \StructType\FaultCode2ArrayContainer
     */
    public $filterFaultCodesForTypeReturn;
    /**
     * Constructor method for filterFaultCodesForTypeResponse
     * @uses FilterFaultCodesForTypeResponse::setFilterFaultCodesForTypeReturn()
     * @param \StructType\FaultCode2ArrayContainer $filterFaultCodesForTypeReturn
     */
    public function __construct(\StructType\FaultCode2ArrayContainer $filterFaultCodesForTypeReturn = null)
    {
        $this
            ->setFilterFaultCodesForTypeReturn($filterFaultCodesForTypeReturn);
    }
    /**
     * Get filterFaultCodesForTypeReturn value
     * @return \StructType\FaultCode2ArrayContainer|null
     */
    public function getFilterFaultCodesForTypeReturn()
    {
        return $this->filterFaultCodesForTypeReturn;
    }
    /**
     * Set filterFaultCodesForTypeReturn value
     * @param \StructType\FaultCode2ArrayContainer $filterFaultCodesForTypeReturn
     * @return \StructType\FilterFaultCodesForTypeResponse
     */
    public function setFilterFaultCodesForTypeReturn(\StructType\FaultCode2ArrayContainer $filterFaultCodesForTypeReturn = null)
    {
        $this->filterFaultCodesForTypeReturn = $filterFaultCodesForTypeReturn;
        return $this;
    }
}
