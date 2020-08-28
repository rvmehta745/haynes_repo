<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdjustmentsV7 StructType
 * @subpackage Structs
 */
class GetAdjustmentsV7 extends AbstractStructBase
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
     * The carType
     * @var int
     */
    public $carType;
    /**
     * The carTypeGroup
     * @var string
     */
    public $carTypeGroup;
    /**
     * The includeSmartLinks
     * @var bool
     */
    public $includeSmartLinks;
    /**
     * The includeGenarts
     * @var bool
     */
    public $includeGenarts;
    /**
     * The includeCriterias
     * @var bool
     */
    public $includeCriterias;
    /**
     * The axleComponents
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $axleComponents;
    /**
     * Constructor method for getAdjustmentsV7
     * @uses GetAdjustmentsV7::setVrid()
     * @uses GetAdjustmentsV7::setDescriptionLanguage()
     * @uses GetAdjustmentsV7::setCarType()
     * @uses GetAdjustmentsV7::setCarTypeGroup()
     * @uses GetAdjustmentsV7::setIncludeSmartLinks()
     * @uses GetAdjustmentsV7::setIncludeGenarts()
     * @uses GetAdjustmentsV7::setIncludeCriterias()
     * @uses GetAdjustmentsV7::setAxleComponents()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carType
     * @param string $carTypeGroup
     * @param bool $includeSmartLinks
     * @param bool $includeGenarts
     * @param bool $includeCriterias
     * @param int[] $axleComponents
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carType = null, $carTypeGroup = null, $includeSmartLinks = null, $includeGenarts = null, $includeCriterias = null, array $axleComponents = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarType($carType)
            ->setCarTypeGroup($carTypeGroup)
            ->setIncludeSmartLinks($includeSmartLinks)
            ->setIncludeGenarts($includeGenarts)
            ->setIncludeCriterias($includeCriterias)
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
     * @return \StructType\GetAdjustmentsV7
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
     * @return \StructType\GetAdjustmentsV7
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
     * Get carType value
     * @return int|null
     */
    public function getCarType()
    {
        return $this->carType;
    }
    /**
     * Set carType value
     * @param int $carType
     * @return \StructType\GetAdjustmentsV7
     */
    public function setCarType($carType = null)
    {
        // validation for constraint: int
        if (!is_null($carType) && !(is_int($carType) || ctype_digit($carType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($carType, true), gettype($carType)), __LINE__);
        }
        $this->carType = $carType;
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
     * @return \StructType\GetAdjustmentsV7
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
     * Get includeSmartLinks value
     * @return bool|null
     */
    public function getIncludeSmartLinks()
    {
        return $this->includeSmartLinks;
    }
    /**
     * Set includeSmartLinks value
     * @param bool $includeSmartLinks
     * @return \StructType\GetAdjustmentsV7
     */
    public function setIncludeSmartLinks($includeSmartLinks = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeSmartLinks) && !is_bool($includeSmartLinks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeSmartLinks, true), gettype($includeSmartLinks)), __LINE__);
        }
        $this->includeSmartLinks = $includeSmartLinks;
        return $this;
    }
    /**
     * Get includeGenarts value
     * @return bool|null
     */
    public function getIncludeGenarts()
    {
        return $this->includeGenarts;
    }
    /**
     * Set includeGenarts value
     * @param bool $includeGenarts
     * @return \StructType\GetAdjustmentsV7
     */
    public function setIncludeGenarts($includeGenarts = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeGenarts) && !is_bool($includeGenarts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeGenarts, true), gettype($includeGenarts)), __LINE__);
        }
        $this->includeGenarts = $includeGenarts;
        return $this;
    }
    /**
     * Get includeCriterias value
     * @return bool|null
     */
    public function getIncludeCriterias()
    {
        return $this->includeCriterias;
    }
    /**
     * Set includeCriterias value
     * @param bool $includeCriterias
     * @return \StructType\GetAdjustmentsV7
     */
    public function setIncludeCriterias($includeCriterias = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeCriterias) && !is_bool($includeCriterias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeCriterias, true), gettype($includeCriterias)), __LINE__);
        }
        $this->includeCriterias = $includeCriterias;
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
        foreach ($values as $getAdjustmentsV7AxleComponentsItem) {
            // validation for constraint: itemType
            if (!(is_int($getAdjustmentsV7AxleComponentsItem) || ctype_digit($getAdjustmentsV7AxleComponentsItem))) {
                $invalidValues[] = is_object($getAdjustmentsV7AxleComponentsItem) ? get_class($getAdjustmentsV7AxleComponentsItem) : sprintf('%s(%s)', gettype($getAdjustmentsV7AxleComponentsItem), var_export($getAdjustmentsV7AxleComponentsItem, true));
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
     * @return \StructType\GetAdjustmentsV7
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
     * @return \StructType\GetAdjustmentsV7
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
