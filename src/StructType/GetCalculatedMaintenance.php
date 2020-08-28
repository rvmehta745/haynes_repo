<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCalculatedMaintenance StructType
 * @subpackage Structs
 */
class GetCalculatedMaintenance extends AbstractStructBase
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
     * The milage
     * @var int
     */
    public $milage;
    /**
     * The includeServiceTimes
     * @var bool
     */
    public $includeServiceTimes;
    /**
     * Constructor method for getCalculatedMaintenance
     * @uses GetCalculatedMaintenance::setVrid()
     * @uses GetCalculatedMaintenance::setDescriptionLanguage()
     * @uses GetCalculatedMaintenance::setCarTypeId()
     * @uses GetCalculatedMaintenance::setTecdocNumber()
     * @uses GetCalculatedMaintenance::setTecdocTypeCategory()
     * @uses GetCalculatedMaintenance::setMaintenanceSystemId()
     * @uses GetCalculatedMaintenance::setRegistrationDate()
     * @uses GetCalculatedMaintenance::setMilage()
     * @uses GetCalculatedMaintenance::setIncludeServiceTimes()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $tecdocNumber
     * @param string $tecdocTypeCategory
     * @param int $maintenanceSystemId
     * @param string $registrationDate
     * @param int $milage
     * @param bool $includeServiceTimes
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $tecdocNumber = null, $tecdocTypeCategory = null, $maintenanceSystemId = null, $registrationDate = null, $milage = null, $includeServiceTimes = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setTecdocNumber($tecdocNumber)
            ->setTecdocTypeCategory($tecdocTypeCategory)
            ->setMaintenanceSystemId($maintenanceSystemId)
            ->setRegistrationDate($registrationDate)
            ->setMilage($milage)
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
     * @return \StructType\GetCalculatedMaintenance
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
     * @return \StructType\GetCalculatedMaintenance
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
     * @return \StructType\GetCalculatedMaintenance
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
     * @return \StructType\GetCalculatedMaintenance
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
     * @return \StructType\GetCalculatedMaintenance
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
     * @return \StructType\GetCalculatedMaintenance
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
     * @return \StructType\GetCalculatedMaintenance
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
     * @return \StructType\GetCalculatedMaintenance
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
     * @return \StructType\GetCalculatedMaintenance
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
