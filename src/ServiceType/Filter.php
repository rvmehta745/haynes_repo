<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Filter ServiceType
 * @subpackage Services
 */
class Filter extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * filterFaultCodesWithDiagnosticStepsForTypeLogActive
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActive $parameters
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveResponse|bool
     */
    public function filterFaultCodesWithDiagnosticStepsForTypeLogActive(\StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActive $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterFaultCodesWithDiagnosticStepsForTypeLogActive($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV2 $parameters
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Response|bool
     */
    public function filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2(\StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3 $parameters
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Response|bool
     */
    public function filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3(\StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV4 $parameters
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Response|bool
     */
    public function filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4(\StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV4 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * filterFaultCodesWithDiagnosticStepsForType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterFaultCodesWithDiagnosticStepsForType $parameters
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeResponse|bool
     */
    public function filterFaultCodesWithDiagnosticStepsForType(\StructType\FilterFaultCodesWithDiagnosticStepsForType $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterFaultCodesWithDiagnosticStepsForType($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * filterFaultCodesWithDiagnosticStepsForTypeV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterFaultCodesWithDiagnosticStepsForTypeV3 $parameters
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeV3Response|bool
     */
    public function filterFaultCodesWithDiagnosticStepsForTypeV3(\StructType\FilterFaultCodesWithDiagnosticStepsForTypeV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterFaultCodesWithDiagnosticStepsForTypeV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * filterFaultCodesWithDiagnosticStepsForTypeV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterFaultCodesWithDiagnosticStepsForTypeV4 $parameters
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeV4Response|bool
     */
    public function filterFaultCodesWithDiagnosticStepsForTypeV4(\StructType\FilterFaultCodesWithDiagnosticStepsForTypeV4 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterFaultCodesWithDiagnosticStepsForTypeV4($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * filterFaultCodesWithDiagnosticStepsForTypeV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterFaultCodesWithDiagnosticStepsForTypeV2 $parameters
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeV2Response|bool
     */
    public function filterFaultCodesWithDiagnosticStepsForTypeV2(\StructType\FilterFaultCodesWithDiagnosticStepsForTypeV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterFaultCodesWithDiagnosticStepsForTypeV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named filterTSBSystemsV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterTSBSystemsV2 $parameters
     * @return \StructType\FilterTSBSystemsV2Response|bool
     */
    public function filterTSBSystemsV2(\StructType\FilterTSBSystemsV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterTSBSystemsV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named filterTSBCasesRecallsSystemsV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterTSBCasesRecallsSystemsV3 $parameters
     * @return \StructType\FilterTSBCasesRecallsSystemsV3Response|bool
     */
    public function filterTSBCasesRecallsSystemsV3(\StructType\FilterTSBCasesRecallsSystemsV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterTSBCasesRecallsSystemsV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named filterCasesSystemsV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterCasesSystemsV3 $parameters
     * @return \StructType\FilterCasesSystemsV3Response|bool
     */
    public function filterCasesSystemsV3(\StructType\FilterCasesSystemsV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterCasesSystemsV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named filterRecallsSystemsV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterRecallsSystemsV3 $parameters
     * @return \StructType\FilterRecallsSystemsV3Response|bool
     */
    public function filterRecallsSystemsV3(\StructType\FilterRecallsSystemsV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterRecallsSystemsV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named filterFaultCodesForType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterFaultCodesForType $parameters
     * @return \StructType\FilterFaultCodesForTypeResponse|bool
     */
    public function filterFaultCodesForType(\StructType\FilterFaultCodesForType $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterFaultCodesForType($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named filterTSBCasesRecallsSystemsV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterTSBCasesRecallsSystemsV4 $parameters
     * @return \StructType\FilterTSBCasesRecallsSystemsV4Response|bool
     */
    public function filterTSBCasesRecallsSystemsV4(\StructType\FilterTSBCasesRecallsSystemsV4 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterTSBCasesRecallsSystemsV4($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named filterTSBCasesRecallsStories
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterTSBCasesRecallsStories $parameters
     * @return \StructType\FilterTSBCasesRecallsStoriesResponse|bool
     */
    public function filterTSBCasesRecallsStories(\StructType\FilterTSBCasesRecallsStories $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterTSBCasesRecallsStories($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named filterTSBSystemsV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FilterTSBSystemsV3 $parameters
     * @return \StructType\FilterTSBSystemsV3Response|bool
     */
    public function filterTSBSystemsV3(\StructType\FilterTSBSystemsV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->filterTSBSystemsV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\FilterCasesSystemsV3Response|\StructType\FilterFaultCodesForTypeResponse|\StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveResponse|\StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV2Response|\StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3Response|\StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV4Response|\StructType\FilterFaultCodesWithDiagnosticStepsForTypeResponse|\StructType\FilterFaultCodesWithDiagnosticStepsForTypeV2Response|\StructType\FilterFaultCodesWithDiagnosticStepsForTypeV3Response|\StructType\FilterFaultCodesWithDiagnosticStepsForTypeV4Response|\StructType\FilterRecallsSystemsV3Response|\StructType\FilterTSBCasesRecallsStoriesResponse|\StructType\FilterTSBCasesRecallsSystemsV3Response|\StructType\FilterTSBCasesRecallsSystemsV4Response|\StructType\FilterTSBSystemsV2Response|\StructType\FilterTSBSystemsV3Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
