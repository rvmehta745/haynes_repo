<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSystemsV2Response StructType
 * @subpackage Structs
 */
class GetSystemsV2Response extends AbstractStructBase
{
    /**
     * The getSystemsV2Return
     * @var \StructType\SystemGroupCategoryArrayContainerV2
     */
    public $getSystemsV2Return;
    /**
     * Constructor method for getSystemsV2Response
     * @uses GetSystemsV2Response::setGetSystemsV2Return()
     * @param \StructType\SystemGroupCategoryArrayContainerV2 $getSystemsV2Return
     */
    public function __construct(\StructType\SystemGroupCategoryArrayContainerV2 $getSystemsV2Return = null)
    {
        $this
            ->setGetSystemsV2Return($getSystemsV2Return);
    }
    /**
     * Get getSystemsV2Return value
     * @return \StructType\SystemGroupCategoryArrayContainerV2|null
     */
    public function getGetSystemsV2Return()
    {
        return $this->getSystemsV2Return;
    }
    /**
     * Set getSystemsV2Return value
     * @param \StructType\SystemGroupCategoryArrayContainerV2 $getSystemsV2Return
     * @return \StructType\GetSystemsV2Response
     */
    public function setGetSystemsV2Return(\StructType\SystemGroupCategoryArrayContainerV2 $getSystemsV2Return = null)
    {
        $this->getSystemsV2Return = $getSystemsV2Return;
        return $this;
    }
}
