<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCompleteComponentV3Response StructType
 * @subpackage Structs
 */
class GetCompleteComponentV3Response extends AbstractStructBase
{
    /**
     * The getCompleteComponentV3Return
     * @var \StructType\CompleteComponentContainerV3
     */
    public $getCompleteComponentV3Return;
    /**
     * Constructor method for getCompleteComponentV3Response
     * @uses GetCompleteComponentV3Response::setGetCompleteComponentV3Return()
     * @param \StructType\CompleteComponentContainerV3 $getCompleteComponentV3Return
     */
    public function __construct(\StructType\CompleteComponentContainerV3 $getCompleteComponentV3Return = null)
    {
        $this
            ->setGetCompleteComponentV3Return($getCompleteComponentV3Return);
    }
    /**
     * Get getCompleteComponentV3Return value
     * @return \StructType\CompleteComponentContainerV3|null
     */
    public function getGetCompleteComponentV3Return()
    {
        return $this->getCompleteComponentV3Return;
    }
    /**
     * Set getCompleteComponentV3Return value
     * @param \StructType\CompleteComponentContainerV3 $getCompleteComponentV3Return
     * @return \StructType\GetCompleteComponentV3Response
     */
    public function setGetCompleteComponentV3Return(\StructType\CompleteComponentContainerV3 $getCompleteComponentV3Return = null)
    {
        $this->getCompleteComponentV3Return = $getCompleteComponentV3Return;
        return $this;
    }
}
