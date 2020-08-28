<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtVersion StructType
 * @subpackage Structs
 */
class ExtVersion extends AbstractStructBase
{
    /**
     * The dbVersion
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dbVersion;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The webserviceVersion
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $webserviceVersion;
    /**
     * Constructor method for ExtVersion
     * @uses ExtVersion::setDbVersion()
     * @uses ExtVersion::setStatus()
     * @uses ExtVersion::setWebserviceVersion()
     * @param string $dbVersion
     * @param \StructType\ExtStatus $status
     * @param string $webserviceVersion
     */
    public function __construct($dbVersion = null, \StructType\ExtStatus $status = null, $webserviceVersion = null)
    {
        $this
            ->setDbVersion($dbVersion)
            ->setStatus($status)
            ->setWebserviceVersion($webserviceVersion);
    }
    /**
     * Get dbVersion value
     * @return string|null
     */
    public function getDbVersion()
    {
        return $this->dbVersion;
    }
    /**
     * Set dbVersion value
     * @param string $dbVersion
     * @return \StructType\ExtVersion
     */
    public function setDbVersion($dbVersion = null)
    {
        // validation for constraint: string
        if (!is_null($dbVersion) && !is_string($dbVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbVersion, true), gettype($dbVersion)), __LINE__);
        }
        $this->dbVersion = $dbVersion;
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
     * @return \StructType\ExtVersion
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get webserviceVersion value
     * @return string|null
     */
    public function getWebserviceVersion()
    {
        return $this->webserviceVersion;
    }
    /**
     * Set webserviceVersion value
     * @param string $webserviceVersion
     * @return \StructType\ExtVersion
     */
    public function setWebserviceVersion($webserviceVersion = null)
    {
        // validation for constraint: string
        if (!is_null($webserviceVersion) && !is_string($webserviceVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webserviceVersion, true), gettype($webserviceVersion)), __LINE__);
        }
        $this->webserviceVersion = $webserviceVersion;
        return $this;
    }
}
