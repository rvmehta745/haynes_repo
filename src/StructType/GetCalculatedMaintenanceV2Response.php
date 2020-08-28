<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCalculatedMaintenanceV2Response StructType
 * @subpackage Structs
 */
class GetCalculatedMaintenanceV2Response extends AbstractStructBase
{
    /**
     * The getCalculatedMaintenanceV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtMaintenanceCalculatedV2[]
     */
    public $getCalculatedMaintenanceV2Return;
    /**
     * Constructor method for getCalculatedMaintenanceV2Response
     * @uses GetCalculatedMaintenanceV2Response::setGetCalculatedMaintenanceV2Return()
     * @param \StructType\ExtMaintenanceCalculatedV2[] $getCalculatedMaintenanceV2Return
     */
    public function __construct(array $getCalculatedMaintenanceV2Return = array())
    {
        $this
            ->setGetCalculatedMaintenanceV2Return($getCalculatedMaintenanceV2Return);
    }
    /**
     * Get getCalculatedMaintenanceV2Return value
     * @return \StructType\ExtMaintenanceCalculatedV2[]|null
     */
    public function getGetCalculatedMaintenanceV2Return()
    {
        return $this->getCalculatedMaintenanceV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetCalculatedMaintenanceV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetCalculatedMaintenanceV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetCalculatedMaintenanceV2ReturnForArrayConstraintsFromSetGetCalculatedMaintenanceV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCalculatedMaintenanceV2ResponseGetCalculatedMaintenanceV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getCalculatedMaintenanceV2ResponseGetCalculatedMaintenanceV2ReturnItem instanceof \StructType\ExtMaintenanceCalculatedV2) {
                $invalidValues[] = is_object($getCalculatedMaintenanceV2ResponseGetCalculatedMaintenanceV2ReturnItem) ? get_class($getCalculatedMaintenanceV2ResponseGetCalculatedMaintenanceV2ReturnItem) : sprintf('%s(%s)', gettype($getCalculatedMaintenanceV2ResponseGetCalculatedMaintenanceV2ReturnItem), var_export($getCalculatedMaintenanceV2ResponseGetCalculatedMaintenanceV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getCalculatedMaintenanceV2Return property can only contain items of type \StructType\ExtMaintenanceCalculatedV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getCalculatedMaintenanceV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceCalculatedV2[] $getCalculatedMaintenanceV2Return
     * @return \StructType\GetCalculatedMaintenanceV2Response
     */
    public function setGetCalculatedMaintenanceV2Return(array $getCalculatedMaintenanceV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getCalculatedMaintenanceV2ReturnArrayErrorMessage = self::validateGetCalculatedMaintenanceV2ReturnForArrayConstraintsFromSetGetCalculatedMaintenanceV2Return($getCalculatedMaintenanceV2Return))) {
            throw new \InvalidArgumentException($getCalculatedMaintenanceV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getCalculatedMaintenanceV2Return = $getCalculatedMaintenanceV2Return;
        return $this;
    }
    /**
     * Add item to getCalculatedMaintenanceV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtMaintenanceCalculatedV2 $item
     * @return \StructType\GetCalculatedMaintenanceV2Response
     */
    public function addToGetCalculatedMaintenanceV2Return(\StructType\ExtMaintenanceCalculatedV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtMaintenanceCalculatedV2) {
            throw new \InvalidArgumentException(sprintf('The getCalculatedMaintenanceV2Return property can only contain items of type \StructType\ExtMaintenanceCalculatedV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getCalculatedMaintenanceV2Return[] = $item;
        return $this;
    }
}
