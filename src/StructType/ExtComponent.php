<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtComponent StructType
 * @subpackage Structs
 */
class ExtComponent extends AbstractStructBase
{
    /**
     * The componentId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $componentId;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The diagnostics
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $diagnostics;
    /**
     * The extraInfoAvailable
     * @var bool
     */
    public $extraInfoAvailable;
    /**
     * The extraInfoPath
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $extraInfoPath;
    /**
     * The function
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $function;
    /**
     * The groupId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $groupId;
    /**
     * The infoAvailable
     * @var bool
     */
    public $infoAvailable;
    /**
     * The pictureMimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pictureMimeDataName;
    /**
     * The scope1MimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $scope1MimeDataName;
    /**
     * The scope2MimeDataName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $scope2MimeDataName;
    /**
     * The specifications
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $specifications;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * The functionDesc
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $functionDesc;
    /**
     * Constructor method for ExtComponent
     * @uses ExtComponent::setComponentId()
     * @uses ExtComponent::setDescription()
     * @uses ExtComponent::setDiagnostics()
     * @uses ExtComponent::setExtraInfoAvailable()
     * @uses ExtComponent::setExtraInfoPath()
     * @uses ExtComponent::setFunction()
     * @uses ExtComponent::setGroupId()
     * @uses ExtComponent::setInfoAvailable()
     * @uses ExtComponent::setPictureMimeDataName()
     * @uses ExtComponent::setScope1MimeDataName()
     * @uses ExtComponent::setScope2MimeDataName()
     * @uses ExtComponent::setSpecifications()
     * @uses ExtComponent::setStatus()
     * @uses ExtComponent::setFunctionDesc()
     * @param int $componentId
     * @param string $description
     * @param string $diagnostics
     * @param bool $extraInfoAvailable
     * @param string $extraInfoPath
     * @param string $function
     * @param int $groupId
     * @param bool $infoAvailable
     * @param string $pictureMimeDataName
     * @param string $scope1MimeDataName
     * @param string $scope2MimeDataName
     * @param string $specifications
     * @param \StructType\ExtStatus $status
     * @param string $functionDesc
     */
    public function __construct($componentId = null, $description = null, $diagnostics = null, $extraInfoAvailable = null, $extraInfoPath = null, $function = null, $groupId = null, $infoAvailable = null, $pictureMimeDataName = null, $scope1MimeDataName = null, $scope2MimeDataName = null, $specifications = null, \StructType\ExtStatus $status = null, $functionDesc = null)
    {
        $this
            ->setComponentId($componentId)
            ->setDescription($description)
            ->setDiagnostics($diagnostics)
            ->setExtraInfoAvailable($extraInfoAvailable)
            ->setExtraInfoPath($extraInfoPath)
            ->setFunction($function)
            ->setGroupId($groupId)
            ->setInfoAvailable($infoAvailable)
            ->setPictureMimeDataName($pictureMimeDataName)
            ->setScope1MimeDataName($scope1MimeDataName)
            ->setScope2MimeDataName($scope2MimeDataName)
            ->setSpecifications($specifications)
            ->setStatus($status)
            ->setFunctionDesc($functionDesc);
    }
    /**
     * Get componentId value
     * @return int|null
     */
    public function getComponentId()
    {
        return $this->componentId;
    }
    /**
     * Set componentId value
     * @param int $componentId
     * @return \StructType\ExtComponent
     */
    public function setComponentId($componentId = null)
    {
        // validation for constraint: int
        if (!is_null($componentId) && !(is_int($componentId) || ctype_digit($componentId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($componentId, true), gettype($componentId)), __LINE__);
        }
        $this->componentId = $componentId;
        return $this;
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
     * @return \StructType\ExtComponent
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
     * Get diagnostics value
     * @return string|null
     */
    public function getDiagnostics()
    {
        return $this->diagnostics;
    }
    /**
     * Set diagnostics value
     * @param string $diagnostics
     * @return \StructType\ExtComponent
     */
    public function setDiagnostics($diagnostics = null)
    {
        // validation for constraint: string
        if (!is_null($diagnostics) && !is_string($diagnostics)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($diagnostics, true), gettype($diagnostics)), __LINE__);
        }
        $this->diagnostics = $diagnostics;
        return $this;
    }
    /**
     * Get extraInfoAvailable value
     * @return bool|null
     */
    public function getExtraInfoAvailable()
    {
        return $this->extraInfoAvailable;
    }
    /**
     * Set extraInfoAvailable value
     * @param bool $extraInfoAvailable
     * @return \StructType\ExtComponent
     */
    public function setExtraInfoAvailable($extraInfoAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($extraInfoAvailable) && !is_bool($extraInfoAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($extraInfoAvailable, true), gettype($extraInfoAvailable)), __LINE__);
        }
        $this->extraInfoAvailable = $extraInfoAvailable;
        return $this;
    }
    /**
     * Get extraInfoPath value
     * @return string|null
     */
    public function getExtraInfoPath()
    {
        return $this->extraInfoPath;
    }
    /**
     * Set extraInfoPath value
     * @param string $extraInfoPath
     * @return \StructType\ExtComponent
     */
    public function setExtraInfoPath($extraInfoPath = null)
    {
        // validation for constraint: string
        if (!is_null($extraInfoPath) && !is_string($extraInfoPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extraInfoPath, true), gettype($extraInfoPath)), __LINE__);
        }
        $this->extraInfoPath = $extraInfoPath;
        return $this;
    }
    /**
     * Get function value
     * @return string|null
     */
    public function getFunction()
    {
        return $this->function;
    }
    /**
     * Set function value
     * @param string $function
     * @return \StructType\ExtComponent
     */
    public function setFunction($function = null)
    {
        // validation for constraint: string
        if (!is_null($function) && !is_string($function)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($function, true), gettype($function)), __LINE__);
        }
        $this->function = $function;
        return $this;
    }
    /**
     * Get groupId value
     * @return int|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
    /**
     * Set groupId value
     * @param int $groupId
     * @return \StructType\ExtComponent
     */
    public function setGroupId($groupId = null)
    {
        // validation for constraint: int
        if (!is_null($groupId) && !(is_int($groupId) || ctype_digit($groupId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groupId, true), gettype($groupId)), __LINE__);
        }
        $this->groupId = $groupId;
        return $this;
    }
    /**
     * Get infoAvailable value
     * @return bool|null
     */
    public function getInfoAvailable()
    {
        return $this->infoAvailable;
    }
    /**
     * Set infoAvailable value
     * @param bool $infoAvailable
     * @return \StructType\ExtComponent
     */
    public function setInfoAvailable($infoAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($infoAvailable) && !is_bool($infoAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($infoAvailable, true), gettype($infoAvailable)), __LINE__);
        }
        $this->infoAvailable = $infoAvailable;
        return $this;
    }
    /**
     * Get pictureMimeDataName value
     * @return string|null
     */
    public function getPictureMimeDataName()
    {
        return $this->pictureMimeDataName;
    }
    /**
     * Set pictureMimeDataName value
     * @param string $pictureMimeDataName
     * @return \StructType\ExtComponent
     */
    public function setPictureMimeDataName($pictureMimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($pictureMimeDataName) && !is_string($pictureMimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pictureMimeDataName, true), gettype($pictureMimeDataName)), __LINE__);
        }
        $this->pictureMimeDataName = $pictureMimeDataName;
        return $this;
    }
    /**
     * Get scope1MimeDataName value
     * @return string|null
     */
    public function getScope1MimeDataName()
    {
        return $this->scope1MimeDataName;
    }
    /**
     * Set scope1MimeDataName value
     * @param string $scope1MimeDataName
     * @return \StructType\ExtComponent
     */
    public function setScope1MimeDataName($scope1MimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($scope1MimeDataName) && !is_string($scope1MimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scope1MimeDataName, true), gettype($scope1MimeDataName)), __LINE__);
        }
        $this->scope1MimeDataName = $scope1MimeDataName;
        return $this;
    }
    /**
     * Get scope2MimeDataName value
     * @return string|null
     */
    public function getScope2MimeDataName()
    {
        return $this->scope2MimeDataName;
    }
    /**
     * Set scope2MimeDataName value
     * @param string $scope2MimeDataName
     * @return \StructType\ExtComponent
     */
    public function setScope2MimeDataName($scope2MimeDataName = null)
    {
        // validation for constraint: string
        if (!is_null($scope2MimeDataName) && !is_string($scope2MimeDataName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scope2MimeDataName, true), gettype($scope2MimeDataName)), __LINE__);
        }
        $this->scope2MimeDataName = $scope2MimeDataName;
        return $this;
    }
    /**
     * Get specifications value
     * @return string|null
     */
    public function getSpecifications()
    {
        return $this->specifications;
    }
    /**
     * Set specifications value
     * @param string $specifications
     * @return \StructType\ExtComponent
     */
    public function setSpecifications($specifications = null)
    {
        // validation for constraint: string
        if (!is_null($specifications) && !is_string($specifications)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($specifications, true), gettype($specifications)), __LINE__);
        }
        $this->specifications = $specifications;
        return $this;
    }
    /**
     * Get status value
     * @return \StructType\ExtStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \StructType\ExtStatus $status
     * @return \StructType\ExtComponent
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Get functionDesc value
     * @return string|null
     */
    public function getFunctionDesc()
    {
        return $this->functionDesc;
    }
    /**
     * Set functionDesc value
     * @param string $functionDesc
     * @return \StructType\ExtComponent
     */
    public function setFunctionDesc($functionDesc = null)
    {
        // validation for constraint: string
        if (!is_null($functionDesc) && !is_string($functionDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($functionDesc, true), gettype($functionDesc)), __LINE__);
        }
        $this->functionDesc = $functionDesc;
        return $this;
    }
}
