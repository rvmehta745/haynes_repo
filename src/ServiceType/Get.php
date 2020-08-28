<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getVersion
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetVersion $parameters
     * @return \StructType\GetVersionResponse|bool
     */
    public function getVersion(\StructType\GetVersion $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getVersion($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSchemaLocations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSchemaLocations $parameters
     * @return \StructType\GetSchemaLocationsResponse|bool
     */
    public function getSchemaLocations(\StructType\GetSchemaLocations $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getSchemaLocations($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceSystemsV3Combinable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceSystemsV3Combinable $parameters
     * @return \StructType\GetMaintenanceSystemsV3CombinableResponse|bool
     */
    public function getMaintenanceSystemsV3Combinable(\StructType\GetMaintenanceSystemsV3Combinable $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceSystemsV3Combinable($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getMaintenanceTasksWithSmartLinksAndTimesV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceTasksWithSmartLinksAndTimesV2 $parameters
     * @return \StructType\GetMaintenanceTasksWithSmartLinksAndTimesV2Response|bool
     */
    public function getMaintenanceTasksWithSmartLinksAndTimesV2(\StructType\GetMaintenanceTasksWithSmartLinksAndTimesV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceTasksWithSmartLinksAndTimesV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeSubnodesTextSearchV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeSubnodesTextSearchV3 $parameters
     * @return \StructType\GetRepairtimeSubnodesTextSearchV3Response|bool
     */
    public function getRepairtimeSubnodesTextSearchV3(\StructType\GetRepairtimeSubnodesTextSearchV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeSubnodesTextSearchV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getMaintenanceTasksWithSmartLinksAndTimes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceTasksWithSmartLinksAndTimes $parameters
     * @return \StructType\GetMaintenanceTasksWithSmartLinksAndTimesResponse|bool
     */
    public function getMaintenanceTasksWithSmartLinksAndTimes(\StructType\GetMaintenanceTasksWithSmartLinksAndTimes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceTasksWithSmartLinksAndTimes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeSubnodesTextSearchV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeSubnodesTextSearchV2 $parameters
     * @return \StructType\GetRepairtimeSubnodesTextSearchV2Response|bool
     */
    public function getRepairtimeSubnodesTextSearchV2(\StructType\GetRepairtimeSubnodesTextSearchV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeSubnodesTextSearchV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceTasksWithSmartLinks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceTasksWithSmartLinks $parameters
     * @return \StructType\GetMaintenanceTasksWithSmartLinksResponse|bool
     */
    public function getMaintenanceTasksWithSmartLinks(\StructType\GetMaintenanceTasksWithSmartLinks $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceTasksWithSmartLinks($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getMaintenanceTasksWithSmartLinksV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceTasksWithSmartLinksV2 $parameters
     * @return \StructType\GetMaintenanceTasksWithSmartLinksV2Response|bool
     */
    public function getMaintenanceTasksWithSmartLinksV2(\StructType\GetMaintenanceTasksWithSmartLinksV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceTasksWithSmartLinksV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceTasksLocationBasedV6
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceTasksLocationBasedV6 $parameters
     * @return \StructType\GetMaintenanceTasksLocationBasedV6Response|bool
     */
    public function getMaintenanceTasksLocationBasedV6(\StructType\GetMaintenanceTasksLocationBasedV6 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceTasksLocationBasedV6($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getGeneralInformationLinksByGroupExtMap
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetGeneralInformationLinksByGroupExtMap $parameters
     * @return \StructType\GetGeneralInformationLinksByGroupExtMapResponse|bool
     */
    public function getGeneralInformationLinksByGroupExtMap(\StructType\GetGeneralInformationLinksByGroupExtMap $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getGeneralInformationLinksByGroupExtMap($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeInfosForMultipleNodes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeInfosForMultipleNodes $parameters
     * @return \StructType\GetRepairtimeInfosForMultipleNodesResponse|bool
     */
    public function getRepairtimeInfosForMultipleNodes(\StructType\GetRepairtimeInfosForMultipleNodes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeInfosForMultipleNodes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getGeneralArticlesByComponentNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetGeneralArticlesByComponentNumber $parameters
     * @return \StructType\GetGeneralArticlesByComponentNumberResponse|bool
     */
    public function getGeneralArticlesByComponentNumber(\StructType\GetGeneralArticlesByComponentNumber $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getGeneralArticlesByComponentNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getIdentificationByTecdocNumberTree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetIdentificationByTecdocNumberTree $parameters
     * @return \StructType\GetIdentificationByTecdocNumberTreeResponse|bool
     */
    public function getIdentificationByTecdocNumberTree(\StructType\GetIdentificationByTecdocNumberTree $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getIdentificationByTecdocNumberTree($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getGeneralInformationLinksByGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetGeneralInformationLinksByGroup $parameters
     * @return \StructType\GetGeneralInformationLinksByGroupResponse|bool
     */
    public function getGeneralInformationLinksByGroup(\StructType\GetGeneralInformationLinksByGroup $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getGeneralInformationLinksByGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getRepairtimeSubnodesSpecificTimesV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeSubnodesSpecificTimesV2 $parameters
     * @return \StructType\GetRepairtimeSubnodesSpecificTimesV2Response|bool
     */
    public function getRepairtimeSubnodesSpecificTimesV2(\StructType\GetRepairtimeSubnodesSpecificTimesV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeSubnodesSpecificTimesV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeSubnodesSpecificTimes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeSubnodesSpecificTimes $parameters
     * @return \StructType\GetRepairtimeSubnodesSpecificTimesResponse|bool
     */
    public function getRepairtimeSubnodesSpecificTimes(\StructType\GetRepairtimeSubnodesSpecificTimes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeSubnodesSpecificTimes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDiagnosisConnectorLocationImage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDiagnosisConnectorLocationImage $parameters
     * @return \StructType\GetDiagnosisConnectorLocationImageResponse|bool
     */
    public function getDiagnosisConnectorLocationImage(\StructType\GetDiagnosisConnectorLocationImage $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getDiagnosisConnectorLocationImage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getRepairtimeSubnodesSpecificTimesV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeSubnodesSpecificTimesV3 $parameters
     * @return \StructType\GetRepairtimeSubnodesSpecificTimesV3Response|bool
     */
    public function getRepairtimeSubnodesSpecificTimesV3(\StructType\GetRepairtimeSubnodesSpecificTimesV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeSubnodesSpecificTimesV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllModels
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAllModels $parameters
     * @return \StructType\GetAllModelsResponse|bool
     */
    public function getAllModels(\StructType\GetAllModels $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAllModels($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustmentsV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustmentsV3 $parameters
     * @return \StructType\GetAdjustmentsV3Response|bool
     */
    public function getAdjustmentsV3(\StructType\GetAdjustmentsV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustmentsV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustmentsV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustmentsV4 $parameters
     * @return \StructType\GetAdjustmentsV4Response|bool
     */
    public function getAdjustmentsV4(\StructType\GetAdjustmentsV4 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustmentsV4($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustmentsV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustmentsV5 $parameters
     * @return \StructType\GetAdjustmentsV5Response|bool
     */
    public function getAdjustmentsV5(\StructType\GetAdjustmentsV5 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustmentsV5($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustmentsV6
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustmentsV6 $parameters
     * @return \StructType\GetAdjustmentsV6Response|bool
     */
    public function getAdjustmentsV6(\StructType\GetAdjustmentsV6 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustmentsV6($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustments $parameters
     * @return \StructType\GetAdjustmentsResponse|bool
     */
    public function getAdjustments(\StructType\GetAdjustments $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustments($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustmentsV7
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustmentsV7 $parameters
     * @return \StructType\GetAdjustmentsV7Response|bool
     */
    public function getAdjustmentsV7(\StructType\GetAdjustmentsV7 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustmentsV7($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustmentsV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustmentsV2 $parameters
     * @return \StructType\GetAdjustmentsV2Response|bool
     */
    public function getAdjustmentsV2(\StructType\GetAdjustmentsV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustmentsV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLubricants
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLubricants $parameters
     * @return \StructType\GetLubricantsResponse|bool
     */
    public function getLubricants(\StructType\GetLubricants $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLubricants($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLubricantsV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLubricantsV2 $parameters
     * @return \StructType\GetLubricantsV2Response|bool
     */
    public function getLubricantsV2(\StructType\GetLubricantsV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLubricantsV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLubricantsV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLubricantsV3 $parameters
     * @return \StructType\GetLubricantsV3Response|bool
     */
    public function getLubricantsV3(\StructType\GetLubricantsV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLubricantsV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLubricantsV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLubricantsV4 $parameters
     * @return \StructType\GetLubricantsV4Response|bool
     */
    public function getLubricantsV4(\StructType\GetLubricantsV4 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLubricantsV4($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStoryOverview
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStoryOverview $parameters
     * @return \StructType\GetStoryOverviewResponse|bool
     */
    public function getStoryOverview(\StructType\GetStoryOverview $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getStoryOverview($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDrawingsV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDrawingsV3 $parameters
     * @return \StructType\GetDrawingsV3Response|bool
     */
    public function getDrawingsV3(\StructType\GetDrawingsV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getDrawingsV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWarningLights
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWarningLights $parameters
     * @return \StructType\GetWarningLightsResponse|bool
     */
    public function getWarningLights(\StructType\GetWarningLights $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getWarningLights($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDrawingsV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDrawingsV2 $parameters
     * @return \StructType\GetDrawingsV2Response|bool
     */
    public function getDrawingsV2(\StructType\GetDrawingsV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getDrawingsV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDiagnosis
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDiagnosis $parameters
     * @return \StructType\GetDiagnosisResponse|bool
     */
    public function getDiagnosis(\StructType\GetDiagnosis $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getDiagnosis($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getIdLocation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetIdLocation $parameters
     * @return \StructType\GetIdLocationResponse|bool
     */
    public function getIdLocation(\StructType\GetIdLocation $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getIdLocation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMakes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMakes $parameters
     * @return \StructType\GetMakesResponse|bool
     */
    public function getMakes(\StructType\GetMakes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMakes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEobdLocations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEobdLocations $parameters
     * @return \StructType\GetEobdLocationsResponse|bool
     */
    public function getEobdLocations(\StructType\GetEobdLocations $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getEobdLocations($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getIdLocationV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetIdLocationV2 $parameters
     * @return \StructType\GetIdLocationV2Response|bool
     */
    public function getIdLocationV2(\StructType\GetIdLocationV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getIdLocationV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFuseLocations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFuseLocations $parameters
     * @return \StructType\GetFuseLocationsResponse|bool
     */
    public function getFuseLocations(\StructType\GetFuseLocations $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getFuseLocations($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDrawingsV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDrawingsV4 $parameters
     * @return \StructType\GetDrawingsV4Response|bool
     */
    public function getDrawingsV4(\StructType\GetDrawingsV4 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getDrawingsV4($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDrawings
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDrawings $parameters
     * @return \StructType\GetDrawingsResponse|bool
     */
    public function getDrawings(\StructType\GetDrawings $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getDrawings($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFullTree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFullTree $parameters
     * @return \StructType\GetFullTreeResponse|bool
     */
    public function getFullTree(\StructType\GetFullTree $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getFullTree($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCarTypesByKBA
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCarTypesByKBA $parameters
     * @return \StructType\GetCarTypesByKBAResponse|bool
     */
    public function getCarTypesByKBA(\StructType\GetCarTypesByKBA $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCarTypesByKBA($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSubCarTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSubCarTypes $parameters
     * @return \StructType\GetSubCarTypesResponse|bool
     */
    public function getSubCarTypes(\StructType\GetSubCarTypes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getSubCarTypes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTSBSystems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTSBSystems $parameters
     * @return \StructType\GetTSBSystemsResponse|bool
     */
    public function getTSBSystems(\StructType\GetTSBSystems $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTSBSystems($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTSBSystemsV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTSBSystemsV3 $parameters
     * @return \StructType\GetTSBSystemsV3Response|bool
     */
    public function getTSBSystemsV3(\StructType\GetTSBSystemsV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTSBSystemsV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTSBSystemsV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTSBSystemsV2 $parameters
     * @return \StructType\GetTSBSystemsV2Response|bool
     */
    public function getTSBSystemsV2(\StructType\GetTSBSystemsV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTSBSystemsV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCarTypeById
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCarTypeById $parameters
     * @return \StructType\GetCarTypeByIdResponse|bool
     */
    public function getCarTypeById(\StructType\GetCarTypeById $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCarTypeById($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllMakes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAllMakes $parameters
     * @return \StructType\GetAllMakesResponse|bool
     */
    public function getAllMakes(\StructType\GetAllMakes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAllMakes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTSBData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTSBData $parameters
     * @return \StructType\GetTSBDataResponse|bool
     */
    public function getTSBData(\StructType\GetTSBData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTSBData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSystems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSystems $parameters
     * @return \StructType\GetSystemsResponse|bool
     */
    public function getSystems(\StructType\GetSystems $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getSystems($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRecallData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRecallData $parameters
     * @return \StructType\GetRecallDataResponse|bool
     */
    public function getRecallData(\StructType\GetRecallData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRecallData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRecallDataV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRecallDataV2 $parameters
     * @return \StructType\GetRecallDataV2Response|bool
     */
    public function getRecallDataV2(\StructType\GetRecallDataV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRecallDataV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTSBDataV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTSBDataV2 $parameters
     * @return \StructType\GetTSBDataV2Response|bool
     */
    public function getTSBDataV2(\StructType\GetTSBDataV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTSBDataV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTSBDataV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTSBDataV3 $parameters
     * @return \StructType\GetTSBDataV3Response|bool
     */
    public function getTSBDataV3(\StructType\GetTSBDataV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTSBDataV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSystemsV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSystemsV2 $parameters
     * @return \StructType\GetSystemsV2Response|bool
     */
    public function getSystemsV2(\StructType\GetSystemsV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getSystemsV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getNetworksV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetNetworksV2 $parameters
     * @return \StructType\GetNetworksV2Response|bool
     */
    public function getNetworksV2(\StructType\GetNetworksV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getNetworksV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSmartCaseData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSmartCaseData $parameters
     * @return \StructType\GetSmartCaseDataResponse|bool
     */
    public function getSmartCaseData(\StructType\GetSmartCaseData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getSmartCaseData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSmartCaseDataV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSmartCaseDataV2 $parameters
     * @return \StructType\GetSmartCaseDataV2Response|bool
     */
    public function getSmartCaseDataV2(\StructType\GetSmartCaseDataV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getSmartCaseDataV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSpecificType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSpecificType $parameters
     * @return \StructType\GetSpecificTypeResponse|bool
     */
    public function getSpecificType(\StructType\GetSpecificType $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getSpecificType($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getNetworks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetNetworks $parameters
     * @return \StructType\GetNetworksResponse|bool
     */
    public function getNetworks(\StructType\GetNetworks $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getNetworks($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStoryInfoV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStoryInfoV5 $parameters
     * @return \StructType\GetStoryInfoV5Response|bool
     */
    public function getStoryInfoV5(\StructType\GetStoryInfoV5 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getStoryInfoV5($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStoryInfoV6
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStoryInfoV6 $parameters
     * @return \StructType\GetStoryInfoV6Response|bool
     */
    public function getStoryInfoV6(\StructType\GetStoryInfoV6 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getStoryInfoV6($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDisclaimerV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDisclaimerV2 $parameters
     * @return \StructType\GetDisclaimerV2Response|bool
     */
    public function getDisclaimerV2(\StructType\GetDisclaimerV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getDisclaimerV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStoryInfoV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStoryInfoV2 $parameters
     * @return \StructType\GetStoryInfoV2Response|bool
     */
    public function getStoryInfoV2(\StructType\GetStoryInfoV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getStoryInfoV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStoryInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStoryInfo $parameters
     * @return \StructType\GetStoryInfoResponse|bool
     */
    public function getStoryInfo(\StructType\GetStoryInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getStoryInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStoryInfoV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStoryInfoV3 $parameters
     * @return \StructType\GetStoryInfoV3Response|bool
     */
    public function getStoryInfoV3(\StructType\GetStoryInfoV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getStoryInfoV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDisclaimer
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDisclaimer $parameters
     * @return \StructType\GetDisclaimerResponse|bool
     */
    public function getDisclaimer(\StructType\GetDisclaimer $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getDisclaimer($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFaultCodeLog
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFaultCodeLog $parameters
     * @return \StructType\GetFaultCodeLogResponse|bool
     */
    public function getFaultCodeLog(\StructType\GetFaultCodeLog $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getFaultCodeLog($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStoryInfoV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStoryInfoV4 $parameters
     * @return \StructType\GetStoryInfoV4Response|bool
     */
    public function getStoryInfoV4(\StructType\GetStoryInfoV4 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getStoryInfoV4($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAllTypes $parameters
     * @return \StructType\GetAllTypesResponse|bool
     */
    public function getAllTypes(\StructType\GetAllTypes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAllTypes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAuthenticationVrid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAuthenticationVrid $parameters
     * @return \StructType\GetAuthenticationVridResponse|bool
     */
    public function getAuthenticationVrid(\StructType\GetAuthenticationVrid $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAuthenticationVrid($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceSystemsV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceSystemsV5 $parameters
     * @return \StructType\GetMaintenanceSystemsV5Response|bool
     */
    public function getMaintenanceSystemsV5(\StructType\GetMaintenanceSystemsV5 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceSystemsV5($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceSystemsV6
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceSystemsV6 $parameters
     * @return \StructType\GetMaintenanceSystemsV6Response|bool
     */
    public function getMaintenanceSystemsV6(\StructType\GetMaintenanceSystemsV6 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceSystemsV6($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceSystemOverviewV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceSystemOverviewV2 $parameters
     * @return \StructType\GetMaintenanceSystemOverviewV2Response|bool
     */
    public function getMaintenanceSystemOverviewV2(\StructType\GetMaintenanceSystemOverviewV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceSystemOverviewV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceSystemsImperialV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceSystemsImperialV2 $parameters
     * @return \StructType\GetMaintenanceSystemsImperialV2Response|bool
     */
    public function getMaintenanceSystemsImperialV2(\StructType\GetMaintenanceSystemsImperialV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceSystemsImperialV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceTasks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceTasks $parameters
     * @return \StructType\GetMaintenanceTasksResponse|bool
     */
    public function getMaintenanceTasks(\StructType\GetMaintenanceTasks $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceTasks($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceForms
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceForms $parameters
     * @return \StructType\GetMaintenanceFormsResponse|bool
     */
    public function getMaintenanceForms(\StructType\GetMaintenanceForms $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceForms($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceSystemsV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceSystemsV2 $parameters
     * @return \StructType\GetMaintenanceSystemsV2Response|bool
     */
    public function getMaintenanceSystemsV2(\StructType\GetMaintenanceSystemsV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceSystemsV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceTasksWithTimes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceTasksWithTimes $parameters
     * @return \StructType\GetMaintenanceTasksWithTimesResponse|bool
     */
    public function getMaintenanceTasksWithTimes(\StructType\GetMaintenanceTasksWithTimes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceTasksWithTimes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTimingBeltMaintenanceTasks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTimingBeltMaintenanceTasks $parameters
     * @return \StructType\GetTimingBeltMaintenanceTasksResponse|bool
     */
    public function getTimingBeltMaintenanceTasks(\StructType\GetTimingBeltMaintenanceTasks $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTimingBeltMaintenanceTasks($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceTasksV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceTasksV2 $parameters
     * @return \StructType\GetMaintenanceTasksV2Response|bool
     */
    public function getMaintenanceTasksV2(\StructType\GetMaintenanceTasksV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceTasksV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTimingBeltMaintenanceTasksV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTimingBeltMaintenanceTasksV2 $parameters
     * @return \StructType\GetTimingBeltMaintenanceTasksV2Response|bool
     */
    public function getTimingBeltMaintenanceTasksV2(\StructType\GetTimingBeltMaintenanceTasksV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTimingBeltMaintenanceTasksV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceSystemOverview
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceSystemOverview $parameters
     * @return \StructType\GetMaintenanceSystemOverviewResponse|bool
     */
    public function getMaintenanceSystemOverview(\StructType\GetMaintenanceSystemOverview $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceSystemOverview($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceSystems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceSystems $parameters
     * @return \StructType\GetMaintenanceSystemsResponse|bool
     */
    public function getMaintenanceSystems(\StructType\GetMaintenanceSystems $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceSystems($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTimingBeltMaintenanceTasksV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTimingBeltMaintenanceTasksV3 $parameters
     * @return \StructType\GetTimingBeltMaintenanceTasksV3Response|bool
     */
    public function getTimingBeltMaintenanceTasksV3(\StructType\GetTimingBeltMaintenanceTasksV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTimingBeltMaintenanceTasksV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceTasksV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceTasksV3 $parameters
     * @return \StructType\GetMaintenanceTasksV3Response|bool
     */
    public function getMaintenanceTasksV3(\StructType\GetMaintenanceTasksV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceTasksV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceTasksV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceTasksV4 $parameters
     * @return \StructType\GetMaintenanceTasksV4Response|bool
     */
    public function getMaintenanceTasksV4(\StructType\GetMaintenanceTasksV4 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceTasksV4($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceTasksV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceTasksV5 $parameters
     * @return \StructType\GetMaintenanceTasksV5Response|bool
     */
    public function getMaintenanceTasksV5(\StructType\GetMaintenanceTasksV5 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceTasksV5($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceTasksV6
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceTasksV6 $parameters
     * @return \StructType\GetMaintenanceTasksV6Response|bool
     */
    public function getMaintenanceTasksV6(\StructType\GetMaintenanceTasksV6 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceTasksV6($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceTasksWithTimesV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceTasksWithTimesV2 $parameters
     * @return \StructType\GetMaintenanceTasksWithTimesV2Response|bool
     */
    public function getMaintenanceTasksWithTimesV2(\StructType\GetMaintenanceTasksWithTimesV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceTasksWithTimesV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceSystemsV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceSystemsV4 $parameters
     * @return \StructType\GetMaintenanceSystemsV4Response|bool
     */
    public function getMaintenanceSystemsV4(\StructType\GetMaintenanceSystemsV4 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceSystemsV4($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceSystemsImperial
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceSystemsImperial $parameters
     * @return \StructType\GetMaintenanceSystemsImperialResponse|bool
     */
    public function getMaintenanceSystemsImperial(\StructType\GetMaintenanceSystemsImperial $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceSystemsImperial($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAuthenticationUserVrid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAuthenticationUserVrid $parameters
     * @return \StructType\GetAuthenticationUserVridResponse|bool
     */
    public function getAuthenticationUserVrid(\StructType\GetAuthenticationUserVrid $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAuthenticationUserVrid($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceSystemsV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceSystemsV3 $parameters
     * @return \StructType\GetMaintenanceSystemsV3Response|bool
     */
    public function getMaintenanceSystemsV3(\StructType\GetMaintenanceSystemsV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceSystemsV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWearPartsIntervalsV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWearPartsIntervalsV2 $parameters
     * @return \StructType\GetWearPartsIntervalsV2Response|bool
     */
    public function getWearPartsIntervalsV2(\StructType\GetWearPartsIntervalsV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getWearPartsIntervalsV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceTasksV7
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceTasksV7 $parameters
     * @return \StructType\GetMaintenanceTasksV7Response|bool
     */
    public function getMaintenanceTasksV7(\StructType\GetMaintenanceTasksV7 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceTasksV7($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCalculatedMaintenance
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCalculatedMaintenance $parameters
     * @return \StructType\GetCalculatedMaintenanceResponse|bool
     */
    public function getCalculatedMaintenance(\StructType\GetCalculatedMaintenance $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCalculatedMaintenance($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustmentsByGroupV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustmentsByGroupV2 $parameters
     * @return \StructType\GetAdjustmentsByGroupV2Response|bool
     */
    public function getAdjustmentsByGroupV2(\StructType\GetAdjustmentsByGroupV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustmentsByGroupV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceExtraInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceExtraInfo $parameters
     * @return \StructType\GetMaintenanceExtraInfoResponse|bool
     */
    public function getMaintenanceExtraInfo(\StructType\GetMaintenanceExtraInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceExtraInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLubricantCapacitiesByGrpupV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLubricantCapacitiesByGrpupV2 $parameters
     * @return \StructType\GetLubricantCapacitiesByGrpupV2Response|bool
     */
    public function getLubricantCapacitiesByGrpupV2(\StructType\GetLubricantCapacitiesByGrpupV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLubricantCapacitiesByGrpupV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTimingBeltMaintenanceTasksV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTimingBeltMaintenanceTasksV5 $parameters
     * @return \StructType\GetTimingBeltMaintenanceTasksV5Response|bool
     */
    public function getTimingBeltMaintenanceTasksV5(\StructType\GetTimingBeltMaintenanceTasksV5 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTimingBeltMaintenanceTasksV5($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustmentsEnvOnlyV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustmentsEnvOnlyV2 $parameters
     * @return \StructType\GetAdjustmentsEnvOnlyV2Response|bool
     */
    public function getAdjustmentsEnvOnlyV2(\StructType\GetAdjustmentsEnvOnlyV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustmentsEnvOnlyV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWearPartsIntervalsV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWearPartsIntervalsV3 $parameters
     * @return \StructType\GetWearPartsIntervalsV3Response|bool
     */
    public function getWearPartsIntervalsV3(\StructType\GetWearPartsIntervalsV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getWearPartsIntervalsV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceServiceReset
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceServiceReset $parameters
     * @return \StructType\GetMaintenanceServiceResetResponse|bool
     */
    public function getMaintenanceServiceReset(\StructType\GetMaintenanceServiceReset $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceServiceReset($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceStories
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceStories $parameters
     * @return \StructType\GetMaintenanceStoriesResponse|bool
     */
    public function getMaintenanceStories(\StructType\GetMaintenanceStories $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceStories($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLubricantCapacitiesV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLubricantCapacitiesV2 $parameters
     * @return \StructType\GetLubricantCapacitiesV2Response|bool
     */
    public function getLubricantCapacitiesV2(\StructType\GetLubricantCapacitiesV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLubricantCapacitiesV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustmentsEnvOnlyV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustmentsEnvOnlyV3 $parameters
     * @return \StructType\GetAdjustmentsEnvOnlyV3Response|bool
     */
    public function getAdjustmentsEnvOnlyV3(\StructType\GetAdjustmentsEnvOnlyV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustmentsEnvOnlyV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLubricantCapacitiesV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLubricantCapacitiesV3 $parameters
     * @return \StructType\GetLubricantCapacitiesV3Response|bool
     */
    public function getLubricantCapacitiesV3(\StructType\GetLubricantCapacitiesV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLubricantCapacitiesV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLubricantsByGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLubricantsByGroup $parameters
     * @return \StructType\GetLubricantsByGroupResponse|bool
     */
    public function getLubricantsByGroup(\StructType\GetLubricantsByGroup $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLubricantsByGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenanceKeys
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenanceKeys $parameters
     * @return \StructType\GetMaintenanceKeysResponse|bool
     */
    public function getMaintenanceKeys(\StructType\GetMaintenanceKeys $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenanceKeys($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWearPartsIntervals
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWearPartsIntervals $parameters
     * @return \StructType\GetWearPartsIntervalsResponse|bool
     */
    public function getWearPartsIntervals(\StructType\GetWearPartsIntervals $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getWearPartsIntervals($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLubricantsArticlesV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLubricantsArticlesV2 $parameters
     * @return \StructType\GetLubricantsArticlesV2Response|bool
     */
    public function getLubricantsArticlesV2(\StructType\GetLubricantsArticlesV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLubricantsArticlesV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTimingBeltMaintenanceTasksV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTimingBeltMaintenanceTasksV4 $parameters
     * @return \StructType\GetTimingBeltMaintenanceTasksV4Response|bool
     */
    public function getTimingBeltMaintenanceTasksV4(\StructType\GetTimingBeltMaintenanceTasksV4 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTimingBeltMaintenanceTasksV4($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustmentsEnvOnlyWithIds
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustmentsEnvOnlyWithIds $parameters
     * @return \StructType\GetAdjustmentsEnvOnlyWithIdsResponse|bool
     */
    public function getAdjustmentsEnvOnlyWithIds(\StructType\GetAdjustmentsEnvOnlyWithIds $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustmentsEnvOnlyWithIds($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWarningLightsV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWarningLightsV2 $parameters
     * @return \StructType\GetWarningLightsV2Response|bool
     */
    public function getWarningLightsV2(\StructType\GetWarningLightsV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getWarningLightsV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTimingStoryOverview
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTimingStoryOverview $parameters
     * @return \StructType\GetTimingStoryOverviewResponse|bool
     */
    public function getTimingStoryOverview(\StructType\GetTimingStoryOverview $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTimingStoryOverview($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustmentsByGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustmentsByGroup $parameters
     * @return \StructType\GetAdjustmentsByGroupResponse|bool
     */
    public function getAdjustmentsByGroup(\StructType\GetAdjustmentsByGroup $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustmentsByGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLubricantCapacities
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLubricantCapacities $parameters
     * @return \StructType\GetLubricantCapacitiesResponse|bool
     */
    public function getLubricantCapacities(\StructType\GetLubricantCapacities $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLubricantCapacities($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustmentsEnvOnly
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustmentsEnvOnly $parameters
     * @return \StructType\GetAdjustmentsEnvOnlyResponse|bool
     */
    public function getAdjustmentsEnvOnly(\StructType\GetAdjustmentsEnvOnly $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustmentsEnvOnly($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCalculatedMaintenanceV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCalculatedMaintenanceV2 $parameters
     * @return \StructType\GetCalculatedMaintenanceV2Response|bool
     */
    public function getCalculatedMaintenanceV2(\StructType\GetCalculatedMaintenanceV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCalculatedMaintenanceV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustemntExtraInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustemntExtraInfo $parameters
     * @return \StructType\GetAdjustemntExtraInfoResponse|bool
     */
    public function getAdjustemntExtraInfo(\StructType\GetAdjustemntExtraInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustemntExtraInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeSubnodesByGroupV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeSubnodesByGroupV2 $parameters
     * @return \StructType\GetRepairtimeSubnodesByGroupV2Response|bool
     */
    public function getRepairtimeSubnodesByGroupV2(\StructType\GetRepairtimeSubnodesByGroupV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeSubnodesByGroupV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStoryOverviewByGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStoryOverviewByGroup $parameters
     * @return \StructType\GetStoryOverviewByGroupResponse|bool
     */
    public function getStoryOverviewByGroup(\StructType\GetStoryOverviewByGroup $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getStoryOverviewByGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWiringDiagramSystems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWiringDiagramSystems $parameters
     * @return \StructType\GetWiringDiagramSystemsResponse|bool
     */
    public function getWiringDiagramSystems(\StructType\GetWiringDiagramSystems $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getWiringDiagramSystems($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeSubnodesTextSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeSubnodesTextSearch $parameters
     * @return \StructType\GetRepairtimeSubnodesTextSearchResponse|bool
     */
    public function getRepairtimeSubnodesTextSearch(\StructType\GetRepairtimeSubnodesTextSearch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeSubnodesTextSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWiringDiagramSchemes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWiringDiagramSchemes $parameters
     * @return \StructType\GetWiringDiagramSchemesResponse|bool
     */
    public function getWiringDiagramSchemes(\StructType\GetWiringDiagramSchemes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getWiringDiagramSchemes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeNodes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeNodes $parameters
     * @return \StructType\GetRepairtimeNodesResponse|bool
     */
    public function getRepairtimeNodes(\StructType\GetRepairtimeNodes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeNodes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeNodesV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeNodesV3 $parameters
     * @return \StructType\GetRepairtimeNodesV3Response|bool
     */
    public function getRepairtimeNodesV3(\StructType\GetRepairtimeNodesV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeNodesV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeInfosV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeInfosV2 $parameters
     * @return \StructType\GetRepairtimeInfosV2Response|bool
     */
    public function getRepairtimeInfosV2(\StructType\GetRepairtimeInfosV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeInfosV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeInfosV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeInfosV3 $parameters
     * @return \StructType\GetRepairtimeInfosV3Response|bool
     */
    public function getRepairtimeInfosV3(\StructType\GetRepairtimeInfosV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeInfosV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeInfos
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeInfos $parameters
     * @return \StructType\GetRepairtimeInfosResponse|bool
     */
    public function getRepairtimeInfos(\StructType\GetRepairtimeInfos $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeInfos($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeTypesV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeTypesV2 $parameters
     * @return \StructType\GetRepairtimeTypesV2Response|bool
     */
    public function getRepairtimeTypesV2(\StructType\GetRepairtimeTypesV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeTypesV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStoryGeneralArticles
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStoryGeneralArticles $parameters
     * @return \StructType\GetStoryGeneralArticlesResponse|bool
     */
    public function getStoryGeneralArticles(\StructType\GetStoryGeneralArticles $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getStoryGeneralArticles($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeSubnodesByGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeSubnodesByGroup $parameters
     * @return \StructType\GetRepairtimeSubnodesByGroupResponse|bool
     */
    public function getRepairtimeSubnodesByGroup(\StructType\GetRepairtimeSubnodesByGroup $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeSubnodesByGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeTypes $parameters
     * @return \StructType\GetRepairtimeTypesResponse|bool
     */
    public function getRepairtimeTypes(\StructType\GetRepairtimeTypes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeTypes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTimingStoriesOverview
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTimingStoriesOverview $parameters
     * @return \StructType\GetTimingStoriesOverviewResponse|bool
     */
    public function getTimingStoriesOverview(\StructType\GetTimingStoriesOverview $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTimingStoriesOverview($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeSubnodes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeSubnodes $parameters
     * @return \StructType\GetRepairtimeSubnodesResponse|bool
     */
    public function getRepairtimeSubnodes(\StructType\GetRepairtimeSubnodes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeSubnodes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDrawingsByGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDrawingsByGroup $parameters
     * @return \StructType\GetDrawingsByGroupResponse|bool
     */
    public function getDrawingsByGroup(\StructType\GetDrawingsByGroup $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getDrawingsByGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeNodesV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeNodesV2 $parameters
     * @return \StructType\GetRepairtimeNodesV2Response|bool
     */
    public function getRepairtimeNodesV2(\StructType\GetRepairtimeNodesV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeNodesV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdjustemntExtraInfoV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdjustemntExtraInfoV2 $parameters
     * @return \StructType\GetAdjustemntExtraInfoV2Response|bool
     */
    public function getAdjustemntExtraInfoV2(\StructType\GetAdjustemntExtraInfoV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAdjustemntExtraInfoV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeSubnodesByGroupV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeSubnodesByGroupV3 $parameters
     * @return \StructType\GetRepairtimeSubnodesByGroupV3Response|bool
     */
    public function getRepairtimeSubnodesByGroupV3(\StructType\GetRepairtimeSubnodesByGroupV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeSubnodesByGroupV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWiringComponents
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWiringComponents $parameters
     * @return \StructType\GetWiringComponentsResponse|bool
     */
    public function getWiringComponents(\StructType\GetWiringComponents $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getWiringComponents($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getWiringDiagramTypesByGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWiringDiagramTypesByGroup $parameters
     * @return \StructType\GetWiringDiagramTypesByGroupResponse|bool
     */
    public function getWiringDiagramTypesByGroup(\StructType\GetWiringDiagramTypesByGroup $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getWiringDiagramTypesByGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getGeneralArticlesDescriptions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetGeneralArticlesDescriptions $parameters
     * @return \StructType\GetGeneralArticlesDescriptionsResponse|bool
     */
    public function getGeneralArticlesDescriptions(\StructType\GetGeneralArticlesDescriptions $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getGeneralArticlesDescriptions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getManagementComponents
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetManagementComponents $parameters
     * @return \StructType\GetManagementComponentsResponse|bool
     */
    public function getManagementComponents(\StructType\GetManagementComponents $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getManagementComponents($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getIdentificationTree
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetIdentificationTree $parameters
     * @return \StructType\GetIdentificationTreeResponse|bool
     */
    public function getIdentificationTree(\StructType\GetIdentificationTree $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getIdentificationTree($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSchemaLocations2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSchemaLocations2 $parameters
     * @return \StructType\GetSchemaLocations2Response|bool
     */
    public function getSchemaLocations2(\StructType\GetSchemaLocations2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getSchemaLocations2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getManagementSystems
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetManagementSystems $parameters
     * @return \StructType\GetManagementSystemsResponse|bool
     */
    public function getManagementSystems(\StructType\GetManagementSystems $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getManagementSystems($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeNodesForManyGenarts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeNodesForManyGenarts $parameters
     * @return \StructType\GetRepairtimeNodesForManyGenartsResponse|bool
     */
    public function getRepairtimeNodesForManyGenarts(\StructType\GetRepairtimeNodesForManyGenarts $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeNodesForManyGenarts($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getGeneralInformationLinksExtMap
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetGeneralInformationLinksExtMap $parameters
     * @return \StructType\GetGeneralInformationLinksExtMapResponse|bool
     */
    public function getGeneralInformationLinksExtMap(\StructType\GetGeneralInformationLinksExtMap $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getGeneralInformationLinksExtMap($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getManagementFaultCode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetManagementFaultCode $parameters
     * @return \StructType\GetManagementFaultCodeResponse|bool
     */
    public function getManagementFaultCode(\StructType\GetManagementFaultCode $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getManagementFaultCode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDiagnosisAvailableCodes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDiagnosisAvailableCodes $parameters
     * @return \StructType\GetDiagnosisAvailableCodesResponse|bool
     */
    public function getDiagnosisAvailableCodes(\StructType\GetDiagnosisAvailableCodes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getDiagnosisAvailableCodes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getIdentificationByTecdocNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetIdentificationByTecdocNumber $parameters
     * @return \StructType\GetIdentificationByTecdocNumberResponse|bool
     */
    public function getIdentificationByTecdocNumber(\StructType\GetIdentificationByTecdocNumber $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getIdentificationByTecdocNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCarTypesByTecdocNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCarTypesByTecdocNumber $parameters
     * @return \StructType\GetCarTypesByTecdocNumberResponse|bool
     */
    public function getCarTypesByTecdocNumber(\StructType\GetCarTypesByTecdocNumber $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCarTypesByTecdocNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCarTypesByTecdocTruckNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCarTypesByTecdocTruckNumber $parameters
     * @return \StructType\GetCarTypesByTecdocTruckNumberResponse|bool
     */
    public function getCarTypesByTecdocTruckNumber(\StructType\GetCarTypesByTecdocTruckNumber $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCarTypesByTecdocTruckNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPhysicalLocations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetPhysicalLocations $parameters
     * @return \StructType\GetPhysicalLocationsResponse|bool
     */
    public function getPhysicalLocations(\StructType\GetPhysicalLocations $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getPhysicalLocations($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCarTypesUpdateStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCarTypesUpdateStatus $parameters
     * @return \StructType\GetCarTypesUpdateStatusResponse|bool
     */
    public function getCarTypesUpdateStatus(\StructType\GetCarTypesUpdateStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCarTypesUpdateStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeNodesForGenart
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeNodesForGenart $parameters
     * @return \StructType\GetRepairtimeNodesForGenartResponse|bool
     */
    public function getRepairtimeNodesForGenart(\StructType\GetRepairtimeNodesForGenart $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeNodesForGenart($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEobdLocationsForModel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEobdLocationsForModel $parameters
     * @return \StructType\GetEobdLocationsForModelResponse|bool
     */
    public function getEobdLocationsForModel(\StructType\GetEobdLocationsForModel $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getEobdLocationsForModel($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getManagementComponentExtraInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetManagementComponentExtraInfo $parameters
     * @return \StructType\GetManagementComponentExtraInfoResponse|bool
     */
    public function getManagementComponentExtraInfo(\StructType\GetManagementComponentExtraInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getManagementComponentExtraInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCarTypesByTecdocNumberV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCarTypesByTecdocNumberV2 $parameters
     * @return \StructType\GetCarTypesByTecdocNumberV2Response|bool
     */
    public function getCarTypesByTecdocNumberV2(\StructType\GetCarTypesByTecdocNumberV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCarTypesByTecdocNumberV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getGeneralInformationLinks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetGeneralInformationLinks $parameters
     * @return \StructType\GetGeneralInformationLinksResponse|bool
     */
    public function getGeneralInformationLinks(\StructType\GetGeneralInformationLinks $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getGeneralInformationLinks($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEngineLocations
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEngineLocations $parameters
     * @return \StructType\GetEngineLocationsResponse|bool
     */
    public function getEngineLocations(\StructType\GetEngineLocations $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getEngineLocations($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeNodesByGenartsV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeNodesByGenartsV2 $parameters
     * @return \StructType\GetRepairtimeNodesByGenartsV2Response|bool
     */
    public function getRepairtimeNodesByGenartsV2(\StructType\GetRepairtimeNodesByGenartsV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeNodesByGenartsV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRepairtimeNodesByGenartsV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRepairtimeNodesByGenartsV3 $parameters
     * @return \StructType\GetRepairtimeNodesByGenartsV3Response|bool
     */
    public function getRepairtimeNodesByGenartsV3(\StructType\GetRepairtimeNodesByGenartsV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRepairtimeNodesByGenartsV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCompleteComponentV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompleteComponentV3 $parameters
     * @return \StructType\GetCompleteComponentV3Response|bool
     */
    public function getCompleteComponentV3(\StructType\GetCompleteComponentV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCompleteComponentV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSmartPackFaultCodes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSmartPackFaultCodes $parameters
     * @return \StructType\GetSmartPackFaultCodesResponse|bool
     */
    public function getSmartPackFaultCodes(\StructType\GetSmartPackFaultCodes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getSmartPackFaultCodes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCasesSystemsV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCasesSystemsV3 $parameters
     * @return \StructType\GetCasesSystemsV3Response|bool
     */
    public function getCasesSystemsV3(\StructType\GetCasesSystemsV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCasesSystemsV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCompleteComponentV6
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompleteComponentV6 $parameters
     * @return \StructType\GetCompleteComponentV6Response|bool
     */
    public function getCompleteComponentV6(\StructType\GetCompleteComponentV6 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCompleteComponentV6($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCompleteComponentV7
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompleteComponentV7 $parameters
     * @return \StructType\GetCompleteComponentV7Response|bool
     */
    public function getCompleteComponentV7(\StructType\GetCompleteComponentV7 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCompleteComponentV7($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCompleteComponentV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompleteComponentV4 $parameters
     * @return \StructType\GetCompleteComponentV4Response|bool
     */
    public function getCompleteComponentV4(\StructType\GetCompleteComponentV4 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCompleteComponentV4($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFaultCode2ForId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFaultCode2ForId $parameters
     * @return \StructType\GetFaultCode2ForIdResponse|bool
     */
    public function getFaultCode2ForId(\StructType\GetFaultCode2ForId $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getFaultCode2ForId($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTSBCasesRecallsSystemsV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTSBCasesRecallsSystemsV3 $parameters
     * @return \StructType\GetTSBCasesRecallsSystemsV3Response|bool
     */
    public function getTSBCasesRecallsSystemsV3(\StructType\GetTSBCasesRecallsSystemsV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTSBCasesRecallsSystemsV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getComponentLists
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetComponentLists $parameters
     * @return \StructType\GetComponentListsResponse|bool
     */
    public function getComponentLists(\StructType\GetComponentLists $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getComponentLists($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCompleteComponentV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompleteComponentV2 $parameters
     * @return \StructType\GetCompleteComponentV2Response|bool
     */
    public function getCompleteComponentV2(\StructType\GetCompleteComponentV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCompleteComponentV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getComponentListsV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetComponentListsV2 $parameters
     * @return \StructType\GetComponentListsV2Response|bool
     */
    public function getComponentListsV2(\StructType\GetComponentListsV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getComponentListsV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTSBCasesRecallsSystemsV4
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTSBCasesRecallsSystemsV4 $parameters
     * @return \StructType\GetTSBCasesRecallsSystemsV4Response|bool
     */
    public function getTSBCasesRecallsSystemsV4(\StructType\GetTSBCasesRecallsSystemsV4 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTSBCasesRecallsSystemsV4($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCompleteComponentV5
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompleteComponentV5 $parameters
     * @return \StructType\GetCompleteComponentV5Response|bool
     */
    public function getCompleteComponentV5(\StructType\GetCompleteComponentV5 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCompleteComponentV5($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCompleteComponent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompleteComponent $parameters
     * @return \StructType\GetCompleteComponentResponse|bool
     */
    public function getCompleteComponent(\StructType\GetCompleteComponent $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getCompleteComponent($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFaultCodesForType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFaultCodesForType $parameters
     * @return \StructType\GetFaultCodesForTypeResponse|bool
     */
    public function getFaultCodesForType(\StructType\GetFaultCodesForType $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getFaultCodesForType($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRecallsSystemsV3
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetRecallsSystemsV3 $parameters
     * @return \StructType\GetRecallsSystemsV3Response|bool
     */
    public function getRecallsSystemsV3(\StructType\GetRecallsSystemsV3 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getRecallsSystemsV3($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAuthenticationDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAuthenticationDetails $parameters
     * @return \StructType\GetAuthenticationDetailsResponse|bool
     */
    public function getAuthenticationDetails(\StructType\GetAuthenticationDetails $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAuthenticationDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getManagementComponent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetManagementComponent $parameters
     * @return \StructType\GetManagementComponentResponse|bool
     */
    public function getManagementComponent(\StructType\GetManagementComponent $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getManagementComponent($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStoryInfoByGenart
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStoryInfoByGenart $parameters
     * @return \StructType\GetStoryInfoByGenartResponse|bool
     */
    public function getStoryInfoByGenart(\StructType\GetStoryInfoByGenart $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getStoryInfoByGenart($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMaintenancePartsForPeriod
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMaintenancePartsForPeriod $parameters
     * @return \StructType\GetMaintenancePartsForPeriodResponse|bool
     */
    public function getMaintenancePartsForPeriod(\StructType\GetMaintenancePartsForPeriod $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getMaintenancePartsForPeriod($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAxleComponents
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAxleComponents $parameters
     * @return \StructType\GetAxleComponentsResponse|bool
     */
    public function getAxleComponents(\StructType\GetAxleComponents $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getAxleComponents($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLocationSystemV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLocationSystemV2 $parameters
     * @return \StructType\GetLocationSystemV2Response|bool
     */
    public function getLocationSystemV2(\StructType\GetLocationSystemV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLocationSystemV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLocationSystem
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLocationSystem $parameters
     * @return \StructType\GetLocationSystemResponse|bool
     */
    public function getLocationSystem(\StructType\GetLocationSystem $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLocationSystem($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStoryGeneralArticlesV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStoryGeneralArticlesV2 $parameters
     * @return \StructType\GetStoryGeneralArticlesV2Response|bool
     */
    public function getStoryGeneralArticlesV2(\StructType\GetStoryGeneralArticlesV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getStoryGeneralArticlesV2($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDiagnosticStepsForFaultCodeId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDiagnosticStepsForFaultCodeId $parameters
     * @return \StructType\GetDiagnosticStepsForFaultCodeIdResponse|bool
     */
    public function getDiagnosticStepsForFaultCodeId(\StructType\GetDiagnosticStepsForFaultCodeId $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getDiagnosticStepsForFaultCodeId($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLocationSystemBySubject
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetLocationSystemBySubject $parameters
     * @return \StructType\GetLocationSystemBySubjectResponse|bool
     */
    public function getLocationSystemBySubject(\StructType\GetLocationSystemBySubject $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getLocationSystemBySubject($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetAdjustemntExtraInfoResponse|\StructType\GetAdjustemntExtraInfoV2Response|\StructType\GetAdjustmentsByGroupResponse|\StructType\GetAdjustmentsByGroupV2Response|\StructType\GetAdjustmentsEnvOnlyResponse|\StructType\GetAdjustmentsEnvOnlyV2Response|\StructType\GetAdjustmentsEnvOnlyV3Response|\StructType\GetAdjustmentsEnvOnlyWithIdsResponse|\StructType\GetAdjustmentsResponse|\StructType\GetAdjustmentsV2Response|\StructType\GetAdjustmentsV3Response|\StructType\GetAdjustmentsV4Response|\StructType\GetAdjustmentsV5Response|\StructType\GetAdjustmentsV6Response|\StructType\GetAdjustmentsV7Response|\StructType\GetAllMakesResponse|\StructType\GetAllModelsResponse|\StructType\GetAllTypesResponse|\StructType\GetAuthenticationDetailsResponse|\StructType\GetAuthenticationUserVridResponse|\StructType\GetAuthenticationVridResponse|\StructType\GetAxleComponentsResponse|\StructType\GetCalculatedMaintenanceResponse|\StructType\GetCalculatedMaintenanceV2Response|\StructType\GetCarTypeByIdResponse|\StructType\GetCarTypesByKBAResponse|\StructType\GetCarTypesByTecdocNumberResponse|\StructType\GetCarTypesByTecdocNumberV2Response|\StructType\GetCarTypesByTecdocTruckNumberResponse|\StructType\GetCarTypesUpdateStatusResponse|\StructType\GetCasesSystemsV3Response|\StructType\GetCompleteComponentResponse|\StructType\GetCompleteComponentV2Response|\StructType\GetCompleteComponentV3Response|\StructType\GetCompleteComponentV4Response|\StructType\GetCompleteComponentV5Response|\StructType\GetCompleteComponentV6Response|\StructType\GetCompleteComponentV7Response|\StructType\GetComponentListsResponse|\StructType\GetComponentListsV2Response|\StructType\GetDiagnosisAvailableCodesResponse|\StructType\GetDiagnosisConnectorLocationImageResponse|\StructType\GetDiagnosisResponse|\StructType\GetDiagnosticStepsForFaultCodeIdResponse|\StructType\GetDisclaimerResponse|\StructType\GetDisclaimerV2Response|\StructType\GetDrawingsByGroupResponse|\StructType\GetDrawingsResponse|\StructType\GetDrawingsV2Response|\StructType\GetDrawingsV3Response|\StructType\GetDrawingsV4Response|\StructType\GetEngineLocationsResponse|\StructType\GetEobdLocationsForModelResponse|\StructType\GetEobdLocationsResponse|\StructType\GetFaultCode2ForIdResponse|\StructType\GetFaultCodeLogResponse|\StructType\GetFaultCodesForTypeResponse|\StructType\GetFullTreeResponse|\StructType\GetFuseLocationsResponse|\StructType\GetGeneralArticlesByComponentNumberResponse|\StructType\GetGeneralArticlesDescriptionsResponse|\StructType\GetGeneralInformationLinksByGroupExtMapResponse|\StructType\GetGeneralInformationLinksByGroupResponse|\StructType\GetGeneralInformationLinksExtMapResponse|\StructType\GetGeneralInformationLinksResponse|\StructType\GetIdentificationByTecdocNumberResponse|\StructType\GetIdentificationByTecdocNumberTreeResponse|\StructType\GetIdentificationTreeResponse|\StructType\GetIdLocationResponse|\StructType\GetIdLocationV2Response|\StructType\GetLocationSystemBySubjectResponse|\StructType\GetLocationSystemResponse|\StructType\GetLocationSystemV2Response|\StructType\GetLubricantCapacitiesByGrpupV2Response|\StructType\GetLubricantCapacitiesResponse|\StructType\GetLubricantCapacitiesV2Response|\StructType\GetLubricantCapacitiesV3Response|\StructType\GetLubricantsArticlesV2Response|\StructType\GetLubricantsByGroupResponse|\StructType\GetLubricantsResponse|\StructType\GetLubricantsV2Response|\StructType\GetLubricantsV3Response|\StructType\GetLubricantsV4Response|\StructType\GetMaintenanceExtraInfoResponse|\StructType\GetMaintenanceFormsResponse|\StructType\GetMaintenanceKeysResponse|\StructType\GetMaintenancePartsForPeriodResponse|\StructType\GetMaintenanceServiceResetResponse|\StructType\GetMaintenanceStoriesResponse|\StructType\GetMaintenanceSystemOverviewResponse|\StructType\GetMaintenanceSystemOverviewV2Response|\StructType\GetMaintenanceSystemsImperialResponse|\StructType\GetMaintenanceSystemsImperialV2Response|\StructType\GetMaintenanceSystemsResponse|\StructType\GetMaintenanceSystemsV2Response|\StructType\GetMaintenanceSystemsV3CombinableResponse|\StructType\GetMaintenanceSystemsV3Response|\StructType\GetMaintenanceSystemsV4Response|\StructType\GetMaintenanceSystemsV5Response|\StructType\GetMaintenanceSystemsV6Response|\StructType\GetMaintenanceTasksLocationBasedV6Response|\StructType\GetMaintenanceTasksResponse|\StructType\GetMaintenanceTasksV2Response|\StructType\GetMaintenanceTasksV3Response|\StructType\GetMaintenanceTasksV4Response|\StructType\GetMaintenanceTasksV5Response|\StructType\GetMaintenanceTasksV6Response|\StructType\GetMaintenanceTasksV7Response|\StructType\GetMaintenanceTasksWithSmartLinksAndTimesResponse|\StructType\GetMaintenanceTasksWithSmartLinksAndTimesV2Response|\StructType\GetMaintenanceTasksWithSmartLinksResponse|\StructType\GetMaintenanceTasksWithSmartLinksV2Response|\StructType\GetMaintenanceTasksWithTimesResponse|\StructType\GetMaintenanceTasksWithTimesV2Response|\StructType\GetMakesResponse|\StructType\GetManagementComponentExtraInfoResponse|\StructType\GetManagementComponentResponse|\StructType\GetManagementComponentsResponse|\StructType\GetManagementFaultCodeResponse|\StructType\GetManagementSystemsResponse|\StructType\GetNetworksResponse|\StructType\GetNetworksV2Response|\StructType\GetPhysicalLocationsResponse|\StructType\GetRecallDataResponse|\StructType\GetRecallDataV2Response|\StructType\GetRecallsSystemsV3Response|\StructType\GetRepairtimeInfosForMultipleNodesResponse|\StructType\GetRepairtimeInfosResponse|\StructType\GetRepairtimeInfosV2Response|\StructType\GetRepairtimeInfosV3Response|\StructType\GetRepairtimeNodesByGenartsV2Response|\StructType\GetRepairtimeNodesByGenartsV3Response|\StructType\GetRepairtimeNodesForGenartResponse|\StructType\GetRepairtimeNodesForManyGenartsResponse|\StructType\GetRepairtimeNodesResponse|\StructType\GetRepairtimeNodesV2Response|\StructType\GetRepairtimeNodesV3Response|\StructType\GetRepairtimeSubnodesByGroupResponse|\StructType\GetRepairtimeSubnodesByGroupV2Response|\StructType\GetRepairtimeSubnodesByGroupV3Response|\StructType\GetRepairtimeSubnodesResponse|\StructType\GetRepairtimeSubnodesSpecificTimesResponse|\StructType\GetRepairtimeSubnodesSpecificTimesV2Response|\StructType\GetRepairtimeSubnodesSpecificTimesV3Response|\StructType\GetRepairtimeSubnodesTextSearchResponse|\StructType\GetRepairtimeSubnodesTextSearchV2Response|\StructType\GetRepairtimeSubnodesTextSearchV3Response|\StructType\GetRepairtimeTypesResponse|\StructType\GetRepairtimeTypesV2Response|\StructType\GetSchemaLocations2Response|\StructType\GetSchemaLocationsResponse|\StructType\GetSmartCaseDataResponse|\StructType\GetSmartCaseDataV2Response|\StructType\GetSmartPackFaultCodesResponse|\StructType\GetSpecificTypeResponse|\StructType\GetStoryGeneralArticlesResponse|\StructType\GetStoryGeneralArticlesV2Response|\StructType\GetStoryInfoByGenartResponse|\StructType\GetStoryInfoResponse|\StructType\GetStoryInfoV2Response|\StructType\GetStoryInfoV3Response|\StructType\GetStoryInfoV4Response|\StructType\GetStoryInfoV5Response|\StructType\GetStoryInfoV6Response|\StructType\GetStoryOverviewByGroupResponse|\StructType\GetStoryOverviewResponse|\StructType\GetSubCarTypesResponse|\StructType\GetSystemsResponse|\StructType\GetSystemsV2Response|\StructType\GetTimingBeltMaintenanceTasksResponse|\StructType\GetTimingBeltMaintenanceTasksV2Response|\StructType\GetTimingBeltMaintenanceTasksV3Response|\StructType\GetTimingBeltMaintenanceTasksV4Response|\StructType\GetTimingBeltMaintenanceTasksV5Response|\StructType\GetTimingStoriesOverviewResponse|\StructType\GetTimingStoryOverviewResponse|\StructType\GetTSBCasesRecallsSystemsV3Response|\StructType\GetTSBCasesRecallsSystemsV4Response|\StructType\GetTSBDataResponse|\StructType\GetTSBDataV2Response|\StructType\GetTSBDataV3Response|\StructType\GetTSBSystemsResponse|\StructType\GetTSBSystemsV2Response|\StructType\GetTSBSystemsV3Response|\StructType\GetVersionResponse|\StructType\GetWarningLightsResponse|\StructType\GetWarningLightsV2Response|\StructType\GetWearPartsIntervalsResponse|\StructType\GetWearPartsIntervalsV2Response|\StructType\GetWearPartsIntervalsV3Response|\StructType\GetWiringComponentsResponse|\StructType\GetWiringDiagramSchemesResponse|\StructType\GetWiringDiagramSystemsResponse|\StructType\GetWiringDiagramTypesByGroupResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
