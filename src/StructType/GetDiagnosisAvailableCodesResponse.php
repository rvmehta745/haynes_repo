<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDiagnosisAvailableCodesResponse StructType
 * @subpackage Structs
 */
class GetDiagnosisAvailableCodesResponse extends AbstractStructBase
{
    /**
     * The getDiagnosisAvailableCodesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $getDiagnosisAvailableCodesReturn;
    /**
     * Constructor method for getDiagnosisAvailableCodesResponse
     * @uses GetDiagnosisAvailableCodesResponse::setGetDiagnosisAvailableCodesReturn()
     * @param string[] $getDiagnosisAvailableCodesReturn
     */
    public function __construct(array $getDiagnosisAvailableCodesReturn = array())
    {
        $this
            ->setGetDiagnosisAvailableCodesReturn($getDiagnosisAvailableCodesReturn);
    }
    /**
     * Get getDiagnosisAvailableCodesReturn value
     * @return string[]|null
     */
    public function getGetDiagnosisAvailableCodesReturn()
    {
        return $this->getDiagnosisAvailableCodesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetDiagnosisAvailableCodesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetDiagnosisAvailableCodesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetDiagnosisAvailableCodesReturnForArrayConstraintsFromSetGetDiagnosisAvailableCodesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDiagnosisAvailableCodesResponseGetDiagnosisAvailableCodesReturnItem) {
            // validation for constraint: itemType
            if (!is_string($getDiagnosisAvailableCodesResponseGetDiagnosisAvailableCodesReturnItem)) {
                $invalidValues[] = is_object($getDiagnosisAvailableCodesResponseGetDiagnosisAvailableCodesReturnItem) ? get_class($getDiagnosisAvailableCodesResponseGetDiagnosisAvailableCodesReturnItem) : sprintf('%s(%s)', gettype($getDiagnosisAvailableCodesResponseGetDiagnosisAvailableCodesReturnItem), var_export($getDiagnosisAvailableCodesResponseGetDiagnosisAvailableCodesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getDiagnosisAvailableCodesReturn property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getDiagnosisAvailableCodesReturn value
     * @throws \InvalidArgumentException
     * @param string[] $getDiagnosisAvailableCodesReturn
     * @return \StructType\GetDiagnosisAvailableCodesResponse
     */
    public function setGetDiagnosisAvailableCodesReturn(array $getDiagnosisAvailableCodesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getDiagnosisAvailableCodesReturnArrayErrorMessage = self::validateGetDiagnosisAvailableCodesReturnForArrayConstraintsFromSetGetDiagnosisAvailableCodesReturn($getDiagnosisAvailableCodesReturn))) {
            throw new \InvalidArgumentException($getDiagnosisAvailableCodesReturnArrayErrorMessage, __LINE__);
        }
        $this->getDiagnosisAvailableCodesReturn = $getDiagnosisAvailableCodesReturn;
        return $this;
    }
    /**
     * Add item to getDiagnosisAvailableCodesReturn value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\GetDiagnosisAvailableCodesResponse
     */
    public function addToGetDiagnosisAvailableCodesReturn($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The getDiagnosisAvailableCodesReturn property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getDiagnosisAvailableCodesReturn[] = $item;
        return $this;
    }
}
