<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for processRepairTasks StructType
 * @subpackage Structs
 */
class ProcessRepairTasks extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
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
     * Constructor method for processRepairTasks
     * @uses ProcessRepairTasks::setVrid()
     * @uses ProcessRepairTasks::setRepairtimeTypeId()
     * @uses ProcessRepairTasks::setIds()
     * @uses ProcessRepairTasks::setVatRate()
     * @uses ProcessRepairTasks::setLabourRate()
     * @param string $vrid
     * @param int $repairtimeTypeId
     * @param string[] $ids
     * @param int[] $vatRate
     * @param int[] $labourRate
     */
    public function __construct($vrid = null, $repairtimeTypeId = null, array $ids = array(), array $vatRate = array(), array $labourRate = array())
    {
        $this
            ->setVrid($vrid)
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
     * @return \StructType\ProcessRepairTasks
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
     * @return \StructType\ProcessRepairTasks
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
        foreach ($values as $processRepairTasksIdsItem) {
            // validation for constraint: itemType
            if (!is_string($processRepairTasksIdsItem)) {
                $invalidValues[] = is_object($processRepairTasksIdsItem) ? get_class($processRepairTasksIdsItem) : sprintf('%s(%s)', gettype($processRepairTasksIdsItem), var_export($processRepairTasksIdsItem, true));
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
     * @return \StructType\ProcessRepairTasks
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
     * @return \StructType\ProcessRepairTasks
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
        foreach ($values as $processRepairTasksVatRateItem) {
            // validation for constraint: itemType
            if (!(is_int($processRepairTasksVatRateItem) || ctype_digit($processRepairTasksVatRateItem))) {
                $invalidValues[] = is_object($processRepairTasksVatRateItem) ? get_class($processRepairTasksVatRateItem) : sprintf('%s(%s)', gettype($processRepairTasksVatRateItem), var_export($processRepairTasksVatRateItem, true));
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
     * @return \StructType\ProcessRepairTasks
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
     * @return \StructType\ProcessRepairTasks
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
        foreach ($values as $processRepairTasksLabourRateItem) {
            // validation for constraint: itemType
            if (!(is_int($processRepairTasksLabourRateItem) || ctype_digit($processRepairTasksLabourRateItem))) {
                $invalidValues[] = is_object($processRepairTasksLabourRateItem) ? get_class($processRepairTasksLabourRateItem) : sprintf('%s(%s)', gettype($processRepairTasksLabourRateItem), var_export($processRepairTasksLabourRateItem, true));
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
     * @return \StructType\ProcessRepairTasks
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
     * @return \StructType\ProcessRepairTasks
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
