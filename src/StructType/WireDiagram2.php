<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WireDiagram2 StructType
 * @subpackage Structs
 */
class WireDiagram2 extends AbstractStructBase
{
    /**
     * The nodeArray
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_WirediagramNode2
     */
    public $nodeArray;
    /**
     * Constructor method for WireDiagram2
     * @uses WireDiagram2::setNodeArray()
     * @param \ArrayType\ArrayOf_tns2_WirediagramNode2 $nodeArray
     */
    public function __construct(\ArrayType\ArrayOf_tns2_WirediagramNode2 $nodeArray = null)
    {
        $this
            ->setNodeArray($nodeArray);
    }
    /**
     * Get nodeArray value
     * @return \ArrayType\ArrayOf_tns2_WirediagramNode2|null
     */
    public function getNodeArray()
    {
        return $this->nodeArray;
    }
    /**
     * Set nodeArray value
     * @param \ArrayType\ArrayOf_tns2_WirediagramNode2 $nodeArray
     * @return \StructType\WireDiagram2
     */
    public function setNodeArray(\ArrayType\ArrayOf_tns2_WirediagramNode2 $nodeArray = null)
    {
        $this->nodeArray = $nodeArray;
        return $this;
    }
}
