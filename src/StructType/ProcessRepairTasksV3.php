<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for processRepairTasksV3 StructType
 * @subpackage Structs
 */
class ProcessRepairTasksV3 extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The descriptionLanguage
     * @var string
     */
    public $descriptionLanguage;
    /**
     * The carTypeId
     * @var int
     */
    public $carTypeId;
    /**
     * The maintenanceSystemId
     * @var string
     */
    public $maintenanceSystemId;
    /**
     * The maintenancePeriodIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $maintenancePeriodIds;
    /**
     * The repairtimeTypeId
     * @var int
     */
    public $repairtimeTypeId;
    /**
     * The typeCategory
     * @var string
     */
    public $typeCategory;
    /**
     * The maintenanceTaskIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $maintenanceTaskIds;
    /**
     * The useMaintenanceTasks
     * @var bool
     */
    public $useMaintenanceTasks;
    /**
     * The repairTaskIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $repairTaskIds;
    /**
     * The repairVatRates
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $repairVatRates;
    /**
     * The labourRateMechanical
     * @var int
     */
    public $labourRateMechanical;
    /**
     * The labourRateBody
     * @var int
     */
    public $labourRateBody;
    /**
     * The labourRateElectronics
     * @var int
     */
    public $labourRateElectronics;
    /**
     * Constructor method for processRepairTasksV3
     * @uses ProcessRepairTasksV3::setVrid()
     * @uses ProcessRepairTasksV3::setDescriptionLanguage()
     * @uses ProcessRepairTasksV3::setCarTypeId()
     * @uses ProcessRepairTasksV3::setMaintenanceSystemId()
     * @uses ProcessRepairTasksV3::setMaintenancePeriodIds()
     * @uses ProcessRepairTasksV3::setRepairtimeTypeId()
     * @uses ProcessRepairTasksV3::setTypeCategory()
     * @uses ProcessRepairTasksV3::setMaintenanceTaskIds()
     * @uses ProcessRepairTasksV3::setUseMaintenanceTasks()
     * @uses ProcessRepairTasksV3::setRepairTaskIds()
     * @uses ProcessRepairTasksV3::setRepairVatRates()
     * @uses ProcessRepairTasksV3::setLabourRateMechanical()
     * @uses ProcessRepairTasksV3::setLabourRateBody()
     * @uses ProcessRepairTasksV3::setLabourRateElectronics()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param string $maintenanceSystemId
     * @param int[] $maintenancePeriodIds
     * @param int $repairtimeTypeId
     * @param string $typeCategory
     * @param string[] $maintenanceTaskIds
     * @param bool $useMaintenanceTasks
     * @param string[] $repairTaskIds
     * @param int[] $repairVatRates
     * @param int $labourRateMechanical
     * @param int $labourRateBody
     * @param int $labourRateElectronics
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $maintenanceSystemId = null, array $maintenancePeriodIds = array(), $repairtimeTypeId = null, $typeCategory = null, array $maintenanceTaskIds = array(), $useMaintenanceTasks = null, array $repairTaskIds = array(), array $repairVatRates = array(), $labourRateMechanical = null, $labourRateBody = null, $labourRateElectronics = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setMaintenanceSystemId($maintenanceSystemId)
            ->setMaintenancePeriodIds($maintenancePeriodIds)
            ->setRepairtimeTypeId($repairtimeTypeId)
            ->setTypeCategory($typeCategory)
            ->setMaintenanceTaskIds($maintenanceTaskIds)
            ->setUseMaintenanceTasks($useMaintenanceTasks)
            ->setRepairTaskIds($repairTaskIds)
            ->setRepairVatRates($repairVatRates)
            ->setLabourRateMechanical($labourRateMechanical)
            ->setLabourRateBody($labourRateBody)
            ->setLabourRateElectronics($labourRateElectronics);
    }
    /**
     * Get vrid value
     * @return string|null
     */
    public function getVrid()
    {
        return $this->vrid;
    }
    /**
     * Set vrid value
     * @param string $vrid
     * @return \StructType\ProcessRepairTasksV3
     */
    public function setVrid($vrid = null)
    {
        // validation for constraint: string
        if (!is_null($vrid) && !is_string($vrid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vrid, true), gettype($vrid)), __LINE__);
        }
        $this->vrid = $vrid;
        return $this;
    }
    /**
     * Get descriptionLanguage value
     * @return string|null
     */
    public function getDescriptionLanguage()
    {
        return $this->descriptionLanguage;
    }
    /**
     * Set descriptionLanguage value
     * @param string $descriptionLanguage
     * @return \StructType\ProcessRepairTasksV3
     */
    public function setDescriptionLanguage($descriptionLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionLanguage) && !is_string($descriptionLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptionLanguage, true), gettype($descriptionLanguage)), __LINE__);
        }
        $this->descriptionLanguage = $descriptionLanguage;
        return $this;
    }
    /**
     * Get carTypeId value
     * @return int|null
     */
    public function getCarTypeId()
    {
        return $this->carTypeId;
    }
    /**
     * Set carTypeId value
     * @param int $carTypeId
     * @return \StructType\ProcessRepairTasksV3
     */
    public function setCarTypeId($carTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($carTypeId) && !(is_int($carTypeId) || ctype_digit($carTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($carTypeId, true), gettype($carTypeId)), __LINE__);
        }
        $this->carTypeId = $carTypeId;
        return $this;
    }
    /**
     * Get maintenanceSystemId value
     * @return string|null
     */
    public function getMaintenanceSystemId()
    {
        return $this->maintenanceSystemId;
    }
    /**
     * Set maintenanceSystemId value
     * @param string $maintenanceSystemId
     * @return \StructType\ProcessRepairTasksV3
     */
    public function setMaintenanceSystemId($maintenanceSystemId = null)
    {
        // validation for constraint: string
        if (!is_null($maintenanceSystemId) && !is_string($maintenanceSystemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maintenanceSystemId, true), gettype($maintenanceSystemId)), __LINE__);
        }
        $this->maintenanceSystemId = $maintenanceSystemId;
        return $this;
    }
    /**
     * Get maintenancePeriodIds value
     * @return int[]|null
     */
    public function getMaintenancePeriodIds()
    {
        return $this->maintenancePeriodIds;
    }
    /**
     * This method is responsible for validating the values passed to the setMaintenancePeriodIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMaintenancePeriodIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMaintenancePeriodIdsForArrayConstraintsFromSetMaintenancePeriodIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processRepairTasksV3MaintenancePeriodIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($processRepairTasksV3MaintenancePeriodIdsItem) || ctype_digit($processRepairTasksV3MaintenancePeriodIdsItem))) {
                $invalidValues[] = is_object($processRepairTasksV3MaintenancePeriodIdsItem) ? get_class($processRepairTasksV3MaintenancePeriodIdsItem) : sprintf('%s(%s)', gettype($processRepairTasksV3MaintenancePeriodIdsItem), var_export($processRepairTasksV3MaintenancePeriodIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The maintenancePeriodIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set maintenancePeriodIds value
     * @throws \InvalidArgumentException
     * @param int[] $maintenancePeriodIds
     * @return \StructType\ProcessRepairTasksV3
     */
    public function setMaintenancePeriodIds(array $maintenancePeriodIds = array())
    {
        // validation for constraint: array
        if ('' !== ($maintenancePeriodIdsArrayErrorMessage = self::validateMaintenancePeriodIdsForArrayConstraintsFromSetMaintenancePeriodIds($maintenancePeriodIds))) {
            throw new \InvalidArgumentException($maintenancePeriodIdsArrayErrorMessage, __LINE__);
        }
        $this->maintenancePeriodIds = $maintenancePeriodIds;
        return $this;
    }
    /**
     * Add item to maintenancePeriodIds value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\ProcessRepairTasksV3
     */
    public function addToMaintenancePeriodIds($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The maintenancePeriodIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->maintenancePeriodIds[] = $item;
        return $this;
    }
    /**
     * Get repairtimeTypeId value
     * @return int|null
     */
    public function getRepairtimeTypeId()
    {
        return $this->repairtimeTypeId;
    }
    /**
     * Set repairtimeTypeId value
     * @param int $repairtimeTypeId
     * @return \StructType\ProcessRepairTasksV3
     */
    public function setRepairtimeTypeId($repairtimeTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($repairtimeTypeId) && !(is_int($repairtimeTypeId) || ctype_digit($repairtimeTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repairtimeTypeId, true), gettype($repairtimeTypeId)), __LINE__);
        }
        $this->repairtimeTypeId = $repairtimeTypeId;
        return $this;
    }
    /**
     * Get typeCategory value
     * @return string|null
     */
    public function getTypeCategory()
    {
        return $this->typeCategory;
    }
    /**
     * Set typeCategory value
     * @param string $typeCategory
     * @return \StructType\ProcessRepairTasksV3
     */
    public function setTypeCategory($typeCategory = null)
    {
        // validation for constraint: string
        if (!is_null($typeCategory) && !is_string($typeCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeCategory, true), gettype($typeCategory)), __LINE__);
        }
        $this->typeCategory = $typeCategory;
        return $this;
    }
    /**
     * Get maintenanceTaskIds value
     * @return string[]|null
     */
    public function getMaintenanceTaskIds()
    {
        return $this->maintenanceTaskIds;
    }
    /**
     * This method is responsible for validating the values passed to the setMaintenanceTaskIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMaintenanceTaskIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMaintenanceTaskIdsForArrayConstraintsFromSetMaintenanceTaskIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processRepairTasksV3MaintenanceTaskIdsItem) {
            // validation for constraint: itemType
            if (!is_string($processRepairTasksV3MaintenanceTaskIdsItem)) {
                $invalidValues[] = is_object($processRepairTasksV3MaintenanceTaskIdsItem) ? get_class($processRepairTasksV3MaintenanceTaskIdsItem) : sprintf('%s(%s)', gettype($processRepairTasksV3MaintenanceTaskIdsItem), var_export($processRepairTasksV3MaintenanceTaskIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The maintenanceTaskIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set maintenanceTaskIds value
     * @throws \InvalidArgumentException
     * @param string[] $maintenanceTaskIds
     * @return \StructType\ProcessRepairTasksV3
     */
    public function setMaintenanceTaskIds(array $maintenanceTaskIds = array())
    {
        // validation for constraint: array
        if ('' !== ($maintenanceTaskIdsArrayErrorMessage = self::validateMaintenanceTaskIdsForArrayConstraintsFromSetMaintenanceTaskIds($maintenanceTaskIds))) {
            throw new \InvalidArgumentException($maintenanceTaskIdsArrayErrorMessage, __LINE__);
        }
        $this->maintenanceTaskIds = $maintenanceTaskIds;
        return $this;
    }
    /**
     * Add item to maintenanceTaskIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\ProcessRepairTasksV3
     */
    public function addToMaintenanceTaskIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The maintenanceTaskIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->maintenanceTaskIds[] = $item;
        return $this;
    }
    /**
     * Get useMaintenanceTasks value
     * @return bool|null
     */
    public function getUseMaintenanceTasks()
    {
        return $this->useMaintenanceTasks;
    }
    /**
     * Set useMaintenanceTasks value
     * @param bool $useMaintenanceTasks
     * @return \StructType\ProcessRepairTasksV3
     */
    public function setUseMaintenanceTasks($useMaintenanceTasks = null)
    {
        // validation for constraint: boolean
        if (!is_null($useMaintenanceTasks) && !is_bool($useMaintenanceTasks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useMaintenanceTasks, true), gettype($useMaintenanceTasks)), __LINE__);
        }
        $this->useMaintenanceTasks = $useMaintenanceTasks;
        return $this;
    }
    /**
     * Get repairTaskIds value
     * @return string[]|null
     */
    public function getRepairTaskIds()
    {
        return $this->repairTaskIds;
    }
    /**
     * This method is responsible for validating the values passed to the setRepairTaskIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRepairTaskIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRepairTaskIdsForArrayConstraintsFromSetRepairTaskIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processRepairTasksV3RepairTaskIdsItem) {
            // validation for constraint: itemType
            if (!is_string($processRepairTasksV3RepairTaskIdsItem)) {
                $invalidValues[] = is_object($processRepairTasksV3RepairTaskIdsItem) ? get_class($processRepairTasksV3RepairTaskIdsItem) : sprintf('%s(%s)', gettype($processRepairTasksV3RepairTaskIdsItem), var_export($processRepairTasksV3RepairTaskIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The repairTaskIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set repairTaskIds value
     * @throws \InvalidArgumentException
     * @param string[] $repairTaskIds
     * @return \StructType\ProcessRepairTasksV3
     */
    public function setRepairTaskIds(array $repairTaskIds = array())
    {
        // validation for constraint: array
        if ('' !== ($repairTaskIdsArrayErrorMessage = self::validateRepairTaskIdsForArrayConstraintsFromSetRepairTaskIds($repairTaskIds))) {
            throw new \InvalidArgumentException($repairTaskIdsArrayErrorMessage, __LINE__);
        }
        $this->repairTaskIds = $repairTaskIds;
        return $this;
    }
    /**
     * Add item to repairTaskIds value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\ProcessRepairTasksV3
     */
    public function addToRepairTaskIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The repairTaskIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->repairTaskIds[] = $item;
        return $this;
    }
    /**
     * Get repairVatRates value
     * @return int[]|null
     */
    public function getRepairVatRates()
    {
        return $this->repairVatRates;
    }
    /**
     * This method is responsible for validating the values passed to the setRepairVatRates method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRepairVatRates method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRepairVatRatesForArrayConstraintsFromSetRepairVatRates(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processRepairTasksV3RepairVatRatesItem) {
            // validation for constraint: itemType
            if (!(is_int($processRepairTasksV3RepairVatRatesItem) || ctype_digit($processRepairTasksV3RepairVatRatesItem))) {
                $invalidValues[] = is_object($processRepairTasksV3RepairVatRatesItem) ? get_class($processRepairTasksV3RepairVatRatesItem) : sprintf('%s(%s)', gettype($processRepairTasksV3RepairVatRatesItem), var_export($processRepairTasksV3RepairVatRatesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The repairVatRates property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set repairVatRates value
     * @throws \InvalidArgumentException
     * @param int[] $repairVatRates
     * @return \StructType\ProcessRepairTasksV3
     */
    public function setRepairVatRates(array $repairVatRates = array())
    {
        // validation for constraint: array
        if ('' !== ($repairVatRatesArrayErrorMessage = self::validateRepairVatRatesForArrayConstraintsFromSetRepairVatRates($repairVatRates))) {
            throw new \InvalidArgumentException($repairVatRatesArrayErrorMessage, __LINE__);
        }
        $this->repairVatRates = $repairVatRates;
        return $this;
    }
    /**
     * Add item to repairVatRates value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\ProcessRepairTasksV3
     */
    public function addToRepairVatRates($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The repairVatRates property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->repairVatRates[] = $item;
        return $this;
    }
    /**
     * Get labourRateMechanical value
     * @return int|null
     */
    public function getLabourRateMechanical()
    {
        return $this->labourRateMechanical;
    }
    /**
     * Set labourRateMechanical value
     * @param int $labourRateMechanical
     * @return \StructType\ProcessRepairTasksV3
     */
    public function setLabourRateMechanical($labourRateMechanical = null)
    {
        // validation for constraint: int
        if (!is_null($labourRateMechanical) && !(is_int($labourRateMechanical) || ctype_digit($labourRateMechanical))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($labourRateMechanical, true), gettype($labourRateMechanical)), __LINE__);
        }
        $this->labourRateMechanical = $labourRateMechanical;
        return $this;
    }
    /**
     * Get labourRateBody value
     * @return int|null
     */
    public function getLabourRateBody()
    {
        return $this->labourRateBody;
    }
    /**
     * Set labourRateBody value
     * @param int $labourRateBody
     * @return \StructType\ProcessRepairTasksV3
     */
    public function setLabourRateBody($labourRateBody = null)
    {
        // validation for constraint: int
        if (!is_null($labourRateBody) && !(is_int($labourRateBody) || ctype_digit($labourRateBody))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($labourRateBody, true), gettype($labourRateBody)), __LINE__);
        }
        $this->labourRateBody = $labourRateBody;
        return $this;
    }
    /**
     * Get labourRateElectronics value
     * @return int|null
     */
    public function getLabourRateElectronics()
    {
        return $this->labourRateElectronics;
    }
    /**
     * Set labourRateElectronics value
     * @param int $labourRateElectronics
     * @return \StructType\ProcessRepairTasksV3
     */
    public function setLabourRateElectronics($labourRateElectronics = null)
    {
        // validation for constraint: int
        if (!is_null($labourRateElectronics) && !(is_int($labourRateElectronics) || ctype_digit($labourRateElectronics))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($labourRateElectronics, true), gettype($labourRateElectronics)), __LINE__);
        }
        $this->labourRateElectronics = $labourRateElectronics;
        return $this;
    }
}
