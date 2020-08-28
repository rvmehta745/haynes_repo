<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSpecificTypeResponse StructType
 * @subpackage Structs
 */
class GetSpecificTypeResponse extends AbstractStructBase
{
    /**
     * The getSpecificTypeReturn
     * @var \StructType\TypeContainer
     */
    public $getSpecificTypeReturn;
    /**
     * Constructor method for getSpecificTypeResponse
     * @uses GetSpecificTypeResponse::setGetSpecificTypeReturn()
     * @param \StructType\TypeContainer $getSpecificTypeReturn
     */
    public function __construct(\StructType\TypeContainer $getSpecificTypeReturn = null)
    {
        $this
            ->setGetSpecificTypeReturn($getSpecificTypeReturn);
    }
    /**
     * Get getSpecificTypeReturn value
     * @return \StructType\TypeContainer|null
     */
    public function getGetSpecificTypeReturn()
    {
        return $this->getSpecificTypeReturn;
    }
    /**
     * Set getSpecificTypeReturn value
     * @param \StructType\TypeContainer $getSpecificTypeReturn
     * @return \StructType\GetSpecificTypeResponse
     */
    public function setGetSpecificTypeReturn(\StructType\TypeContainer $getSpecificTypeReturn = null)
    {
        $this->getSpecificTypeReturn = $getSpecificTypeReturn;
        return $this;
    }
}
