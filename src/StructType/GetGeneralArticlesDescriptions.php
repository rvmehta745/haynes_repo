<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGeneralArticlesDescriptions StructType
 * @subpackage Structs
 */
class GetGeneralArticlesDescriptions extends AbstractStructBase
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
     * The genart
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $genart;
    /**
     * Constructor method for getGeneralArticlesDescriptions
     * @uses GetGeneralArticlesDescriptions::setVrid()
     * @uses GetGeneralArticlesDescriptions::setDescriptionLanguage()
     * @uses GetGeneralArticlesDescriptions::setGenart()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int[] $genart
     */
    public function __construct($vrid = null, $descriptionLanguage = null, array $genart = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setGenart($genart);
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
     * @return \StructType\GetGeneralArticlesDescriptions
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
     * @return \StructType\GetGeneralArticlesDescriptions
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
     * Get genart value
     * @return int[]|null
     */
    public function getGenart()
    {
        return $this->genart;
    }
    /**
     * This method is responsible for validating the values passed to the setGenart method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGenart method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGenartForArrayConstraintsFromSetGenart(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getGeneralArticlesDescriptionsGenartItem) {
            // validation for constraint: itemType
            if (!(is_int($getGeneralArticlesDescriptionsGenartItem) || ctype_digit($getGeneralArticlesDescriptionsGenartItem))) {
                $invalidValues[] = is_object($getGeneralArticlesDescriptionsGenartItem) ? get_class($getGeneralArticlesDescriptionsGenartItem) : sprintf('%s(%s)', gettype($getGeneralArticlesDescriptionsGenartItem), var_export($getGeneralArticlesDescriptionsGenartItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The genart property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set genart value
     * @throws \InvalidArgumentException
     * @param int[] $genart
     * @return \StructType\GetGeneralArticlesDescriptions
     */
    public function setGenart(array $genart = array())
    {
        // validation for constraint: array
        if ('' !== ($genartArrayErrorMessage = self::validateGenartForArrayConstraintsFromSetGenart($genart))) {
            throw new \InvalidArgumentException($genartArrayErrorMessage, __LINE__);
        }
        $this->genart = $genart;
        return $this;
    }
    /**
     * Add item to genart value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\GetGeneralArticlesDescriptions
     */
    public function addToGenart($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The genart property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->genart[] = $item;
        return $this;
    }
}
