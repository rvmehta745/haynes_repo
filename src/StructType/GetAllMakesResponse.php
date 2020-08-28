<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAllMakesResponse StructType
 * @subpackage Structs
 */
class GetAllMakesResponse extends AbstractStructBase
{
    /**
     * The getAllMakesReturn
     * @var \StructType\MakeArrayContainer
     */
    public $getAllMakesReturn;
    /**
     * Constructor method for getAllMakesResponse
     * @uses GetAllMakesResponse::setGetAllMakesReturn()
     * @param \StructType\MakeArrayContainer $getAllMakesReturn
     */
    public function __construct(\StructType\MakeArrayContainer $getAllMakesReturn = null)
    {
        $this
            ->setGetAllMakesReturn($getAllMakesReturn);
    }
    /**
     * Get getAllMakesReturn value
     * @return \StructType\MakeArrayContainer|null
     */
    public function getGetAllMakesReturn()
    {
        return $this->getAllMakesReturn;
    }
    /**
     * Set getAllMakesReturn value
     * @param \StructType\MakeArrayContainer $getAllMakesReturn
     * @return \StructType\GetAllMakesResponse
     */
    public function setGetAllMakesReturn(\StructType\MakeArrayContainer $getAllMakesReturn = null)
    {
        $this->getAllMakesReturn = $getAllMakesReturn;
        return $this;
    }
}
