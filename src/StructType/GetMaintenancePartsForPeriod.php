<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenancePartsForPeriod StructType
 * @subpackage Structs
 */
class GetMaintenancePartsForPeriod extends AbstractStructBase
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
     * The repairtimesTypeId
     * @var int
     */
    public $repairtimesTypeId;
    /**
     * The rtTypeCategory
     * @var string
     */
    public $rtTypeCategory;
    /**
     * The systemId
     * @var int
     */
    public $systemId;
    /**
     * The periodId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $periodId;
    /**
     * The withCalculator
     * @var bool
     */
    public $withCalculator;
    /**
     * The registrationDate
     * @var string
     */
    public $registrationDate;
    /**
     * The milage
     * @var int
     */
    public $milage;
    /**
     * Constructor method for getMaintenancePartsForPeriod
     * @uses GetMaintenancePartsForPeriod::setVrid()
     * @uses GetMaintenancePartsForPeriod::setDescriptionLanguage()
     * @uses GetMaintenancePartsForPeriod::setCarTypeId()
     * @uses GetMaintenancePartsForPeriod::setRepairtimesTypeId()
     * @uses GetMaintenancePartsForPeriod::setRtTypeCategory()
     * @uses GetMaintenancePartsForPeriod::setSystemId()
     * @uses GetMaintenancePartsForPeriod::setPeriodId()
     * @uses GetMaintenancePartsForPeriod::setWithCalculator()
     * @uses GetMaintenancePartsForPeriod::setRegistrationDate()
     * @uses GetMaintenancePartsForPeriod::setMilage()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $repairtimesTypeId
     * @param string $rtTypeCategory
     * @param int $systemId
     * @param int[] $periodId
     * @param bool $withCalculator
     * @param string $registrationDate
     * @param int $milage
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $repairtimesTypeId = null, $rtTypeCategory = null, $systemId = null, array $periodId = array(), $withCalculator = null, $registrationDate = null, $milage = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setRepairtimesTypeId($repairtimesTypeId)
            ->setRtTypeCategory($rtTypeCategory)
            ->setSystemId($systemId)
            ->setPeriodId($periodId)
            ->setWithCalculator($withCalculator)
            ->setRegistrationDate($registrationDate)
            ->setMilage($milage);
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
     * @return \StructType\GetMaintenancePartsForPeriod
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
     * @return \StructType\GetMaintenancePartsForPeriod
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
     * @return \StructType\GetMaintenancePartsForPeriod
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
     * Get repairtimesTypeId value
     * @return int|null
     */
    public function getRepairtimesTypeId()
    {
        return $this->repairtimesTypeId;
    }
    /**
     * Set repairtimesTypeId value
     * @param int $repairtimesTypeId
     * @return \StructType\GetMaintenancePartsForPeriod
     */
    public function setRepairtimesTypeId($repairtimesTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($repairtimesTypeId) && !(is_int($repairtimesTypeId) || ctype_digit($repairtimesTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repairtimesTypeId, true), gettype($repairtimesTypeId)), __LINE__);
        }
        $this->repairtimesTypeId = $repairtimesTypeId;
        return $this;
    }
    /**
     * Get rtTypeCategory value
     * @return string|null
     */
    public function getRtTypeCategory()
    {
        return $this->rtTypeCategory;
    }
    /**
     * Set rtTypeCategory value
     * @param string $rtTypeCategory
     * @return \StructType\GetMaintenancePartsForPeriod
     */
    public function setRtTypeCategory($rtTypeCategory = null)
    {
        // validation for constraint: string
        if (!is_null($rtTypeCategory) && !is_string($rtTypeCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rtTypeCategory, true), gettype($rtTypeCategory)), __LINE__);
        }
        $this->rtTypeCategory = $rtTypeCategory;
        return $this;
    }
    /**
     * Get systemId value
     * @return int|null
     */
    public function getSystemId()
    {
        return $this->systemId;
    }
    /**
     * Set systemId value
     * @param int $systemId
     * @return \StructType\GetMaintenancePartsForPeriod
     */
    public function setSystemId($systemId = null)
    {
        // validation for constraint: int
        if (!is_null($systemId) && !(is_int($systemId) || ctype_digit($systemId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($systemId, true), gettype($systemId)), __LINE__);
        }
        $this->systemId = $systemId;
        return $this;
    }
    /**
     * Get periodId value
     * @return int[]|null
     */
    public function getPeriodId()
    {
        return $this->periodId;
    }
    /**
     * This method is responsible for validating the values passed to the setPeriodId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeriodId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePeriodIdForArrayConstraintsFromSetPeriodId(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenancePartsForPeriodPeriodIdItem) {
            // validation for constraint: itemType
            if (!(is_int($getMaintenancePartsForPeriodPeriodIdItem) || ctype_digit($getMaintenancePartsForPeriodPeriodIdItem))) {
                $invalidValues[] = is_object($getMaintenancePartsForPeriodPeriodIdItem) ? get_class($getMaintenancePartsForPeriodPeriodIdItem) : sprintf('%s(%s)', gettype($getMaintenancePartsForPeriodPeriodIdItem), var_export($getMaintenancePartsForPeriodPeriodIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The periodId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set periodId value
     * @throws \InvalidArgumentException
     * @param int[] $periodId
     * @return \StructType\GetMaintenancePartsForPeriod
     */
    public function setPeriodId(array $periodId = array())
    {
        // validation for constraint: array
        if ('' !== ($periodIdArrayErrorMessage = self::validatePeriodIdForArrayConstraintsFromSetPeriodId($periodId))) {
            throw new \InvalidArgumentException($periodIdArrayErrorMessage, __LINE__);
        }
        $this->periodId = $periodId;
        return $this;
    }
    /**
     * Add item to periodId value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\GetMaintenancePartsForPeriod
     */
    public function addToPeriodId($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The periodId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->periodId[] = $item;
        return $this;
    }
    /**
     * Get withCalculator value
     * @return bool|null
     */
    public function getWithCalculator()
    {
        return $this->withCalculator;
    }
    /**
     * Set withCalculator value
     * @param bool $withCalculator
     * @return \StructType\GetMaintenancePartsForPeriod
     */
    public function setWithCalculator($withCalculator = null)
    {
        // validation for constraint: boolean
        if (!is_null($withCalculator) && !is_bool($withCalculator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($withCalculator, true), gettype($withCalculator)), __LINE__);
        }
        $this->withCalculator = $withCalculator;
        return $this;
    }
    /**
     * Get registrationDate value
     * @return string|null
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }
    /**
     * Set registrationDate value
     * @param string $registrationDate
     * @return \StructType\GetMaintenancePartsForPeriod
     */
    public function setRegistrationDate($registrationDate = null)
    {
        // validation for constraint: string
        if (!is_null($registrationDate) && !is_string($registrationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registrationDate, true), gettype($registrationDate)), __LINE__);
        }
        $this->registrationDate = $registrationDate;
        return $this;
    }
    /**
     * Get milage value
     * @return int|null
     */
    public function getMilage()
    {
        return $this->milage;
    }
    /**
     * Set milage value
     * @param int $milage
     * @return \StructType\GetMaintenancePartsForPeriod
     */
    public function setMilage($milage = null)
    {
        // validation for constraint: int
        if (!is_null($milage) && !(is_int($milage) || ctype_digit($milage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($milage, true), gettype($milage)), __LINE__);
        }
        $this->milage = $milage;
        return $this;
    }
}
