<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAllTypesResponse StructType
 * @subpackage Structs
 */
class GetAllTypesResponse extends AbstractStructBase
{
    /**
     * The getAllTypesReturn
     * @var \StructType\TypeArrayContainer
     */
    public $getAllTypesReturn;
    /**
     * Constructor method for getAllTypesResponse
     * @uses GetAllTypesResponse::setGetAllTypesReturn()
     * @param \StructType\TypeArrayContainer $getAllTypesReturn
     */
    public function __construct(\StructType\TypeArrayContainer $getAllTypesReturn = null)
    {
        $this
            ->setGetAllTypesReturn($getAllTypesReturn);
    }
    /**
     * Get getAllTypesReturn value
     * @return \StructType\TypeArrayContainer|null
     */
    public function getGetAllTypesReturn()
    {
        return $this->getAllTypesReturn;
    }
    /**
     * Set getAllTypesReturn value
     * @param \StructType\TypeArrayContainer $getAllTypesReturn
     * @return \StructType\GetAllTypesResponse
     */
    public function setGetAllTypesReturn(\StructType\TypeArrayContainer $getAllTypesReturn = null)
    {
        $this->getAllTypesReturn = $getAllTypesReturn;
        return $this;
    }
}
