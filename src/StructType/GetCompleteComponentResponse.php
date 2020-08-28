<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCompleteComponentResponse StructType
 * @subpackage Structs
 */
class GetCompleteComponentResponse extends AbstractStructBase
{
    /**
     * The getCompleteComponentReturn
     * @var \StructType\CompleteComponentContainer
     */
    public $getCompleteComponentReturn;
    /**
     * Constructor method for getCompleteComponentResponse
     * @uses GetCompleteComponentResponse::setGetCompleteComponentReturn()
     * @param \StructType\CompleteComponentContainer $getCompleteComponentReturn
     */
    public function __construct(\StructType\CompleteComponentContainer $getCompleteComponentReturn = null)
    {
        $this
            ->setGetCompleteComponentReturn($getCompleteComponentReturn);
    }
    /**
     * Get getCompleteComponentReturn value
     * @return \StructType\CompleteComponentContainer|null
     */
    public function getGetCompleteComponentReturn()
    {
        return $this->getCompleteComponentReturn;
    }
    /**
     * Set getCompleteComponentReturn value
     * @param \StructType\CompleteComponentContainer $getCompleteComponentReturn
     * @return \StructType\GetCompleteComponentResponse
     */
    public function setGetCompleteComponentReturn(\StructType\CompleteComponentContainer $getCompleteComponentReturn = null)
    {
        $this->getCompleteComponentReturn = $getCompleteComponentReturn;
        return $this;
    }
}
