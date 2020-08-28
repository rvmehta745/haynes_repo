<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComponentWs StructType
 * @subpackage Structs
 */
class ComponentWs extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The hyperlink
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $hyperlink;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The pinName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pinName;
    /**
     * The pinNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pinNumber;
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
     * The wireColor1
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $wireColor1;
    /**
     * The wireColor2
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $wireColor2;
    /**
     * Constructor method for ComponentWs
     * @uses ComponentWs::setDescription()
     * @uses ComponentWs::setHyperlink()
     * @uses ComponentWs::setName()
     * @uses ComponentWs::setPinName()
     * @uses ComponentWs::setPinNumber()
     * @uses ComponentWs::setSi()
     * @uses ComponentWs::setSt()
     * @uses ComponentWs::setWireColor1()
     * @uses ComponentWs::setWireColor2()
     * @param string $description
     * @param bool $hyperlink
     * @param string $name
     * @param string $pinName
     * @param string $pinNumber
     * @param int $si
     * @param int $st
     * @param string $wireColor1
     * @param string $wireColor2
     */
    public function __construct($description = null, $hyperlink = null, $name = null, $pinName = null, $pinNumber = null, $si = null, $st = null, $wireColor1 = null, $wireColor2 = null)
    {
        $this
            ->setDescription($description)
            ->setHyperlink($hyperlink)
            ->setName($name)
            ->setPinName($pinName)
            ->setPinNumber($pinNumber)
            ->setSi($si)
            ->setSt($st)
            ->setWireColor1($wireColor1)
            ->setWireColor2($wireColor2);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \StructType\ComponentWs
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get hyperlink value
     * @return bool|null
     */
    public function getHyperlink()
    {
        return $this->hyperlink;
    }
    /**
     * Set hyperlink value
     * @param bool $hyperlink
     * @return \StructType\ComponentWs
     */
    public function setHyperlink($hyperlink = null)
    {
        // validation for constraint: boolean
        if (!is_null($hyperlink) && !is_bool($hyperlink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hyperlink, true), gettype($hyperlink)), __LINE__);
        }
        $this->hyperlink = $hyperlink;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\ComponentWs
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get pinName value
     * @return string|null
     */
    public function getPinName()
    {
        return $this->pinName;
    }
    /**
     * Set pinName value
     * @param string $pinName
     * @return \StructType\ComponentWs
     */
    public function setPinName($pinName = null)
    {
        // validation for constraint: string
        if (!is_null($pinName) && !is_string($pinName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pinName, true), gettype($pinName)), __LINE__);
        }
        $this->pinName = $pinName;
        return $this;
    }
    /**
     * Get pinNumber value
     * @return string|null
     */
    public function getPinNumber()
    {
        return $this->pinNumber;
    }
    /**
     * Set pinNumber value
     * @param string $pinNumber
     * @return \StructType\ComponentWs
     */
    public function setPinNumber($pinNumber = null)
    {
        // validation for constraint: string
        if (!is_null($pinNumber) && !is_string($pinNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pinNumber, true), gettype($pinNumber)), __LINE__);
        }
        $this->pinNumber = $pinNumber;
        return $this;
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
     * @return \StructType\ComponentWs
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
     * @return \StructType\ComponentWs
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
     * Get wireColor1 value
     * @return string|null
     */
    public function getWireColor1()
    {
        return $this->wireColor1;
    }
    /**
     * Set wireColor1 value
     * @param string $wireColor1
     * @return \StructType\ComponentWs
     */
    public function setWireColor1($wireColor1 = null)
    {
        // validation for constraint: string
        if (!is_null($wireColor1) && !is_string($wireColor1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wireColor1, true), gettype($wireColor1)), __LINE__);
        }
        $this->wireColor1 = $wireColor1;
        return $this;
    }
    /**
     * Get wireColor2 value
     * @return string|null
     */
    public function getWireColor2()
    {
        return $this->wireColor2;
    }
    /**
     * Set wireColor2 value
     * @param string $wireColor2
     * @return \StructType\ComponentWs
     */
    public function setWireColor2($wireColor2 = null)
    {
        // validation for constraint: string
        if (!is_null($wireColor2) && !is_string($wireColor2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wireColor2, true), gettype($wireColor2)), __LINE__);
        }
        $this->wireColor2 = $wireColor2;
        return $this;
    }
}
