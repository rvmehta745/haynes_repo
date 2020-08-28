<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCompleteComponentV2Response StructType
 * @subpackage Structs
 */
class GetCompleteComponentV2Response extends AbstractStructBase
{
    /**
     * The getCompleteComponentV2Return
     * @var \StructType\CompleteComponentContainerV2
     */
    public $getCompleteComponentV2Return;
    /**
     * Constructor method for getCompleteComponentV2Response
     * @uses GetCompleteComponentV2Response::setGetCompleteComponentV2Return()
     * @param \StructType\CompleteComponentContainerV2 $getCompleteComponentV2Return
     */
    public function __construct(\StructType\CompleteComponentContainerV2 $getCompleteComponentV2Return = null)
    {
        $this
            ->setGetCompleteComponentV2Return($getCompleteComponentV2Return);
    }
    /**
     * Get getCompleteComponentV2Return value
     * @return \StructType\CompleteComponentContainerV2|null
     */
    public function getGetCompleteComponentV2Return()
    {
        return $this->getCompleteComponentV2Return;
    }
    /**
     * Set getCompleteComponentV2Return value
     * @param \StructType\CompleteComponentContainerV2 $getCompleteComponentV2Return
     * @return \StructType\GetCompleteComponentV2Response
     */
    public function setGetCompleteComponentV2Return(\StructType\CompleteComponentContainerV2 $getCompleteComponentV2Return = null)
    {
        $this->getCompleteComponentV2Return = $getCompleteComponentV2Return;
        return $this;
    }
}
