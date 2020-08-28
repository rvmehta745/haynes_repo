<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtSmartLink StructType
 * @subpackage Structs
 */
class ExtSmartLink extends AbstractStructBase
{
    /**
     * The filter
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $filter;
    /**
     * The id1
     * @var int
     */
    public $id1;
    /**
     * The id2
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $id2;
    /**
     * The operation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $operation;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_string
     */
    public $text;
    /**
     * Constructor method for ExtSmartLink
     * @uses ExtSmartLink::setFilter()
     * @uses ExtSmartLink::setId1()
     * @uses ExtSmartLink::setId2()
     * @uses ExtSmartLink::setOperation()
     * @uses ExtSmartLink::setText()
     * @param string $filter
     * @param int $id1
     * @param string $id2
     * @param string $operation
     * @param \ArrayType\ArrayOf_xsd_string $text
     */
    public function __construct($filter = null, $id1 = null, $id2 = null, $operation = null, \ArrayType\ArrayOf_xsd_string $text = null)
    {
        $this
            ->setFilter($filter)
            ->setId1($id1)
            ->setId2($id2)
            ->setOperation($operation)
            ->setText($text);
    }
    /**
     * Get filter value
     * @return string|null
     */
    public function getFilter()
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param string $filter
     * @return \StructType\ExtSmartLink
     */
    public function setFilter($filter = null)
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filter, true), gettype($filter)), __LINE__);
        }
        $this->filter = $filter;
        return $this;
    }
    /**
     * Get id1 value
     * @return int|null
     */
    public function getId1()
    {
        return $this->id1;
    }
    /**
     * Set id1 value
     * @param int $id1
     * @return \StructType\ExtSmartLink
     */
    public function setId1($id1 = null)
    {
        // validation for constraint: int
        if (!is_null($id1) && !(is_int($id1) || ctype_digit($id1))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id1, true), gettype($id1)), __LINE__);
        }
        $this->id1 = $id1;
        return $this;
    }
    /**
     * Get id2 value
     * @return string|null
     */
    public function getId2()
    {
        return $this->id2;
    }
    /**
     * Set id2 value
     * @param string $id2
     * @return \StructType\ExtSmartLink
     */
    public function setId2($id2 = null)
    {
        // validation for constraint: string
        if (!is_null($id2) && !is_string($id2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id2, true), gettype($id2)), __LINE__);
        }
        $this->id2 = $id2;
        return $this;
    }
    /**
     * Get operation value
     * @return string|null
     */
    public function getOperation()
    {
        return $this->operation;
    }
    /**
     * Set operation value
     * @param string $operation
     * @return \StructType\ExtSmartLink
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operation, true), gettype($operation)), __LINE__);
        }
        $this->operation = $operation;
        return $this;
    }
    /**
     * Get text value
     * @return \ArrayType\ArrayOf_xsd_string|null
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param \ArrayType\ArrayOf_xsd_string $text
     * @return \StructType\ExtSmartLink
     */
    public function setText(\ArrayType\ArrayOf_xsd_string $text = null)
    {
        $this->text = $text;
        return $this;
    }
}
