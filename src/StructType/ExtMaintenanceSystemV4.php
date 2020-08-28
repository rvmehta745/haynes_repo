<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMaintenanceSystemV4 StructType
 * @subpackage Structs
 */
class ExtMaintenanceSystemV4 extends AbstractStructBase
{
    /**
     * The criteria
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtCriteria
     */
    public $criteria;
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The maintenancePeriods
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtMaintenancePeriodV4
     */
    public $maintenancePeriods;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtMaintenanceSystemV4
     * @uses ExtMaintenanceSystemV4::setCriteria()
     * @uses ExtMaintenanceSystemV4::setId()
     * @uses ExtMaintenanceSystemV4::setMaintenancePeriods()
     * @uses ExtMaintenanceSystemV4::setName()
     * @uses ExtMaintenanceSystemV4::setStatus()
     * @param \ArrayType\ArrayOfExtCriteria $criteria
     * @param int $id
     * @param \ArrayType\ArrayOfExtMaintenancePeriodV4 $maintenancePeriods
     * @param string $name
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOfExtCriteria $criteria = null, $id = null, \ArrayType\ArrayOfExtMaintenancePeriodV4 $maintenancePeriods = null, $name = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setCriteria($criteria)
            ->setId($id)
            ->setMaintenancePeriods($maintenancePeriods)
            ->setName($name)
            ->setStatus($status);
    }
    /**
     * Get criteria value
     * @return \ArrayType\ArrayOfExtCriteria|null
     */
    public function getCriteria()
    {
        return $this->criteria;
    }
    /**
     * Set criteria value
     * @param \ArrayType\ArrayOfExtCriteria $criteria
     * @return \StructType\ExtMaintenanceSystemV4
     */
    public function setCriteria(\ArrayType\ArrayOfExtCriteria $criteria = null)
    {
        $this->criteria = $criteria;
        return $this;
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
     * @return \StructType\ExtMaintenanceSystemV4
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
     * Get maintenancePeriods value
     * @return \ArrayType\ArrayOfExtMaintenancePeriodV4|null
     */
    public function getMaintenancePeriods()
    {
        return $this->maintenancePeriods;
    }
    /**
     * Set maintenancePeriods value
     * @param \ArrayType\ArrayOfExtMaintenancePeriodV4 $maintenancePeriods
     * @return \StructType\ExtMaintenanceSystemV4
     */
    public function setMaintenancePeriods(\ArrayType\ArrayOfExtMaintenancePeriodV4 $maintenancePeriods = null)
    {
        $this->maintenancePeriods = $maintenancePeriods;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\ExtMaintenanceSystemV4
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
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
     * @return \StructType\ExtMaintenanceSystemV4
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
