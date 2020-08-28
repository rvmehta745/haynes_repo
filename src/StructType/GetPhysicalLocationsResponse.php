<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPhysicalLocationsResponse StructType
 * @subpackage Structs
 */
class GetPhysicalLocationsResponse extends AbstractStructBase
{
    /**
     * The getPhysicalLocationsReturn
     * @var \StructType\ExtPhysicalLocationGroup
     */
    public $getPhysicalLocationsReturn;
    /**
     * Constructor method for getPhysicalLocationsResponse
     * @uses GetPhysicalLocationsResponse::setGetPhysicalLocationsReturn()
     * @param \StructType\ExtPhysicalLocationGroup $getPhysicalLocationsReturn
     */
    public function __construct(\StructType\ExtPhysicalLocationGroup $getPhysicalLocationsReturn = null)
    {
        $this
            ->setGetPhysicalLocationsReturn($getPhysicalLocationsReturn);
    }
    /**
     * Get getPhysicalLocationsReturn value
     * @return \StructType\ExtPhysicalLocationGroup|null
     */
    public function getGetPhysicalLocationsReturn()
    {
        return $this->getPhysicalLocationsReturn;
    }
    /**
     * Set getPhysicalLocationsReturn value
     * @param \StructType\ExtPhysicalLocationGroup $getPhysicalLocationsReturn
     * @return \StructType\GetPhysicalLocationsResponse
     */
    public function setGetPhysicalLocationsReturn(\StructType\ExtPhysicalLocationGroup $getPhysicalLocationsReturn = null)
    {
        $this->getPhysicalLocationsReturn = $getPhysicalLocationsReturn;
        return $this;
    }
}
