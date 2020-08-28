<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDiagnosisConnectorLocationImageResponse StructType
 * @subpackage Structs
 */
class GetDiagnosisConnectorLocationImageResponse extends AbstractStructBase
{
    /**
     * The getDiagnosisConnectorLocationImageReturn
     * @var \StructType\DiagnosisConnectorLocImageContainer
     */
    public $getDiagnosisConnectorLocationImageReturn;
    /**
     * Constructor method for getDiagnosisConnectorLocationImageResponse
     * @uses GetDiagnosisConnectorLocationImageResponse::setGetDiagnosisConnectorLocationImageReturn()
     * @param \StructType\DiagnosisConnectorLocImageContainer $getDiagnosisConnectorLocationImageReturn
     */
    public function __construct(\StructType\DiagnosisConnectorLocImageContainer $getDiagnosisConnectorLocationImageReturn = null)
    {
        $this
            ->setGetDiagnosisConnectorLocationImageReturn($getDiagnosisConnectorLocationImageReturn);
    }
    /**
     * Get getDiagnosisConnectorLocationImageReturn value
     * @return \StructType\DiagnosisConnectorLocImageContainer|null
     */
    public function getGetDiagnosisConnectorLocationImageReturn()
    {
        return $this->getDiagnosisConnectorLocationImageReturn;
    }
    /**
     * Set getDiagnosisConnectorLocationImageReturn value
     * @param \StructType\DiagnosisConnectorLocImageContainer $getDiagnosisConnectorLocationImageReturn
     * @return \StructType\GetDiagnosisConnectorLocationImageResponse
     */
    public function setGetDiagnosisConnectorLocationImageReturn(\StructType\DiagnosisConnectorLocImageContainer $getDiagnosisConnectorLocationImageReturn = null)
    {
        $this->getDiagnosisConnectorLocationImageReturn = $getDiagnosisConnectorLocationImageReturn;
        return $this;
    }
}
