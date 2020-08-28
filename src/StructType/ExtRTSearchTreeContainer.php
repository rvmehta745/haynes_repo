<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtRTSearchTreeContainer StructType
 * @subpackage Structs
 */
class ExtRTSearchTreeContainer extends AbstractStructBase
{
    /**
     * The searchTree
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRTSearchTree
     */
    public $searchTree;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for ExtRTSearchTreeContainer
     * @uses ExtRTSearchTreeContainer::setSearchTree()
     * @uses ExtRTSearchTreeContainer::setStatus()
     * @param \ArrayType\ArrayOfExtRTSearchTree $searchTree
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\ArrayType\ArrayOfExtRTSearchTree $searchTree = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setSearchTree($searchTree)
            ->setStatus($status);
    }
    /**
     * Get searchTree value
     * @return \ArrayType\ArrayOfExtRTSearchTree|null
     */
    public function getSearchTree()
    {
        return $this->searchTree;
    }
    /**
     * Set searchTree value
     * @param \ArrayType\ArrayOfExtRTSearchTree $searchTree
     * @return \StructType\ExtRTSearchTreeContainer
     */
    public function setSearchTree(\ArrayType\ArrayOfExtRTSearchTree $searchTree = null)
    {
        $this->searchTree = $searchTree;
        return $this;
    }
    /**
     * Get status value
     * @return \StructType\ExtStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \StructType\ExtStatus $status
     * @return \StructType\ExtRTSearchTreeContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
