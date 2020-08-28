<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for processRepairTasks2 StructType
 * @subpackage Structs
 */
class ProcessRepairTasks2 extends AbstractStructBase
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
     * Constructor method for processRepairTasks2
     * @uses ProcessRepairTasks2::setVrid()
     * @uses ProcessRepairTasks2::setDescriptionLanguage()
     * @uses ProcessRepairTasks2::setRepairtimeTypeId()
     * @uses ProcessRepairTasks2::setIds()
     * @uses ProcessRepairTasks2::setVatRate()
     * @uses ProcessRepairTasks2::setLabourRate()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $repairtimeTypeId
     * @param string[] $ids
     * @param int[] $vatRate
     * @param int[] $labourRate
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $repairtimeTypeId = null, array $ids = array(), array $vatRate = array(), array $labourRate = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
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
     * @return \StructType\ProcessRepairTasks2
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
     * @return \StructType\ProcessRepairTasks2
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
     * @return \StructType\ProcessRepairTasks2
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
        foreach ($values as $processRepairTasks2IdsItem) {
            // validation for constraint: itemType
            if (!is_string($processRepairTasks2IdsItem)) {
                $invalidValues[] = is_object($processRepairTasks2IdsItem) ? get_class($processRepairTasks2IdsItem) : sprintf('%s(%s)', gettype($processRepairTasks2IdsItem), var_export($processRepairTasks2IdsItem, true));
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
     * @return \StructType\ProcessRepairTasks2
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
     * @return \StructType\ProcessRepairTasks2
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
        foreach ($values as $processRepairTasks2VatRateItem) {
            // validation for constraint: itemType
            if (!(is_int($processRepairTasks2VatRateItem) || ctype_digit($processRepairTasks2VatRateItem))) {
                $invalidValues[] = is_object($processRepairTasks2VatRateItem) ? get_class($processRepairTasks2VatRateItem) : sprintf('%s(%s)', gettype($processRepairTasks2VatRateItem), var_export($processRepairTasks2VatRateItem, true));
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
     * @return \StructType\ProcessRepairTasks2
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
     * @return \StructType\ProcessRepairTasks2
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
        foreach ($values as $processRepairTasks2LabourRateItem) {
            // validation for constraint: itemType
            if (!(is_int($processRepairTasks2LabourRateItem) || ctype_digit($processRepairTasks2LabourRateItem))) {
                $invalidValues[] = is_object($processRepairTasks2LabourRateItem) ? get_class($processRepairTasks2LabourRateItem) : sprintf('%s(%s)', gettype($processRepairTasks2LabourRateItem), var_export($processRepairTasks2LabourRateItem, true));
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
     * @return \StructType\ProcessRepairTasks2
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
     * @return \StructType\ProcessRepairTasks2
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
