<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtLubricantGroup StructType
 * @subpackage Structs
 */
class ExtLubricantGroup extends AbstractStructBase
{
    /**
     * The lubricantItems
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtLubricantItem
     */
    public $lubricantItems;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The order
     * @var int
     */
    public $order;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtLubricantGroup
     * @uses ExtLubricantGroup::setLubricantItems()
     * @uses ExtLubricantGroup::setName()
     * @uses ExtLubricantGroup::setOrder()
     * @uses ExtLubricantGroup::setStatus()
     * @param \ArrayType\ArrayOfExtLubricantItem $lubricantItems
     * @param string $name
     * @param int $order
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOfExtLubricantItem $lubricantItems = null, $name = null, $order = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setLubricantItems($lubricantItems)
            ->setName($name)
            ->setOrder($order)
            ->setStatus($status);
    }
    /**
     * Get lubricantItems value
     * @return \ArrayType\ArrayOfExtLubricantItem|null
     */
    public function getLubricantItems()
    {
        return $this->lubricantItems;
    }
    /**
     * Set lubricantItems value
     * @param \ArrayType\ArrayOfExtLubricantItem $lubricantItems
     * @return \StructType\ExtLubricantGroup
     */
    public function setLubricantItems(\ArrayType\ArrayOfExtLubricantItem $lubricantItems = null)
    {
        $this->lubricantItems = $lubricantItems;
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
     * @return \StructType\ExtLubricantGroup
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
     * Get order value
     * @return int|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param int $order
     * @return \StructType\ExtLubricantGroup
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->order = $order;
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
     * @return \StructType\ExtLubricantGroup
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
