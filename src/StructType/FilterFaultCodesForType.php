<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterFaultCodesForType StructType
 * @subpackage Structs
 */
class FilterFaultCodesForType extends AbstractStructBase
{
    /**
     * The vrid
     * @var string
     */
    public $vrid;
    /**
     * The typeId
     * @var int
     */
    public $typeId;
    /**
     * The codesin
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $codesin;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for filterFaultCodesForType
     * @uses FilterFaultCodesForType::setVrid()
     * @uses FilterFaultCodesForType::setTypeId()
     * @uses FilterFaultCodesForType::setCodesin()
     * @uses FilterFaultCodesForType::setLanguage()
     * @param string $vrid
     * @param int $typeId
     * @param string[] $codesin
     * @param string $language
     */
    public function __construct($vrid = null, $typeId = null, array $codesin = array(), $language = null)
    {
        $this
            ->setVrid($vrid)
            ->setTypeId($typeId)
            ->setCodesin($codesin)
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
     * @return \StructType\FilterFaultCodesForType
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
     * Get typeId value
     * @return int|null
     */
    public function getTypeId()
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param int $typeId
     * @return \StructType\FilterFaultCodesForType
     */
    public function setTypeId($typeId = null)
    {
        // validation for constraint: int
        if (!is_null($typeId) && !(is_int($typeId) || ctype_digit($typeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        return $this;
    }
    /**
     * Get codesin value
     * @return string[]|null
     */
    public function getCodesin()
    {
        return $this->codesin;
    }
    /**
     * This method is responsible for validating the values passed to the setCodesin method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCodesin method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCodesinForArrayConstraintsFromSetCodesin(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $filterFaultCodesForTypeCodesinItem) {
            // validation for constraint: itemType
            if (!is_string($filterFaultCodesForTypeCodesinItem)) {
                $invalidValues[] = is_object($filterFaultCodesForTypeCodesinItem) ? get_class($filterFaultCodesForTypeCodesinItem) : sprintf('%s(%s)', gettype($filterFaultCodesForTypeCodesinItem), var_export($filterFaultCodesForTypeCodesinItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The codesin property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set codesin value
     * @throws \InvalidArgumentException
     * @param string[] $codesin
     * @return \StructType\FilterFaultCodesForType
     */
    public function setCodesin(array $codesin = array())
    {
        // validation for constraint: array
        if ('' !== ($codesinArrayErrorMessage = self::validateCodesinForArrayConstraintsFromSetCodesin($codesin))) {
            throw new \InvalidArgumentException($codesinArrayErrorMessage, __LINE__);
        }
        $this->codesin = $codesin;
        return $this;
    }
    /**
     * Add item to codesin value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\FilterFaultCodesForType
     */
    public function addToCodesin($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The codesin property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->codesin[] = $item;
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
     * @return \StructType\FilterFaultCodesForType
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
