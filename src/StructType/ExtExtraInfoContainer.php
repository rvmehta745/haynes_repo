<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtExtraInfoContainer StructType
 * @subpackage Structs
 */
class ExtExtraInfoContainer extends AbstractStructBase
{
    /**
     * The elements
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtExtraInfoContentElement
     */
    public $elements;
    /**
     * The header
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $header;
    /**
     * Constructor method for ExtExtraInfoContainer
     * @uses ExtExtraInfoContainer::setElements()
     * @uses ExtExtraInfoContainer::setHeader()
     * @param \ArrayType\ArrayOfExtExtraInfoContentElement $elements
     * @param string $header
     */
    public function __construct(\ArrayType\ArrayOfExtExtraInfoContentElement $elements = null, $header = null)
    {
        $this
            ->setElements($elements)
            ->setHeader($header);
    }
    /**
     * Get elements value
     * @return \ArrayType\ArrayOfExtExtraInfoContentElement|null
     */
    public function getElements()
    {
        return $this->elements;
    }
    /**
     * Set elements value
     * @param \ArrayType\ArrayOfExtExtraInfoContentElement $elements
     * @return \StructType\ExtExtraInfoContainer
     */
    public function setElements(\ArrayType\ArrayOfExtExtraInfoContentElement $elements = null)
    {
        $this->elements = $elements;
        return $this;
    }
    /**
     * Get header value
     * @return string|null
     */
    public function getHeader()
    {
        return $this->header;
    }
    /**
     * Set header value
     * @param string $header
     * @return \StructType\ExtExtraInfoContainer
     */
    public function setHeader($header = null)
    {
        // validation for constraint: string
        if (!is_null($header) && !is_string($header)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header, true), gettype($header)), __LINE__);
        }
        $this->header = $header;
        return $this;
    }
}
