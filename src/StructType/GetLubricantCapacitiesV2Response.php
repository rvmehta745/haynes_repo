<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLubricantCapacitiesV2Response StructType
 * @subpackage Structs
 */
class GetLubricantCapacitiesV2Response extends AbstractStructBase
{
    /**
     * The getLubricantCapacitiesV2Return
     * @var \StructType\ExtAdjustment
     */
    public $getLubricantCapacitiesV2Return;
    /**
     * Constructor method for getLubricantCapacitiesV2Response
     * @uses GetLubricantCapacitiesV2Response::setGetLubricantCapacitiesV2Return()
     * @param \StructType\ExtAdjustment $getLubricantCapacitiesV2Return
     */
    public function __construct(\StructType\ExtAdjustment $getLubricantCapacitiesV2Return = null)
    {
        $this
            ->setGetLubricantCapacitiesV2Return($getLubricantCapacitiesV2Return);
    }
    /**
     * Get getLubricantCapacitiesV2Return value
     * @return \StructType\ExtAdjustment|null
     */
    public function getGetLubricantCapacitiesV2Return()
    {
        return $this->getLubricantCapacitiesV2Return;
    }
    /**
     * Set getLubricantCapacitiesV2Return value
     * @param \StructType\ExtAdjustment $getLubricantCapacitiesV2Return
     * @return \StructType\GetLubricantCapacitiesV2Response
     */
    public function setGetLubricantCapacitiesV2Return(\StructType\ExtAdjustment $getLubricantCapacitiesV2Return = null)
    {
        $this->getLubricantCapacitiesV2Return = $getLubricantCapacitiesV2Return;
        return $this;
    }
}
