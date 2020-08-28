<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtWiringDiagram StructType
 * @subpackage Structs
 */
class ExtWiringDiagram extends AbstractStructBase
{
    /**
     * The mimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mimeDataName;
    /**
     * The numberOfSchematics
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $numberOfSchematics;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The valleySubSystem
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $valleySubSystem;
    /**
     * Constructor method for ExtWiringDiagram
     * @uses ExtWiringDiagram::setMimeDataName()
     * @uses ExtWiringDiagram::setNumberOfSchematics()
     * @uses ExtWiringDiagram::setStatus()
     * @uses ExtWiringDiagram::setValleySubSystem()
     * @param string $mimeDataName
     * @param string $numberOfSchematics
     * @param \StructType\ExtStatus $status
     * @param string $valleySubSystem
     */
    public function __construct($mimeDataName = null, $numberOfSchematics = null, \StructType\ExtStatus $status = null, $valleySubSystem = null)
    {
        $this
            ->setMimeDataName($mimeDataName)
            ->setNumberOfSchematics($numberOfSchematics)
            ->setStatus($status)
            ->setValleySubSystem($valleySubSystem);
    }
    /**
     * Get mimeDataName value
     * @return string|null
     */
    public function getMimeDataName()
    {
        return $this->mimeDataName;
    }
    /**
     * Set mimeDataName value
     * @param string $mimeDataName
     * @return \StructType\ExtWiringDiagram
     */
    public function setMimeDataName($mimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($mimeDataName) && !is_string($mimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimeDataName, true), gettype($mimeDataName)), __LINE__);
        }
        $this->mimeDataName = $mimeDataName;
        return $this;
    }
    /**
     * Get numberOfSchematics value
     * @return string|null
     */
    public function getNumberOfSchematics()
    {
        return $this->numberOfSchematics;
    }
    /**
     * Set numberOfSchematics value
     * @param string $numberOfSchematics
     * @return \StructType\ExtWiringDiagram
     */
    public function setNumberOfSchematics($numberOfSchematics = null)
    {
        // validation for constraint: string
        if (!is_null($numberOfSchematics) && !is_string($numberOfSchematics)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberOfSchematics, true), gettype($numberOfSchematics)), __LINE__);
        }
        $this->numberOfSchematics = $numberOfSchematics;
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
     * @return \StructType\ExtWiringDiagram
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get valleySubSystem value
     * @return string|null
     */
    public function getValleySubSystem()
    {
        return $this->valleySubSystem;
    }
    /**
     * Set valleySubSystem value
     * @param string $valleySubSystem
     * @return \StructType\ExtWiringDiagram
     */
    public function setValleySubSystem($valleySubSystem = null)
    {
        // validation for constraint: string
        if (!is_null($valleySubSystem) && !is_string($valleySubSystem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valleySubSystem, true), gettype($valleySubSystem)), __LINE__);
        }
        $this->valleySubSystem = $valleySubSystem;
        return $this;
    }
}
