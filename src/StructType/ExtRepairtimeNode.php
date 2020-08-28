<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtRepairtimeNode StructType
 * @subpackage Structs
 */
class ExtRepairtimeNode extends AbstractStructBase
{
    /**
     * The awNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $awNumber;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The genarts
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_int
     */
    public $genarts;
    /**
     * The hasInfoGroups
     * @var bool
     */
    public $hasInfoGroups;
    /**
     * The hasSubnodes
     * @var bool
     */
    public $hasSubnodes;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
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
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $value;
    /**
     * Constructor method for ExtRepairtimeNode
     * @uses ExtRepairtimeNode::setAwNumber()
     * @uses ExtRepairtimeNode::setDescription()
     * @uses ExtRepairtimeNode::setGenarts()
     * @uses ExtRepairtimeNode::setHasInfoGroups()
     * @uses ExtRepairtimeNode::setHasSubnodes()
     * @uses ExtRepairtimeNode::setId()
     * @uses ExtRepairtimeNode::setOrder()
     * @uses ExtRepairtimeNode::setStatus()
     * @uses ExtRepairtimeNode::setValue()
     * @param string $awNumber
     * @param string $description
     * @param \ArrayType\ArrayOf_xsd_int $genarts
     * @param bool $hasInfoGroups
     * @param bool $hasSubnodes
     * @param string $id
     * @param int $order
     * @param \StructType\ExtStatus $status
     * @param int $value
     */
    public function __construct($awNumber = null, $description = null, \ArrayType\ArrayOf_xsd_int $genarts = null, $hasInfoGroups = null, $hasSubnodes = null, $id = null, $order = null, \StructType\ExtStatus $status = null, $value = null)
    {
        $this
            ->setAwNumber($awNumber)
            ->setDescription($description)
            ->setGenarts($genarts)
            ->setHasInfoGroups($hasInfoGroups)
            ->setHasSubnodes($hasSubnodes)
            ->setId($id)
            ->setOrder($order)
            ->setStatus($status)
            ->setValue($value);
    }
    /**
     * Get awNumber value
     * @return string|null
     */
    public function getAwNumber()
    {
        return $this->awNumber;
    }
    /**
     * Set awNumber value
     * @param string $awNumber
     * @return \StructType\ExtRepairtimeNode
     */
    public function setAwNumber($awNumber = null)
    {
        // validation for constraint: string
        if (!is_null($awNumber) && !is_string($awNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($awNumber, true), gettype($awNumber)), __LINE__);
        }
        $this->awNumber = $awNumber;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \StructType\ExtRepairtimeNode
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get genarts value
     * @return \ArrayType\ArrayOf_xsd_int|null
     */
    public function getGenarts()
    {
        return $this->genarts;
    }
    /**
     * Set genarts value
     * @param \ArrayType\ArrayOf_xsd_int $genarts
     * @return \StructType\ExtRepairtimeNode
     */
    public function setGenarts(\ArrayType\ArrayOf_xsd_int $genarts = null)
    {
        $this->genarts = $genarts;
        return $this;
    }
    /**
     * Get hasInfoGroups value
     * @return bool|null
     */
    public function getHasInfoGroups()
    {
        return $this->hasInfoGroups;
    }
    /**
     * Set hasInfoGroups value
     * @param bool $hasInfoGroups
     * @return \StructType\ExtRepairtimeNode
     */
    public function setHasInfoGroups($hasInfoGroups = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasInfoGroups) && !is_bool($hasInfoGroups)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasInfoGroups, true), gettype($hasInfoGroups)), __LINE__);
        }
        $this->hasInfoGroups = $hasInfoGroups;
        return $this;
    }
    /**
     * Get hasSubnodes value
     * @return bool|null
     */
    public function getHasSubnodes()
    {
        return $this->hasSubnodes;
    }
    /**
     * Set hasSubnodes value
     * @param bool $hasSubnodes
     * @return \StructType\ExtRepairtimeNode
     */
    public function setHasSubnodes($hasSubnodes = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasSubnodes) && !is_bool($hasSubnodes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasSubnodes, true), gettype($hasSubnodes)), __LINE__);
        }
        $this->hasSubnodes = $hasSubnodes;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\ExtRepairtimeNode
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
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
     * @return \StructType\ExtRepairtimeNode
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
     * @return \StructType\ExtRepairtimeNode
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get value value
     * @return int|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param int $value
     * @return \StructType\ExtRepairtimeNode
     */
    public function setValue($value = null)
    {
        // validation for constraint: int
        if (!is_null($value) && !(is_int($value) || ctype_digit($value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
}
