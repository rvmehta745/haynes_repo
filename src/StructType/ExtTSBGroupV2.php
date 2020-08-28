<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtTSBGroupV2 StructType
 * @subpackage Structs
 */
class ExtTSBGroupV2 extends AbstractStructBase
{
    /**
     * The bulletin
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtTSBDataElementV2
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
     * Constructor method for ExtTSBGroupV2
     * @uses ExtTSBGroupV2::setBulletin()
     * @uses ExtTSBGroupV2::setGroupDescription()
     * @uses ExtTSBGroupV2::setStatus()
     * @param \ArrayType\ArrayOfExtTSBDataElementV2 $bulletin
     * @param string $groupDescription
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOfExtTSBDataElementV2 $bulletin = null, $groupDescription = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setBulletin($bulletin)
            ->setGroupDescription($groupDescription)
            ->setStatus($status);
    }
    /**
     * Get bulletin value
     * @return \ArrayType\ArrayOfExtTSBDataElementV2|null
     */
    public function getBulletin()
    {
        return $this->bulletin;
    }
    /**
     * Set bulletin value
     * @param \ArrayType\ArrayOfExtTSBDataElementV2 $bulletin
     * @return \StructType\ExtTSBGroupV2
     */
    public function setBulletin(\ArrayType\ArrayOfExtTSBDataElementV2 $bulletin = null)
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
     * @return \StructType\ExtTSBGroupV2
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
     * @return \StructType\ExtTSBGroupV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
