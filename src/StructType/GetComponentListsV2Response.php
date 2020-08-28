<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getComponentListsV2Response StructType
 * @subpackage Structs
 */
class GetComponentListsV2Response extends AbstractStructBase
{
    /**
     * The getComponentListsV2Return
     * @var \StructType\ListComponentArrayContainerV2
     */
    public $getComponentListsV2Return;
    /**
     * Constructor method for getComponentListsV2Response
     * @uses GetComponentListsV2Response::setGetComponentListsV2Return()
     * @param \StructType\ListComponentArrayContainerV2 $getComponentListsV2Return
     */
    public function __construct(\StructType\ListComponentArrayContainerV2 $getComponentListsV2Return = null)
    {
        $this
            ->setGetComponentListsV2Return($getComponentListsV2Return);
    }
    /**
     * Get getComponentListsV2Return value
     * @return \StructType\ListComponentArrayContainerV2|null
     */
    public function getGetComponentListsV2Return()
    {
        return $this->getComponentListsV2Return;
    }
    /**
     * Set getComponentListsV2Return value
     * @param \StructType\ListComponentArrayContainerV2 $getComponentListsV2Return
     * @return \StructType\GetComponentListsV2Response
     */
    public function setGetComponentListsV2Return(\StructType\ListComponentArrayContainerV2 $getComponentListsV2Return = null)
    {
        $this->getComponentListsV2Return = $getComponentListsV2Return;
        return $this;
    }
}
