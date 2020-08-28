<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceServiceResetResponse StructType
 * @subpackage Structs
 */
class GetMaintenanceServiceResetResponse extends AbstractStructBase
{
    /**
     * The getMaintenanceServiceResetReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStory[]
     */
    public $getMaintenanceServiceResetReturn;
    /**
     * Constructor method for getMaintenanceServiceResetResponse
     * @uses GetMaintenanceServiceResetResponse::setGetMaintenanceServiceResetReturn()
     * @param \StructType\ExtStory[] $getMaintenanceServiceResetReturn
     */
    public function __construct(array $getMaintenanceServiceResetReturn = array())
    {
        $this
            ->setGetMaintenanceServiceResetReturn($getMaintenanceServiceResetReturn);
    }
    /**
     * Get getMaintenanceServiceResetReturn value
     * @return \StructType\ExtStory[]|null
     */
    public function getGetMaintenanceServiceResetReturn()
    {
        return $this->getMaintenanceServiceResetReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceServiceResetReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceServiceResetReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceServiceResetReturnForArrayConstraintsFromSetGetMaintenanceServiceResetReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceServiceResetResponseGetMaintenanceServiceResetReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceServiceResetResponseGetMaintenanceServiceResetReturnItem instanceof \StructType\ExtStory) {
                $invalidValues[] = is_object($getMaintenanceServiceResetResponseGetMaintenanceServiceResetReturnItem) ? get_class($getMaintenanceServiceResetResponseGetMaintenanceServiceResetReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceServiceResetResponseGetMaintenanceServiceResetReturnItem), var_export($getMaintenanceServiceResetResponseGetMaintenanceServiceResetReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceServiceResetReturn property can only contain items of type \StructType\ExtStory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceServiceResetReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStory[] $getMaintenanceServiceResetReturn
     * @return \StructType\GetMaintenanceServiceResetResponse
     */
    public function setGetMaintenanceServiceResetReturn(array $getMaintenanceServiceResetReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceServiceResetReturnArrayErrorMessage = self::validateGetMaintenanceServiceResetReturnForArrayConstraintsFromSetGetMaintenanceServiceResetReturn($getMaintenanceServiceResetReturn))) {
            throw new \InvalidArgumentException($getMaintenanceServiceResetReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceServiceResetReturn = $getMaintenanceServiceResetReturn;
        return $this;
    }
    /**
     * Add item to getMaintenanceServiceResetReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStory $item
     * @return \StructType\GetMaintenanceServiceResetResponse
     */
    public function addToGetMaintenanceServiceResetReturn(\StructType\ExtStory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStory) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceServiceResetReturn property can only contain items of type \StructType\ExtStory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceServiceResetReturn[] = $item;
        return $this;
    }
}
