<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getNetworksV2 StructType
 * @subpackage Structs
 */
class GetNetworksV2 extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The system_types_ids
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $system_types_ids;
    /**
     * The system_types_groups
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $system_types_groups;
    /**
     * The car_type
     * @var int
     */
    public $car_type;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for getNetworksV2
     * @uses GetNetworksV2::setVrid()
     * @uses GetNetworksV2::setSystem_types_ids()
     * @uses GetNetworksV2::setSystem_types_groups()
     * @uses GetNetworksV2::setCar_type()
     * @uses GetNetworksV2::setLanguage()
     * @param string $vrid
     * @param int[] $system_types_ids
     * @param int[] $system_types_groups
     * @param int $car_type
     * @param string $language
     */
    public function __construct($vrid = null, array $system_types_ids = array(), array $system_types_groups = array(), $car_type = null, $language = null)
    {
        $this
            ->setVrid($vrid)
            ->setSystem_types_ids($system_types_ids)
            ->setSystem_types_groups($system_types_groups)
            ->setCar_type($car_type)
            ->setLanguage($language);
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
     * @return \StructType\GetNetworksV2
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
     * Get system_types_ids value
     * @return int[]|null
     */
    public function getSystem_types_ids()
    {
        return $this->system_types_ids;
    }
    /**
     * This method is responsible for validating the values passed to the setSystem_types_ids method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSystem_types_ids method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSystem_types_idsForArrayConstraintsFromSetSystem_types_ids(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getNetworksV2System_types_idsItem) {
            // validation for constraint: itemType
            if (!(is_int($getNetworksV2System_types_idsItem) || ctype_digit($getNetworksV2System_types_idsItem))) {
                $invalidValues[] = is_object($getNetworksV2System_types_idsItem) ? get_class($getNetworksV2System_types_idsItem) : sprintf('%s(%s)', gettype($getNetworksV2System_types_idsItem), var_export($getNetworksV2System_types_idsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The system_types_ids property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set system_types_ids value
     * @throws \InvalidArgumentException
     * @param int[] $system_types_ids
     * @return \StructType\GetNetworksV2
     */
    public function setSystem_types_ids(array $system_types_ids = array())
    {
        // validation for constraint: array
        if ('' !== ($system_types_idsArrayErrorMessage = self::validateSystem_types_idsForArrayConstraintsFromSetSystem_types_ids($system_types_ids))) {
            throw new \InvalidArgumentException($system_types_idsArrayErrorMessage, __LINE__);
        }
        $this->system_types_ids = $system_types_ids;
        return $this;
    }
    /**
     * Add item to system_types_ids value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\GetNetworksV2
     */
    public function addToSystem_types_ids($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The system_types_ids property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->system_types_ids[] = $item;
        return $this;
    }
    /**
     * Get system_types_groups value
     * @return int[]|null
     */
    public function getSystem_types_groups()
    {
        return $this->system_types_groups;
    }
    /**
     * This method is responsible for validating the values passed to the setSystem_types_groups method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSystem_types_groups method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSystem_types_groupsForArrayConstraintsFromSetSystem_types_groups(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getNetworksV2System_types_groupsItem) {
            // validation for constraint: itemType
            if (!(is_int($getNetworksV2System_types_groupsItem) || ctype_digit($getNetworksV2System_types_groupsItem))) {
                $invalidValues[] = is_object($getNetworksV2System_types_groupsItem) ? get_class($getNetworksV2System_types_groupsItem) : sprintf('%s(%s)', gettype($getNetworksV2System_types_groupsItem), var_export($getNetworksV2System_types_groupsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The system_types_groups property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set system_types_groups value
     * @throws \InvalidArgumentException
     * @param int[] $system_types_groups
     * @return \StructType\GetNetworksV2
     */
    public function setSystem_types_groups(array $system_types_groups = array())
    {
        // validation for constraint: array
        if ('' !== ($system_types_groupsArrayErrorMessage = self::validateSystem_types_groupsForArrayConstraintsFromSetSystem_types_groups($system_types_groups))) {
            throw new \InvalidArgumentException($system_types_groupsArrayErrorMessage, __LINE__);
        }
        $this->system_types_groups = $system_types_groups;
        return $this;
    }
    /**
     * Add item to system_types_groups value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\GetNetworksV2
     */
    public function addToSystem_types_groups($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The system_types_groups property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->system_types_groups[] = $item;
        return $this;
    }
    /**
     * Get car_type value
     * @return int|null
     */
    public function getCar_type()
    {
        return $this->car_type;
    }
    /**
     * Set car_type value
     * @param int $car_type
     * @return \StructType\GetNetworksV2
     */
    public function setCar_type($car_type = null)
    {
        // validation for constraint: int
        if (!is_null($car_type) && !(is_int($car_type) || ctype_digit($car_type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($car_type, true), gettype($car_type)), __LINE__);
        }
        $this->car_type = $car_type;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \StructType\GetNetworksV2
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
}
