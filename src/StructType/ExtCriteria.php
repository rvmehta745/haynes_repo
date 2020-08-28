<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtCriteria StructType
 * @subpackage Structs
 */
class ExtCriteria extends AbstractStructBase
{
    /**
     * The attributeTypeDescription
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $attributeTypeDescription;
    /**
     * The keyTableDescription
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $keyTableDescription;
    /**
     * The keyValue
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $keyValue;
    /**
     * The keyValueDescription
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $keyValueDescription;
    /**
     * The kritnr
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $kritnr;
    /**
     * The tabnr
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $tabnr;
    /**
     * Constructor method for ExtCriteria
     * @uses ExtCriteria::setAttributeTypeDescription()
     * @uses ExtCriteria::setKeyTableDescription()
     * @uses ExtCriteria::setKeyValue()
     * @uses ExtCriteria::setKeyValueDescription()
     * @uses ExtCriteria::setKritnr()
     * @uses ExtCriteria::setTabnr()
     * @param string $attributeTypeDescription
     * @param string $keyTableDescription
     * @param string $keyValue
     * @param string $keyValueDescription
     * @param int $kritnr
     * @param int $tabnr
     */
    public function __construct($attributeTypeDescription = null, $keyTableDescription = null, $keyValue = null, $keyValueDescription = null, $kritnr = null, $tabnr = null)
    {
        $this
            ->setAttributeTypeDescription($attributeTypeDescription)
            ->setKeyTableDescription($keyTableDescription)
            ->setKeyValue($keyValue)
            ->setKeyValueDescription($keyValueDescription)
            ->setKritnr($kritnr)
            ->setTabnr($tabnr);
    }
    /**
     * Get attributeTypeDescription value
     * @return string|null
     */
    public function getAttributeTypeDescription()
    {
        return $this->attributeTypeDescription;
    }
    /**
     * Set attributeTypeDescription value
     * @param string $attributeTypeDescription
     * @return \StructType\ExtCriteria
     */
    public function setAttributeTypeDescription($attributeTypeDescription = null)
    {
        // validation for constraint: string
        if (!is_null($attributeTypeDescription) && !is_string($attributeTypeDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeTypeDescription, true), gettype($attributeTypeDescription)), __LINE__);
        }
        $this->attributeTypeDescription = $attributeTypeDescription;
        return $this;
    }
    /**
     * Get keyTableDescription value
     * @return string|null
     */
    public function getKeyTableDescription()
    {
        return $this->keyTableDescription;
    }
    /**
     * Set keyTableDescription value
     * @param string $keyTableDescription
     * @return \StructType\ExtCriteria
     */
    public function setKeyTableDescription($keyTableDescription = null)
    {
        // validation for constraint: string
        if (!is_null($keyTableDescription) && !is_string($keyTableDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyTableDescription, true), gettype($keyTableDescription)), __LINE__);
        }
        $this->keyTableDescription = $keyTableDescription;
        return $this;
    }
    /**
     * Get keyValue value
     * @return string|null
     */
    public function getKeyValue()
    {
        return $this->keyValue;
    }
    /**
     * Set keyValue value
     * @param string $keyValue
     * @return \StructType\ExtCriteria
     */
    public function setKeyValue($keyValue = null)
    {
        // validation for constraint: string
        if (!is_null($keyValue) && !is_string($keyValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyValue, true), gettype($keyValue)), __LINE__);
        }
        $this->keyValue = $keyValue;
        return $this;
    }
    /**
     * Get keyValueDescription value
     * @return string|null
     */
    public function getKeyValueDescription()
    {
        return $this->keyValueDescription;
    }
    /**
     * Set keyValueDescription value
     * @param string $keyValueDescription
     * @return \StructType\ExtCriteria
     */
    public function setKeyValueDescription($keyValueDescription = null)
    {
        // validation for constraint: string
        if (!is_null($keyValueDescription) && !is_string($keyValueDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyValueDescription, true), gettype($keyValueDescription)), __LINE__);
        }
        $this->keyValueDescription = $keyValueDescription;
        return $this;
    }
    /**
     * Get kritnr value
     * @return int|null
     */
    public function getKritnr()
    {
        return $this->kritnr;
    }
    /**
     * Set kritnr value
     * @param int $kritnr
     * @return \StructType\ExtCriteria
     */
    public function setKritnr($kritnr = null)
    {
        // validation for constraint: int
        if (!is_null($kritnr) && !(is_int($kritnr) || ctype_digit($kritnr))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($kritnr, true), gettype($kritnr)), __LINE__);
        }
        $this->kritnr = $kritnr;
        return $this;
    }
    /**
     * Get tabnr value
     * @return int|null
     */
    public function getTabnr()
    {
        return $this->tabnr;
    }
    /**
     * Set tabnr value
     * @param int $tabnr
     * @return \StructType\ExtCriteria
     */
    public function setTabnr($tabnr = null)
    {
        // validation for constraint: int
        if (!is_null($tabnr) && !(is_int($tabnr) || ctype_digit($tabnr))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tabnr, true), gettype($tabnr)), __LINE__);
        }
        $this->tabnr = $tabnr;
        return $this;
    }
}
