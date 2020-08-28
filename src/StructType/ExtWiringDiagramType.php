<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtWiringDiagramType StructType
 * @subpackage Structs
 */
class ExtWiringDiagramType extends AbstractStructBase
{
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $endDate;
    /**
     * The engineCylinders
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $engineCylinders;
    /**
     * The engineDisplacement
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $engineDisplacement;
    /**
     * The engineName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $engineName;
    /**
     * The enginePower
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $enginePower;
    /**
     * The engineType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $engineType;
    /**
     * The exportCountry
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $exportCountry;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The modelYear
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $modelYear;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $order;
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $startDate;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The vehType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vehType;
    /**
     * Constructor method for ExtWiringDiagramType
     * @uses ExtWiringDiagramType::setEndDate()
     * @uses ExtWiringDiagramType::setEngineCylinders()
     * @uses ExtWiringDiagramType::setEngineDisplacement()
     * @uses ExtWiringDiagramType::setEngineName()
     * @uses ExtWiringDiagramType::setEnginePower()
     * @uses ExtWiringDiagramType::setEngineType()
     * @uses ExtWiringDiagramType::setExportCountry()
     * @uses ExtWiringDiagramType::setId()
     * @uses ExtWiringDiagramType::setModelYear()
     * @uses ExtWiringDiagramType::setOrder()
     * @uses ExtWiringDiagramType::setStartDate()
     * @uses ExtWiringDiagramType::setStatus()
     * @uses ExtWiringDiagramType::setVehType()
     * @param string $endDate
     * @param int $engineCylinders
     * @param string $engineDisplacement
     * @param string $engineName
     * @param string $enginePower
     * @param string $engineType
     * @param string $exportCountry
     * @param string $id
     * @param int $modelYear
     * @param int $order
     * @param string $startDate
     * @param \StructType\ExtStatus $status
     * @param string $vehType
     */
    public function __construct($endDate = null, $engineCylinders = null, $engineDisplacement = null, $engineName = null, $enginePower = null, $engineType = null, $exportCountry = null, $id = null, $modelYear = null, $order = null, $startDate = null, \StructType\ExtStatus $status = null, $vehType = null)
    {
        $this
            ->setEndDate($endDate)
            ->setEngineCylinders($engineCylinders)
            ->setEngineDisplacement($engineDisplacement)
            ->setEngineName($engineName)
            ->setEnginePower($enginePower)
            ->setEngineType($engineType)
            ->setExportCountry($exportCountry)
            ->setId($id)
            ->setModelYear($modelYear)
            ->setOrder($order)
            ->setStartDate($startDate)
            ->setStatus($status)
            ->setVehType($vehType);
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \StructType\ExtWiringDiagramType
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Get engineCylinders value
     * @return int|null
     */
    public function getEngineCylinders()
    {
        return $this->engineCylinders;
    }
    /**
     * Set engineCylinders value
     * @param int $engineCylinders
     * @return \StructType\ExtWiringDiagramType
     */
    public function setEngineCylinders($engineCylinders = null)
    {
        // validation for constraint: int
        if (!is_null($engineCylinders) && !(is_int($engineCylinders) || ctype_digit($engineCylinders))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($engineCylinders, true), gettype($engineCylinders)), __LINE__);
        }
        $this->engineCylinders = $engineCylinders;
        return $this;
    }
    /**
     * Get engineDisplacement value
     * @return string|null
     */
    public function getEngineDisplacement()
    {
        return $this->engineDisplacement;
    }
    /**
     * Set engineDisplacement value
     * @param string $engineDisplacement
     * @return \StructType\ExtWiringDiagramType
     */
    public function setEngineDisplacement($engineDisplacement = null)
    {
        // validation for constraint: string
        if (!is_null($engineDisplacement) && !is_string($engineDisplacement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($engineDisplacement, true), gettype($engineDisplacement)), __LINE__);
        }
        $this->engineDisplacement = $engineDisplacement;
        return $this;
    }
    /**
     * Get engineName value
     * @return string|null
     */
    public function getEngineName()
    {
        return $this->engineName;
    }
    /**
     * Set engineName value
     * @param string $engineName
     * @return \StructType\ExtWiringDiagramType
     */
    public function setEngineName($engineName = null)
    {
        // validation for constraint: string
        if (!is_null($engineName) && !is_string($engineName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($engineName, true), gettype($engineName)), __LINE__);
        }
        $this->engineName = $engineName;
        return $this;
    }
    /**
     * Get enginePower value
     * @return string|null
     */
    public function getEnginePower()
    {
        return $this->enginePower;
    }
    /**
     * Set enginePower value
     * @param string $enginePower
     * @return \StructType\ExtWiringDiagramType
     */
    public function setEnginePower($enginePower = null)
    {
        // validation for constraint: string
        if (!is_null($enginePower) && !is_string($enginePower)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enginePower, true), gettype($enginePower)), __LINE__);
        }
        $this->enginePower = $enginePower;
        return $this;
    }
    /**
     * Get engineType value
     * @return string|null
     */
    public function getEngineType()
    {
        return $this->engineType;
    }
    /**
     * Set engineType value
     * @param string $engineType
     * @return \StructType\ExtWiringDiagramType
     */
    public function setEngineType($engineType = null)
    {
        // validation for constraint: string
        if (!is_null($engineType) && !is_string($engineType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($engineType, true), gettype($engineType)), __LINE__);
        }
        $this->engineType = $engineType;
        return $this;
    }
    /**
     * Get exportCountry value
     * @return string|null
     */
    public function getExportCountry()
    {
        return $this->exportCountry;
    }
    /**
     * Set exportCountry value
     * @param string $exportCountry
     * @return \StructType\ExtWiringDiagramType
     */
    public function setExportCountry($exportCountry = null)
    {
        // validation for constraint: string
        if (!is_null($exportCountry) && !is_string($exportCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportCountry, true), gettype($exportCountry)), __LINE__);
        }
        $this->exportCountry = $exportCountry;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\ExtWiringDiagramType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get modelYear value
     * @return int|null
     */
    public function getModelYear()
    {
        return $this->modelYear;
    }
    /**
     * Set modelYear value
     * @param int $modelYear
     * @return \StructType\ExtWiringDiagramType
     */
    public function setModelYear($modelYear = null)
    {
        // validation for constraint: int
        if (!is_null($modelYear) && !(is_int($modelYear) || ctype_digit($modelYear))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modelYear, true), gettype($modelYear)), __LINE__);
        }
        $this->modelYear = $modelYear;
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
     * @return \StructType\ExtWiringDiagramType
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
     * Get startDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \StructType\ExtWiringDiagramType
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
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
     * @return \StructType\ExtWiringDiagramType
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get vehType value
     * @return string|null
     */
    public function getVehType()
    {
        return $this->vehType;
    }
    /**
     * Set vehType value
     * @param string $vehType
     * @return \StructType\ExtWiringDiagramType
     */
    public function setVehType($vehType = null)
    {
        // validation for constraint: string
        if (!is_null($vehType) && !is_string($vehType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehType, true), gettype($vehType)), __LINE__);
        }
        $this->vehType = $vehType;
        return $this;
    }
}
