<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getComponentLists StructType
 * @subpackage Structs
 */
class GetComponentLists extends AbstractStructBase
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
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for getComponentLists
     * @uses GetComponentLists::setVrid()
     * @uses GetComponentLists::setSystem_types_ids()
     * @uses GetComponentLists::setLanguage()
     * @param string $vrid
     * @param int[] $system_types_ids
     * @param string $language
     */
    public function __construct($vrid = null, array $system_types_ids = array(), $language = null)
    {
        $this
            ->setVrid($vrid)
            ->setSystem_types_ids($system_types_ids)
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
     * @return \StructType\GetComponentLists
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
        foreach ($values as $getComponentListsSystem_types_idsItem) {
            // validation for constraint: itemType
            if (!(is_int($getComponentListsSystem_types_idsItem) || ctype_digit($getComponentListsSystem_types_idsItem))) {
                $invalidValues[] = is_object($getComponentListsSystem_types_idsItem) ? get_class($getComponentListsSystem_types_idsItem) : sprintf('%s(%s)', gettype($getComponentListsSystem_types_idsItem), var_export($getComponentListsSystem_types_idsItem, true));
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
     * @return \StructType\GetComponentLists
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
     * @return \StructType\GetComponentLists
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
     * @return \StructType\GetComponentLists
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
