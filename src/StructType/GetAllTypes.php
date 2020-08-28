<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAllTypes StructType
 * @subpackage Structs
 */
class GetAllTypes extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The modelId
     * @var int
     */
    public $modelId;
    /**
     * Constructor method for getAllTypes
     * @uses GetAllTypes::setVrid()
     * @uses GetAllTypes::setModelId()
     * @param string $vrid
     * @param int $modelId
     */
    public function __construct($vrid = null, $modelId = null)
    {
        $this
            ->setVrid($vrid)
            ->setModelId($modelId);
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
     * @return \StructType\GetAllTypes
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
     * Get modelId value
     * @return int|null
     */
    public function getModelId()
    {
        return $this->modelId;
    }
    /**
     * Set modelId value
     * @param int $modelId
     * @return \StructType\GetAllTypes
     */
    public function setModelId($modelId = null)
    {
        // validation for constraint: int
        if (!is_null($modelId) && !(is_int($modelId) || ctype_digit($modelId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modelId, true), gettype($modelId)), __LINE__);
        }
        $this->modelId = $modelId;
        return $this;
    }
}
