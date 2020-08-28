<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCalculatedMaintenanceV2 StructType
 * @subpackage Structs
 */
class GetCalculatedMaintenanceV2 extends AbstractStructBase
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
     * The tecdocNumber
     * @var int
     */
    public $tecdocNumber;
    /**
     * The tecdocTypeCategory
     * @var string
     */
    public $tecdocTypeCategory;
    /**
     * The maintenanceSystemId
     * @var int
     */
    public $maintenanceSystemId;
    /**
     * The registrationDate
     * @var string
     */
    public $registrationDate;
    /**
     * The mileage
     * @var int
     */
    public $mileage;
    /**
     * The useImperial
     * @var bool
     */
    public $useImperial;
    /**
     * The criteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtCriteriaInput[]
     */
    public $criteria;
    /**
     * The includeServiceTimes
     * @var bool
     */
    public $includeServiceTimes;
    /**
     * Constructor method for getCalculatedMaintenanceV2
     * @uses GetCalculatedMaintenanceV2::setVrid()
     * @uses GetCalculatedMaintenanceV2::setDescriptionLanguage()
     * @uses GetCalculatedMaintenanceV2::setCarTypeId()
     * @uses GetCalculatedMaintenanceV2::setTecdocNumber()
     * @uses GetCalculatedMaintenanceV2::setTecdocTypeCategory()
     * @uses GetCalculatedMaintenanceV2::setMaintenanceSystemId()
     * @uses GetCalculatedMaintenanceV2::setRegistrationDate()
     * @uses GetCalculatedMaintenanceV2::setMileage()
     * @uses GetCalculatedMaintenanceV2::setUseImperial()
     * @uses GetCalculatedMaintenanceV2::setCriteria()
     * @uses GetCalculatedMaintenanceV2::setIncludeServiceTimes()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $tecdocNumber
     * @param string $tecdocTypeCategory
     * @param int $maintenanceSystemId
     * @param string $registrationDate
     * @param int $mileage
     * @param bool $useImperial
     * @param \StructType\ExtCriteriaInput[] $criteria
     * @param bool $includeServiceTimes
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $tecdocNumber = null, $tecdocTypeCategory = null, $maintenanceSystemId = null, $registrationDate = null, $mileage = null, $useImperial = null, array $criteria = array(), $includeServiceTimes = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setTecdocNumber($tecdocNumber)
            ->setTecdocTypeCategory($tecdocTypeCategory)
            ->setMaintenanceSystemId($maintenanceSystemId)
            ->setRegistrationDate($registrationDate)
            ->setMileage($mileage)
            ->setUseImperial($useImperial)
            ->setCriteria($criteria)
            ->setIncludeServiceTimes($includeServiceTimes);
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
     * @return \StructType\GetCalculatedMaintenanceV2
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
     * @return \StructType\GetCalculatedMaintenanceV2
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
     * @return \StructType\GetCalculatedMaintenanceV2
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
     * Get tecdocNumber value
     * @return int|null
     */
    public function getTecdocNumber()
    {
        return $this->tecdocNumber;
    }
    /**
     * Set tecdocNumber value
     * @param int $tecdocNumber
     * @return \StructType\GetCalculatedMaintenanceV2
     */
    public function setTecdocNumber($tecdocNumber = null)
    {
        // validation for constraint: int
        if (!is_null($tecdocNumber) && !(is_int($tecdocNumber) || ctype_digit($tecdocNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tecdocNumber, true), gettype($tecdocNumber)), __LINE__);
        }
        $this->tecdocNumber = $tecdocNumber;
        return $this;
    }
    /**
     * Get tecdocTypeCategory value
     * @return string|null
     */
    public function getTecdocTypeCategory()
    {
        return $this->tecdocTypeCategory;
    }
    /**
     * Set tecdocTypeCategory value
     * @param string $tecdocTypeCategory
     * @return \StructType\GetCalculatedMaintenanceV2
     */
    public function setTecdocTypeCategory($tecdocTypeCategory = null)
    {
        // validation for constraint: string
        if (!is_null($tecdocTypeCategory) && !is_string($tecdocTypeCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tecdocTypeCategory, true), gettype($tecdocTypeCategory)), __LINE__);
        }
        $this->tecdocTypeCategory = $tecdocTypeCategory;
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
     * @return \StructType\GetCalculatedMaintenanceV2
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
     * @return \StructType\GetCalculatedMaintenanceV2
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
     * Get mileage value
     * @return int|null
     */
    public function getMileage()
    {
        return $this->mileage;
    }
    /**
     * Set mileage value
     * @param int $mileage
     * @return \StructType\GetCalculatedMaintenanceV2
     */
    public function setMileage($mileage = null)
    {
        // validation for constraint: int
        if (!is_null($mileage) && !(is_int($mileage) || ctype_digit($mileage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mileage, true), gettype($mileage)), __LINE__);
        }
        $this->mileage = $mileage;
        return $this;
    }
    /**
     * Get useImperial value
     * @return bool|null
     */
    public function getUseImperial()
    {
        return $this->useImperial;
    }
    /**
     * Set useImperial value
     * @param bool $useImperial
     * @return \StructType\GetCalculatedMaintenanceV2
     */
    public function setUseImperial($useImperial = null)
    {
        // validation for constraint: boolean
        if (!is_null($useImperial) && !is_bool($useImperial)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useImperial, true), gettype($useImperial)), __LINE__);
        }
        $this->useImperial = $useImperial;
        return $this;
    }
    /**
     * Get criteria value
     * @return \StructType\ExtCriteriaInput[]|null
     */
    public function getCriteria()
    {
        return $this->criteria;
    }
    /**
     * This method is responsible for validating the values passed to the setCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCriteria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCriteriaForArrayConstraintsFromSetCriteria(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCalculatedMaintenanceV2CriteriaItem) {
            // validation for constraint: itemType
            if (!$getCalculatedMaintenanceV2CriteriaItem instanceof \StructType\ExtCriteriaInput) {
                $invalidValues[] = is_object($getCalculatedMaintenanceV2CriteriaItem) ? get_class($getCalculatedMaintenanceV2CriteriaItem) : sprintf('%s(%s)', gettype($getCalculatedMaintenanceV2CriteriaItem), var_export($getCalculatedMaintenanceV2CriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The criteria property can only contain items of type \StructType\ExtCriteriaInput, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set criteria value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCriteriaInput[] $criteria
     * @return \StructType\GetCalculatedMaintenanceV2
     */
    public function setCriteria(array $criteria = array())
    {
        // validation for constraint: array
        if ('' !== ($criteriaArrayErrorMessage = self::validateCriteriaForArrayConstraintsFromSetCriteria($criteria))) {
            throw new \InvalidArgumentException($criteriaArrayErrorMessage, __LINE__);
        }
        $this->criteria = $criteria;
        return $this;
    }
    /**
     * Add item to criteria value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCriteriaInput $item
     * @return \StructType\GetCalculatedMaintenanceV2
     */
    public function addToCriteria(\StructType\ExtCriteriaInput $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtCriteriaInput) {
            throw new \InvalidArgumentException(sprintf('The criteria property can only contain items of type \StructType\ExtCriteriaInput, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->criteria[] = $item;
        return $this;
    }
    /**
     * Get includeServiceTimes value
     * @return bool|null
     */
    public function getIncludeServiceTimes()
    {
        return $this->includeServiceTimes;
    }
    /**
     * Set includeServiceTimes value
     * @param bool $includeServiceTimes
     * @return \StructType\GetCalculatedMaintenanceV2
     */
    public function setIncludeServiceTimes($includeServiceTimes = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeServiceTimes) && !is_bool($includeServiceTimes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeServiceTimes, true), gettype($includeServiceTimes)), __LINE__);
        }
        $this->includeServiceTimes = $includeServiceTimes;
        return $this;
    }
}
