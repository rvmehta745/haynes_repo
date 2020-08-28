<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSmartPackFaultCodes StructType
 * @subpackage Structs
 */
class GetSmartPackFaultCodes extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The descriptionLanguage
     * @var string
     */
    public $descriptionLanguage;
    /**
     * The carTypeId
     * @var int
     */
    public $carTypeId;
    /**
     * The faultCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $faultCode;
    /**
     * Constructor method for getSmartPackFaultCodes
     * @uses GetSmartPackFaultCodes::setVrid()
     * @uses GetSmartPackFaultCodes::setDescriptionLanguage()
     * @uses GetSmartPackFaultCodes::setCarTypeId()
     * @uses GetSmartPackFaultCodes::setFaultCode()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param string[] $faultCode
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, array $faultCode = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setFaultCode($faultCode);
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
     * @return \StructType\GetSmartPackFaultCodes
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
     * Get descriptionLanguage value
     * @return string|null
     */
    public function getDescriptionLanguage()
    {
        return $this->descriptionLanguage;
    }
    /**
     * Set descriptionLanguage value
     * @param string $descriptionLanguage
     * @return \StructType\GetSmartPackFaultCodes
     */
    public function setDescriptionLanguage($descriptionLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionLanguage) && !is_string($descriptionLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptionLanguage, true), gettype($descriptionLanguage)), __LINE__);
        }
        $this->descriptionLanguage = $descriptionLanguage;
        return $this;
    }
    /**
     * Get carTypeId value
     * @return int|null
     */
    public function getCarTypeId()
    {
        return $this->carTypeId;
    }
    /**
     * Set carTypeId value
     * @param int $carTypeId
     * @return \StructType\GetSmartPackFaultCodes
     */
    public function setCarTypeId($carTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($carTypeId) && !(is_int($carTypeId) || ctype_digit($carTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($carTypeId, true), gettype($carTypeId)), __LINE__);
        }
        $this->carTypeId = $carTypeId;
        return $this;
    }
    /**
     * Get faultCode value
     * @return string[]|null
     */
    public function getFaultCode()
    {
        return $this->faultCode;
    }
    /**
     * This method is responsible for validating the values passed to the setFaultCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFaultCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFaultCodeForArrayConstraintsFromSetFaultCode(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSmartPackFaultCodesFaultCodeItem) {
            // validation for constraint: itemType
            if (!is_string($getSmartPackFaultCodesFaultCodeItem)) {
                $invalidValues[] = is_object($getSmartPackFaultCodesFaultCodeItem) ? get_class($getSmartPackFaultCodesFaultCodeItem) : sprintf('%s(%s)', gettype($getSmartPackFaultCodesFaultCodeItem), var_export($getSmartPackFaultCodesFaultCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The faultCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set faultCode value
     * @throws \InvalidArgumentException
     * @param string[] $faultCode
     * @return \StructType\GetSmartPackFaultCodes
     */
    public function setFaultCode(array $faultCode = array())
    {
        // validation for constraint: array
        if ('' !== ($faultCodeArrayErrorMessage = self::validateFaultCodeForArrayConstraintsFromSetFaultCode($faultCode))) {
            throw new \InvalidArgumentException($faultCodeArrayErrorMessage, __LINE__);
        }
        $this->faultCode = $faultCode;
        return $this;
    }
    /**
     * Add item to faultCode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetSmartPackFaultCodes
     */
    public function addToFaultCode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The faultCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->faultCode[] = $item;
        return $this;
    }
}
