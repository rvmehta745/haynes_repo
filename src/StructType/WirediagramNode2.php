<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WirediagramNode2 StructType
 * @subpackage Structs
 */
class WirediagramNode2 extends AbstractStructBase
{
    /**
     * The drawRight
     * @var bool
     */
    public $drawRight;
    /**
     * The image
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $image;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The pinname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pinname;
    /**
     * The sort_order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $sort_order;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * Constructor method for WirediagramNode2
     * @uses WirediagramNode2::setDrawRight()
     * @uses WirediagramNode2::setImage()
     * @uses WirediagramNode2::setName()
     * @uses WirediagramNode2::setPinname()
     * @uses WirediagramNode2::setSort_order()
     * @uses WirediagramNode2::setType()
     * @param bool $drawRight
     * @param string $image
     * @param string $name
     * @param string $pinname
     * @param int $sort_order
     * @param string $type
     */
    public function __construct($drawRight = null, $image = null, $name = null, $pinname = null, $sort_order = null, $type = null)
    {
        $this
            ->setDrawRight($drawRight)
            ->setImage($image)
            ->setName($name)
            ->setPinname($pinname)
            ->setSort_order($sort_order)
            ->setType($type);
    }
    /**
     * Get drawRight value
     * @return bool|null
     */
    public function getDrawRight()
    {
        return $this->drawRight;
    }
    /**
     * Set drawRight value
     * @param bool $drawRight
     * @return \StructType\WirediagramNode2
     */
    public function setDrawRight($drawRight = null)
    {
        // validation for constraint: boolean
        if (!is_null($drawRight) && !is_bool($drawRight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($drawRight, true), gettype($drawRight)), __LINE__);
        }
        $this->drawRight = $drawRight;
        return $this;
    }
    /**
     * Get image value
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Set image value
     * @param string $image
     * @return \StructType\WirediagramNode2
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), gettype($image)), __LINE__);
        }
        $this->image = $image;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\WirediagramNode2
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get pinname value
     * @return string|null
     */
    public function getPinname()
    {
        return $this->pinname;
    }
    /**
     * Set pinname value
     * @param string $pinname
     * @return \StructType\WirediagramNode2
     */
    public function setPinname($pinname = null)
    {
        // validation for constraint: string
        if (!is_null($pinname) && !is_string($pinname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pinname, true), gettype($pinname)), __LINE__);
        }
        $this->pinname = $pinname;
        return $this;
    }
    /**
     * Get sort_order value
     * @return int|null
     */
    public function getSort_order()
    {
        return $this->sort_order;
    }
    /**
     * Set sort_order value
     * @param int $sort_order
     * @return \StructType\WirediagramNode2
     */
    public function setSort_order($sort_order = null)
    {
        // validation for constraint: int
        if (!is_null($sort_order) && !(is_int($sort_order) || ctype_digit($sort_order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sort_order, true), gettype($sort_order)), __LINE__);
        }
        $this->sort_order = $sort_order;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \StructType\WirediagramNode2
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
