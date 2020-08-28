<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for processMaintenanceRepairTasks2 StructType
 * @subpackage Structs
 */
class ProcessMaintenanceRepairTasks2 extends AbstractStructBase
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
     * @var int
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
     * The ids
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $ids;
    /**
     * The vatRate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $vatRate;
    /**
     * The labourRate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $labourRate;
    /**
     * Constructor method for processMaintenanceRepairTasks2
     * @uses ProcessMaintenanceRepairTasks2::setVrid()
     * @uses ProcessMaintenanceRepairTasks2::setDescriptionLanguage()
     * @uses ProcessMaintenanceRepairTasks2::setCarTypeId()
     * @uses ProcessMaintenanceRepairTasks2::setMaintenanceSystemId()
     * @uses ProcessMaintenanceRepairTasks2::setMaintenancePeriodIds()
     * @uses ProcessMaintenanceRepairTasks2::setRepairtimeTypeId()
     * @uses ProcessMaintenanceRepairTasks2::setIds()
     * @uses ProcessMaintenanceRepairTasks2::setVatRate()
     * @uses ProcessMaintenanceRepairTasks2::setLabourRate()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $maintenanceSystemId
     * @param int[] $maintenancePeriodIds
     * @param int $repairtimeTypeId
     * @param string[] $ids
     * @param int[] $vatRate
     * @param int[] $labourRate
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $maintenanceSystemId = null, array $maintenancePeriodIds = array(), $repairtimeTypeId = null, array $ids = array(), array $vatRate = array(), array $labourRate = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setMaintenanceSystemId($maintenanceSystemId)
            ->setMaintenancePeriodIds($maintenancePeriodIds)
            ->setRepairtimeTypeId($repairtimeTypeId)
            ->setIds($ids)
            ->setVatRate($vatRate)
            ->setLabourRate($labourRate);
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
     * @return \StructType\ProcessMaintenanceRepairTasks2
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
     * @return \StructType\ProcessMaintenanceRepairTasks2
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
     * @return \StructType\ProcessMaintenanceRepairTasks2
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
     * @return int|null
     */
    public function getMaintenanceSystemId()
    {
        return $this->maintenanceSystemId;
    }
    /**
     * Set maintenanceSystemId value
     * @param int $maintenanceSystemId
     * @return \StructType\ProcessMaintenanceRepairTasks2
     */
    public function setMaintenanceSystemId($maintenanceSystemId = null)
    {
        // validation for constraint: int
        if (!is_null($maintenanceSystemId) && !(is_int($maintenanceSystemId) || ctype_digit($maintenanceSystemId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maintenanceSystemId, true), gettype($maintenanceSystemId)), __LINE__);
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
        foreach ($values as $processMaintenanceRepairTasks2MaintenancePeriodIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($processMaintenanceRepairTasks2MaintenancePeriodIdsItem) || ctype_digit($processMaintenanceRepairTasks2MaintenancePeriodIdsItem))) {
                $invalidValues[] = is_object($processMaintenanceRepairTasks2MaintenancePeriodIdsItem) ? get_class($processMaintenanceRepairTasks2MaintenancePeriodIdsItem) : sprintf('%s(%s)', gettype($processMaintenanceRepairTasks2MaintenancePeriodIdsItem), var_export($processMaintenanceRepairTasks2MaintenancePeriodIdsItem, true));
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
     * @return \StructType\ProcessMaintenanceRepairTasks2
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
     * @return \StructType\ProcessMaintenanceRepairTasks2
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
     * @return \StructType\ProcessMaintenanceRepairTasks2
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
     * Get ids value
     * @return string[]|null
     */
    public function getIds()
    {
        return $this->ids;
    }
    /**
     * This method is responsible for validating the values passed to the setIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdsForArrayConstraintsFromSetIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processMaintenanceRepairTasks2IdsItem) {
            // validation for constraint: itemType
            if (!is_string($processMaintenanceRepairTasks2IdsItem)) {
                $invalidValues[] = is_object($processMaintenanceRepairTasks2IdsItem) ? get_class($processMaintenanceRepairTasks2IdsItem) : sprintf('%s(%s)', gettype($processMaintenanceRepairTasks2IdsItem), var_export($processMaintenanceRepairTasks2IdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ids property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ids value
     * @throws \InvalidArgumentException
     * @param string[] $ids
     * @return \StructType\ProcessMaintenanceRepairTasks2
     */
    public function setIds(array $ids = array())
    {
        // validation for constraint: array
        if ('' !== ($idsArrayErrorMessage = self::validateIdsForArrayConstraintsFromSetIds($ids))) {
            throw new \InvalidArgumentException($idsArrayErrorMessage, __LINE__);
        }
        $this->ids = $ids;
        return $this;
    }
    /**
     * Add item to ids value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\ProcessMaintenanceRepairTasks2
     */
    public function addToIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ids property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ids[] = $item;
        return $this;
    }
    /**
     * Get vatRate value
     * @return int[]|null
     */
    public function getVatRate()
    {
        return $this->vatRate;
    }
    /**
     * This method is responsible for validating the values passed to the setVatRate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVatRate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVatRateForArrayConstraintsFromSetVatRate(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processMaintenanceRepairTasks2VatRateItem) {
            // validation for constraint: itemType
            if (!(is_int($processMaintenanceRepairTasks2VatRateItem) || ctype_digit($processMaintenanceRepairTasks2VatRateItem))) {
                $invalidValues[] = is_object($processMaintenanceRepairTasks2VatRateItem) ? get_class($processMaintenanceRepairTasks2VatRateItem) : sprintf('%s(%s)', gettype($processMaintenanceRepairTasks2VatRateItem), var_export($processMaintenanceRepairTasks2VatRateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The vatRate property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set vatRate value
     * @throws \InvalidArgumentException
     * @param int[] $vatRate
     * @return \StructType\ProcessMaintenanceRepairTasks2
     */
    public function setVatRate(array $vatRate = array())
    {
        // validation for constraint: array
        if ('' !== ($vatRateArrayErrorMessage = self::validateVatRateForArrayConstraintsFromSetVatRate($vatRate))) {
            throw new \InvalidArgumentException($vatRateArrayErrorMessage, __LINE__);
        }
        $this->vatRate = $vatRate;
        return $this;
    }
    /**
     * Add item to vatRate value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\ProcessMaintenanceRepairTasks2
     */
    public function addToVatRate($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The vatRate property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->vatRate[] = $item;
        return $this;
    }
    /**
     * Get labourRate value
     * @return int[]|null
     */
    public function getLabourRate()
    {
        return $this->labourRate;
    }
    /**
     * This method is responsible for validating the values passed to the setLabourRate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLabourRate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLabourRateForArrayConstraintsFromSetLabourRate(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $processMaintenanceRepairTasks2LabourRateItem) {
            // validation for constraint: itemType
            if (!(is_int($processMaintenanceRepairTasks2LabourRateItem) || ctype_digit($processMaintenanceRepairTasks2LabourRateItem))) {
                $invalidValues[] = is_object($processMaintenanceRepairTasks2LabourRateItem) ? get_class($processMaintenanceRepairTasks2LabourRateItem) : sprintf('%s(%s)', gettype($processMaintenanceRepairTasks2LabourRateItem), var_export($processMaintenanceRepairTasks2LabourRateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The labourRate property can only contain items of type long, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set labourRate value
     * @throws \InvalidArgumentException
     * @param int[] $labourRate
     * @return \StructType\ProcessMaintenanceRepairTasks2
     */
    public function setLabourRate(array $labourRate = array())
    {
        // validation for constraint: array
        if ('' !== ($labourRateArrayErrorMessage = self::validateLabourRateForArrayConstraintsFromSetLabourRate($labourRate))) {
            throw new \InvalidArgumentException($labourRateArrayErrorMessage, __LINE__);
        }
        $this->labourRate = $labourRate;
        return $this;
    }
    /**
     * Add item to labourRate value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\ProcessMaintenanceRepairTasks2
     */
    public function addToLabourRate($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The labourRate property can only contain items of type long, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->labourRate[] = $item;
        return $this;
    }
}
