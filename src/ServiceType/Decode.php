<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Decode ServiceType
 * @subpackage Services
 */
class Decode extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named decodeVIN
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DecodeVIN $parameters
     * @return \StructType\DecodeVINResponse|bool
     */
    public function decodeVIN(\StructType\DecodeVIN $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->decodeVIN($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named decodeVINV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DecodeVINV3 $parameters
     * @return \StructType\DecodeVINV3Response|bool
     */
    public function decodeVINV3(\StructType\DecodeVINV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->decodeVINV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named decodeVINV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DecodeVINV2 $parameters
     * @return \StructType\DecodeVINV2Response|bool
     */
    public function decodeVINV2(\StructType\DecodeVINV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->decodeVINV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\DecodeVINResponse|\StructType\DecodeVINV2Response|\StructType\DecodeVINV3Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
