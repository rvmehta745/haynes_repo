<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named findCarTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindCarTypes $parameters
     * @return \StructType\FindCarTypesResponse|bool
     */
    public function findCarTypes(\StructType\FindCarTypes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findCarTypes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findCarTypesByDetailsV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindCarTypesByDetailsV2 $parameters
     * @return \StructType\FindCarTypesByDetailsV2Response|bool
     */
    public function findCarTypesByDetailsV2(\StructType\FindCarTypesByDetailsV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findCarTypesByDetailsV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named findCarTypesByDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FindCarTypesByDetails $parameters
     * @return \StructType\FindCarTypesByDetailsResponse|bool
     */
    public function findCarTypesByDetails(\StructType\FindCarTypesByDetails $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->findCarTypesByDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\FindCarTypesByDetailsResponse|\StructType\FindCarTypesByDetailsV2Response|\StructType\FindCarTypesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
