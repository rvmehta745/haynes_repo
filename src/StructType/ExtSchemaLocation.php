<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtSchemaLocation StructType
 * @subpackage Structs
 */
class ExtSchemaLocation extends AbstractStructBase
{
    /**
     * The height
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $height;
    /**
     * The managementComponentId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $managementComponentId;
    /**
     * The pinsBetweenPinsForScope1
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pinsBetweenPinsForScope1;
    /**
     * The pinsToGroundForScope1
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pinsToGroundForScope1;
    /**
     * The pinsToGroundForScope2
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pinsToGroundForScope2;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The width
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $width;
    /**
     * The x
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $x;
    /**
     * The y
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $y;
    /**
     * Constructor method for ExtSchemaLocation
     * @uses ExtSchemaLocation::setHeight()
     * @uses ExtSchemaLocation::setManagementComponentId()
     * @uses ExtSchemaLocation::setPinsBetweenPinsForScope1()
     * @uses ExtSchemaLocation::setPinsToGroundForScope1()
     * @uses ExtSchemaLocation::setPinsToGroundForScope2()
     * @uses ExtSchemaLocation::setStatus()
     * @uses ExtSchemaLocation::setWidth()
     * @uses ExtSchemaLocation::setX()
     * @uses ExtSchemaLocation::setY()
     * @param int $height
     * @param int $managementComponentId
     * @param string $pinsBetweenPinsForScope1
     * @param string $pinsToGroundForScope1
     * @param string $pinsToGroundForScope2
     * @param \StructType\ExtStatus $status
     * @param int $width
     * @param int $x
     * @param int $y
     */
    public function __construct($height = null, $managementComponentId = null, $pinsBetweenPinsForScope1 = null, $pinsToGroundForScope1 = null, $pinsToGroundForScope2 = null, \StructType\ExtStatus $status = null, $width = null, $x = null, $y = null)
    {
        $this
            ->setHeight($height)
            ->setManagementComponentId($managementComponentId)
            ->setPinsBetweenPinsForScope1($pinsBetweenPinsForScope1)
            ->setPinsToGroundForScope1($pinsToGroundForScope1)
            ->setPinsToGroundForScope2($pinsToGroundForScope2)
            ->setStatus($status)
            ->setWidth($width)
            ->setX($x)
            ->setY($y);
    }
    /**
     * Get height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param int $height
     * @return \StructType\ExtSchemaLocation
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !(is_int($height) || ctype_digit($height))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;
        return $this;
    }
    /**
     * Get managementComponentId value
     * @return int|null
     */
    public function getManagementComponentId()
    {
        return $this->managementComponentId;
    }
    /**
     * Set managementComponentId value
     * @param int $managementComponentId
     * @return \StructType\ExtSchemaLocation
     */
    public function setManagementComponentId($managementComponentId = null)
    {
        // validation for constraint: int
        if (!is_null($managementComponentId) && !(is_int($managementComponentId) || ctype_digit($managementComponentId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($managementComponentId, true), gettype($managementComponentId)), __LINE__);
        }
        $this->managementComponentId = $managementComponentId;
        return $this;
    }
    /**
     * Get pinsBetweenPinsForScope1 value
     * @return string|null
     */
    public function getPinsBetweenPinsForScope1()
    {
        return $this->pinsBetweenPinsForScope1;
    }
    /**
     * Set pinsBetweenPinsForScope1 value
     * @param string $pinsBetweenPinsForScope1
     * @return \StructType\ExtSchemaLocation
     */
    public function setPinsBetweenPinsForScope1($pinsBetweenPinsForScope1 = null)
    {
        // validation for constraint: string
        if (!is_null($pinsBetweenPinsForScope1) && !is_string($pinsBetweenPinsForScope1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pinsBetweenPinsForScope1, true), gettype($pinsBetweenPinsForScope1)), __LINE__);
        }
        $this->pinsBetweenPinsForScope1 = $pinsBetweenPinsForScope1;
        return $this;
    }
    /**
     * Get pinsToGroundForScope1 value
     * @return string|null
     */
    public function getPinsToGroundForScope1()
    {
        return $this->pinsToGroundForScope1;
    }
    /**
     * Set pinsToGroundForScope1 value
     * @param string $pinsToGroundForScope1
     * @return \StructType\ExtSchemaLocation
     */
    public function setPinsToGroundForScope1($pinsToGroundForScope1 = null)
    {
        // validation for constraint: string
        if (!is_null($pinsToGroundForScope1) && !is_string($pinsToGroundForScope1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pinsToGroundForScope1, true), gettype($pinsToGroundForScope1)), __LINE__);
        }
        $this->pinsToGroundForScope1 = $pinsToGroundForScope1;
        return $this;
    }
    /**
     * Get pinsToGroundForScope2 value
     * @return string|null
     */
    public function getPinsToGroundForScope2()
    {
        return $this->pinsToGroundForScope2;
    }
    /**
     * Set pinsToGroundForScope2 value
     * @param string $pinsToGroundForScope2
     * @return \StructType\ExtSchemaLocation
     */
    public function setPinsToGroundForScope2($pinsToGroundForScope2 = null)
    {
        // validation for constraint: string
        if (!is_null($pinsToGroundForScope2) && !is_string($pinsToGroundForScope2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pinsToGroundForScope2, true), gettype($pinsToGroundForScope2)), __LINE__);
        }
        $this->pinsToGroundForScope2 = $pinsToGroundForScope2;
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
     * @return \StructType\ExtSchemaLocation
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param int $width
     * @return \StructType\ExtSchemaLocation
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !(is_int($width) || ctype_digit($width))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;
        return $this;
    }
    /**
     * Get x value
     * @return int|null
     */
    public function getX()
    {
        return $this->x;
    }
    /**
     * Set x value
     * @param int $x
     * @return \StructType\ExtSchemaLocation
     */
    public function setX($x = null)
    {
        // validation for constraint: int
        if (!is_null($x) && !(is_int($x) || ctype_digit($x))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($x, true), gettype($x)), __LINE__);
        }
        $this->x = $x;
        return $this;
    }
    /**
     * Get y value
     * @return int|null
     */
    public function getY()
    {
        return $this->y;
    }
    /**
     * Set y value
     * @param int $y
     * @return \StructType\ExtSchemaLocation
     */
    public function setY($y = null)
    {
        // validation for constraint: int
        if (!is_null($y) && !(is_int($y) || ctype_digit($y))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($y, true), gettype($y)), __LINE__);
        }
        $this->y = $y;
        return $this;
    }
}
