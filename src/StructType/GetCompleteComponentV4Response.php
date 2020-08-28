<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCompleteComponentV4Response StructType
 * @subpackage Structs
 */
class GetCompleteComponentV4Response extends AbstractStructBase
{
    /**
     * The getCompleteComponentV4Return
     * @var \StructType\CompleteComponentContainerV4
     */
    public $getCompleteComponentV4Return;
    /**
     * Constructor method for getCompleteComponentV4Response
     * @uses GetCompleteComponentV4Response::setGetCompleteComponentV4Return()
     * @param \StructType\CompleteComponentContainerV4 $getCompleteComponentV4Return
     */
    public function __construct(\StructType\CompleteComponentContainerV4 $getCompleteComponentV4Return = null)
    {
        $this
            ->setGetCompleteComponentV4Return($getCompleteComponentV4Return);
    }
    /**
     * Get getCompleteComponentV4Return value
     * @return \StructType\CompleteComponentContainerV4|null
     */
    public function getGetCompleteComponentV4Return()
    {
        return $this->getCompleteComponentV4Return;
    }
    /**
     * Set getCompleteComponentV4Return value
     * @param \StructType\CompleteComponentContainerV4 $getCompleteComponentV4Return
     * @return \StructType\GetCompleteComponentV4Response
     */
    public function setGetCompleteComponentV4Return(\StructType\CompleteComponentContainerV4 $getCompleteComponentV4Return = null)
    {
        $this->getCompleteComponentV4Return = $getCompleteComponentV4Return;
        return $this;
    }
}
