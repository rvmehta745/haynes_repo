<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceTasksV6 StructType
 * @subpackage Structs
 */
class GetMaintenanceTasksV6 extends AbstractStructBase
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
     * The repairtimesTypeId
     * @var int
     */
    public $repairtimesTypeId;
    /**
     * The rtTypeCategory
     * @var string
     */
    public $rtTypeCategory;
    /**
     * The systemId
     * @var int
     */
    public $systemId;
    /**
     * The periodId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    public $periodId;
    /**
     * The includeSmartLinks
     * @var bool
     */
    public $includeSmartLinks;
    /**
     * The includeServiceTimes
     * @var bool
     */
    public $includeServiceTimes;
    /**
     * Constructor method for getMaintenanceTasksV6
     * @uses GetMaintenanceTasksV6::setVrid()
     * @uses GetMaintenanceTasksV6::setDescriptionLanguage()
     * @uses GetMaintenanceTasksV6::setCarTypeId()
     * @uses GetMaintenanceTasksV6::setRepairtimesTypeId()
     * @uses GetMaintenanceTasksV6::setRtTypeCategory()
     * @uses GetMaintenanceTasksV6::setSystemId()
     * @uses GetMaintenanceTasksV6::setPeriodId()
     * @uses GetMaintenanceTasksV6::setIncludeSmartLinks()
     * @uses GetMaintenanceTasksV6::setIncludeServiceTimes()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $carTypeId
     * @param int $repairtimesTypeId
     * @param string $rtTypeCategory
     * @param int $systemId
     * @param int[] $periodId
     * @param bool $includeSmartLinks
     * @param bool $includeServiceTimes
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $carTypeId = null, $repairtimesTypeId = null, $rtTypeCategory = null, $systemId = null, array $periodId = array(), $includeSmartLinks = null, $includeServiceTimes = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setCarTypeId($carTypeId)
            ->setRepairtimesTypeId($repairtimesTypeId)
            ->setRtTypeCategory($rtTypeCategory)
            ->setSystemId($systemId)
            ->setPeriodId($periodId)
            ->setIncludeSmartLinks($includeSmartLinks)
            ->setIncludeServiceTimes($includeServiceTimes);
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
     * @return \StructType\GetMaintenanceTasksV6
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
     * @return \StructType\GetMaintenanceTasksV6
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
     * @return \StructType\GetMaintenanceTasksV6
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
     * Get repairtimesTypeId value
     * @return int|null
     */
    public function getRepairtimesTypeId()
    {
        return $this->repairtimesTypeId;
    }
    /**
     * Set repairtimesTypeId value
     * @param int $repairtimesTypeId
     * @return \StructType\GetMaintenanceTasksV6
     */
    public function setRepairtimesTypeId($repairtimesTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($repairtimesTypeId) && !(is_int($repairtimesTypeId) || ctype_digit($repairtimesTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repairtimesTypeId, true), gettype($repairtimesTypeId)), __LINE__);
        }
        $this->repairtimesTypeId = $repairtimesTypeId;
        return $this;
    }
    /**
     * Get rtTypeCategory value
     * @return string|null
     */
    public function getRtTypeCategory()
    {
        return $this->rtTypeCategory;
    }
    /**
     * Set rtTypeCategory value
     * @param string $rtTypeCategory
     * @return \StructType\GetMaintenanceTasksV6
     */
    public function setRtTypeCategory($rtTypeCategory = null)
    {
        // validation for constraint: string
        if (!is_null($rtTypeCategory) && !is_string($rtTypeCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rtTypeCategory, true), gettype($rtTypeCategory)), __LINE__);
        }
        $this->rtTypeCategory = $rtTypeCategory;
        return $this;
    }
    /**
     * Get systemId value
     * @return int|null
     */
    public function getSystemId()
    {
        return $this->systemId;
    }
    /**
     * Set systemId value
     * @param int $systemId
     * @return \StructType\GetMaintenanceTasksV6
     */
    public function setSystemId($systemId = null)
    {
        // validation for constraint: int
        if (!is_null($systemId) && !(is_int($systemId) || ctype_digit($systemId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($systemId, true), gettype($systemId)), __LINE__);
        }
        $this->systemId = $systemId;
        return $this;
    }
    /**
     * Get periodId value
     * @return int[]|null
     */
    public function getPeriodId()
    {
        return $this->periodId;
    }
    /**
     * This method is responsible for validating the values passed to the setPeriodId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeriodId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePeriodIdForArrayConstraintsFromSetPeriodId(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceTasksV6PeriodIdItem) {
            // validation for constraint: itemType
            if (!(is_int($getMaintenanceTasksV6PeriodIdItem) || ctype_digit($getMaintenanceTasksV6PeriodIdItem))) {
                $invalidValues[] = is_object($getMaintenanceTasksV6PeriodIdItem) ? get_class($getMaintenanceTasksV6PeriodIdItem) : sprintf('%s(%s)', gettype($getMaintenanceTasksV6PeriodIdItem), var_export($getMaintenanceTasksV6PeriodIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The periodId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set periodId value
     * @throws \InvalidArgumentException
     * @param int[] $periodId
     * @return \StructType\GetMaintenanceTasksV6
     */
    public function setPeriodId(array $periodId = array())
    {
        // validation for constraint: array
        if ('' !== ($periodIdArrayErrorMessage = self::validatePeriodIdForArrayConstraintsFromSetPeriodId($periodId))) {
            throw new \InvalidArgumentException($periodIdArrayErrorMessage, __LINE__);
        }
        $this->periodId = $periodId;
        return $this;
    }
    /**
     * Add item to periodId value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\GetMaintenanceTasksV6
     */
    public function addToPeriodId($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The periodId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->periodId[] = $item;
        return $this;
    }
    /**
     * Get includeSmartLinks value
     * @return bool|null
     */
    public function getIncludeSmartLinks()
    {
        return $this->includeSmartLinks;
    }
    /**
     * Set includeSmartLinks value
     * @param bool $includeSmartLinks
     * @return \StructType\GetMaintenanceTasksV6
     */
    public function setIncludeSmartLinks($includeSmartLinks = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeSmartLinks) && !is_bool($includeSmartLinks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeSmartLinks, true), gettype($includeSmartLinks)), __LINE__);
        }
        $this->includeSmartLinks = $includeSmartLinks;
        return $this;
    }
    /**
     * Get includeServiceTimes value
     * @return bool|null
     */
    public function getIncludeServiceTimes()
    {
        return $this->includeServiceTimes;
    }
    /**
     * Set includeServiceTimes value
     * @param bool $includeServiceTimes
     * @return \StructType\GetMaintenanceTasksV6
     */
    public function setIncludeServiceTimes($includeServiceTimes = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeServiceTimes) && !is_bool($includeServiceTimes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeServiceTimes, true), gettype($includeServiceTimes)), __LINE__);
        }
        $this->includeServiceTimes = $includeServiceTimes;
        return $this;
    }
}
