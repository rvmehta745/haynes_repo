<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtIdLocation StructType
 * @subpackage Structs
 */
class ExtIdLocation extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The engineMimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $engineMimeDataName;
    /**
     * The generalMimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $generalMimeDataName;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The transmissionMimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $transmissionMimeDataName;
    /**
     * Constructor method for ExtIdLocation
     * @uses ExtIdLocation::setDescription()
     * @uses ExtIdLocation::setEngineMimeDataName()
     * @uses ExtIdLocation::setGeneralMimeDataName()
     * @uses ExtIdLocation::setStatus()
     * @uses ExtIdLocation::setTransmissionMimeDataName()
     * @param string $description
     * @param string $engineMimeDataName
     * @param string $generalMimeDataName
     * @param \StructType\ExtStatus $status
     * @param string $transmissionMimeDataName
     */
    public function __construct($description = null, $engineMimeDataName = null, $generalMimeDataName = null, \StructType\ExtStatus $status = null, $transmissionMimeDataName = null)
    {
        $this
            ->setDescription($description)
            ->setEngineMimeDataName($engineMimeDataName)
            ->setGeneralMimeDataName($generalMimeDataName)
            ->setStatus($status)
            ->setTransmissionMimeDataName($transmissionMimeDataName);
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
     * @return \StructType\ExtIdLocation
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
     * Get engineMimeDataName value
     * @return string|null
     */
    public function getEngineMimeDataName()
    {
        return $this->engineMimeDataName;
    }
    /**
     * Set engineMimeDataName value
     * @param string $engineMimeDataName
     * @return \StructType\ExtIdLocation
     */
    public function setEngineMimeDataName($engineMimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($engineMimeDataName) && !is_string($engineMimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($engineMimeDataName, true), gettype($engineMimeDataName)), __LINE__);
        }
        $this->engineMimeDataName = $engineMimeDataName;
        return $this;
    }
    /**
     * Get generalMimeDataName value
     * @return string|null
     */
    public function getGeneralMimeDataName()
    {
        return $this->generalMimeDataName;
    }
    /**
     * Set generalMimeDataName value
     * @param string $generalMimeDataName
     * @return \StructType\ExtIdLocation
     */
    public function setGeneralMimeDataName($generalMimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($generalMimeDataName) && !is_string($generalMimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($generalMimeDataName, true), gettype($generalMimeDataName)), __LINE__);
        }
        $this->generalMimeDataName = $generalMimeDataName;
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
     * @return \StructType\ExtIdLocation
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get transmissionMimeDataName value
     * @return string|null
     */
    public function getTransmissionMimeDataName()
    {
        return $this->transmissionMimeDataName;
    }
    /**
     * Set transmissionMimeDataName value
     * @param string $transmissionMimeDataName
     * @return \StructType\ExtIdLocation
     */
    public function setTransmissionMimeDataName($transmissionMimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($transmissionMimeDataName) && !is_string($transmissionMimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transmissionMimeDataName, true), gettype($transmissionMimeDataName)), __LINE__);
        }
        $this->transmissionMimeDataName = $transmissionMimeDataName;
        return $this;
    }
}
