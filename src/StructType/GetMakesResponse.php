<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getMakesResponse StructType
 * @subpackage Structs
 */
class GetMakesResponse extends AbstractStructBase
{
    /**
     * The getMakesReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtCarType[]
     */
    public $getMakesReturn;
    /**
     * Constructor method for getMakesResponse
     * @uses GetMakesResponse::setGetMakesReturn()
     * @param \StructType\ExtCarType[] $getMakesReturn
     */
    public function __construct(array $getMakesReturn = array())
    {
        $this
            ->setGetMakesReturn($getMakesReturn);
    }
    /**
     * Get getMakesReturn value
     * @return \StructType\ExtCarType[]|null
     */
    public function getGetMakesReturn()
    {
        return $this->getMakesReturn;
    }
    /**
     * This method is responsible for validating the values passed to the setGetMakesReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetMakesReturn method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetMakesReturnForArrayConstraintsFromSetGetMakesReturn(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMakesResponseGetMakesReturnItem) {
            // validation for constraint: itemType
            if (!$getMakesResponseGetMakesReturnItem instanceof \StructType\ExtCarType) {
                $invalidValues[] = is_object($getMakesResponseGetMakesReturnItem) ? get_class($getMakesResponseGetMakesReturnItem) : sprintf('%s(%s)', gettype($getMakesResponseGetMakesReturnItem), var_export($getMakesResponseGetMakesReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getMakesReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getMakesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType[] $getMakesReturn
     * @return \StructType\GetMakesResponse
     */
    public function setGetMakesReturn(array $getMakesReturn = array())
    {
        // validation for constraint: array
        if ('' !== ($getMakesReturnArrayErrorMessage = self::validateGetMakesReturnForArrayConstraintsFromSetGetMakesReturn($getMakesReturn))) {
            throw new \InvalidArgumentException($getMakesReturnArrayErrorMessage, __LINE__);
        }
        $this->getMakesReturn = $getMakesReturn;
        return $this;
    }
    /**
     * Add item to getMakesReturn value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType $item
     * @return \StructType\GetMakesResponse
     */
    public function addToGetMakesReturn(\StructType\ExtCarType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtCarType) {
            throw new \InvalidArgumentException(sprintf('The getMakesReturn property can only contain items of type \StructType\ExtCarType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getMakesReturn[] = $item;
        return $this;
    }
}
