<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtStoryV2 StructType
 * @subpackage Structs
 */
class ExtStoryV2 extends AbstractStructBase
{
    /**
     * The imageName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $imageName;
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
     * The storyId
     * @var int
     */
    public $storyId;
    /**
     * Constructor method for ExtStoryV2
     * @uses ExtStoryV2::setImageName()
     * @uses ExtStoryV2::setOrder()
     * @uses ExtStoryV2::setStatus()
     * @uses ExtStoryV2::setStoryId()
     * @param string $imageName
     * @param int $order
     * @param \StructType\ExtStatus $status
     * @param int $storyId
     */
    public function __construct($imageName = null, $order = null, \StructType\ExtStatus $status = null, $storyId = null)
    {
        $this
            ->setImageName($imageName)
            ->setOrder($order)
            ->setStatus($status)
            ->setStoryId($storyId);
    }
    /**
     * Get imageName value
     * @return string|null
     */
    public function getImageName()
    {
        return $this->imageName;
    }
    /**
     * Set imageName value
     * @param string $imageName
     * @return \StructType\ExtStoryV2
     */
    public function setImageName($imageName = null)
    {
        // validation for constraint: string
        if (!is_null($imageName) && !is_string($imageName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageName, true), gettype($imageName)), __LINE__);
        }
        $this->imageName = $imageName;
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
     * @return \StructType\ExtStoryV2
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
     * @return \StructType\ExtStoryV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get storyId value
     * @return int|null
     */
    public function getStoryId()
    {
        return $this->storyId;
    }
    /**
     * Set storyId value
     * @param int $storyId
     * @return \StructType\ExtStoryV2
     */
    public function setStoryId($storyId = null)
    {
        // validation for constraint: int
        if (!is_null($storyId) && !(is_int($storyId) || ctype_digit($storyId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($storyId, true), gettype($storyId)), __LINE__);
        }
        $this->storyId = $storyId;
        return $this;
    }
}
