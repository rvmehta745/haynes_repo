<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationImage StructType
 * @subpackage Structs
 */
class LocationImage extends AbstractStructBase
{
    /**
     * The height
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $height;
    /**
     * The imagePath
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $imagePath;
    /**
     * The size
     * @var int
     */
    public $size;
    /**
     * The width
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $width;
    /**
     * Constructor method for LocationImage
     * @uses LocationImage::setHeight()
     * @uses LocationImage::setImagePath()
     * @uses LocationImage::setSize()
     * @uses LocationImage::setWidth()
     * @param int $height
     * @param string $imagePath
     * @param int $size
     * @param int $width
     */
    public function __construct($height = null, $imagePath = null, $size = null, $width = null)
    {
        $this
            ->setHeight($height)
            ->setImagePath($imagePath)
            ->setSize($size)
            ->setWidth($width);
    }
    /**
     * Get height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param int $height
     * @return \StructType\LocationImage
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !(is_int($height) || ctype_digit($height))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;
        return $this;
    }
    /**
     * Get imagePath value
     * @return string|null
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }
    /**
     * Set imagePath value
     * @param string $imagePath
     * @return \StructType\LocationImage
     */
    public function setImagePath($imagePath = null)
    {
        // validation for constraint: string
        if (!is_null($imagePath) && !is_string($imagePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imagePath, true), gettype($imagePath)), __LINE__);
        }
        $this->imagePath = $imagePath;
        return $this;
    }
    /**
     * Get size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param int $size
     * @return \StructType\LocationImage
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->size = $size;
        return $this;
    }
    /**
     * Get width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param int $width
     * @return \StructType\LocationImage
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !(is_int($width) || ctype_digit($width))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;
        return $this;
    }
}
