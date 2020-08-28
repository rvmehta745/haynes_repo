<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtLocationSystemGeneric StructType
 * @subpackage Structs
 */
class ExtLocationSystemGeneric extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The items
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_ExtLocationItem
     */
    public $items;
    /**
     * The locationId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $locationId;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $order;
    /**
     * The otherSystemLocationIds
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_string
     */
    public $otherSystemLocationIds;
    /**
     * The remarks
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_string
     */
    public $remarks;
    /**
     * The side
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $side;
    /**
     * The systemDetailImage
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\LocationImage
     */
    public $systemDetailImage;
    /**
     * The systemPositionImage
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\LocationImage
     */
    public $systemPositionImage;
    /**
     * Constructor method for ExtLocationSystemGeneric
     * @uses ExtLocationSystemGeneric::setDescription()
     * @uses ExtLocationSystemGeneric::setId()
     * @uses ExtLocationSystemGeneric::setItems()
     * @uses ExtLocationSystemGeneric::setLocationId()
     * @uses ExtLocationSystemGeneric::setOrder()
     * @uses ExtLocationSystemGeneric::setOtherSystemLocationIds()
     * @uses ExtLocationSystemGeneric::setRemarks()
     * @uses ExtLocationSystemGeneric::setSide()
     * @uses ExtLocationSystemGeneric::setSystemDetailImage()
     * @uses ExtLocationSystemGeneric::setSystemPositionImage()
     * @param string $description
     * @param int $id
     * @param \ArrayType\ArrayOf_tns2_ExtLocationItem $items
     * @param string $locationId
     * @param int $order
     * @param \ArrayType\ArrayOf_xsd_string $otherSystemLocationIds
     * @param \ArrayType\ArrayOf_xsd_string $remarks
     * @param int $side
     * @param \StructType\LocationImage $systemDetailImage
     * @param \StructType\LocationImage $systemPositionImage
     */
    public function __construct($description = null, $id = null, \ArrayType\ArrayOf_tns2_ExtLocationItem $items = null, $locationId = null, $order = null, \ArrayType\ArrayOf_xsd_string $otherSystemLocationIds = null, \ArrayType\ArrayOf_xsd_string $remarks = null, $side = null, \StructType\LocationImage $systemDetailImage = null, \StructType\LocationImage $systemPositionImage = null)
    {
        $this
            ->setDescription($description)
            ->setId($id)
            ->setItems($items)
            ->setLocationId($locationId)
            ->setOrder($order)
            ->setOtherSystemLocationIds($otherSystemLocationIds)
            ->setRemarks($remarks)
            ->setSide($side)
            ->setSystemDetailImage($systemDetailImage)
            ->setSystemPositionImage($systemPositionImage);
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
     * @return \StructType\ExtLocationSystemGeneric
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
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \StructType\ExtLocationSystemGeneric
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get items value
     * @return \ArrayType\ArrayOf_tns2_ExtLocationItem|null
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * Set items value
     * @param \ArrayType\ArrayOf_tns2_ExtLocationItem $items
     * @return \StructType\ExtLocationSystemGeneric
     */
    public function setItems(\ArrayType\ArrayOf_tns2_ExtLocationItem $items = null)
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Get locationId value
     * @return string|null
     */
    public function getLocationId()
    {
        return $this->locationId;
    }
    /**
     * Set locationId value
     * @param string $locationId
     * @return \StructType\ExtLocationSystemGeneric
     */
    public function setLocationId($locationId = null)
    {
        // validation for constraint: string
        if (!is_null($locationId) && !is_string($locationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationId, true), gettype($locationId)), __LINE__);
        }
        $this->locationId = $locationId;
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
     * @return \StructType\ExtLocationSystemGeneric
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
     * Get otherSystemLocationIds value
     * @return \ArrayType\ArrayOf_xsd_string|null
     */
    public function getOtherSystemLocationIds()
    {
        return $this->otherSystemLocationIds;
    }
    /**
     * Set otherSystemLocationIds value
     * @param \ArrayType\ArrayOf_xsd_string $otherSystemLocationIds
     * @return \StructType\ExtLocationSystemGeneric
     */
    public function setOtherSystemLocationIds(\ArrayType\ArrayOf_xsd_string $otherSystemLocationIds = null)
    {
        $this->otherSystemLocationIds = $otherSystemLocationIds;
        return $this;
    }
    /**
     * Get remarks value
     * @return \ArrayType\ArrayOf_xsd_string|null
     */
    public function getRemarks()
    {
        return $this->remarks;
    }
    /**
     * Set remarks value
     * @param \ArrayType\ArrayOf_xsd_string $remarks
     * @return \StructType\ExtLocationSystemGeneric
     */
    public function setRemarks(\ArrayType\ArrayOf_xsd_string $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * Get side value
     * @return int|null
     */
    public function getSide()
    {
        return $this->side;
    }
    /**
     * Set side value
     * @param int $side
     * @return \StructType\ExtLocationSystemGeneric
     */
    public function setSide($side = null)
    {
        // validation for constraint: int
        if (!is_null($side) && !(is_int($side) || ctype_digit($side))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($side, true), gettype($side)), __LINE__);
        }
        $this->side = $side;
        return $this;
    }
    /**
     * Get systemDetailImage value
     * @return \StructType\LocationImage|null
     */
    public function getSystemDetailImage()
    {
        return $this->systemDetailImage;
    }
    /**
     * Set systemDetailImage value
     * @param \StructType\LocationImage $systemDetailImage
     * @return \StructType\ExtLocationSystemGeneric
     */
    public function setSystemDetailImage(\StructType\LocationImage $systemDetailImage = null)
    {
        $this->systemDetailImage = $systemDetailImage;
        return $this;
    }
    /**
     * Get systemPositionImage value
     * @return \StructType\LocationImage|null
     */
    public function getSystemPositionImage()
    {
        return $this->systemPositionImage;
    }
    /**
     * Set systemPositionImage value
     * @param \StructType\LocationImage $systemPositionImage
     * @return \StructType\ExtLocationSystemGeneric
     */
    public function setSystemPositionImage(\StructType\LocationImage $systemPositionImage = null)
    {
        $this->systemPositionImage = $systemPositionImage;
        return $this;
    }
}
