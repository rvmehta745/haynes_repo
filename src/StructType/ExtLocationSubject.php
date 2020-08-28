<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtLocationSubject StructType
 * @subpackage Structs
 */
class ExtLocationSubject extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The locationSystems
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns1_ExtLocationSystemGeneric
     */
    public $locationSystems;
    /**
     * The subject
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $subject;
    /**
     * Constructor method for ExtLocationSubject
     * @uses ExtLocationSubject::setDescription()
     * @uses ExtLocationSubject::setLocationSystems()
     * @uses ExtLocationSubject::setSubject()
     * @param string $description
     * @param \ArrayType\ArrayOf_tns1_ExtLocationSystemGeneric $locationSystems
     * @param int $subject
     */
    public function __construct($description = null, \ArrayType\ArrayOf_tns1_ExtLocationSystemGeneric $locationSystems = null, $subject = null)
    {
        $this
            ->setDescription($description)
            ->setLocationSystems($locationSystems)
            ->setSubject($subject);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \StructType\ExtLocationSubject
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get locationSystems value
     * @return \ArrayType\ArrayOf_tns1_ExtLocationSystemGeneric|null
     */
    public function getLocationSystems()
    {
        return $this->locationSystems;
    }
    /**
     * Set locationSystems value
     * @param \ArrayType\ArrayOf_tns1_ExtLocationSystemGeneric $locationSystems
     * @return \StructType\ExtLocationSubject
     */
    public function setLocationSystems(\ArrayType\ArrayOf_tns1_ExtLocationSystemGeneric $locationSystems = null)
    {
        $this->locationSystems = $locationSystems;
        return $this;
    }
    /**
     * Get subject value
     * @return int|null
     */
    public function getSubject()
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param int $subject
     * @return \StructType\ExtLocationSubject
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: int
        if (!is_null($subject) && !(is_int($subject) || ctype_digit($subject))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
        return $this;
    }
}
