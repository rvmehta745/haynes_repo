<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtRepairtimeInfoGroupV3 StructType
 * @subpackage Structs
 */
class ExtRepairtimeInfoGroupV3 extends AbstractStructBase
{
    /**
     * The followUpWorkList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimeInfoV3
     */
    public $followUpWorkList;
    /**
     * The includedList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimeInfoV3
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
     * @var \ArrayType\ArrayOfExtRepairtimeInfoV3
     */
    public $notIncludedList;
    /**
     * The preliminaryList
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRepairtimeInfoV3
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
     * Constructor method for ExtRepairtimeInfoGroupV3
     * @uses ExtRepairtimeInfoGroupV3::setFollowUpWorkList()
     * @uses ExtRepairtimeInfoGroupV3::setIncludedList()
     * @uses ExtRepairtimeInfoGroupV3::setNodeId()
     * @uses ExtRepairtimeInfoGroupV3::setNotIncludedList()
     * @uses ExtRepairtimeInfoGroupV3::setPreliminaryList()
     * @uses ExtRepairtimeInfoGroupV3::setStatus()
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV3 $followUpWorkList
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV3 $includedList
     * @param string $nodeId
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV3 $notIncludedList
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV3 $preliminaryList
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOfExtRepairtimeInfoV3 $followUpWorkList = null, \ArrayType\ArrayOfExtRepairtimeInfoV3 $includedList = null, $nodeId = null, \ArrayType\ArrayOfExtRepairtimeInfoV3 $notIncludedList = null, \ArrayType\ArrayOfExtRepairtimeInfoV3 $preliminaryList = null, \StructType\ExtStatus $status = null)
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
     * @return \ArrayType\ArrayOfExtRepairtimeInfoV3|null
     */
    public function getFollowUpWorkList()
    {
        return $this->followUpWorkList;
    }
    /**
     * Set followUpWorkList value
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV3 $followUpWorkList
     * @return \StructType\ExtRepairtimeInfoGroupV3
     */
    public function setFollowUpWorkList(\ArrayType\ArrayOfExtRepairtimeInfoV3 $followUpWorkList = null)
    {
        $this->followUpWorkList = $followUpWorkList;
        return $this;
    }
    /**
     * Get includedList value
     * @return \ArrayType\ArrayOfExtRepairtimeInfoV3|null
     */
    public function getIncludedList()
    {
        return $this->includedList;
    }
    /**
     * Set includedList value
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV3 $includedList
     * @return \StructType\ExtRepairtimeInfoGroupV3
     */
    public function setIncludedList(\ArrayType\ArrayOfExtRepairtimeInfoV3 $includedList = null)
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
     * @return \StructType\ExtRepairtimeInfoGroupV3
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
     * @return \ArrayType\ArrayOfExtRepairtimeInfoV3|null
     */
    public function getNotIncludedList()
    {
        return $this->notIncludedList;
    }
    /**
     * Set notIncludedList value
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV3 $notIncludedList
     * @return \StructType\ExtRepairtimeInfoGroupV3
     */
    public function setNotIncludedList(\ArrayType\ArrayOfExtRepairtimeInfoV3 $notIncludedList = null)
    {
        $this->notIncludedList = $notIncludedList;
        return $this;
    }
    /**
     * Get preliminaryList value
     * @return \ArrayType\ArrayOfExtRepairtimeInfoV3|null
     */
    public function getPreliminaryList()
    {
        return $this->preliminaryList;
    }
    /**
     * Set preliminaryList value
     * @param \ArrayType\ArrayOfExtRepairtimeInfoV3 $preliminaryList
     * @return \StructType\ExtRepairtimeInfoGroupV3
     */
    public function setPreliminaryList(\ArrayType\ArrayOfExtRepairtimeInfoV3 $preliminaryList = null)
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
     * @return \StructType\ExtRepairtimeInfoGroupV3
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
