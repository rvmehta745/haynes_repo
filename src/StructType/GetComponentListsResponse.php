<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getComponentListsResponse StructType
 * @subpackage Structs
 */
class GetComponentListsResponse extends AbstractStructBase
{
    /**
     * The getComponentListsReturn
     * @var \StructType\ListComponentArrayContainer
     */
    public $getComponentListsReturn;
    /**
     * Constructor method for getComponentListsResponse
     * @uses GetComponentListsResponse::setGetComponentListsReturn()
     * @param \StructType\ListComponentArrayContainer $getComponentListsReturn
     */
    public function __construct(\StructType\ListComponentArrayContainer $getComponentListsReturn = null)
    {
        $this
            ->setGetComponentListsReturn($getComponentListsReturn);
    }
    /**
     * Get getComponentListsReturn value
     * @return \StructType\ListComponentArrayContainer|null
     */
    public function getGetComponentListsReturn()
    {
        return $this->getComponentListsReturn;
    }
    /**
     * Set getComponentListsReturn value
     * @param \StructType\ListComponentArrayContainer $getComponentListsReturn
     * @return \StructType\GetComponentListsResponse
     */
    public function setGetComponentListsReturn(\StructType\ListComponentArrayContainer $getComponentListsReturn = null)
    {
        $this->getComponentListsReturn = $getComponentListsReturn;
        return $this;
    }
}
