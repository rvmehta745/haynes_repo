<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtRTSearchTree StructType
 * @subpackage Structs
 */
class ExtRTSearchTree extends AbstractStructBase
{
    /**
     * The desc
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $desc;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The nodes
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtRTSearchTree
     */
    public $nodes;
    /**
     * Constructor method for ExtRTSearchTree
     * @uses ExtRTSearchTree::setDesc()
     * @uses ExtRTSearchTree::setId()
     * @uses ExtRTSearchTree::setNodes()
     * @param string $desc
     * @param string $id
     * @param \ArrayType\ArrayOfExtRTSearchTree $nodes
     */
    public function __construct($desc = null, $id = null, \ArrayType\ArrayOfExtRTSearchTree $nodes = null)
    {
        $this
            ->setDesc($desc)
            ->setId($id)
            ->setNodes($nodes);
    }
    /**
     * Get desc value
     * @return string|null
     */
    public function getDesc()
    {
        return $this->desc;
    }
    /**
     * Set desc value
     * @param string $desc
     * @return \StructType\ExtRTSearchTree
     */
    public function setDesc($desc = null)
    {
        // validation for constraint: string
        if (!is_null($desc) && !is_string($desc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desc, true), gettype($desc)), __LINE__);
        }
        $this->desc = $desc;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\ExtRTSearchTree
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get nodes value
     * @return \ArrayType\ArrayOfExtRTSearchTree|null
     */
    public function getNodes()
    {
        return $this->nodes;
    }
    /**
     * Set nodes value
     * @param \ArrayType\ArrayOfExtRTSearchTree $nodes
     * @return \StructType\ExtRTSearchTree
     */
    public function setNodes(\ArrayType\ArrayOfExtRTSearchTree $nodes = null)
    {
        $this->nodes = $nodes;
        return $this;
    }
}
