<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCompleteComponentV5Response StructType
 * @subpackage Structs
 */
class GetCompleteComponentV5Response extends AbstractStructBase
{
    /**
     * The getCompleteComponentV5Return
     * @var \StructType\CompleteComponentContainerV5
     */
    public $getCompleteComponentV5Return;
    /**
     * Constructor method for getCompleteComponentV5Response
     * @uses GetCompleteComponentV5Response::setGetCompleteComponentV5Return()
     * @param \StructType\CompleteComponentContainerV5 $getCompleteComponentV5Return
     */
    public function __construct(\StructType\CompleteComponentContainerV5 $getCompleteComponentV5Return = null)
    {
        $this
            ->setGetCompleteComponentV5Return($getCompleteComponentV5Return);
    }
    /**
     * Get getCompleteComponentV5Return value
     * @return \StructType\CompleteComponentContainerV5|null
     */
    public function getGetCompleteComponentV5Return()
    {
        return $this->getCompleteComponentV5Return;
    }
    /**
     * Set getCompleteComponentV5Return value
     * @param \StructType\CompleteComponentContainerV5 $getCompleteComponentV5Return
     * @return \StructType\GetCompleteComponentV5Response
     */
    public function setGetCompleteComponentV5Return(\StructType\CompleteComponentContainerV5 $getCompleteComponentV5Return = null)
    {
        $this->getCompleteComponentV5Return = $getCompleteComponentV5Return;
        return $this;
    }
}
