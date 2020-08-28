<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiagnosisStepV2 StructType
 * @subpackage Structs
 */
class DiagnosisStepV2 extends AbstractStructBase
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
     * @var \StructType\DiagnosisStepV2
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
     * The toolParameters
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtDiagramToolParameters
     */
    public $toolParameters;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The wirediagramLink
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $wirediagramLink;
    /**
     * The yesAnswer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\DiagnosisStepV2
     */
    public $yesAnswer;
    /**
     * Constructor method for DiagnosisStepV2
     * @uses DiagnosisStepV2::setFlashVarsString()
     * @uses DiagnosisStepV2::setGraph()
     * @uses DiagnosisStepV2::setName()
     * @uses DiagnosisStepV2::setNoAnswer()
     * @uses DiagnosisStepV2::setSortOrder()
     * @uses DiagnosisStepV2::setTable()
     * @uses DiagnosisStepV2::setText()
     * @uses DiagnosisStepV2::setTitle()
     * @uses DiagnosisStepV2::setToolParameters()
     * @uses DiagnosisStepV2::setType()
     * @uses DiagnosisStepV2::setWirediagramLink()
     * @uses DiagnosisStepV2::setYesAnswer()
     * @param string $flashVarsString
     * @param \StructType\Graph $graph
     * @param string $name
     * @param \StructType\DiagnosisStepV2 $noAnswer
     * @param int $sortOrder
     * @param \StructType\Table $table
     * @param string $text
     * @param string $title
     * @param \StructType\ExtDiagramToolParameters $toolParameters
     * @param string $type
     * @param string $wirediagramLink
     * @param \StructType\DiagnosisStepV2 $yesAnswer
     */
    public function __construct($flashVarsString = null, \StructType\Graph $graph = null, $name = null, \StructType\DiagnosisStepV2 $noAnswer = null, $sortOrder = null, \StructType\Table $table = null, $text = null, $title = null, \StructType\ExtDiagramToolParameters $toolParameters = null, $type = null, $wirediagramLink = null, \StructType\DiagnosisStepV2 $yesAnswer = null)
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
            ->setToolParameters($toolParameters)
            ->setType($type)
            ->setWirediagramLink($wirediagramLink)
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
     * @return \StructType\DiagnosisStepV2
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
     * @return \StructType\DiagnosisStepV2
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
     * @return \StructType\DiagnosisStepV2
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
     * @return \StructType\DiagnosisStepV2|null
     */
    public function getNoAnswer()
    {
        return $this->noAnswer;
    }
    /**
     * Set noAnswer value
     * @param \StructType\DiagnosisStepV2 $noAnswer
     * @return \StructType\DiagnosisStepV2
     */
    public function setNoAnswer(\StructType\DiagnosisStepV2 $noAnswer = null)
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
     * @return \StructType\DiagnosisStepV2
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
     * @return \StructType\DiagnosisStepV2
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
     * @return \StructType\DiagnosisStepV2
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
     * @return \StructType\DiagnosisStepV2
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
     * Get toolParameters value
     * @return \StructType\ExtDiagramToolParameters|null
     */
    public function getToolParameters()
    {
        return $this->toolParameters;
    }
    /**
     * Set toolParameters value
     * @param \StructType\ExtDiagramToolParameters $toolParameters
     * @return \StructType\DiagnosisStepV2
     */
    public function setToolParameters(\StructType\ExtDiagramToolParameters $toolParameters = null)
    {
        $this->toolParameters = $toolParameters;
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
     * @return \StructType\DiagnosisStepV2
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
     * Get wirediagramLink value
     * @return string|null
     */
    public function getWirediagramLink()
    {
        return $this->wirediagramLink;
    }
    /**
     * Set wirediagramLink value
     * @param string $wirediagramLink
     * @return \StructType\DiagnosisStepV2
     */
    public function setWirediagramLink($wirediagramLink = null)
    {
        // validation for constraint: string
        if (!is_null($wirediagramLink) && !is_string($wirediagramLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wirediagramLink, true), gettype($wirediagramLink)), __LINE__);
        }
        $this->wirediagramLink = $wirediagramLink;
        return $this;
    }
    /**
     * Get yesAnswer value
     * @return \StructType\DiagnosisStepV2|null
     */
    public function getYesAnswer()
    {
        return $this->yesAnswer;
    }
    /**
     * Set yesAnswer value
     * @param \StructType\DiagnosisStepV2 $yesAnswer
     * @return \StructType\DiagnosisStepV2
     */
    public function setYesAnswer(\StructType\DiagnosisStepV2 $yesAnswer = null)
    {
        $this->yesAnswer = $yesAnswer;
        return $this;
    }
}
