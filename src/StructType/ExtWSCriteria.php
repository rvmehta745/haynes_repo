<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtWSCriteria StructType
 * @subpackage Structs
 */
class ExtWSCriteria extends AbstractStructBase
{
    /**
     * The dataType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dataType;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The values
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtWSCriteriaValue
     */
    public $values;
    /**
     * Constructor method for ExtWSCriteria
     * @uses ExtWSCriteria::setDataType()
     * @uses ExtWSCriteria::setDescription()
     * @uses ExtWSCriteria::setId()
     * @uses ExtWSCriteria::setValues()
     * @param string $dataType
     * @param string $description
     * @param string $id
     * @param \ArrayType\ArrayOfExtWSCriteriaValue $values
     */
    public function __construct($dataType = null, $description = null, $id = null, \ArrayType\ArrayOfExtWSCriteriaValue $values = null)
    {
        $this
            ->setDataType($dataType)
            ->setDescription($description)
            ->setId($id)
            ->setValues($values);
    }
    /**
     * Get dataType value
     * @return string|null
     */
    public function getDataType()
    {
        return $this->dataType;
    }
    /**
     * Set dataType value
     * @param string $dataType
     * @return \StructType\ExtWSCriteria
     */
    public function setDataType($dataType = null)
    {
        // validation for constraint: string
        if (!is_null($dataType) && !is_string($dataType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataType, true), gettype($dataType)), __LINE__);
        }
        $this->dataType = $dataType;
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
     * @return \StructType\ExtWSCriteria
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
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\ExtWSCriteria
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get values value
     * @return \ArrayType\ArrayOfExtWSCriteriaValue|null
     */
    public function getValues()
    {
        return $this->values;
    }
    /**
     * Set values value
     * @param \ArrayType\ArrayOfExtWSCriteriaValue $values
     * @return \StructType\ExtWSCriteria
     */
    public function setValues(\ArrayType\ArrayOfExtWSCriteriaValue $values = null)
    {
        $this->values = $values;
        return $this;
    }
}
