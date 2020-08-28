<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDiagnosticStepsForFaultCodeId StructType
 * @subpackage Structs
 */
class GetDiagnosticStepsForFaultCodeId extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The faultcodeId
     * @var int
     */
    public $faultcodeId;
    /**
     * The system_types_ids
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $system_types_ids;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for getDiagnosticStepsForFaultCodeId
     * @uses GetDiagnosticStepsForFaultCodeId::setVrid()
     * @uses GetDiagnosticStepsForFaultCodeId::setFaultcodeId()
     * @uses GetDiagnosticStepsForFaultCodeId::setSystem_types_ids()
     * @uses GetDiagnosticStepsForFaultCodeId::setLanguage()
     * @param string $vrid
     * @param int $faultcodeId
     * @param int[] $system_types_ids
     * @param string $language
     */
    public function __construct($vrid = null, $faultcodeId = null, array $system_types_ids = array(), $language = null)
    {
        $this
            ->setVrid($vrid)
            ->setFaultcodeId($faultcodeId)
            ->setSystem_types_ids($system_types_ids)
            ->setLanguage($language);
    }
    /**
     * Get vrid value
     * @return string|null
     */
    public function getVrid()
    {
        return $this->vrid;
    }
    /**
     * Set vrid value
     * @param string $vrid
     * @return \StructType\GetDiagnosticStepsForFaultCodeId
     */
    public function setVrid($vrid = null)
    {
        // validation for constraint: string
        if (!is_null($vrid) && !is_string($vrid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vrid, true), gettype($vrid)), __LINE__);
        }
        $this->vrid = $vrid;
        return $this;
    }
    /**
     * Get faultcodeId value
     * @return int|null
     */
    public function getFaultcodeId()
    {
        return $this->faultcodeId;
    }
    /**
     * Set faultcodeId value
     * @param int $faultcodeId
     * @return \StructType\GetDiagnosticStepsForFaultCodeId
     */
    public function setFaultcodeId($faultcodeId = null)
    {
        // validation for constraint: int
        if (!is_null($faultcodeId) && !(is_int($faultcodeId) || ctype_digit($faultcodeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($faultcodeId, true), gettype($faultcodeId)), __LINE__);
        }
        $this->faultcodeId = $faultcodeId;
        return $this;
    }
    /**
     * Get system_types_ids value
     * @return int[]|null
     */
    public function getSystem_types_ids()
    {
        return $this->system_types_ids;
    }
    /**
     * This method is responsible for validating the values passed to the setSystem_types_ids method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSystem_types_ids method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSystem_types_idsForArrayConstraintsFromSetSystem_types_ids(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDiagnosticStepsForFaultCodeIdSystem_types_idsItem) {
            // validation for constraint: itemType
            if (!(is_int($getDiagnosticStepsForFaultCodeIdSystem_types_idsItem) || ctype_digit($getDiagnosticStepsForFaultCodeIdSystem_types_idsItem))) {
                $invalidValues[] = is_object($getDiagnosticStepsForFaultCodeIdSystem_types_idsItem) ? get_class($getDiagnosticStepsForFaultCodeIdSystem_types_idsItem) : sprintf('%s(%s)', gettype($getDiagnosticStepsForFaultCodeIdSystem_types_idsItem), var_export($getDiagnosticStepsForFaultCodeIdSystem_types_idsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The system_types_ids property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set system_types_ids value
     * @throws \InvalidArgumentException
     * @param int[] $system_types_ids
     * @return \StructType\GetDiagnosticStepsForFaultCodeId
     */
    public function setSystem_types_ids(array $system_types_ids = array())
    {
        // validation for constraint: array
        if ('' !== ($system_types_idsArrayErrorMessage = self::validateSystem_types_idsForArrayConstraintsFromSetSystem_types_ids($system_types_ids))) {
            throw new \InvalidArgumentException($system_types_idsArrayErrorMessage, __LINE__);
        }
        $this->system_types_ids = $system_types_ids;
        return $this;
    }
    /**
     * Add item to system_types_ids value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\GetDiagnosticStepsForFaultCodeId
     */
    public function addToSystem_types_ids($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The system_types_ids property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->system_types_ids[] = $item;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \StructType\GetDiagnosticStepsForFaultCodeId
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
}
