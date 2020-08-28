<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtTSBSystemV4 StructType
 * @subpackage Structs
 */
class ExtTSBSystemV4 extends AbstractStructBase
{
    /**
     * The issueDate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $issueDate;
    /**
     * The oeCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $oeCode;
    /**
     * The storyCriteria
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtCriteriaGroup
     */
    public $storyCriteria;
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
     * The tsbCriteria
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtTSBCriteria
     */
    public $tsbCriteria;
    /**
     * Constructor method for ExtTSBSystemV4
     * @uses ExtTSBSystemV4::setIssueDate()
     * @uses ExtTSBSystemV4::setOeCode()
     * @uses ExtTSBSystemV4::setStoryCriteria()
     * @uses ExtTSBSystemV4::setSystemDescription()
     * @uses ExtTSBSystemV4::setSystemId()
     * @uses ExtTSBSystemV4::setTsbCriteria()
     * @param string $issueDate
     * @param string $oeCode
     * @param \ArrayType\ArrayOfExtCriteriaGroup $storyCriteria
     * @param string $systemDescription
     * @param int $systemId
     * @param \ArrayType\ArrayOfExtTSBCriteria $tsbCriteria
     */
    public function __construct($issueDate = null, $oeCode = null, \ArrayType\ArrayOfExtCriteriaGroup $storyCriteria = null, $systemDescription = null, $systemId = null, \ArrayType\ArrayOfExtTSBCriteria $tsbCriteria = null)
    {
        $this
            ->setIssueDate($issueDate)
            ->setOeCode($oeCode)
            ->setStoryCriteria($storyCriteria)
            ->setSystemDescription($systemDescription)
            ->setSystemId($systemId)
            ->setTsbCriteria($tsbCriteria);
    }
    /**
     * Get issueDate value
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }
    /**
     * Set issueDate value
     * @param string $issueDate
     * @return \StructType\ExtTSBSystemV4
     */
    public function setIssueDate($issueDate = null)
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
        $this->issueDate = $issueDate;
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
     * @return \StructType\ExtTSBSystemV4
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
     * Get storyCriteria value
     * @return \ArrayType\ArrayOfExtCriteriaGroup|null
     */
    public function getStoryCriteria()
    {
        return $this->storyCriteria;
    }
    /**
     * Set storyCriteria value
     * @param \ArrayType\ArrayOfExtCriteriaGroup $storyCriteria
     * @return \StructType\ExtTSBSystemV4
     */
    public function setStoryCriteria(\ArrayType\ArrayOfExtCriteriaGroup $storyCriteria = null)
    {
        $this->storyCriteria = $storyCriteria;
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
     * @return \StructType\ExtTSBSystemV4
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
     * @return \StructType\ExtTSBSystemV4
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
    /**
     * Get tsbCriteria value
     * @return \ArrayType\ArrayOfExtTSBCriteria|null
     */
    public function getTsbCriteria()
    {
        return $this->tsbCriteria;
    }
    /**
     * Set tsbCriteria value
     * @param \ArrayType\ArrayOfExtTSBCriteria $tsbCriteria
     * @return \StructType\ExtTSBSystemV4
     */
    public function setTsbCriteria(\ArrayType\ArrayOfExtTSBCriteria $tsbCriteria = null)
    {
        $this->tsbCriteria = $tsbCriteria;
        return $this;
    }
}
