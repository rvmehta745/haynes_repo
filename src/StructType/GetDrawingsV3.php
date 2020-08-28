<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDrawingsV3 StructType
 * @subpackage Structs
 */
class GetDrawingsV3 extends AbstractStructBase
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
     * The carTypeId
     * @var int
     */
    public $carTypeId;
    /**
     * The repairTimesTypeId
     * @var int
     */
    public $repairTimesTypeId;
    /**
     * The typeCategory
     * @var string
     */
    public $typeCategory;
    /**
     * The carTypeGroup
     * @var string
     */
    public $carTypeGroup;
    /**
     * The axleComponents
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $axleComponents;
    /**
     * Constructor method for getDrawingsV3
     * @uses GetDrawingsV3::setVrid()
     * @uses GetDrawingsV3::setDescriptionLanguage()
     * @uses GetDrawingsV3::setCarTypeId()
     * @uses GetDrawingsV3::setRepairTimesTypeId()
     * @uses GetDrawingsV3::setTypeCategory()
     * @uses GetDrawingsV3::setCarTypeGroup()
     * @uses GetDrawingsV3::setAxleComponents()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $repairTimesTypeId
     * @param string $typeCategory
     * @param string $carTypeGroup
     * @param int[] $axleComponents
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $repairTimesTypeId = null, $typeCategory = null, $carTypeGroup = null, array $axleComponents = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setRepairTimesTypeId($repairTimesTypeId)
            ->setTypeCategory($typeCategory)
            ->setCarTypeGroup($carTypeGroup)
            ->setAxleComponents($axleComponents);
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
     * @return \StructType\GetDrawingsV3
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
     * @return \StructType\GetDrawingsV3
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
     * Get carTypeId value
     * @return int|null
     */
    public function getCarTypeId()
    {
        return $this->carTypeId;
    }
    /**
     * Set carTypeId value
     * @param int $carTypeId
     * @return \StructType\GetDrawingsV3
     */
    public function setCarTypeId($carTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($carTypeId) && !(is_int($carTypeId) || ctype_digit($carTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($carTypeId, true), gettype($carTypeId)), __LINE__);
        }
        $this->carTypeId = $carTypeId;
        return $this;
    }
    /**
     * Get repairTimesTypeId value
     * @return int|null
     */
    public function getRepairTimesTypeId()
    {
        return $this->repairTimesTypeId;
    }
    /**
     * Set repairTimesTypeId value
     * @param int $repairTimesTypeId
     * @return \StructType\GetDrawingsV3
     */
    public function setRepairTimesTypeId($repairTimesTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($repairTimesTypeId) && !(is_int($repairTimesTypeId) || ctype_digit($repairTimesTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repairTimesTypeId, true), gettype($repairTimesTypeId)), __LINE__);
        }
        $this->repairTimesTypeId = $repairTimesTypeId;
        return $this;
    }
    /**
     * Get typeCategory value
     * @return string|null
     */
    public function getTypeCategory()
    {
        return $this->typeCategory;
    }
    /**
     * Set typeCategory value
     * @param string $typeCategory
     * @return \StructType\GetDrawingsV3
     */
    public function setTypeCategory($typeCategory = null)
    {
        // validation for constraint: string
        if (!is_null($typeCategory) && !is_string($typeCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeCategory, true), gettype($typeCategory)), __LINE__);
        }
        $this->typeCategory = $typeCategory;
        return $this;
    }
    /**
     * Get carTypeGroup value
     * @return string|null
     */
    public function getCarTypeGroup()
    {
        return $this->carTypeGroup;
    }
    /**
     * Set carTypeGroup value
     * @param string $carTypeGroup
     * @return \StructType\GetDrawingsV3
     */
    public function setCarTypeGroup($carTypeGroup = null)
    {
        // validation for constraint: string
        if (!is_null($carTypeGroup) && !is_string($carTypeGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carTypeGroup, true), gettype($carTypeGroup)), __LINE__);
        }
        $this->carTypeGroup = $carTypeGroup;
        return $this;
    }
    /**
     * Get axleComponents value
     * @return int[]|null
     */
    public function getAxleComponents()
    {
        return $this->axleComponents;
    }
    /**
     * This method is responsible for validating the values passed to the setAxleComponents method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAxleComponents method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAxleComponentsForArrayConstraintsFromSetAxleComponents(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDrawingsV3AxleComponentsItem) {
            // validation for constraint: itemType
            if (!(is_int($getDrawingsV3AxleComponentsItem) || ctype_digit($getDrawingsV3AxleComponentsItem))) {
                $invalidValues[] = is_object($getDrawingsV3AxleComponentsItem) ? get_class($getDrawingsV3AxleComponentsItem) : sprintf('%s(%s)', gettype($getDrawingsV3AxleComponentsItem), var_export($getDrawingsV3AxleComponentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The axleComponents property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set axleComponents value
     * @throws \InvalidArgumentException
     * @param int[] $axleComponents
     * @return \StructType\GetDrawingsV3
     */
    public function setAxleComponents(array $axleComponents = array())
    {
        // validation for constraint: array
        if ('' !== ($axleComponentsArrayErrorMessage = self::validateAxleComponentsForArrayConstraintsFromSetAxleComponents($axleComponents))) {
            throw new \InvalidArgumentException($axleComponentsArrayErrorMessage, __LINE__);
        }
        $this->axleComponents = $axleComponents;
        return $this;
    }
    /**
     * Add item to axleComponents value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\GetDrawingsV3
     */
    public function addToAxleComponents($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The axleComponents property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->axleComponents[] = $item;
        return $this;
    }
}
