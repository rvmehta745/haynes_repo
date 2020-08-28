<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtExtraInfoTextPart StructType
 * @subpackage Structs
 */
class ExtExtraInfoTextPart extends AbstractStructBase
{
    /**
     * The style
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $style;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $text;
    /**
     * Constructor method for ExtExtraInfoTextPart
     * @uses ExtExtraInfoTextPart::setStyle()
     * @uses ExtExtraInfoTextPart::setText()
     * @param string $style
     * @param string $text
     */
    public function __construct($style = null, $text = null)
    {
        $this
            ->setStyle($style)
            ->setText($text);
    }
    /**
     * Get style value
     * @return string|null
     */
    public function getStyle()
    {
        return $this->style;
    }
    /**
     * Set style value
     * @param string $style
     * @return \StructType\ExtExtraInfoTextPart
     */
    public function setStyle($style = null)
    {
        // validation for constraint: string
        if (!is_null($style) && !is_string($style)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($style, true), gettype($style)), __LINE__);
        }
        $this->style = $style;
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \StructType\ExtExtraInfoTextPart
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        return $this;
    }
}
