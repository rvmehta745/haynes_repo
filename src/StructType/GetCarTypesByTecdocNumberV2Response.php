<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getCarTypesByTecdocNumberV2Response StructType
 * @subpackage Structs
 */
class GetCarTypesByTecdocNumberV2Response extends AbstractStructBase
{
    /**
     * The getCarTypesByTecdocNumberV2Return
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\ExtCarType[]
     */
    public $getCarTypesByTecdocNumberV2Return;
    /**
     * Constructor method for getCarTypesByTecdocNumberV2Response
     * @uses GetCarTypesByTecdocNumberV2Response::setGetCarTypesByTecdocNumberV2Return()
     * @param \StructType\ExtCarType[] $getCarTypesByTecdocNumberV2Return
     */
    public function __construct(array $getCarTypesByTecdocNumberV2Return = array())
    {
        $this
            ->setGetCarTypesByTecdocNumberV2Return($getCarTypesByTecdocNumberV2Return);
    }
    /**
     * Get getCarTypesByTecdocNumberV2Return value
     * @return \StructType\ExtCarType[]|null
     */
    public function getGetCarTypesByTecdocNumberV2Return()
    {
        return $this->getCarTypesByTecdocNumberV2Return;
    }
    /**
     * This method is responsible for validating the values passed to the setGetCarTypesByTecdocNumberV2Return method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetCarTypesByTecdocNumberV2Return method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetCarTypesByTecdocNumberV2ReturnForArrayConstraintsFromSetGetCarTypesByTecdocNumberV2Return(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCarTypesByTecdocNumberV2ResponseGetCarTypesByTecdocNumberV2ReturnItem) {
            // validation for constraint: itemType
            if (!$getCarTypesByTecdocNumberV2ResponseGetCarTypesByTecdocNumberV2ReturnItem instanceof \StructType\ExtCarType) {
                $invalidValues[] = is_object($getCarTypesByTecdocNumberV2ResponseGetCarTypesByTecdocNumberV2ReturnItem) ? get_class($getCarTypesByTecdocNumberV2ResponseGetCarTypesByTecdocNumberV2ReturnItem) : sprintf('%s(%s)', gettype($getCarTypesByTecdocNumberV2ResponseGetCarTypesByTecdocNumberV2ReturnItem), var_export($getCarTypesByTecdocNumberV2ResponseGetCarTypesByTecdocNumberV2ReturnItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The getCarTypesByTecdocNumberV2Return property can only contain items of type \StructType\ExtCarType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set getCarTypesByTecdocNumberV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType[] $getCarTypesByTecdocNumberV2Return
     * @return \StructType\GetCarTypesByTecdocNumberV2Response
     */
    public function setGetCarTypesByTecdocNumberV2Return(array $getCarTypesByTecdocNumberV2Return = array())
    {
        // validation for constraint: array
        if ('' !== ($getCarTypesByTecdocNumberV2ReturnArrayErrorMessage = self::validateGetCarTypesByTecdocNumberV2ReturnForArrayConstraintsFromSetGetCarTypesByTecdocNumberV2Return($getCarTypesByTecdocNumberV2Return))) {
            throw new \InvalidArgumentException($getCarTypesByTecdocNumberV2ReturnArrayErrorMessage, __LINE__);
        }
        $this->getCarTypesByTecdocNumberV2Return = $getCarTypesByTecdocNumberV2Return;
        return $this;
    }
    /**
     * Add item to getCarTypesByTecdocNumberV2Return value
     * @throws \InvalidArgumentException
     * @param \StructType\ExtCarType $item
     * @return \StructType\GetCarTypesByTecdocNumberV2Response
     */
    public function addToGetCarTypesByTecdocNumberV2Return(\StructType\ExtCarType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ExtCarType) {
            throw new \InvalidArgumentException(sprintf('The getCarTypesByTecdocNumberV2Return property can only contain items of type \StructType\ExtCarType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->getCarTypesByTecdocNumberV2Return[] = $item;
        return $this;
    }
}
