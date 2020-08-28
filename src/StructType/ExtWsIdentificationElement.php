<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtWsIdentificationElement StructType
 * @subpackage Structs
 */
class ExtWsIdentificationElement extends AbstractStructBase
{
    /**
     * The capacity
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $capacity;
    /**
     * The criteria
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtWSCriteria
     */
    public $criteria;
    /**
     * The engineCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $engineCode;
    /**
     * The fuelType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_string
     */
    public $fuelType;
    /**
     * The fullName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fullName;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The image
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $image;
    /**
     * The level
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $level;
    /**
     * The madeFrom
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $madeFrom;
    /**
     * The madeUntil
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $madeUntil;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $order;
    /**
     * The output
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $output;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The subElements
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtWsIdentificationElement
     */
    public $subElements;
    /**
     * The subjects
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_string
     */
    public $subjects;
    /**
     * The subjectsByGroup
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtMap
     */
    public $subjectsByGroup;
    /**
     * The superElementId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $superElementId;
    /**
     * The superElementLevel
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $superElementLevel;
    /**
     * The tonnage
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $tonnage;
    /**
     * Constructor method for ExtWsIdentificationElement
     * @uses ExtWsIdentificationElement::setCapacity()
     * @uses ExtWsIdentificationElement::setCriteria()
     * @uses ExtWsIdentificationElement::setEngineCode()
     * @uses ExtWsIdentificationElement::setFuelType()
     * @uses ExtWsIdentificationElement::setFullName()
     * @uses ExtWsIdentificationElement::setId()
     * @uses ExtWsIdentificationElement::setImage()
     * @uses ExtWsIdentificationElement::setLevel()
     * @uses ExtWsIdentificationElement::setMadeFrom()
     * @uses ExtWsIdentificationElement::setMadeUntil()
     * @uses ExtWsIdentificationElement::setName()
     * @uses ExtWsIdentificationElement::setOrder()
     * @uses ExtWsIdentificationElement::setOutput()
     * @uses ExtWsIdentificationElement::setStatus()
     * @uses ExtWsIdentificationElement::setSubElements()
     * @uses ExtWsIdentificationElement::setSubjects()
     * @uses ExtWsIdentificationElement::setSubjectsByGroup()
     * @uses ExtWsIdentificationElement::setSuperElementId()
     * @uses ExtWsIdentificationElement::setSuperElementLevel()
     * @uses ExtWsIdentificationElement::setTonnage()
     * @param int $capacity
     * @param \ArrayType\ArrayOfExtWSCriteria $criteria
     * @param string $engineCode
     * @param \ArrayType\ArrayOf_xsd_string $fuelType
     * @param string $fullName
     * @param int $id
     * @param string $image
     * @param string $level
     * @param string $madeFrom
     * @param string $madeUntil
     * @param string $name
     * @param int $order
     * @param int $output
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOfExtWsIdentificationElement $subElements
     * @param \ArrayType\ArrayOf_xsd_string $subjects
     * @param \StructType\ExtMap $subjectsByGroup
     * @param int $superElementId
     * @param string $superElementLevel
     * @param int $tonnage
     */
    public function __construct($capacity = null, \ArrayType\ArrayOfExtWSCriteria $criteria = null, $engineCode = null, \ArrayType\ArrayOf_xsd_string $fuelType = null, $fullName = null, $id = null, $image = null, $level = null, $madeFrom = null, $madeUntil = null, $name = null, $order = null, $output = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOfExtWsIdentificationElement $subElements = null, \ArrayType\ArrayOf_xsd_string $subjects = null, \StructType\ExtMap $subjectsByGroup = null, $superElementId = null, $superElementLevel = null, $tonnage = null)
    {
        $this
            ->setCapacity($capacity)
            ->setCriteria($criteria)
            ->setEngineCode($engineCode)
            ->setFuelType($fuelType)
            ->setFullName($fullName)
            ->setId($id)
            ->setImage($image)
            ->setLevel($level)
            ->setMadeFrom($madeFrom)
            ->setMadeUntil($madeUntil)
            ->setName($name)
            ->setOrder($order)
            ->setOutput($output)
            ->setStatus($status)
            ->setSubElements($subElements)
            ->setSubjects($subjects)
            ->setSubjectsByGroup($subjectsByGroup)
            ->setSuperElementId($superElementId)
            ->setSuperElementLevel($superElementLevel)
            ->setTonnage($tonnage);
    }
    /**
     * Get capacity value
     * @return int|null
     */
    public function getCapacity()
    {
        return $this->capacity;
    }
    /**
     * Set capacity value
     * @param int $capacity
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setCapacity($capacity = null)
    {
        // validation for constraint: int
        if (!is_null($capacity) && !(is_int($capacity) || ctype_digit($capacity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($capacity, true), gettype($capacity)), __LINE__);
        }
        $this->capacity = $capacity;
        return $this;
    }
    /**
     * Get criteria value
     * @return \ArrayType\ArrayOfExtWSCriteria|null
     */
    public function getCriteria()
    {
        return $this->criteria;
    }
    /**
     * Set criteria value
     * @param \ArrayType\ArrayOfExtWSCriteria $criteria
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setCriteria(\ArrayType\ArrayOfExtWSCriteria $criteria = null)
    {
        $this->criteria = $criteria;
        return $this;
    }
    /**
     * Get engineCode value
     * @return string|null
     */
    public function getEngineCode()
    {
        return $this->engineCode;
    }
    /**
     * Set engineCode value
     * @param string $engineCode
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setEngineCode($engineCode = null)
    {
        // validation for constraint: string
        if (!is_null($engineCode) && !is_string($engineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($engineCode, true), gettype($engineCode)), __LINE__);
        }
        $this->engineCode = $engineCode;
        return $this;
    }
    /**
     * Get fuelType value
     * @return \ArrayType\ArrayOf_xsd_string|null
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }
    /**
     * Set fuelType value
     * @param \ArrayType\ArrayOf_xsd_string $fuelType
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setFuelType(\ArrayType\ArrayOf_xsd_string $fuelType = null)
    {
        $this->fuelType = $fuelType;
        return $this;
    }
    /**
     * Get fullName value
     * @return string|null
     */
    public function getFullName()
    {
        return $this->fullName;
    }
    /**
     * Set fullName value
     * @param string $fullName
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setFullName($fullName = null)
    {
        // validation for constraint: string
        if (!is_null($fullName) && !is_string($fullName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullName, true), gettype($fullName)), __LINE__);
        }
        $this->fullName = $fullName;
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get image value
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Set image value
     * @param string $image
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), gettype($image)), __LINE__);
        }
        $this->image = $image;
        return $this;
    }
    /**
     * Get level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @param string $level
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setLevel($level = null)
    {
        // validation for constraint: string
        if (!is_null($level) && !is_string($level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($level, true), gettype($level)), __LINE__);
        }
        $this->level = $level;
        return $this;
    }
    /**
     * Get madeFrom value
     * @return string|null
     */
    public function getMadeFrom()
    {
        return $this->madeFrom;
    }
    /**
     * Set madeFrom value
     * @param string $madeFrom
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setMadeFrom($madeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($madeFrom) && !is_string($madeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($madeFrom, true), gettype($madeFrom)), __LINE__);
        }
        $this->madeFrom = $madeFrom;
        return $this;
    }
    /**
     * Get madeUntil value
     * @return string|null
     */
    public function getMadeUntil()
    {
        return $this->madeUntil;
    }
    /**
     * Set madeUntil value
     * @param string $madeUntil
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setMadeUntil($madeUntil = null)
    {
        // validation for constraint: string
        if (!is_null($madeUntil) && !is_string($madeUntil)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($madeUntil, true), gettype($madeUntil)), __LINE__);
        }
        $this->madeUntil = $madeUntil;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get order value
     * @return int|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param int $order
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->order = $order;
        return $this;
    }
    /**
     * Get output value
     * @return int|null
     */
    public function getOutput()
    {
        return $this->output;
    }
    /**
     * Set output value
     * @param int $output
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setOutput($output = null)
    {
        // validation for constraint: int
        if (!is_null($output) && !(is_int($output) || ctype_digit($output))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($output, true), gettype($output)), __LINE__);
        }
        $this->output = $output;
        return $this;
    }
    /**
     * Get status value
     * @return \StructType\ExtStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \StructType\ExtStatus $status
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get subElements value
     * @return \ArrayType\ArrayOfExtWsIdentificationElement|null
     */
    public function getSubElements()
    {
        return $this->subElements;
    }
    /**
     * Set subElements value
     * @param \ArrayType\ArrayOfExtWsIdentificationElement $subElements
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setSubElements(\ArrayType\ArrayOfExtWsIdentificationElement $subElements = null)
    {
        $this->subElements = $subElements;
        return $this;
    }
    /**
     * Get subjects value
     * @return \ArrayType\ArrayOf_xsd_string|null
     */
    public function getSubjects()
    {
        return $this->subjects;
    }
    /**
     * Set subjects value
     * @param \ArrayType\ArrayOf_xsd_string $subjects
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setSubjects(\ArrayType\ArrayOf_xsd_string $subjects = null)
    {
        $this->subjects = $subjects;
        return $this;
    }
    /**
     * Get subjectsByGroup value
     * @return \StructType\ExtMap|null
     */
    public function getSubjectsByGroup()
    {
        return $this->subjectsByGroup;
    }
    /**
     * Set subjectsByGroup value
     * @param \StructType\ExtMap $subjectsByGroup
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setSubjectsByGroup(\StructType\ExtMap $subjectsByGroup = null)
    {
        $this->subjectsByGroup = $subjectsByGroup;
        return $this;
    }
    /**
     * Get superElementId value
     * @return int|null
     */
    public function getSuperElementId()
    {
        return $this->superElementId;
    }
    /**
     * Set superElementId value
     * @param int $superElementId
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setSuperElementId($superElementId = null)
    {
        // validation for constraint: int
        if (!is_null($superElementId) && !(is_int($superElementId) || ctype_digit($superElementId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($superElementId, true), gettype($superElementId)), __LINE__);
        }
        $this->superElementId = $superElementId;
        return $this;
    }
    /**
     * Get superElementLevel value
     * @return string|null
     */
    public function getSuperElementLevel()
    {
        return $this->superElementLevel;
    }
    /**
     * Set superElementLevel value
     * @param string $superElementLevel
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setSuperElementLevel($superElementLevel = null)
    {
        // validation for constraint: string
        if (!is_null($superElementLevel) && !is_string($superElementLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($superElementLevel, true), gettype($superElementLevel)), __LINE__);
        }
        $this->superElementLevel = $superElementLevel;
        return $this;
    }
    /**
     * Get tonnage value
     * @return int|null
     */
    public function getTonnage()
    {
        return $this->tonnage;
    }
    /**
     * Set tonnage value
     * @param int $tonnage
     * @return \StructType\ExtWsIdentificationElement
     */
    public function setTonnage($tonnage = null)
    {
        // validation for constraint: int
        if (!is_null($tonnage) && !(is_int($tonnage) || ctype_digit($tonnage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tonnage, true), gettype($tonnage)), __LINE__);
        }
        $this->tonnage = $tonnage;
        return $this;
    }
}
