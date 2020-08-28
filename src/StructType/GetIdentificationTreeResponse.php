<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getIdentificationTreeResponse StructType
 * @subpackage Structs
 */
class GetIdentificationTreeResponse extends AbstractStructBase
{
    /**
     * The getIdentificationTreeReturn
     * @var \StructType\ExtWsIdentificationElement
     */
    public $getIdentificationTreeReturn;
    /**
     * Constructor method for getIdentificationTreeResponse
     * @uses GetIdentificationTreeResponse::setGetIdentificationTreeReturn()
     * @param \StructType\ExtWsIdentificationElement $getIdentificationTreeReturn
     */
    public function __construct(\StructType\ExtWsIdentificationElement $getIdentificationTreeReturn = null)
    {
        $this
            ->setGetIdentificationTreeReturn($getIdentificationTreeReturn);
    }
    /**
     * Get getIdentificationTreeReturn value
     * @return \StructType\ExtWsIdentificationElement|null
     */
    public function getGetIdentificationTreeReturn()
    {
        return $this->getIdentificationTreeReturn;
    }
    /**
     * Set getIdentificationTreeReturn value
     * @param \StructType\ExtWsIdentificationElement $getIdentificationTreeReturn
     * @return \StructType\GetIdentificationTreeResponse
     */
    public function setGetIdentificationTreeReturn(\StructType\ExtWsIdentificationElement $getIdentificationTreeReturn = null)
    {
        $this->getIdentificationTreeReturn = $getIdentificationTreeReturn;
        return $this;
    }
}
