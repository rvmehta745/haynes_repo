<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Make StructType
 * @subpackage Structs
 */
class Make extends DataObject
{
    /**
     * The ma_name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ma_name;
    /**
     * The ma_used
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $ma_used;
    /**
     * Constructor method for Make
     * @uses Make::setMa_name()
     * @uses Make::setMa_used()
     * @param string $ma_name
     * @param bool $ma_used
     */
    public function __construct($ma_name = null, $ma_used = null)
    {
        $this
            ->setMa_name($ma_name)
            ->setMa_used($ma_used);
    }
    /**
     * Get ma_name value
     * @return string|null
     */
    public function getMa_name()
    {
        return $this->ma_name;
    }
    /**
     * Set ma_name value
     * @param string $ma_name
     * @return \StructType\Make
     */
    public function setMa_name($ma_name = null)
    {
        // validation for constraint: string
        if (!is_null($ma_name) && !is_string($ma_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ma_name, true), gettype($ma_name)), __LINE__);
        }
        $this->ma_name = $ma_name;
        return $this;
    }
    /**
     * Get ma_used value
     * @return bool|null
     */
    public function getMa_used()
    {
        return $this->ma_used;
    }
    /**
     * Set ma_used value
     * @param bool $ma_used
     * @return \StructType\Make
     */
    public function setMa_used($ma_used = null)
    {
        // validation for constraint: boolean
        if (!is_null($ma_used) && !is_bool($ma_used)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ma_used, true), gettype($ma_used)), __LINE__);
        }
        $this->ma_used = $ma_used;
        return $this;
    }
}
