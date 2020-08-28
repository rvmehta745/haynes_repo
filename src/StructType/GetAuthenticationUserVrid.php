<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAuthenticationUserVrid StructType
 * @subpackage Structs
 */
class GetAuthenticationUserVrid extends AbstractStructBase
{
    /**
     * The distributorUsername
     * @var string
     */
    public $distributorUsername;
    /**
     * The username
     * @var string
     */
    public $username;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * Constructor method for getAuthenticationUserVrid
     * @uses GetAuthenticationUserVrid::setDistributorUsername()
     * @uses GetAuthenticationUserVrid::setUsername()
     * @uses GetAuthenticationUserVrid::setPassword()
     * @param string $distributorUsername
     * @param string $username
     * @param string $password
     */
    public function __construct($distributorUsername = null, $username = null, $password = null)
    {
        $this
            ->setDistributorUsername($distributorUsername)
            ->setUsername($username)
            ->setPassword($password);
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
     * @return \StructType\GetAuthenticationUserVrid
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
     * @return \StructType\GetAuthenticationUserVrid
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
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \StructType\GetAuthenticationUserVrid
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
}
