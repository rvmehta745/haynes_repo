<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSystemsResponse StructType
 * @subpackage Structs
 */
class GetSystemsResponse extends AbstractStructBase
{
    /**
     * The getSystemsReturn
     * @var \StructType\SystemGroupCategoryArrayContainer
     */
    public $getSystemsReturn;
    /**
     * Constructor method for getSystemsResponse
     * @uses GetSystemsResponse::setGetSystemsReturn()
     * @param \StructType\SystemGroupCategoryArrayContainer $getSystemsReturn
     */
    public function __construct(\StructType\SystemGroupCategoryArrayContainer $getSystemsReturn = null)
    {
        $this
            ->setGetSystemsReturn($getSystemsReturn);
    }
    /**
     * Get getSystemsReturn value
     * @return \StructType\SystemGroupCategoryArrayContainer|null
     */
    public function getGetSystemsReturn()
    {
        return $this->getSystemsReturn;
    }
    /**
     * Set getSystemsReturn value
     * @param \StructType\SystemGroupCategoryArrayContainer $getSystemsReturn
     * @return \StructType\GetSystemsResponse
     */
    public function setGetSystemsReturn(\StructType\SystemGroupCategoryArrayContainer $getSystemsReturn = null)
    {
        $this->getSystemsReturn = $getSystemsReturn;
        return $this;
    }
}
