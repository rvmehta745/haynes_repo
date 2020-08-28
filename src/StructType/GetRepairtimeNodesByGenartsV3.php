<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRepairtimeNodesByGenartsV3 StructType
 * @subpackage Structs
 */
class GetRepairtimeNodesByGenartsV3 extends AbstractStructBase
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
     * The typeCategory
     * @var string
     */
    public $typeCategory;
    /**
     * The genArtNumbers
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $genArtNumbers;
    /**
     * Constructor method for getRepairtimeNodesByGenartsV3
     * @uses GetRepairtimeNodesByGenartsV3::setVrid()
     * @uses GetRepairtimeNodesByGenartsV3::setDescriptionLanguage()
     * @uses GetRepairtimeNodesByGenartsV3::setRepairtimeTypeId()
     * @uses GetRepairtimeNodesByGenartsV3::setTypeCategory()
     * @uses GetRepairtimeNodesByGenartsV3::setGenArtNumbers()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $repairtimeTypeId
     * @param string $typeCategory
     * @param int[] $genArtNumbers
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $repairtimeTypeId = null, $typeCategory = null, array $genArtNumbers = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setRepairtimeTypeId($repairtimeTypeId)
            ->setTypeCategory($typeCategory)
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
     * @return \StructType\GetRepairtimeNodesByGenartsV3
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
     * @return \StructType\GetRepairtimeNodesByGenartsV3
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
     * @return \StructType\GetRepairtimeNodesByGenartsV3
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
     * Get typeCategory value
     * @return string|null
     */
    public function getTypeCategory()
    {
        return $this->typeCategory;
    }
    /**
     * Set typeCategory value
     * @param string $typeCategory
     * @return \StructType\GetRepairtimeNodesByGenartsV3
     */
    public function setTypeCategory($typeCategory = null)
    {
        // validation for constraint: string
        if (!is_null($typeCategory) && !is_string($typeCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeCategory, true), gettype($typeCategory)), __LINE__);
        }
        $this->typeCategory = $typeCategory;
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
        foreach ($values as $getRepairtimeNodesByGenartsV3GenArtNumbersItem) {
            // validation for constraint: itemType
            if (!(is_int($getRepairtimeNodesByGenartsV3GenArtNumbersItem) || ctype_digit($getRepairtimeNodesByGenartsV3GenArtNumbersItem))) {
                $invalidValues[] = is_object($getRepairtimeNodesByGenartsV3GenArtNumbersItem) ? get_class($getRepairtimeNodesByGenartsV3GenArtNumbersItem) : sprintf('%s(%s)', gettype($getRepairtimeNodesByGenartsV3GenArtNumbersItem), var_export($getRepairtimeNodesByGenartsV3GenArtNumbersItem, true));
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
     * @return \StructType\GetRepairtimeNodesByGenartsV3
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
     * @return \StructType\GetRepairtimeNodesByGenartsV3
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
