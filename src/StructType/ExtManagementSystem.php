<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtManagementSystem StructType
 * @subpackage Structs
 */
class ExtManagementSystem extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The managementSystemId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $managementSystemId;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $order;
    /**
     * The printSchemaMimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $printSchemaMimeDataName;
    /**
     * The screenSchemaMimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $screenSchemaMimeDataName;
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
     * @var int
     */
    public $type;
    /**
     * Constructor method for ExtManagementSystem
     * @uses ExtManagementSystem::setDescription()
     * @uses ExtManagementSystem::setManagementSystemId()
     * @uses ExtManagementSystem::setOrder()
     * @uses ExtManagementSystem::setPrintSchemaMimeDataName()
     * @uses ExtManagementSystem::setScreenSchemaMimeDataName()
     * @uses ExtManagementSystem::setStatus()
     * @uses ExtManagementSystem::setType()
     * @param string $description
     * @param int $managementSystemId
     * @param int $order
     * @param string $printSchemaMimeDataName
     * @param string $screenSchemaMimeDataName
     * @param \StructType\ExtStatus $status
     * @param int $type
     */
    public function __construct($description = null, $managementSystemId = null, $order = null, $printSchemaMimeDataName = null, $screenSchemaMimeDataName = null, \StructType\ExtStatus $status = null, $type = null)
    {
        $this
            ->setDescription($description)
            ->setManagementSystemId($managementSystemId)
            ->setOrder($order)
            ->setPrintSchemaMimeDataName($printSchemaMimeDataName)
            ->setScreenSchemaMimeDataName($screenSchemaMimeDataName)
            ->setStatus($status)
            ->setType($type);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \StructType\ExtManagementSystem
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get managementSystemId value
     * @return int|null
     */
    public function getManagementSystemId()
    {
        return $this->managementSystemId;
    }
    /**
     * Set managementSystemId value
     * @param int $managementSystemId
     * @return \StructType\ExtManagementSystem
     */
    public function setManagementSystemId($managementSystemId = null)
    {
        // validation for constraint: int
        if (!is_null($managementSystemId) && !(is_int($managementSystemId) || ctype_digit($managementSystemId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($managementSystemId, true), gettype($managementSystemId)), __LINE__);
        }
        $this->managementSystemId = $managementSystemId;
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
     * @return \StructType\ExtManagementSystem
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
     * Get printSchemaMimeDataName value
     * @return string|null
     */
    public function getPrintSchemaMimeDataName()
    {
        return $this->printSchemaMimeDataName;
    }
    /**
     * Set printSchemaMimeDataName value
     * @param string $printSchemaMimeDataName
     * @return \StructType\ExtManagementSystem
     */
    public function setPrintSchemaMimeDataName($printSchemaMimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($printSchemaMimeDataName) && !is_string($printSchemaMimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printSchemaMimeDataName, true), gettype($printSchemaMimeDataName)), __LINE__);
        }
        $this->printSchemaMimeDataName = $printSchemaMimeDataName;
        return $this;
    }
    /**
     * Get screenSchemaMimeDataName value
     * @return string|null
     */
    public function getScreenSchemaMimeDataName()
    {
        return $this->screenSchemaMimeDataName;
    }
    /**
     * Set screenSchemaMimeDataName value
     * @param string $screenSchemaMimeDataName
     * @return \StructType\ExtManagementSystem
     */
    public function setScreenSchemaMimeDataName($screenSchemaMimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($screenSchemaMimeDataName) && !is_string($screenSchemaMimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($screenSchemaMimeDataName, true), gettype($screenSchemaMimeDataName)), __LINE__);
        }
        $this->screenSchemaMimeDataName = $screenSchemaMimeDataName;
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
     * @return \StructType\ExtManagementSystem
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
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
     * @return \StructType\ExtManagementSystem
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
}
