<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiagnosisConnectorLocImageContainer StructType
 * @subpackage Structs
 */
class DiagnosisConnectorLocImageContainer extends AbstractStructBase
{
    /**
     * The image
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\LocationImage
     */
    public $image;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\ExtStatus
     */
    public $status;
    /**
     * Constructor method for DiagnosisConnectorLocImageContainer
     * @uses DiagnosisConnectorLocImageContainer::setImage()
     * @uses DiagnosisConnectorLocImageContainer::setStatus()
     * @param \StructType\LocationImage $image
     * @param \StructType\ExtStatus $status
     */
    public function __construct(\StructType\LocationImage $image = null, \StructType\ExtStatus $status = null)
    {
        $this
            ->setImage($image)
            ->setStatus($status);
    }
    /**
     * Get image value
     * @return \StructType\LocationImage|null
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * Set image value
     * @param \StructType\LocationImage $image
     * @return \StructType\DiagnosisConnectorLocImageContainer
     */
    public function setImage(\StructType\LocationImage $image = null)
    {
        $this->image = $image;
        return $this;
    }
    /**
     * Get status value
     * @return \StructType\ExtStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param \StructType\ExtStatus $status
     * @return \StructType\DiagnosisConnectorLocImageContainer
     */
    public function setStatus(\StructType\ExtStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
}
