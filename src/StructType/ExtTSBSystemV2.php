<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtTSBSystemV2 StructType
 * @subpackage Structs
 */
class ExtTSBSystemV2 extends AbstractStructBase
{
    /**
     * The criteria
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtTSBCriteria
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
     * Constructor method for ExtTSBSystemV2
     * @uses ExtTSBSystemV2::setCriteria()
     * @uses ExtTSBSystemV2::setOeCode()
     * @uses ExtTSBSystemV2::setSystemDescription()
     * @uses ExtTSBSystemV2::setSystemId()
     * @param \ArrayType\ArrayOfExtTSBCriteria $criteria
     * @param string $oeCode
     * @param string $systemDescription
     * @param int $systemId
     */
    public function __construct(\ArrayType\ArrayOfExtTSBCriteria $criteria = null, $oeCode = null, $systemDescription = null, $systemId = null)
    {
        $this
            ->setCriteria($criteria)
            ->setOeCode($oeCode)
            ->setSystemDescription($systemDescription)
            ->setSystemId($systemId);
    }
    /**
     * Get criteria value
     * @return \ArrayType\ArrayOfExtTSBCriteria|null
     */
    public function getCriteria()
    {
        return $this->criteria;
    }
    /**
     * Set criteria value
     * @param \ArrayType\ArrayOfExtTSBCriteria $criteria
     * @return \StructType\ExtTSBSystemV2
     */
    public function setCriteria(\ArrayType\ArrayOfExtTSBCriteria $criteria = null)
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
     * @return \StructType\ExtTSBSystemV2
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
     * @return \StructType\ExtTSBSystemV2
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
     * @return \StructType\ExtTSBSystemV2
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
