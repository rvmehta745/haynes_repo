<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceFormsResponse StructType
 * @subpackage Structs
 */
class GetMaintenanceFormsResponse extends AbstractStructBase
{
    /**
     * The getMaintenanceFormsReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStoryListContainerV2[]
     */
    public $getMaintenanceFormsReturn;
    /**
     * Constructor method for getMaintenanceFormsResponse
     * @uses GetMaintenanceFormsResponse::setGetMaintenanceFormsReturn()
     * @param \StructType\ExtStoryListContainerV2[] $getMaintenanceFormsReturn
     */
    public function __construct(array $getMaintenanceFormsReturn = array())
    {
        $this
            ->setGetMaintenanceFormsReturn($getMaintenanceFormsReturn);
    }
    /**
     * Get getMaintenanceFormsReturn value
     * @return \StructType\ExtStoryListContainerV2[]|null
     */
    public function getGetMaintenanceFormsReturn()
    {
        return $this->getMaintenanceFormsReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceFormsReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceFormsReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceFormsReturnForArrayConstraintsFromSetGetMaintenanceFormsReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceFormsResponseGetMaintenanceFormsReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceFormsResponseGetMaintenanceFormsReturnItem instanceof \StructType\ExtStoryListContainerV2) {
                $invalidValues[] = is_object($getMaintenanceFormsResponseGetMaintenanceFormsReturnItem) ? get_class($getMaintenanceFormsResponseGetMaintenanceFormsReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceFormsResponseGetMaintenanceFormsReturnItem), var_export($getMaintenanceFormsResponseGetMaintenanceFormsReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceFormsReturn property can only contain items of type \StructType\ExtStoryListContainerV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceFormsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryListContainerV2[] $getMaintenanceFormsReturn
     * @return \StructType\GetMaintenanceFormsResponse
     */
    public function setGetMaintenanceFormsReturn(array $getMaintenanceFormsReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceFormsReturnArrayErrorMessage = self::validateGetMaintenanceFormsReturnForArrayConstraintsFromSetGetMaintenanceFormsReturn($getMaintenanceFormsReturn))) {
            throw new \InvalidArgumentException($getMaintenanceFormsReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceFormsReturn = $getMaintenanceFormsReturn;
        return $this;
    }
    /**
     * Add item to getMaintenanceFormsReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStoryListContainerV2 $item
     * @return \StructType\GetMaintenanceFormsResponse
     */
    public function addToGetMaintenanceFormsReturn(\StructType\ExtStoryListContainerV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStoryListContainerV2) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceFormsReturn property can only contain items of type \StructType\ExtStoryListContainerV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceFormsReturn[] = $item;
        return $this;
    }
}
