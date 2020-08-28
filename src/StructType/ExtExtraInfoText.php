<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtExtraInfoText StructType
 * @subpackage Structs
 */
class ExtExtraInfoText extends AbstractStructBase
{
    /**
     * The textParts
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtExtraInfoTextPart
     */
    public $textParts;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * Constructor method for ExtExtraInfoText
     * @uses ExtExtraInfoText::setTextParts()
     * @uses ExtExtraInfoText::setType()
     * @param \ArrayType\ArrayOfExtExtraInfoTextPart $textParts
     * @param string $type
     */
    public function __construct(\ArrayType\ArrayOfExtExtraInfoTextPart $textParts = null, $type = null)
    {
        $this
            ->setTextParts($textParts)
            ->setType($type);
    }
    /**
     * Get textParts value
     * @return \ArrayType\ArrayOfExtExtraInfoTextPart|null
     */
    public function getTextParts()
    {
        return $this->textParts;
    }
    /**
     * Set textParts value
     * @param \ArrayType\ArrayOfExtExtraInfoTextPart $textParts
     * @return \StructType\ExtExtraInfoText
     */
    public function setTextParts(\ArrayType\ArrayOfExtExtraInfoTextPart $textParts = null)
    {
        $this->textParts = $textParts;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \StructType\ExtExtraInfoText
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
