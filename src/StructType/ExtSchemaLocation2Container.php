<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtSchemaLocation2Container StructType
 * @subpackage Structs
 */
class ExtSchemaLocation2Container extends AbstractStructBase
{
    /**
     * The printSchemaMimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $printSchemaMimeDataName;
    /**
     * The schemaLocations
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtSchemaLocation
     */
    public $schemaLocations;
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
     * Constructor method for ExtSchemaLocation2Container
     * @uses ExtSchemaLocation2Container::setPrintSchemaMimeDataName()
     * @uses ExtSchemaLocation2Container::setSchemaLocations()
     * @uses ExtSchemaLocation2Container::setScreenSchemaMimeDataName()
     * @uses ExtSchemaLocation2Container::setStatus()
     * @param string $printSchemaMimeDataName
     * @param \ArrayType\ArrayOfExtSchemaLocation $schemaLocations
     * @param string $screenSchemaMimeDataName
     * @param \StructType\ExtStatus $status
     */
    public function __construct($printSchemaMimeDataName = null, \ArrayType\ArrayOfExtSchemaLocation $schemaLocations = null, $screenSchemaMimeDataName = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setPrintSchemaMimeDataName($printSchemaMimeDataName)
            ->setSchemaLocations($schemaLocations)
            ->setScreenSchemaMimeDataName($screenSchemaMimeDataName)
            ->setStatus($status);
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
     * @return \StructType\ExtSchemaLocation2Container
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
     * Get schemaLocations value
     * @return \ArrayType\ArrayOfExtSchemaLocation|null
     */
    public function getSchemaLocations()
    {
        return $this->schemaLocations;
    }
    /**
     * Set schemaLocations value
     * @param \ArrayType\ArrayOfExtSchemaLocation $schemaLocations
     * @return \StructType\ExtSchemaLocation2Container
     */
    public function setSchemaLocations(\ArrayType\ArrayOfExtSchemaLocation $schemaLocations = null)
    {
        $this->schemaLocations = $schemaLocations;
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
     * @return \StructType\ExtSchemaLocation2Container
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
     * @return \StructType\ExtSchemaLocation2Container
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
