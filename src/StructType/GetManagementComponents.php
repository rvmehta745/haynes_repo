<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getManagementComponents StructType
 * @subpackage Structs
 */
class GetManagementComponents extends AbstractStructBase
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
     * The ids
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $ids;
    /**
     * Constructor method for getManagementComponents
     * @uses GetManagementComponents::setVrid()
     * @uses GetManagementComponents::setDescriptionLanguage()
     * @uses GetManagementComponents::setIds()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param string[] $ids
     */
    public function __construct($vrid = null, $descriptionLanguage = null, array $ids = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setIds($ids);
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
     * @return \StructType\GetManagementComponents
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
     * @return \StructType\GetManagementComponents
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
     * Get ids value
     * @return string[]|null
     */
    public function getIds()
    {
        return $this->ids;
    }
    /**
     * This method is responsible for validating the values passed to the setIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdsForArrayConstraintsFromSetIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getManagementComponentsIdsItem) {
            // validation for constraint: itemType
            if (!is_string($getManagementComponentsIdsItem)) {
                $invalidValues[] = is_object($getManagementComponentsIdsItem) ? get_class($getManagementComponentsIdsItem) : sprintf('%s(%s)', gettype($getManagementComponentsIdsItem), var_export($getManagementComponentsIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ids property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ids value
     * @throws \InvalidArgumentException
     * @param string[] $ids
     * @return \StructType\GetManagementComponents
     */
    public function setIds(array $ids = array())
    {
        // validation for constraint: array
        if ('' !== ($idsArrayErrorMessage = self::validateIdsForArrayConstraintsFromSetIds($ids))) {
            throw new \InvalidArgumentException($idsArrayErrorMessage, __LINE__);
        }
        $this->ids = $ids;
        return $this;
    }
    /**
     * Add item to ids value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetManagementComponents
     */
    public function addToIds($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ids property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ids[] = $item;
        return $this;
    }
}
