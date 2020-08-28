<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteComponent StructType
 * @subpackage Structs
 */
class CompleteComponent extends AbstractStructBase
{
    /**
     * The componentImageId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $componentImageId;
    /**
     * The connectorSideImage
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $connectorSideImage;
    /**
     * The diagnosisSteps
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_Wizard
     */
    public $diagnosisSteps;
    /**
     * The ecuSideImage
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ecuSideImage;
    /**
     * The genericParts
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_GenericPart
     */
    public $genericParts;
    /**
     * The hasLocationSystems
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $hasLocationSystems;
    /**
     * The pinTable
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\PinsArray
     */
    public $pinTable;
    /**
     * The renderable
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $renderable;
    /**
     * The subnetXml
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $subnetXml;
    /**
     * Constructor method for CompleteComponent
     * @uses CompleteComponent::setComponentImageId()
     * @uses CompleteComponent::setConnectorSideImage()
     * @uses CompleteComponent::setDiagnosisSteps()
     * @uses CompleteComponent::setEcuSideImage()
     * @uses CompleteComponent::setGenericParts()
     * @uses CompleteComponent::setHasLocationSystems()
     * @uses CompleteComponent::setPinTable()
     * @uses CompleteComponent::setRenderable()
     * @uses CompleteComponent::setSubnetXml()
     * @param int $componentImageId
     * @param string $connectorSideImage
     * @param \ArrayType\ArrayOf_tns2_Wizard $diagnosisSteps
     * @param string $ecuSideImage
     * @param \ArrayType\ArrayOf_tns2_GenericPart $genericParts
     * @param bool $hasLocationSystems
     * @param \ArrayType\PinsArray $pinTable
     * @param bool $renderable
     * @param string $subnetXml
     */
    public function __construct($componentImageId = null, $connectorSideImage = null, \ArrayType\ArrayOf_tns2_Wizard $diagnosisSteps = null, $ecuSideImage = null, \ArrayType\ArrayOf_tns2_GenericPart $genericParts = null, $hasLocationSystems = null, \ArrayType\PinsArray $pinTable = null, $renderable = null, $subnetXml = null)
    {
        $this
            ->setComponentImageId($componentImageId)
            ->setConnectorSideImage($connectorSideImage)
            ->setDiagnosisSteps($diagnosisSteps)
            ->setEcuSideImage($ecuSideImage)
            ->setGenericParts($genericParts)
            ->setHasLocationSystems($hasLocationSystems)
            ->setPinTable($pinTable)
            ->setRenderable($renderable)
            ->setSubnetXml($subnetXml);
    }
    /**
     * Get componentImageId value
     * @return int|null
     */
    public function getComponentImageId()
    {
        return $this->componentImageId;
    }
    /**
     * Set componentImageId value
     * @param int $componentImageId
     * @return \StructType\CompleteComponent
     */
    public function setComponentImageId($componentImageId = null)
    {
        // validation for constraint: int
        if (!is_null($componentImageId) && !(is_int($componentImageId) || ctype_digit($componentImageId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($componentImageId, true), gettype($componentImageId)), __LINE__);
        }
        $this->componentImageId = $componentImageId;
        return $this;
    }
    /**
     * Get connectorSideImage value
     * @return string|null
     */
    public function getConnectorSideImage()
    {
        return $this->connectorSideImage;
    }
    /**
     * Set connectorSideImage value
     * @param string $connectorSideImage
     * @return \StructType\CompleteComponent
     */
    public function setConnectorSideImage($connectorSideImage = null)
    {
        // validation for constraint: string
        if (!is_null($connectorSideImage) && !is_string($connectorSideImage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($connectorSideImage, true), gettype($connectorSideImage)), __LINE__);
        }
        $this->connectorSideImage = $connectorSideImage;
        return $this;
    }
    /**
     * Get diagnosisSteps value
     * @return \ArrayType\ArrayOf_tns2_Wizard|null
     */
    public function getDiagnosisSteps()
    {
        return $this->diagnosisSteps;
    }
    /**
     * Set diagnosisSteps value
     * @param \ArrayType\ArrayOf_tns2_Wizard $diagnosisSteps
     * @return \StructType\CompleteComponent
     */
    public function setDiagnosisSteps(\ArrayType\ArrayOf_tns2_Wizard $diagnosisSteps = null)
    {
        $this->diagnosisSteps = $diagnosisSteps;
        return $this;
    }
    /**
     * Get ecuSideImage value
     * @return string|null
     */
    public function getEcuSideImage()
    {
        return $this->ecuSideImage;
    }
    /**
     * Set ecuSideImage value
     * @param string $ecuSideImage
     * @return \StructType\CompleteComponent
     */
    public function setEcuSideImage($ecuSideImage = null)
    {
        // validation for constraint: string
        if (!is_null($ecuSideImage) && !is_string($ecuSideImage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ecuSideImage, true), gettype($ecuSideImage)), __LINE__);
        }
        $this->ecuSideImage = $ecuSideImage;
        return $this;
    }
    /**
     * Get genericParts value
     * @return \ArrayType\ArrayOf_tns2_GenericPart|null
     */
    public function getGenericParts()
    {
        return $this->genericParts;
    }
    /**
     * Set genericParts value
     * @param \ArrayType\ArrayOf_tns2_GenericPart $genericParts
     * @return \StructType\CompleteComponent
     */
    public function setGenericParts(\ArrayType\ArrayOf_tns2_GenericPart $genericParts = null)
    {
        $this->genericParts = $genericParts;
        return $this;
    }
    /**
     * Get hasLocationSystems value
     * @return bool|null
     */
    public function getHasLocationSystems()
    {
        return $this->hasLocationSystems;
    }
    /**
     * Set hasLocationSystems value
     * @param bool $hasLocationSystems
     * @return \StructType\CompleteComponent
     */
    public function setHasLocationSystems($hasLocationSystems = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasLocationSystems) && !is_bool($hasLocationSystems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasLocationSystems, true), gettype($hasLocationSystems)), __LINE__);
        }
        $this->hasLocationSystems = $hasLocationSystems;
        return $this;
    }
    /**
     * Get pinTable value
     * @return \ArrayType\PinsArray|null
     */
    public function getPinTable()
    {
        return $this->pinTable;
    }
    /**
     * Set pinTable value
     * @param \ArrayType\PinsArray $pinTable
     * @return \StructType\CompleteComponent
     */
    public function setPinTable(\ArrayType\PinsArray $pinTable = null)
    {
        $this->pinTable = $pinTable;
        return $this;
    }
    /**
     * Get renderable value
     * @return bool|null
     */
    public function getRenderable()
    {
        return $this->renderable;
    }
    /**
     * Set renderable value
     * @param bool $renderable
     * @return \StructType\CompleteComponent
     */
    public function setRenderable($renderable = null)
    {
        // validation for constraint: boolean
        if (!is_null($renderable) && !is_bool($renderable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($renderable, true), gettype($renderable)), __LINE__);
        }
        $this->renderable = $renderable;
        return $this;
    }
    /**
     * Get subnetXml value
     * @return string|null
     */
    public function getSubnetXml()
    {
        return $this->subnetXml;
    }
    /**
     * Set subnetXml value
     * @param string $subnetXml
     * @return \StructType\CompleteComponent
     */
    public function setSubnetXml($subnetXml = null)
    {
        // validation for constraint: string
        if (!is_null($subnetXml) && !is_string($subnetXml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subnetXml, true), gettype($subnetXml)), __LINE__);
        }
        $this->subnetXml = $subnetXml;
        return $this;
    }
}
