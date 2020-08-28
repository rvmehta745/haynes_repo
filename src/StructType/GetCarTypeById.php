<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCarTypeById StructType
 * @subpackage Structs
 */
class GetCarTypeById extends AbstractStructBase
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
     * The id
     * @var int
     */
    public $id;
    /**
     * The level
     * @var int
     */
    public $level;
    /**
     * Constructor method for getCarTypeById
     * @uses GetCarTypeById::setVrid()
     * @uses GetCarTypeById::setDescriptionLanguage()
     * @uses GetCarTypeById::setId()
     * @uses GetCarTypeById::setLevel()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $id
     * @param int $level
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $id = null, $level = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setId($id)
            ->setLevel($level);
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
     * @return \StructType\GetCarTypeById
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
     * @return \StructType\GetCarTypeById
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
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \StructType\GetCarTypeById
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get level value
     * @return int|null
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @param int $level
     * @return \StructType\GetCarTypeById
     */
    public function setLevel($level = null)
    {
        // validation for constraint: int
        if (!is_null($level) && !(is_int($level) || ctype_digit($level))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($level, true), gettype($level)), __LINE__);
        }
        $this->level = $level;
        return $this;
    }
}
