<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtManagementFaultCode StructType
 * @subpackage Structs
 */
class ExtManagementFaultCode extends AbstractStructBase
{
    /**
     * The codes
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $codes;
    /**
     * The mimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mimeDataName;
    /**
     * The plug
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $plug;
    /**
     * The readout
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $readout;
    /**
     * The reset
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reset;
    /**
     * The signal
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $signal;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtManagementFaultCode
     * @uses ExtManagementFaultCode::setCodes()
     * @uses ExtManagementFaultCode::setMimeDataName()
     * @uses ExtManagementFaultCode::setPlug()
     * @uses ExtManagementFaultCode::setReadout()
     * @uses ExtManagementFaultCode::setReset()
     * @uses ExtManagementFaultCode::setSignal()
     * @uses ExtManagementFaultCode::setStatus()
     * @param string $codes
     * @param string $mimeDataName
     * @param string $plug
     * @param string $readout
     * @param string $reset
     * @param string $signal
     * @param \StructType\ExtStatus $status
     */
    public function __construct($codes = null, $mimeDataName = null, $plug = null, $readout = null, $reset = null, $signal = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setCodes($codes)
            ->setMimeDataName($mimeDataName)
            ->setPlug($plug)
            ->setReadout($readout)
            ->setReset($reset)
            ->setSignal($signal)
            ->setStatus($status);
    }
    /**
     * Get codes value
     * @return string|null
     */
    public function getCodes()
    {
        return $this->codes;
    }
    /**
     * Set codes value
     * @param string $codes
     * @return \StructType\ExtManagementFaultCode
     */
    public function setCodes($codes = null)
    {
        // validation for constraint: string
        if (!is_null($codes) && !is_string($codes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codes, true), gettype($codes)), __LINE__);
        }
        $this->codes = $codes;
        return $this;
    }
    /**
     * Get mimeDataName value
     * @return string|null
     */
    public function getMimeDataName()
    {
        return $this->mimeDataName;
    }
    /**
     * Set mimeDataName value
     * @param string $mimeDataName
     * @return \StructType\ExtManagementFaultCode
     */
    public function setMimeDataName($mimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($mimeDataName) && !is_string($mimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimeDataName, true), gettype($mimeDataName)), __LINE__);
        }
        $this->mimeDataName = $mimeDataName;
        return $this;
    }
    /**
     * Get plug value
     * @return string|null
     */
    public function getPlug()
    {
        return $this->plug;
    }
    /**
     * Set plug value
     * @param string $plug
     * @return \StructType\ExtManagementFaultCode
     */
    public function setPlug($plug = null)
    {
        // validation for constraint: string
        if (!is_null($plug) && !is_string($plug)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plug, true), gettype($plug)), __LINE__);
        }
        $this->plug = $plug;
        return $this;
    }
    /**
     * Get readout value
     * @return string|null
     */
    public function getReadout()
    {
        return $this->readout;
    }
    /**
     * Set readout value
     * @param string $readout
     * @return \StructType\ExtManagementFaultCode
     */
    public function setReadout($readout = null)
    {
        // validation for constraint: string
        if (!is_null($readout) && !is_string($readout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($readout, true), gettype($readout)), __LINE__);
        }
        $this->readout = $readout;
        return $this;
    }
    /**
     * Get reset value
     * @return string|null
     */
    public function getReset()
    {
        return $this->reset;
    }
    /**
     * Set reset value
     * @param string $reset
     * @return \StructType\ExtManagementFaultCode
     */
    public function setReset($reset = null)
    {
        // validation for constraint: string
        if (!is_null($reset) && !is_string($reset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reset, true), gettype($reset)), __LINE__);
        }
        $this->reset = $reset;
        return $this;
    }
    /**
     * Get signal value
     * @return string|null
     */
    public function getSignal()
    {
        return $this->signal;
    }
    /**
     * Set signal value
     * @param string $signal
     * @return \StructType\ExtManagementFaultCode
     */
    public function setSignal($signal = null)
    {
        // validation for constraint: string
        if (!is_null($signal) && !is_string($signal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signal, true), gettype($signal)), __LINE__);
        }
        $this->signal = $signal;
        return $this;
    }
    /**
     * Get status value
     * @return \StructType\ExtStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \StructType\ExtStatus $status
     * @return \StructType\ExtManagementFaultCode
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
