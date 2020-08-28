<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSchemaLocations2Response StructType
 * @subpackage Structs
 */
class GetSchemaLocations2Response extends AbstractStructBase
{
    /**
     * The getSchemaLocations2Return
     * @var \StructType\ExtSchemaLocation2Container
     */
    public $getSchemaLocations2Return;
    /**
     * Constructor method for getSchemaLocations2Response
     * @uses GetSchemaLocations2Response::setGetSchemaLocations2Return()
     * @param \StructType\ExtSchemaLocation2Container $getSchemaLocations2Return
     */
    public function __construct(\StructType\ExtSchemaLocation2Container $getSchemaLocations2Return = null)
    {
        $this
            ->setGetSchemaLocations2Return($getSchemaLocations2Return);
    }
    /**
     * Get getSchemaLocations2Return value
     * @return \StructType\ExtSchemaLocation2Container|null
     */
    public function getGetSchemaLocations2Return()
    {
        return $this->getSchemaLocations2Return;
    }
    /**
     * Set getSchemaLocations2Return value
     * @param \StructType\ExtSchemaLocation2Container $getSchemaLocations2Return
     * @return \StructType\GetSchemaLocations2Response
     */
    public function setGetSchemaLocations2Return(\StructType\ExtSchemaLocation2Container $getSchemaLocations2Return = null)
    {
        $this->getSchemaLocations2Return = $getSchemaLocations2Return;
        return $this;
    }
}
