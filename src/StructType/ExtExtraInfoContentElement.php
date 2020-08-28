<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtExtraInfoContentElement StructType
 * @subpackage Structs
 */
class ExtExtraInfoContentElement extends AbstractStructBase
{
    /**
     * The image
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtExtraInfoImage
     */
    public $image;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtExtraInfoText
     */
    public $text;
    /**
     * Constructor method for ExtExtraInfoContentElement
     * @uses ExtExtraInfoContentElement::setImage()
     * @uses ExtExtraInfoContentElement::setText()
     * @param \StructType\ExtExtraInfoImage $image
     * @param \ArrayType\ArrayOfExtExtraInfoText $text
     */
    public function __construct(\StructType\ExtExtraInfoImage $image = null, \ArrayType\ArrayOfExtExtraInfoText $text = null)
    {
        $this
            ->setImage($image)
            ->setText($text);
    }
    /**
     * Get image value
     * @return \StructType\ExtExtraInfoImage|null
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Set image value
     * @param \StructType\ExtExtraInfoImage $image
     * @return \StructType\ExtExtraInfoContentElement
     */
    public function setImage(\StructType\ExtExtraInfoImage $image = null)
    {
        $this->image = $image;
        return $this;
    }
    /**
     * Get text value
     * @return \ArrayType\ArrayOfExtExtraInfoText|null
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param \ArrayType\ArrayOfExtExtraInfoText $text
     * @return \StructType\ExtExtraInfoContentElement
     */
    public function setText(\ArrayType\ArrayOfExtExtraInfoText $text = null)
    {
        $this->text = $text;
        return $this;
    }
}
