<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtLocationSubjectsArrayContainer StructType
 * @subpackage Structs
 */
class ExtLocationSubjectsArrayContainer extends AbstractStructBase
{
    /**
     * The locationSubjects
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns1_ExtLocationSubject
     */
    public $locationSubjects;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtLocationSubjectsArrayContainer
     * @uses ExtLocationSubjectsArrayContainer::setLocationSubjects()
     * @uses ExtLocationSubjectsArrayContainer::setStatus()
     * @param \ArrayType\ArrayOf_tns1_ExtLocationSubject $locationSubjects
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOf_tns1_ExtLocationSubject $locationSubjects = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setLocationSubjects($locationSubjects)
            ->setStatus($status);
    }
    /**
     * Get locationSubjects value
     * @return \ArrayType\ArrayOf_tns1_ExtLocationSubject|null
     */
    public function getLocationSubjects()
    {
        return $this->locationSubjects;
    }
    /**
     * Set locationSubjects value
     * @param \ArrayType\ArrayOf_tns1_ExtLocationSubject $locationSubjects
     * @return \StructType\ExtLocationSubjectsArrayContainer
     */
    public function setLocationSubjects(\ArrayType\ArrayOf_tns1_ExtLocationSubject $locationSubjects = null)
    {
        $this->locationSubjects = $locationSubjects;
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
     * @return \StructType\ExtLocationSubjectsArrayContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
