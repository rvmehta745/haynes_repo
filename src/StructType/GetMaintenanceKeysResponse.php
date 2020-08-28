<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceKeysResponse StructType
 * @subpackage Structs
 */
class GetMaintenanceKeysResponse extends AbstractStructBase
{
    /**
     * The getMaintenanceKeysReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStory[]
     */
    public $getMaintenanceKeysReturn;
    /**
     * Constructor method for getMaintenanceKeysResponse
     * @uses GetMaintenanceKeysResponse::setGetMaintenanceKeysReturn()
     * @param \StructType\ExtStory[] $getMaintenanceKeysReturn
     */
    public function __construct(array $getMaintenanceKeysReturn = array())
    {
        $this
            ->setGetMaintenanceKeysReturn($getMaintenanceKeysReturn);
    }
    /**
     * Get getMaintenanceKeysReturn value
     * @return \StructType\ExtStory[]|null
     */
    public function getGetMaintenanceKeysReturn()
    {
        return $this->getMaintenanceKeysReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceKeysReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceKeysReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceKeysReturnForArrayConstraintsFromSetGetMaintenanceKeysReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceKeysResponseGetMaintenanceKeysReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceKeysResponseGetMaintenanceKeysReturnItem instanceof \StructType\ExtStory) {
                $invalidValues[] = is_object($getMaintenanceKeysResponseGetMaintenanceKeysReturnItem) ? get_class($getMaintenanceKeysResponseGetMaintenanceKeysReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceKeysResponseGetMaintenanceKeysReturnItem), var_export($getMaintenanceKeysResponseGetMaintenanceKeysReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceKeysReturn property can only contain items of type \StructType\ExtStory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceKeysReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStory[] $getMaintenanceKeysReturn
     * @return \StructType\GetMaintenanceKeysResponse
     */
    public function setGetMaintenanceKeysReturn(array $getMaintenanceKeysReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceKeysReturnArrayErrorMessage = self::validateGetMaintenanceKeysReturnForArrayConstraintsFromSetGetMaintenanceKeysReturn($getMaintenanceKeysReturn))) {
            throw new \InvalidArgumentException($getMaintenanceKeysReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceKeysReturn = $getMaintenanceKeysReturn;
        return $this;
    }
    /**
     * Add item to getMaintenanceKeysReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStory $item
     * @return \StructType\GetMaintenanceKeysResponse
     */
    public function addToGetMaintenanceKeysReturn(\StructType\ExtStory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStory) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceKeysReturn property can only contain items of type \StructType\ExtStory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceKeysReturn[] = $item;
        return $this;
    }
}
