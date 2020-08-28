<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findCarTypesByDetailsV2 StructType
 * @subpackage Structs
 */
class FindCarTypesByDetailsV2 extends AbstractStructBase
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
     * The makeDescription
     * @var string
     */
    public $makeDescription;
    /**
     * The wholeWordMakes
     * @var bool
     */
    public $wholeWordMakes;
    /**
     * The modelDescription
     * @var string
     */
    public $modelDescription;
    /**
     * The wholeWordModels
     * @var bool
     */
    public $wholeWordModels;
    /**
     * The modelCode
     * @var string
     */
    public $modelCode;
    /**
     * The wholeWordModelCode
     * @var bool
     */
    public $wholeWordModelCode;
    /**
     * The typeDescription
     * @var string
     */
    public $typeDescription;
    /**
     * The wholeWordTypes
     * @var bool
     */
    public $wholeWordTypes;
    /**
     * The engineCode
     * @var string
     */
    public $engineCode;
    /**
     * The wholeWordEngineCode
     * @var bool
     */
    public $wholeWordEngineCode;
    /**
     * The engineCapacity
     * @var int
     */
    public $engineCapacity;
    /**
     * The engineOutput
     * @var int
     */
    public $engineOutput;
    /**
     * The year
     * @var int
     */
    public $year;
    /**
     * Constructor method for findCarTypesByDetailsV2
     * @uses FindCarTypesByDetailsV2::setVrid()
     * @uses FindCarTypesByDetailsV2::setDescriptionLanguage()
     * @uses FindCarTypesByDetailsV2::setMakeDescription()
     * @uses FindCarTypesByDetailsV2::setWholeWordMakes()
     * @uses FindCarTypesByDetailsV2::setModelDescription()
     * @uses FindCarTypesByDetailsV2::setWholeWordModels()
     * @uses FindCarTypesByDetailsV2::setModelCode()
     * @uses FindCarTypesByDetailsV2::setWholeWordModelCode()
     * @uses FindCarTypesByDetailsV2::setTypeDescription()
     * @uses FindCarTypesByDetailsV2::setWholeWordTypes()
     * @uses FindCarTypesByDetailsV2::setEngineCode()
     * @uses FindCarTypesByDetailsV2::setWholeWordEngineCode()
     * @uses FindCarTypesByDetailsV2::setEngineCapacity()
     * @uses FindCarTypesByDetailsV2::setEngineOutput()
     * @uses FindCarTypesByDetailsV2::setYear()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param string $makeDescription
     * @param bool $wholeWordMakes
     * @param string $modelDescription
     * @param bool $wholeWordModels
     * @param string $modelCode
     * @param bool $wholeWordModelCode
     * @param string $typeDescription
     * @param bool $wholeWordTypes
     * @param string $engineCode
     * @param bool $wholeWordEngineCode
     * @param int $engineCapacity
     * @param int $engineOutput
     * @param int $year
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $makeDescription = null, $wholeWordMakes = null, $modelDescription = null, $wholeWordModels = null, $modelCode = null, $wholeWordModelCode = null, $typeDescription = null, $wholeWordTypes = null, $engineCode = null, $wholeWordEngineCode = null, $engineCapacity = null, $engineOutput = null, $year = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setMakeDescription($makeDescription)
            ->setWholeWordMakes($wholeWordMakes)
            ->setModelDescription($modelDescription)
            ->setWholeWordModels($wholeWordModels)
            ->setModelCode($modelCode)
            ->setWholeWordModelCode($wholeWordModelCode)
            ->setTypeDescription($typeDescription)
            ->setWholeWordTypes($wholeWordTypes)
            ->setEngineCode($engineCode)
            ->setWholeWordEngineCode($wholeWordEngineCode)
            ->setEngineCapacity($engineCapacity)
            ->setEngineOutput($engineOutput)
            ->setYear($year);
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
     * @return \StructType\FindCarTypesByDetailsV2
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
     * @return \StructType\FindCarTypesByDetailsV2
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
     * Get makeDescription value
     * @return string|null
     */
    public function getMakeDescription()
    {
        return $this->makeDescription;
    }
    /**
     * Set makeDescription value
     * @param string $makeDescription
     * @return \StructType\FindCarTypesByDetailsV2
     */
    public function setMakeDescription($makeDescription = null)
    {
        // validation for constraint: string
        if (!is_null($makeDescription) && !is_string($makeDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($makeDescription, true), gettype($makeDescription)), __LINE__);
        }
        $this->makeDescription = $makeDescription;
        return $this;
    }
    /**
     * Get wholeWordMakes value
     * @return bool|null
     */
    public function getWholeWordMakes()
    {
        return $this->wholeWordMakes;
    }
    /**
     * Set wholeWordMakes value
     * @param bool $wholeWordMakes
     * @return \StructType\FindCarTypesByDetailsV2
     */
    public function setWholeWordMakes($wholeWordMakes = null)
    {
        // validation for constraint: boolean
        if (!is_null($wholeWordMakes) && !is_bool($wholeWordMakes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wholeWordMakes, true), gettype($wholeWordMakes)), __LINE__);
        }
        $this->wholeWordMakes = $wholeWordMakes;
        return $this;
    }
    /**
     * Get modelDescription value
     * @return string|null
     */
    public function getModelDescription()
    {
        return $this->modelDescription;
    }
    /**
     * Set modelDescription value
     * @param string $modelDescription
     * @return \StructType\FindCarTypesByDetailsV2
     */
    public function setModelDescription($modelDescription = null)
    {
        // validation for constraint: string
        if (!is_null($modelDescription) && !is_string($modelDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modelDescription, true), gettype($modelDescription)), __LINE__);
        }
        $this->modelDescription = $modelDescription;
        return $this;
    }
    /**
     * Get wholeWordModels value
     * @return bool|null
     */
    public function getWholeWordModels()
    {
        return $this->wholeWordModels;
    }
    /**
     * Set wholeWordModels value
     * @param bool $wholeWordModels
     * @return \StructType\FindCarTypesByDetailsV2
     */
    public function setWholeWordModels($wholeWordModels = null)
    {
        // validation for constraint: boolean
        if (!is_null($wholeWordModels) && !is_bool($wholeWordModels)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wholeWordModels, true), gettype($wholeWordModels)), __LINE__);
        }
        $this->wholeWordModels = $wholeWordModels;
        return $this;
    }
    /**
     * Get modelCode value
     * @return string|null
     */
    public function getModelCode()
    {
        return $this->modelCode;
    }
    /**
     * Set modelCode value
     * @param string $modelCode
     * @return \StructType\FindCarTypesByDetailsV2
     */
    public function setModelCode($modelCode = null)
    {
        // validation for constraint: string
        if (!is_null($modelCode) && !is_string($modelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modelCode, true), gettype($modelCode)), __LINE__);
        }
        $this->modelCode = $modelCode;
        return $this;
    }
    /**
     * Get wholeWordModelCode value
     * @return bool|null
     */
    public function getWholeWordModelCode()
    {
        return $this->wholeWordModelCode;
    }
    /**
     * Set wholeWordModelCode value
     * @param bool $wholeWordModelCode
     * @return \StructType\FindCarTypesByDetailsV2
     */
    public function setWholeWordModelCode($wholeWordModelCode = null)
    {
        // validation for constraint: boolean
        if (!is_null($wholeWordModelCode) && !is_bool($wholeWordModelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wholeWordModelCode, true), gettype($wholeWordModelCode)), __LINE__);
        }
        $this->wholeWordModelCode = $wholeWordModelCode;
        return $this;
    }
    /**
     * Get typeDescription value
     * @return string|null
     */
    public function getTypeDescription()
    {
        return $this->typeDescription;
    }
    /**
     * Set typeDescription value
     * @param string $typeDescription
     * @return \StructType\FindCarTypesByDetailsV2
     */
    public function setTypeDescription($typeDescription = null)
    {
        // validation for constraint: string
        if (!is_null($typeDescription) && !is_string($typeDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeDescription, true), gettype($typeDescription)), __LINE__);
        }
        $this->typeDescription = $typeDescription;
        return $this;
    }
    /**
     * Get wholeWordTypes value
     * @return bool|null
     */
    public function getWholeWordTypes()
    {
        return $this->wholeWordTypes;
    }
    /**
     * Set wholeWordTypes value
     * @param bool $wholeWordTypes
     * @return \StructType\FindCarTypesByDetailsV2
     */
    public function setWholeWordTypes($wholeWordTypes = null)
    {
        // validation for constraint: boolean
        if (!is_null($wholeWordTypes) && !is_bool($wholeWordTypes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wholeWordTypes, true), gettype($wholeWordTypes)), __LINE__);
        }
        $this->wholeWordTypes = $wholeWordTypes;
        return $this;
    }
    /**
     * Get engineCode value
     * @return string|null
     */
    public function getEngineCode()
    {
        return $this->engineCode;
    }
    /**
     * Set engineCode value
     * @param string $engineCode
     * @return \StructType\FindCarTypesByDetailsV2
     */
    public function setEngineCode($engineCode = null)
    {
        // validation for constraint: string
        if (!is_null($engineCode) && !is_string($engineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($engineCode, true), gettype($engineCode)), __LINE__);
        }
        $this->engineCode = $engineCode;
        return $this;
    }
    /**
     * Get wholeWordEngineCode value
     * @return bool|null
     */
    public function getWholeWordEngineCode()
    {
        return $this->wholeWordEngineCode;
    }
    /**
     * Set wholeWordEngineCode value
     * @param bool $wholeWordEngineCode
     * @return \StructType\FindCarTypesByDetailsV2
     */
    public function setWholeWordEngineCode($wholeWordEngineCode = null)
    {
        // validation for constraint: boolean
        if (!is_null($wholeWordEngineCode) && !is_bool($wholeWordEngineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wholeWordEngineCode, true), gettype($wholeWordEngineCode)), __LINE__);
        }
        $this->wholeWordEngineCode = $wholeWordEngineCode;
        return $this;
    }
    /**
     * Get engineCapacity value
     * @return int|null
     */
    public function getEngineCapacity()
    {
        return $this->engineCapacity;
    }
    /**
     * Set engineCapacity value
     * @param int $engineCapacity
     * @return \StructType\FindCarTypesByDetailsV2
     */
    public function setEngineCapacity($engineCapacity = null)
    {
        // validation for constraint: int
        if (!is_null($engineCapacity) && !(is_int($engineCapacity) || ctype_digit($engineCapacity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($engineCapacity, true), gettype($engineCapacity)), __LINE__);
        }
        $this->engineCapacity = $engineCapacity;
        return $this;
    }
    /**
     * Get engineOutput value
     * @return int|null
     */
    public function getEngineOutput()
    {
        return $this->engineOutput;
    }
    /**
     * Set engineOutput value
     * @param int $engineOutput
     * @return \StructType\FindCarTypesByDetailsV2
     */
    public function setEngineOutput($engineOutput = null)
    {
        // validation for constraint: int
        if (!is_null($engineOutput) && !(is_int($engineOutput) || ctype_digit($engineOutput))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($engineOutput, true), gettype($engineOutput)), __LINE__);
        }
        $this->engineOutput = $engineOutput;
        return $this;
    }
    /**
     * Get year value
     * @return int|null
     */
    public function getYear()
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param int $year
     * @return \StructType\FindCarTypesByDetailsV2
     */
    public function setYear($year = null)
    {
        // validation for constraint: int
        if (!is_null($year) && !(is_int($year) || ctype_digit($year))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->year = $year;
        return $this;
    }
}
