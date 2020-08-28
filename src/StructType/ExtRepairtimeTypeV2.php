<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtRepairtimeTypeV2 StructType
 * @subpackage Structs
 */
class ExtRepairtimeTypeV2 extends AbstractStructBase
{
    /**
     * The madeFrom
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $madeFrom;
    /**
     * The madeUntil
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $madeUntil;
    /**
     * The make
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $make;
    /**
     * The model
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $model;
    /**
     * The output
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $output;
    /**
     * The repairtimeTypeId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $repairtimeTypeId;
    /**
     * The rootNodeId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $rootNodeId;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The typeCategory
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $typeCategory;
    /**
     * Constructor method for ExtRepairtimeTypeV2
     * @uses ExtRepairtimeTypeV2::setMadeFrom()
     * @uses ExtRepairtimeTypeV2::setMadeUntil()
     * @uses ExtRepairtimeTypeV2::setMake()
     * @uses ExtRepairtimeTypeV2::setModel()
     * @uses ExtRepairtimeTypeV2::setOutput()
     * @uses ExtRepairtimeTypeV2::setRepairtimeTypeId()
     * @uses ExtRepairtimeTypeV2::setRootNodeId()
     * @uses ExtRepairtimeTypeV2::setStatus()
     * @uses ExtRepairtimeTypeV2::setType()
     * @uses ExtRepairtimeTypeV2::setTypeCategory()
     * @param string $madeFrom
     * @param string $madeUntil
     * @param string $make
     * @param string $model
     * @param int $output
     * @param int $repairtimeTypeId
     * @param string $rootNodeId
     * @param \StructType\ExtStatus $status
     * @param string $type
     * @param string $typeCategory
     */
    public function __construct($madeFrom = null, $madeUntil = null, $make = null, $model = null, $output = null, $repairtimeTypeId = null, $rootNodeId = null, \StructType\ExtStatus $status = null, $type = null, $typeCategory = null)
    {
        $this
            ->setMadeFrom($madeFrom)
            ->setMadeUntil($madeUntil)
            ->setMake($make)
            ->setModel($model)
            ->setOutput($output)
            ->setRepairtimeTypeId($repairtimeTypeId)
            ->setRootNodeId($rootNodeId)
            ->setStatus($status)
            ->setType($type)
            ->setTypeCategory($typeCategory);
    }
    /**
     * Get madeFrom value
     * @return string|null
     */
    public function getMadeFrom()
    {
        return $this->madeFrom;
    }
    /**
     * Set madeFrom value
     * @param string $madeFrom
     * @return \StructType\ExtRepairtimeTypeV2
     */
    public function setMadeFrom($madeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($madeFrom) && !is_string($madeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($madeFrom, true), gettype($madeFrom)), __LINE__);
        }
        $this->madeFrom = $madeFrom;
        return $this;
    }
    /**
     * Get madeUntil value
     * @return string|null
     */
    public function getMadeUntil()
    {
        return $this->madeUntil;
    }
    /**
     * Set madeUntil value
     * @param string $madeUntil
     * @return \StructType\ExtRepairtimeTypeV2
     */
    public function setMadeUntil($madeUntil = null)
    {
        // validation for constraint: string
        if (!is_null($madeUntil) && !is_string($madeUntil)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($madeUntil, true), gettype($madeUntil)), __LINE__);
        }
        $this->madeUntil = $madeUntil;
        return $this;
    }
    /**
     * Get make value
     * @return string|null
     */
    public function getMake()
    {
        return $this->make;
    }
    /**
     * Set make value
     * @param string $make
     * @return \StructType\ExtRepairtimeTypeV2
     */
    public function setMake($make = null)
    {
        // validation for constraint: string
        if (!is_null($make) && !is_string($make)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($make, true), gettype($make)), __LINE__);
        }
        $this->make = $make;
        return $this;
    }
    /**
     * Get model value
     * @return string|null
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * Set model value
     * @param string $model
     * @return \StructType\ExtRepairtimeTypeV2
     */
    public function setModel($model = null)
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($model, true), gettype($model)), __LINE__);
        }
        $this->model = $model;
        return $this;
    }
    /**
     * Get output value
     * @return int|null
     */
    public function getOutput()
    {
        return $this->output;
    }
    /**
     * Set output value
     * @param int $output
     * @return \StructType\ExtRepairtimeTypeV2
     */
    public function setOutput($output = null)
    {
        // validation for constraint: int
        if (!is_null($output) && !(is_int($output) || ctype_digit($output))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($output, true), gettype($output)), __LINE__);
        }
        $this->output = $output;
        return $this;
    }
    /**
     * Get repairtimeTypeId value
     * @return int|null
     */
    public function getRepairtimeTypeId()
    {
        return $this->repairtimeTypeId;
    }
    /**
     * Set repairtimeTypeId value
     * @param int $repairtimeTypeId
     * @return \StructType\ExtRepairtimeTypeV2
     */
    public function setRepairtimeTypeId($repairtimeTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($repairtimeTypeId) && !(is_int($repairtimeTypeId) || ctype_digit($repairtimeTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repairtimeTypeId, true), gettype($repairtimeTypeId)), __LINE__);
        }
        $this->repairtimeTypeId = $repairtimeTypeId;
        return $this;
    }
    /**
     * Get rootNodeId value
     * @return string|null
     */
    public function getRootNodeId()
    {
        return $this->rootNodeId;
    }
    /**
     * Set rootNodeId value
     * @param string $rootNodeId
     * @return \StructType\ExtRepairtimeTypeV2
     */
    public function setRootNodeId($rootNodeId = null)
    {
        // validation for constraint: string
        if (!is_null($rootNodeId) && !is_string($rootNodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rootNodeId, true), gettype($rootNodeId)), __LINE__);
        }
        $this->rootNodeId = $rootNodeId;
        return $this;
    }
    /**
     * Get status value
     * @return \StructType\ExtStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \StructType\ExtStatus $status
     * @return \StructType\ExtRepairtimeTypeV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \StructType\ExtRepairtimeTypeV2
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get typeCategory value
     * @return string|null
     */
    public function getTypeCategory()
    {
        return $this->typeCategory;
    }
    /**
     * Set typeCategory value
     * @param string $typeCategory
     * @return \StructType\ExtRepairtimeTypeV2
     */
    public function setTypeCategory($typeCategory = null)
    {
        // validation for constraint: string
        if (!is_null($typeCategory) && !is_string($typeCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeCategory, true), gettype($typeCategory)), __LINE__);
        }
        $this->typeCategory = $typeCategory;
        return $this;
    }
}
