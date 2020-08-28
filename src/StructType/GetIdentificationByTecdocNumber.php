<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getIdentificationByTecdocNumber StructType
 * @subpackage Structs
 */
class GetIdentificationByTecdocNumber extends AbstractStructBase
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
     * The tecdoc_id
     * @var int
     */
    public $tecdoc_id;
    /**
     * The tecdoc_vehicleType
     * @var string
     */
    public $tecdoc_vehicleType;
    /**
     * The filter_dataset
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $filter_dataset;
    /**
     * The filter_category
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $filter_category;
    /**
     * The filter_criteriaKeys
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $filter_criteriaKeys;
    /**
     * The filter_criteriaValues
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $filter_criteriaValues;
    /**
     * Constructor method for getIdentificationByTecdocNumber
     * @uses GetIdentificationByTecdocNumber::setVrid()
     * @uses GetIdentificationByTecdocNumber::setDescriptionLanguage()
     * @uses GetIdentificationByTecdocNumber::setTecdoc_id()
     * @uses GetIdentificationByTecdocNumber::setTecdoc_vehicleType()
     * @uses GetIdentificationByTecdocNumber::setFilter_dataset()
     * @uses GetIdentificationByTecdocNumber::setFilter_category()
     * @uses GetIdentificationByTecdocNumber::setFilter_criteriaKeys()
     * @uses GetIdentificationByTecdocNumber::setFilter_criteriaValues()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $tecdoc_id
     * @param string $tecdoc_vehicleType
     * @param string[] $filter_dataset
     * @param string[] $filter_category
     * @param string[] $filter_criteriaKeys
     * @param string[] $filter_criteriaValues
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $tecdoc_id = null, $tecdoc_vehicleType = null, array $filter_dataset = array(), array $filter_category = array(), array $filter_criteriaKeys = array(), array $filter_criteriaValues = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setTecdoc_id($tecdoc_id)
            ->setTecdoc_vehicleType($tecdoc_vehicleType)
            ->setFilter_dataset($filter_dataset)
            ->setFilter_category($filter_category)
            ->setFilter_criteriaKeys($filter_criteriaKeys)
            ->setFilter_criteriaValues($filter_criteriaValues);
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
     * @return \StructType\GetIdentificationByTecdocNumber
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
     * @return \StructType\GetIdentificationByTecdocNumber
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
     * Get tecdoc_id value
     * @return int|null
     */
    public function getTecdoc_id()
    {
        return $this->tecdoc_id;
    }
    /**
     * Set tecdoc_id value
     * @param int $tecdoc_id
     * @return \StructType\GetIdentificationByTecdocNumber
     */
    public function setTecdoc_id($tecdoc_id = null)
    {
        // validation for constraint: int
        if (!is_null($tecdoc_id) && !(is_int($tecdoc_id) || ctype_digit($tecdoc_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tecdoc_id, true), gettype($tecdoc_id)), __LINE__);
        }
        $this->tecdoc_id = $tecdoc_id;
        return $this;
    }
    /**
     * Get tecdoc_vehicleType value
     * @return string|null
     */
    public function getTecdoc_vehicleType()
    {
        return $this->tecdoc_vehicleType;
    }
    /**
     * Set tecdoc_vehicleType value
     * @param string $tecdoc_vehicleType
     * @return \StructType\GetIdentificationByTecdocNumber
     */
    public function setTecdoc_vehicleType($tecdoc_vehicleType = null)
    {
        // validation for constraint: string
        if (!is_null($tecdoc_vehicleType) && !is_string($tecdoc_vehicleType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tecdoc_vehicleType, true), gettype($tecdoc_vehicleType)), __LINE__);
        }
        $this->tecdoc_vehicleType = $tecdoc_vehicleType;
        return $this;
    }
    /**
     * Get filter_dataset value
     * @return string[]|null
     */
    public function getFilter_dataset()
    {
        return $this->filter_dataset;
    }
    /**
     * This method is responsible for validating the values passed to the setFilter_dataset method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilter_dataset method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilter_datasetForArrayConstraintsFromSetFilter_dataset(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIdentificationByTecdocNumberFilter_datasetItem) {
            // validation for constraint: itemType
            if (!is_string($getIdentificationByTecdocNumberFilter_datasetItem)) {
                $invalidValues[] = is_object($getIdentificationByTecdocNumberFilter_datasetItem) ? get_class($getIdentificationByTecdocNumberFilter_datasetItem) : sprintf('%s(%s)', gettype($getIdentificationByTecdocNumberFilter_datasetItem), var_export($getIdentificationByTecdocNumberFilter_datasetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The filter_dataset property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set filter_dataset value
     * @throws \InvalidArgumentException
     * @param string[] $filter_dataset
     * @return \StructType\GetIdentificationByTecdocNumber
     */
    public function setFilter_dataset(array $filter_dataset = array())
    {
        // validation for constraint: array
        if ('' !== ($filter_datasetArrayErrorMessage = self::validateFilter_datasetForArrayConstraintsFromSetFilter_dataset($filter_dataset))) {
            throw new \InvalidArgumentException($filter_datasetArrayErrorMessage, __LINE__);
        }
        $this->filter_dataset = $filter_dataset;
        return $this;
    }
    /**
     * Add item to filter_dataset value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetIdentificationByTecdocNumber
     */
    public function addToFilter_dataset($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The filter_dataset property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->filter_dataset[] = $item;
        return $this;
    }
    /**
     * Get filter_category value
     * @return string[]|null
     */
    public function getFilter_category()
    {
        return $this->filter_category;
    }
    /**
     * This method is responsible for validating the values passed to the setFilter_category method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilter_category method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilter_categoryForArrayConstraintsFromSetFilter_category(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIdentificationByTecdocNumberFilter_categoryItem) {
            // validation for constraint: itemType
            if (!is_string($getIdentificationByTecdocNumberFilter_categoryItem)) {
                $invalidValues[] = is_object($getIdentificationByTecdocNumberFilter_categoryItem) ? get_class($getIdentificationByTecdocNumberFilter_categoryItem) : sprintf('%s(%s)', gettype($getIdentificationByTecdocNumberFilter_categoryItem), var_export($getIdentificationByTecdocNumberFilter_categoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The filter_category property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set filter_category value
     * @throws \InvalidArgumentException
     * @param string[] $filter_category
     * @return \StructType\GetIdentificationByTecdocNumber
     */
    public function setFilter_category(array $filter_category = array())
    {
        // validation for constraint: array
        if ('' !== ($filter_categoryArrayErrorMessage = self::validateFilter_categoryForArrayConstraintsFromSetFilter_category($filter_category))) {
            throw new \InvalidArgumentException($filter_categoryArrayErrorMessage, __LINE__);
        }
        $this->filter_category = $filter_category;
        return $this;
    }
    /**
     * Add item to filter_category value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetIdentificationByTecdocNumber
     */
    public function addToFilter_category($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The filter_category property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->filter_category[] = $item;
        return $this;
    }
    /**
     * Get filter_criteriaKeys value
     * @return string[]|null
     */
    public function getFilter_criteriaKeys()
    {
        return $this->filter_criteriaKeys;
    }
    /**
     * This method is responsible for validating the values passed to the setFilter_criteriaKeys method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilter_criteriaKeys method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilter_criteriaKeysForArrayConstraintsFromSetFilter_criteriaKeys(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIdentificationByTecdocNumberFilter_criteriaKeysItem) {
            // validation for constraint: itemType
            if (!is_string($getIdentificationByTecdocNumberFilter_criteriaKeysItem)) {
                $invalidValues[] = is_object($getIdentificationByTecdocNumberFilter_criteriaKeysItem) ? get_class($getIdentificationByTecdocNumberFilter_criteriaKeysItem) : sprintf('%s(%s)', gettype($getIdentificationByTecdocNumberFilter_criteriaKeysItem), var_export($getIdentificationByTecdocNumberFilter_criteriaKeysItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The filter_criteriaKeys property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set filter_criteriaKeys value
     * @throws \InvalidArgumentException
     * @param string[] $filter_criteriaKeys
     * @return \StructType\GetIdentificationByTecdocNumber
     */
    public function setFilter_criteriaKeys(array $filter_criteriaKeys = array())
    {
        // validation for constraint: array
        if ('' !== ($filter_criteriaKeysArrayErrorMessage = self::validateFilter_criteriaKeysForArrayConstraintsFromSetFilter_criteriaKeys($filter_criteriaKeys))) {
            throw new \InvalidArgumentException($filter_criteriaKeysArrayErrorMessage, __LINE__);
        }
        $this->filter_criteriaKeys = $filter_criteriaKeys;
        return $this;
    }
    /**
     * Add item to filter_criteriaKeys value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetIdentificationByTecdocNumber
     */
    public function addToFilter_criteriaKeys($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The filter_criteriaKeys property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->filter_criteriaKeys[] = $item;
        return $this;
    }
    /**
     * Get filter_criteriaValues value
     * @return string[]|null
     */
    public function getFilter_criteriaValues()
    {
        return $this->filter_criteriaValues;
    }
    /**
     * This method is responsible for validating the values passed to the setFilter_criteriaValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFilter_criteriaValues method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFilter_criteriaValuesForArrayConstraintsFromSetFilter_criteriaValues(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIdentificationByTecdocNumberFilter_criteriaValuesItem) {
            // validation for constraint: itemType
            if (!is_string($getIdentificationByTecdocNumberFilter_criteriaValuesItem)) {
                $invalidValues[] = is_object($getIdentificationByTecdocNumberFilter_criteriaValuesItem) ? get_class($getIdentificationByTecdocNumberFilter_criteriaValuesItem) : sprintf('%s(%s)', gettype($getIdentificationByTecdocNumberFilter_criteriaValuesItem), var_export($getIdentificationByTecdocNumberFilter_criteriaValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The filter_criteriaValues property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set filter_criteriaValues value
     * @throws \InvalidArgumentException
     * @param string[] $filter_criteriaValues
     * @return \StructType\GetIdentificationByTecdocNumber
     */
    public function setFilter_criteriaValues(array $filter_criteriaValues = array())
    {
        // validation for constraint: array
        if ('' !== ($filter_criteriaValuesArrayErrorMessage = self::validateFilter_criteriaValuesForArrayConstraintsFromSetFilter_criteriaValues($filter_criteriaValues))) {
            throw new \InvalidArgumentException($filter_criteriaValuesArrayErrorMessage, __LINE__);
        }
        $this->filter_criteriaValues = $filter_criteriaValues;
        return $this;
    }
    /**
     * Add item to filter_criteriaValues value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetIdentificationByTecdocNumber
     */
    public function addToFilter_criteriaValues($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The filter_criteriaValues property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->filter_criteriaValues[] = $item;
        return $this;
    }
}
