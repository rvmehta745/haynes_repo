<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaultCode2 StructType
 * @subpackage Structs
 */
class FaultCode2 extends AbstractStructBase
{
    /**
     * The ct_text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ct_text;
    /**
     * The diagnosticComponents
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_DiagnosticComponent
     */
    public $diagnosticComponents;
    /**
     * The fc_code
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fc_code;
    /**
     * The fc_code2
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fc_code2;
    /**
     * The fc_fault_code_system_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $fc_fault_code_system_id;
    /**
     * The fd_component_name_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $fd_component_name_id;
    /**
     * The fd_id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $fd_id;
    /**
     * The fd_plausible
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $fd_plausible;
    /**
     * The fd_si_number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $fd_si_number;
    /**
     * The ft_text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ft_text;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * Constructor method for FaultCode2
     * @uses FaultCode2::setCt_text()
     * @uses FaultCode2::setDiagnosticComponents()
     * @uses FaultCode2::setFc_code()
     * @uses FaultCode2::setFc_code2()
     * @uses FaultCode2::setFc_fault_code_system_id()
     * @uses FaultCode2::setFd_component_name_id()
     * @uses FaultCode2::setFd_id()
     * @uses FaultCode2::setFd_plausible()
     * @uses FaultCode2::setFd_si_number()
     * @uses FaultCode2::setFt_text()
     * @uses FaultCode2::setId()
     * @param string $ct_text
     * @param \ArrayType\ArrayOf_tns2_DiagnosticComponent $diagnosticComponents
     * @param string $fc_code
     * @param string $fc_code2
     * @param int $fc_fault_code_system_id
     * @param int $fd_component_name_id
     * @param int $fd_id
     * @param bool $fd_plausible
     * @param int $fd_si_number
     * @param string $ft_text
     * @param int $id
     */
    public function __construct($ct_text = null, \ArrayType\ArrayOf_tns2_DiagnosticComponent $diagnosticComponents = null, $fc_code = null, $fc_code2 = null, $fc_fault_code_system_id = null, $fd_component_name_id = null, $fd_id = null, $fd_plausible = null, $fd_si_number = null, $ft_text = null, $id = null)
    {
        $this
            ->setCt_text($ct_text)
            ->setDiagnosticComponents($diagnosticComponents)
            ->setFc_code($fc_code)
            ->setFc_code2($fc_code2)
            ->setFc_fault_code_system_id($fc_fault_code_system_id)
            ->setFd_component_name_id($fd_component_name_id)
            ->setFd_id($fd_id)
            ->setFd_plausible($fd_plausible)
            ->setFd_si_number($fd_si_number)
            ->setFt_text($ft_text)
            ->setId($id);
    }
    /**
     * Get ct_text value
     * @return string|null
     */
    public function getCt_text()
    {
        return $this->ct_text;
    }
    /**
     * Set ct_text value
     * @param string $ct_text
     * @return \StructType\FaultCode2
     */
    public function setCt_text($ct_text = null)
    {
        // validation for constraint: string
        if (!is_null($ct_text) && !is_string($ct_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ct_text, true), gettype($ct_text)), __LINE__);
        }
        $this->ct_text = $ct_text;
        return $this;
    }
    /**
     * Get diagnosticComponents value
     * @return \ArrayType\ArrayOf_tns2_DiagnosticComponent|null
     */
    public function getDiagnosticComponents()
    {
        return $this->diagnosticComponents;
    }
    /**
     * Set diagnosticComponents value
     * @param \ArrayType\ArrayOf_tns2_DiagnosticComponent $diagnosticComponents
     * @return \StructType\FaultCode2
     */
    public function setDiagnosticComponents(\ArrayType\ArrayOf_tns2_DiagnosticComponent $diagnosticComponents = null)
    {
        $this->diagnosticComponents = $diagnosticComponents;
        return $this;
    }
    /**
     * Get fc_code value
     * @return string|null
     */
    public function getFc_code()
    {
        return $this->fc_code;
    }
    /**
     * Set fc_code value
     * @param string $fc_code
     * @return \StructType\FaultCode2
     */
    public function setFc_code($fc_code = null)
    {
        // validation for constraint: string
        if (!is_null($fc_code) && !is_string($fc_code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fc_code, true), gettype($fc_code)), __LINE__);
        }
        $this->fc_code = $fc_code;
        return $this;
    }
    /**
     * Get fc_code2 value
     * @return string|null
     */
    public function getFc_code2()
    {
        return $this->fc_code2;
    }
    /**
     * Set fc_code2 value
     * @param string $fc_code2
     * @return \StructType\FaultCode2
     */
    public function setFc_code2($fc_code2 = null)
    {
        // validation for constraint: string
        if (!is_null($fc_code2) && !is_string($fc_code2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fc_code2, true), gettype($fc_code2)), __LINE__);
        }
        $this->fc_code2 = $fc_code2;
        return $this;
    }
    /**
     * Get fc_fault_code_system_id value
     * @return int|null
     */
    public function getFc_fault_code_system_id()
    {
        return $this->fc_fault_code_system_id;
    }
    /**
     * Set fc_fault_code_system_id value
     * @param int $fc_fault_code_system_id
     * @return \StructType\FaultCode2
     */
    public function setFc_fault_code_system_id($fc_fault_code_system_id = null)
    {
        // validation for constraint: int
        if (!is_null($fc_fault_code_system_id) && !(is_int($fc_fault_code_system_id) || ctype_digit($fc_fault_code_system_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fc_fault_code_system_id, true), gettype($fc_fault_code_system_id)), __LINE__);
        }
        $this->fc_fault_code_system_id = $fc_fault_code_system_id;
        return $this;
    }
    /**
     * Get fd_component_name_id value
     * @return int|null
     */
    public function getFd_component_name_id()
    {
        return $this->fd_component_name_id;
    }
    /**
     * Set fd_component_name_id value
     * @param int $fd_component_name_id
     * @return \StructType\FaultCode2
     */
    public function setFd_component_name_id($fd_component_name_id = null)
    {
        // validation for constraint: int
        if (!is_null($fd_component_name_id) && !(is_int($fd_component_name_id) || ctype_digit($fd_component_name_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fd_component_name_id, true), gettype($fd_component_name_id)), __LINE__);
        }
        $this->fd_component_name_id = $fd_component_name_id;
        return $this;
    }
    /**
     * Get fd_id value
     * @return int|null
     */
    public function getFd_id()
    {
        return $this->fd_id;
    }
    /**
     * Set fd_id value
     * @param int $fd_id
     * @return \StructType\FaultCode2
     */
    public function setFd_id($fd_id = null)
    {
        // validation for constraint: int
        if (!is_null($fd_id) && !(is_int($fd_id) || ctype_digit($fd_id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fd_id, true), gettype($fd_id)), __LINE__);
        }
        $this->fd_id = $fd_id;
        return $this;
    }
    /**
     * Get fd_plausible value
     * @return bool|null
     */
    public function getFd_plausible()
    {
        return $this->fd_plausible;
    }
    /**
     * Set fd_plausible value
     * @param bool $fd_plausible
     * @return \StructType\FaultCode2
     */
    public function setFd_plausible($fd_plausible = null)
    {
        // validation for constraint: boolean
        if (!is_null($fd_plausible) && !is_bool($fd_plausible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fd_plausible, true), gettype($fd_plausible)), __LINE__);
        }
        $this->fd_plausible = $fd_plausible;
        return $this;
    }
    /**
     * Get fd_si_number value
     * @return int|null
     */
    public function getFd_si_number()
    {
        return $this->fd_si_number;
    }
    /**
     * Set fd_si_number value
     * @param int $fd_si_number
     * @return \StructType\FaultCode2
     */
    public function setFd_si_number($fd_si_number = null)
    {
        // validation for constraint: int
        if (!is_null($fd_si_number) && !(is_int($fd_si_number) || ctype_digit($fd_si_number))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fd_si_number, true), gettype($fd_si_number)), __LINE__);
        }
        $this->fd_si_number = $fd_si_number;
        return $this;
    }
    /**
     * Get ft_text value
     * @return string|null
     */
    public function getFt_text()
    {
        return $this->ft_text;
    }
    /**
     * Set ft_text value
     * @param string $ft_text
     * @return \StructType\FaultCode2
     */
    public function setFt_text($ft_text = null)
    {
        // validation for constraint: string
        if (!is_null($ft_text) && !is_string($ft_text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ft_text, true), gettype($ft_text)), __LINE__);
        }
        $this->ft_text = $ft_text;
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \StructType\FaultCode2
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
}
