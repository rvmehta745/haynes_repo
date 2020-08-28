<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDiagnosisResponse StructType
 * @subpackage Structs
 */
class GetDiagnosisResponse extends AbstractStructBase
{
    /**
     * The getDiagnosisReturn
     * @var \StructType\ExtDiagnosis
     */
    public $getDiagnosisReturn;
    /**
     * Constructor method for getDiagnosisResponse
     * @uses GetDiagnosisResponse::setGetDiagnosisReturn()
     * @param \StructType\ExtDiagnosis $getDiagnosisReturn
     */
    public function __construct(\StructType\ExtDiagnosis $getDiagnosisReturn = null)
    {
        $this
            ->setGetDiagnosisReturn($getDiagnosisReturn);
    }
    /**
     * Get getDiagnosisReturn value
     * @return \StructType\ExtDiagnosis|null
     */
    public function getGetDiagnosisReturn()
    {
        return $this->getDiagnosisReturn;
    }
    /**
     * Set getDiagnosisReturn value
     * @param \StructType\ExtDiagnosis $getDiagnosisReturn
     * @return \StructType\GetDiagnosisResponse
     */
    public function setGetDiagnosisReturn(\StructType\ExtDiagnosis $getDiagnosisReturn = null)
    {
        $this->getDiagnosisReturn = $getDiagnosisReturn;
        return $this;
    }
}
