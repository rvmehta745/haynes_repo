<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for findCarTypesByDetails StructType
 * @subpackage Structs
 */
class FindCarTypesByDetails extends AbstractStructBase
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
     * Constructor method for findCarTypesByDetails
     * @uses FindCarTypesByDetails::setVrid()
     * @uses FindCarTypesByDetails::setDescriptionLanguage()
     * @uses FindCarTypesByDetails::setMakeDescription()
     * @uses FindCarTypesByDetails::setWholeWordMakes()
     * @uses FindCarTypesByDetails::setModelDescription()
     * @uses FindCarTypesByDetails::setWholeWordModels()
     * @uses FindCarTypesByDetails::setTypeDescription()
     * @uses FindCarTypesByDetails::setWholeWordTypes()
     * @uses FindCarTypesByDetails::setEngineCode()
     * @uses FindCarTypesByDetails::setWholeWordEngineCode()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param string $makeDescription
     * @param bool $wholeWordMakes
     * @param string $modelDescription
     * @param bool $wholeWordModels
     * @param string $typeDescription
     * @param bool $wholeWordTypes
     * @param string $engineCode
     * @param bool $wholeWordEngineCode
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $makeDescription = null, $wholeWordMakes = null, $modelDescription = null, $wholeWordModels = null, $typeDescription = null, $wholeWordTypes = null, $engineCode = null, $wholeWordEngineCode = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setMakeDescription($makeDescription)
            ->setWholeWordMakes($wholeWordMakes)
            ->setModelDescription($modelDescription)
            ->setWholeWordModels($wholeWordModels)
            ->setTypeDescription($typeDescription)
            ->setWholeWordTypes($wholeWordTypes)
            ->setEngineCode($engineCode)
            ->setWholeWordEngineCode($wholeWordEngineCode);
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
     * @return \StructType\FindCarTypesByDetails
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
     * @return \StructType\FindCarTypesByDetails
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
     * @return \StructType\FindCarTypesByDetails
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
     * @return \StructType\FindCarTypesByDetails
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
     * @return \StructType\FindCarTypesByDetails
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
     * @return \StructType\FindCarTypesByDetails
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
     * @return \StructType\FindCarTypesByDetails
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
     * @return \StructType\FindCarTypesByDetails
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
     * @return \StructType\FindCarTypesByDetails
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
     * @return \StructType\FindCarTypesByDetails
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
}
