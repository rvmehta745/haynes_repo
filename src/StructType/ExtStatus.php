<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtStatus StructType
 * @subpackage Structs
 */
class ExtStatus extends AbstractStructBase
{
    /**
     * The confirmationLink
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $confirmationLink;
    /**
     * The statusCode
     * @var int
     */
    public $statusCode;
    /**
     * Constructor method for ExtStatus
     * @uses ExtStatus::setConfirmationLink()
     * @uses ExtStatus::setStatusCode()
     * @param string $confirmationLink
     * @param int $statusCode
     */
    public function __construct($confirmationLink = null, $statusCode = null)
    {
        $this
            ->setConfirmationLink($confirmationLink)
            ->setStatusCode($statusCode);
    }
    /**
     * Get confirmationLink value
     * @return string|null
     */
    public function getConfirmationLink()
    {
        return $this->confirmationLink;
    }
    /**
     * Set confirmationLink value
     * @param string $confirmationLink
     * @return \StructType\ExtStatus
     */
    public function setConfirmationLink($confirmationLink = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationLink) && !is_string($confirmationLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationLink, true), gettype($confirmationLink)), __LINE__);
        }
        $this->confirmationLink = $confirmationLink;
        return $this;
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
     * @return \StructType\ExtStatus
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
}
