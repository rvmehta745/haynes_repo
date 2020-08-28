<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCarTypeByIdResponse StructType
 * @subpackage Structs
 */
class GetCarTypeByIdResponse extends AbstractStructBase
{
    /**
     * The getCarTypeByIdReturn
     * @var \StructType\ExtCarType
     */
    public $getCarTypeByIdReturn;
    /**
     * Constructor method for getCarTypeByIdResponse
     * @uses GetCarTypeByIdResponse::setGetCarTypeByIdReturn()
     * @param \StructType\ExtCarType $getCarTypeByIdReturn
     */
    public function __construct(\StructType\ExtCarType $getCarTypeByIdReturn = null)
    {
        $this
            ->setGetCarTypeByIdReturn($getCarTypeByIdReturn);
    }
    /**
     * Get getCarTypeByIdReturn value
     * @return \StructType\ExtCarType|null
     */
    public function getGetCarTypeByIdReturn()
    {
        return $this->getCarTypeByIdReturn;
    }
    /**
     * Set getCarTypeByIdReturn value
     * @param \StructType\ExtCarType $getCarTypeByIdReturn
     * @return \StructType\GetCarTypeByIdResponse
     */
    public function setGetCarTypeByIdReturn(\StructType\ExtCarType $getCarTypeByIdReturn = null)
    {
        $this->getCarTypeByIdReturn = $getCarTypeByIdReturn;
        return $this;
    }
}
