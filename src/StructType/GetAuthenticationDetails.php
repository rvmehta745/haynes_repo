<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAuthenticationDetails StructType
 * @subpackage Structs
 */
class GetAuthenticationDetails extends AbstractStructBase
{
    /**
     * The user
     * @var string
     */
    public $user;
    /**
     * The password
     * @var string
     */
    public $password;
    /**
     * Constructor method for getAuthenticationDetails
     * @uses GetAuthenticationDetails::setUser()
     * @uses GetAuthenticationDetails::setPassword()
     * @param string $user
     * @param string $password
     */
    public function __construct($user = null, $password = null)
    {
        $this
            ->setUser($user)
            ->setPassword($password);
    }
    /**
     * Get user value
     * @return string|null
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param string $user
     * @return \StructType\GetAuthenticationDetails
     */
    public function setUser($user = null)
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        $this->user = $user;
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
     * @return \StructType\GetAuthenticationDetails
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
