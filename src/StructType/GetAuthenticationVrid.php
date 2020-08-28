<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAuthenticationVrid StructType
 * @subpackage Structs
 */
class GetAuthenticationVrid extends AbstractStructBase
{
    /**
     * The distributorUsername
     * @var string
     */
    public $distributorUsername;
    /**
     * The distributorPassword
     * @var string
     */
    public $distributorPassword;
    /**
     * The username
     * @var string
     */
    public $username;
    /**
     * Constructor method for getAuthenticationVrid
     * @uses GetAuthenticationVrid::setDistributorUsername()
     * @uses GetAuthenticationVrid::setDistributorPassword()
     * @uses GetAuthenticationVrid::setUsername()
     * @param string $distributorUsername
     * @param string $distributorPassword
     * @param string $username
     */
    public function __construct($distributorUsername = null, $distributorPassword = null, $username = null)
    {
        $this
            ->setDistributorUsername($distributorUsername)
            ->setDistributorPassword($distributorPassword)
            ->setUsername($username);
    }
    /**
     * Get distributorUsername value
     * @return string|null
     */
    public function getDistributorUsername()
    {
        return $this->distributorUsername;
    }
    /**
     * Set distributorUsername value
     * @param string $distributorUsername
     * @return \StructType\GetAuthenticationVrid
     */
    public function setDistributorUsername($distributorUsername = null)
    {
        // validation for constraint: string
        if (!is_null($distributorUsername) && !is_string($distributorUsername)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($distributorUsername, true), gettype($distributorUsername)), __LINE__);
        }
        $this->distributorUsername = $distributorUsername;
        return $this;
    }
    /**
     * Get distributorPassword value
     * @return string|null
     */
    public function getDistributorPassword()
    {
        return $this->distributorPassword;
    }
    /**
     * Set distributorPassword value
     * @param string $distributorPassword
     * @return \StructType\GetAuthenticationVrid
     */
    public function setDistributorPassword($distributorPassword = null)
    {
        // validation for constraint: string
        if (!is_null($distributorPassword) && !is_string($distributorPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($distributorPassword, true), gettype($distributorPassword)), __LINE__);
        }
        $this->distributorPassword = $distributorPassword;
        return $this;
    }
    /**
     * Get username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $username
     * @return \StructType\GetAuthenticationVrid
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->username = $username;
        return $this;
    }
}
