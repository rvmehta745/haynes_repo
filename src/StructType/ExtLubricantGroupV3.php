<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtLubricantGroupV3 StructType
 * @subpackage Structs
 */
class ExtLubricantGroupV3 extends AbstractStructBase
{
    /**
     * The groupTypes
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_string
     */
    public $groupTypes;
    /**
     * The lubricantItems
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtLubricantItemV3
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
     * The smartLinks
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtSmartLink
     */
    public $smartLinks;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtLubricantGroupV3
     * @uses ExtLubricantGroupV3::setGroupTypes()
     * @uses ExtLubricantGroupV3::setLubricantItems()
     * @uses ExtLubricantGroupV3::setName()
     * @uses ExtLubricantGroupV3::setOrder()
     * @uses ExtLubricantGroupV3::setSmartLinks()
     * @uses ExtLubricantGroupV3::setStatus()
     * @param \ArrayType\ArrayOf_xsd_string $groupTypes
     * @param \ArrayType\ArrayOfExtLubricantItemV3 $lubricantItems
     * @param string $name
     * @param int $order
     * @param \ArrayType\ArrayOfExtSmartLink $smartLinks
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOf_xsd_string $groupTypes = null, \ArrayType\ArrayOfExtLubricantItemV3 $lubricantItems = null, $name = null, $order = null, \ArrayType\ArrayOfExtSmartLink $smartLinks = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setGroupTypes($groupTypes)
            ->setLubricantItems($lubricantItems)
            ->setName($name)
            ->setOrder($order)
            ->setSmartLinks($smartLinks)
            ->setStatus($status);
    }
    /**
     * Get groupTypes value
     * @return \ArrayType\ArrayOf_xsd_string|null
     */
    public function getGroupTypes()
    {
        return $this->groupTypes;
    }
    /**
     * Set groupTypes value
     * @param \ArrayType\ArrayOf_xsd_string $groupTypes
     * @return \StructType\ExtLubricantGroupV3
     */
    public function setGroupTypes(\ArrayType\ArrayOf_xsd_string $groupTypes = null)
    {
        $this->groupTypes = $groupTypes;
        return $this;
    }
    /**
     * Get lubricantItems value
     * @return \ArrayType\ArrayOfExtLubricantItemV3|null
     */
    public function getLubricantItems()
    {
        return $this->lubricantItems;
    }
    /**
     * Set lubricantItems value
     * @param \ArrayType\ArrayOfExtLubricantItemV3 $lubricantItems
     * @return \StructType\ExtLubricantGroupV3
     */
    public function setLubricantItems(\ArrayType\ArrayOfExtLubricantItemV3 $lubricantItems = null)
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
     * @return \StructType\ExtLubricantGroupV3
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
     * @return \StructType\ExtLubricantGroupV3
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
     * Get smartLinks value
     * @return \ArrayType\ArrayOfExtSmartLink|null
     */
    public function getSmartLinks()
    {
        return $this->smartLinks;
    }
    /**
     * Set smartLinks value
     * @param \ArrayType\ArrayOfExtSmartLink $smartLinks
     * @return \StructType\ExtLubricantGroupV3
     */
    public function setSmartLinks(\ArrayType\ArrayOfExtSmartLink $smartLinks = null)
    {
        $this->smartLinks = $smartLinks;
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
     * @return \StructType\ExtLubricantGroupV3
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
