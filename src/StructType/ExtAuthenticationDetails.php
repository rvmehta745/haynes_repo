<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtAuthenticationDetails StructType
 * @subpackage Structs
 */
class ExtAuthenticationDetails extends AbstractStructBase
{
    /**
     * The statusCode
     * @var int
     */
    public $statusCode;
    /**
     * The subjects
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtSubjects
     */
    public $subjects;
    /**
     * The vrid
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vrid;
    /**
     * Constructor method for ExtAuthenticationDetails
     * @uses ExtAuthenticationDetails::setStatusCode()
     * @uses ExtAuthenticationDetails::setSubjects()
     * @uses ExtAuthenticationDetails::setVrid()
     * @param int $statusCode
     * @param \StructType\ExtSubjects $subjects
     * @param string $vrid
     */
    public function __construct($statusCode = null, \StructType\ExtSubjects $subjects = null, $vrid = null)
    {
        $this
            ->setStatusCode($statusCode)
            ->setSubjects($subjects)
            ->setVrid($vrid);
    }
    /**
     * Get statusCode value
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    /**
     * Set statusCode value
     * @param int $statusCode
     * @return \StructType\ExtAuthenticationDetails
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: int
        if (!is_null($statusCode) && !(is_int($statusCode) || ctype_digit($statusCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusCode, true), gettype($statusCode)), __LINE__);
        }
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     * Get subjects value
     * @return \StructType\ExtSubjects|null
     */
    public function getSubjects()
    {
        return $this->subjects;
    }
    /**
     * Set subjects value
     * @param \StructType\ExtSubjects $subjects
     * @return \StructType\ExtAuthenticationDetails
     */
    public function setSubjects(\StructType\ExtSubjects $subjects = null)
    {
        $this->subjects = $subjects;
        return $this;
    }
    /**
     * Get vrid value
     * @return string|null
     */
    public function getVrid()
    {
        return $this->vrid;
    }
    /**
     * Set vrid value
     * @param string $vrid
     * @return \StructType\ExtAuthenticationDetails
     */
    public function setVrid($vrid = null)
    {
        // validation for constraint: string
        if (!is_null($vrid) && !is_string($vrid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vrid, true), gettype($vrid)), __LINE__);
        }
        $this->vrid = $vrid;
        return $this;
    }
}
