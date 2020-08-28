<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtExtraInfoPage StructType
 * @subpackage Structs
 */
class ExtExtraInfoPage extends AbstractStructBase
{
    /**
     * The compNr
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $compNr;
    /**
     * The containers
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtExtraInfoContainer
     */
    public $containers;
    /**
     * The pageTitle
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pageTitle;
    /**
     * Constructor method for ExtExtraInfoPage
     * @uses ExtExtraInfoPage::setCompNr()
     * @uses ExtExtraInfoPage::setContainers()
     * @uses ExtExtraInfoPage::setPageTitle()
     * @param string $compNr
     * @param \ArrayType\ArrayOfExtExtraInfoContainer $containers
     * @param string $pageTitle
     */
    public function __construct($compNr = null, \ArrayType\ArrayOfExtExtraInfoContainer $containers = null, $pageTitle = null)
    {
        $this
            ->setCompNr($compNr)
            ->setContainers($containers)
            ->setPageTitle($pageTitle);
    }
    /**
     * Get compNr value
     * @return string|null
     */
    public function getCompNr()
    {
        return $this->compNr;
    }
    /**
     * Set compNr value
     * @param string $compNr
     * @return \StructType\ExtExtraInfoPage
     */
    public function setCompNr($compNr = null)
    {
        // validation for constraint: string
        if (!is_null($compNr) && !is_string($compNr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compNr, true), gettype($compNr)), __LINE__);
        }
        $this->compNr = $compNr;
        return $this;
    }
    /**
     * Get containers value
     * @return \ArrayType\ArrayOfExtExtraInfoContainer|null
     */
    public function getContainers()
    {
        return $this->containers;
    }
    /**
     * Set containers value
     * @param \ArrayType\ArrayOfExtExtraInfoContainer $containers
     * @return \StructType\ExtExtraInfoPage
     */
    public function setContainers(\ArrayType\ArrayOfExtExtraInfoContainer $containers = null)
    {
        $this->containers = $containers;
        return $this;
    }
    /**
     * Get pageTitle value
     * @return string|null
     */
    public function getPageTitle()
    {
        return $this->pageTitle;
    }
    /**
     * Set pageTitle value
     * @param string $pageTitle
     * @return \StructType\ExtExtraInfoPage
     */
    public function setPageTitle($pageTitle = null)
    {
        // validation for constraint: string
        if (!is_null($pageTitle) && !is_string($pageTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pageTitle, true), gettype($pageTitle)), __LINE__);
        }
        $this->pageTitle = $pageTitle;
        return $this;
    }
}
