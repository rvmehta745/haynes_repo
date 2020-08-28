<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComponentV2 StructType
 * @subpackage Structs
 */
class ComponentV2 extends AbstractStructBase
{
    /**
     * The generalArticles
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtGeneralArticle
     */
    public $generalArticles;
    /**
     * The loDirection
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $loDirection;
    /**
     * The loX
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $loX;
    /**
     * The loY
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $loY;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The shieldPinId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $shieldPinId;
    /**
     * The slImagesId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $slImagesId;
    /**
     * The symbolInstanceId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $symbolInstanceId;
    /**
     * The systemTypeId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $systemTypeId;
    /**
     * Constructor method for ComponentV2
     * @uses ComponentV2::setGeneralArticles()
     * @uses ComponentV2::setLoDirection()
     * @uses ComponentV2::setLoX()
     * @uses ComponentV2::setLoY()
     * @uses ComponentV2::setName()
     * @uses ComponentV2::setNumber()
     * @uses ComponentV2::setShieldPinId()
     * @uses ComponentV2::setSlImagesId()
     * @uses ComponentV2::setSymbolInstanceId()
     * @uses ComponentV2::setSystemTypeId()
     * @param \ArrayType\ArrayOfExtGeneralArticle $generalArticles
     * @param string $loDirection
     * @param int $loX
     * @param int $loY
     * @param string $name
     * @param string $number
     * @param int $shieldPinId
     * @param int $slImagesId
     * @param int $symbolInstanceId
     * @param int $systemTypeId
     */
    public function __construct(\ArrayType\ArrayOfExtGeneralArticle $generalArticles = null, $loDirection = null, $loX = null, $loY = null, $name = null, $number = null, $shieldPinId = null, $slImagesId = null, $symbolInstanceId = null, $systemTypeId = null)
    {
        $this
            ->setGeneralArticles($generalArticles)
            ->setLoDirection($loDirection)
            ->setLoX($loX)
            ->setLoY($loY)
            ->setName($name)
            ->setNumber($number)
            ->setShieldPinId($shieldPinId)
            ->setSlImagesId($slImagesId)
            ->setSymbolInstanceId($symbolInstanceId)
            ->setSystemTypeId($systemTypeId);
    }
    /**
     * Get generalArticles value
     * @return \ArrayType\ArrayOfExtGeneralArticle|null
     */
    public function getGeneralArticles()
    {
        return $this->generalArticles;
    }
    /**
     * Set generalArticles value
     * @param \ArrayType\ArrayOfExtGeneralArticle $generalArticles
     * @return \StructType\ComponentV2
     */
    public function setGeneralArticles(\ArrayType\ArrayOfExtGeneralArticle $generalArticles = null)
    {
        $this->generalArticles = $generalArticles;
        return $this;
    }
    /**
     * Get loDirection value
     * @return string|null
     */
    public function getLoDirection()
    {
        return $this->loDirection;
    }
    /**
     * Set loDirection value
     * @param string $loDirection
     * @return \StructType\ComponentV2
     */
    public function setLoDirection($loDirection = null)
    {
        // validation for constraint: string
        if (!is_null($loDirection) && !is_string($loDirection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loDirection, true), gettype($loDirection)), __LINE__);
        }
        $this->loDirection = $loDirection;
        return $this;
    }
    /**
     * Get loX value
     * @return int|null
     */
    public function getLoX()
    {
        return $this->loX;
    }
    /**
     * Set loX value
     * @param int $loX
     * @return \StructType\ComponentV2
     */
    public function setLoX($loX = null)
    {
        // validation for constraint: int
        if (!is_null($loX) && !(is_int($loX) || ctype_digit($loX))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($loX, true), gettype($loX)), __LINE__);
        }
        $this->loX = $loX;
        return $this;
    }
    /**
     * Get loY value
     * @return int|null
     */
    public function getLoY()
    {
        return $this->loY;
    }
    /**
     * Set loY value
     * @param int $loY
     * @return \StructType\ComponentV2
     */
    public function setLoY($loY = null)
    {
        // validation for constraint: int
        if (!is_null($loY) && !(is_int($loY) || ctype_digit($loY))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($loY, true), gettype($loY)), __LINE__);
        }
        $this->loY = $loY;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\ComponentV2
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \StructType\ComponentV2
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get shieldPinId value
     * @return int|null
     */
    public function getShieldPinId()
    {
        return $this->shieldPinId;
    }
    /**
     * Set shieldPinId value
     * @param int $shieldPinId
     * @return \StructType\ComponentV2
     */
    public function setShieldPinId($shieldPinId = null)
    {
        // validation for constraint: int
        if (!is_null($shieldPinId) && !(is_int($shieldPinId) || ctype_digit($shieldPinId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shieldPinId, true), gettype($shieldPinId)), __LINE__);
        }
        $this->shieldPinId = $shieldPinId;
        return $this;
    }
    /**
     * Get slImagesId value
     * @return int|null
     */
    public function getSlImagesId()
    {
        return $this->slImagesId;
    }
    /**
     * Set slImagesId value
     * @param int $slImagesId
     * @return \StructType\ComponentV2
     */
    public function setSlImagesId($slImagesId = null)
    {
        // validation for constraint: int
        if (!is_null($slImagesId) && !(is_int($slImagesId) || ctype_digit($slImagesId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($slImagesId, true), gettype($slImagesId)), __LINE__);
        }
        $this->slImagesId = $slImagesId;
        return $this;
    }
    /**
     * Get symbolInstanceId value
     * @return int|null
     */
    public function getSymbolInstanceId()
    {
        return $this->symbolInstanceId;
    }
    /**
     * Set symbolInstanceId value
     * @param int $symbolInstanceId
     * @return \StructType\ComponentV2
     */
    public function setSymbolInstanceId($symbolInstanceId = null)
    {
        // validation for constraint: int
        if (!is_null($symbolInstanceId) && !(is_int($symbolInstanceId) || ctype_digit($symbolInstanceId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($symbolInstanceId, true), gettype($symbolInstanceId)), __LINE__);
        }
        $this->symbolInstanceId = $symbolInstanceId;
        return $this;
    }
    /**
     * Get systemTypeId value
     * @return int|null
     */
    public function getSystemTypeId()
    {
        return $this->systemTypeId;
    }
    /**
     * Set systemTypeId value
     * @param int $systemTypeId
     * @return \StructType\ComponentV2
     */
    public function setSystemTypeId($systemTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($systemTypeId) && !(is_int($systemTypeId) || ctype_digit($systemTypeId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($systemTypeId, true), gettype($systemTypeId)), __LINE__);
        }
        $this->systemTypeId = $systemTypeId;
        return $this;
    }
}
