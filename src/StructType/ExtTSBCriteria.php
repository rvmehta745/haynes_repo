<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtTSBCriteria StructType
 * @subpackage Structs
 */
class ExtTSBCriteria extends AbstractStructBase
{
    /**
     * The values
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtMapItem
     */
    public $values;
    /**
     * Constructor method for ExtTSBCriteria
     * @uses ExtTSBCriteria::setValues()
     * @param \ArrayType\ArrayOfExtMapItem $values
     */
    public function __construct(\ArrayType\ArrayOfExtMapItem $values = null)
    {
        $this
            ->setValues($values);
    }
    /**
     * Get values value
     * @return \ArrayType\ArrayOfExtMapItem|null
     */
    public function getValues()
    {
        return $this->values;
    }
    /**
     * Set values value
     * @param \ArrayType\ArrayOfExtMapItem $values
     * @return \StructType\ExtTSBCriteria
     */
    public function setValues(\ArrayType\ArrayOfExtMapItem $values = null)
    {
        $this->values = $values;
        return $this;
    }
}
