<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Component StructType
 * @subpackage Structs
 */
class Component extends AbstractStructBase
{
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
     * Constructor method for Component
     * @uses Component::setLoDirection()
     * @uses Component::setLoX()
     * @uses Component::setLoY()
     * @uses Component::setName()
     * @uses Component::setShieldPinId()
     * @uses Component::setSlImagesId()
     * @uses Component::setSymbolInstanceId()
     * @uses Component::setSystemTypeId()
     * @param string $loDirection
     * @param int $loX
     * @param int $loY
     * @param string $name
     * @param int $shieldPinId
     * @param int $slImagesId
     * @param int $symbolInstanceId
     * @param int $systemTypeId
     */
    public function __construct($loDirection = null, $loX = null, $loY = null, $name = null, $shieldPinId = null, $slImagesId = null, $symbolInstanceId = null, $systemTypeId = null)
    {
        $this
            ->setLoDirection($loDirection)
            ->setLoX($loX)
            ->setLoY($loY)
            ->setName($name)
            ->setShieldPinId($shieldPinId)
            ->setSlImagesId($slImagesId)
            ->setSymbolInstanceId($symbolInstanceId)
            ->setSystemTypeId($systemTypeId);
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
     * @return \StructType\Component
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
     * @return \StructType\Component
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
     * @return \StructType\Component
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
     * @return \StructType\Component
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
     * @return \StructType\Component
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
     * @return \StructType\Component
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
     * @return \StructType\Component
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
     * @return \StructType\Component
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
