<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDisclaimer StructType
 * @subpackage Structs
 */
class GetDisclaimer extends AbstractStructBase
{
    /**
     * The makeId
     * @var int
     */
    public $makeId;
    /**
     * The descriptionLanguage
     * @var string
     */
    public $descriptionLanguage;
    /**
     * The subject
     * @var string
     */
    public $subject;
    /**
     * Constructor method for getDisclaimer
     * @uses GetDisclaimer::setMakeId()
     * @uses GetDisclaimer::setDescriptionLanguage()
     * @uses GetDisclaimer::setSubject()
     * @param int $makeId
     * @param string $descriptionLanguage
     * @param string $subject
     */
    public function __construct($makeId = null, $descriptionLanguage = null, $subject = null)
    {
        $this
            ->setMakeId($makeId)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setSubject($subject);
    }
    /**
     * Get makeId value
     * @return int|null
     */
    public function getMakeId()
    {
        return $this->makeId;
    }
    /**
     * Set makeId value
     * @param int $makeId
     * @return \StructType\GetDisclaimer
     */
    public function setMakeId($makeId = null)
    {
        // validation for constraint: int
        if (!is_null($makeId) && !(is_int($makeId) || ctype_digit($makeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($makeId, true), gettype($makeId)), __LINE__);
        }
        $this->makeId = $makeId;
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
     * @return \StructType\GetDisclaimer
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
     * @return \StructType\GetDisclaimer
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
