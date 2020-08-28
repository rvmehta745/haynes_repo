<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSpecificType StructType
 * @subpackage Structs
 */
class GetSpecificType extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The typeId
     * @var int
     */
    public $typeId;
    /**
     * Constructor method for getSpecificType
     * @uses GetSpecificType::setVrid()
     * @uses GetSpecificType::setTypeId()
     * @param string $vrid
     * @param int $typeId
     */
    public function __construct($vrid = null, $typeId = null)
    {
        $this
            ->setVrid($vrid)
            ->setTypeId($typeId);
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
     * @return \StructType\GetSpecificType
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
     * Get typeId value
     * @return int|null
     */
    public function getTypeId()
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param int $typeId
     * @return \StructType\GetSpecificType
     */
    public function setTypeId($typeId = null)
    {
        // validation for constraint: int
        if (!is_null($typeId) && !(is_int($typeId) || ctype_digit($typeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        return $this;
    }
}
