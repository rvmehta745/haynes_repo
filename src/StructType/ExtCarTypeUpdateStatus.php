<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtCarTypeUpdateStatus StructType
 * @subpackage Structs
 */
class ExtCarTypeUpdateStatus extends AbstractStructBase
{
    /**
     * The carTypeId
     * @var int
     */
    public $carTypeId;
    /**
     * The newSubjects
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_string
     */
    public $newSubjects;
    /**
     * The newSubjectsByGroup
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtMapItem
     */
    public $newSubjectsByGroup;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The updateStatus
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $updateStatus;
    /**
     * Constructor method for ExtCarTypeUpdateStatus
     * @uses ExtCarTypeUpdateStatus::setCarTypeId()
     * @uses ExtCarTypeUpdateStatus::setNewSubjects()
     * @uses ExtCarTypeUpdateStatus::setNewSubjectsByGroup()
     * @uses ExtCarTypeUpdateStatus::setStatus()
     * @uses ExtCarTypeUpdateStatus::setUpdateStatus()
     * @param int $carTypeId
     * @param \ArrayType\ArrayOf_xsd_string $newSubjects
     * @param \ArrayType\ArrayOfExtMapItem $newSubjectsByGroup
     * @param \StructType\ExtStatus $status
     * @param string $updateStatus
     */
    public function __construct($carTypeId = null, \ArrayType\ArrayOf_xsd_string $newSubjects = null, \ArrayType\ArrayOfExtMapItem $newSubjectsByGroup = null, \StructType\ExtStatus $status = null, $updateStatus = null)
    {
        $this
            ->setCarTypeId($carTypeId)
            ->setNewSubjects($newSubjects)
            ->setNewSubjectsByGroup($newSubjectsByGroup)
            ->setStatus($status)
            ->setUpdateStatus($updateStatus);
    }
    /**
     * Get carTypeId value
     * @return int|null
     */
    public function getCarTypeId()
    {
        return $this->carTypeId;
    }
    /**
     * Set carTypeId value
     * @param int $carTypeId
     * @return \StructType\ExtCarTypeUpdateStatus
     */
    public function setCarTypeId($carTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($carTypeId) && !(is_int($carTypeId) || ctype_digit($carTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($carTypeId, true), gettype($carTypeId)), __LINE__);
        }
        $this->carTypeId = $carTypeId;
        return $this;
    }
    /**
     * Get newSubjects value
     * @return \ArrayType\ArrayOf_xsd_string|null
     */
    public function getNewSubjects()
    {
        return $this->newSubjects;
    }
    /**
     * Set newSubjects value
     * @param \ArrayType\ArrayOf_xsd_string $newSubjects
     * @return \StructType\ExtCarTypeUpdateStatus
     */
    public function setNewSubjects(\ArrayType\ArrayOf_xsd_string $newSubjects = null)
    {
        $this->newSubjects = $newSubjects;
        return $this;
    }
    /**
     * Get newSubjectsByGroup value
     * @return \ArrayType\ArrayOfExtMapItem|null
     */
    public function getNewSubjectsByGroup()
    {
        return $this->newSubjectsByGroup;
    }
    /**
     * Set newSubjectsByGroup value
     * @param \ArrayType\ArrayOfExtMapItem $newSubjectsByGroup
     * @return \StructType\ExtCarTypeUpdateStatus
     */
    public function setNewSubjectsByGroup(\ArrayType\ArrayOfExtMapItem $newSubjectsByGroup = null)
    {
        $this->newSubjectsByGroup = $newSubjectsByGroup;
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
     * @return \StructType\ExtCarTypeUpdateStatus
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get updateStatus value
     * @return string|null
     */
    public function getUpdateStatus()
    {
        return $this->updateStatus;
    }
    /**
     * Set updateStatus value
     * @param string $updateStatus
     * @return \StructType\ExtCarTypeUpdateStatus
     */
    public function setUpdateStatus($updateStatus = null)
    {
        // validation for constraint: string
        if (!is_null($updateStatus) && !is_string($updateStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateStatus, true), gettype($updateStatus)), __LINE__);
        }
        $this->updateStatus = $updateStatus;
        return $this;
    }
}
