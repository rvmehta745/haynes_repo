<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFaultCodesForType StructType
 * @subpackage Structs
 */
class GetFaultCodesForType extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The type
     * @var int
     */
    public $type;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for getFaultCodesForType
     * @uses GetFaultCodesForType::setVrid()
     * @uses GetFaultCodesForType::setType()
     * @uses GetFaultCodesForType::setLanguage()
     * @param string $vrid
     * @param int $type
     * @param string $language
     */
    public function __construct($vrid = null, $type = null, $language = null)
    {
        $this
            ->setVrid($vrid)
            ->setType($type)
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
     * @return \StructType\GetFaultCodesForType
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
     * Get type value
     * @return int|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \StructType\GetFaultCodesForType
     */
    public function setType($type = null)
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
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
     * @return \StructType\GetFaultCodesForType
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
