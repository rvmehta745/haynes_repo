<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCarTypesUpdateStatus StructType
 * @subpackage Structs
 */
class GetCarTypesUpdateStatus extends AbstractStructBase
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
     * The level
     * @var int
     */
    public $level;
    /**
     * The carTypeId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $carTypeId;
    /**
     * Constructor method for getCarTypesUpdateStatus
     * @uses GetCarTypesUpdateStatus::setVrid()
     * @uses GetCarTypesUpdateStatus::setDescriptionLanguage()
     * @uses GetCarTypesUpdateStatus::setLevel()
     * @uses GetCarTypesUpdateStatus::setCarTypeId()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $level
     * @param int[] $carTypeId
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $level = null, array $carTypeId = array())
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setLevel($level)
            ->setCarTypeId($carTypeId);
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
     * @return \StructType\GetCarTypesUpdateStatus
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
     * @return \StructType\GetCarTypesUpdateStatus
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
     * Get level value
     * @return int|null
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @param int $level
     * @return \StructType\GetCarTypesUpdateStatus
     */
    public function setLevel($level = null)
    {
        // validation for constraint: int
        if (!is_null($level) && !(is_int($level) || ctype_digit($level))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($level, true), gettype($level)), __LINE__);
        }
        $this->level = $level;
        return $this;
    }
    /**
     * Get carTypeId value
     * @return int[]|null
     */
    public function getCarTypeId()
    {
        return $this->carTypeId;
    }
    /**
     * This method is responsible for validating the values passed to the setCarTypeId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCarTypeId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCarTypeIdForArrayConstraintsFromSetCarTypeId(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCarTypesUpdateStatusCarTypeIdItem) {
            // validation for constraint: itemType
            if (!(is_int($getCarTypesUpdateStatusCarTypeIdItem) || ctype_digit($getCarTypesUpdateStatusCarTypeIdItem))) {
                $invalidValues[] = is_object($getCarTypesUpdateStatusCarTypeIdItem) ? get_class($getCarTypesUpdateStatusCarTypeIdItem) : sprintf('%s(%s)', gettype($getCarTypesUpdateStatusCarTypeIdItem), var_export($getCarTypesUpdateStatusCarTypeIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The carTypeId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set carTypeId value
     * @throws \InvalidArgumentException
     * @param int[] $carTypeId
     * @return \StructType\GetCarTypesUpdateStatus
     */
    public function setCarTypeId(array $carTypeId = array())
    {
        // validation for constraint: array
        if ('' !== ($carTypeIdArrayErrorMessage = self::validateCarTypeIdForArrayConstraintsFromSetCarTypeId($carTypeId))) {
            throw new \InvalidArgumentException($carTypeIdArrayErrorMessage, __LINE__);
        }
        $this->carTypeId = $carTypeId;
        return $this;
    }
    /**
     * Add item to carTypeId value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\GetCarTypesUpdateStatus
     */
    public function addToCarTypeId($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The carTypeId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->carTypeId[] = $item;
        return $this;
    }
}
