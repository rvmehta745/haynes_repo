<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtCarType StructType
 * @subpackage Structs
 */
class ExtCarType extends AbstractStructBase
{
    /**
     * The capacity
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $capacity;
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
     * @var string
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
     * The level
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
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
     * The modelPictureMimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $modelPictureMimeDataName;
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
     * The remark
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $remark;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
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
     * The superCarTypeId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $superCarTypeId;
    /**
     * Constructor method for ExtCarType
     * @uses ExtCarType::setCapacity()
     * @uses ExtCarType::setEngineCode()
     * @uses ExtCarType::setFuelType()
     * @uses ExtCarType::setFullName()
     * @uses ExtCarType::setId()
     * @uses ExtCarType::setLevel()
     * @uses ExtCarType::setMadeFrom()
     * @uses ExtCarType::setMadeUntil()
     * @uses ExtCarType::setModelPictureMimeDataName()
     * @uses ExtCarType::setName()
     * @uses ExtCarType::setOrder()
     * @uses ExtCarType::setOutput()
     * @uses ExtCarType::setRemark()
     * @uses ExtCarType::setStatus()
     * @uses ExtCarType::setSubjects()
     * @uses ExtCarType::setSubjectsByGroup()
     * @uses ExtCarType::setSuperCarTypeId()
     * @param int $capacity
     * @param string $engineCode
     * @param string $fuelType
     * @param string $fullName
     * @param int $id
     * @param int $level
     * @param string $madeFrom
     * @param string $madeUntil
     * @param string $modelPictureMimeDataName
     * @param string $name
     * @param int $order
     * @param int $output
     * @param string $remark
     * @param \StructType\ExtStatus $status
     * @param \ArrayType\ArrayOf_xsd_string $subjects
     * @param \StructType\ExtMap $subjectsByGroup
     * @param int $superCarTypeId
     */
    public function __construct($capacity = null, $engineCode = null, $fuelType = null, $fullName = null, $id = null, $level = null, $madeFrom = null, $madeUntil = null, $modelPictureMimeDataName = null, $name = null, $order = null, $output = null, $remark = null, \StructType\ExtStatus $status = null, \ArrayType\ArrayOf_xsd_string $subjects = null, \StructType\ExtMap $subjectsByGroup = null, $superCarTypeId = null)
    {
        $this
            ->setCapacity($capacity)
            ->setEngineCode($engineCode)
            ->setFuelType($fuelType)
            ->setFullName($fullName)
            ->setId($id)
            ->setLevel($level)
            ->setMadeFrom($madeFrom)
            ->setMadeUntil($madeUntil)
            ->setModelPictureMimeDataName($modelPictureMimeDataName)
            ->setName($name)
            ->setOrder($order)
            ->setOutput($output)
            ->setRemark($remark)
            ->setStatus($status)
            ->setSubjects($subjects)
            ->setSubjectsByGroup($subjectsByGroup)
            ->setSuperCarTypeId($superCarTypeId);
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
     * @return \StructType\ExtCarType
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
     * @return \StructType\ExtCarType
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
     * @return string|null
     */
    public function getFuelType()
    {
        return $this->fuelType;
    }
    /**
     * Set fuelType value
     * @param string $fuelType
     * @return \StructType\ExtCarType
     */
    public function setFuelType($fuelType = null)
    {
        // validation for constraint: string
        if (!is_null($fuelType) && !is_string($fuelType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fuelType, true), gettype($fuelType)), __LINE__);
        }
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
     * @return \StructType\ExtCarType
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
     * @return \StructType\ExtCarType
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
     * Get level value
     * @return int|null
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @param int $level
     * @return \StructType\ExtCarType
     */
    public function setLevel($level = null)
    {
        // validation for constraint: int
        if (!is_null($level) && !(is_int($level) || ctype_digit($level))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($level, true), gettype($level)), __LINE__);
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
     * @return \StructType\ExtCarType
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
     * @return \StructType\ExtCarType
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
     * Get modelPictureMimeDataName value
     * @return string|null
     */
    public function getModelPictureMimeDataName()
    {
        return $this->modelPictureMimeDataName;
    }
    /**
     * Set modelPictureMimeDataName value
     * @param string $modelPictureMimeDataName
     * @return \StructType\ExtCarType
     */
    public function setModelPictureMimeDataName($modelPictureMimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($modelPictureMimeDataName) && !is_string($modelPictureMimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modelPictureMimeDataName, true), gettype($modelPictureMimeDataName)), __LINE__);
        }
        $this->modelPictureMimeDataName = $modelPictureMimeDataName;
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
     * @return \StructType\ExtCarType
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
     * @return \StructType\ExtCarType
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
     * @return \StructType\ExtCarType
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
     * Get remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \StructType\ExtCarType
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
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
     * @return \StructType\ExtCarType
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
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
     * @return \StructType\ExtCarType
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
     * @return \StructType\ExtCarType
     */
    public function setSubjectsByGroup(\StructType\ExtMap $subjectsByGroup = null)
    {
        $this->subjectsByGroup = $subjectsByGroup;
        return $this;
    }
    /**
     * Get superCarTypeId value
     * @return int|null
     */
    public function getSuperCarTypeId()
    {
        return $this->superCarTypeId;
    }
    /**
     * Set superCarTypeId value
     * @param int $superCarTypeId
     * @return \StructType\ExtCarType
     */
    public function setSuperCarTypeId($superCarTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($superCarTypeId) && !(is_int($superCarTypeId) || ctype_digit($superCarTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($superCarTypeId, true), gettype($superCarTypeId)), __LINE__);
        }
        $this->superCarTypeId = $superCarTypeId;
        return $this;
    }
}
