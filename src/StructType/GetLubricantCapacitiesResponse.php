<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLubricantCapacitiesResponse StructType
 * @subpackage Structs
 */
class GetLubricantCapacitiesResponse extends AbstractStructBase
{
    /**
     * The getLubricantCapacitiesReturn
     * @var \StructType\ExtAdjustment
     */
    public $getLubricantCapacitiesReturn;
    /**
     * Constructor method for getLubricantCapacitiesResponse
     * @uses GetLubricantCapacitiesResponse::setGetLubricantCapacitiesReturn()
     * @param \StructType\ExtAdjustment $getLubricantCapacitiesReturn
     */
    public function __construct(\StructType\ExtAdjustment $getLubricantCapacitiesReturn = null)
    {
        $this
            ->setGetLubricantCapacitiesReturn($getLubricantCapacitiesReturn);
    }
    /**
     * Get getLubricantCapacitiesReturn value
     * @return \StructType\ExtAdjustment|null
     */
    public function getGetLubricantCapacitiesReturn()
    {
        return $this->getLubricantCapacitiesReturn;
    }
    /**
     * Set getLubricantCapacitiesReturn value
     * @param \StructType\ExtAdjustment $getLubricantCapacitiesReturn
     * @return \StructType\GetLubricantCapacitiesResponse
     */
    public function setGetLubricantCapacitiesReturn(\StructType\ExtAdjustment $getLubricantCapacitiesReturn = null)
    {
        $this->getLubricantCapacitiesReturn = $getLubricantCapacitiesReturn;
        return $this;
    }
}
