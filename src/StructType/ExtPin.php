<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtPin StructType
 * @subpackage Structs
 */
class ExtPin extends AbstractStructBase
{
    /**
     * The pinNameId
     * @var int
     */
    public $pinNameId;
    /**
     * The symbolInstanceId
     * @var int
     */
    public $symbolInstanceId;
    /**
     * Constructor method for ExtPin
     * @uses ExtPin::setPinNameId()
     * @uses ExtPin::setSymbolInstanceId()
     * @param int $pinNameId
     * @param int $symbolInstanceId
     */
    public function __construct($pinNameId = null, $symbolInstanceId = null)
    {
        $this
            ->setPinNameId($pinNameId)
            ->setSymbolInstanceId($symbolInstanceId);
    }
    /**
     * Get pinNameId value
     * @return int|null
     */
    public function getPinNameId()
    {
        return $this->pinNameId;
    }
    /**
     * Set pinNameId value
     * @param int $pinNameId
     * @return \StructType\ExtPin
     */
    public function setPinNameId($pinNameId = null)
    {
        // validation for constraint: int
        if (!is_null($pinNameId) && !(is_int($pinNameId) || ctype_digit($pinNameId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pinNameId, true), gettype($pinNameId)), __LINE__);
        }
        $this->pinNameId = $pinNameId;
        return $this;
    }
    /**
     * Get symbolInstanceId value
     * @return int|null
     */
    public function getSymbolInstanceId()
    {
        return $this->symbolInstanceId;
    }
    /**
     * Set symbolInstanceId value
     * @param int $symbolInstanceId
     * @return \StructType\ExtPin
     */
    public function setSymbolInstanceId($symbolInstanceId = null)
    {
        // validation for constraint: int
        if (!is_null($symbolInstanceId) && !(is_int($symbolInstanceId) || ctype_digit($symbolInstanceId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($symbolInstanceId, true), gettype($symbolInstanceId)), __LINE__);
        }
        $this->symbolInstanceId = $symbolInstanceId;
        return $this;
    }
}
