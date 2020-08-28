<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDisclaimerV2 StructType
 * @subpackage Structs
 */
class GetDisclaimerV2 extends AbstractStructBase
{
    /**
     * The vehicleId
     * @var int
     */
    public $vehicleId;
    /**
     * The descriptionLanguage
     * @var string
     */
    public $descriptionLanguage;
    /**
     * The vehicle_level
     * @var string
     */
    public $vehicle_level;
    /**
     * The subject
     * @var string
     */
    public $subject;
    /**
     * Constructor method for getDisclaimerV2
     * @uses GetDisclaimerV2::setVehicleId()
     * @uses GetDisclaimerV2::setDescriptionLanguage()
     * @uses GetDisclaimerV2::setVehicle_level()
     * @uses GetDisclaimerV2::setSubject()
     * @param int $vehicleId
     * @param string $descriptionLanguage
     * @param string $vehicle_level
     * @param string $subject
     */
    public function __construct($vehicleId = null, $descriptionLanguage = null, $vehicle_level = null, $subject = null)
    {
        $this
            ->setVehicleId($vehicleId)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setVehicle_level($vehicle_level)
            ->setSubject($subject);
    }
    /**
     * Get vehicleId value
     * @return int|null
     */
    public function getVehicleId()
    {
        return $this->vehicleId;
    }
    /**
     * Set vehicleId value
     * @param int $vehicleId
     * @return \StructType\GetDisclaimerV2
     */
    public function setVehicleId($vehicleId = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleId) && !(is_int($vehicleId) || ctype_digit($vehicleId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vehicleId, true), gettype($vehicleId)), __LINE__);
        }
        $this->vehicleId = $vehicleId;
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
     * @return \StructType\GetDisclaimerV2
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
     * Get vehicle_level value
     * @return string|null
     */
    public function getVehicle_level()
    {
        return $this->vehicle_level;
    }
    /**
     * Set vehicle_level value
     * @param string $vehicle_level
     * @return \StructType\GetDisclaimerV2
     */
    public function setVehicle_level($vehicle_level = null)
    {
        // validation for constraint: string
        if (!is_null($vehicle_level) && !is_string($vehicle_level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicle_level, true), gettype($vehicle_level)), __LINE__);
        }
        $this->vehicle_level = $vehicle_level;
        return $this;
    }
    /**
     * Get subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param string $subject
     * @return \StructType\GetDisclaimerV2
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
        return $this;
    }
}
