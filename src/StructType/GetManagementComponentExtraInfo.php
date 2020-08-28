<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getManagementComponentExtraInfo StructType
 * @subpackage Structs
 */
class GetManagementComponentExtraInfo extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The descriptionLanguage
     * @var string
     */
    public $descriptionLanguage;
    /**
     * The groupId
     * @var string
     */
    public $groupId;
    /**
     * Constructor method for getManagementComponentExtraInfo
     * @uses GetManagementComponentExtraInfo::setVrid()
     * @uses GetManagementComponentExtraInfo::setDescriptionLanguage()
     * @uses GetManagementComponentExtraInfo::setGroupId()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param string $groupId
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $groupId = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setGroupId($groupId);
    }
    /**
     * Get vrid value
     * @return string|null
     */
    public function getVrid()
    {
        return $this->vrid;
    }
    /**
     * Set vrid value
     * @param string $vrid
     * @return \StructType\GetManagementComponentExtraInfo
     */
    public function setVrid($vrid = null)
    {
        // validation for constraint: string
        if (!is_null($vrid) && !is_string($vrid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vrid, true), gettype($vrid)), __LINE__);
        }
        $this->vrid = $vrid;
        return $this;
    }
    /**
     * Get descriptionLanguage value
     * @return string|null
     */
    public function getDescriptionLanguage()
    {
        return $this->descriptionLanguage;
    }
    /**
     * Set descriptionLanguage value
     * @param string $descriptionLanguage
     * @return \StructType\GetManagementComponentExtraInfo
     */
    public function setDescriptionLanguage($descriptionLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionLanguage) && !is_string($descriptionLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptionLanguage, true), gettype($descriptionLanguage)), __LINE__);
        }
        $this->descriptionLanguage = $descriptionLanguage;
        return $this;
    }
    /**
     * Get groupId value
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
    /**
     * Set groupId value
     * @param string $groupId
     * @return \StructType\GetManagementComponentExtraInfo
     */
    public function setGroupId($groupId = null)
    {
        // validation for constraint: string
        if (!is_null($groupId) && !is_string($groupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupId, true), gettype($groupId)), __LINE__);
        }
        $this->groupId = $groupId;
        return $this;
    }
}
