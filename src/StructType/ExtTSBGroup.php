<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtTSBGroup StructType
 * @subpackage Structs
 */
class ExtTSBGroup extends AbstractStructBase
{
    /**
     * The bulletin
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtTSBDataElement
     */
    public $bulletin;
    /**
     * The groupDescription
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $groupDescription;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtTSBGroup
     * @uses ExtTSBGroup::setBulletin()
     * @uses ExtTSBGroup::setGroupDescription()
     * @uses ExtTSBGroup::setStatus()
     * @param \ArrayType\ArrayOfExtTSBDataElement $bulletin
     * @param string $groupDescription
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOfExtTSBDataElement $bulletin = null, $groupDescription = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setBulletin($bulletin)
            ->setGroupDescription($groupDescription)
            ->setStatus($status);
    }
    /**
     * Get bulletin value
     * @return \ArrayType\ArrayOfExtTSBDataElement|null
     */
    public function getBulletin()
    {
        return $this->bulletin;
    }
    /**
     * Set bulletin value
     * @param \ArrayType\ArrayOfExtTSBDataElement $bulletin
     * @return \StructType\ExtTSBGroup
     */
    public function setBulletin(\ArrayType\ArrayOfExtTSBDataElement $bulletin = null)
    {
        $this->bulletin = $bulletin;
        return $this;
    }
    /**
     * Get groupDescription value
     * @return string|null
     */
    public function getGroupDescription()
    {
        return $this->groupDescription;
    }
    /**
     * Set groupDescription value
     * @param string $groupDescription
     * @return \StructType\ExtTSBGroup
     */
    public function setGroupDescription($groupDescription = null)
    {
        // validation for constraint: string
        if (!is_null($groupDescription) && !is_string($groupDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupDescription, true), gettype($groupDescription)), __LINE__);
        }
        $this->groupDescription = $groupDescription;
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
     * @return \StructType\ExtTSBGroup
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
