<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Process ServiceType
 * @subpackage Services
 */
class Process extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named processRepairTasks2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ProcessRepairTasks2 $parameters
     * @return \StructType\ProcessRepairTasks2Response|bool
     */
    public function processRepairTasks2(\StructType\ProcessRepairTasks2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->processRepairTasks2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named processMaintenanceRepairTasks2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ProcessMaintenanceRepairTasks2 $parameters
     * @return \StructType\ProcessMaintenanceRepairTasks2Response|bool
     */
    public function processMaintenanceRepairTasks2(\StructType\ProcessMaintenanceRepairTasks2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->processMaintenanceRepairTasks2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named processRepairTasksV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ProcessRepairTasksV2 $parameters
     * @return \StructType\ProcessRepairTasksV2Response|bool
     */
    public function processRepairTasksV2(\StructType\ProcessRepairTasksV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->processRepairTasksV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named processRepairTasks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ProcessRepairTasks $parameters
     * @return \StructType\ProcessRepairTasksResponse|bool
     */
    public function processRepairTasks(\StructType\ProcessRepairTasks $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->processRepairTasks($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named processRepairTasksV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ProcessRepairTasksV3 $parameters
     * @return \StructType\ProcessRepairTasksV3Response|bool
     */
    public function processRepairTasksV3(\StructType\ProcessRepairTasksV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->processRepairTasksV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ProcessMaintenanceRepairTasks2Response|\StructType\ProcessRepairTasks2Response|\StructType\ProcessRepairTasksResponse|\StructType\ProcessRepairTasksV2Response|\StructType\ProcessRepairTasksV3Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
