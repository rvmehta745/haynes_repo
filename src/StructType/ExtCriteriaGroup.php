<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtCriteriaGroup StructType
 * @subpackage Structs
 */
class ExtCriteriaGroup extends AbstractStructBase
{
    /**
     * The groupCriterias
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtCriteriaGeneral
     */
    public $groupCriterias;
    /**
     * The groupDescription
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $groupDescription;
    /**
     * The groupId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $groupId;
    /**
     * Constructor method for ExtCriteriaGroup
     * @uses ExtCriteriaGroup::setGroupCriterias()
     * @uses ExtCriteriaGroup::setGroupDescription()
     * @uses ExtCriteriaGroup::setGroupId()
     * @param \ArrayType\ArrayOfExtCriteriaGeneral $groupCriterias
     * @param string $groupDescription
     * @param int $groupId
     */
    public function __construct(\ArrayType\ArrayOfExtCriteriaGeneral $groupCriterias = null, $groupDescription = null, $groupId = null)
    {
        $this
            ->setGroupCriterias($groupCriterias)
            ->setGroupDescription($groupDescription)
            ->setGroupId($groupId);
    }
    /**
     * Get groupCriterias value
     * @return \ArrayType\ArrayOfExtCriteriaGeneral|null
     */
    public function getGroupCriterias()
    {
        return $this->groupCriterias;
    }
    /**
     * Set groupCriterias value
     * @param \ArrayType\ArrayOfExtCriteriaGeneral $groupCriterias
     * @return \StructType\ExtCriteriaGroup
     */
    public function setGroupCriterias(\ArrayType\ArrayOfExtCriteriaGeneral $groupCriterias = null)
    {
        $this->groupCriterias = $groupCriterias;
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
     * @return \StructType\ExtCriteriaGroup
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
     * Get groupId value
     * @return int|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
    /**
     * Set groupId value
     * @param int $groupId
     * @return \StructType\ExtCriteriaGroup
     */
    public function setGroupId($groupId = null)
    {
        // validation for constraint: int
        if (!is_null($groupId) && !(is_int($groupId) || ctype_digit($groupId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groupId, true), gettype($groupId)), __LINE__);
        }
        $this->groupId = $groupId;
        return $this;
    }
}
