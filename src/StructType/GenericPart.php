<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenericPart StructType
 * @subpackage Structs
 */
class GenericPart extends AbstractStructBase
{
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The mandatory
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $mandatory;
    /**
     * Constructor method for GenericPart
     * @uses GenericPart::setDescription()
     * @uses GenericPart::setId()
     * @uses GenericPart::setMandatory()
     * @param string $description
     * @param int $id
     * @param bool $mandatory
     */
    public function __construct($description = null, $id = null, $mandatory = null)
    {
        $this
            ->setDescription($description)
            ->setId($id)
            ->setMandatory($mandatory);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \StructType\GenericPart
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \StructType\GenericPart
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get mandatory value
     * @return bool|null
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }
    /**
     * Set mandatory value
     * @param bool $mandatory
     * @return \StructType\GenericPart
     */
    public function setMandatory($mandatory = null)
    {
        // validation for constraint: boolean
        if (!is_null($mandatory) && !is_bool($mandatory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mandatory, true), gettype($mandatory)), __LINE__);
        }
        $this->mandatory = $mandatory;
        return $this;
    }
}
