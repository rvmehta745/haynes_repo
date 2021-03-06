<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtTSBDataElementV2 StructType
 * @subpackage Structs
 */
class ExtTSBDataElementV2 extends AbstractStructBase
{
    /**
     * The EOBDCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $EOBDCode;
    /**
     * The OECode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $OECode;
    /**
     * The image
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $image;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $remark;
    /**
     * The repairTime
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $repairTime;
    /**
     * The smartLinks
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtSmartLink
     */
    public $smartLinks;
    /**
     * The specialTools
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtSpecialTool
     */
    public $specialTools;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $text;
    /**
     * Constructor method for ExtTSBDataElementV2
     * @uses ExtTSBDataElementV2::setEOBDCode()
     * @uses ExtTSBDataElementV2::setOECode()
     * @uses ExtTSBDataElementV2::setImage()
     * @uses ExtTSBDataElementV2::setRemark()
     * @uses ExtTSBDataElementV2::setRepairTime()
     * @uses ExtTSBDataElementV2::setSmartLinks()
     * @uses ExtTSBDataElementV2::setSpecialTools()
     * @uses ExtTSBDataElementV2::setText()
     * @param string $eOBDCode
     * @param string $oECode
     * @param string $image
     * @param string $remark
     * @param int $repairTime
     * @param \ArrayType\ArrayOfExtSmartLink $smartLinks
     * @param \ArrayType\ArrayOfExtSpecialTool $specialTools
     * @param string $text
     */
    public function __construct($eOBDCode = null, $oECode = null, $image = null, $remark = null, $repairTime = null, \ArrayType\ArrayOfExtSmartLink $smartLinks = null, \ArrayType\ArrayOfExtSpecialTool $specialTools = null, $text = null)
    {
        $this
            ->setEOBDCode($eOBDCode)
            ->setOECode($oECode)
            ->setImage($image)
            ->setRemark($remark)
            ->setRepairTime($repairTime)
            ->setSmartLinks($smartLinks)
            ->setSpecialTools($specialTools)
            ->setText($text);
    }
    /**
     * Get EOBDCode value
     * @return string|null
     */
    public function getEOBDCode()
    {
        return $this->EOBDCode;
    }
    /**
     * Set EOBDCode value
     * @param string $eOBDCode
     * @return \StructType\ExtTSBDataElementV2
     */
    public function setEOBDCode($eOBDCode = null)
    {
        // validation for constraint: string
        if (!is_null($eOBDCode) && !is_string($eOBDCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eOBDCode, true), gettype($eOBDCode)), __LINE__);
        }
        $this->EOBDCode = $eOBDCode;
        return $this;
    }
    /**
     * Get OECode value
     * @return string|null
     */
    public function getOECode()
    {
        return $this->OECode;
    }
    /**
     * Set OECode value
     * @param string $oECode
     * @return \StructType\ExtTSBDataElementV2
     */
    public function setOECode($oECode = null)
    {
        // validation for constraint: string
        if (!is_null($oECode) && !is_string($oECode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oECode, true), gettype($oECode)), __LINE__);
        }
        $this->OECode = $oECode;
        return $this;
    }
    /**
     * Get image value
     * @return string|null
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Set image value
     * @param string $image
     * @return \StructType\ExtTSBDataElementV2
     */
    public function setImage($image = null)
    {
        // validation for constraint: string
        if (!is_null($image) && !is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), gettype($image)), __LINE__);
        }
        $this->image = $image;
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
     * @return \StructType\ExtTSBDataElementV2
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
    /**
     * Get repairTime value
     * @return int|null
     */
    public function getRepairTime()
    {
        return $this->repairTime;
    }
    /**
     * Set repairTime value
     * @param int $repairTime
     * @return \StructType\ExtTSBDataElementV2
     */
    public function setRepairTime($repairTime = null)
    {
        // validation for constraint: int
        if (!is_null($repairTime) && !(is_int($repairTime) || ctype_digit($repairTime))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repairTime, true), gettype($repairTime)), __LINE__);
        }
        $this->repairTime = $repairTime;
        return $this;
    }
    /**
     * Get smartLinks value
     * @return \ArrayType\ArrayOfExtSmartLink|null
     */
    public function getSmartLinks()
    {
        return $this->smartLinks;
    }
    /**
     * Set smartLinks value
     * @param \ArrayType\ArrayOfExtSmartLink $smartLinks
     * @return \StructType\ExtTSBDataElementV2
     */
    public function setSmartLinks(\ArrayType\ArrayOfExtSmartLink $smartLinks = null)
    {
        $this->smartLinks = $smartLinks;
        return $this;
    }
    /**
     * Get specialTools value
     * @return \ArrayType\ArrayOfExtSpecialTool|null
     */
    public function getSpecialTools()
    {
        return $this->specialTools;
    }
    /**
     * Set specialTools value
     * @param \ArrayType\ArrayOfExtSpecialTool $specialTools
     * @return \StructType\ExtTSBDataElementV2
     */
    public function setSpecialTools(\ArrayType\ArrayOfExtSpecialTool $specialTools = null)
    {
        $this->specialTools = $specialTools;
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \StructType\ExtTSBDataElementV2
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        return $this;
    }
}
