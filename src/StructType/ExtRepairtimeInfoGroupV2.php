<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtRepairtimeInfoGroupV2 StructType
 * @subpackage Structs
 */
class ExtRepairtimeInfoGroupV2 extends AbstractStructBase
{
    /**
     * The followUpWorkList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimeInfoV2
     */
    public $followUpWorkList;
    /**
     * The includedList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimeInfoV2
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
     * @var \ArrayType\ArrayOfExtRepairtimeInfoV2
     */
    public $notIncludedList;
    /**
     * The preliminaryList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimeInfoV2
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
     * Constructor method for ExtRepairtimeInfoGroupV2
     * @uses ExtRepairtimeInfoGroupV2::setFollowUpWorkList()
     * @uses ExtRepairtimeInfoGroupV2::setIncludedList()
     * @uses ExtRepairtimeInfoGroupV2::setNodeId()
     * @uses ExtRepairtimeInfoGroupV2::setNotIncludedList()
     * @uses ExtRepairtimeInfoGroupV2::setPreliminaryList()
     * @uses ExtRepairtimeInfoGroupV2::setStatus()
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV2 $followUpWorkList
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV2 $includedList
     * @param string $nodeId
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV2 $notIncludedList
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV2 $preliminaryList
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOfExtRepairtimeInfoV2 $followUpWorkList = null, \ArrayType\ArrayOfExtRepairtimeInfoV2 $includedList = null, $nodeId = null, \ArrayType\ArrayOfExtRepairtimeInfoV2 $notIncludedList = null, \ArrayType\ArrayOfExtRepairtimeInfoV2 $preliminaryList = null, \StructType\ExtStatus $status = null)
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
     * @return \ArrayType\ArrayOfExtRepairtimeInfoV2|null
     */
    public function getFollowUpWorkList()
    {
        return $this->followUpWorkList;
    }
    /**
     * Set followUpWorkList value
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV2 $followUpWorkList
     * @return \StructType\ExtRepairtimeInfoGroupV2
     */
    public function setFollowUpWorkList(\ArrayType\ArrayOfExtRepairtimeInfoV2 $followUpWorkList = null)
    {
        $this->followUpWorkList = $followUpWorkList;
        return $this;
    }
    /**
     * Get includedList value
     * @return \ArrayType\ArrayOfExtRepairtimeInfoV2|null
     */
    public function getIncludedList()
    {
        return $this->includedList;
    }
    /**
     * Set includedList value
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV2 $includedList
     * @return \StructType\ExtRepairtimeInfoGroupV2
     */
    public function setIncludedList(\ArrayType\ArrayOfExtRepairtimeInfoV2 $includedList = null)
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
     * @return \StructType\ExtRepairtimeInfoGroupV2
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
     * @return \ArrayType\ArrayOfExtRepairtimeInfoV2|null
     */
    public function getNotIncludedList()
    {
        return $this->notIncludedList;
    }
    /**
     * Set notIncludedList value
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV2 $notIncludedList
     * @return \StructType\ExtRepairtimeInfoGroupV2
     */
    public function setNotIncludedList(\ArrayType\ArrayOfExtRepairtimeInfoV2 $notIncludedList = null)
    {
        $this->notIncludedList = $notIncludedList;
        return $this;
    }
    /**
     * Get preliminaryList value
     * @return \ArrayType\ArrayOfExtRepairtimeInfoV2|null
     */
    public function getPreliminaryList()
    {
        return $this->preliminaryList;
    }
    /**
     * Set preliminaryList value
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV2 $preliminaryList
     * @return \StructType\ExtRepairtimeInfoGroupV2
     */
    public function setPreliminaryList(\ArrayType\ArrayOfExtRepairtimeInfoV2 $preliminaryList = null)
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
     * @return \StructType\ExtRepairtimeInfoGroupV2
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
