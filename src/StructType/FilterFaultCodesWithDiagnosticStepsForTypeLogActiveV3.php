<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3
 * StructType
 * @subpackage Structs
 */
class FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3 extends AbstractStructBase
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
     * The systemTypeIds
     * @var \ArrayType\IntArray
     */
    public $systemTypeIds;
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
     * Constructor method for filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3
     * @uses FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3::setVrid()
     * @uses FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3::setTypeId()
     * @uses FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3::setSystemTypeIds()
     * @uses FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3::setCodesin()
     * @uses FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3::setLanguage()
     * @param string $vrid
     * @param int $typeId
     * @param \ArrayType\IntArray $systemTypeIds
     * @param string[] $codesin
     * @param string $language
     */
    public function __construct($vrid = null, $typeId = null, \ArrayType\IntArray $systemTypeIds = null, array $codesin = array(), $language = null)
    {
        $this
            ->setVrid($vrid)
            ->setTypeId($typeId)
            ->setSystemTypeIds($systemTypeIds)
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
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3
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
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3
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
     * Get systemTypeIds value
     * @return \ArrayType\IntArray|null
     */
    public function getSystemTypeIds()
    {
        return $this->systemTypeIds;
    }
    /**
     * Set systemTypeIds value
     * @param \ArrayType\IntArray $systemTypeIds
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3
     */
    public function setSystemTypeIds(\ArrayType\IntArray $systemTypeIds = null)
    {
        $this->systemTypeIds = $systemTypeIds;
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
        foreach ($values as $filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3CodesinItem) {
            // validation for constraint: itemType
            if (!is_string($filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3CodesinItem)) {
                $invalidValues[] = is_object($filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3CodesinItem) ? get_class($filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3CodesinItem) : sprintf('%s(%s)', gettype($filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3CodesinItem), var_export($filterFaultCodesWithDiagnosticStepsForTypeLogActiveV3CodesinItem, true));
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
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3
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
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3
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
     * @return \StructType\FilterFaultCodesWithDiagnosticStepsForTypeLogActiveV3
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
