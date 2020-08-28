<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeNodesForManyGenarts StructType
 * @subpackage Structs
 */
class GetRepairtimeNodesForManyGenarts extends AbstractStructBase
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
     * The repairtimeTypeId
     * @var int
     */
    public $repairtimeTypeId;
    /**
     * The genArtNumbers
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $genArtNumbers;
    /**
     * Constructor method for getRepairtimeNodesForManyGenarts
     * @uses GetRepairtimeNodesForManyGenarts::setVrid()
     * @uses GetRepairtimeNodesForManyGenarts::setDescriptionLanguage()
     * @uses GetRepairtimeNodesForManyGenarts::setRepairtimeTypeId()
     * @uses GetRepairtimeNodesForManyGenarts::setGenArtNumbers()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $repairtimeTypeId
     * @param int[] $genArtNumbers
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $repairtimeTypeId = null, array $genArtNumbers = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setRepairtimeTypeId($repairtimeTypeId)
            ->setGenArtNumbers($genArtNumbers);
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
     * @return \StructType\GetRepairtimeNodesForManyGenarts
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
     * @return \StructType\GetRepairtimeNodesForManyGenarts
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
     * Get repairtimeTypeId value
     * @return int|null
     */
    public function getRepairtimeTypeId()
    {
        return $this->repairtimeTypeId;
    }
    /**
     * Set repairtimeTypeId value
     * @param int $repairtimeTypeId
     * @return \StructType\GetRepairtimeNodesForManyGenarts
     */
    public function setRepairtimeTypeId($repairtimeTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($repairtimeTypeId) && !(is_int($repairtimeTypeId) || ctype_digit($repairtimeTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repairtimeTypeId, true), gettype($repairtimeTypeId)), __LINE__);
        }
        $this->repairtimeTypeId = $repairtimeTypeId;
        return $this;
    }
    /**
     * Get genArtNumbers value
     * @return int[]|null
     */
    public function getGenArtNumbers()
    {
        return $this->genArtNumbers;
    }
    /**
     * This method is responsible for validating the values passed to the setGenArtNumbers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGenArtNumbers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGenArtNumbersForArrayConstraintsFromSetGenArtNumbers(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getRepairtimeNodesForManyGenartsGenArtNumbersItem) {
            // validation for constraint: itemType
            if (!(is_int($getRepairtimeNodesForManyGenartsGenArtNumbersItem) || ctype_digit($getRepairtimeNodesForManyGenartsGenArtNumbersItem))) {
                $invalidValues[] = is_object($getRepairtimeNodesForManyGenartsGenArtNumbersItem) ? get_class($getRepairtimeNodesForManyGenartsGenArtNumbersItem) : sprintf('%s(%s)', gettype($getRepairtimeNodesForManyGenartsGenArtNumbersItem), var_export($getRepairtimeNodesForManyGenartsGenArtNumbersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The genArtNumbers property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set genArtNumbers value
     * @throws \InvalidArgumentException
     * @param int[] $genArtNumbers
     * @return \StructType\GetRepairtimeNodesForManyGenarts
     */
    public function setGenArtNumbers(array $genArtNumbers = array())
    {
        // validation for constraint: array
        if ('' !== ($genArtNumbersArrayErrorMessage = self::validateGenArtNumbersForArrayConstraintsFromSetGenArtNumbers($genArtNumbers))) {
            throw new \InvalidArgumentException($genArtNumbersArrayErrorMessage, __LINE__);
        }
        $this->genArtNumbers = $genArtNumbers;
        return $this;
    }
    /**
     * Add item to genArtNumbers value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\GetRepairtimeNodesForManyGenarts
     */
    public function addToGenArtNumbers($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The genArtNumbers property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->genArtNumbers[] = $item;
        return $this;
    }
}
