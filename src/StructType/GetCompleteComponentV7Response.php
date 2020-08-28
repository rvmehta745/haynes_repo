<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCompleteComponentV7Response StructType
 * @subpackage Structs
 */
class GetCompleteComponentV7Response extends AbstractStructBase
{
    /**
     * The getCompleteComponentV7Return
     * @var \StructType\CompleteComponentContainerV7
     */
    public $getCompleteComponentV7Return;
    /**
     * Constructor method for getCompleteComponentV7Response
     * @uses GetCompleteComponentV7Response::setGetCompleteComponentV7Return()
     * @param \StructType\CompleteComponentContainerV7 $getCompleteComponentV7Return
     */
    public function __construct(\StructType\CompleteComponentContainerV7 $getCompleteComponentV7Return = null)
    {
        $this
            ->setGetCompleteComponentV7Return($getCompleteComponentV7Return);
    }
    /**
     * Get getCompleteComponentV7Return value
     * @return \StructType\CompleteComponentContainerV7|null
     */
    public function getGetCompleteComponentV7Return()
    {
        return $this->getCompleteComponentV7Return;
    }
    /**
     * Set getCompleteComponentV7Return value
     * @param \StructType\CompleteComponentContainerV7 $getCompleteComponentV7Return
     * @return \StructType\GetCompleteComponentV7Response
     */
    public function setGetCompleteComponentV7Return(\StructType\CompleteComponentContainerV7 $getCompleteComponentV7Return = null)
    {
        $this->getCompleteComponentV7Return = $getCompleteComponentV7Return;
        return $this;
    }
}
