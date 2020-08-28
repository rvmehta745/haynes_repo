<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtRepairtimeInfoGroup StructType
 * @subpackage Structs
 */
class ExtRepairtimeInfoGroup extends AbstractStructBase
{
    /**
     * The followUpWorkList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimeInfo
     */
    public $followUpWorkList;
    /**
     * The includedList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimeInfo
     */
    public $includedList;
    /**
     * The nodeId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nodeId;
    /**
     * The notIncludedList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimeInfo
     */
    public $notIncludedList;
    /**
     * The preliminaryList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimeInfo
     */
    public $preliminaryList;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtRepairtimeInfoGroup
     * @uses ExtRepairtimeInfoGroup::setFollowUpWorkList()
     * @uses ExtRepairtimeInfoGroup::setIncludedList()
     * @uses ExtRepairtimeInfoGroup::setNodeId()
     * @uses ExtRepairtimeInfoGroup::setNotIncludedList()
     * @uses ExtRepairtimeInfoGroup::setPreliminaryList()
     * @uses ExtRepairtimeInfoGroup::setStatus()
     * @param \ArrayType\ArrayOfExtRepairtimeInfo $followUpWorkList
     * @param \ArrayType\ArrayOfExtRepairtimeInfo $includedList
     * @param string $nodeId
     * @param \ArrayType\ArrayOfExtRepairtimeInfo $notIncludedList
     * @param \ArrayType\ArrayOfExtRepairtimeInfo $preliminaryList
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOfExtRepairtimeInfo $followUpWorkList = null, \ArrayType\ArrayOfExtRepairtimeInfo $includedList = null, $nodeId = null, \ArrayType\ArrayOfExtRepairtimeInfo $notIncludedList = null, \ArrayType\ArrayOfExtRepairtimeInfo $preliminaryList = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setFollowUpWorkList($followUpWorkList)
            ->setIncludedList($includedList)
            ->setNodeId($nodeId)
            ->setNotIncludedList($notIncludedList)
            ->setPreliminaryList($preliminaryList)
            ->setStatus($status);
    }
    /**
     * Get followUpWorkList value
     * @return \ArrayType\ArrayOfExtRepairtimeInfo|null
     */
    public function getFollowUpWorkList()
    {
        return $this->followUpWorkList;
    }
    /**
     * Set followUpWorkList value
     * @param \ArrayType\ArrayOfExtRepairtimeInfo $followUpWorkList
     * @return \StructType\ExtRepairtimeInfoGroup
     */
    public function setFollowUpWorkList(\ArrayType\ArrayOfExtRepairtimeInfo $followUpWorkList = null)
    {
        $this->followUpWorkList = $followUpWorkList;
        return $this;
    }
    /**
     * Get includedList value
     * @return \ArrayType\ArrayOfExtRepairtimeInfo|null
     */
    public function getIncludedList()
    {
        return $this->includedList;
    }
    /**
     * Set includedList value
     * @param \ArrayType\ArrayOfExtRepairtimeInfo $includedList
     * @return \StructType\ExtRepairtimeInfoGroup
     */
    public function setIncludedList(\ArrayType\ArrayOfExtRepairtimeInfo $includedList = null)
    {
        $this->includedList = $includedList;
        return $this;
    }
    /**
     * Get nodeId value
     * @return string|null
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }
    /**
     * Set nodeId value
     * @param string $nodeId
     * @return \StructType\ExtRepairtimeInfoGroup
     */
    public function setNodeId($nodeId = null)
    {
        // validation for constraint: string
        if (!is_null($nodeId) && !is_string($nodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nodeId, true), gettype($nodeId)), __LINE__);
        }
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * Get notIncludedList value
     * @return \ArrayType\ArrayOfExtRepairtimeInfo|null
     */
    public function getNotIncludedList()
    {
        return $this->notIncludedList;
    }
    /**
     * Set notIncludedList value
     * @param \ArrayType\ArrayOfExtRepairtimeInfo $notIncludedList
     * @return \StructType\ExtRepairtimeInfoGroup
     */
    public function setNotIncludedList(\ArrayType\ArrayOfExtRepairtimeInfo $notIncludedList = null)
    {
        $this->notIncludedList = $notIncludedList;
        return $this;
    }
    /**
     * Get preliminaryList value
     * @return \ArrayType\ArrayOfExtRepairtimeInfo|null
     */
    public function getPreliminaryList()
    {
        return $this->preliminaryList;
    }
    /**
     * Set preliminaryList value
     * @param \ArrayType\ArrayOfExtRepairtimeInfo $preliminaryList
     * @return \StructType\ExtRepairtimeInfoGroup
     */
    public function setPreliminaryList(\ArrayType\ArrayOfExtRepairtimeInfo $preliminaryList = null)
    {
        $this->preliminaryList = $preliminaryList;
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
     * @return \StructType\ExtRepairtimeInfoGroup
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
