<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCarTypesByTecdocNumberV2 StructType
 * @subpackage Structs
 */
class GetCarTypesByTecdocNumberV2 extends AbstractStructBase
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
     * The tecdocNumber
     * @var int
     */
    public $tecdocNumber;
    /**
     * The rtTypeCategory
     * @var string
     */
    public $rtTypeCategory;
    /**
     * The motnr
     * @var int
     */
    public $motnr;
    /**
     * Constructor method for getCarTypesByTecdocNumberV2
     * @uses GetCarTypesByTecdocNumberV2::setVrid()
     * @uses GetCarTypesByTecdocNumberV2::setDescriptionLanguage()
     * @uses GetCarTypesByTecdocNumberV2::setTecdocNumber()
     * @uses GetCarTypesByTecdocNumberV2::setRtTypeCategory()
     * @uses GetCarTypesByTecdocNumberV2::setMotnr()
     * @param string $vrid
     * @param string $descriptionLanguage
     * @param int $tecdocNumber
     * @param string $rtTypeCategory
     * @param int $motnr
     */
    public function __construct($vrid = null, $descriptionLanguage = null, $tecdocNumber = null, $rtTypeCategory = null, $motnr = null)
    {
        $this
            ->setVrid($vrid)
            ->setDescriptionLanguage($descriptionLanguage)
            ->setTecdocNumber($tecdocNumber)
            ->setRtTypeCategory($rtTypeCategory)
            ->setMotnr($motnr);
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
     * @return \StructType\GetCarTypesByTecdocNumberV2
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
     * @return \StructType\GetCarTypesByTecdocNumberV2
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
     * Get tecdocNumber value
     * @return int|null
     */
    public function getTecdocNumber()
    {
        return $this->tecdocNumber;
    }
    /**
     * Set tecdocNumber value
     * @param int $tecdocNumber
     * @return \StructType\GetCarTypesByTecdocNumberV2
     */
    public function setTecdocNumber($tecdocNumber = null)
    {
        // validation for constraint: int
        if (!is_null($tecdocNumber) && !(is_int($tecdocNumber) || ctype_digit($tecdocNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tecdocNumber, true), gettype($tecdocNumber)), __LINE__);
        }
        $this->tecdocNumber = $tecdocNumber;
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
     * @return \StructType\GetCarTypesByTecdocNumberV2
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
     * Get motnr value
     * @return int|null
     */
    public function getMotnr()
    {
        return $this->motnr;
    }
    /**
     * Set motnr value
     * @param int $motnr
     * @return \StructType\GetCarTypesByTecdocNumberV2
     */
    public function setMotnr($motnr = null)
    {
        // validation for constraint: int
        if (!is_null($motnr) && !(is_int($motnr) || ctype_digit($motnr))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($motnr, true), gettype($motnr)), __LINE__);
        }
        $this->motnr = $motnr;
        return $this;
    }
}
