<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtTSBSystem StructType
 * @subpackage Structs
 */
class ExtTSBSystem extends AbstractStructBase
{
    /**
     * The criteria
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtTSBCriteria
     */
    public $criteria;
    /**
     * The oeCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $oeCode;
    /**
     * The systemDescription
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $systemDescription;
    /**
     * The systemId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $systemId;
    /**
     * Constructor method for ExtTSBSystem
     * @uses ExtTSBSystem::setCriteria()
     * @uses ExtTSBSystem::setOeCode()
     * @uses ExtTSBSystem::setSystemDescription()
     * @uses ExtTSBSystem::setSystemId()
     * @param \StructType\ExtTSBCriteria $criteria
     * @param string $oeCode
     * @param string $systemDescription
     * @param int $systemId
     */
    public function __construct(\StructType\ExtTSBCriteria $criteria = null, $oeCode = null, $systemDescription = null, $systemId = null)
    {
        $this
            ->setCriteria($criteria)
            ->setOeCode($oeCode)
            ->setSystemDescription($systemDescription)
            ->setSystemId($systemId);
    }
    /**
     * Get criteria value
     * @return \StructType\ExtTSBCriteria|null
     */
    public function getCriteria()
    {
        return $this->criteria;
    }
    /**
     * Set criteria value
     * @param \StructType\ExtTSBCriteria $criteria
     * @return \StructType\ExtTSBSystem
     */
    public function setCriteria(\StructType\ExtTSBCriteria $criteria = null)
    {
        $this->criteria = $criteria;
        return $this;
    }
    /**
     * Get oeCode value
     * @return string|null
     */
    public function getOeCode()
    {
        return $this->oeCode;
    }
    /**
     * Set oeCode value
     * @param string $oeCode
     * @return \StructType\ExtTSBSystem
     */
    public function setOeCode($oeCode = null)
    {
        // validation for constraint: string
        if (!is_null($oeCode) && !is_string($oeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oeCode, true), gettype($oeCode)), __LINE__);
        }
        $this->oeCode = $oeCode;
        return $this;
    }
    /**
     * Get systemDescription value
     * @return string|null
     */
    public function getSystemDescription()
    {
        return $this->systemDescription;
    }
    /**
     * Set systemDescription value
     * @param string $systemDescription
     * @return \StructType\ExtTSBSystem
     */
    public function setSystemDescription($systemDescription = null)
    {
        // validation for constraint: string
        if (!is_null($systemDescription) && !is_string($systemDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemDescription, true), gettype($systemDescription)), __LINE__);
        }
        $this->systemDescription = $systemDescription;
        return $this;
    }
    /**
     * Get systemId value
     * @return int|null
     */
    public function getSystemId()
    {
        return $this->systemId;
    }
    /**
     * Set systemId value
     * @param int $systemId
     * @return \StructType\ExtTSBSystem
     */
    public function setSystemId($systemId = null)
    {
        // validation for constraint: int
        if (!is_null($systemId) && !(is_int($systemId) || ctype_digit($systemId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($systemId, true), gettype($systemId)), __LINE__);
        }
        $this->systemId = $systemId;
        return $this;
    }
}
