<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAllModels StructType
 * @subpackage Structs
 */
class GetAllModels extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The makeId
     * @var int
     */
    public $makeId;
    /**
     * Constructor method for getAllModels
     * @uses GetAllModels::setVrid()
     * @uses GetAllModels::setMakeId()
     * @param string $vrid
     * @param int $makeId
     */
    public function __construct($vrid = null, $makeId = null)
    {
        $this
            ->setVrid($vrid)
            ->setMakeId($makeId);
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
     * @return \StructType\GetAllModels
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
     * Get makeId value
     * @return int|null
     */
    public function getMakeId()
    {
        return $this->makeId;
    }
    /**
     * Set makeId value
     * @param int $makeId
     * @return \StructType\GetAllModels
     */
    public function setMakeId($makeId = null)
    {
        // validation for constraint: int
        if (!is_null($makeId) && !(is_int($makeId) || ctype_digit($makeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($makeId, true), gettype($makeId)), __LINE__);
        }
        $this->makeId = $makeId;
        return $this;
    }
}
