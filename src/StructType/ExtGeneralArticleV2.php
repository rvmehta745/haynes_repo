<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtGeneralArticleV2 StructType
 * @subpackage Structs
 */
class ExtGeneralArticleV2 extends AbstractStructBase
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
     * @var bool
     */
    public $mandatory;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $remark;
    /**
     * Constructor method for ExtGeneralArticleV2
     * @uses ExtGeneralArticleV2::setDescription()
     * @uses ExtGeneralArticleV2::setId()
     * @uses ExtGeneralArticleV2::setMandatory()
     * @uses ExtGeneralArticleV2::setRemark()
     * @param string $description
     * @param int $id
     * @param bool $mandatory
     * @param string $remark
     */
    public function __construct($description = null, $id = null, $mandatory = null, $remark = null)
    {
        $this
            ->setDescription($description)
            ->setId($id)
            ->setMandatory($mandatory)
            ->setRemark($remark);
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
     * @return \StructType\ExtGeneralArticleV2
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
     * @return \StructType\ExtGeneralArticleV2
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
     * @return \StructType\ExtGeneralArticleV2
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
    /**
     * Get remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \StructType\ExtGeneralArticleV2
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        return $this;
    }
}
