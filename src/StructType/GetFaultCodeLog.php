<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getFaultCodeLog StructType
 * @subpackage Structs
 */
class GetFaultCodeLog extends AbstractStructBase
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
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $systemTypeIds;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * Constructor method for getFaultCodeLog
     * @uses GetFaultCodeLog::setVrid()
     * @uses GetFaultCodeLog::setTypeId()
     * @uses GetFaultCodeLog::setSystemTypeIds()
     * @uses GetFaultCodeLog::setLanguage()
     * @param string $vrid
     * @param int $typeId
     * @param int[] $systemTypeIds
     * @param string $language
     */
    public function __construct($vrid = null, $typeId = null, array $systemTypeIds = array(), $language = null)
    {
        $this
            ->setVrid($vrid)
            ->setTypeId($typeId)
            ->setSystemTypeIds($systemTypeIds)
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
     * @return \StructType\GetFaultCodeLog
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
     * @return \StructType\GetFaultCodeLog
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
     * @return int[]|null
     */
    public function getSystemTypeIds()
    {
        return $this->systemTypeIds;
    }
    /**
     * This method is responsible for validating the values passed to the setSystemTypeIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSystemTypeIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSystemTypeIdsForArrayConstraintsFromSetSystemTypeIds(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFaultCodeLogSystemTypeIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($getFaultCodeLogSystemTypeIdsItem) || ctype_digit($getFaultCodeLogSystemTypeIdsItem))) {
                $invalidValues[] = is_object($getFaultCodeLogSystemTypeIdsItem) ? get_class($getFaultCodeLogSystemTypeIdsItem) : sprintf('%s(%s)', gettype($getFaultCodeLogSystemTypeIdsItem), var_export($getFaultCodeLogSystemTypeIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The systemTypeIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set systemTypeIds value
     * @throws \InvalidArgumentException
     * @param int[] $systemTypeIds
     * @return \StructType\GetFaultCodeLog
     */
    public function setSystemTypeIds(array $systemTypeIds = array())
    {
        // validation for constraint: array
        if ('' !== ($systemTypeIdsArrayErrorMessage = self::validateSystemTypeIdsForArrayConstraintsFromSetSystemTypeIds($systemTypeIds))) {
            throw new \InvalidArgumentException($systemTypeIdsArrayErrorMessage, __LINE__);
        }
        $this->systemTypeIds = $systemTypeIds;
        return $this;
    }
    /**
     * Add item to systemTypeIds value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\GetFaultCodeLog
     */
    public function addToSystemTypeIds($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The systemTypeIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->systemTypeIds[] = $item;
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
     * @return \StructType\GetFaultCodeLog
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
