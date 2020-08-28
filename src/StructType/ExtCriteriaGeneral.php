<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtCriteriaGeneral StructType
 * @subpackage Structs
 */
class ExtCriteriaGeneral extends AbstractStructBase
{
    /**
     * The criteriaId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $criteriaId;
    /**
     * The criteriaLevel
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $criteriaLevel;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The value1
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $value1;
    /**
     * The value2
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $value2;
    /**
     * Constructor method for ExtCriteriaGeneral
     * @uses ExtCriteriaGeneral::setCriteriaId()
     * @uses ExtCriteriaGeneral::setCriteriaLevel()
     * @uses ExtCriteriaGeneral::setDescription()
     * @uses ExtCriteriaGeneral::setValue1()
     * @uses ExtCriteriaGeneral::setValue2()
     * @param int $criteriaId
     * @param string $criteriaLevel
     * @param string $description
     * @param int $value1
     * @param int $value2
     */
    public function __construct($criteriaId = null, $criteriaLevel = null, $description = null, $value1 = null, $value2 = null)
    {
        $this
            ->setCriteriaId($criteriaId)
            ->setCriteriaLevel($criteriaLevel)
            ->setDescription($description)
            ->setValue1($value1)
            ->setValue2($value2);
    }
    /**
     * Get criteriaId value
     * @return int|null
     */
    public function getCriteriaId()
    {
        return $this->criteriaId;
    }
    /**
     * Set criteriaId value
     * @param int $criteriaId
     * @return \StructType\ExtCriteriaGeneral
     */
    public function setCriteriaId($criteriaId = null)
    {
        // validation for constraint: int
        if (!is_null($criteriaId) && !(is_int($criteriaId) || ctype_digit($criteriaId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($criteriaId, true), gettype($criteriaId)), __LINE__);
        }
        $this->criteriaId = $criteriaId;
        return $this;
    }
    /**
     * Get criteriaLevel value
     * @return string|null
     */
    public function getCriteriaLevel()
    {
        return $this->criteriaLevel;
    }
    /**
     * Set criteriaLevel value
     * @param string $criteriaLevel
     * @return \StructType\ExtCriteriaGeneral
     */
    public function setCriteriaLevel($criteriaLevel = null)
    {
        // validation for constraint: string
        if (!is_null($criteriaLevel) && !is_string($criteriaLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($criteriaLevel, true), gettype($criteriaLevel)), __LINE__);
        }
        $this->criteriaLevel = $criteriaLevel;
        return $this;
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
     * @return \StructType\ExtCriteriaGeneral
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
     * Get value1 value
     * @return int|null
     */
    public function getValue1()
    {
        return $this->value1;
    }
    /**
     * Set value1 value
     * @param int $value1
     * @return \StructType\ExtCriteriaGeneral
     */
    public function setValue1($value1 = null)
    {
        // validation for constraint: int
        if (!is_null($value1) && !(is_int($value1) || ctype_digit($value1))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value1, true), gettype($value1)), __LINE__);
        }
        $this->value1 = $value1;
        return $this;
    }
    /**
     * Get value2 value
     * @return int|null
     */
    public function getValue2()
    {
        return $this->value2;
    }
    /**
     * Set value2 value
     * @param int $value2
     * @return \StructType\ExtCriteriaGeneral
     */
    public function setValue2($value2 = null)
    {
        // validation for constraint: int
        if (!is_null($value2) && !(is_int($value2) || ctype_digit($value2))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value2, true), gettype($value2)), __LINE__);
        }
        $this->value2 = $value2;
        return $this;
    }
}
