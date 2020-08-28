<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtLocationSystem StructType
 * @subpackage Structs
 */
class ExtLocationSystem extends AbstractStructBase
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
     * @var \ArrayType\ArrayOfExtLocationItem
     */
    public $items;
    /**
     * The itemsLocationMimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $itemsLocationMimeDataName;
    /**
     * The order
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $order;
    /**
     * The side
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $side;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The systemLocationMimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $systemLocationMimeDataName;
    /**
     * The locationId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $locationId;
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
     * The searchedCompName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $searchedCompName;
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
     * Constructor method for ExtLocationSystem
     * @uses ExtLocationSystem::setDescription()
     * @uses ExtLocationSystem::setId()
     * @uses ExtLocationSystem::setItems()
     * @uses ExtLocationSystem::setItemsLocationMimeDataName()
     * @uses ExtLocationSystem::setOrder()
     * @uses ExtLocationSystem::setSide()
     * @uses ExtLocationSystem::setStatus()
     * @uses ExtLocationSystem::setSystemLocationMimeDataName()
     * @uses ExtLocationSystem::setLocationId()
     * @uses ExtLocationSystem::setOtherSystemLocationIds()
     * @uses ExtLocationSystem::setRemarks()
     * @uses ExtLocationSystem::setSearchedCompName()
     * @uses ExtLocationSystem::setSystemDetailImage()
     * @uses ExtLocationSystem::setSystemPositionImage()
     * @param string $description
     * @param int $id
     * @param \ArrayType\ArrayOfExtLocationItem $items
     * @param string $itemsLocationMimeDataName
     * @param int $order
     * @param int $side
     * @param \StructType\ExtStatus $status
     * @param string $systemLocationMimeDataName
     * @param string $locationId
     * @param \ArrayType\ArrayOf_xsd_string $otherSystemLocationIds
     * @param \ArrayType\ArrayOf_xsd_string $remarks
     * @param string $searchedCompName
     * @param \StructType\LocationImage $systemDetailImage
     * @param \StructType\LocationImage $systemPositionImage
     */
    public function __construct($description = null, $id = null, \ArrayType\ArrayOfExtLocationItem $items = null, $itemsLocationMimeDataName = null, $order = null, $side = null, \StructType\ExtStatus $status = null, $systemLocationMimeDataName = null, $locationId = null, \ArrayType\ArrayOf_xsd_string $otherSystemLocationIds = null, \ArrayType\ArrayOf_xsd_string $remarks = null, $searchedCompName = null, \StructType\LocationImage $systemDetailImage = null, \StructType\LocationImage $systemPositionImage = null)
    {
        $this
            ->setDescription($description)
            ->setId($id)
            ->setItems($items)
            ->setItemsLocationMimeDataName($itemsLocationMimeDataName)
            ->setOrder($order)
            ->setSide($side)
            ->setStatus($status)
            ->setSystemLocationMimeDataName($systemLocationMimeDataName)
            ->setLocationId($locationId)
            ->setOtherSystemLocationIds($otherSystemLocationIds)
            ->setRemarks($remarks)
            ->setSearchedCompName($searchedCompName)
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
     * @return \StructType\ExtLocationSystem
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
     * @return \StructType\ExtLocationSystem
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
     * @return \ArrayType\ArrayOfExtLocationItem|null
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * Set items value
     * @param \ArrayType\ArrayOfExtLocationItem $items
     * @return \StructType\ExtLocationSystem
     */
    public function setItems(\ArrayType\ArrayOfExtLocationItem $items = null)
    {
        $this->items = $items;
        return $this;
    }
    /**
     * Get itemsLocationMimeDataName value
     * @return string|null
     */
    public function getItemsLocationMimeDataName()
    {
        return $this->itemsLocationMimeDataName;
    }
    /**
     * Set itemsLocationMimeDataName value
     * @param string $itemsLocationMimeDataName
     * @return \StructType\ExtLocationSystem
     */
    public function setItemsLocationMimeDataName($itemsLocationMimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($itemsLocationMimeDataName) && !is_string($itemsLocationMimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemsLocationMimeDataName, true), gettype($itemsLocationMimeDataName)), __LINE__);
        }
        $this->itemsLocationMimeDataName = $itemsLocationMimeDataName;
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
     * @return \StructType\ExtLocationSystem
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
     * @return \StructType\ExtLocationSystem
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
     * @return \StructType\ExtLocationSystem
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get systemLocationMimeDataName value
     * @return string|null
     */
    public function getSystemLocationMimeDataName()
    {
        return $this->systemLocationMimeDataName;
    }
    /**
     * Set systemLocationMimeDataName value
     * @param string $systemLocationMimeDataName
     * @return \StructType\ExtLocationSystem
     */
    public function setSystemLocationMimeDataName($systemLocationMimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($systemLocationMimeDataName) && !is_string($systemLocationMimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemLocationMimeDataName, true), gettype($systemLocationMimeDataName)), __LINE__);
        }
        $this->systemLocationMimeDataName = $systemLocationMimeDataName;
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
     * @return \StructType\ExtLocationSystem
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
     * @return \StructType\ExtLocationSystem
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
     * @return \StructType\ExtLocationSystem
     */
    public function setRemarks(\ArrayType\ArrayOf_xsd_string $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }
    /**
     * Get searchedCompName value
     * @return string|null
     */
    public function getSearchedCompName()
    {
        return $this->searchedCompName;
    }
    /**
     * Set searchedCompName value
     * @param string $searchedCompName
     * @return \StructType\ExtLocationSystem
     */
    public function setSearchedCompName($searchedCompName = null)
    {
        // validation for constraint: string
        if (!is_null($searchedCompName) && !is_string($searchedCompName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchedCompName, true), gettype($searchedCompName)), __LINE__);
        }
        $this->searchedCompName = $searchedCompName;
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
     * @return \StructType\ExtLocationSystem
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
     * @return \StructType\ExtLocationSystem
     */
    public function setSystemPositionImage(\StructType\LocationImage $systemPositionImage = null)
    {
        $this->systemPositionImage = $systemPositionImage;
        return $this;
    }
}
