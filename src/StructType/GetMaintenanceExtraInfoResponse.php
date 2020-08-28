<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMaintenanceExtraInfoResponse StructType
 * @subpackage Structs
 */
class GetMaintenanceExtraInfoResponse extends AbstractStructBase
{
    /**
     * The getMaintenanceExtraInfoReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtStory[]
     */
    public $getMaintenanceExtraInfoReturn;
    /**
     * Constructor method for getMaintenanceExtraInfoResponse
     * @uses GetMaintenanceExtraInfoResponse::setGetMaintenanceExtraInfoReturn()
     * @param \StructType\ExtStory[] $getMaintenanceExtraInfoReturn
     */
    public function __construct(array $getMaintenanceExtraInfoReturn = array())
    {
        $this
            ->setGetMaintenanceExtraInfoReturn($getMaintenanceExtraInfoReturn);
    }
    /**
     * Get getMaintenanceExtraInfoReturn value
     * @return \StructType\ExtStory[]|null
     */
    public function getGetMaintenanceExtraInfoReturn()
    {
        return $this->getMaintenanceExtraInfoReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMaintenanceExtraInfoReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMaintenanceExtraInfoReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMaintenanceExtraInfoReturnForArrayConstraintsFromSetGetMaintenanceExtraInfoReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMaintenanceExtraInfoResponseGetMaintenanceExtraInfoReturnItem) {
            // validation for constraint: itemType
            if (!$getMaintenanceExtraInfoResponseGetMaintenanceExtraInfoReturnItem instanceof \StructType\ExtStory) {
                $invalidValues[] = is_object($getMaintenanceExtraInfoResponseGetMaintenanceExtraInfoReturnItem) ? get_class($getMaintenanceExtraInfoResponseGetMaintenanceExtraInfoReturnItem) : sprintf('%s(%s)', gettype($getMaintenanceExtraInfoResponseGetMaintenanceExtraInfoReturnItem), var_export($getMaintenanceExtraInfoResponseGetMaintenanceExtraInfoReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMaintenanceExtraInfoReturn property can only contain items of type \StructType\ExtStory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMaintenanceExtraInfoReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStory[] $getMaintenanceExtraInfoReturn
     * @return \StructType\GetMaintenanceExtraInfoResponse
     */
    public function setGetMaintenanceExtraInfoReturn(array $getMaintenanceExtraInfoReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getMaintenanceExtraInfoReturnArrayErrorMessage = self::validateGetMaintenanceExtraInfoReturnForArrayConstraintsFromSetGetMaintenanceExtraInfoReturn($getMaintenanceExtraInfoReturn))) {
            throw new \InvalidArgumentException($getMaintenanceExtraInfoReturnArrayErrorMessage, __LINE__);
        }
        $this->getMaintenanceExtraInfoReturn = $getMaintenanceExtraInfoReturn;
        return $this;
    }
    /**
     * Add item to getMaintenanceExtraInfoReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtStory $item
     * @return \StructType\GetMaintenanceExtraInfoResponse
     */
    public function addToGetMaintenanceExtraInfoReturn(\StructType\ExtStory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtStory) {
            throw new \InvalidArgumentException(sprintf('The getMaintenanceExtraInfoReturn property can only contain items of type \StructType\ExtStory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMaintenanceExtraInfoReturn[] = $item;
        return $this;
    }
}
