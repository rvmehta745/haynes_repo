<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Table StructType
 * @subpackage Structs
 */
class Table extends AbstractStructBase
{
    /**
     * The header
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Row
     */
    public $header;
    /**
     * The rows
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOf_tns2_Row
     */
    public $rows;
    /**
     * Constructor method for Table
     * @uses Table::setHeader()
     * @uses Table::setRows()
     * @param \StructType\Row $header
     * @param \ArrayType\ArrayOf_tns2_Row $rows
     */
    public function __construct(\StructType\Row $header = null, \ArrayType\ArrayOf_tns2_Row $rows = null)
    {
        $this
            ->setHeader($header)
            ->setRows($rows);
    }
    /**
     * Get header value
     * @return \StructType\Row|null
     */
    public function getHeader()
    {
        return $this->header;
    }
    /**
     * Set header value
     * @param \StructType\Row $header
     * @return \StructType\Table
     */
    public function setHeader(\StructType\Row $header = null)
    {
        $this->header = $header;
        return $this;
    }
    /**
     * Get rows value
     * @return \ArrayType\ArrayOf_tns2_Row|null
     */
    public function getRows()
    {
        return $this->rows;
    }
    /**
     * Set rows value
     * @param \ArrayType\ArrayOf_tns2_Row $rows
     * @return \StructType\Table
     */
    public function setRows(\ArrayType\ArrayOf_tns2_Row $rows = null)
    {
        $this->rows = $rows;
        return $this;
    }
}
