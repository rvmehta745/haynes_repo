<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAllModelsResponse StructType
 * @subpackage Structs
 */
class GetAllModelsResponse extends AbstractStructBase
{
    /**
     * The getAllModelsReturn
     * @var \StructType\ModelArrayContainer
     */
    public $getAllModelsReturn;
    /**
     * Constructor method for getAllModelsResponse
     * @uses GetAllModelsResponse::setGetAllModelsReturn()
     * @param \StructType\ModelArrayContainer $getAllModelsReturn
     */
    public function __construct(\StructType\ModelArrayContainer $getAllModelsReturn = null)
    {
        $this
            ->setGetAllModelsReturn($getAllModelsReturn);
    }
    /**
     * Get getAllModelsReturn value
     * @return \StructType\ModelArrayContainer|null
     */
    public function getGetAllModelsReturn()
    {
        return $this->getAllModelsReturn;
    }
    /**
     * Set getAllModelsReturn value
     * @param \StructType\ModelArrayContainer $getAllModelsReturn
     * @return \StructType\GetAllModelsResponse
     */
    public function setGetAllModelsReturn(\StructType\ModelArrayContainer $getAllModelsReturn = null)
    {
        $this->getAllModelsReturn = $getAllModelsReturn;
        return $this;
    }
}
