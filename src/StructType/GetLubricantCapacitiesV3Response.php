<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getLubricantCapacitiesV3Response StructType
 * @subpackage Structs
 */
class GetLubricantCapacitiesV3Response extends AbstractStructBase
{
    /**
     * The getLubricantCapacitiesV3Return
     * @var \StructType\ExtAdjustmentV3
     */
    public $getLubricantCapacitiesV3Return;
    /**
     * Constructor method for getLubricantCapacitiesV3Response
     * @uses GetLubricantCapacitiesV3Response::setGetLubricantCapacitiesV3Return()
     * @param \StructType\ExtAdjustmentV3 $getLubricantCapacitiesV3Return
     */
    public function __construct(\StructType\ExtAdjustmentV3 $getLubricantCapacitiesV3Return = null)
    {
        $this
            ->setGetLubricantCapacitiesV3Return($getLubricantCapacitiesV3Return);
    }
    /**
     * Get getLubricantCapacitiesV3Return value
     * @return \StructType\ExtAdjustmentV3|null
     */
    public function getGetLubricantCapacitiesV3Return()
    {
        return $this->getLubricantCapacitiesV3Return;
    }
    /**
     * Set getLubricantCapacitiesV3Return value
     * @param \StructType\ExtAdjustmentV3 $getLubricantCapacitiesV3Return
     * @return \StructType\GetLubricantCapacitiesV3Response
     */
    public function setGetLubricantCapacitiesV3Return(\StructType\ExtAdjustmentV3 $getLubricantCapacitiesV3Return = null)
    {
        $this->getLubricantCapacitiesV3Return = $getLubricantCapacitiesV3Return;
        return $this;
    }
}
