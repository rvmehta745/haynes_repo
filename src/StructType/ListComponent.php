<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListComponent StructType
 * @subpackage Structs
 */
class ListComponent extends AbstractStructBase
{
    /**
     * The si
     * @var int
     */
    public $si;
    /**
     * The st
     * @var int
     */
    public $st;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $text;
    /**
     * Constructor method for ListComponent
     * @uses ListComponent::setSi()
     * @uses ListComponent::setSt()
     * @uses ListComponent::setText()
     * @param int $si
     * @param int $st
     * @param string $text
     */
    public function __construct($si = null, $st = null, $text = null)
    {
        $this
            ->setSi($si)
            ->setSt($st)
            ->setText($text);
    }
    /**
     * Get si value
     * @return int|null
     */
    public function getSi()
    {
        return $this->si;
    }
    /**
     * Set si value
     * @param int $si
     * @return \StructType\ListComponent
     */
    public function setSi($si = null)
    {
        // validation for constraint: int
        if (!is_null($si) && !(is_int($si) || ctype_digit($si))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($si, true), gettype($si)), __LINE__);
        }
        $this->si = $si;
        return $this;
    }
    /**
     * Get st value
     * @return int|null
     */
    public function getSt()
    {
        return $this->st;
    }
    /**
     * Set st value
     * @param int $st
     * @return \StructType\ListComponent
     */
    public function setSt($st = null)
    {
        // validation for constraint: int
        if (!is_null($st) && !(is_int($st) || ctype_digit($st))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($st, true), gettype($st)), __LINE__);
        }
        $this->st = $st;
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
     * @return \StructType\ListComponent
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
