<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLubricantCapacitiesByGrpupV2Response StructType
 * @subpackage Structs
 */
class GetLubricantCapacitiesByGrpupV2Response extends AbstractStructBase
{
    /**
     * The getLubricantCapacitiesByGrpupV2Return
     * @var \StructType\ExtAdjustment
     */
    public $getLubricantCapacitiesByGrpupV2Return;
    /**
     * Constructor method for getLubricantCapacitiesByGrpupV2Response
     * @uses GetLubricantCapacitiesByGrpupV2Response::setGetLubricantCapacitiesByGrpupV2Return()
     * @param \StructType\ExtAdjustment $getLubricantCapacitiesByGrpupV2Return
     */
    public function __construct(\StructType\ExtAdjustment $getLubricantCapacitiesByGrpupV2Return = null)
    {
        $this
            ->setGetLubricantCapacitiesByGrpupV2Return($getLubricantCapacitiesByGrpupV2Return);
    }
    /**
     * Get getLubricantCapacitiesByGrpupV2Return value
     * @return \StructType\ExtAdjustment|null
     */
    public function getGetLubricantCapacitiesByGrpupV2Return()
    {
        return $this->getLubricantCapacitiesByGrpupV2Return;
    }
    /**
     * Set getLubricantCapacitiesByGrpupV2Return value
     * @param \StructType\ExtAdjustment $getLubricantCapacitiesByGrpupV2Return
     * @return \StructType\GetLubricantCapacitiesByGrpupV2Response
     */
    public function setGetLubricantCapacitiesByGrpupV2Return(\StructType\ExtAdjustment $getLubricantCapacitiesByGrpupV2Return = null)
    {
        $this->getLubricantCapacitiesByGrpupV2Return = $getLubricantCapacitiesByGrpupV2Return;
        return $this;
    }
}
