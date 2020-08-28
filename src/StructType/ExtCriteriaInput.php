<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtCriteriaInput StructType
 * @subpackage Structs
 */
class ExtCriteriaInput extends AbstractStructBase
{
    /**
     * The criteriaGroupId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $criteriaGroupId;
    /**
     * The criteriaId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $criteriaId;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $value;
    /**
     * Constructor method for ExtCriteriaInput
     * @uses ExtCriteriaInput::setCriteriaGroupId()
     * @uses ExtCriteriaInput::setCriteriaId()
     * @uses ExtCriteriaInput::setValue()
     * @param int $criteriaGroupId
     * @param int $criteriaId
     * @param string $value
     */
    public function __construct($criteriaGroupId = null, $criteriaId = null, $value = null)
    {
        $this
            ->setCriteriaGroupId($criteriaGroupId)
            ->setCriteriaId($criteriaId)
            ->setValue($value);
    }
    /**
     * Get criteriaGroupId value
     * @return int|null
     */
    public function getCriteriaGroupId()
    {
        return $this->criteriaGroupId;
    }
    /**
     * Set criteriaGroupId value
     * @param int $criteriaGroupId
     * @return \StructType\ExtCriteriaInput
     */
    public function setCriteriaGroupId($criteriaGroupId = null)
    {
        // validation for constraint: int
        if (!is_null($criteriaGroupId) && !(is_int($criteriaGroupId) || ctype_digit($criteriaGroupId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($criteriaGroupId, true), gettype($criteriaGroupId)), __LINE__);
        }
        $this->criteriaGroupId = $criteriaGroupId;
        return $this;
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
     * @return \StructType\ExtCriteriaInput
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
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \StructType\ExtCriteriaInput
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
}
