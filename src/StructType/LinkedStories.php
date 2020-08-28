<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LinkedStories StructType
 * @subpackage Structs
 */
class LinkedStories extends AbstractStructBase
{
    /**
     * The categoryId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $categoryId;
    /**
     * The categoryName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $categoryName;
    /**
     * The stories
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \ArrayType\ArrayOfExtStoryLineV4
     */
    public $stories;
    /**
     * Constructor method for LinkedStories
     * @uses LinkedStories::setCategoryId()
     * @uses LinkedStories::setCategoryName()
     * @uses LinkedStories::setStories()
     * @param int $categoryId
     * @param string $categoryName
     * @param \ArrayType\ArrayOfExtStoryLineV4 $stories
     */
    public function __construct($categoryId = null, $categoryName = null, \ArrayType\ArrayOfExtStoryLineV4 $stories = null)
    {
        $this
            ->setCategoryId($categoryId)
            ->setCategoryName($categoryName)
            ->setStories($stories);
    }
    /**
     * Get categoryId value
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param int $categoryId
     * @return \StructType\LinkedStories
     */
    public function setCategoryId($categoryId = null)
    {
        // validation for constraint: int
        if (!is_null($categoryId) && !(is_int($categoryId) || ctype_digit($categoryId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryId, true), gettype($categoryId)), __LINE__);
        }
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * Get categoryName value
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }
    /**
     * Set categoryName value
     * @param string $categoryName
     * @return \StructType\LinkedStories
     */
    public function setCategoryName($categoryName = null)
    {
        // validation for constraint: string
        if (!is_null($categoryName) && !is_string($categoryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryName, true), gettype($categoryName)), __LINE__);
        }
        $this->categoryName = $categoryName;
        return $this;
    }
    /**
     * Get stories value
     * @return \ArrayType\ArrayOfExtStoryLineV4|null
     */
    public function getStories()
    {
        return $this->stories;
    }
    /**
     * Set stories value
     * @param \ArrayType\ArrayOfExtStoryLineV4 $stories
     * @return \StructType\LinkedStories
     */
    public function setStories(\ArrayType\ArrayOfExtStoryLineV4 $stories = null)
    {
        $this->stories = $stories;
        return $this;
    }
}
