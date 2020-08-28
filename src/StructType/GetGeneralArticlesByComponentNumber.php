<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getGeneralArticlesByComponentNumber StructType
 * @subpackage Structs
 */
class GetGeneralArticlesByComponentNumber extends AbstractStructBase
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
     * The componentNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $componentNumber;
    /**
     * Constructor method for getGeneralArticlesByComponentNumber
     * @uses GetGeneralArticlesByComponentNumber::setVrid()
     * @uses GetGeneralArticlesByComponentNumber::setDescriptionLanguage()
     * @uses GetGeneralArticlesByComponentNumber::setComponentNumber()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param string[] $componentNumber
     */
    public function __construct($vrid = null, $descriptionLanguage = null, array $componentNumber = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setComponentNumber($componentNumber);
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
     * @return \StructType\GetGeneralArticlesByComponentNumber
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
     * @return \StructType\GetGeneralArticlesByComponentNumber
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
     * Get componentNumber value
     * @return string[]|null
     */
    public function getComponentNumber()
    {
        return $this->componentNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setComponentNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setComponentNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateComponentNumberForArrayConstraintsFromSetComponentNumber(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getGeneralArticlesByComponentNumberComponentNumberItem) {
            // validation for constraint: itemType
            if (!is_string($getGeneralArticlesByComponentNumberComponentNumberItem)) {
                $invalidValues[] = is_object($getGeneralArticlesByComponentNumberComponentNumberItem) ? get_class($getGeneralArticlesByComponentNumberComponentNumberItem) : sprintf('%s(%s)', gettype($getGeneralArticlesByComponentNumberComponentNumberItem), var_export($getGeneralArticlesByComponentNumberComponentNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The componentNumber property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set componentNumber value
     * @throws \InvalidArgumentException
     * @param string[] $componentNumber
     * @return \StructType\GetGeneralArticlesByComponentNumber
     */
    public function setComponentNumber(array $componentNumber = array())
    {
        // validation for constraint: array
        if ('' !== ($componentNumberArrayErrorMessage = self::validateComponentNumberForArrayConstraintsFromSetComponentNumber($componentNumber))) {
            throw new \InvalidArgumentException($componentNumberArrayErrorMessage, __LINE__);
        }
        $this->componentNumber = $componentNumber;
        return $this;
    }
    /**
     * Add item to componentNumber value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetGeneralArticlesByComponentNumber
     */
    public function addToComponentNumber($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The componentNumber property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->componentNumber[] = $item;
        return $this;
    }
}
