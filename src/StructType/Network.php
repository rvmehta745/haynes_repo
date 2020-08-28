<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Network StructType
 * @subpackage Structs
 */
class Network extends AbstractStructBase
{
    /**
     * The groupName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_string
     */
    public $groupName;
    /**
     * The sgNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $sgNumber;
    /**
     * The signals_in
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_NetworkSignal
     */
    public $signals_in;
    /**
     * The signals_out
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_NetworkSignal
     */
    public $signals_out;
    /**
     * The systemGroupId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_int
     */
    public $systemGroupId;
    /**
     * The systemTypeId
     * @var int
     */
    public $systemTypeId;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $text;
    /**
     * Constructor method for Network
     * @uses Network::setGroupName()
     * @uses Network::setSgNumber()
     * @uses Network::setSignals_in()
     * @uses Network::setSignals_out()
     * @uses Network::setSystemGroupId()
     * @uses Network::setSystemTypeId()
     * @uses Network::setText()
     * @param \ArrayType\ArrayOf_xsd_string $groupName
     * @param int $sgNumber
     * @param \ArrayType\ArrayOf_tns2_NetworkSignal $signals_in
     * @param \ArrayType\ArrayOf_tns2_NetworkSignal $signals_out
     * @param \ArrayType\ArrayOf_xsd_int $systemGroupId
     * @param int $systemTypeId
     * @param string $text
     */
    public function __construct(\ArrayType\ArrayOf_xsd_string $groupName = null, $sgNumber = null, \ArrayType\ArrayOf_tns2_NetworkSignal $signals_in = null, \ArrayType\ArrayOf_tns2_NetworkSignal $signals_out = null, \ArrayType\ArrayOf_xsd_int $systemGroupId = null, $systemTypeId = null, $text = null)
    {
        $this
            ->setGroupName($groupName)
            ->setSgNumber($sgNumber)
            ->setSignals_in($signals_in)
            ->setSignals_out($signals_out)
            ->setSystemGroupId($systemGroupId)
            ->setSystemTypeId($systemTypeId)
            ->setText($text);
    }
    /**
     * Get groupName value
     * @return \ArrayType\ArrayOf_xsd_string|null
     */
    public function getGroupName()
    {
        return $this->groupName;
    }
    /**
     * Set groupName value
     * @param \ArrayType\ArrayOf_xsd_string $groupName
     * @return \StructType\Network
     */
    public function setGroupName(\ArrayType\ArrayOf_xsd_string $groupName = null)
    {
        $this->groupName = $groupName;
        return $this;
    }
    /**
     * Get sgNumber value
     * @return int|null
     */
    public function getSgNumber()
    {
        return $this->sgNumber;
    }
    /**
     * Set sgNumber value
     * @param int $sgNumber
     * @return \StructType\Network
     */
    public function setSgNumber($sgNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sgNumber) && !(is_int($sgNumber) || ctype_digit($sgNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sgNumber, true), gettype($sgNumber)), __LINE__);
        }
        $this->sgNumber = $sgNumber;
        return $this;
    }
    /**
     * Get signals_in value
     * @return \ArrayType\ArrayOf_tns2_NetworkSignal|null
     */
    public function getSignals_in()
    {
        return $this->signals_in;
    }
    /**
     * Set signals_in value
     * @param \ArrayType\ArrayOf_tns2_NetworkSignal $signals_in
     * @return \StructType\Network
     */
    public function setSignals_in(\ArrayType\ArrayOf_tns2_NetworkSignal $signals_in = null)
    {
        $this->signals_in = $signals_in;
        return $this;
    }
    /**
     * Get signals_out value
     * @return \ArrayType\ArrayOf_tns2_NetworkSignal|null
     */
    public function getSignals_out()
    {
        return $this->signals_out;
    }
    /**
     * Set signals_out value
     * @param \ArrayType\ArrayOf_tns2_NetworkSignal $signals_out
     * @return \StructType\Network
     */
    public function setSignals_out(\ArrayType\ArrayOf_tns2_NetworkSignal $signals_out = null)
    {
        $this->signals_out = $signals_out;
        return $this;
    }
    /**
     * Get systemGroupId value
     * @return \ArrayType\ArrayOf_xsd_int|null
     */
    public function getSystemGroupId()
    {
        return $this->systemGroupId;
    }
    /**
     * Set systemGroupId value
     * @param \ArrayType\ArrayOf_xsd_int $systemGroupId
     * @return \StructType\Network
     */
    public function setSystemGroupId(\ArrayType\ArrayOf_xsd_int $systemGroupId = null)
    {
        $this->systemGroupId = $systemGroupId;
        return $this;
    }
    /**
     * Get systemTypeId value
     * @return int|null
     */
    public function getSystemTypeId()
    {
        return $this->systemTypeId;
    }
    /**
     * Set systemTypeId value
     * @param int $systemTypeId
     * @return \StructType\Network
     */
    public function setSystemTypeId($systemTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($systemTypeId) && !(is_int($systemTypeId) || ctype_digit($systemTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($systemTypeId, true), gettype($systemTypeId)), __LINE__);
        }
        $this->systemTypeId = $systemTypeId;
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
     * @return \StructType\Network
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
