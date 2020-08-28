<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://www.haynespro-services.com/workshopServices3/services/DataServiceEndpoint?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://www.haynespro-services.com/workshopServices3/services/DataServiceEndpoint?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for getVersion operation/method
 */
if ($get->getVersion(new \StructType\GetVersion()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSchemaLocations operation/method
 */
if ($get->getSchemaLocations(new \StructType\GetSchemaLocations()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceSystemsV3Combinable operation/method
 */
if ($get->getMaintenanceSystemsV3Combinable(new \StructType\GetMaintenanceSystemsV3Combinable()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceTasksWithSmartLinksAndTimesV2 operation/method
 */
if ($get->getMaintenanceTasksWithSmartLinksAndTimesV2(new \StructType\GetMaintenanceTasksWithSmartLinksAndTimesV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeSubnodesTextSearchV3 operation/method
 */
if ($get->getRepairtimeSubnodesTextSearchV3(new \StructType\GetRepairtimeSubnodesTextSearchV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceTasksWithSmartLinksAndTimes operation/method
 */
if ($get->getMaintenanceTasksWithSmartLinksAndTimes(new \StructType\GetMaintenanceTasksWithSmartLinksAndTimes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeSubnodesTextSearchV2 operation/method
 */
if ($get->getRepairtimeSubnodesTextSearchV2(new \StructType\GetRepairtimeSubnodesTextSearchV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceTasksWithSmartLinks operation/method
 */
if ($get->getMaintenanceTasksWithSmartLinks(new \StructType\GetMaintenanceTasksWithSmartLinks()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceTasksWithSmartLinksV2 operation/method
 */
if ($get->getMaintenanceTasksWithSmartLinksV2(new \StructType\GetMaintenanceTasksWithSmartLinksV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceTasksLocationBasedV6 operation/method
 */
if ($get->getMaintenanceTasksLocationBasedV6(new \StructType\GetMaintenanceTasksLocationBasedV6()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getGeneralInformationLinksByGroupExtMap operation/method
 */
if ($get->getGeneralInformationLinksByGroupExtMap(new \StructType\GetGeneralInformationLinksByGroupExtMap()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeInfosForMultipleNodes operation/method
 */
if ($get->getRepairtimeInfosForMultipleNodes(new \StructType\GetRepairtimeInfosForMultipleNodes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getGeneralArticlesByComponentNumber operation/method
 */
if ($get->getGeneralArticlesByComponentNumber(new \StructType\GetGeneralArticlesByComponentNumber()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getIdentificationByTecdocNumberTree operation/method
 */
if ($get->getIdentificationByTecdocNumberTree(new \StructType\GetIdentificationByTecdocNumberTree()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getGeneralInformationLinksByGroup operation/method
 */
if ($get->getGeneralInformationLinksByGroup(new \StructType\GetGeneralInformationLinksByGroup()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeSubnodesSpecificTimesV2 operation/method
 */
if ($get->getRepairtimeSubnodesSpecificTimesV2(new \StructType\GetRepairtimeSubnodesSpecificTimesV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeSubnodesSpecificTimes operation/method
 */
if ($get->getRepairtimeSubnodesSpecificTimes(new \StructType\GetRepairtimeSubnodesSpecificTimes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDiagnosisConnectorLocationImage operation/method
 */
if ($get->getDiagnosisConnectorLocationImage(new \StructType\GetDiagnosisConnectorLocationImage()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeSubnodesSpecificTimesV3 operation/method
 */
if ($get->getRepairtimeSubnodesSpecificTimesV3(new \StructType\GetRepairtimeSubnodesSpecificTimesV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllModels operation/method
 */
if ($get->getAllModels(new \StructType\GetAllModels()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustmentsV3 operation/method
 */
if ($get->getAdjustmentsV3(new \StructType\GetAdjustmentsV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustmentsV4 operation/method
 */
if ($get->getAdjustmentsV4(new \StructType\GetAdjustmentsV4()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustmentsV5 operation/method
 */
if ($get->getAdjustmentsV5(new \StructType\GetAdjustmentsV5()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustmentsV6 operation/method
 */
if ($get->getAdjustmentsV6(new \StructType\GetAdjustmentsV6()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustments operation/method
 */
if ($get->getAdjustments(new \StructType\GetAdjustments()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustmentsV7 operation/method
 */
if ($get->getAdjustmentsV7(new \StructType\GetAdjustmentsV7()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustmentsV2 operation/method
 */
if ($get->getAdjustmentsV2(new \StructType\GetAdjustmentsV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLubricants operation/method
 */
if ($get->getLubricants(new \StructType\GetLubricants()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLubricantsV2 operation/method
 */
if ($get->getLubricantsV2(new \StructType\GetLubricantsV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLubricantsV3 operation/method
 */
if ($get->getLubricantsV3(new \StructType\GetLubricantsV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLubricantsV4 operation/method
 */
if ($get->getLubricantsV4(new \StructType\GetLubricantsV4()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getStoryOverview operation/method
 */
if ($get->getStoryOverview(new \StructType\GetStoryOverview()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDrawingsV3 operation/method
 */
if ($get->getDrawingsV3(new \StructType\GetDrawingsV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getWarningLights operation/method
 */
if ($get->getWarningLights(new \StructType\GetWarningLights()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDrawingsV2 operation/method
 */
if ($get->getDrawingsV2(new \StructType\GetDrawingsV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDiagnosis operation/method
 */
if ($get->getDiagnosis(new \StructType\GetDiagnosis()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getIdLocation operation/method
 */
if ($get->getIdLocation(new \StructType\GetIdLocation()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMakes operation/method
 */
if ($get->getMakes(new \StructType\GetMakes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEobdLocations operation/method
 */
if ($get->getEobdLocations(new \StructType\GetEobdLocations()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getIdLocationV2 operation/method
 */
if ($get->getIdLocationV2(new \StructType\GetIdLocationV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFuseLocations operation/method
 */
if ($get->getFuseLocations(new \StructType\GetFuseLocations()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDrawingsV4 operation/method
 */
if ($get->getDrawingsV4(new \StructType\GetDrawingsV4()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDrawings operation/method
 */
if ($get->getDrawings(new \StructType\GetDrawings()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFullTree operation/method
 */
if ($get->getFullTree(new \StructType\GetFullTree()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCarTypesByKBA operation/method
 */
if ($get->getCarTypesByKBA(new \StructType\GetCarTypesByKBA()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSubCarTypes operation/method
 */
if ($get->getSubCarTypes(new \StructType\GetSubCarTypes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTSBSystems operation/method
 */
if ($get->getTSBSystems(new \StructType\GetTSBSystems()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTSBSystemsV3 operation/method
 */
if ($get->getTSBSystemsV3(new \StructType\GetTSBSystemsV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTSBSystemsV2 operation/method
 */
if ($get->getTSBSystemsV2(new \StructType\GetTSBSystemsV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCarTypeById operation/method
 */
if ($get->getCarTypeById(new \StructType\GetCarTypeById()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllMakes operation/method
 */
if ($get->getAllMakes(new \StructType\GetAllMakes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTSBData operation/method
 */
if ($get->getTSBData(new \StructType\GetTSBData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSystems operation/method
 */
if ($get->getSystems(new \StructType\GetSystems()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRecallData operation/method
 */
if ($get->getRecallData(new \StructType\GetRecallData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRecallDataV2 operation/method
 */
if ($get->getRecallDataV2(new \StructType\GetRecallDataV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTSBDataV2 operation/method
 */
if ($get->getTSBDataV2(new \StructType\GetTSBDataV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTSBDataV3 operation/method
 */
if ($get->getTSBDataV3(new \StructType\GetTSBDataV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSystemsV2 operation/method
 */
if ($get->getSystemsV2(new \StructType\GetSystemsV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getNetworksV2 operation/method
 */
if ($get->getNetworksV2(new \StructType\GetNetworksV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSmartCaseData operation/method
 */
if ($get->getSmartCaseData(new \StructType\GetSmartCaseData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSmartCaseDataV2 operation/method
 */
if ($get->getSmartCaseDataV2(new \StructType\GetSmartCaseDataV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSpecificType operation/method
 */
if ($get->getSpecificType(new \StructType\GetSpecificType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getNetworks operation/method
 */
if ($get->getNetworks(new \StructType\GetNetworks()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getStoryInfoV5 operation/method
 */
if ($get->getStoryInfoV5(new \StructType\GetStoryInfoV5()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getStoryInfoV6 operation/method
 */
if ($get->getStoryInfoV6(new \StructType\GetStoryInfoV6()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDisclaimerV2 operation/method
 */
if ($get->getDisclaimerV2(new \StructType\GetDisclaimerV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getStoryInfoV2 operation/method
 */
if ($get->getStoryInfoV2(new \StructType\GetStoryInfoV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getStoryInfo operation/method
 */
if ($get->getStoryInfo(new \StructType\GetStoryInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getStoryInfoV3 operation/method
 */
if ($get->getStoryInfoV3(new \StructType\GetStoryInfoV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDisclaimer operation/method
 */
if ($get->getDisclaimer(new \StructType\GetDisclaimer()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFaultCodeLog operation/method
 */
if ($get->getFaultCodeLog(new \StructType\GetFaultCodeLog()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getStoryInfoV4 operation/method
 */
if ($get->getStoryInfoV4(new \StructType\GetStoryInfoV4()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAllTypes operation/method
 */
if ($get->getAllTypes(new \StructType\GetAllTypes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAuthenticationVrid operation/method
 */
if ($get->getAuthenticationVrid(new \StructType\GetAuthenticationVrid()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceSystemsV5 operation/method
 */
if ($get->getMaintenanceSystemsV5(new \StructType\GetMaintenanceSystemsV5()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceSystemsV6 operation/method
 */
if ($get->getMaintenanceSystemsV6(new \StructType\GetMaintenanceSystemsV6()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceSystemOverviewV2 operation/method
 */
if ($get->getMaintenanceSystemOverviewV2(new \StructType\GetMaintenanceSystemOverviewV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceSystemsImperialV2 operation/method
 */
if ($get->getMaintenanceSystemsImperialV2(new \StructType\GetMaintenanceSystemsImperialV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceTasks operation/method
 */
if ($get->getMaintenanceTasks(new \StructType\GetMaintenanceTasks()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceForms operation/method
 */
if ($get->getMaintenanceForms(new \StructType\GetMaintenanceForms()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceSystemsV2 operation/method
 */
if ($get->getMaintenanceSystemsV2(new \StructType\GetMaintenanceSystemsV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceTasksWithTimes operation/method
 */
if ($get->getMaintenanceTasksWithTimes(new \StructType\GetMaintenanceTasksWithTimes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTimingBeltMaintenanceTasks operation/method
 */
if ($get->getTimingBeltMaintenanceTasks(new \StructType\GetTimingBeltMaintenanceTasks()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceTasksV2 operation/method
 */
if ($get->getMaintenanceTasksV2(new \StructType\GetMaintenanceTasksV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTimingBeltMaintenanceTasksV2 operation/method
 */
if ($get->getTimingBeltMaintenanceTasksV2(new \StructType\GetTimingBeltMaintenanceTasksV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceSystemOverview operation/method
 */
if ($get->getMaintenanceSystemOverview(new \StructType\GetMaintenanceSystemOverview()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceSystems operation/method
 */
if ($get->getMaintenanceSystems(new \StructType\GetMaintenanceSystems()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTimingBeltMaintenanceTasksV3 operation/method
 */
if ($get->getTimingBeltMaintenanceTasksV3(new \StructType\GetTimingBeltMaintenanceTasksV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceTasksV3 operation/method
 */
if ($get->getMaintenanceTasksV3(new \StructType\GetMaintenanceTasksV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceTasksV4 operation/method
 */
if ($get->getMaintenanceTasksV4(new \StructType\GetMaintenanceTasksV4()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceTasksV5 operation/method
 */
if ($get->getMaintenanceTasksV5(new \StructType\GetMaintenanceTasksV5()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceTasksV6 operation/method
 */
if ($get->getMaintenanceTasksV6(new \StructType\GetMaintenanceTasksV6()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceTasksWithTimesV2 operation/method
 */
if ($get->getMaintenanceTasksWithTimesV2(new \StructType\GetMaintenanceTasksWithTimesV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceSystemsV4 operation/method
 */
if ($get->getMaintenanceSystemsV4(new \StructType\GetMaintenanceSystemsV4()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceSystemsImperial operation/method
 */
if ($get->getMaintenanceSystemsImperial(new \StructType\GetMaintenanceSystemsImperial()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAuthenticationUserVrid operation/method
 */
if ($get->getAuthenticationUserVrid(new \StructType\GetAuthenticationUserVrid()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceSystemsV3 operation/method
 */
if ($get->getMaintenanceSystemsV3(new \StructType\GetMaintenanceSystemsV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getWearPartsIntervalsV2 operation/method
 */
if ($get->getWearPartsIntervalsV2(new \StructType\GetWearPartsIntervalsV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceTasksV7 operation/method
 */
if ($get->getMaintenanceTasksV7(new \StructType\GetMaintenanceTasksV7()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCalculatedMaintenance operation/method
 */
if ($get->getCalculatedMaintenance(new \StructType\GetCalculatedMaintenance()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustmentsByGroupV2 operation/method
 */
if ($get->getAdjustmentsByGroupV2(new \StructType\GetAdjustmentsByGroupV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceExtraInfo operation/method
 */
if ($get->getMaintenanceExtraInfo(new \StructType\GetMaintenanceExtraInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLubricantCapacitiesByGrpupV2 operation/method
 */
if ($get->getLubricantCapacitiesByGrpupV2(new \StructType\GetLubricantCapacitiesByGrpupV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTimingBeltMaintenanceTasksV5 operation/method
 */
if ($get->getTimingBeltMaintenanceTasksV5(new \StructType\GetTimingBeltMaintenanceTasksV5()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustmentsEnvOnlyV2 operation/method
 */
if ($get->getAdjustmentsEnvOnlyV2(new \StructType\GetAdjustmentsEnvOnlyV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getWearPartsIntervalsV3 operation/method
 */
if ($get->getWearPartsIntervalsV3(new \StructType\GetWearPartsIntervalsV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceServiceReset operation/method
 */
if ($get->getMaintenanceServiceReset(new \StructType\GetMaintenanceServiceReset()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceStories operation/method
 */
if ($get->getMaintenanceStories(new \StructType\GetMaintenanceStories()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLubricantCapacitiesV2 operation/method
 */
if ($get->getLubricantCapacitiesV2(new \StructType\GetLubricantCapacitiesV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustmentsEnvOnlyV3 operation/method
 */
if ($get->getAdjustmentsEnvOnlyV3(new \StructType\GetAdjustmentsEnvOnlyV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLubricantCapacitiesV3 operation/method
 */
if ($get->getLubricantCapacitiesV3(new \StructType\GetLubricantCapacitiesV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLubricantsByGroup operation/method
 */
if ($get->getLubricantsByGroup(new \StructType\GetLubricantsByGroup()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenanceKeys operation/method
 */
if ($get->getMaintenanceKeys(new \StructType\GetMaintenanceKeys()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getWearPartsIntervals operation/method
 */
if ($get->getWearPartsIntervals(new \StructType\GetWearPartsIntervals()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLubricantsArticlesV2 operation/method
 */
if ($get->getLubricantsArticlesV2(new \StructType\GetLubricantsArticlesV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTimingBeltMaintenanceTasksV4 operation/method
 */
if ($get->getTimingBeltMaintenanceTasksV4(new \StructType\GetTimingBeltMaintenanceTasksV4()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustmentsEnvOnlyWithIds operation/method
 */
if ($get->getAdjustmentsEnvOnlyWithIds(new \StructType\GetAdjustmentsEnvOnlyWithIds()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getWarningLightsV2 operation/method
 */
if ($get->getWarningLightsV2(new \StructType\GetWarningLightsV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTimingStoryOverview operation/method
 */
if ($get->getTimingStoryOverview(new \StructType\GetTimingStoryOverview()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustmentsByGroup operation/method
 */
if ($get->getAdjustmentsByGroup(new \StructType\GetAdjustmentsByGroup()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLubricantCapacities operation/method
 */
if ($get->getLubricantCapacities(new \StructType\GetLubricantCapacities()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustmentsEnvOnly operation/method
 */
if ($get->getAdjustmentsEnvOnly(new \StructType\GetAdjustmentsEnvOnly()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCalculatedMaintenanceV2 operation/method
 */
if ($get->getCalculatedMaintenanceV2(new \StructType\GetCalculatedMaintenanceV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustemntExtraInfo operation/method
 */
if ($get->getAdjustemntExtraInfo(new \StructType\GetAdjustemntExtraInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeSubnodesByGroupV2 operation/method
 */
if ($get->getRepairtimeSubnodesByGroupV2(new \StructType\GetRepairtimeSubnodesByGroupV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getStoryOverviewByGroup operation/method
 */
if ($get->getStoryOverviewByGroup(new \StructType\GetStoryOverviewByGroup()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getWiringDiagramSystems operation/method
 */
if ($get->getWiringDiagramSystems(new \StructType\GetWiringDiagramSystems()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeSubnodesTextSearch operation/method
 */
if ($get->getRepairtimeSubnodesTextSearch(new \StructType\GetRepairtimeSubnodesTextSearch()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getWiringDiagramSchemes operation/method
 */
if ($get->getWiringDiagramSchemes(new \StructType\GetWiringDiagramSchemes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeNodes operation/method
 */
if ($get->getRepairtimeNodes(new \StructType\GetRepairtimeNodes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeNodesV3 operation/method
 */
if ($get->getRepairtimeNodesV3(new \StructType\GetRepairtimeNodesV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeInfosV2 operation/method
 */
if ($get->getRepairtimeInfosV2(new \StructType\GetRepairtimeInfosV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeInfosV3 operation/method
 */
if ($get->getRepairtimeInfosV3(new \StructType\GetRepairtimeInfosV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeInfos operation/method
 */
if ($get->getRepairtimeInfos(new \StructType\GetRepairtimeInfos()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeTypesV2 operation/method
 */
if ($get->getRepairtimeTypesV2(new \StructType\GetRepairtimeTypesV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getStoryGeneralArticles operation/method
 */
if ($get->getStoryGeneralArticles(new \StructType\GetStoryGeneralArticles()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeSubnodesByGroup operation/method
 */
if ($get->getRepairtimeSubnodesByGroup(new \StructType\GetRepairtimeSubnodesByGroup()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeTypes operation/method
 */
if ($get->getRepairtimeTypes(new \StructType\GetRepairtimeTypes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTimingStoriesOverview operation/method
 */
if ($get->getTimingStoriesOverview(new \StructType\GetTimingStoriesOverview()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeSubnodes operation/method
 */
if ($get->getRepairtimeSubnodes(new \StructType\GetRepairtimeSubnodes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDrawingsByGroup operation/method
 */
if ($get->getDrawingsByGroup(new \StructType\GetDrawingsByGroup()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeNodesV2 operation/method
 */
if ($get->getRepairtimeNodesV2(new \StructType\GetRepairtimeNodesV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAdjustemntExtraInfoV2 operation/method
 */
if ($get->getAdjustemntExtraInfoV2(new \StructType\GetAdjustemntExtraInfoV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeSubnodesByGroupV3 operation/method
 */
if ($get->getRepairtimeSubnodesByGroupV3(new \StructType\GetRepairtimeSubnodesByGroupV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getWiringComponents operation/method
 */
if ($get->getWiringComponents(new \StructType\GetWiringComponents()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getWiringDiagramTypesByGroup operation/method
 */
if ($get->getWiringDiagramTypesByGroup(new \StructType\GetWiringDiagramTypesByGroup()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getGeneralArticlesDescriptions operation/method
 */
if ($get->getGeneralArticlesDescriptions(new \StructType\GetGeneralArticlesDescriptions()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getManagementComponents operation/method
 */
if ($get->getManagementComponents(new \StructType\GetManagementComponents()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getIdentificationTree operation/method
 */
if ($get->getIdentificationTree(new \StructType\GetIdentificationTree()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSchemaLocations2 operation/method
 */
if ($get->getSchemaLocations2(new \StructType\GetSchemaLocations2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getManagementSystems operation/method
 */
if ($get->getManagementSystems(new \StructType\GetManagementSystems()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeNodesForManyGenarts operation/method
 */
if ($get->getRepairtimeNodesForManyGenarts(new \StructType\GetRepairtimeNodesForManyGenarts()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getGeneralInformationLinksExtMap operation/method
 */
if ($get->getGeneralInformationLinksExtMap(new \StructType\GetGeneralInformationLinksExtMap()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getManagementFaultCode operation/method
 */
if ($get->getManagementFaultCode(new \StructType\GetManagementFaultCode()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDiagnosisAvailableCodes operation/method
 */
if ($get->getDiagnosisAvailableCodes(new \StructType\GetDiagnosisAvailableCodes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getIdentificationByTecdocNumber operation/method
 */
if ($get->getIdentificationByTecdocNumber(new \StructType\GetIdentificationByTecdocNumber()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCarTypesByTecdocNumber operation/method
 */
if ($get->getCarTypesByTecdocNumber(new \StructType\GetCarTypesByTecdocNumber()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCarTypesByTecdocTruckNumber operation/method
 */
if ($get->getCarTypesByTecdocTruckNumber(new \StructType\GetCarTypesByTecdocTruckNumber()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getPhysicalLocations operation/method
 */
if ($get->getPhysicalLocations(new \StructType\GetPhysicalLocations()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCarTypesUpdateStatus operation/method
 */
if ($get->getCarTypesUpdateStatus(new \StructType\GetCarTypesUpdateStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeNodesForGenart operation/method
 */
if ($get->getRepairtimeNodesForGenart(new \StructType\GetRepairtimeNodesForGenart()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEobdLocationsForModel operation/method
 */
if ($get->getEobdLocationsForModel(new \StructType\GetEobdLocationsForModel()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getManagementComponentExtraInfo operation/method
 */
if ($get->getManagementComponentExtraInfo(new \StructType\GetManagementComponentExtraInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCarTypesByTecdocNumberV2 operation/method
 */
if ($get->getCarTypesByTecdocNumberV2(new \StructType\GetCarTypesByTecdocNumberV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getGeneralInformationLinks operation/method
 */
if ($get->getGeneralInformationLinks(new \StructType\GetGeneralInformationLinks()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEngineLocations operation/method
 */
if ($get->getEngineLocations(new \StructType\GetEngineLocations()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeNodesByGenartsV2 operation/method
 */
if ($get->getRepairtimeNodesByGenartsV2(new \StructType\GetRepairtimeNodesByGenartsV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRepairtimeNodesByGenartsV3 operation/method
 */
if ($get->getRepairtimeNodesByGenartsV3(new \StructType\GetRepairtimeNodesByGenartsV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCompleteComponentV3 operation/method
 */
if ($get->getCompleteComponentV3(new \StructType\GetCompleteComponentV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSmartPackFaultCodes operation/method
 */
if ($get->getSmartPackFaultCodes(new \StructType\GetSmartPackFaultCodes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCasesSystemsV3 operation/method
 */
if ($get->getCasesSystemsV3(new \StructType\GetCasesSystemsV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCompleteComponentV6 operation/method
 */
if ($get->getCompleteComponentV6(new \StructType\GetCompleteComponentV6()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCompleteComponentV7 operation/method
 */
if ($get->getCompleteComponentV7(new \StructType\GetCompleteComponentV7()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCompleteComponentV4 operation/method
 */
if ($get->getCompleteComponentV4(new \StructType\GetCompleteComponentV4()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFaultCode2ForId operation/method
 */
if ($get->getFaultCode2ForId(new \StructType\GetFaultCode2ForId()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTSBCasesRecallsSystemsV3 operation/method
 */
if ($get->getTSBCasesRecallsSystemsV3(new \StructType\GetTSBCasesRecallsSystemsV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getComponentLists operation/method
 */
if ($get->getComponentLists(new \StructType\GetComponentLists()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCompleteComponentV2 operation/method
 */
if ($get->getCompleteComponentV2(new \StructType\GetCompleteComponentV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getComponentListsV2 operation/method
 */
if ($get->getComponentListsV2(new \StructType\GetComponentListsV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTSBCasesRecallsSystemsV4 operation/method
 */
if ($get->getTSBCasesRecallsSystemsV4(new \StructType\GetTSBCasesRecallsSystemsV4()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCompleteComponentV5 operation/method
 */
if ($get->getCompleteComponentV5(new \StructType\GetCompleteComponentV5()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCompleteComponent operation/method
 */
if ($get->getCompleteComponent(new \StructType\GetCompleteComponent()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getFaultCodesForType operation/method
 */
if ($get->getFaultCodesForType(new \StructType\GetFaultCodesForType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getRecallsSystemsV3 operation/method
 */
if ($get->getRecallsSystemsV3(new \StructType\GetRecallsSystemsV3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAuthenticationDetails operation/method
 */
if ($get->getAuthenticationDetails(new \StructType\GetAuthenticationDetails()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getManagementComponent operation/method
 */
if ($get->getManagementComponent(new \StructType\GetManagementComponent()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getStoryInfoByGenart operation/method
 */
if ($get->getStoryInfoByGenart(new \StructType\GetStoryInfoByGenart()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMaintenancePartsForPeriod operation/method
 */
if ($get->getMaintenancePartsForPeriod(new \StructType\GetMaintenancePartsForPeriod()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAxleComponents operation/method
 */
if ($get->getAxleComponents(new \StructType\GetAxleComponents()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLocationSystemV2 operation/method
 */
if ($get->getLocationSystemV2(new \StructType\GetLocationSystemV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLocationSystem operation/method
 */
if ($get->getLocationSystem(new \StructType\GetLocationSystem()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getStoryGeneralArticlesV2 operation/method
 */
if ($get->getStoryGeneralArticlesV2(new \StructType\GetStoryGeneralArticlesV2()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDiagnosticStepsForFaultCodeId operation/method
 */
if ($get->getDiagnosticStepsForFaultCodeId(new \StructType\GetDiagnosticStepsForFaultCodeId()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getLocationSystemBySubject operation/method
 */
if ($get->getLocationSystemBySubject(new \StructType\GetLocationSystemBySubject()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Filter ServiceType
 */
$filter = new \ServiceType\Filter($options);
/**
 * Sample call for filterFaultCodesWithDiagnosticStepsForTypeLogActive
 * operation/method
 */
if ($filter->filterFaultCodesWithDiagnosticStepsForTypeLogActive(new \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActive()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2
 * operation/method
 */
if ($filter->filterFaultCodesWithDiagnosticStepsForTypeLogActiveV2(new \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV2()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3
 * operation/method
 */
if ($filter->filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3(new \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4
 * operation/method
 */
if ($filter->filterFaultCodesWithDiagnosticStepsForTypeLogActiveV4(new \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV4()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterFaultCodesWithDiagnosticStepsForType operation/method
 */
if ($filter->filterFaultCodesWithDiagnosticStepsForType(new \StructType\FilterFaultCodesWithDiagnosticStepsForType()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterFaultCodesWithDiagnosticStepsForTypeV3 operation/method
 */
if ($filter->filterFaultCodesWithDiagnosticStepsForTypeV3(new \StructType\FilterFaultCodesWithDiagnosticStepsForTypeV3()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterFaultCodesWithDiagnosticStepsForTypeV4 operation/method
 */
if ($filter->filterFaultCodesWithDiagnosticStepsForTypeV4(new \StructType\FilterFaultCodesWithDiagnosticStepsForTypeV4()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterFaultCodesWithDiagnosticStepsForTypeV2 operation/method
 */
if ($filter->filterFaultCodesWithDiagnosticStepsForTypeV2(new \StructType\FilterFaultCodesWithDiagnosticStepsForTypeV2()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterTSBSystemsV2 operation/method
 */
if ($filter->filterTSBSystemsV2(new \StructType\FilterTSBSystemsV2()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterTSBCasesRecallsSystemsV3 operation/method
 */
if ($filter->filterTSBCasesRecallsSystemsV3(new \StructType\FilterTSBCasesRecallsSystemsV3()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterCasesSystemsV3 operation/method
 */
if ($filter->filterCasesSystemsV3(new \StructType\FilterCasesSystemsV3()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterRecallsSystemsV3 operation/method
 */
if ($filter->filterRecallsSystemsV3(new \StructType\FilterRecallsSystemsV3()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterFaultCodesForType operation/method
 */
if ($filter->filterFaultCodesForType(new \StructType\FilterFaultCodesForType()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterTSBCasesRecallsSystemsV4 operation/method
 */
if ($filter->filterTSBCasesRecallsSystemsV4(new \StructType\FilterTSBCasesRecallsSystemsV4()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterTSBCasesRecallsStories operation/method
 */
if ($filter->filterTSBCasesRecallsStories(new \StructType\FilterTSBCasesRecallsStories()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Sample call for filterTSBSystemsV3 operation/method
 */
if ($filter->filterTSBSystemsV3(new \StructType\FilterTSBSystemsV3()) !== false) {
    print_r($filter->getResult());
} else {
    print_r($filter->getLastError());
}
/**
 * Samples for Find ServiceType
 */
$find = new \ServiceType\Find($options);
/**
 * Sample call for findCarTypes operation/method
 */
if ($find->findCarTypes(new \StructType\FindCarTypes()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for findCarTypesByDetailsV2 operation/method
 */
if ($find->findCarTypesByDetailsV2(new \StructType\FindCarTypesByDetailsV2()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Sample call for findCarTypesByDetails operation/method
 */
if ($find->findCarTypesByDetails(new \StructType\FindCarTypesByDetails()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
/**
 * Samples for Decode ServiceType
 */
$decode = new \ServiceType\Decode($options);
/**
 * Sample call for decodeVIN operation/method
 */
if ($decode->decodeVIN(new \StructType\DecodeVIN()) !== false) {
    print_r($decode->getResult());
} else {
    print_r($decode->getLastError());
}
/**
 * Sample call for decodeVINV3 operation/method
 */
if ($decode->decodeVINV3(new \StructType\DecodeVINV3()) !== false) {
    print_r($decode->getResult());
} else {
    print_r($decode->getLastError());
}
/**
 * Sample call for decodeVINV2 operation/method
 */
if ($decode->decodeVINV2(new \StructType\DecodeVINV2()) !== false) {
    print_r($decode->getResult());
} else {
    print_r($decode->getLastError());
}
/**
 * Samples for Process ServiceType
 */
$process = new \ServiceType\Process($options);
/**
 * Sample call for processRepairTasks2 operation/method
 */
if ($process->processRepairTasks2(new \StructType\ProcessRepairTasks2()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processMaintenanceRepairTasks2 operation/method
 */
if ($process->processMaintenanceRepairTasks2(new \StructType\ProcessMaintenanceRepairTasks2()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processRepairTasksV2 operation/method
 */
if ($process->processRepairTasksV2(new \StructType\ProcessRepairTasksV2()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processRepairTasks operation/method
 */
if ($process->processRepairTasks(new \StructType\ProcessRepairTasks()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Sample call for processRepairTasksV3 operation/method
 */
if ($process->processRepairTasksV3(new \StructType\ProcessRepairTasksV3()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
