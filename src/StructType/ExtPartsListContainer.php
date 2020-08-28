<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtPartsListContainer StructType
 * @subpackage Structs
 */
class ExtPartsListContainer extends AbstractStructBase
{
    /**
     * The mandatoryAdditionalMaintenaceParts
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtGeneralArticleV2
     */
    public $mandatoryAdditionalMaintenaceParts;
    /**
     * The mandatoryMaintenaceParts
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtGeneralArticleV2
     */
    public $mandatoryMaintenaceParts;
    /**
     * The nonMandatoryAdditionalMaintenaceParts
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtGeneralArticleV2
     */
    public $nonMandatoryAdditionalMaintenaceParts;
    /**
     * The nonMandatoryMaintenaceParts
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtGeneralArticleV2
     */
    public $nonMandatoryMaintenaceParts;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtPartsListContainer
     * @uses ExtPartsListContainer::setMandatoryAdditionalMaintenaceParts()
     * @uses ExtPartsListContainer::setMandatoryMaintenaceParts()
     * @uses ExtPartsListContainer::setNonMandatoryAdditionalMaintenaceParts()
     * @uses ExtPartsListContainer::setNonMandatoryMaintenaceParts()
     * @uses ExtPartsListContainer::setStatus()
     * @param \ArrayType\ArrayOfExtGeneralArticleV2 $mandatoryAdditionalMaintenaceParts
     * @param \ArrayType\ArrayOfExtGeneralArticleV2 $mandatoryMaintenaceParts
     * @param \ArrayType\ArrayOfExtGeneralArticleV2 $nonMandatoryAdditionalMaintenaceParts
     * @param \ArrayType\ArrayOfExtGeneralArticleV2 $nonMandatoryMaintenaceParts
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOfExtGeneralArticleV2 $mandatoryAdditionalMaintenaceParts = null, \ArrayType\ArrayOfExtGeneralArticleV2 $mandatoryMaintenaceParts = null, \ArrayType\ArrayOfExtGeneralArticleV2 $nonMandatoryAdditionalMaintenaceParts = null, \ArrayType\ArrayOfExtGeneralArticleV2 $nonMandatoryMaintenaceParts = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setMandatoryAdditionalMaintenaceParts($mandatoryAdditionalMaintenaceParts)
            ->setMandatoryMaintenaceParts($mandatoryMaintenaceParts)
            ->setNonMandatoryAdditionalMaintenaceParts($nonMandatoryAdditionalMaintenaceParts)
            ->setNonMandatoryMaintenaceParts($nonMandatoryMaintenaceParts)
            ->setStatus($status);
    }
    /**
     * Get mandatoryAdditionalMaintenaceParts value
     * @return \ArrayType\ArrayOfExtGeneralArticleV2|null
     */
    public function getMandatoryAdditionalMaintenaceParts()
    {
        return $this->mandatoryAdditionalMaintenaceParts;
    }
    /**
     * Set mandatoryAdditionalMaintenaceParts value
     * @param \ArrayType\ArrayOfExtGeneralArticleV2 $mandatoryAdditionalMaintenaceParts
     * @return \StructType\ExtPartsListContainer
     */
    public function setMandatoryAdditionalMaintenaceParts(\ArrayType\ArrayOfExtGeneralArticleV2 $mandatoryAdditionalMaintenaceParts = null)
    {
        $this->mandatoryAdditionalMaintenaceParts = $mandatoryAdditionalMaintenaceParts;
        return $this;
    }
    /**
     * Get mandatoryMaintenaceParts value
     * @return \ArrayType\ArrayOfExtGeneralArticleV2|null
     */
    public function getMandatoryMaintenaceParts()
    {
        return $this->mandatoryMaintenaceParts;
    }
    /**
     * Set mandatoryMaintenaceParts value
     * @param \ArrayType\ArrayOfExtGeneralArticleV2 $mandatoryMaintenaceParts
     * @return \StructType\ExtPartsListContainer
     */
    public function setMandatoryMaintenaceParts(\ArrayType\ArrayOfExtGeneralArticleV2 $mandatoryMaintenaceParts = null)
    {
        $this->mandatoryMaintenaceParts = $mandatoryMaintenaceParts;
        return $this;
    }
    /**
     * Get nonMandatoryAdditionalMaintenaceParts value
     * @return \ArrayType\ArrayOfExtGeneralArticleV2|null
     */
    public function getNonMandatoryAdditionalMaintenaceParts()
    {
        return $this->nonMandatoryAdditionalMaintenaceParts;
    }
    /**
     * Set nonMandatoryAdditionalMaintenaceParts value
     * @param \ArrayType\ArrayOfExtGeneralArticleV2 $nonMandatoryAdditionalMaintenaceParts
     * @return \StructType\ExtPartsListContainer
     */
    public function setNonMandatoryAdditionalMaintenaceParts(\ArrayType\ArrayOfExtGeneralArticleV2 $nonMandatoryAdditionalMaintenaceParts = null)
    {
        $this->nonMandatoryAdditionalMaintenaceParts = $nonMandatoryAdditionalMaintenaceParts;
        return $this;
    }
    /**
     * Get nonMandatoryMaintenaceParts value
     * @return \ArrayType\ArrayOfExtGeneralArticleV2|null
     */
    public function getNonMandatoryMaintenaceParts()
    {
        return $this->nonMandatoryMaintenaceParts;
    }
    /**
     * Set nonMandatoryMaintenaceParts value
     * @param \ArrayType\ArrayOfExtGeneralArticleV2 $nonMandatoryMaintenaceParts
     * @return \StructType\ExtPartsListContainer
     */
    public function setNonMandatoryMaintenaceParts(\ArrayType\ArrayOfExtGeneralArticleV2 $nonMandatoryMaintenaceParts = null)
    {
        $this->nonMandatoryMaintenaceParts = $nonMandatoryMaintenaceParts;
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
     * @return \StructType\ExtPartsListContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
