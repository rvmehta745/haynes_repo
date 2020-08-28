<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtWiringSystem StructType
 * @subpackage Structs
 */
class ExtWiringSystem extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $order;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The valleyOptional
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $valleyOptional;
    /**
     * The valleySystem
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $valleySystem;
    /**
     * Constructor method for ExtWiringSystem
     * @uses ExtWiringSystem::setId()
     * @uses ExtWiringSystem::setOrder()
     * @uses ExtWiringSystem::setStatus()
     * @uses ExtWiringSystem::setValleyOptional()
     * @uses ExtWiringSystem::setValleySystem()
     * @param int $id
     * @param int $order
     * @param \StructType\ExtStatus $status
     * @param string $valleyOptional
     * @param string $valleySystem
     */
    public function __construct($id = null, $order = null, \StructType\ExtStatus $status = null, $valleyOptional = null, $valleySystem = null)
    {
        $this
            ->setId($id)
            ->setOrder($order)
            ->setStatus($status)
            ->setValleyOptional($valleyOptional)
            ->setValleySystem($valleySystem);
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
     * @return \StructType\ExtWiringSystem
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
     * Get order value
     * @return int|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param int $order
     * @return \StructType\ExtWiringSystem
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->order = $order;
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
     * @return \StructType\ExtWiringSystem
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get valleyOptional value
     * @return string|null
     */
    public function getValleyOptional()
    {
        return $this->valleyOptional;
    }
    /**
     * Set valleyOptional value
     * @param string $valleyOptional
     * @return \StructType\ExtWiringSystem
     */
    public function setValleyOptional($valleyOptional = null)
    {
        // validation for constraint: string
        if (!is_null($valleyOptional) && !is_string($valleyOptional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valleyOptional, true), gettype($valleyOptional)), __LINE__);
        }
        $this->valleyOptional = $valleyOptional;
        return $this;
    }
    /**
     * Get valleySystem value
     * @return string|null
     */
    public function getValleySystem()
    {
        return $this->valleySystem;
    }
    /**
     * Set valleySystem value
     * @param string $valleySystem
     * @return \StructType\ExtWiringSystem
     */
    public function setValleySystem($valleySystem = null)
    {
        // validation for constraint: string
        if (!is_null($valleySystem) && !is_string($valleySystem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valleySystem, true), gettype($valleySystem)), __LINE__);
        }
        $this->valleySystem = $valleySystem;
        return $this;
    }
}
