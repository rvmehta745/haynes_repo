<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtDiagnosis StructType
 * @subpackage Structs
 */
class ExtDiagnosis extends AbstractStructBase
{
    /**
     * The components
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtComponent
     */
    public $components;
    /**
     * The sentence
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sentence;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtDiagnosis
     * @uses ExtDiagnosis::setComponents()
     * @uses ExtDiagnosis::setSentence()
     * @uses ExtDiagnosis::setStatus()
     * @param \ArrayType\ArrayOfExtComponent $components
     * @param string $sentence
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOfExtComponent $components = null, $sentence = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setComponents($components)
            ->setSentence($sentence)
            ->setStatus($status);
    }
    /**
     * Get components value
     * @return \ArrayType\ArrayOfExtComponent|null
     */
    public function getComponents()
    {
        return $this->components;
    }
    /**
     * Set components value
     * @param \ArrayType\ArrayOfExtComponent $components
     * @return \StructType\ExtDiagnosis
     */
    public function setComponents(\ArrayType\ArrayOfExtComponent $components = null)
    {
        $this->components = $components;
        return $this;
    }
    /**
     * Get sentence value
     * @return string|null
     */
    public function getSentence()
    {
        return $this->sentence;
    }
    /**
     * Set sentence value
     * @param string $sentence
     * @return \StructType\ExtDiagnosis
     */
    public function setSentence($sentence = null)
    {
        // validation for constraint: string
        if (!is_null($sentence) && !is_string($sentence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sentence, true), gettype($sentence)), __LINE__);
        }
        $this->sentence = $sentence;
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
     * @return \StructType\ExtDiagnosis
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
