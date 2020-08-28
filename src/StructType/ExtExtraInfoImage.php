<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtExtraInfoImage StructType
 * @subpackage Structs
 */
class ExtExtraInfoImage extends AbstractStructBase
{
    /**
     * The descriptions
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtExtraInfoText
     */
    public $descriptions;
    /**
     * The imageURLs
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_string
     */
    public $imageURLs;
    /**
     * The referenceText
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $referenceText;
    /**
     * Constructor method for ExtExtraInfoImage
     * @uses ExtExtraInfoImage::setDescriptions()
     * @uses ExtExtraInfoImage::setImageURLs()
     * @uses ExtExtraInfoImage::setReferenceText()
     * @param \ArrayType\ArrayOfExtExtraInfoText $descriptions
     * @param \ArrayType\ArrayOf_xsd_string $imageURLs
     * @param string $referenceText
     */
    public function __construct(\ArrayType\ArrayOfExtExtraInfoText $descriptions = null, \ArrayType\ArrayOf_xsd_string $imageURLs = null, $referenceText = null)
    {
        $this
            ->setDescriptions($descriptions)
            ->setImageURLs($imageURLs)
            ->setReferenceText($referenceText);
    }
    /**
     * Get descriptions value
     * @return \ArrayType\ArrayOfExtExtraInfoText|null
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }
    /**
     * Set descriptions value
     * @param \ArrayType\ArrayOfExtExtraInfoText $descriptions
     * @return \StructType\ExtExtraInfoImage
     */
    public function setDescriptions(\ArrayType\ArrayOfExtExtraInfoText $descriptions = null)
    {
        $this->descriptions = $descriptions;
        return $this;
    }
    /**
     * Get imageURLs value
     * @return \ArrayType\ArrayOf_xsd_string|null
     */
    public function getImageURLs()
    {
        return $this->imageURLs;
    }
    /**
     * Set imageURLs value
     * @param \ArrayType\ArrayOf_xsd_string $imageURLs
     * @return \StructType\ExtExtraInfoImage
     */
    public function setImageURLs(\ArrayType\ArrayOf_xsd_string $imageURLs = null)
    {
        $this->imageURLs = $imageURLs;
        return $this;
    }
    /**
     * Get referenceText value
     * @return string|null
     */
    public function getReferenceText()
    {
        return $this->referenceText;
    }
    /**
     * Set referenceText value
     * @param string $referenceText
     * @return \StructType\ExtExtraInfoImage
     */
    public function setReferenceText($referenceText = null)
    {
        // validation for constraint: string
        if (!is_null($referenceText) && !is_string($referenceText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceText, true), gettype($referenceText)), __LINE__);
        }
        $this->referenceText = $referenceText;
        return $this;
    }
}
