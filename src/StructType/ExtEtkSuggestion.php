<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtEtkSuggestion StructType
 * @subpackage Structs
 */
class ExtEtkSuggestion extends AbstractStructBase
{
    /**
     * The eggImplementationCodes
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_xsd_string
     */
    public $eggImplementationCodes;
    /**
     * The eggVarCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $eggVarCode;
    /**
     * Constructor method for ExtEtkSuggestion
     * @uses ExtEtkSuggestion::setEggImplementationCodes()
     * @uses ExtEtkSuggestion::setEggVarCode()
     * @param \ArrayType\ArrayOf_xsd_string $eggImplementationCodes
     * @param string $eggVarCode
     */
    public function __construct(\ArrayType\ArrayOf_xsd_string $eggImplementationCodes = null, $eggVarCode = null)
    {
        $this
            ->setEggImplementationCodes($eggImplementationCodes)
            ->setEggVarCode($eggVarCode);
    }
    /**
     * Get eggImplementationCodes value
     * @return \ArrayType\ArrayOf_xsd_string|null
     */
    public function getEggImplementationCodes()
    {
        return $this->eggImplementationCodes;
    }
    /**
     * Set eggImplementationCodes value
     * @param \ArrayType\ArrayOf_xsd_string $eggImplementationCodes
     * @return \StructType\ExtEtkSuggestion
     */
    public function setEggImplementationCodes(\ArrayType\ArrayOf_xsd_string $eggImplementationCodes = null)
    {
        $this->eggImplementationCodes = $eggImplementationCodes;
        return $this;
    }
    /**
     * Get eggVarCode value
     * @return string|null
     */
    public function getEggVarCode()
    {
        return $this->eggVarCode;
    }
    /**
     * Set eggVarCode value
     * @param string $eggVarCode
     * @return \StructType\ExtEtkSuggestion
     */
    public function setEggVarCode($eggVarCode = null)
    {
        // validation for constraint: string
        if (!is_null($eggVarCode) && !is_string($eggVarCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eggVarCode, true), gettype($eggVarCode)), __LINE__);
        }
        $this->eggVarCode = $eggVarCode;
        return $this;
    }
}
