<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getIdentificationTree StructType
 * @subpackage Structs
 */
class GetIdentificationTree extends AbstractStructBase
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
     * The vehicle_id
     * @var int
     */
    public $vehicle_id;
    /**
     * The vehicle_level
     * @var string
     */
    public $vehicle_level;
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
     * The filter_toVehicleLevel
     * @var string
     */
    public $filter_toVehicleLevel;
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
     * Constructor method for getIdentificationTree
     * @uses GetIdentificationTree::setVrid()
     * @uses GetIdentificationTree::setDescriptionLanguage()
     * @uses GetIdentificationTree::setVehicle_id()
     * @uses GetIdentificationTree::setVehicle_level()
     * @uses GetIdentificationTree::setFilter_dataset()
     * @uses GetIdentificationTree::setFilter_category()
     * @uses GetIdentificationTree::setFilter_toVehicleLevel()
     * @uses GetIdentificationTree::setFilter_criteriaKeys()
     * @uses GetIdentificationTree::setFilter_criteriaValues()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $vehicle_id
     * @param string $vehicle_level
     * @param string[] $filter_dataset
     * @param string[] $filter_category
     * @param string $filter_toVehicleLevel
     * @param string[] $filter_criteriaKeys
     * @param string[] $filter_criteriaValues
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $vehicle_id = null, $vehicle_level = null, array $filter_dataset = array(), array $filter_category = array(), $filter_toVehicleLevel = null, array $filter_criteriaKeys = array(), array $filter_criteriaValues = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setVehicle_id($vehicle_id)
            ->setVehicle_level($vehicle_level)
            ->setFilter_dataset($filter_dataset)
            ->setFilter_category($filter_category)
            ->setFilter_toVehicleLevel($filter_toVehicleLevel)
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
     * @return \StructType\GetIdentificationTree
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
     * @return \StructType\GetIdentificationTree
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
     * Get vehicle_id value
     * @return int|null
     */
    public function getVehicle_id()
    {
        return $this->vehicle_id;
    }
    /**
     * Set vehicle_id value
     * @param int $vehicle_id
     * @return \StructType\GetIdentificationTree
     */
    public function setVehicle_id($vehicle_id = null)
    {
        // validation for constraint: int
        if (!is_null($vehicle_id) && !(is_int($vehicle_id) || ctype_digit($vehicle_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vehicle_id, true), gettype($vehicle_id)), __LINE__);
        }
        $this->vehicle_id = $vehicle_id;
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
     * @return \StructType\GetIdentificationTree
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
        foreach ($values as $getIdentificationTreeFilter_datasetItem) {
            // validation for constraint: itemType
            if (!is_string($getIdentificationTreeFilter_datasetItem)) {
                $invalidValues[] = is_object($getIdentificationTreeFilter_datasetItem) ? get_class($getIdentificationTreeFilter_datasetItem) : sprintf('%s(%s)', gettype($getIdentificationTreeFilter_datasetItem), var_export($getIdentificationTreeFilter_datasetItem, true));
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
     * @return \StructType\GetIdentificationTree
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
     * @return \StructType\GetIdentificationTree
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
        foreach ($values as $getIdentificationTreeFilter_categoryItem) {
            // validation for constraint: itemType
            if (!is_string($getIdentificationTreeFilter_categoryItem)) {
                $invalidValues[] = is_object($getIdentificationTreeFilter_categoryItem) ? get_class($getIdentificationTreeFilter_categoryItem) : sprintf('%s(%s)', gettype($getIdentificationTreeFilter_categoryItem), var_export($getIdentificationTreeFilter_categoryItem, true));
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
     * @return \StructType\GetIdentificationTree
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
     * @return \StructType\GetIdentificationTree
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
     * Get filter_toVehicleLevel value
     * @return string|null
     */
    public function getFilter_toVehicleLevel()
    {
        return $this->filter_toVehicleLevel;
    }
    /**
     * Set filter_toVehicleLevel value
     * @param string $filter_toVehicleLevel
     * @return \StructType\GetIdentificationTree
     */
    public function setFilter_toVehicleLevel($filter_toVehicleLevel = null)
    {
        // validation for constraint: string
        if (!is_null($filter_toVehicleLevel) && !is_string($filter_toVehicleLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filter_toVehicleLevel, true), gettype($filter_toVehicleLevel)), __LINE__);
        }
        $this->filter_toVehicleLevel = $filter_toVehicleLevel;
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
        foreach ($values as $getIdentificationTreeFilter_criteriaKeysItem) {
            // validation for constraint: itemType
            if (!is_string($getIdentificationTreeFilter_criteriaKeysItem)) {
                $invalidValues[] = is_object($getIdentificationTreeFilter_criteriaKeysItem) ? get_class($getIdentificationTreeFilter_criteriaKeysItem) : sprintf('%s(%s)', gettype($getIdentificationTreeFilter_criteriaKeysItem), var_export($getIdentificationTreeFilter_criteriaKeysItem, true));
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
     * @return \StructType\GetIdentificationTree
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
     * @return \StructType\GetIdentificationTree
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
        foreach ($values as $getIdentificationTreeFilter_criteriaValuesItem) {
            // validation for constraint: itemType
            if (!is_string($getIdentificationTreeFilter_criteriaValuesItem)) {
                $invalidValues[] = is_object($getIdentificationTreeFilter_criteriaValuesItem) ? get_class($getIdentificationTreeFilter_criteriaValuesItem) : sprintf('%s(%s)', gettype($getIdentificationTreeFilter_criteriaValuesItem), var_export($getIdentificationTreeFilter_criteriaValuesItem, true));
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
     * @return \StructType\GetIdentificationTree
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
     * @return \StructType\GetIdentificationTree
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
