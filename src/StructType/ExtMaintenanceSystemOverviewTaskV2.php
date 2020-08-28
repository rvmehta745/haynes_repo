<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenanceSystemOverviewTaskV2 StructType
 * @subpackage Structs
 */
class ExtMaintenanceSystemOverviewTaskV2 extends AbstractStructBase
{
    /**
     * The columnIds
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_int
     */
    public $columnIds;
    /**
     * The columnsAsBits
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $columnsAsBits;
    /**
     * The taskDescription
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $taskDescription;
    /**
     * Constructor method for ExtMaintenanceSystemOverviewTaskV2
     * @uses ExtMaintenanceSystemOverviewTaskV2::setColumnIds()
     * @uses ExtMaintenanceSystemOverviewTaskV2::setColumnsAsBits()
     * @uses ExtMaintenanceSystemOverviewTaskV2::setTaskDescription()
     * @param \ArrayType\ArrayOf_xsd_int $columnIds
     * @param string $columnsAsBits
     * @param string $taskDescription
     */
    public function __construct(\ArrayType\ArrayOf_xsd_int $columnIds = null, $columnsAsBits = null, $taskDescription = null)
    {
        $this
            ->setColumnIds($columnIds)
            ->setColumnsAsBits($columnsAsBits)
            ->setTaskDescription($taskDescription);
    }
    /**
     * Get columnIds value
     * @return \ArrayType\ArrayOf_xsd_int|null
     */
    public function getColumnIds()
    {
        return $this->columnIds;
    }
    /**
     * Set columnIds value
     * @param \ArrayType\ArrayOf_xsd_int $columnIds
     * @return \StructType\ExtMaintenanceSystemOverviewTaskV2
     */
    public function setColumnIds(\ArrayType\ArrayOf_xsd_int $columnIds = null)
    {
        $this->columnIds = $columnIds;
        return $this;
    }
    /**
     * Get columnsAsBits value
     * @return string|null
     */
    public function getColumnsAsBits()
    {
        return $this->columnsAsBits;
    }
    /**
     * Set columnsAsBits value
     * @param string $columnsAsBits
     * @return \StructType\ExtMaintenanceSystemOverviewTaskV2
     */
    public function setColumnsAsBits($columnsAsBits = null)
    {
        // validation for constraint: string
        if (!is_null($columnsAsBits) && !is_string($columnsAsBits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($columnsAsBits, true), gettype($columnsAsBits)), __LINE__);
        }
        $this->columnsAsBits = $columnsAsBits;
        return $this;
    }
    /**
     * Get taskDescription value
     * @return string|null
     */
    public function getTaskDescription()
    {
        return $this->taskDescription;
    }
    /**
     * Set taskDescription value
     * @param string $taskDescription
     * @return \StructType\ExtMaintenanceSystemOverviewTaskV2
     */
    public function setTaskDescription($taskDescription = null)
    {
        // validation for constraint: string
        if (!is_null($taskDescription) && !is_string($taskDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskDescription, true), gettype($taskDescription)), __LINE__);
        }
        $this->taskDescription = $taskDescription;
        return $this;
    }
}
