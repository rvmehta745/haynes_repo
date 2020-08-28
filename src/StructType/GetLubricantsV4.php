<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLubricantsV4 StructType
 * @subpackage Structs
 */
class GetLubricantsV4 extends AbstractStructBase
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
     * The axleComponents
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $axleComponents;
    /**
     * Constructor method for getLubricantsV4
     * @uses GetLubricantsV4::setVrid()
     * @uses GetLubricantsV4::setDescriptionLanguage()
     * @uses GetLubricantsV4::setCarType()
     * @uses GetLubricantsV4::setCarTypeGroup()
     * @uses GetLubricantsV4::setAxleComponents()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carType
     * @param string $carTypeGroup
     * @param int[] $axleComponents
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carType = null, $carTypeGroup = null, array $axleComponents = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarType($carType)
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
     * @return \StructType\GetLubricantsV4
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
     * @return \StructType\GetLubricantsV4
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
     * @return \StructType\GetLubricantsV4
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
     * @return \StructType\GetLubricantsV4
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
        foreach ($values as $getLubricantsV4AxleComponentsItem) {
            // validation for constraint: itemType
            if (!(is_int($getLubricantsV4AxleComponentsItem) || ctype_digit($getLubricantsV4AxleComponentsItem))) {
                $invalidValues[] = is_object($getLubricantsV4AxleComponentsItem) ? get_class($getLubricantsV4AxleComponentsItem) : sprintf('%s(%s)', gettype($getLubricantsV4AxleComponentsItem), var_export($getLubricantsV4AxleComponentsItem, true));
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
     * @return \StructType\GetLubricantsV4
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
     * @return \StructType\GetLubricantsV4
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
