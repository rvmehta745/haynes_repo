<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WizardV2 StructType
 * @subpackage Structs
 */
class WizardV2 extends AbstractStructBase
{
    /**
     * The diagnosisSteps
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_DiagnosisStepV2
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
     * Constructor method for WizardV2
     * @uses WizardV2::setDiagnosisSteps()
     * @uses WizardV2::setTitle()
     * @param \ArrayType\ArrayOf_tns2_DiagnosisStepV2 $diagnosisSteps
     * @param string $title
     */
    public function __construct(\ArrayType\ArrayOf_tns2_DiagnosisStepV2 $diagnosisSteps = null, $title = null)
    {
        $this
            ->setDiagnosisSteps($diagnosisSteps)
            ->setTitle($title);
    }
    /**
     * Get diagnosisSteps value
     * @return \ArrayType\ArrayOf_tns2_DiagnosisStepV2|null
     */
    public function getDiagnosisSteps()
    {
        return $this->diagnosisSteps;
    }
    /**
     * Set diagnosisSteps value
     * @param \ArrayType\ArrayOf_tns2_DiagnosisStepV2 $diagnosisSteps
     * @return \StructType\WizardV2
     */
    public function setDiagnosisSteps(\ArrayType\ArrayOf_tns2_DiagnosisStepV2 $diagnosisSteps = null)
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
     * @return \StructType\WizardV2
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
