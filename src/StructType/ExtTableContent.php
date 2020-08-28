<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtTableContent StructType
 * @subpackage Structs
 */
class ExtTableContent extends AbstractStructBase
{
    /**
     * The numberOfColumns
     * @var int
     */
    public $numberOfColumns;
    /**
     * The numberOfRows
     * @var int
     */
    public $numberOfRows;
    /**
     * The tableCells
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtTableCells
     */
    public $tableCells;
    /**
     * Constructor method for ExtTableContent
     * @uses ExtTableContent::setNumberOfColumns()
     * @uses ExtTableContent::setNumberOfRows()
     * @uses ExtTableContent::setTableCells()
     * @param int $numberOfColumns
     * @param int $numberOfRows
     * @param \ArrayType\ArrayOfExtTableCells $tableCells
     */
    public function __construct($numberOfColumns = null, $numberOfRows = null, \ArrayType\ArrayOfExtTableCells $tableCells = null)
    {
        $this
            ->setNumberOfColumns($numberOfColumns)
            ->setNumberOfRows($numberOfRows)
            ->setTableCells($tableCells);
    }
    /**
     * Get numberOfColumns value
     * @return int|null
     */
    public function getNumberOfColumns()
    {
        return $this->numberOfColumns;
    }
    /**
     * Set numberOfColumns value
     * @param int $numberOfColumns
     * @return \StructType\ExtTableContent
     */
    public function setNumberOfColumns($numberOfColumns = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfColumns) && !(is_int($numberOfColumns) || ctype_digit($numberOfColumns))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfColumns, true), gettype($numberOfColumns)), __LINE__);
        }
        $this->numberOfColumns = $numberOfColumns;
        return $this;
    }
    /**
     * Get numberOfRows value
     * @return int|null
     */
    public function getNumberOfRows()
    {
        return $this->numberOfRows;
    }
    /**
     * Set numberOfRows value
     * @param int $numberOfRows
     * @return \StructType\ExtTableContent
     */
    public function setNumberOfRows($numberOfRows = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfRows) && !(is_int($numberOfRows) || ctype_digit($numberOfRows))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfRows, true), gettype($numberOfRows)), __LINE__);
        }
        $this->numberOfRows = $numberOfRows;
        return $this;
    }
    /**
     * Get tableCells value
     * @return \ArrayType\ArrayOfExtTableCells|null
     */
    public function getTableCells()
    {
        return $this->tableCells;
    }
    /**
     * Set tableCells value
     * @param \ArrayType\ArrayOfExtTableCells $tableCells
     * @return \StructType\ExtTableContent
     */
    public function setTableCells(\ArrayType\ArrayOfExtTableCells $tableCells = null)
    {
        $this->tableCells = $tableCells;
        return $this;
    }
}
