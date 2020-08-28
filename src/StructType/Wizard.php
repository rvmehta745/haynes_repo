<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Wizard StructType
 * @subpackage Structs
 */
class Wizard extends AbstractStructBase
{
    /**
     * The diagnosisSteps
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_DiagnosisStep
     */
    public $diagnosisSteps;
    /**
     * The title
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $title;
    /**
     * Constructor method for Wizard
     * @uses Wizard::setDiagnosisSteps()
     * @uses Wizard::setTitle()
     * @param \ArrayType\ArrayOf_tns2_DiagnosisStep $diagnosisSteps
     * @param string $title
     */
    public function __construct(\ArrayType\ArrayOf_tns2_DiagnosisStep $diagnosisSteps = null, $title = null)
    {
        $this
            ->setDiagnosisSteps($diagnosisSteps)
            ->setTitle($title);
    }
    /**
     * Get diagnosisSteps value
     * @return \ArrayType\ArrayOf_tns2_DiagnosisStep|null
     */
    public function getDiagnosisSteps()
    {
        return $this->diagnosisSteps;
    }
    /**
     * Set diagnosisSteps value
     * @param \ArrayType\ArrayOf_tns2_DiagnosisStep $diagnosisSteps
     * @return \StructType\Wizard
     */
    public function setDiagnosisSteps(\ArrayType\ArrayOf_tns2_DiagnosisStep $diagnosisSteps = null)
    {
        $this->diagnosisSteps = $diagnosisSteps;
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \StructType\Wizard
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
    }
}
