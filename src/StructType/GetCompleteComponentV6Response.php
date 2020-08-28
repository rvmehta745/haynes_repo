<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCompleteComponentV6Response StructType
 * @subpackage Structs
 */
class GetCompleteComponentV6Response extends AbstractStructBase
{
    /**
     * The getCompleteComponentV6Return
     * @var \StructType\CompleteComponentContainerV6
     */
    public $getCompleteComponentV6Return;
    /**
     * Constructor method for getCompleteComponentV6Response
     * @uses GetCompleteComponentV6Response::setGetCompleteComponentV6Return()
     * @param \StructType\CompleteComponentContainerV6 $getCompleteComponentV6Return
     */
    public function __construct(\StructType\CompleteComponentContainerV6 $getCompleteComponentV6Return = null)
    {
        $this
            ->setGetCompleteComponentV6Return($getCompleteComponentV6Return);
    }
    /**
     * Get getCompleteComponentV6Return value
     * @return \StructType\CompleteComponentContainerV6|null
     */
    public function getGetCompleteComponentV6Return()
    {
        return $this->getCompleteComponentV6Return;
    }
    /**
     * Set getCompleteComponentV6Return value
     * @param \StructType\CompleteComponentContainerV6 $getCompleteComponentV6Return
     * @return \StructType\GetCompleteComponentV6Response
     */
    public function setGetCompleteComponentV6Return(\StructType\CompleteComponentContainerV6 $getCompleteComponentV6Return = null)
    {
        $this->getCompleteComponentV6Return = $getCompleteComponentV6Return;
        return $this;
    }
}
