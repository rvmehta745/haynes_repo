<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtMap StructType
 * @subpackage Structs
 */
class ExtMap extends AbstractStructBase
{
    /**
     * The mapItems
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtMapItem
     */
    public $mapItems;
    /**
     * Constructor method for ExtMap
     * @uses ExtMap::setMapItems()
     * @param \ArrayType\ArrayOfExtMapItem $mapItems
     */
    public function __construct(\ArrayType\ArrayOfExtMapItem $mapItems = null)
    {
        $this
            ->setMapItems($mapItems);
    }
    /**
     * Get mapItems value
     * @return \ArrayType\ArrayOfExtMapItem|null
     */
    public function getMapItems()
    {
        return $this->mapItems;
    }
    /**
     * Set mapItems value
     * @param \ArrayType\ArrayOfExtMapItem $mapItems
     * @return \StructType\ExtMap
     */
    public function setMapItems(\ArrayType\ArrayOfExtMapItem $mapItems = null)
    {
        $this->mapItems = $mapItems;
        return $this;
    }
}
