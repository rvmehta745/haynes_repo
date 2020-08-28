<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtPhysicalLocationItem StructType
 * @subpackage Structs
 */
class ExtPhysicalLocationItem extends AbstractStructBase
{
    /**
     * The arrow
     * @var int
     */
    public $arrow;
    /**
     * The location
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $location;
    /**
     * The managementComponentId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $managementComponentId;
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
     * Constructor method for ExtPhysicalLocationItem
     * @uses ExtPhysicalLocationItem::setArrow()
     * @uses ExtPhysicalLocationItem::setLocation()
     * @uses ExtPhysicalLocationItem::setManagementComponentId()
     * @uses ExtPhysicalLocationItem::setX()
     * @uses ExtPhysicalLocationItem::setY()
     * @param int $arrow
     * @param string $location
     * @param int $managementComponentId
     * @param int $x
     * @param int $y
     */
    public function __construct($arrow = null, $location = null, $managementComponentId = null, $x = null, $y = null)
    {
        $this
            ->setArrow($arrow)
            ->setLocation($location)
            ->setManagementComponentId($managementComponentId)
            ->setX($x)
            ->setY($y);
    }
    /**
     * Get arrow value
     * @return int|null
     */
    public function getArrow()
    {
        return $this->arrow;
    }
    /**
     * Set arrow value
     * @param int $arrow
     * @return \StructType\ExtPhysicalLocationItem
     */
    public function setArrow($arrow = null)
    {
        // validation for constraint: int
        if (!is_null($arrow) && !(is_int($arrow) || ctype_digit($arrow))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($arrow, true), gettype($arrow)), __LINE__);
        }
        $this->arrow = $arrow;
        return $this;
    }
    /**
     * Get location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Set location value
     * @param string $location
     * @return \StructType\ExtPhysicalLocationItem
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->location = $location;
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
     * @return \StructType\ExtPhysicalLocationItem
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
     * @return \StructType\ExtPhysicalLocationItem
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
     * @return \StructType\ExtPhysicalLocationItem
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
