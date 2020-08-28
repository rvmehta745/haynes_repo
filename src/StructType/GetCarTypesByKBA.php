<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCarTypesByKBA StructType
 * @subpackage Structs
 */
class GetCarTypesByKBA extends AbstractStructBase
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
     * The KBA
     * @var string
     */
    public $KBA;
    /**
     * Constructor method for getCarTypesByKBA
     * @uses GetCarTypesByKBA::setVrid()
     * @uses GetCarTypesByKBA::setDescriptionLanguage()
     * @uses GetCarTypesByKBA::setKBA()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param string $kBA
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $kBA = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setKBA($kBA);
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
     * @return \StructType\GetCarTypesByKBA
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
     * @return \StructType\GetCarTypesByKBA
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
     * Get KBA value
     * @return string|null
     */
    public function getKBA()
    {
        return $this->KBA;
    }
    /**
     * Set KBA value
     * @param string $kBA
     * @return \StructType\GetCarTypesByKBA
     */
    public function setKBA($kBA = null)
    {
        // validation for constraint: string
        if (!is_null($kBA) && !is_string($kBA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kBA, true), gettype($kBA)), __LINE__);
        }
        $this->KBA = $kBA;
        return $this;
    }
}
