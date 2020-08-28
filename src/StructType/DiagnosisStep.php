<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiagnosisStep StructType
 * @subpackage Structs
 */
class DiagnosisStep extends AbstractStructBase
{
    /**
     * The flashVarsString
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $flashVarsString;
    /**
     * The graph
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Graph
     */
    public $graph;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The noAnswer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\DiagnosisStep
     */
    public $noAnswer;
    /**
     * The sortOrder
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $sortOrder;
    /**
     * The table
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\Table
     */
    public $table;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $text;
    /**
     * The title
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $title;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The wirediagram2
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\WireDiagram2
     */
    public $wirediagram2;
    /**
     * The yesAnswer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\DiagnosisStep
     */
    public $yesAnswer;
    /**
     * Constructor method for DiagnosisStep
     * @uses DiagnosisStep::setFlashVarsString()
     * @uses DiagnosisStep::setGraph()
     * @uses DiagnosisStep::setName()
     * @uses DiagnosisStep::setNoAnswer()
     * @uses DiagnosisStep::setSortOrder()
     * @uses DiagnosisStep::setTable()
     * @uses DiagnosisStep::setText()
     * @uses DiagnosisStep::setTitle()
     * @uses DiagnosisStep::setType()
     * @uses DiagnosisStep::setWirediagram2()
     * @uses DiagnosisStep::setYesAnswer()
     * @param string $flashVarsString
     * @param \StructType\Graph $graph
     * @param string $name
     * @param \StructType\DiagnosisStep $noAnswer
     * @param int $sortOrder
     * @param \StructType\Table $table
     * @param string $text
     * @param string $title
     * @param string $type
     * @param \StructType\WireDiagram2 $wirediagram2
     * @param \StructType\DiagnosisStep $yesAnswer
     */
    public function __construct($flashVarsString = null, \StructType\Graph $graph = null, $name = null, \StructType\DiagnosisStep $noAnswer = null, $sortOrder = null, \StructType\Table $table = null, $text = null, $title = null, $type = null, \StructType\WireDiagram2 $wirediagram2 = null, \StructType\DiagnosisStep $yesAnswer = null)
    {
        $this
            ->setFlashVarsString($flashVarsString)
            ->setGraph($graph)
            ->setName($name)
            ->setNoAnswer($noAnswer)
            ->setSortOrder($sortOrder)
            ->setTable($table)
            ->setText($text)
            ->setTitle($title)
            ->setType($type)
            ->setWirediagram2($wirediagram2)
            ->setYesAnswer($yesAnswer);
    }
    /**
     * Get flashVarsString value
     * @return string|null
     */
    public function getFlashVarsString()
    {
        return $this->flashVarsString;
    }
    /**
     * Set flashVarsString value
     * @param string $flashVarsString
     * @return \StructType\DiagnosisStep
     */
    public function setFlashVarsString($flashVarsString = null)
    {
        // validation for constraint: string
        if (!is_null($flashVarsString) && !is_string($flashVarsString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flashVarsString, true), gettype($flashVarsString)), __LINE__);
        }
        $this->flashVarsString = $flashVarsString;
        return $this;
    }
    /**
     * Get graph value
     * @return \StructType\Graph|null
     */
    public function getGraph()
    {
        return $this->graph;
    }
    /**
     * Set graph value
     * @param \StructType\Graph $graph
     * @return \StructType\DiagnosisStep
     */
    public function setGraph(\StructType\Graph $graph = null)
    {
        $this->graph = $graph;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\DiagnosisStep
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get noAnswer value
     * @return \StructType\DiagnosisStep|null
     */
    public function getNoAnswer()
    {
        return $this->noAnswer;
    }
    /**
     * Set noAnswer value
     * @param \StructType\DiagnosisStep $noAnswer
     * @return \StructType\DiagnosisStep
     */
    public function setNoAnswer(\StructType\DiagnosisStep $noAnswer = null)
    {
        $this->noAnswer = $noAnswer;
        return $this;
    }
    /**
     * Get sortOrder value
     * @return int|null
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
    /**
     * Set sortOrder value
     * @param int $sortOrder
     * @return \StructType\DiagnosisStep
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: int
        if (!is_null($sortOrder) && !(is_int($sortOrder) || ctype_digit($sortOrder))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortOrder, true), gettype($sortOrder)), __LINE__);
        }
        $this->sortOrder = $sortOrder;
        return $this;
    }
    /**
     * Get table value
     * @return \StructType\Table|null
     */
    public function getTable()
    {
        return $this->table;
    }
    /**
     * Set table value
     * @param \StructType\Table $table
     * @return \StructType\DiagnosisStep
     */
    public function setTable(\StructType\Table $table = null)
    {
        $this->table = $table;
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \StructType\DiagnosisStep
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \StructType\DiagnosisStep
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \StructType\DiagnosisStep
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get wirediagram2 value
     * @return \StructType\WireDiagram2|null
     */
    public function getWirediagram2()
    {
        return $this->wirediagram2;
    }
    /**
     * Set wirediagram2 value
     * @param \StructType\WireDiagram2 $wirediagram2
     * @return \StructType\DiagnosisStep
     */
    public function setWirediagram2(\StructType\WireDiagram2 $wirediagram2 = null)
    {
        $this->wirediagram2 = $wirediagram2;
        return $this;
    }
    /**
     * Get yesAnswer value
     * @return \StructType\DiagnosisStep|null
     */
    public function getYesAnswer()
    {
        return $this->yesAnswer;
    }
    /**
     * Set yesAnswer value
     * @param \StructType\DiagnosisStep $yesAnswer
     * @return \StructType\DiagnosisStep
     */
    public function setYesAnswer(\StructType\DiagnosisStep $yesAnswer = null)
    {
        $this->yesAnswer = $yesAnswer;
        return $this;
    }
}
