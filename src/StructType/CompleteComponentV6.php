<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteComponentV6 StructType
 * @subpackage Structs
 */
class CompleteComponentV6 extends AbstractStructBase
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
     * @var \ArrayType\ArrayOf_tns2_WizardV3
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
     * The linkedStories
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_LinkedStoriesV2
     */
    public $linkedStories;
    /**
     * The localWiringImageConcise
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $localWiringImageConcise;
    /**
     * The localWiringImageExtended
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $localWiringImageExtended;
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
     * Constructor method for CompleteComponentV6
     * @uses CompleteComponentV6::setComponentImageId()
     * @uses CompleteComponentV6::setConnectorSideImage()
     * @uses CompleteComponentV6::setDiagnosisSteps()
     * @uses CompleteComponentV6::setEcuSideImage()
     * @uses CompleteComponentV6::setGenericParts()
     * @uses CompleteComponentV6::setHasLocationSystems()
     * @uses CompleteComponentV6::setLinkedStories()
     * @uses CompleteComponentV6::setLocalWiringImageConcise()
     * @uses CompleteComponentV6::setLocalWiringImageExtended()
     * @uses CompleteComponentV6::setPinTable()
     * @uses CompleteComponentV6::setRenderable()
     * @param int $componentImageId
     * @param string $connectorSideImage
     * @param \ArrayType\ArrayOf_tns2_WizardV3 $diagnosisSteps
     * @param string $ecuSideImage
     * @param \ArrayType\ArrayOf_tns2_GenericPart $genericParts
     * @param bool $hasLocationSystems
     * @param \ArrayType\ArrayOf_tns2_LinkedStoriesV2 $linkedStories
     * @param string $localWiringImageConcise
     * @param string $localWiringImageExtended
     * @param \ArrayType\PinsArray $pinTable
     * @param bool $renderable
     */
    public function __construct($componentImageId = null, $connectorSideImage = null, \ArrayType\ArrayOf_tns2_WizardV3 $diagnosisSteps = null, $ecuSideImage = null, \ArrayType\ArrayOf_tns2_GenericPart $genericParts = null, $hasLocationSystems = null, \ArrayType\ArrayOf_tns2_LinkedStoriesV2 $linkedStories = null, $localWiringImageConcise = null, $localWiringImageExtended = null, \ArrayType\PinsArray $pinTable = null, $renderable = null)
    {
        $this
            ->setComponentImageId($componentImageId)
            ->setConnectorSideImage($connectorSideImage)
            ->setDiagnosisSteps($diagnosisSteps)
            ->setEcuSideImage($ecuSideImage)
            ->setGenericParts($genericParts)
            ->setHasLocationSystems($hasLocationSystems)
            ->setLinkedStories($linkedStories)
            ->setLocalWiringImageConcise($localWiringImageConcise)
            ->setLocalWiringImageExtended($localWiringImageExtended)
            ->setPinTable($pinTable)
            ->setRenderable($renderable);
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
     * @return \StructType\CompleteComponentV6
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
     * @return \StructType\CompleteComponentV6
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
     * @return \ArrayType\ArrayOf_tns2_WizardV3|null
     */
    public function getDiagnosisSteps()
    {
        return $this->diagnosisSteps;
    }
    /**
     * Set diagnosisSteps value
     * @param \ArrayType\ArrayOf_tns2_WizardV3 $diagnosisSteps
     * @return \StructType\CompleteComponentV6
     */
    public function setDiagnosisSteps(\ArrayType\ArrayOf_tns2_WizardV3 $diagnosisSteps = null)
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
     * @return \StructType\CompleteComponentV6
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
     * @return \StructType\CompleteComponentV6
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
     * @return \StructType\CompleteComponentV6
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
     * Get linkedStories value
     * @return \ArrayType\ArrayOf_tns2_LinkedStoriesV2|null
     */
    public function getLinkedStories()
    {
        return $this->linkedStories;
    }
    /**
     * Set linkedStories value
     * @param \ArrayType\ArrayOf_tns2_LinkedStoriesV2 $linkedStories
     * @return \StructType\CompleteComponentV6
     */
    public function setLinkedStories(\ArrayType\ArrayOf_tns2_LinkedStoriesV2 $linkedStories = null)
    {
        $this->linkedStories = $linkedStories;
        return $this;
    }
    /**
     * Get localWiringImageConcise value
     * @return string|null
     */
    public function getLocalWiringImageConcise()
    {
        return $this->localWiringImageConcise;
    }
    /**
     * Set localWiringImageConcise value
     * @param string $localWiringImageConcise
     * @return \StructType\CompleteComponentV6
     */
    public function setLocalWiringImageConcise($localWiringImageConcise = null)
    {
        // validation for constraint: string
        if (!is_null($localWiringImageConcise) && !is_string($localWiringImageConcise)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localWiringImageConcise, true), gettype($localWiringImageConcise)), __LINE__);
        }
        $this->localWiringImageConcise = $localWiringImageConcise;
        return $this;
    }
    /**
     * Get localWiringImageExtended value
     * @return string|null
     */
    public function getLocalWiringImageExtended()
    {
        return $this->localWiringImageExtended;
    }
    /**
     * Set localWiringImageExtended value
     * @param string $localWiringImageExtended
     * @return \StructType\CompleteComponentV6
     */
    public function setLocalWiringImageExtended($localWiringImageExtended = null)
    {
        // validation for constraint: string
        if (!is_null($localWiringImageExtended) && !is_string($localWiringImageExtended)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localWiringImageExtended, true), gettype($localWiringImageExtended)), __LINE__);
        }
        $this->localWiringImageExtended = $localWiringImageExtended;
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
     * @return \StructType\CompleteComponentV6
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
     * @return \StructType\CompleteComponentV6
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
}
