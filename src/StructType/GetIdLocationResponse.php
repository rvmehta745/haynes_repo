<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getIdLocationResponse StructType
 * @subpackage Structs
 */
class GetIdLocationResponse extends AbstractStructBase
{
    /**
     * The getIdLocationReturn
     * @var \StructType\ExtIdLocation
     */
    public $getIdLocationReturn;
    /**
     * Constructor method for getIdLocationResponse
     * @uses GetIdLocationResponse::setGetIdLocationReturn()
     * @param \StructType\ExtIdLocation $getIdLocationReturn
     */
    public function __construct(\StructType\ExtIdLocation $getIdLocationReturn = null)
    {
        $this
            ->setGetIdLocationReturn($getIdLocationReturn);
    }
    /**
     * Get getIdLocationReturn value
     * @return \StructType\ExtIdLocation|null
     */
    public function getGetIdLocationReturn()
    {
        return $this->getIdLocationReturn;
    }
    /**
     * Set getIdLocationReturn value
     * @param \StructType\ExtIdLocation $getIdLocationReturn
     * @return \StructType\GetIdLocationResponse
     */
    public function setGetIdLocationReturn(\StructType\ExtIdLocation $getIdLocationReturn = null)
    {
        $this->getIdLocationReturn = $getIdLocationReturn;
        return $this;
    }
}
